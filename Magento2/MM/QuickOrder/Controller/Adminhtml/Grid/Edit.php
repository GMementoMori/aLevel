<?php

namespace MM\QuickOrder\Controller\Adminhtml\Grid;

use MM\QuickOrder\Api\Model\OrderInterfaceFactory;
use MM\QuickOrder\Api\Repository\OrderRepositoryInterface;
use MM\QuickOrder\Model\Order;
use Magento\Backend\App\Action;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;
use Magento\Backend\App\Action\Context;
use Magento\Framework\App\Request\DataPersistorInterface;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\Exception\LocalizedException;
use Psr\Log\LoggerInterface;

class Edit extends Action
{
    private $repository;

    private $modelFactory;

    private $dataPersistor;

    private $fullDate;

    private $logger;

    public function __construct(
        Context $context,
        OrderRepositoryInterface $repository,
        OrderInterfaceFactory $orderFactory,
        DataPersistorInterface $dataPersistor,
        TimezoneInterface $date,
        LoggerInterface $logger
    ) {
        $this->repository       = $repository;
        $this->modelFactory     = $orderFactory;
        $this->dataPersistor    = $dataPersistor;
        $this->fullDate        = $date;
        $this->logger           = $logger;

        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);

        $data = $this->getRequest()->getParam('status');

        $mainDate = $this->fullDate->date()->format('y-m-d h:i:s');
        
        if (!empty($data)) {

            $model = $this->modelFactory->create();

            $id = $this->getRequest()->getParam('id');

            if ($id) {
                try {
                    $model = $this->repository->getById($id);
                } catch (LocalizedException $e) {
                    $this->messageManager->addErrorMessage(__('This status no longer exists.'));
                    $resultRedirect->setPath('*/*/listing');
                }
            }

            $model->setStatus($data);

            $model->setUpdate_at($mainDate);

            try {
                $this->repository->save($model);
                $this->messageManager->addSuccessMessage(__("You saved status - $data"));
                $this->dataPersistor->clear('order');
                return $this->processReturn($model, $data, $resultRedirect);
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the status.'));
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
