<?php

namespace Espl\ElectricityProviderDetails\Model;

use Magento\Framework\Model\AbstractModel;
use Espl\ElectricityProviderDetails\Model\ResourceModel\ElectricityProvider as ResourceModel;

class ElectricityProvider extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}