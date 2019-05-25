<?php 

use \Core\Page;
use \Core\Model\Product;
//use \Core\Model\Category;







$app->post( '/webhook', function()
{

	$json = file_get_contents('php://input');
	// Converte os dados recebidos
	$input = json_decode($json, true);


	/*if(!is_dir($dirUploads)){

		mkdir($dirUploads);
	}//end if*/

	
	//$post = $_POST;

	
	echo '<pre>';

	echo '2';
	var_dump($input->event);
	echo '<br><br><br><br><br>';

	//echo '3';
	//var_dump($input->getid());
	//echo '<br><br><br><br><br>';

	echo '4';
	var_dump($input->id);
	echo '<br><br><br><br><br>';

	echo '5';
	var_dump($input->event->id);
	echo '<br><br><br><br><br>';

	echo '6';
	var_dump($input->event->getid());
	echo '<br><br><br><br><br>';

	echo '1';
	var_dump($input);
	
	exit;


	$logInput = fopen( 

		'input.txt'

		, 'a+'

	);//end fopen

	fwrite($logInput, date('d/m/Y H:i:s') .  "\r\n\n" . $input .  "\r\n\n\n\n");

	fclose($logInput);


	
	/*$logPost = fopen( 'post.txt', 'a+');

	fwrite($logPost, $post . PHP_EOL);

	fclose($logPost);
*/


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