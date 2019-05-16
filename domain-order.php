<?php

use Core\Page;
use Core\Model\User;
use \Core\Model\Order;
use \Core\Model\Consort;







$app->get( "/:desdomain/presente/:idorder", function( $desdomain, $idorder )
{

	$user = new User();

	$user->getFromUrl($desdomain);

	$consort = new Consort();

	$consort->getUserConsort($user->getiduser());

	$order = new Order();

	$order->getOrder((int)$idorder);

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