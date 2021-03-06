<?php

namespace MM\QuickOrder\Controller\Adminhtml\Grid;

use MM\QuickOrder\Api\Model\OrderInterfaceFactory;
use MM\QuickOrder\Api\Repository\OrderRepositoryInterface;
use MM\QuickOrder\Model\Order;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Exception\LocalizedException;
use Psr\Log\LoggerInterface;

class Save extends Action
{
    private $repository;

    private $modelFactory;

    private $dataPersistor;

    private $logger;

    public function __construct(
        Context $context,
        OrderRepositoryInterface $repository,
        OrderInterfaceFactory $orderFactory,
        DataPersistorInterface $dataPersistor,
        LoggerInterface $logger
    ) {
        $this->repository       = $repository;
        $this->modelFactory     = $orderFactory;
        $this->dataPersistor    = $dataPersistor;
        $this->logger           = $logger;

        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $data = $this->getRequest()->getPostValue();

        if ($data) {

            $model = $this->modelFactory->create();

            $id = $this->getRequest()->getParam('order_id');
            if ($id) {
                try {
                    $model = $this->repository->getById($id);
                } catch (LocalizedException $e) {
                    $this->messageManager->addErrorMessage(__('This user no longer exists.'));
                    $resultRedirect->setPath('*/*/listing');
                }
            }

            $model->setData($data);

            try {
                $this->repository->save($model);
                $this->messageManager->addSuccessMessage(__('You saved the user.'));
                $this->dataPersistor->clear('order');
                return $this->processReturn($model, $data, $resultRedirect);
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the user.'));
            }

            $this->dataPersistor->set('order', $data);
            return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
        }
        return $resultRedirect->setPath('*/*/listing');
    }

    private function processReturn($model, $data, $resultRedirect)
    {
        $redirect = $data['back'] ?? 'close';

        if ($redirect ==='continue') {
            $resultRedirect->setPath('*/*/edit', ['id' => $model->getId()]);
        } else if ($redirect === 'close') {
            $resultRedirect->setPath('*/*/listing');
        }

        return $resultRedirect;
    }
}
