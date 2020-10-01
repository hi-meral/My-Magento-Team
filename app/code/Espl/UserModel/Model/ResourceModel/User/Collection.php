<?php
namespace Espl\UserModel\Model\ResourceModel\User;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Espl\UserModel\Model\User as Model;
use Espl\UserModel\Model\ResourceModel\User as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}