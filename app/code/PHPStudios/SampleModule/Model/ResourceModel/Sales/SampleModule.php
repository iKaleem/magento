<?php
namespace PHPStudios\SampleModule\Model\ResourceModel\Sales;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class SampleModule extends AbstractDb
{
    const MAIN_TABLE='phpstudios_sales_bestseller';
    const ID='id';
    protected $_isPkAutoIncrement = false;

    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID);
    }
}
