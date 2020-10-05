<?php

namespace Espl\ElectricityProviderAdmin\Model;

use Magento\Framework\Model\AbstractModel;
use Espl\ElectricityProviderAdmin\Model\ResourceModel\ElectricityProvider as ResourceModel;

class ElectricityProvider extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}