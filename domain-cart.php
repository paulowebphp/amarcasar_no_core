<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Cart;
use Hcode\Model\Product;





$app->get( "/:desdomain/carrinho/:idproduct/adicionar", function( $desdomain, $idproduct )
{
	

	$product = new Product();

	$product->getProduct((int)$idproduct);

	$cart = Cart::getFromSession();			

	$qtd = (isset($_GET['qtd'])) ? (int)$_GET['qtd'] : 1;

	for( $i = 0; $i < $qtd; $i++ )
	{
		
		$cart->addProduct($product);

	}//end for

	header("Location: /".$desdomain."/carrinho");
	exit;

});//END route





$app->get( "/:desdomain/carrinho/:idproduct/minus", function( $desdomain, $idproduct )
{

	$product = new Product();

	$product->getProduct((int)$idproduct);

	$cart = Cart::getFromSession();
		

	$cart->removeProduct($product);

	header("Location: /".$desdomain."/carrinho");
	exit;

});//END route








$app->get( "/:desdomain/carrinho/:idproduct/remover", function( $desdomain, $idproduct )
{

	$product = new Product();

	$product->getProduct((int)$idproduct);

	$cart = Cart::getFromSession();

	$cart->removeProduct($product, true);

	header("Location: /".$desdomain."/carrinho");
	exit;

});//END route






$app->get( "/:desdomain/carrinho", function( $desdomain )
{

		
	$user = new User();
	
	$user->getFromUrl($desdomain);

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