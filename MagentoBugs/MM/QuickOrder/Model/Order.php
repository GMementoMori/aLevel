<?php

namespace MM\QuickOrder\Model;

use Magento\Framework\Model\AbstractModel;
use MM\QuickOrder\Model\ResourceModel\Order as ResourceModel;

class Order extends AbstractModel
{
    protected function _construct()
    {
        $this -> _init(ResourceModel::class);
    }

}
