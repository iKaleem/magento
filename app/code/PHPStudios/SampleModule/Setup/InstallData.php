<?php
namespace PHPStudios\SampleModule\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $setup->getConnection()->insert(
            $setup->getTable('custom_Table'),
            [
                'name'=>'Coca Cola',
                'price' => '30'
           ]
        );
        $setup->getConnection()->insert(
            $setup->getTable('custom_Table'),
            [
                'name'=>'H&S',
                'price' => '6500'
           ]
        );
        $setup->endSetup();
    }
}
