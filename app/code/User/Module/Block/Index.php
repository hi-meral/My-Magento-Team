<?php
namespace User\Module\Block;

use Magento\Framework\View\Element\Template;
use User\Module\Model\ResourceModel\PostUser\Collection;

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

    public function submitData() {
        return $this->getUrl('userdataModule/page/postuserdata');
    }
}