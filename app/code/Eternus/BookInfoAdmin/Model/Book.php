<?php

namespace Eternus\BookInfoAdmin\Model;

use Magento\Framework\Model\AbstractModel;
use Eternus\BookInfoAdmin\Model\ResourceModel\Book as ResourceModel;

class Book extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}