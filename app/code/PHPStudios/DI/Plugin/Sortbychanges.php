<?php
namespace PHPStudios\DI\Plugin;

use Magento\Catalog\Block\Product\ProductList\Toolbar;

class Sortbychanges
{
    public function afterGetAvailableOrders(Toolbar $obj, $result)
    {
        $result['Muhammad Kaleem']='Muhammad Kaleem';
        return $result;
    }
}
