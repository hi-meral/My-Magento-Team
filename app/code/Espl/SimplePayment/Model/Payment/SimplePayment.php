<?php
namespace Espl\SimplePayment\Model\Payment;
class SimplePayment extends \Magento\Payment\Model\Method\AbstractMethod
{
    /**
     * Payment code
     *
     * @var string
     */
    protected $_code = 'simplepayment';
}