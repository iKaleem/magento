<?php

namespace PHPStudios\Simple\Model\ResourceModel\Sales\BestSellers;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use PHPStudios\Simple\Model\ResourceModel\Sales\BestSellers as BestsellerResourceModel;
use PHPStudios\Simple\Model\Sales\Bestsellers as BestsellersModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(BestsellersModel::class, BestsellerResourceModel::class);
    }
}
