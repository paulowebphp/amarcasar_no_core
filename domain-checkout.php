<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Cart;
use Hcode\Model\Product;
use \Hcode\Model\Address;
use \Hcode\Model\Order;
use \Hcode\Model\OrderStatus;





$app->get( "/:desurl/checkout", function( $desurl )
{
	$user = new User();
	
	$user->getFromUrl($desurl);

	$address = new Address();

	$cart = Cart::getFromSession();

	if( !isset($_GET['zipcode']) )
	{

		$_GET['zipcode'] = $cart->getdeszipcode();

	}//end if



	if ( isset($_GET['zipcode']) )
	{

		$address->loadFromCEP($_GET['zipcode']);

		$cart->setdeszipcode($_GET['zipcode']);

		$cart->save();

		//$cart->getCalculateTotal();

	}//end if




	if( !$address->getdesaddress() ) $address->setdesaddress('');
	if( !$address->getdesnumber() ) $address->setdesnumber('');
	if( !$address->getdescomplement() ) $address->setdescomplement('');
	if( !$address->getdesdistrict() ) $address->setdesdistrict('');
	if( !$address->getdescity() ) $address->setdescity('');
	if( !$address->getdesstate() ) $address->setdesstate('');
	if( !$address->getdescountry() ) $address->setdescountry('');
	if( !$address->getdeszipcode() ) $address->setdeszipcode('');



	$page = new Page();

	$page->setTpl(
		
		"checkout", 
		
		[
			
			'cart'=>$cart->getValues(),
			'address'=>$address->getValues(),
			'products'=>$cart->getProducts(),
			'error'=>Address::getMsgError()
			
		]
	
	);//end setTpl

});//END route







$app->get( "/:desurl/carrinho", function( $desurl )
{
	

	$user = new User();
	
	$user->getFromUrl($desurl);

	$cart = Cart::getFromSession();


	$page = new Page();

	$page->setTpl(
        
        "templates" . 
		DIRECTORY_SEPARATOR . $user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "cart", 
		
		[
			'totals'=>$cart->getProductsTotals(),
			'user'=>$user->getValues(),
			'cart'=>$cart->getValues(),
			'products'=>$cart->getProducts(),
			'error'=>Cart::getMsgError()
		]
	
	);//end setTpl

});//END route







?>