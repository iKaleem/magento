<?php
namespace PHPStudios\Simple\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    /**
     * Inserting data into table
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $setup->getConnection()->insert(
            $setup->getTable('phpstudios_sample_item'),
            [
                  'name'=>'Coca Cola',
            ]
        );
        $setup->getConnection()->insert(
            $setup->getTable('phpstudios_sample_item'),
            [
                  'name'=>'Sprite',

              ]
        );
        $setup->endSetup();
    }
}
