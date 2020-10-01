<?php
namespace Espl\UserModel\Block;

use Magento\Framework\View\Element\Template;
use Espl\UserModel\Model\ResourceModel\User\Collection;

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

    public function getAllUsers() {
        return $this->collection;
    }

    public function getAddDataPostUrl() {
        return $this->getUrl('usermodel/user/add');
    }
}