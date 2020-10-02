<?php
namespace User\Module\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;
    
    public function __construct(
       \Magento\Framework\View\Result\PageFactory $pageFactory,
       \Magento\Framework\App\Action\Context $context
       
    )
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }
    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
