<?php

namespace MM\QuickOrder\Model;

use MM\QuickOrder\Api\Model\StatusInterface;
use Magento\Framework\Model\AbstractModel;
use MM\QuickOrder\Model\ResourceModel\Status as ResourceModel;

class Status extends AbstractModel implements StatusInterface
{

    protected function _construct()
    {
        $this -> _init(ResourceModel::class);
    }

}
