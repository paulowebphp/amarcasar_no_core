<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Cart;
use Hcode\Model\Product;
use \Hcode\Model\Address;
use \Hcode\Model\Order;
use \Hcode\Model\OrderStatus;
use \Hcode\Model\Payment;













$app->post( "/:desurl/checkout", function( $desurl )
{

	$user = new User();
	
	$user->getFromUrl($desurl);

	if( 
		
		!isset($_POST['zipcode']) 
		|| 
		$_POST['zipcode'] === ''
	)
	{

		Address::setMsgError("Informe o CEP.");
		header('Location: /'.$desurl.'/checkout');
		exit;
		
	}//end if




	if(
		!isset($_POST['desaddress']) 
		|| 
		$_POST['desaddress'] === ''
		
	)
	{

		Address::setMsgError("Informe o endereço.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if


	

	if(
		
		!isset($_POST['desnumber']) 
		|| 
		$_POST['desnumber'] === ''
		
	)
	{

		Address::setMsgError("Informe o número.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['desdistrict']) 
		|| 
		$_POST['desdistrict'] === ''
		
	)
	{

		Address::setMsgError("Informe o bairro.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['descity']) 
		|| 
		$_POST['descity'] === ''
		
	)
	{

		Address::setMsgError("Informe a cidade.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if



	if(
		
		!isset($_POST['desstate']) 
		|| 
		$_POST['desstate'] === ''
		
	)
	{

		Address::setMsgError("Informe o estado.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['descountry']) 
		|| 
		$_POST['descountry'] === ''
		
	)
	{

		Address::setMsgError("Informe o país.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if


	if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nome.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdocument']) 
		|| 
		$_POST['desdocument'] === ''
		
	)
	{

		Payment::setMsgError("Informe o CPF.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	)
	{

		Payment::setMsgError("Informe o E-mail.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['dtbirth']) 
		|| 
		$_POST['dtbirth'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nascimento.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Telefone.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_number']) 
		|| 
		$_POST['descardcode_number'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Número do Cartão.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desholdername']) 
		|| 
		$_POST['desholdername'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nome tal como está impresso no Cartão.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_month']) 
		|| 
		$_POST['descardcode_month'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Mês de Validade do Cartão.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_year']) 
		|| 
		$_POST['descardcode_year'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Ano de Validade do Cartão.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_cvv']) 
		|| 
		$_POST['descardcode_cvv'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Código de Segurança do Cartão.");
		header('Location: /'.$desurl.'/checkout');
		exit;

	}//end if

	$address = new Address();

	# Backup Aula 28 PS
	$_POST['desaddress'] = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $_POST['desaddress']);

	$cart = Cart::getFromSession();

	$cart->getCalculateTotal();


	//$_POST['deszipcode'] = $_POST['deszipcode'];
	$_POST['desholderzipcode'] = $_POST['zipcode'];
	$_POST['deszipcode'] = $_POST['zipcode'];
	$_POST['iduser'] = $user->getiduser();
	$_POST['idcart'] = $cart->getidcart();
	$_POST['desholderaddress'] = $_POST['desaddress'];
	$_POST['desholdernumber'] = $_POST['desnumber'];
	$_POST['desholdercomplement'] = $_POST['descomplement'];
	$_POST['desholdercity'] = $_POST['descity'];
	$_POST['desholderstate'] = $_POST['desstate'];
	$_POST['desholdercountry'] = $_POST['descountry'];
	$_POST['desholderdistrict'] = $_POST['desdistrict'];


	$address->setData($_POST);

	$address->save();

	$order = new Order();

	$order->setData([

		'idcart'=>$cart->getidcart(),
		'iduser'=>$user->getiduser(),
		'idstatus'=>OrderStatus::AGUARDANDO_PAGAMENTO,
		'idaddress'=>$address->getidaddress(),
		'vltotal'=>$cart->getvltotal()

	]);//end setData

	$order->save();

	
	if($order->getidorder() > 0 )
	{	

		$order->setData($_POST);


		$paymentData = $order->sendOrderToPayment();


		/*fazer if no paymentData true or false*/

		$payment = new Payment();

		$payment->setData($paymentData);

		$payment->update();

		$cart->setincartstatus('1');

		$cart->save();

		Cart::removeFromSession();

		//$order->sendOrder();

		//$orderResponse = $order->createOrderInWirecard();

		//if(count($orderResponse) > 0)
		//{

			//$order->sendPayment($orderResponse['id']);

		//}//end if


	}//end if




	header("Location: /".$user->getdesurl()."/payment/".$order->getidorder());
	exit;

	# Aula 10 curso PagSeguro
	// $order->toSession();



	# Aula 10 Curso pagseguro (tirando de boleto pelo BoletoPHP e indo pro PagSeguro) - Na Revisão mudei este fluxo e voltei pro BoletoPHP
	/*
	header("Location: /payment");
	exit;
	*/




	# Aula 122 curso PHP7 (Direciona para Boleto)
	// header("Location: /order/".$order->getidorder());
	// exit;





	# Aula 133 curso PHP7 (Direconia para Integração PagSguro HTML)
	//header("Location: /order/".$order->getidorder()."/pagseguro");
	//exit;

	

	# Aula 134 - PayPal (antes não tinha esse switch, ia direto para Pagseguro)
	/**switch( (int)$_POST['payment-method'] )
	{

		case 1:
		header("Location: /order/".$order->getidorder()."/pagseguro");
		break;

		case 2;
		header("Location: /order/".$order->getidorder()."/paypal");
		break;

	}//end switch

	exit; */



});//END route







/*$app->post( "/:desurl/checkout", function( $desurl )
{

	$user = new User();
	
	$user->getFromUrl($desurl);

	if( 
		
		!isset($_POST['zipcode']) 
		|| 
		$_POST['zipcode'] === ''
	)
	{

		Address::setMsgError("Informe o CEP.");
		header('Location: /checkout');
		exit;
		
	}//end if




	if(
		!isset($_POST['desaddress']) 
		|| 
		$_POST['desaddress'] === ''
		
	)
	{

		Address::setMsgError("Informe o endereço.");
		header('Location: /checkout');
		exit;

	}//end if


	

	if(
		
		!isset($_POST['desnumber']) 
		|| 
		$_POST['desnumber'] === ''
		
	)
	{

		Address::setMsgError("Informe o número.");
		header('Location: /checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['desdistrict']) 
		|| 
		$_POST['desdistrict'] === ''
		
	)
	{

		Address::setMsgError("Informe o bairro.");
		header('Location: /checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['descity']) 
		|| 
		$_POST['descity'] === ''
		
	)
	{

		Address::setMsgError("Informe a cidade.");
		header('Location: /checkout');
		exit;

	}//end if



	if(
		
		!isset($_POST['desstate']) 
		|| 
		$_POST['desstate'] === ''
		
	)
	{

		Address::setMsgError("Informe o estado.");
		header('Location: /checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['descountry']) 
		|| 
		$_POST['descountry'] === ''
		
	)
	{

		Address::setMsgError("Informe o país.");
		header('Location: /checkout');
		exit;

	}//end if

	$address = new Address();

	# Backup Aula 28 PS
	$_POST['desaddress'] = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $_POST['desaddress']);

	$cart = Cart::getFromSession();

	$cart->getCalculateTotal();


	$_POST['deszipcode'] = $_POST['zipcode'];
	$_POST['iduser'] = $user->getiduser();
	$_POST['idcart'] = $cart->getidcart();
	
		
	$address->setData($_POST);

	$address->save();
	
	$order = new Order();

	$order->setData([

		'idcart'=>$cart->getidcart(),
		'idaddress'=>$address->getidaddress(),
		'iduser'=>$user->getiduser(),
		'idstatus'=>OrderStatus::AGUARDANDO_PAGAMENTO,
		'vltotal'=>$cart->getvltotal()

	]);//end setData

	$order->setincartstatus($cart->getincartstatus());

	$order->save();

	if($order->getidorder() > 0 )
	{
		
		$cart->setincartstatus('1');

		$cart->save();

		Cart::removeFromSession();

		$order->sendOrder();

		$orderResponse = $order->createOrderInWirecard();

		if(count($orderResponse) > 0)
		{

			$order->sendPayment($orderResponse['id']);

		}//end if


	}//end if




	header("Location: /".$user->getdesurl()."/order/".$order->getidorder());
	exit;



});//END route*/







$app->get( "/:desurl/checkout", function( $desurl )
{
	$user = new User();
	
	$user->getFromUrl($desurl);


	$address = new Address();

	$cart = Cart::getFromSession();

	


	if ( isset($_GET['zipcode']) )
	{	
		$address->loadFromCEP($_GET['zipcode']);
		
		//$cart->setdeszipcode($_GET['zipcode']);
		$address->setdesnumber($_GET['desnumber']);
		//$address->setdesholdernumber($_GET['desnumber']);
		//$address->setidcart($cart->getidcart());

		//$cart->save();
		//$cart->getCalculateTotal();

	}//end if


	if( !$address->getdesaddress() ) $address->setdesaddress('');
	//if( !$address->getdesholderaddress() ) $address->setdesholderaddress('');
	if( !$address->getdesnumber() ) $address->setdesnumber('');
	//if( !$address->getdesholdernumber() ) $address->setdesholdernumber('');
	if( !$address->getdescomplement() ) $address->setdescomplement('');
	//if( !$address->getdesholdercomplement() ) $address->setdesholdercomplement('');
	if( !$address->getdesdistrict() ) $address->setdesdistrict('');
	//if( !$address->getdesholderdistrict() ) $address->setdesholderdistrict('');
	if( !$address->getdescity() ) $address->setdescity('');
	//if( !$address->getdesholdercity() ) $address->setdesholdercity('');
	if( !$address->getdesstate() ) $address->setdesstate('');
	//if( !$address->getdesholderstate() ) $address->setdesholderstate('');
	if( !$address->getdescountry() ) $address->setdescountry('');
	//if( !$address->getdesholdercountry() ) $address->setdesholdercountry('');
	if( !$address->getdeszipcode() ) $address->setdeszipcode('');
	//if( !$address->getdesholderzipcode() ) $address->setdesholderzipcode('');


	$payment = new Payment();

	if( !$payment->getdesname() ) $payment->setdesname('');
	if( !$payment->getdesemail() ) $payment->setdesemail('');
	if( !$payment->getdesdocument() ) $payment->setdesdocument('');
	if( !$payment->getdtbirth() ) $payment->setdtbirth('');
	if( !$payment->getnrphone() ) $payment->setnrphone('');
	if( !$payment->getdescardcode_number() ) $payment->setdescardcode_number('');
	if( !$payment->getdesholdername() ) $payment->setdesholdername('');
	if( !$payment->getdescardcode_month() ) $payment->setdescardcode_month('');
	if( !$payment->getdescardcode_year() ) $payment->setdescardcode_year('');
	if( !$payment->getdescardcode_cvv() ) $payment->setdescardcode_cvv('');




	$page = new Page();

	$page->setTpl(
		
		"templates" . 
		DIRECTORY_SEPARATOR . $user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "checkout", 
		
		[
			'payment'=>$payment->getValues(),
			'user'=>$user->getValues(),
			'cart'=>$cart->getValues(),
			'address'=>$address->getValues(),
			'products'=>$cart->getProducts(),
			'error'=>Order::getError()
			
		]
	
	);//end setTpl

});//END route









?>