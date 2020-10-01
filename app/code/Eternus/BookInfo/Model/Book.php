<?php

namespace Eternus\BookInfo\Model;

use Magento\Framework\Model\AbstractModel;
use Eternus\BookInfo\Model\ResourceModel\Book as ResourceModel;

class Book extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}