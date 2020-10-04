<?php

declare(strict_types=1);

namespace User\Module\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Result\Page;

class View extends Action
{
    public function execute()
    {
        /** @var Page $page */
        $page = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        /** @var Template $block */
        $block = $page->getLayout()->getBlock('user.module.layout.example');
        return $page;
    }

}