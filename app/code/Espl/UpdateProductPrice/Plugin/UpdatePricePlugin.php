<?php

namespace Espl\UpdateProductPrice\Plugin;

class UpdatePricePlugin{

    private $logger;

    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function beforeAddProduct(\Magento\Checkout\Model\Cart $subject, $productInfo)
	{  
        // echo gettype($productInfo);
        // echo $productInfo["name"];
        // exit;
        $productInfo["price"] = $productInfo["price"] + 50;
    }
    
}