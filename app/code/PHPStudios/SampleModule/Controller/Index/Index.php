<?php

namespace PHPStudios\SampleModule\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\View\Result\PageFactory;
use Magento\Sales\Model\ResourceModel\Report\Bestsellers\Collection as PhpstudiosCollection;
use Magento\Sales\Model\ResourceModel\Report\Bestsellers\CollectionFactory as PhpstudiosCollectionfactory;
use PHPStudios\SampleModule\Model\ResourceModel\Sales\SampleModule;

class Index implements ActionInterface
{
    private $phpstudiosCollectionfactory;
    private $pageFactory;

    public function __construct(
        PageFactory $pageFactory,
        PhpstudiosCollectionfactory $phpstudiosCollectionfactory
    ) {
        $this->phpstudiosCollectionfactory=$phpstudiosCollectionfactory;
        $this->pageFactory = $pageFactory;
    }

    public function execute()
    {
        /** @var phpstudiosCollection $phpstudioscollection */
        $phpstudioscollection=$this->phpstudiosCollectionfactory->create();
        $table=SampleModule::MAIN_TABLE;
        return $this->pageFactory->create();
    }
}
