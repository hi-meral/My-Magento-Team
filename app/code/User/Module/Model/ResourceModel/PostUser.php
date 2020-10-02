<?php

namespace User\Module\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class PostUser extends AbstractDb
{
    public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}

    protected function _construct()
    {
        $this->_init('eternus_userTb', 'user_id');
    }
}