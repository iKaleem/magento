<?php

namespace PHPStudios\Simple\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * Creating the Table with adding columns in it.
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $table=$setup->getConnection()->newTable(
            $setup->getTable('phpstudios_sample_item')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            ['identity'=>true,'nullable'=>false,'primary'=>true],
            'Item ID'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable'=>false],
            'Item Name'
        )->addIndex(
            $setup->getIdxName('phpstudios_sample_item', ['name']),
            ['name']
        )->setComment(
            'Sample Items'
        );
        $setup->getConnection()->createTable($table);
        $setup->endSetup();
    }
}
