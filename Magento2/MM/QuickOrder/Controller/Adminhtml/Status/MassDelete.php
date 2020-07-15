<?php

namespace MM\QuickOrder\Controller\Adminhtml\Status;

use MM\QuickOrder\Api\Repository\StatusRepositoryInterface;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\NoSuchEntityException;
use Psr\Log\LoggerInterface;

class MassDelete extends Action
{

    private $repository;

    private $logger;

    public function __construct(
        Context $context,
        StatusRepositoryInterface $repository,
        LoggerInterface $logger
    ) {
        $this->repository = $repository;
        $this->logger     = $logger;
        parent::__construct($context);
    }

    public function execute()
    {
        if (!$this->getRequest()->isPost()) {
            return $this->_redirect('*/*/listing');
        }

        $ids = $this->getRequest()->getParam('selected');

        if (empty($ids)) {
            $this->messageManager->addWarningMessage(__("Please select ids"));
            return $this->_redirect('*/*/listing');
        }

        foreach ($ids as $id) {
            try {
                $this->repository->deleteById($id);
            } catch (NoSuchEntityException|CouldNotDeleteException $e) {
                $this->logger->info(sprintf("item %d already delete", $id));
            }
        }

        $this->messageManager->addSuccessMessage(sprintf("items %s was deleted", implode(',', $ids)));
        $this->_redirect('*/*/listing');
    }
}
