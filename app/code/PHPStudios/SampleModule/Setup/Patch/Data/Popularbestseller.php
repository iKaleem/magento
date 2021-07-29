<?php
namespace PHPStudios\SampleModule\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use PHPStudios\SampleModule\Model\ResourceModel\Sales\SampleModule as RModel;
use PHPStudios\SampleModule\Model\Sales\SampleModule;
use PHPStudios\SampleModule\Model\Sales\SampleModuleFactory;

class Popularbestseller implements DataPatchInterface
{
    /** @var ModuleDataSetupInterface  */
    protected $moduleDataSetup;

    /** @var RModel */
    protected $resourcemodel;

    /** @var SampleModuleFactory  */
    protected $sampleModuleFactory;

    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        RModel $resourcemodel,
        SampleModuleFactory $sampleModuleFactory
    ) {
        $this->moduleDataSetup=$moduleDataSetup;
        $this->resourcemodel=$resourcemodel;
        $this->sampleModuleFactory=$sampleModuleFactory;
    }

    public static function getDependencies()
    {
        return [];
    }
    public function getAliases()
    {
        return [];
    }

    public function apply()
    {
        $setup=$this->moduleDataSetup;
        $setup->startSetup();

        /** @var SampleModule $phpstudiosmodel */
        $phpstudiosmodel=$this->sampleModuleFactory->create();
        $data=[
            'id'=> 2,
            'is_featured'=>true,
            'name'=>'Muhammad Kaleem',
            'description'=>'Testing',
        ];

        $phpstudiosmodel->setData($data);
        $this->resourcemodel->save($phpstudiosmodel);
        $setup->endSetup();
    }
}
