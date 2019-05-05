<?php

use Hcode\Page;
use Hcode\Model\Cart;
use Hcode\Model\Product;




$app->get( "/:desurl/cart", function()
{

	$cart = Cart::getFromSession();

	$page = new Page();

	$page->setTpl(
        
        "templates" . 
		DIRECTORY_SEPARATOR . $user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "cart", 
		
		[
			'cart'=>$cart->getValues(),
			'products'=>$cart->getProducts(),
			'error'=>Cart::getMsgError()
		]
	
	);//end setTpl

});//END route




$app->get( "/:desurl/cart/:idproduct/adicionar", function( $idproduct )
{

	$product = new Product();

	$product->get((int)$idproduct);

	$cart = Cart::getFromSession();

	$qtd = (isset($_GET['qtd'])) ? (int)$_GET['qtd'] : 1;

	for( $i = 0; $i < $qtd; $i++ )
	{
		
		$cart->addProduct($product);

	}//end for

	header("Location: /cart");
	exit;

});//END route






$app->get( "/cart/:idproduct/minus", function( $idproduct )
{

	$product = new Product();

	$product->get((int)$idproduct);

	$cart = Cart::getFromSession();

	$cart->removeProduct($product);

	header("Location: /cart");
	exit;

});//END route








$app->get( "/cart/:idproduct/remove", function( $idproduct )
{

	$product = new Product();

	$product->get((int)$idproduct);

	$cart = Cart::getFromSession();

	$cart->removeProduct($product, true);

	header("Location: /cart");
	exit;

});//END route







$app->post( "/cart/freight", function()
{

	$cart = Cart::getFromSession();

	$cart->setFreight($_POST['zipcode']);

	header("Location: /cart");
	exit;

});//END route





?>