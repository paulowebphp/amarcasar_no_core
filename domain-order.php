<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Cart;
use \Hcode\Model\Order;






$app->get( "/:desurl/order/:idorder", function( $desurl, $idorder )
{

	$user = new User();

	$user->getFromUrl($desurl);

	$order = new Order();

	$order->get((int)$idorder);

	
		

	$page = new Page();

	$page->setTpl(
		
		"templates" . 
		DIRECTORY_SEPARATOR . $user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "payment",
		
		[
			'user'=>$user->getValues(),
			'order'=>$order->getValues()

		]
	
	);//end setTpl

});//END route












?>