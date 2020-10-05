<?php

namespace Eternus\AdminNewPage\Model;

use Magento\Framework\Model\AbstractModel;
use Eternus\AdminNewPage\Model\ResourceModel\PostUser as ResourceModel;

class PostUser extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}