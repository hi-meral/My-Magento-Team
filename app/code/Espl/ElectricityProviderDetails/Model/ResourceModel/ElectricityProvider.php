<?php

namespace Espl\ElectricityProviderDetails\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class ElectricityProvider extends AbstractDb
{
    public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	)
	{
		parent::__construct($context);
	}

    protected function _construct()
    {
        $this->_init('espl_electricityproviders_info', 'provider_id');
    }
}