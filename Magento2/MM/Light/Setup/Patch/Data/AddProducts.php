<?php

namespace MM\Light\Setup\Patch\Data;

use MM\Light\Model\ProductFactory;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\DB\TransactionFactory;

class AddProducts implements DataPatchInterface
{
    private $modelFactory;

    private $transactionFactory;

    public function __construct(
        ProductFactory $productFactory,
        TransactionFactory $transactionFactory
    ) {
        $this -> modelFactory         = $productFactory;
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

        for ($i = 0; $i < 10; $i++) {
            $model = $this -> modelFactory -> create();
            $model -> setName(sprintf("Samsung_%d", $i));
            $model -> setPrice(rand(18, 999));
            $transaction -> addObject($model);
        }

        $transaction -> save();
    }
}
