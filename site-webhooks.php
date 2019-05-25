<?php 

use \Core\Page;
use \Core\Model\Product;
//use \Core\Model\Category;







$app->post( '/webhook', function()
{

	$json = file_get_contents('php://input');
	// Converte os dados recebidos
	$data = json_decode($json, true);


	/*if(!is_dir($dirUploads)){

		mkdir($dirUploads);
	}//end if*/

	
	//$post = $_POST;

	$input = 'Customer: ' . $data['resource']['order']['customer']['id'] . PHP_EOL;
	$input += 'Account: ' . $data['resource']['order']['customer']['moipAccount']['id'] . PHP_EOL;
	$input += 'Order: ' . $data['resource']['order']['id'] . PHP_EOL;
	$input += 'Order Own Id: ' . $data['resource']['order']['ownId'] . PHP_EOL;
	$input += 'Payment: ' . $data['resource']['order']['payments'][0]['id'] . PHP_EOL;
	$input += 'Event: ' . $data['event'] . PHP_EOL;

	

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