<?php


namespace MM\QuickOrder\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Status extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('mm_quickorder_status', 'status_id');
    }
}
