<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Cart;
use Hcode\Model\Product;





$app->get( "/:desurl/carrinho/:idproduct/adicionar", function( $desurl, $idproduct )
{
	

	$product = new Product();

	$product->getProduct((int)$idproduct);

	$cart = Cart::getFromSession();			

	$qtd = (isset($_GET['qtd'])) ? (int)$_GET['qtd'] : 1;

	for( $i = 0; $i < $qtd; $i++ )
	{
		
		$cart->addProduct($product);

	}//end for

	header("Location: /".$desurl."/carrinho");
	exit;

});//END route





$app->get( "/:desurl/carrinho/:idproduct/minus", function( $desurl, $idproduct )
{

	$product = new Product();

	$product->getProduct((int)$idproduct);

	$cart = Cart::getFromSession();
		

	$cart->removeProduct($product);

	header("Location: /".$desurl."/carrinho");
	exit;

});//END route








$app->get( "/:desurl/carrinho/:idproduct/remover", function( $desurl, $idproduct )
{

	$product = new Product();

	$product->getProduct((int)$idproduct);

	$cart = Cart::getFromSession();

	$cart->removeProduct($product, true);

	header("Location: /".$desurl."/carrinho");
	exit;

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