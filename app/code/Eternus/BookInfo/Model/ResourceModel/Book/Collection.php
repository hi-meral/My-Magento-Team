<?php
namespace Eternus\BookInfo\Model\ResourceModel\Book;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Eternus\BookInfo\Model\Book as Model;
use Eternus\BookInfo\Model\ResourceModel\Book as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}