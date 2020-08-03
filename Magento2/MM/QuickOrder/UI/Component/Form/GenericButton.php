<?php

namespace MM\QuickOrder\UI\Component\Form;

use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Exception\NoSuchEntityException;

use MM\QuickOrder\Api\Repository\StatusRepositoryInterface;

class GenericButton
{

    protected $context;

    protected $repository;

    public function __construct(
        Context $context,
        StatusRepositoryInterface $blockRepository
    ) {
        $this->context = $context;
        $this->repository = $blockRepository;
    }

    public function getStatusId()
    {
        try {
            return $this->repository->getById(
                $this->context->getRequest()->getParam('id')
            )->getId();
        } catch (NoSuchEntityException $e) {
        }
        return null;
    }

    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
