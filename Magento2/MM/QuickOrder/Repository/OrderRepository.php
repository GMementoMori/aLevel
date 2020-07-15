<?php

namespace MM\QuickOrder\Repository;

use MM\QuickOrder\Api\Model\OrderInterface;
use MM\QuickOrder\Api\Repository\OrderRepositoryInterface;
use MM\QuickOrder\Model\ResourceModel\Order as ResourceModel;
use MM\QuickOrder\Model\ResourceModel\Order\Collection;
use MM\QuickOrder\Model\ResourceModel\Order\CollectionFactory;
use MM\QuickOrder\Model\OrderFactory as ModelFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchResultsInterfaceFactory;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class OrderRepository implements OrderRepositoryInterface
{
    /**
     * @var ResourceModel
     */
    private $resource;

    /**
     * @var ModelFactory
     */
    private $modelFactory;

    /**
     * @var CollectionFactory
     */
    private $collectionFactory;

    /**
     * @var CollectionProcessorInterface
     */
    private $processor;

    /**
     * @var SearchResultsInterfaceFactory
     */
    private $searchResultFactory;

    public function __construct(
        ResourceModel $resource,
        ModelFactory $modeFactory,
        CollectionFactory $collectionFactory,
        CollectionProcessorInterface $collectionProcessor,
        SearchResultsInterfaceFactory $searchResultFactory
    ) {
        $this->resource             = $resource;
        $this->modelFactory         = $modeFactory;
        $this->collectionFactory    = $collectionFactory;
        $this->processor            = $collectionProcessor;
        $this->searchResultFactory  = $searchResultFactory;
    }

    /**
     * @inheritDoc
     */
    public function getById(int $id): OrderInterface
    {
        $order = $this->modelFactory->create();

        $this->resource->load($order, $id);

        if (empty($order->getId())) {
            throw new NoSuchEntityException(__("Order %1 not found", $id));
        }

        return $order;
    }

    /**
     * @inheritDoc
     */
    public function getList(SearchCriteriaInterface $searchCriteria): SearchResultsInterface
    {
        /** @var Collection $collection */
        $collection = $this->collectionFactory->create();

        $this->processor->process($searchCriteria, $collection);

        /** @var SearchResultsInterface $searchResult */
        $searchResult = $this->searchResultFactory->create();

        $searchResult->setSearchCriteria($searchCriteria);
        $searchResult->setTotalCount($collection->getSize());
        $searchResult->setItems($collection->getItems());

        return $searchResult;
    }

    /**
     * @inheritDoc
     */
    public function save(OrderInterface $order): OrderInterface
    {
        try {
            $this->resource->save($order);
        } catch (\Exception $e) {
            // added logger
            throw new CouldNotSaveException(__("Order could not save"));
        }

        return $order;
    }

    /**
     * @inheritDoc
     */
    public function delete(OrderInterface $order): OrderRepositoryInterface
    {
        try {
            $this->resource->delete($order);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException("Order not delete");
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function deleteById(int $id): OrderRepositoryInterface
    {
        $order = $this->getById($id);
        $this->delete($order);
        return $this;
    }
}
