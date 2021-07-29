<?php

namespace PHPStudios\Simple\Model\Sales;

use Magento\Framework\Model\AbstractModel;
use PHPStudios\Simple\Model\ResourceModel\Sales\Bestsellers as BestsellersResourceModel;

/**
 * Class Bestsellers
 * @package PHPStudios\Simple\Model\Sales
 */
class Bestsellers extends AbstractModel
{
    /**
     * Constructor making a link with resource model
     */
    protected function _construct()
    {
        $this->_init(BestsellersResourceModel::class);
    }
}
