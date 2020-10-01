<?php

namespace PluginCart\UpdateAmount\Plugins;

class UpdateCart
{
    public function aroundAddProduct(\Magento\Checkout\Model\Cart $subject, \Closure $proceed, $productInfo, $requestInfo=null)
    {

        $productInfo['price'] = $productInfo['price'] + 50;
        return $proceed($productInfo, $requestInfo);
    }
}