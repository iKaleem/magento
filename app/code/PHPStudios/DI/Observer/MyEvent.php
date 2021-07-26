<?php
namespace PHPStudios\DI\Observer;

use Magento\Framework\Event\ObserverInterface;

class MyEvent implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $quote_item = $observer->getEvent()->getQuoteItem();
        $quote_item->setOriginalCustomPrice($quote_item->getProduct()->getPrice()/2);
    }
}
