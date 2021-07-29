<?php
namespace PHPStudios\Simple\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Sales\Model\ResourceModel\Report\Bestsellers\Collection as BestsellersCollection;
use Magento\Sales\Model\ResourceModel\Report\Bestsellers\CollectionFactory as BestsellersCollectionFactory;
use PHPStudios\Simple\Model\ResourceModel\Sales\BestSellers;

class Index implements ActionInterface
{
    private $pageFactory;
    protected $bestsellersCollectionFactory;

    public function __construct(
        PageFactory $pageFactory,
        BestsellersCollectionFactory $bestsellersCollectionFactory
    ) {
        $this->pageFactory = $pageFactory;
        $this->bestsellersCollectionFactory=$bestsellersCollectionFactory;
    }

    public function execute()
    {
        /** @var BestsellersCollection $bestsellercollection */
        $bestsellercollection=$this->bestsellersCollectionFactory->create();
        $BestsellerTablename=BestSellers::MAIN_TABLE;
        $bestsellercollection->getSelect()
        ->joinLeft(
            $BestsellerTablename,
            "sales_bestsellers_aggregated_yearly.id=$BestsellerTablename.id"
        );
        var_dump($bestsellercollection->load()->getSelect()->__toString());
        die();
        $firstitem=$bestsellercollection->getItems();

        //return $this->pageFactory->create();
    }
}
