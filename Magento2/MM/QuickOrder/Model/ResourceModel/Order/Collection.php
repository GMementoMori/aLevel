<?php


namespace MM\QuickOrder\Model\ResourceModel\Order;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

use MM\QuickOrder\Model\Order as Model;
use MM\QuickOrder\Model\ResourceModel\Order as ResourceModel;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
