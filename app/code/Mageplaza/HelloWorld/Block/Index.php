<?php
namespace Mageplaza\HelloWorld\Block;

use Magento\Framework\View\Element\Template;
use Mageplaza\HelloWorld\Model\ResourceModel\Post\Collection;

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
    public function __construct(Template\Context $context, Collection $collection, array $data = [])
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getAllPosts() {
        return $this->collection;
    }

    public function getAddDataPostUrl() {
        return $this->getUrl('mageplaza_helloworld/user/add');
    }
}