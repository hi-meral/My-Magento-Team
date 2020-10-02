<?php
namespace Eternus\BookInfoAdmin\Model\ResourceModel\Book;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Eternus\BookInfoAdmin\Model\Book as Model;
use Eternus\BookInfoAdmin\Model\ResourceModel\Book as ResourceModel;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}