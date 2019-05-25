<?php 

use \Core\Page;
use \Core\Model\Product;
//use \Core\Model\Category;







$app->post( '/webhook', function()
{

	$json = file_get_contents('php://input');
	// Converte os dados recebidos
	$input = json_decode($json, true);


	
	$post = $_POST;


	echo '<pre>';
		    var_dump($post);
		    var_dump($input);
		    exit;


	$logInput = fopen( 

		'input.txt'

		, 'a'

	);//end fopen

	fwrite($logInput, $input . PHP_EOL);

	fclose($logInput);


	$logPost = fopen( 'post.txt', 'a');

	fwrite($logPost, $post . PHP_EOL);

	fclose($logPost);

	/**/


	/*$products = Product::listAll();

	$page = new Page();

	$page->setTpl(
		
		"index", 

		[
			'products'=>Product::checkList($products)
			
		]
	
	);//end setTpl
	*/


});//END route






$app->get( '/api', function()
{

	//$products = Product::listAll();

	$page = new Page();

	$page->setTpl(
		
		"api"
	
	);//end setTpl

});//END route










?>