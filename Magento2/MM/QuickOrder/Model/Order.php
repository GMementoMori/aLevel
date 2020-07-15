<?php

namespace MM\QuickOrder\Model;
 
use MM\QuickOrder\Api\Model\OrderInterface;
use Magento\Framework\Model\AbstractModel;
use MM\QuickOrder\Model\ResourceModel\Order as ResourceModel;

class Order extends AbstractModel implements OrderInterface
{
    const LABEL = 'update_at';

    protected function _construct()
    {
        $this -> _init(ResourceModel::class);
    }
}
