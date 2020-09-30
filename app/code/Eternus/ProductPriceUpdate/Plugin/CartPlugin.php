<?php

namespace Eternus\ProductPriceUpdate\Plugin;

class CartPlugin
{

	public function beforeAddProduct(\Magento\Checkout\Model\Cart $subject, $productInfo)
	{
		//echo $productInfo['price'];exit;
		$productInfo['price']=$productInfo['price']+50;
	}

}