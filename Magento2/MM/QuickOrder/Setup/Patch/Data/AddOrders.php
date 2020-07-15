<?php

namespace MM\QuickOrder\Setup\Patch\Data;

use MM\QuickOrder\Model\OrderFactory;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\DB\TransactionFactory;

class AddOrders implements DataPatchInterface
{
    private $modelFactory;

    private $transactionFactory;

    public function __construct(
        OrderFactory $orderFactory,
        TransactionFactory $transactionFactory
    ) {
        $this -> modelFactory         = $orderFactory;
        $this -> transactionFactory   = $transactionFactory;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public function apply()
    {
        $transaction = $this -> transactionFactory -> create();

        for ($i = 0; $i < 2; $i++) {
            $model = $this -> modelFactory -> create();
            $model -> setSku('000');
            $model -> setName(sprintf("Order %d", $i));
            $model -> setPhone(rand(18, 999));
            $transaction -> addObject($model);
        }

        $transaction -> save();
    }
}
