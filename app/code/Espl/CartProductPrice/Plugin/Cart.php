<?php

namespace Espl\CartProductPrice\Plugin;

class Cart
{
  public function aroundAddProduct(\Magento\Checkout\Model\Cart $subject, \Closure $proceed, $productInfo, $requestInfo = null)
  {
    $productInfo['price'] = $productInfo['price'] + 50;
    return $proceed($productInfo, $requestInfo);
  }
}
