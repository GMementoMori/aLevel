<?php

namespace MM\QuickOrder\Api\Repository;

use MM\QuickOrder\Api\Model\OrderInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

interface OrderRepositoryInterface
{
    /**
     * Get user by ID
     *
     * @param int $id
     * @throws NoSuchEntityException
     * @return OrderInterface
     */
    public function getById(int $id) : OrderInterface;

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return SearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria) : SearchResultsInterface;

    /**
     * @param OrderInterface $order
     * @throws CouldNotSaveException
     * @return OrderInterface
     */
    public function save(OrderInterface $order) : OrderInterface;

    /**
     * @param OrderInterface $order
     * @throws CouldNotDeleteException
     * @return OrderRepositoryInterface
     */
    public function delete(OrderInterface $order) : OrderRepositoryInterface;

    /**
     * @param int $id
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     * @return OrderRepositoryInterface
     */
    public function deleteById(int $id) : OrderRepositoryInterface;
}
