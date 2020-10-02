<?php
namespace User\Module\Model\ResourceModel\PostUser;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use User\Module\Model\PostUser as Model;
use User\Module\Model\ResourceModel\PostUser as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}