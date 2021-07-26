<?php
namespace PHPStudios\SampleModule\Model\Sales;

use Magento\Framework\Model\AbstractModel;
use PHPStudios\SampleModule\Model\ResourceModel\Sales\SampleModule as  PHPStudiosResorceModel;

class SampleModule extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(PHPStudiosResorceModel::class);
    }
}
