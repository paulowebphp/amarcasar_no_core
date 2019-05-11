<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Cart;
use \Hcode\Model\Order;






$app->get( "/:desurl/presente/:idorder", function( $desurl, $idorder )
{

	$user = new User();

	$user->getFromUrl($desurl);

	

	$order = new Order();

	$order->get((int)$idorder);

	$product = $order->getProducts();

	$page = new Page();

	$page->setTpl(
		
		"templates" . 
		DIRECTORY_SEPARATOR . $user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "payment",
		
		[
			'product'=>$product,
			'user'=>$user->getValues(),
			'order'=>$order->getValues()

		]
	
	);//end setTpl

});//END route












?>