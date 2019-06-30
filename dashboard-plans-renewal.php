<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Wirecard;
use Core\Validate;
use Core\Mailer;
use Core\Model\User;
use Core\Model\Plan;
use Core\Model\Payment;
use Core\Model\PaymentStatus;
use Core\Model\Address;
use Core\Model\Customer;
use Core\Model\Order;
use Core\Model\Cart;
use Core\Model\Consort;
use Core\Model\Fee;






$app->get( "/dashboard/renovar/checkout", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();


	if ( isset($_GET['plano']) )
	{

		$plan = $_GET['plano'];

	}//end if
	else if( !isset($_GET['plano']) )
	{

		header('Location: /dashboard/renovar');
		exit;

	}//end else if


	/*$payment = new Payment();

	if( !$payment->getdesholderaddress() ) $payment->setdesholderaddress('');
	if( !$payment->getdesemail() ) $payment->setdesemail('');
	if( !$payment->getdesholdernumber() ) $payment->setdesholdernumber('');
	if( !$payment->getdesholdercomplement() ) $payment->setdesholdercomplement('');
	if( !$payment->getdesholderdistrict() ) $payment->setdesholderdistrict('');
	if( !$payment->getdesholdercity() ) $payment->setdesholdercity('');
	if( !$payment->getdesholderstate() ) $payment->setdesholderstate('');
	if( !$payment->getdesholderzipcode() ) $payment->setdesholderzipcode('');
	if( !$payment->getinholdertypedoc() ) $payment->setinholdertypedoc('');
	if( !$payment->getdesholderdocument() ) $payment->setdesholderdocument('');
	if( !$payment->getdtholderbirth() ) $payment->setdtholderbirth('');
	if( !$payment->getnrholderddd() ) $payment->setnrholderddd('');
	if( !$payment->getnrholderphone() ) $payment->setnrholderphone('');
	if( !$payment->getdesholdername() ) $payment->setdesholdername('');
	if( !$payment->getdescardcode_number() ) $payment->setdescardcode_number('');
	if( !$payment->getdescardcode_month() ) $payment->setdescardcode_month('');
	if( !$payment->getdescardcode_year() ) $payment->setdescardcode_year('');
	if( !$payment->getdescardcode_cvc() ) $payment->setdescardcode_cvc('');*/



	$inplan = Plan::getPlanArray($plan);

	//$address = new Address();

	//$lastAddressPlan = Address::getLastAddressPlan($user->getiduser());




	$page = new PageDashboard();

	$page->setTpl(
		
		"plans-renewal-checkout",

		[
			'user'=>$user->getValues(),
			//'payment'=>$payment->getValues(),
			'inplan'=>$inplan,
			'error'=>Payment::getError(),
			'success'=>Payment::getError()

		]
	
	);//end setTpl

});//END route














$app->post( "/dashboard/renovar/checkout", function()
{


	User::verifyLogin(false);

	$user = User::getFromSession();





	$address = new Address();

	$address->get((int)$user->getiduser());


	







	$payment = new Payment();


	


	
	if( isset($_POST['checkout-boleto']) )
	{



		/*$_POST['nrholderddd'] = $user->getnrholderddd();
		$_POST['nrholderphone'] = $user->getnrholderphone();
		$_POST['desholdername'] = $user->getdesholdername();
		$_POST['dtholderbirth'] = $user->getdtholderbirth();
		$_POST['inholdertypedoc'] = $user->getinholdertypedoc();
		$_POST['desholderdocument'] = $user->getdesholderdocument();
		$_POST['zipcode'] = $address->getdeszipcode();
		$_POST['desholderaddress'] = $address->getdesholderaddress();
		$_POST['desholdernumber'] = $address->getdesholdernumber();
		$_POST['desholdercomplement'] = $address->getdesholdercomplement();
		$_POST['desholderdistrict'] = $address->getdesholderdistrict();
		$_POST['desholdercity'] = $address->getdesholdercity();
		$_POST['desholderstate'] = $address->getdesholderstate();*/

		/*$inholdertypedoc = $user->getintypedoc();
		$desholderdocument = $user->getdesdocument();
		$nrholderddd = $user->getnrddd();
		$nrholderphone = $user->getnrphone();
		$dtholderbirth = $user->getdtbirth();
		
		$deszipcode = $address->getdeszipcode();
		$desholderaddress = $address->getdesaddress();
		$desholdernumber = $address->getdesnumber();
		$desholdercomplement = $address->getdescomplement();
		$desholderdistrict = $address->getdesdistrict();
		$desholdercity = $address->getdescity();
		$desholderstate = $address->getdesstate();*/


		$inholdertypedoc = null;
		$desholderdocument = null;
		$nrholderddd = null;
		$nrholderphone = null;
		$dtholderbirth = null;
		
		$desholderzipcode = null;
		$desholderaddress = null;
		$desholdernumber = null;
		$desholdercomplement = null;
		$desholderdistrict = null;
		$desholdercity = null;
		$desholderstate = null;

		$desholdername = null;
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
			
			!isset($_POST['desholderdocument']) 
			|| 
			$_POST['desholderdocument'] === ''
			
		)
		{

			Payment::setError("Informe o número do documento");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$desholderdocument = Validate::validateDocument($_POST['inholdertypedoc'], $_POST['desholderdocument']) )
		{

			Payment::setError("Informe um documento válido");
			header('Location: /dashboard/renovar');
			exit;

		}//end if
		











		if(
			
			!isset($_POST['nrholderddd']) 
			|| 
			$_POST['nrholderddd'] === ''
			
		)
		{

			Payment::setError("Informe o DDD");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if(
			
			!isset($_POST['nrholderphone']) 
			|| 
			$_POST['nrholderphone'] === ''
			
		)
		{

			Payment::setError("Informe o telefone ou celular");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$nrholderddd = Validate::validateDDD($_POST['nrholderddd']) )
		{

			Payment::setError("Informe um DDD válido");
			header('Location: /dashboard/renovar');
			exit;

		}//end if


		if( !$nrholderphone = Validate::validatePhone($_POST['nrholderphone']) )
		{

			Payment::setError("Informe um telefone ou celular válido");
			header('Location: /dashboard/renovar');
			exit;

		}//end if














		if(
			
			!isset($_POST['dtholderbirth']) 
			|| 
			$_POST['dtholderbirth'] === ''
			
		)
		{

			Payment::setError("Informe a data de nascimento");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$dtholderbirth = Validate::validateDate($_POST['dtholderbirth'], 0) )
		{

			Payment::setError("Informe uma data válida");
			header('Location: /dashboard/renovar');
			exit;

		}//end if










		if( 
		
			!isset($_POST['zipcode']) 
			|| 
			$_POST['zipcode'] === ''
		)
		{

			Payment::setError("Informe o CEP");
			header('Location: /dashboard/renovar');
			exit;
			
		}//end if


		if( !$desholderzipcode = Validate::validateCEP($_POST['zipcode']) )
		{

			Payment::setError("Informe um CEP válido");
			header('Location: /dashboard/renovar');
			exit;

		}//end if












		if(
			!isset($_POST['desholderaddress']) 
			|| 
			$_POST['desholderaddress'] === ''
			
		)
		{

			Payment::setError("Informe o endereço");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$desholderaddress = Validate::validateString($_POST['desholderaddress']) )
		{

			Payment::setError("O seu endereço não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /dashboard/renovar');
			exit;

		}//end if












		

		if(
			
			!isset($_POST['desholdernumber']) 
			|| 
			$_POST['desholdernumber'] === ''
			
		)
		{

			Payment::setError("Informe o número");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$desholdernumber = Validate::validateNumber($_POST['desholdernumber']) )
		{

			Payment::setError("Informe o seu nome apenas com números");
			header('Location: /dashboard/renovar');
			exit;

		}//end if











		if(
			
			!isset($_POST['desholderdistrict']) 
			|| 
			$_POST['desholderdistrict'] === ''
			
		)
		{

			Payment::setError("Informe o bairro");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$desholderdistrict = Validate::validateString($_POST['desholderdistrict']) )
		{

			Payment::setError("O nome do bairro não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /dashboard/renovar');
			exit;

		}//end if








		if(
		
			!isset($_POST['descardcode_number']) 
			|| 
			$_POST['descardcode_number'] === ''
			
		)
		{

			Payment::setError("Informe o número do cartão");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$descardcode_number = Validate::validateCardNumber($_POST['descardcode_number']) )
		{

			Payment::setError("Informe o número do cartão com 12 dígitos");
			header('Location: /dashboard/renovar');
			exit;

		}//end if












		if(
			
			!isset($_POST['desholdername']) 
			|| 
			$_POST['desholdername'] === ''
			
		)
		{

			Payment::setError("Informe o nome tal como está impresso no cartão");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$desholdername = Validate::validateCardName($_POST['desholdername']) )
		{

			Payment::setError("O seu nome não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /dashboard/renovar');
			exit;

		}//end if











		if(
			
			!isset($_POST['descardcode_month']) 
			|| 
			$_POST['descardcode_month'] === ''
			
		)
		{

			Payment::setError("Informe o mês de validade do cartão");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$descardcode_month = Validate::validateMonth($_POST['descardcode_month']) )
		{

			Payment::setError("Informe o mês de validade com 2 dígitos");
			header('Location: /dashboard/renovar');
			exit;

		}//end if











		if(
			
			!isset($_POST['descardcode_year']) 
			|| 
			$_POST['descardcode_year'] === ''
			
		)
		{

			Payment::setError("Informe o ano de validade do cartão");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$descardcode_year = Validate::validateYear($_POST['descardcode_year']) )
		{

			Payment::setError("Informe o ano de validade com 4 dígitos");
			header('Location: /dashboard/renovar');
			exit;

		}//end if









		if(
			
			!isset($_POST['descardcode_cvc']) 
			|| 
			$_POST['descardcode_cvc'] === ''
			
		)
		{

			Payment::setError("Informe o código de segurança do cartão");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$descardcode_cvc = Validate::validateCvc($_POST['descardcode_cvc']) )
		{

			Payment::setError("Informe o código de segurança apenas 3 a 4 dígitos");
			header('Location: /dashboard/renovar');
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
	else
	{






		if(
		
			!isset($_POST['descardcode_number']) 
			|| 
			$_POST['descardcode_number'] === ''
			
		)
		{

			Payment::setError("Informe o Número do Cartão");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$descardcode_number = Validate::validateCardNumber($_POST['descardcode_number']) )
		{

			Payment::setError("Informe o número do cartão com 12 dígitos");
			header('Location: /dashboard/renovar');
			exit;

		}//end if







		if(
			
			!isset($_POST['desholdername']) 
			|| 
			$_POST['desholdername'] === ''
			
		)
		{

			Payment::setError("Informe o nome tal como está impresso no cartão");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$desholdername = Validate::validateCardName($_POST['desholdername']) )
		{

			Payment::setError("O seu nome não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /dashboard/renovar');
			exit;

		}//end if





		if(
			
			!isset($_POST['descardcode_month']) 
			|| 
			$_POST['descardcode_month'] === ''
			
		)
		{

			Payment::setError("Informe o mês de validade do cartão");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$descardcode_month = Validate::validateMonth($_POST['descardcode_month']) )
		{

			Payment::setError("Informe o mês de validade com 2 dígitos");
			header('Location: /dashboard/renovar');
			exit;

		}//end if









		if(
			
			!isset($_POST['descardcode_year']) 
			|| 
			$_POST['descardcode_year'] === ''
			
		)
		{

			Payment::setError("Informe o ano de validade do cartão");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$descardcode_year = Validate::validateYear($_POST['descardcode_year']) )
		{

			Payment::setError("Informe o ano de validade com 4 dígitos");
			header('Location: /dashboard/renovar');
			exit;

		}//end if












		if(
			
			!isset($_POST['descardcode_cvc']) 
			|| 
			$_POST['descardcode_cvc'] === ''
			
		)
		{

			Payment::setError("Informe o código de segurança do cartão.");
			header('Location: /dashboard/renovar');
			exit;

		}//end if

		if( !$descardcode_cvc = Validate::validateCvc($_POST['descardcode_cvc']) )
		{

			Payment::setError("Informe o código de segurança apenas 3 a 4 dígitos");
			header('Location: /dashboard/renovar');
			exit;

		}//end if









		/*$_POST['nrholderddd'] = $user->getnrddd();
		$_POST['nrholderphone'] = $user->getnrphone();
		$_POST['desholdername'] = $user->getdesperson();
		$_POST['dtholderbirth'] = $user->getdtbirth();
		$_POST['inholdertypedoc'] = $user->getintypedoc();
		$_POST['desholderdocument'] = $user->getdesdocument();
		$_POST['zipcode'] = $address->getdeszipcode();
		$_POST['desholderaddress'] = $address->getdesaddress();
		$_POST['desholdernumber'] = $address->getdesnumber();
		$_POST['desholdercomplement'] = $address->getdescomplement();
		$_POST['desholderdistrict'] = $address->getdesdistrict();
		$_POST['desholdercity'] = $address->getdescity();
		$_POST['desholderstate'] = $address->getdesstate();*/
		

		$inholdertypedoc = $user->getintypedoc();
		$desholderdocument = $user->getdesdocument();
		$nrholderddd = $user->getnrddd();
		$nrholderphone = $user->getnrphone();
		$dtholderbirth = $user->getdtbirth();
		
		$desholderzipcode = $address->getdeszipcode();
		$desholderaddress = $address->getdesaddress();
		$desholdernumber = $address->getdesnumber();
		$desholdercomplement = $address->getdescomplement();
		$desholderdistrict = $address->getdesdistrict();
		$desholdercity = $address->getdescity();

		$desholderstate = $address->getdesstate();

		$desholdername = $_POST['desholdername'];
		$descardcode_number = $_POST['descardcode_number'];
		$descardcode_month = $_POST['descardcode_month'];
		$descardcode_year = $_POST['descardcode_year'];
		$descardcode_number = $_POST['descardcode_number'];

		$payment->setinpaymentmethod('2');
		$payment->setnrinstallment($_POST['installment']);



	

	}//end else



	





	$cart = new Cart();

	$data = [

		'dessessionid'=>session_id(),
		'iduser'=>$user->getiduser(),
		'incartstatus'=>0

	];//end $data


	$cart->setData($data);

	$cart->update();





	//$account = new Account();
	//$account->get((int)$user->getiduser());






	
	$wirecard = new Wirecard();

	//$account = new Account();
	//$account->get((int)$user->getiduser());

	$wirecardCustomerData = $wirecard->createCustomer(

			$user->getdesperson(),
			$user->getdesemail(),
			$user->getdtbirth(),
			$user->getintypedoc(),
			$user->getdesdocument(),
			$payment->getinpaymentmethod(),
			$user->getnrcountryarea(),
			$user->getnrddd(),
			$user->getnrphone(),
			$address->getdeszipcode(),
			$address->getdesaddress(),
			$address->getdesnumber(),
			$address->getdescomplement(),
			$address->getdesdistrict(),
			$address->getdescity(),
			$address->getdesstatecode(),
			$descardcode_month,
			(int)$descardcode_year,
			$descardcode_number,
			$descardcode_cvc


	);//END createCustomer


		



	$customer = new Customer();

	$customer->setData([

		'iduser'=>$user->getiduser(),
		'descustomercode'=>$wirecardCustomerData['descustomercode'],
		'desname'=>$user->getdesperson(),
		'desemail'=>$user->getdesemail(),
		'nrcountryarea'=>$user->getnrcountryarea(),
		'nrddd'=>$user->getnrddd(),
		'nrphone'=>$user->getnrphone(),
		'intypedoc'=>$user->getintypedoc(),
		'desdocument'=>$user->getdesdocument(),
		'deszipcode'=>$address->getdeszipcode(),
		'desaddress'=>$address->getdesaddress(),
		'desnumber'=>$address->getdesnumber(),
		'descomplement'=>$address->getdescomplement(),
		'desdistrict'=>$address->getdesdistrict(),
		'descity'=>$address->getdescity(),
		'desstate'=>$address->getdesstatecode(),
		'descountry'=>$address->getdescountrycode(),
		'descardcode'=>$wirecardCustomerData['descardcode'],
		'desbrand'=>$wirecardCustomerData['desbrand'],
		'infirst6'=>$wirecardCustomerData['infirst6'],
		'inlast4'=>$wirecardCustomerData['inlast4'],
		'dtbirth'=>$user->getdtbirth()

	]);//end setData



	$customer->save();




	

	if($customer->getidcustomer() > 0)
	{

		$plan = new Plan();

		$lastplan = $plan->getLastPlanPurchased($user->getiduser());

		
		$inplan = Plan::getPlanArray($_POST['inplancode']);

		

		$dtbegin = new DateTime($lastplan['dtend'] ." + 1 day");

		//$dtbegin->format('Y-m-d');

		$dtend = new DateTime($dtbegin->format('Y-m-d') . ' +'. $inplan['inperiod'] .' month');



		//$dtend->format('Y-m-d');



		$plan->setData([

			'iduser'=>$user->getiduser(),
			'iddiscount'=>NULL,
			'idcupom'=>NULL,
			'incupom'=>0,
			'indiscount'=>0,
			'inplancode'=>$_POST['inplancode'],
			'inmigration'=>0,
			'inperiod'=>$inplan['inperiod'],
			'desplan'=>$inplan['desplan'],
			'vlregularprice'=>$inplan['vlregularprice'],
			'vlsaleprice'=>$inplan['vlsaleprice'],
			'dtbegin'=>$dtbegin->format('Y-m-d'),
			'dtend'=>$dtend->format('Y-m-d')

		]);//end setData

		



		$plan->save();



		


		if( $plan->getidplan() > 0)
		{


	

			$cart->addItem( $plan->getidplan(), 0);


					


			$wirecardPaymentData = $wirecard->payOrderPlan(

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
				$descardcode_month,
				$descardcode_year,
				$descardcode_number,
				$descardcode_cvc

			);//end payPlan


				

			$payment->setData([

				'iduser'=>$user->getiduser(),
				'despaymentcode'=>$wirecardPaymentData['despaymentcode'],
				'inpaymentstatus'=>$wirecardPaymentData['inpaymentstatus'],
				'incharge'=>0,
				'inpaymentmethod'=>$payment->getinpaymentmethod(),
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



				




			if ( $payment->getidpayment() > 0)
			{




				if( in_array((int)$payment->getinpaymentmethod(), [1,2]) )
				{

					//$vlmktpercentage = Rule::MKT_CARD_PERCENTAGE;
					//$vlmktfixed = Rule::MKT_CARD_FIXED;
					
					$vlpropercentage = Rule::PRO_CARD_PERCENTAGE;
					$vlprofixed = Rule::PRO_CARD_FIXED;
					$nrantecipationperiod = Rule::CARD_ANTECIPATION_PERIOD;

				}//end if
				else
				{

					//$vlmktpercentage = Rule::MKT_BOLETO_PERCENTAGE;
					//$vlmktfixed = Rule::MKT_BOLETO_FIXED;
					$vlpropercentage = NULL;
					$vlprofixed = Rule::PRO_BOLETO;
					$nrantecipationperiod = Rule::BOLETO_ANTECIPATION_PERIOD;

				}//end else



				//$vlantecipation = Wirecard::getAntecipationValue($payment->getnrinstallment());

				

				$fee = new Fee();

				$fee->setData([

					'iduser'=>$user->getiduser(),
					'vlmktpercentage'=>NULL,
					'vlmktfixed'=>NULL,
					'vlpropercentage'=>$vlpropercentage,
					'vlprofixed'=>$vlprofixed,
					'vlantecipation'=>$wirecardPaymentData['vlantecipation'],
					'nrantecipationperiod'=>$nrantecipationperiod
					

				]);//end setData

				


				$fee->save();








				if ((int)$fee->getidfee() > 0)
				{


					# code...
					$cart->setincartstatus('1');
					$cart->update();
					Cart::removeFromSession();





					
					$order = new Order();

					$order->setData([

						'iduser'=>$user->getiduser(),
						'idcart'=>$cart->getidcart(),
						'idcustomer'=>$customer->getidcustomer(),
						'idpayment'=>$payment->getidpayment(),
						'idfee'=>$fee->getidfee(),
						'desordercode'=>$wirecardPaymentData['desordercode'],
						'vltotal'=>$wirecardPaymentData['vltotal'],
						'vlseller'=>$wirecardPaymentData['vlseller'],
						'vlmarketplace'=>$wirecardPaymentData['vlmarketplace'],
						'vlprocessor'=>$wirecardPaymentData['vlprocessor']

					]);//end setData



					$order->save();

					




					if( $order->getidorder() > 0 )
					{

						$consort = new Consort();

						$consort->get((int)$user->getiduser());


						$userMailer = new Mailer(
									
							$user->getdeslogin(), 
							$user->getdesperson(), 
							"Amar Casar - Renovação de Plano",
							# template do e-mail em si na /views/email/ e não da administração
							"plan-renewal", 
							
							array(

								"consort"=>$consort->getValues(),
								"user"=>$user->getValues(),
								"plan"=>$plan->getValues()

							)//end array
						
						);//end Mailer

						
						$userMailer->send();



					
						$user->setinplan($plan->getinplancode());
						$user->setdtplanend($plan->getdtend());


						
						$user->update();
						$user->setToSession();


						Payment::setSuccess('Renovação de Plano realizada');
						
						//User::loginAfterPlanPurchase($user->getdeslogin(), $user->getdespassword());

						header("Location: /dashboard/meu-plano");
						exit;

					}//end if




				}//end if
				

			}//end if

		}//end if

	}//end if



});//END route













	/*$app->post( "/dashboard/renovar/checkout", function()
{


	User::verifyLogin(false);

	$user = User::getFromSession();







		
	
	if( 
		
		!isset($_POST['zipcode']) 
		|| 
		$_POST['zipcode'] === ''
	)
	{

		Payment::setError("Informe o CEP.");
		header('Location: /dashboard/renovar/checkout');
		exit;
		
	}//end if

	














	if(
		!isset($_POST['desholderaddress']) 
		|| 
		$_POST['desholderaddress'] === ''
		
	)
	{

		Payment::setError("Informe o endereço.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if









	

	if(
		
		!isset($_POST['desholdernumber']) 
		|| 
		$_POST['desholdernumber'] === ''
		
	)
	{

		Payment::setError("Informe o número.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if












	if(
		
		!isset($_POST['desholderdistrict']) 
		|| 
		$_POST['desholderdistrict'] === ''
		
	)
	{

		Payment::setError("Informe o bairro.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if












	if(
		
		!isset($_POST['desholdercity']) 
		|| 
		$_POST['desholdercity'] === ''
		
	)
	{

		Payment::setError("Informe a cidade.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if














	if(
		
		!isset($_POST['desholderstate']) 
		|| 
		$_POST['desholderstate'] === ''
		
	)
	{

		Payment::setError("Informe o estado.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if






















	if(
		
		!isset($_POST['inholdertypedoc']) 
		|| 
		$_POST['inholdertypedoc'] === ''
		
	)
	{

		Payment::setError("Informe o Tipo de Documento.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if









	if(
		
		!isset($_POST['desholderdocument']) 
		|| 
		$_POST['desholderdocument'] === ''
		
	)
	{

		Payment::setError("Informe o Número do Documento.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if


















	

	if(
		
		!isset($_POST['dtholderbirth']) 
		|| 
		$_POST['dtholderbirth'] === ''
		
	)
	{

		Payment::setError("Informe o Nascimento.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if
















	if(
		
		!isset($_POST['nrholderphone']) 
		|| 
		$_POST['nrholderphone'] === ''
		
	)
	{

		Payment::setError("Informe o Telefone.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if











	if(
		
		!isset($_POST['descardcode_number']) 
		|| 
		$_POST['descardcode_number'] === ''
		
	)
	{

		Payment::setError("Informe o Número do Cartão.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if













	if(
		
		!isset($_POST['desholdername']) 
		|| 
		$_POST['desholdername'] === ''
		
	)
	{

		Payment::setError("Informe o Nome tal como está impresso no Cartão.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if













	if(
		
		!isset($_POST['descardcode_month']) 
		|| 
		$_POST['descardcode_month'] === ''
		
	)
	{

		Payment::setError("Informe o Mês de Validade do Cartão.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if













	if(
		
		!isset($_POST['descardcode_year']) 
		|| 
		$_POST['descardcode_year'] === ''
		
	)
	{

		Payment::setError("Informe o Ano de Validade do Cartão.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if














	if(
		
		!isset($_POST['descardcode_cvc']) 
		|| 
		$_POST['descardcode_cvc'] === ''
		
	)
	{

		Payment::setError("Informe o Código de Segurança do Cartão.");
		header('Location: /dashboard/renovar/checkout');
		exit;

	}//end if




















	$cart = new Cart();

	$data = [

		'dessessionid'=>session_id(),
		'iduser'=>$user->getiduser(),
		'incartstatus'=>0

	];//end $data


	$cart->setData($data);

	$cart->update();





	//$account = new Account();
	//$account->get((int)$user->getiduser());




	$address = new Address();

	$address->get((int)$user->getiduser());



	
	$wirecard = new Wirecard();

	//$account = new Account();
	//$account->get((int)$user->getiduser());

	$wirecardCustomerData = $wirecard->createCustomer(

			$user->getdesperson(),
			$user->getdesemail(),
			$user->getdtbirth(),
			$user->getintypedoc(),
			$user->getdesdocument(),
			$user->getnrcountryarea(),
			$user->getnrddd(),
			$user->getnrphone(),
			$address->getdeszipcode(),
			$address->getdesaddress(),
			$address->getdesnumber(),
			$address->getdescomplement(),
			$address->getdesdistrict(),
			$address->getdescity(),
			$address->getdesstate(),
			$_POST['descardcode_month'],
			(int)$_POST['descardcode_year'],
			$_POST['descardcode_number'],
			$_POST['descardcode_cvc']

	);//END createCustomer





	$customer = new Customer();

	$customer->setData([

		'iduser'=>$user->getiduser(),
		'descustomercode'=>$wirecardCustomerData['descustomercode'],
		'desname'=>$user->getdesperson(),
		'desemail'=>$user->getdesemail(),
		'nrcountryarea'=>$user->getnrcountryarea(),
		'nrddd'=>$user->getnrddd(),
		'nrphone'=>$user->getnrphone(),
		'intypedoc'=>$user->getintypedoc(),
		'desdocument'=>$user->getdesdocument(),
		'deszipcode'=>$address->getdeszipcode(),
		'desaddress'=>$address->getdesaddress(),
		'desnumber'=>$address->getdesnumber(),
		'descomplement'=>$address->getdescomplement(),
		'desdistrict'=>$address->getdesdistrict(),
		'descity'=>$address->getdescity(),
		'desstate'=>$address->getdesstate(),
		'descountry'=>$address->getdescountry(),
		'descardcode'=>$wirecardCustomerData['descardcode'],
		'desbrand'=>$wirecardCustomerData['desbrand'],
		'infirst6'=>$wirecardCustomerData['infirst6'],
		'inlast4'=>$wirecardCustomerData['inlast4'],
		'dtbirth'=>$user->getdtbirth()

	]);//end setData


	$customer->save();




	

	if($customer->getidcustomer() > 0)
	{

		$plan = new Plan();

		$lastplan = $plan->getLastPlanPurchased($user->getiduser());

		$inplan = Plan::getPlanArray($_POST['inplan']);

		$inplanCode = $_POST['inplan'];




		$dtbegin = new DateTime($lastplan['dtend'] ." + 1 day");

		//$dtbegin->format('Y-m-d');

		$dtend = new DateTime($dtbegin->format('Y-m-d') . ' +'. $inplan['inperiod'] .' month');



		//$dtend->format('Y-m-d');



		$plan->setData([

			'iduser'=>$user->getiduser(),
			'iddiscount'=>NULL,
			'idcupom'=>NULL,
			'incupom'=>0,
			'indiscount'=>0,
			'inplancode'=>$_POST['inplan'],
			'inmigration'=>0,
			'inperiod'=>$inplan['inperiod'],
			'desplan'=>utf8_decode($inplan['desplan']),
			'vlregularprice'=>$inplan['vlregularprice'],
			'vlsaleprice'=>$inplan['vlsaleprice'],
			'dtbegin'=>$dtbegin->format('Y-m-d'),
			'dtend'=>$dtend->format('Y-m-d')

		]);//end setData


		$plan->save();



		


		if( $plan->getidplan() > 0)
		{


			$_POST['desholderaddress'] = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $_POST['desholderaddress']);





			$cart->addItem( $plan->getidplan(), 0);


					


			$wirecardPaymentData = $wirecard->payOrderPlan(

				$customer->getdescustomercode(),
				$cart->getidcart(),
				Rule::NR_COUNTRY_AREA,
				$_POST['nrholderddd'],
				$_POST['nrholderphone'],
				$_POST['desholdername'],
				$_POST['dtholderbirth'],
				$_POST['inholdertypedoc'],
				$_POST['desholderdocument'],
				$_POST['zipcode'],
				$_POST['desholderaddress'],
				$_POST['desholdernumber'],
				$_POST['desholdercomplement'],
				$_POST['desholderdistrict'],
				$_POST['desholdercity'],
				$_POST['desholderstate'],
				$_POST['descardcode_month'],
				$_POST['descardcode_year'],
				$_POST['descardcode_number'],
				$_POST['descardcode_cvc']


			);//end payPlan




			$payment = new Payment();	

			$payment->setData([

				'iduser'=>$user->getiduser(),
				'despaymentcode'=>$wirecardPaymentData['despaymentcode'],
				'inpaymentstatus'=>$wirecardPaymentData['inpaymentstatus'],
				'desholdername'=>$_POST['desholdername'],
				'nrholdercountryarea'=>Rule::NR_COUNTRY_AREA,
				'nrholderddd'=>$_POST['nrholderddd'],
				'nrholderphone'=>$_POST['nrholderphone'],
				'inholdertypedoc'=>$_POST['inholdertypedoc'],
				'desholderdocument'=>$_POST['desholderdocument'],
				'desholderzipcode'=>$_POST['zipcode'],
				'desholderaddress'=>$_POST['desholderaddress'],
				'desholdernumber'=>$_POST['desholdernumber'],
				'desholdercomplement'=>$_POST['desholdercomplement'],
				'desholderdistrict'=>$_POST['desholderdistrict'],
				'desholdercity'=>$_POST['desholdercity'],
				'desholderstate'=>$_POST['desholderstate'],
				'dtholderbirth'=>$_POST['dtholderbirth']

			]);		

			$payment->update();







			if ( $payment->getidpayment() > 0)
			{



				$cart->setincartstatus('1');
				$cart->update();
				Cart::removeFromSession();





				
				$order = new Order();

				$order->setData([

					'iduser'=>$user->getiduser(),
					'idcart'=>$cart->getidcart(),
					'idcustomer'=>$customer->getidcustomer(),
					'idpayment'=>$payment->getidpayment(),
					'desordercode'=>$wirecardPaymentData['desordercode'],
					'vltotal'=>$plan->getvlsaleprice()

				]);//end setData

				$order->update();

				




				if( $order->getidorder() > 0 )
				{


					$userMailer = new Mailer(
								
						$user->getdeslogin(), 
						$user->getdesperson(), 
						"Amar Casar - Renovação de Plano",
						# template do e-mail em si na /views/email/ e não da administração
						"plan-renewal", 
						
						array(

							"user"=>$user->getValues(),
							"plan"=>$plan->getValues()

						)//end array
					
					);//end Mailer

					
					$userMailer->send();



				
					$user->setinplan($inplanCode);
					$user->setdtplanend($plan->getdtend());


					
					$user->update();
					$user->setToSession();


					Payment::setSuccess('Renovação de Plano realizada');
					
					//User::loginAfterPlanPurchase($user->getdeslogin(), $user->getdespassword());

					header("Location: /dashboard/meu-plano");
					exit;

				}//end if
				

			}//end if

		}//end if

	}//end if



});//END route*/













$app->get( "/dashboard/renovar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();


	   
	$inplan = Plan::getPlanArrayRenewal( $user->getinplancontext() );




	$page = new PageDashboard();

	$page->setTpl(
		
 		"plans-renewal", 
		
		[
			'user'=>$user->getValues(),
			//'user'=>$user->getValues(),
			'inplan'=>$inplan,
			'success'=>Plan::getSuccess(),		
			'error'=>Plan::getError()		

		]
	
	);//end setTpl

});//END route









?>