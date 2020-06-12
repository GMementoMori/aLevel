<?php


namespace MM\Light\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Product extends AbstractDb
{

    protected function _construct()
    {
        $this->_init('mm_light', 'product_id');
    }
}
