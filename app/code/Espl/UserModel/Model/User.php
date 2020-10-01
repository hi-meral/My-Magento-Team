<?php

namespace Espl\UserModel\Model;

use Magento\Framework\Model\AbstractModel;
use Espl\UserModel\Model\ResourceModel\User as ResourceModel;

class User extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}