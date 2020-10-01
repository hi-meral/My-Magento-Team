<?php
namespace Eternus\BookInfo\Block;


use Magento\Framework\View\Element\Template;
use Eternus\BookInfo\Model\ResourceModel\Book\Collection;

class Index extends Template
{
    /**
     * @var Collection
     */
    private $collection;

    /**
     * Hello constructor.
     * @param Template\Context $context
     * @param Collection $collection
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getAllBooks() {
        return $this->collection;
    }

    public function getAddBookPostUrl() {
        return $this->getUrl('bookinfo/book/add');
    }

}