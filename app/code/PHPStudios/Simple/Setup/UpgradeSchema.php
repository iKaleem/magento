<?php

namespace PHPStudios\Simple\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if (version_compare($context->getVersion(), '1.0.1', '<')) {
            $setup->getConnection()->addColumn(
                $setup->getTable('phpstudios_sample_item'),
                'description',
                [
                    'type'=>Table::TYPE_TEXT,
                    'nullable'=>true,
                    'comment'=>'Item Description'
                ]
            );
        }
        $setup->endSetup();
    }
}
