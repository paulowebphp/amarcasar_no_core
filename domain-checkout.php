<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Cart;
use Hcode\Model\Product;
use \Hcode\Model\Address;
use \Hcode\Model\Order;
use \Hcode\Model\OrderStatus;
use \Hcode\Model\Payment;
use \Hcode\Model\Wirecard;













$app->post( "/:desdomain/checkout", function( $desdomain )
{

	


	$user = new User();
	
	$user->getFromUrl($desdomain);

	if( 
		
		!isset($_POST['zipcode']) 
		|| 
		$_POST['zipcode'] === ''
	)
	{

		Address::setMsgError("Informe o CEP.");
		header('Location: /'.$desdomain.'/checkout');
		exit;
		
	}//end if




	if(
		!isset($_POST['desaddress']) 
		|| 
		$_POST['desaddress'] === ''
		
	)
	{

		Address::setMsgError("Informe o endereço.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if


	

	if(
		
		!isset($_POST['desnumber']) 
		|| 
		$_POST['desnumber'] === ''
		
	)
	{

		Address::setMsgError("Informe o número.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['desdistrict']) 
		|| 
		$_POST['desdistrict'] === ''
		
	)
	{

		Address::setMsgError("Informe o bairro.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['descity']) 
		|| 
		$_POST['descity'] === ''
		
	)
	{

		Address::setMsgError("Informe a cidade.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if



	if(
		
		!isset($_POST['desstate']) 
		|| 
		$_POST['desstate'] === ''
		
	)
	{

		Address::setMsgError("Informe o estado.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['descountry']) 
		|| 
		$_POST['descountry'] === ''
		
	)
	{

		Address::setMsgError("Informe o país.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if


	if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nome.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdocument']) 
		|| 
		$_POST['desdocument'] === ''
		
	)
	{

		Payment::setMsgError("Informe o CPF.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	)
	{

		Payment::setMsgError("Informe o E-mail.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['dtbirth']) 
		|| 
		$_POST['dtbirth'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nascimento.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Telefone.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_number']) 
		|| 
		$_POST['descardcode_number'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Número do Cartão.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desholdername']) 
		|| 
		$_POST['desholdername'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nome tal como está impresso no Cartão.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_month']) 
		|| 
		$_POST['descardcode_month'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Mês de Validade do Cartão.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_year']) 
		|| 
		$_POST['descardcode_year'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Ano de Validade do Cartão.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_cvv']) 
		|| 
		$_POST['descardcode_cvv'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Código de Segurança do Cartão.");
		header('Location: /'.$desdomain.'/checkout');
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



	if( $order->getidorder() > 0 )
	{	

		$wirecard = new Wirecard();

		$paymentData = $wirecard->payOrder(

			$user->getdesaccountcode(),
			$order->getidcart(),
			$_POST['desname'],
			$_POST['dtbirth'],
			$_POST['desdocument'],
			$_POST['desemail'],
			$_POST['nrphone'],
			$_POST['desaddress'],
			$_POST['desnumber'],
			$_POST['desdistrict'],
			$_POST['descity'],
			$_POST['desstate'],
			$_POST['deszipcode'],
			$_POST['descomplement'],
			$_POST['descardcode_month'],
			$_POST['descardcode_year'],
			$_POST['descardcode_number'],
			$_POST['descardcode_cvv']



		);


		
		/*fazer if no paymentData true or false*/

		$payment = new Payment();

		$payment->setData([

			'iduser'=>$user->getiduser(),
			'idorder'=>$order->getidorder(),
			'descustomercode'=>$paymentData['descustomercode'],
			'descardcode'=>$paymentData['descardcode'],
			'desordercode'=>$paymentData['desordercode'],
			'despaymentcode'=>$paymentData['despaymentcode'],
			'desname'=>$_POST['desname'],
			'desholdername'=>$_POST['desname'],
			'desemail'=>$_POST['desemail'],
			'intypedocument'=>0,
			'desdocument'=>$_POST['desdocument'],
			'desholderdocument'=>$_POST['desdocument'],
			'nrphone'=>$_POST['nrphone'],
			'nrholderphone'=>$_POST['nrphone'],
			'dtbirth'=>$_POST['dtbirth'],
			'dtholderbirth'=>$_POST['dtbirth']


		]);

		

		$payment->save();

		


		if($payment->getidpayment() > 0)
		{

			$cart->setincartstatus('1');

			$cart->save();

			Cart::removeFromSession();


			header("Location: /".$user->getdesdomain()."/presente/".$order->getidorder());
			exit;

		}//end if
		

	
	}//end if




	





});//END route







/*$app->post( "/:desdomain/checkout", function( $desdomain )
{

	$user = new User();
	
	$user->getFromUrl($desdomain);

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




	header("Location: /".$user->getdesdomain()."/order/".$order->getidorder());
	exit;



});//END route*/







$app->get( "/:desdomain/checkout", function( $desdomain )
{
	$user = new User();
	
	$user->getFromUrl($desdomain);


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











/*$app->post( "/:desdomain/checkout", function( $desdomain )
{

	


	$user = new User();
	
	$user->getFromUrl($desdomain);

	if( 
		
		!isset($_POST['zipcode']) 
		|| 
		$_POST['zipcode'] === ''
	)
	{

		Address::setMsgError("Informe o CEP.");
		header('Location: /'.$desdomain.'/checkout');
		exit;
		
	}//end if




	if(
		!isset($_POST['desaddress']) 
		|| 
		$_POST['desaddress'] === ''
		
	)
	{

		Address::setMsgError("Informe o endereço.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if


	

	if(
		
		!isset($_POST['desnumber']) 
		|| 
		$_POST['desnumber'] === ''
		
	)
	{

		Address::setMsgError("Informe o número.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['desdistrict']) 
		|| 
		$_POST['desdistrict'] === ''
		
	)
	{

		Address::setMsgError("Informe o bairro.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['descity']) 
		|| 
		$_POST['descity'] === ''
		
	)
	{

		Address::setMsgError("Informe a cidade.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if



	if(
		
		!isset($_POST['desstate']) 
		|| 
		$_POST['desstate'] === ''
		
	)
	{

		Address::setMsgError("Informe o estado.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['descountry']) 
		|| 
		$_POST['descountry'] === ''
		
	)
	{

		Address::setMsgError("Informe o país.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if


	if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nome.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdocument']) 
		|| 
		$_POST['desdocument'] === ''
		
	)
	{

		Payment::setMsgError("Informe o CPF.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	)
	{

		Payment::setMsgError("Informe o E-mail.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['dtbirth']) 
		|| 
		$_POST['dtbirth'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nascimento.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Telefone.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_number']) 
		|| 
		$_POST['descardcode_number'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Número do Cartão.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desholdername']) 
		|| 
		$_POST['desholdername'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nome tal como está impresso no Cartão.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_month']) 
		|| 
		$_POST['descardcode_month'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Mês de Validade do Cartão.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_year']) 
		|| 
		$_POST['descardcode_year'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Ano de Validade do Cartão.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_cvv']) 
		|| 
		$_POST['descardcode_cvv'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Código de Segurança do Cartão.");
		header('Location: /'.$desdomain.'/checkout');
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



	if( $order->getidorder() > 0 )
	{	


		$paymentData = $order->sendOrderToPayment(

			$_POST['desname'],
			$_POST['desdocument'],
			$_POST['desemail'],
			$_POST['dtbirth'],
			$_POST['nrphone'],
			$_POST['descardcode_number'],
			$_POST['desholdername'],
			$_POST['descardcode_month'],
			$_POST['descardcode_year'],
			$_POST['descardcode_cvv']

		);


		

		$payment = new Payment();



		$payment->setData($paymentData);

		$payment->save();



		$cart->setincartstatus('1');

		$cart->save();

		Cart::removeFromSession();
		

	
	}//end if




	header("Location: /".$user->getdesdomain()."/presente/".$order->getidorder());
	exit;





});//END route*/








?>