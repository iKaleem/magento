<?php
namespace PHPStudios\SampleModule\Setup;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        $table=$setup->getConnection()->newTable(
            $setup->getTable('custom_Table')
        )->addColumn(
            'id',
            Table::TYPE_INTEGER,
            null,
            [
                'identity'=>true,'nullable'=>false,'primary'=>true
            ],
            'Item ID'
        )->addColumn(
            'name',
            Table::TYPE_TEXT,
            255,
            ['nullable'=>false],
            'Item Name'
        )->addColumn(
            'price',
            Table::TYPE_INTEGER,
            null,
            ['nullable'=>false],
            'Price'
        )->addIndex(
            $setup->getIdxName('custom_Table', ['name'], 'name'),
            [
                'name'
            ]
        )->addIndex(
            $setup->getIdxName('custom_Table', ['price'], 'price'),
            [
                'price'
            ]
        )->setComment(
            'Sample Items'
        );
        $setup->getConnection()->createTable($table);
        $setup->endSetup();
    }
}
