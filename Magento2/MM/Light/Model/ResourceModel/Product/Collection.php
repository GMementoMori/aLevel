<?php


namespace MM\Light\Model\ResourceModel\Product;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

use MM\Light\Model\Product as Model;
use MM\Light\Model\ResourceModel\Product as ResourceModel;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
