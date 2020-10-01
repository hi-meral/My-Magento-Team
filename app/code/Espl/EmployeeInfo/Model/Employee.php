<?php

namespace Espl\EmployeeInfo\Model;

use Magento\Framework\Model\AbstractModel;
use Espl\EmployeeInfo\Model\ResourceModel\Employee as ResourceModel;

class Employee extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}