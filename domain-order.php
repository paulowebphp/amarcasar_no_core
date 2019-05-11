<?php

use Hcode\Page;
use Hcode\Model\User;
use \Hcode\Model\Order;
use \Hcode\Model\Consort;






$app->get( "/:desurl/presente/:idorder", function( $desurl, $idorder )
{

	$user = new User();

	$user->getFromUrl($desurl);

	$consort = new Consort();

	$consort->getUserConsort($user->getiduser());

	$order = new Order();

	$order->get((int)$idorder);

	$product = $order->getProducts();

	$page = new Page();

	$page->setTpl(
		
		"templates" . 
		DIRECTORY_SEPARATOR . $user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "payment",
		
		[
			'consort'=>$consort->getValues(),
			'product'=>$product,
			'user'=>$user->getValues(),
			'order'=>$order->getValues()

		]
	
	);//end setTpl

});//END route












?>