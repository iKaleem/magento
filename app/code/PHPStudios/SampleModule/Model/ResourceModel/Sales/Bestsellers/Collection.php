<?php
namespace PHPStudios\SampleModule\Model\ResourceModel\Sales\Bestsellers;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use PHPStudios\SampleModule\Model\ResourceModel\Sales\SampleModule as ResourceModel;
use PHPStudios\SampleModule\Model\Sales\SampleModule as PHPStudiosModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(PHPStudiosModel::class, ResourceModel::class);
    }
}
