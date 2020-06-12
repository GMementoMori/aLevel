<?php

namespace MM\Light\Model;

use Magento\Framework\Model\AbstractModel;
use MM\Light\Model\ResourceModel\Product as ResourceModel;

class Product extends AbstractModel
{
    protected function _construct()
    {
        $this -> _init(ResourceModel::class);
    }

}
