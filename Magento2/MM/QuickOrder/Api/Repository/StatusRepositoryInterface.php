<?php

namespace MM\QuickOrder\Api\Repository;

use MM\QuickOrder\Api\Model\StatusInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;

interface StatusRepositoryInterface
{

    public function getById(int $id) : StatusInterface;

    public function getList(SearchCriteriaInterface $searchCriteria) : SearchResultsInterface;

    public function save(StatusInterface $status) : StatusInterface;

    public function delete(StatusInterface $status) : StatusRepositoryInterface;

    public function deleteById(int $id) : StatusRepositoryInterface;
}
