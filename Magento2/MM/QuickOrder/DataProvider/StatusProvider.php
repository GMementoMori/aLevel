<?php

namespace MM\QuickOrder\DataProvider;

use Magento\Ui\DataProvider\ModifierPoolDataProvider;
use Magento\Framework\App\Request\DataPersistorInterface;
use MM\QuickOrder\Api\Model\StatusInterface;
use MM\QuickOrder\Model\ResourceModel\Status\Collection;
use MM\QuickOrder\Model\ResourceModel\Status\CollectionFactory;

class StatusProvider extends ModifierPoolDataProvider
{
    private $colleciton;

    private $dataPersistor;

    private $loadedData = [];

    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        DataPersistorInterface $dataPersistor,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $collectionFactory->create();
        $this->dataPersistor = $dataPersistor;
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (!empty($this->loadedData)) {
            return $this->loadedData;
        }

        $items = $this->collection->getItems();

        foreach ($items as $status) {
            $this->loadedData[$status->getId()] = $status->getData();
        }

        $data = $this->dataPersistor->get('status');
        if (!empty($data)) {
            $status = $this->collection->getNewEmptyItem();
            $status->setData($data);
            $this->loadedData[$status->getId()] = $status->getData();
            $this->dataPersistor->clear('status');
        }

        return $this->loadedData;
    }
}
