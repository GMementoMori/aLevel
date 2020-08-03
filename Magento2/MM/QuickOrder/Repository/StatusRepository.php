<?php

namespace MM\QuickOrder\Repository;

use MM\QuickOrder\Api\Model\StatusInterface;
use MM\QuickOrder\Api\Repository\StatusRepositoryInterface;
use MM\QuickOrder\Model\ResourceModel\Status as ResourceModel;
use MM\QuickOrder\Model\ResourceModel\Status\Collection;
use MM\QuickOrder\Model\ResourceModel\Status\CollectionFactory;
use MM\QuickOrder\Model\StatusFactory as ModelFactory;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchResultsInterfaceFactory;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class StatusRepository implements StatusRepositoryInterface
{

    private $resource;

    private $modelFactory;

    private $collectionFactory;

    private $processor;

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

    public function getById(int $id): StatusInterface
    {
        $order = $this->modelFactory->create();

        $this->resource->load($order, $id);

        if (empty($order->getId())) {
            throw new NoSuchEntityException(__("Status %1 not found", $id));
        }

        return $order;
    }

    public function getList(SearchCriteriaInterface $searchCriteria): SearchResultsInterface
    {
        $collection = $this->collectionFactory->create();

        $this->processor->process($searchCriteria, $collection);

        $searchResult = $this->searchResultFactory->create();

        $searchResult->setSearchCriteria($searchCriteria);
        $searchResult->setTotalCount($collection->getSize());
        $searchResult->setItems($collection->getItems());

        return $searchResult;
    }

    public function save(StatusInterface $status): StatusInterface
    {
        try {
            $this->resource->save($status);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__("Status could not save"));
        }

        return $status;
    }

    public function delete(StatusInterface $status): StatusRepositoryInterface
    {
        try {
            $this->resource->delete($status);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException("Order not delete");
        }

        return $this;
    }

    public function deleteById(int $id): StatusRepositoryInterface
    {
        $status = $this->getById($id);
        $this->delete($status);
        return $this;
    }
}
