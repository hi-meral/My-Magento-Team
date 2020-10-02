<?php

namespace User\Module\Model;

use Magento\Framework\Model\AbstractModel;
use User\Module\Model\ResourceModel\PostUser as ResourceModel;

class PostUser extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}