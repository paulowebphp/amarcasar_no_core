<?php

use Core\PageDomain;
use Core\Model\User;
use Core\Model\Cart;
use Core\Model\Product;





$app->get( "/:desdomain/carrinho/:idproduct/adicionar", function( $desdomain, $idproduct )
{
	

	$product = new Product();

	//$product->getProduct((int)$idproduct);

	$cart = Cart::getFromSession();			

	$qtd = (isset($_GET['qtd'])) ? (int)$_GET['qtd'] : 1;

	for( $i = 0; $i < $qtd; $i++ )
	{
		
		$cart->addItem($idproduct, 1);

	}//end for

	$cart->getCalculateTotal();


	header("Location: /".$desdomain."/carrinho");
	exit;

});//END route






/*$app->get( "/:desdomain/carrinho/:idproduct/adicionar", function( $desdomain, $idproduct )
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

});//END route*/





$app->get( "/:desdomain/carrinho/:idproduct/minus", function( $desdomain, $idproduct )
{

	$product = new Product();

	$product->getProduct((int)$idproduct);

	$cart = Cart::getFromSession();


	$cart->removeItem($idproduct);

	$cart->getCalculateTotal();


	header("Location: /".$desdomain."/carrinho");
	exit;

});//END route







/*$app->get( "/:desdomain/carrinho/:idproduct/minus", function( $desdomain, $idproduct )
{

	$product = new Product();

	$product->getProduct((int)$idproduct);

	$cart = Cart::getFromSession();

	$cart->removeProduct($product);

	header("Location: /".$desdomain."/carrinho");
	exit;

});//END route*/








$app->get( "/:desdomain/carrinho/:idproduct/remover", function( $desdomain, $idproduct )
{

	$product = new Product();

	$product->getProduct((int)$idproduct);

	$cart = Cart::getFromSession();

	$cart->removeItem($idproduct, true);

	$cart->getCalculateTotal();

	header("Location: /".$desdomain."/carrinho");
	exit;

});//END route







/*$app->get( "/:desdomain/carrinho/:idproduct/remover", function( $desdomain, $idproduct )
{

	$product = new Product();

	$product->getProduct((int)$idproduct);

	$cart = Cart::getFromSession();

	$cart->removeProduct($product, true);

	header("Location: /".$desdomain."/carrinho");
	exit;

});//END route*/






$app->get( "/:desdomain/carrinho", function( $desdomain )
{

		
	$user = new User();
	
	$user->getFromUrl($desdomain);

	$cart = Cart::getFromSession();

	
	


	$page = new PageDomain();

	$page->setTpl(
        
        $user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "cart", 
		
		[
			'totals'=>$cart->getProductsTotals(),
			'user'=>$user->getValues(),
			'cart'=>$cart->getValues(),
			'products'=>$cart->getProducts(),
			'error'=>Cart::getError(),

		]
	
	);//end setTpl

});//END route







?>