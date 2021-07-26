<?php

namespace PHPStudios\DI\Plugin;

use Magento\Customer\Api\Data\CustomerInterface;
use Magento\Customer\Model\ResourceModel\CustomerRepository;

class CustomerName
{
    public function beforeSave(
        CustomerRepository $customerRepository,
        CustomerInterface $customer,
        $hash = null
    ) {
        $firstname=$customer->getFirstname();
        if (strlen($firstname) > 5) {
            $customer->setFirstname(substr($firstname, 0, 5));
        }
        return [$customer, $hash];
    }
}
