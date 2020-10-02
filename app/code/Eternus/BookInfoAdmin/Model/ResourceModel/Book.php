<?php
namespace Eternus\BookInfoAdmin\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Book extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('book_info', 'book_id');
    }
}