<?php

use \Core\PageDomain;
use \Core\Wirecard;
use \Core\Rule;
use \Core\Validate;
use \Core\Mailer;
use \Core\Model\User;
use \Core\Model\Cart;
use \Core\Model\Product;
use \Core\Model\ProductConfig;
use \Core\Model\Address;
use \Core\Model\Order;
use \Core\Model\OrderStatus;
use \Core\Model\Payment;
use \Core\Model\Customer;
use \Core\Model\Consort;
use \Core\Model\Account;








$app->get( "/:desdomain/presente/:idorder", function( $desdomain, $idorder )
{

	$user = new User();

	$user->getFromUrl($desdomain);




	$consort = new Consort();

	$consort->get($user->getiduser());




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






	//$address = new Address();

	//$address->get((int)$user->getiduser());



		
		



	$payment = new Payment();






	if( isset($_POST['checkout-boleto']) )
	{



		if(
			
			!isset($_POST['desname']) 
			|| 
			$_POST['desname'] === ''
			
		)
		{

			Payment::setError("Informe o nome tal como está impresso no cartão");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$desname = Validate::validateString($_POST['desname']) )
		{

			Payment::setError("O seu nome não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

















		if(
			
			!isset($_POST['desemail']) 
			|| 
			$_POST['desemail'] === ''
			
		)
		{

			Payment::setError("Informe o email");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if



		if( ($desemail = Validate::validateEmail($_POST['desemail'])) === false )
		{	
			
			User::setError("O e-mail parece estar num formato inválido, tente novamente");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if



















		if(
			
			!isset($_POST['desholderdocument']) 
			|| 
			$_POST['desholderdocument'] === ''
			
		)
		{

			Payment::setError("Informe o número do documento");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$desholderdocument = Validate::validateDocument($_POST['inholdertypedoc'], $_POST['desholderdocument']) )
		{

			Payment::setError("Informe um documento válido");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if
		











		if(
			
			!isset($_POST['nrholderddd']) 
			|| 
			$_POST['nrholderddd'] === ''
			
		)
		{

			Payment::setError("Informe o DDD");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if(
			
			!isset($_POST['nrholderphone']) 
			|| 
			$_POST['nrholderphone'] === ''
			
		)
		{

			Payment::setError("Informe o telefone ou celular");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$nrholderddd = Validate::validateDDD($_POST['nrholderddd']) )
		{

			Payment::setError("Informe um DDD válido");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if


		if( !$nrholderphone = Validate::validatePhone($_POST['nrholderphone']) )
		{

			Payment::setError("Informe um telefone ou celular válido");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if














		if(
			
			!isset($_POST['dtholderbirth']) 
			|| 
			$_POST['dtholderbirth'] === ''
			
		)
		{

			Payment::setError("Informe a data de nascimento");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$dtholderbirth = Validate::validateDate($_POST['dtholderbirth'], 0) )
		{

			Payment::setError("Informe uma data válida");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if










		if( 
		
			!isset($_POST['zipcode']) 
			|| 
			$_POST['zipcode'] === ''
		)
		{

			Payment::setError("Informe o CEP");
			header('Location: /'.$desdomain.'/checkout');
			exit;
			
		}//end if


		if( !$desholderzipcode = Validate::validateCEP($_POST['zipcode']) )
		{

			Payment::setError("Informe um CEP válido");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if












		if(
			!isset($_POST['desholderaddress']) 
			|| 
			$_POST['desholderaddress'] === ''
			
		)
		{

			Payment::setError("Informe o endereço");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$desholderaddress = Validate::validateString($_POST['desholderaddress']) )
		{

			Payment::setError("O seu endereço não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if












		

		if(
			
			!isset($_POST['desholdernumber']) 
			|| 
			$_POST['desholdernumber'] === ''
			
		)
		{

			Payment::setError("Informe o número");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$desholdernumber = Validate::validateNumber($_POST['desholdernumber']) )
		{

			Payment::setError("Informe o seu nome apenas com números");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if








		

		if(
			
			!isset($_POST['desholderdistrict']) 
			|| 
			$_POST['desholderdistrict'] === ''
			
		)
		{

			Payment::setError("Informe o bairro");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$desholderdistrict = Validate::validateString($_POST['desholderdistrict']) )
		{

			Payment::setError("O nome do bairro não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if




		$desholdercomplement = Validate::validateString($_POST['desholdercomplement'], true);
		$inholdertypedoc = $_POST['inholdertypedoc'];

		$cityArray = Address::getCity($_POST['desholdercity']);
		$desholdercity = $cityArray['descity'];

		$stateArray = Address::getState($_POST['desholderstate']);
		$desholderstate = $stateArray['desstatecode'];


		$desholdername = $desname;
		$descardcode_number = null;
		$descardcode_month = null;
		$descardcode_year = null;
		$descardcode_cvc = null;

		$payment->setinpaymentmethod('0');
		$payment->setnrinstallment('1');
















	}//end if
	else if( isset($_POST['checkout-third-part-card']) )
	{





		if(
			
			!isset($_POST['desemail']) 
			|| 
			$_POST['desemail'] === ''
			
		)
		{

			Payment::setError("Informe o email");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if



		if( ($desemail = Validate::validateEmail($_POST['desemail'])) === false )
		{	
			
			User::setError("O e-mail parece estar num formato inválido, tente novamente");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if













		if(
			
			!isset($_POST['desname']) 
			|| 
			$_POST['desname'] === ''
			
		)
		{

			Payment::setError("Informe o nome tal como está impresso no cartão");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$desname = Validate::validateString($_POST['desname']) )
		{

			Payment::setError("O seu nome não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if






		if(
			
			!isset($_POST['desholderdocument']) 
			|| 
			$_POST['desholderdocument'] === ''
			
		)
		{

			Payment::setError("Informe o número do documento");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$desholderdocument = Validate::validateDocument($_POST['inholdertypedoc'], $_POST['desholderdocument']) )
		{

			Payment::setError("Informe um documento válido");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if
		











		if(
			
			!isset($_POST['nrholderddd']) 
			|| 
			$_POST['nrholderddd'] === ''
			
		)
		{

			Payment::setError("Informe o DDD");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if(
			
			!isset($_POST['nrholderphone']) 
			|| 
			$_POST['nrholderphone'] === ''
			
		)
		{

			Payment::setError("Informe o telefone ou celular");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$nrholderddd = Validate::validateDDD($_POST['nrholderddd']) )
		{

			Payment::setError("Informe um DDD válido");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if


		if( !$nrholderphone = Validate::validatePhone($_POST['nrholderphone']) )
		{

			Payment::setError("Informe um telefone ou celular válido");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if














		if(
			
			!isset($_POST['dtholderbirth']) 
			|| 
			$_POST['dtholderbirth'] === ''
			
		)
		{

			Payment::setError("Informe a data de nascimento");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$dtholderbirth = Validate::validateDate($_POST['dtholderbirth'], 0) )
		{

			Payment::setError("Informe uma data válida");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if










		if( 
		
			!isset($_POST['zipcode']) 
			|| 
			$_POST['zipcode'] === ''
		)
		{

			Payment::setError("Informe o CEP");
			header('Location: /'.$desdomain.'/checkout');
			exit;
			
		}//end if


		if( !$desholderzipcode = Validate::validateCEP($_POST['zipcode']) )
		{

			Payment::setError("Informe um CEP válido");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if












		if(
			!isset($_POST['desholderaddress']) 
			|| 
			$_POST['desholderaddress'] === ''
			
		)
		{

			Payment::setError("Informe o endereço");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$desholderaddress = Validate::validateString($_POST['desholderaddress']) )
		{

			Payment::setError("O seu endereço não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if












		

		if(
			
			!isset($_POST['desholdernumber']) 
			|| 
			$_POST['desholdernumber'] === ''
			
		)
		{

			Payment::setError("Informe o número");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$desholdernumber = Validate::validateNumber($_POST['desholdernumber']) )
		{

			Payment::setError("Informe o seu nome apenas com números");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if








		

		if(
			
			!isset($_POST['desholderdistrict']) 
			|| 
			$_POST['desholderdistrict'] === ''
			
		)
		{

			Payment::setError("Informe o bairro");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$desholderdistrict = Validate::validateString($_POST['desholderdistrict']) )
		{

			Payment::setError("O nome do bairro não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if








		if(
		
			!isset($_POST['descardcode_number']) 
			|| 
			$_POST['descardcode_number'] === ''
			
		)
		{

			Payment::setError("Informe o número do cartão");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$descardcode_number = Validate::validateCardNumber($_POST['descardcode_number']) )
		{

			Payment::setError("Informe o número do cartão com 12 dígitos");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if












		if(
			
			!isset($_POST['desholdername']) 
			|| 
			$_POST['desholdername'] === ''
			
		)
		{

			Payment::setError("Informe o nome tal como está impresso no cartão");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$desholdername = Validate::validateCardName($_POST['desholdername']) )
		{

			Payment::setError("O seu nome não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if











		if(
			
			!isset($_POST['descardcode_month']) 
			|| 
			$_POST['descardcode_month'] === ''
			
		)
		{

			Payment::setError("Informe o mês de validade do cartão");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$descardcode_month = Validate::validateMonth($_POST['descardcode_month']) )
		{

			Payment::setError("Informe o mês de validade com 2 dígitos");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if











		if(
			
			!isset($_POST['descardcode_year']) 
			|| 
			$_POST['descardcode_year'] === ''
			
		)
		{

			Payment::setError("Informe o ano de validade do cartão");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$descardcode_year = Validate::validateYear($_POST['descardcode_year']) )
		{

			Payment::setError("Informe o ano de validade com 4 dígitos");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if









		if(
			
			!isset($_POST['descardcode_cvc']) 
			|| 
			$_POST['descardcode_cvc'] === ''
			
		)
		{

			Payment::setError("Informe o código de segurança do cartão");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if

		if( !$descardcode_cvc = Validate::validateCvc($_POST['descardcode_cvc']) )
		{

			Payment::setError("Informe o código de segurança apenas 3 a 4 dígitos");
			header('Location: /'.$desdomain.'/checkout');
			exit;

		}//end if



		$desholdercomplement = Validate::validateString($_POST['desholdercomplement'], true);
		$inholdertypedoc = $_POST['inholdertypedoc'];

		$cityArray = Address::getCity($_POST['desholdercity']);
		$desholdercity = $cityArray['descity'];

		$stateArray = Address::getState($_POST['desholderstate']);
		$desholderstate = $stateArray['desstatecode'];

		$payment->setinpaymentmethod('1');
		$payment->setnrinstallment($_POST['installment']);



	}//end else if





	





	$cart = Cart::getFromSession();

	$cart->getCalculateTotal();




	$wirecard = new Wirecard();

	$wirecardCustomerData = $wirecard->createCustomer(

		$desname,
		$desemail,
		$dtholderbirth,
		$inholdertypedoc,
		$desholderdocument,
		$payment->getinpaymentmethod(),
		Rule::NR_COUNTRY_AREA,
		$nrholderddd,
		$nrholderphone,
	  	$desholderzipcode,
		$desholderaddress,
		$desholdernumber,
	  	$desholdercomplement,
	  	$desholderdistrict,
	  	$desholdercity,
	  	$desholderstate,
	  	$descardcode_month,
	  	$descardcode_year,
	  	$descardcode_number,
	  	$descardcode_cvc

	);//end createCustomer

	
		



	$customer = new Customer();

	$customer->setData([

		'iduser'=>$user->getiduser(),
		'descustomercode'=>$wirecardCustomerData['descustomercode'],
		'desname'=>$desname,
		'desemail'=>$desemail,
		'nrcountryarea'=>Rule::NR_COUNTRY_AREA,
		'nrddd'=>$nrholderddd,
		'nrphone'=>$nrholderphone,
		'intypedoc'=>$inholdertypedoc,
		'desdocument'=>$desholderdocument,
	  	'deszipcode'=>$desholderzipcode,
		'desaddress'=>$desholderaddress,
		'desnumber'=>$desholdernumber,
	  	'descomplement'=>$desholdercomplement,
	  	'desdistrict'=>$desholderdistrict,
	  	'descity'=>$desholdercity,
	  	'desstate'=>$desholderstate,
	  	'descountry'=>Rule::DESCOUNTRY,
		'descardcode'=>$wirecardCustomerData['descardcode'],
		'desbrand'=>$wirecardCustomerData['desbrand'],
		'infirst6'=>$wirecardCustomerData['infirst6'],
		'inlast4'=>$wirecardCustomerData['inlast4'],
		'dtbirth'=>$dtholderbirth

	]);//end setData
	


	$customer->save();


	



	
	if($customer->getidcustomer() > 0 )
	{

		$account = new Account();

		$account->get((int)$user->getiduser());




		$productconfig = new ProductConfig();

		$productconfig->get((int)$user->getiduser());


			





		$wirecardPaymentData = $wirecard->payOrderProducts(

			$account->getdesaccountcode(),
			$customer->getdescustomercode(),
			$cart->getidcart(),
			Rule::NR_COUNTRY_AREA,
			$nrholderddd,
			$nrholderphone,
			$desholdername,
			$dtholderbirth,
			$inholdertypedoc,
			$desholderdocument,
			$desholderzipcode,
			$desholderaddress,
			$desholdernumber,
			$desholdercomplement,
			$desholderdistrict,
			$desholdercity,
			$desholderstate,
			$payment->getinpaymentmethod(),
			$payment->getnrinstallment(),
			$productconfig->getincharge(),
			$descardcode_month,
			$descardcode_year,
			$descardcode_number,
			$descardcode_cvc

		);//end payOrder



		

		$payment->setData([

			'iduser'=>$user->getiduser(),
			'despaymentcode'=>$wirecardPaymentData['despaymentcode'],
			'inpaymentstatus'=>$wirecardPaymentData['inpaymentstatus'],
			'inpaymentmethod'=>$payment->getinpaymentmethod(),
			'incharge'=>$productconfig->getincharge(),
			'nrinstallment'=>$payment->getnrinstallment(),
			'deslinecode'=>$wirecardPaymentData['deslinecode'],
			'desprinthref'=>$wirecardPaymentData['desprinthref'],
			'desholdername'=>$desholdername,
			'nrholdercountryarea'=>Rule::NR_COUNTRY_AREA,
			'nrholderddd'=>$nrholderddd,
			'nrholderphone'=>$nrholderphone,
			'inholdertypedoc'=>$inholdertypedoc,
			'desholderdocument'=>$desholderdocument,
			'desholderzipcode'=>$desholderzipcode,
			'desholderaddress'=>$desholderaddress,
			'desholdernumber'=>$desholdernumber,
			'desholdercomplement'=>$desholdercomplement,
			'desholderdistrict'=>$desholderdistrict,
			'desholdercity'=>$desholdercity,
			'desholderstate'=>$desholderstate,
			'dtholderbirth'=>$dtholderbirth


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
				'vltotal'=>$wirecardPaymentData['interest']

			]);//end setData

			
			

			$order->update();



	

			if( $order->getidorder() > 0)
			{

				$consort = new Consort();

				$consort->get((int)$user->getiduser());



				$customerMailer = new Mailer(
								
					$customer->getdesemail(), 
					$customer->getdesname(), 
					"Amar Casar - Compra realizada",
					# template do e-mail em si na /views/email/ e não da administração
					"payment-customer", 
					
					array(

						"consort"=>$consort->getValues(),
						"user"=>$user->getValues(),
						"product"=>$order->getProducts(),
						"payment"=>$payment->getValues(),
						"order"=>$order->getValues()

					)//end array
				
				);//end Mailer

				
			



				$sellerMailer = new Mailer(
								
					$user->getdeslogin(), 
					$user->getdesperson(), 
					"Amar Casar - Presente Recebido",
					# template do e-mail em si na /views/email/ e não da administração
					"payment-seller", 
					
					array(

						"consort"=>$consort->getValues(),
						"user"=>$user->getValues(),
						"product"=>$order->getProducts(),
						"payment"=>$payment->getValues(),
						"order"=>$order->getValues()

					)//end array
				
				);//end Mailer

				


				$customerMailer->send();

				$sellerMailer->send();




				$cart->setincartstatus('1');

				$cart->update();

				Cart::removeFromSession();

				header("Location: /".$user->getdesdomain()."/presente/".$order->getidorder());
				exit;


			}//end if


		}//end if

	}//end if


});//END route









$app->get( "/:desdomain/checkout", function( $desdomain )
{
	$user = new User();
	
	$user->getFromUrl($desdomain);

	$cart = Cart::getFromSession();



	$productconfig = new ProductConfig();

	$productconfig->get((int)$user->getiduser());



	$state = Address::listAllStates();

	$city = Address::listAllCitiesByState(1);




	$page = new PageDomain();

	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "checkout", 
		
		[

			'state'=>$state,
			'city'=>$city,
			'productconfig'=>$productconfig->getValues(),
			'user'=>$user->getValues(),
			'cart'=>$cart->getValues(),
			'products'=>$cart->getProducts(),
			'error'=>Payment::getError(),
			'success'=>Payment::getSuccess()
			
		]
	
	);//end setTpl

});//END route










?>