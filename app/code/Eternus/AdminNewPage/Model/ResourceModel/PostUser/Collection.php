<?php
namespace Eternus\AdminNewPage\Model\ResourceModel\PostUser;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Eternus\AdminNewPage\Model\PostUser as Model;
use Eternus\AdminNewPage\Model\ResourceModel\PostUser as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}