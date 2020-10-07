<?php

namespace TestVendor\TestPayment\Model;

/**
 * Pay In Store payment method model
 */
class TestPayment extends \Magento\Payment\Model\Method\AbstractMethod
{

    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = 'testpayment';

    /**
     * Availability option
     *
     * @var bool
     */
    protected $_isOffline = true;

}
