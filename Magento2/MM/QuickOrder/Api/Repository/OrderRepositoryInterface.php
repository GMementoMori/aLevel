<?php

namespace MM\QuickOrder\Api\Repository;

use MM\QuickOrder\Api\Model\OrderInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;

interface OrderRepositoryInterface
{

    public function getById(int $id) : OrderInterface;

    public function getList(SearchCriteriaInterface $searchCriteria) : SearchResultsInterface;

    public function save(OrderInterface $order) : OrderInterface;

    public function delete(OrderInterface $order) : OrderRepositoryInterface;

    public function deleteById(int $id) : OrderRepositoryInterface;
}
