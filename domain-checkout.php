<?php

use \Core\PageDomain;
use \Core\Wirecard;
use \Core\Rule;
use \Core\Model\User;
use \Core\Model\Cart;
use \Core\Model\Product;
use \Core\Model\Address;
use \Core\Model\Order;
use \Core\Model\OrderStatus;
use \Core\Model\Payment;
use \Core\Model\Customer;
use \Core\Model\Consort;








$app->get( "/:desdomain/presente/:idorder", function( $desdomain, $idorder )
{

	$user = new User();

	$user->getFromUrl($desdomain);

	$consort = new Consort();

	$consort->getUserConsort($user->getiduser());

	$order = new Order();

	$order->getOrder((int)$idorder);

	$product = $order->getProducts();





	$page = new PageDomain();

	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "payment",
		
		[
			'consort'=>$consort->getValues(),
			'product'=>$product,
			'user'=>$user->getValues(),
			'order'=>$order->getValues()

		]
	
	);//end setTpl

});//END route











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

		Address::setError("Informe o CEP.");
		header('Location: /'.$desdomain.'/checkout');
		exit;
		
	}//end if




	if(
		!isset($_POST['desaddress']) 
		|| 
		$_POST['desaddress'] === ''
		
	)
	{

		Address::setError("Informe o endereço.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if


	

	if(
		
		!isset($_POST['desnumber']) 
		|| 
		$_POST['desnumber'] === ''
		
	)
	{

		Address::setError("Informe o número.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['desdistrict']) 
		|| 
		$_POST['desdistrict'] === ''
		
	)
	{

		Address::setError("Informe o bairro.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['descity']) 
		|| 
		$_POST['descity'] === ''
		
	)
	{

		Address::setError("Informe a cidade.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if



	if(
		
		!isset($_POST['desstate']) 
		|| 
		$_POST['desstate'] === ''
		
	)
	{

		Address::setError("Informe o estado.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['descountry']) 
		|| 
		$_POST['descountry'] === ''
		
	)
	{

		Address::setError("Informe o país.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if


	if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		Payment::setError("Informe o Nome.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdocument']) 
		|| 
		$_POST['desdocument'] === ''
		
	)
	{

		Payment::setError("Informe o CPF.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	)
	{

		Payment::setError("Informe o E-mail.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['dtbirth']) 
		|| 
		$_POST['dtbirth'] === ''
		
	)
	{

		Payment::setError("Informe o Nascimento.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Payment::setError("Informe o Telefone.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_number']) 
		|| 
		$_POST['descardcode_number'] === ''
		
	)
	{

		Payment::setError("Informe o Número do Cartão.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desholdername']) 
		|| 
		$_POST['desholdername'] === ''
		
	)
	{

		Payment::setError("Informe o Nome tal como está impresso no Cartão.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_month']) 
		|| 
		$_POST['descardcode_month'] === ''
		
	)
	{

		Payment::setError("Informe o Mês de Validade do Cartão.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_year']) 
		|| 
		$_POST['descardcode_year'] === ''
		
	)
	{

		Payment::setError("Informe o Ano de Validade do Cartão.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_cvc']) 
		|| 
		$_POST['descardcode_cvc'] === ''
		
	)
	{

		Payment::setError("Informe o Código de Segurança do Cartão.");
		header('Location: /'.$desdomain.'/checkout');
		exit;

	}//end if


	
	$_POST['desaddress'] = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $_POST['desaddress']);

	$cart = Cart::getFromSession();

	$cart->getCalculateTotal();


	$wirecard = new Wirecard();



	$wirecardCustomerData = $wirecard->createCustomer(

		$_POST['desname'],
		$_POST['desemail'],
		$_POST['dtbirth'],
		$_POST['intypedoc'],
		$_POST['desdocument'],
		Rule::NR_COUNTRY_AREA,
		$_POST['nrddd'],
		$_POST['nrphone'],
		$_POST['desaddress'],
		$_POST['desnumber'],
	  	$_POST['descomplement'],
	  	$_POST['desdistrict'],
	  	$_POST['descity'],
	  	$_POST['desstate'],
	  	$_POST['zipcode'],
	  	$_POST['descardcode_month'],
	  	$_POST['descardcode_year'],
	  	$_POST['descardcode_number'],
	  	$_POST['descardcode_cvc']


	);//end createCustomer


	$customer = new Customer();

	$customer->setData([

		'iduser'=>$user->getiduser(),
		'descustomercode'=>$wirecardCustomerData['descustomercode'],
		'desname'=>$_POST['desname'],
		'desemail'=>$_POST['desemail'],
		'nrcountryarea'=>Rule::NR_COUNTRY_AREA,
		'nrddd'=>$_POST['nrddd'],
		'nrphone'=>$_POST['nrphone'],
		'intypedoc'=>$_POST['intypedoc'],
		'desdocument'=>$_POST['desdocument'],
	  	'deszipcode'=>$_POST['zipcode'],
		'desaddress'=>$_POST['desaddress'],
		'desnumber'=>$_POST['desnumber'],
	  	'descomplement'=>$_POST['descomplement'],
	  	'desdistrict'=>$_POST['desdistrict'],
	  	'descity'=>$_POST['descity'],
	  	'desstate'=>$_POST['desstate'],
	  	'descountry'=>Rule::DESCOUNTRY,
		'descardcode'=>$wirecardCustomerData['descardcode'],
		'desbrand'=>$wirecardCustomerData['desbrand'],
		'infirst6'=>$wirecardCustomerData['infirst6'],
		'inlast4'=>$wirecardCustomerData['inlast4'],
		'dtbirth'=>$_POST['dtbirth']

	]);//end setData

	

	$customer->save();

	
	if($customer->getidcustomer() > 0 )
	{

		$wirecardPaymentData = $wirecard->payOrder(

			$customer->getdescustomercode(),
			$user->getdesaccountcode(),
			$cart->getidcart(),
			$_POST['desname'],
			$_POST['dtbirth'],
			$_POST['intypedoc'],
			$_POST['desdocument'],
			Rule::NR_COUNTRY_AREA,
			$_POST['nrddd'],
			$_POST['nrphone'],
			$_POST['desaddress'],
			$_POST['desnumber'],
			$_POST['desdistrict'],
			$_POST['descity'],
			$_POST['desstate'],
			$_POST['zipcode'],
			$_POST['descomplement'],
			$_POST['descardcode_month'],
			$_POST['descardcode_year'],
			$_POST['descardcode_number'],
			$_POST['descardcode_cvc']

		);//end payOrder




		$payment = new Payment();

		$payment->setData([

			'iduser'=>$user->getiduser(),
			'despaymentcode'=>$wirecardPaymentData['despaymentcode'],
			'desstatus'=>$wirecardPaymentData['desstatus'],
			'desholdername'=>$_POST['desname'],
			'nrholdercountryarea'=>Rule::NR_COUNTRY_AREA,
			'nrholderddd'=>$_POST['nrddd'],
			'nrholderphone'=>$_POST['nrphone'],
			'inholdertypedoc'=>$_POST['intypedoc'],
			'desholderdocument'=>$_POST['desdocument'],
			'desholderzipcode'=>$_POST['zipcode'],
			'desholderaddress'=>$_POST['desaddress'],
			'desholdernumber'=>$_POST['desnumber'],
			'desholdercomplement'=>$_POST['descomplement'],
			'desholderdistrict'=>$_POST['desdistrict'],
			'desholdercity'=>$_POST['descity'],
			'desholderstate'=>$_POST['desstate'],
			'dtholderbirth'=>$_POST['dtbirth']

		]);//end setData
		

		$payment->update();

		if($payment->getidpayment() > 0)
		{


			$order = new Order();

			$order->setData([

				'iduser'=>$user->getiduser(),
				'idcart'=>$cart->getidcart(),
				'idcustomer'=>$customer->getidcustomer(),
				'idpayment'=>$payment->getidpayment(),
				'desordercode'=>$wirecardPaymentData['desordercode'],
				'vltotal'=>$cart->getvltotal()

			]);//end setData


			$order->save();


			if( $order->getidorder() > 0)
			{




				$cart->setincartstatus('1');

				


				$cart->save();



				Cart::removeFromSession();


				header("Location: /".$user->getdesdomain()."/presente/".$order->getidorder());
				exit;


			}//end if


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
	if( !$payment->getintypedoc() ) $payment->setintypedoc('');
	if( !$payment->getdtbirth() ) $payment->setdtbirth('');
	if( !$payment->getnrphone() ) $payment->setnrphone('');
	if( !$payment->getnrddd() ) $payment->setnrddd('');
	if( !$payment->getdescardcode_number() ) $payment->setdescardcode_number('');
	if( !$payment->getdesholdername() ) $payment->setdesholdername('');
	if( !$payment->getdescardcode_month() ) $payment->setdescardcode_month('');
	if( !$payment->getdescardcode_year() ) $payment->setdescardcode_year('');
	if( !$payment->getdescardcode_cvc() ) $payment->setdescardcode_cvc('');




	$page = new PageDomain();


	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "checkout", 
		
		[
			'payment'=>$payment->getValues(),
			'user'=>$user->getValues(),
			'cart'=>$cart->getValues(),
			'address'=>$address->getValues(),
			'products'=>$cart->getProducts(),
			'error'=>Payment::getError()
			
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










/*

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
	//$_POST['idcart'] = $cart->getidcart();
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







});//END route*/










?>