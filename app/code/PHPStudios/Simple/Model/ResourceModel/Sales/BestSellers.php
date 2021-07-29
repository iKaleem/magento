<?php

namespace PHPStudios\Simple\Model\ResourceModel\Sales;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class BestSellers
 * @package PHPStudios\Simple\Model\ResourceModel\Sales
 */
class BestSellers extends AbstractDb
{
    /**
     * Store the Table name
     */
    const MAIN_TABLE='phpstudios_simple_sale_bestsellers';

    /**
     * Store the primary key of the table
     */
    const PRIMARY_KEY= 'id';

    protected $_isPkAutoIncrement=false;
    /**
     * Constructor create link with database
     */
    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::PRIMARY_KEY);
    }
}
