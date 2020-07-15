<?php

namespace MM\QuickOrder\Controller\Record;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use MM\QuickOrder\Model\Order;
class Add extends Action
{
  protected $model;

  public function __construct(
          Context $context,
          Order $model
      ) {
          $this -> model = $model;
          parent::__construct($context);
      }


      public function execute()
      {
          $fullDate = date("y-m-d h:i:s");
          $name = $this->getRequest()->getParam('name');
          $phone = $this->getRequest()->getParam('phone');
          $email = $this->getRequest()->getParam('email');
          $sku = $this->getRequest()->getParam('sku');

          if ((isset($name) && $name !== ' ') &&
              (isset($phone) && $phone !== ' ') &&
              (isset($sku) && $sku !== ' ')) {

                $this -> model->setName($name);
                $this -> model->setSku($sku);
                $this -> model->setPhone($phone);
                $this -> model->setEmail($email);
                $this -> model->setUpdate_at($fullDate);
                $this -> model->setCreate_at($fullDate);
                $this -> model->setStatus('During');
                $this -> model->save();
          }

      }
}
