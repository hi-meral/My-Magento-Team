<?php

namespace Espl\EmployeesMenu\Model;

use Magento\Framework\Model\AbstractModel;
use Espl\EmployeesMenu\Model\ResourceModel\Employee as ResourceModel;

class Employee extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}