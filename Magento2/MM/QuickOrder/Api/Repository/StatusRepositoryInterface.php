<?php

namespace MM\QuickOrder\Api\Repository;

use MM\QuickOrder\Api\Model\StatusInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\SearchResultsInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

interface StatusRepositoryInterface
{
    /**
     * Get user by ID
     *
     * @param int $id
     * @throws NoSuchEntityException
     * @return StatusInterface
     */
    public function getById(int $id) : StatusInterface;

    /**
     * @param SearchCriteriaInterface $searchCriteria
     * @return SearchResultsInterface
     */
    public function getList(SearchCriteriaInterface $searchCriteria) : SearchResultsInterface;

    /**
     * @param StatusInterface $status
     * @throws CouldNotSaveException
     * @return StatusInterface
     */
    public function save(StatusInterface $status) : StatusInterface;

    /**
     * @param StatusInterface $status
     * @throws CouldNotDeleteException
     * @return StatusRepositoryInterface
     */
    public function delete(StatusInterface $status) : StatusRepositoryInterface;

    /**
     * @param int $id
     * @throws CouldNotDeleteException
     * @throws NoSuchEntityException
     * @return StatusRepositoryInterface
     */
    public function deleteById(int $id) : StatusRepositoryInterface;
}
