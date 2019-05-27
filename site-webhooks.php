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



	
	$logOrder = fopen( 

		'input.txt'

		, 'a+'

	);//end fopen

	fwrite($logOrder, date('d/m/Y H:i:s') .  "\r\n\n" . $data .  "\r\n\n\n\n");

	fclose($logOrder);


	
	



	/*$orderData = 'Event: ' . $data['event'] . PHP_EOL;
	$orderData .= 'Order: ' . $data['resource']['order']['id'] . PHP_EOL;
	$orderData .= 'Payment: ' . $data['resource']['order']['payments'][0]['id'] . PHP_EOL;
	$orderData .= 'Customer: ' . $data['resource']['order']['customer']['id'] . PHP_EOL;
	$orderData .= 'Account: ' . $data['resource']['order']['customer']['moipAccount']['id'] . PHP_EOL;
	$orderData .= 'Sku: ' . $data['resource']['order']['ownId'] . PHP_EOL;




	$logOrder = fopen( 

		'input.txt'

		, 'a+'

	);//end fopen

	fwrite($logOrder, date('d/m/Y H:i:s') .  "\r\n\n" . $orderData .  "\r\n\n\n\n");

	fclose($logOrder);






	$paymentData = 'Event: ' . $data['event'] . PHP_EOL;
	$paymentData .= 'Payment: ' . $data['resource']['payment']['id'] . PHP_EOL;
	$paymentData .= 'Order: ' . $data['resource']['payment']['_links']['order']['title'] . PHP_EOL;
	$paymentData .= 'Account: ' . $data['resource']['payment']['receivers'][1]['moipAccount']['id'] . PHP_EOL;





	$logPayment = fopen( 

		'input.txt'

		, 'a+'

	);//end fopen

	fwrite($logPayment, date('d/m/Y H:i:s') .  "\r\n\n" . $paymentData .  "\r\n\n\n\n");

	fclose($logPayment);*/


	


	
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