<?php


namespace MM\QuickOrder\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Order extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('mm_quickorder', 'order_id');
    }
}
