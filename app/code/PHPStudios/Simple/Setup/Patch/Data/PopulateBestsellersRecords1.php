<?php

namespace PHPStudios\Simple\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use PHPStudios\Simple\Model\ResourceModel\Sales\BestSellers as BestsellersResourceModel;
use PHPStudios\Simple\Model\Sales\Bestsellers;
use PHPStudios\Simple\Model\Sales\BestsellersFactory;

/**
 * Class PopulateBestsellersRecords1
 * @package PHPStudios\Simple\Setup\Patch\Data
 */
class PopulateBestsellersRecords1 implements DataPatchInterface
{
    /** @var ModuleDataSetupInterface  */
    protected $moduleDataSetup;

    /** @var BestsellersResourceModel  */
    protected $bestsellerResourceModel;

    /** @var BestSellersFactory  */
    protected $bestSellersFactory;

    /**
     * PopulateBestsellersRecords1 constructor.
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param BestsellersResourceModel $bestsellerResourceModel
     * @param BestsellersFactory $bestSellersFactory
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        BestsellersResourceModel $bestsellerResourceModel,
        BestSellersFactory $bestSellersFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->bestsellerResourceModel = $bestsellerResourceModel;
        $this->bestSellersFactory = $bestSellersFactory;
    }

    /**
     * @return array
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * @return array
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * @return PopulateBestsellersRecords1|void
     * @throws \Magento\Framework\Exception\AlreadyExistsException
     */
    public function apply()
    {
        $setup = $this->moduleDataSetup;
        $setup->startSetup();

        /** @var Bestsellers $bestsellers */
        $bestsellers = $this->bestSellersFactory->create();
        $data = [
            'is_featured' => true,
        ];

        $bestsellers->setData($data);
        $this->bestsellerResourceModel->save($bestsellers);
        $setup->endSetup();
    }
}
