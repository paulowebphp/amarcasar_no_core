<?php 

use \Core\Page;
use \Core\Model\Product;
//use \Core\Model\Category;
//use \Core\Model\Cart;
//use \Core\Model\Address;
//use \Core\Model\User;
//use \Core\Model\Order;
//use \Core\Model\OrderStatus;






$app->get( '/site-casamento', function()
{
	

	$page = new Page();

	$page->setTpl(
		
		"site-features"
	
	);//end setTpl

});//END route




$app->get( '/lista-presentes', function()
{
	

	$page = new Page();

	$page->setTpl(
		
		"gifts-list"
	
	);//end setTpl

});//END route






$app->get( '/tarifas-condicoes', function()
{
	

	$page = new Page();

	$page->setTpl(
		
		"taxes-conditions"
	
	);//end setTpl

});//END route






$app->get( '/termos-lista', function()
{
	

	$page = new Page();

	$page->setTpl(
		
		"terms-list"
	
	);//end setTpl

});//END route





$app->get( '/modelos-layouts', function()
{
	

	$page = new Page();

	$page->setTpl(
		
		"templates-models"
	
	);//end setTpl

});//END route






$app->get( '/termos-uso', function()
{
	

	$page = new Page();

	$page->setTpl(
		
		"terms"
	
	);//end setTpl

});//END route





$app->get( '/politica-privacidade', function()
{
	

	$page = new Page();

	$page->setTpl(
		
		"privacy"
	
	);//end setTpl

});//END route




$app->get( '/contato', function()
{
	

	$page = new Page();

	$page->setTpl(
		
		"contact"
	
	);//end setTpl

});//END route







$app->get( '/quem-somos', function()
{
	

	$page = new Page();

	$page->setTpl(
		
		"about"
	
	);//end setTpl

});//END route




$app->get( '/central-ajuda', function()
{
	

	$page = new Page();

	$page->setTpl(
		
		"support"
	
	);//end setTpl

});//END route







$app->get( '/buscar', function()
{
	

	$page = new Page();

	$page->setTpl(
		
		"search"
	
	);//end setTpl

});//END route







?>