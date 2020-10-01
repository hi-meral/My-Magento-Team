<?php

namespace Espl\ElectricityProviderDetails\Block;

use Magento\Framework\View\Element\Template;
use  Espl\ElectricityProviderDetails\Model\ResourceModel\ElectricityProvider\Collection;

class Index extends Template
{
    private $collection;

    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getAllElectricityProviders() {
        return $this->collection;
    }

    public function getAddProviderPostUrl() {
        return $this->getUrl('electricityproviderdetails/provider/add');
    }
}