<?php

namespace MM\QuickOrder\DataProvider;

use Magento\Ui\DataProvider\ModifierPoolDataProvider;
use Magento\Framework\App\Request\DataPersistorInterface;
use MM\QuickOrder\Api\Model\OrderInterface;
use MM\QuickOrder\Model\ResourceModel\Order\Collection;
use MM\QuickOrder\Model\ResourceModel\Order\CollectionFactory;

class OrderProvider extends ModifierPoolDataProvider
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

        foreach ($items as $order) {
            $this->loadedData[$order->getId()] = $order->getData();
        }

        $data = $this->dataPersistor->get('order');
        if (!empty($data)) {
            $order = $this->collection->getNewEmptyItem();
            $order->setData($data);
            $this->loadedData[$order->getId()] = $order->getData();
            $this->dataPersistor->clear('order');
        }

        return $this->loadedData;
    }
}
