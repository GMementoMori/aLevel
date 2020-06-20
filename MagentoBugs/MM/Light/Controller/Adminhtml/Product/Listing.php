<?php
namespace MM\Light\Controller\Adminhtml\Product;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Listing extends Action
{
    /** {@inheritDoc} */
    public function execute()
    {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }

    public function _isAllowed()
    {
        return parent::_isAllowed();
    }
}
