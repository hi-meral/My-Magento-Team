<?php
namespace Espl\ElectricityProviderAdmin\Model\ResourceModel\ElectricityProvider;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Espl\ElectricityProviderAdmin\Model\ElectricityProvider as Model;
use Espl\ElectricityProviderAdmin\Model\ResourceModel\ElectricityProvider as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}