<?php
namespace Espl\EmployeesMenu\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Espl\EmployeesMenu\Model\Employee as Model;
use Espl\EmployeesMenu\Model\ResourceModel\Employee as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}