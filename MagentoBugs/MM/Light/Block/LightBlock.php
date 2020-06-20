<?php
namespace MM\Light\Block;


class LightBlock extends \Magento\Framework\View\Element\Template
{
    protected $lightModelFactory;

    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \MM\Light\Model\Product $lightModelFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this-> lightModelFactory = $lightModelFactory;
    }

    public function getProductCollection()
    {
        $collection = $this-> lightModelFactory->getCollection()->getData();
        return $collection;
    }
}
