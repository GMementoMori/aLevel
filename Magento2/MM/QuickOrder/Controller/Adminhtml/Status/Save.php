<?php

namespace MM\QuickOrder\Controller\Adminhtml\Status;

use MM\QuickOrder\Api\Model\StatusInterfaceFactory;
use MM\QuickOrder\Api\Repository\StatusRepositoryInterface;
use MM\QuickOrder\Model\Status;
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
        StatusRepositoryInterface $repository,
        StatusInterfaceFactory $statusFactory,
        DataPersistorInterface $dataPersistor,
        LoggerInterface $logger
    ) {
        $this->repository       = $repository;
        $this->modelFactory     = $statusFactory;
        $this->dataPersistor    = $dataPersistor;
        $this->logger           = $logger;

        parent::__construct($context);
    }

    public function execute()
    {
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $data = $this->getRequest()->getPostValue();

        if (!empty($data)) {

            $model = $this->modelFactory->create();

            $id = $this->getRequest()->getParam('status_id');
            if ($id) {
                $model = $this->repository->getById($id);
                $model->setData($data);
            }else{
                $model->setStatus($data['status']);
            }

            try {
                $this->repository->save($model);
                $this->messageManager->addSuccessMessage(__("You saved status"));
                $this->dataPersistor->clear('status');
                return $this->processReturn($model, $data, $resultRedirect);
            } catch (LocalizedException $e) {
                $this->messageManager->addErrorMessage($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addExceptionMessage($e, __('Something went wrong while saving the status.'));
            }

            $this->dataPersistor->set('status', $data);
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
