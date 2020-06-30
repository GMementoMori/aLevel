<?php

namespace MM\QuickOrder\UI\Component\Form;

use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Exception\NoSuchEntityException;

use MM\QuickOrder\Api\Repository\OrderRepositoryInterface;

class GenericButton
{
    /**
     * @var Context
     */
    protected $context;

    /**
     * @var OrderRepositoryInterface
     */
    protected $repository;

    /**
     * @param Context $context
     * @param OrderRepositoryInterface $blockRepository
     */
    public function __construct(
        Context $context,
        OrderRepositoryInterface $blockRepository
    ) {
        $this->context = $context;
        $this->repository = $blockRepository;
    }

    /**
     * Return CMS block ID
     *
     * @return int|null
     */
    public function getUserId()
    {
        try {
            return $this->repository->getById(
                $this->context->getRequest()->getParam('id')
            )->getId();
        } catch (NoSuchEntityException $e) {
        }
        return null;
    }

    /**
     * Generate url by route and parameters
     *
     * @param   string $route
     * @param   array $params
     * @return  string
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }
}
