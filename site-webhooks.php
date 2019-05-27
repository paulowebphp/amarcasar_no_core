<?php 

use \Core\Page;
use \Core\Model\Payment;
use \Core\Model\PaymentStatus;







$app->post( '/webhook', function()
{

	$json = file_get_contents('php://input');

	$data = json_decode($json, true);

	$status = explode('.', $data['event']);






	$inpaymentstatus = PaymentStatus::getStatus( $status[1] );



	$dataPayment = Payment::getFromDespaymentcode( $data['resource']['payment']['id'] );


			echo '<pre>';
		    var_dump($dataPayment);
		    var_dump((int)$dataPayment['idpayment']);
		    var_dump($dataPayment['idpayment']);
		    var_dump((int)$dataPayment['inpaymentstatus']);
		    var_dump($dataPayment['inpaymentstatus']);
		    exit;	



	if( !$dataPayment == false )
	{

		Payment::updateFromNotification( (int)$dataPayment['idpayment'], (int)$dataPayment['inpaymentstatus'] );

	}//end if
	else
	{

		unset($dataPayment);
		unset($inpaymentstatus);
		unset($status);
		unset($data);
		unset($json);

	}//end else



	
	#$paymentData = 'Event: ' . $data['event'] . PHP_EOL;
	#$paymentData .= 'Payment: ' . $data['resource']['payment']['id'] . PHP_EOL;
	#$paymentData .= 'Order: ' . $data['resource']['payment']['_links']['order']['title'] . PHP_EOL;
	#$paymentData .= 'Account: ' . $data['resource']['payment']['receivers'][1]['moipAccount']['id'] . PHP_EOL;
	

	#$orderData = 'Event: ' . $data['event'] . PHP_EOL;
	#$orderData .= 'Order: ' . $data['resource']['order']['id'] . PHP_EOL;
	#$orderData .= 'Payment: ' . $data['resource']['order']['payments'][0]['id'] . PHP_EOL;
	#$orderData .= 'Customer: ' . $data['resource']['order']['customer']['id'] . PHP_EOL;
	#$orderData .= 'Account: ' . $data['resource']['order']['customer']['moipAccount']['id'] . PHP_EOL;
	#$orderData .= 'Sku: ' . $data['resource']['order']['ownId'] . PHP_EOL;


	#if(!is_dir($dirUploads)) mkdir($dirUploads);


	#$logOrder = fopen( 'input.txt', 'a+');//end fopen
	#fwrite($logOrder, date('d/m/Y H:i:s') .  "\r\n\n" . $orderData .  "\r\n\n\n\n");
	#fclose($logOrder);


});//END route










?>