<?php

use Core\PageDashboard;
use Core\Photo;
use Core\Rule;
use Core\Wirecard;
use Core\Mailer;
use Core\Model\User;
use Core\Model\Plan;
use Core\Model\Payment;
use Core\Model\Address;
use Core\Model\Customer;
use Core\Model\OrderPlan;








$app->get( "/dashboard/meu-plano/upgrade/checkout", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();



	if ( isset($_GET['plano']) )
	{

		$plan['inplan'] = $_GET['plano'];

	}//end if
	else if( !isset($_GET['plano']) )
	{

		header('Location: /dashaboard/meu-plano/upgrade');
		exit;

	}//end else if


	$payment = new Payment();

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
	if( !$payment->getdescardcode_cvc() ) $payment->setdescardcode_cvc('');



	$inplan = Wirecard::getPlanArray($plan['inplan']);

	//$address = new Address();

	//$lastAddressPlan = Address::getLastAddressPlan($user->getiduser());



	$page = new PageDashboard();

	$page->setTpl(
		
		"plans-upgrade-checkout",

		[
			'payment'=>$payment->getValues(),
			'plan'=>$plan,
			'inplan'=>$inplan,
			'paymentError'=>Payment::getError()

		]
	
	);//end setTpl

});//END route














$app->post( "/dashboard/meu-plano/upgrade/checkout", function()
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
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;
		
	}//end if




	if(
		!isset($_POST['desholderaddress']) 
		|| 
		$_POST['desholderaddress'] === ''
		
	)
	{

		Payment::setError("Informe o endereço.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if


	

	if(
		
		!isset($_POST['desholdernumber']) 
		|| 
		$_POST['desholdernumber'] === ''
		
	)
	{

		Payment::setError("Informe o número.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['desholderdistrict']) 
		|| 
		$_POST['desholderdistrict'] === ''
		
	)
	{

		Payment::setError("Informe o bairro.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if




	if(
		
		!isset($_POST['desholdercity']) 
		|| 
		$_POST['desholdercity'] === ''
		
	)
	{

		Payment::setError("Informe a cidade.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if



	if(
		
		!isset($_POST['desholderstate']) 
		|| 
		$_POST['desholderstate'] === ''
		
	)
	{

		Payment::setError("Informe o estado.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if




	/*if(
		
		!isset($_POST['descountry']) 
		|| 
		$_POST['descountry'] === ''
		
	)
	{

		Payment::setError("Informe o país.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if*/


	/*if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		Payment::setError("Informe o Nome.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if*/

	if(
		
		!isset($_POST['inholdertypedoc']) 
		|| 
		$_POST['inholdertypedoc'] === ''
		
	)
	{

		Payment::setError("Informe o Tipo de Documento.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desholderdocument']) 
		|| 
		$_POST['desholderdocument'] === ''
		
	)
	{

		Payment::setError("Informe o Número do Documento.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if

	/*if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	)
	{

		Payment::setError("Informe o E-mail.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if*/

	if(
		
		!isset($_POST['dtholderbirth']) 
		|| 
		$_POST['dtholderbirth'] === ''
		
	)
	{

		Payment::setError("Informe o Nascimento.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['nrholderphone']) 
		|| 
		$_POST['nrholderphone'] === ''
		
	)
	{

		Payment::setError("Informe o Telefone.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_number']) 
		|| 
		$_POST['descardcode_number'] === ''
		
	)
	{

		Payment::setError("Informe o Número do Cartão.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desholdername']) 
		|| 
		$_POST['desholdername'] === ''
		
	)
	{

		Payment::setError("Informe o Nome tal como está impresso no Cartão.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_month']) 
		|| 
		$_POST['descardcode_month'] === ''
		
	)
	{

		Payment::setError("Informe o Mês de Validade do Cartão.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_year']) 
		|| 
		$_POST['descardcode_year'] === ''
		
	)
	{

		Payment::setError("Informe o Ano de Validade do Cartão.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_cvc']) 
		|| 
		$_POST['descardcode_cvc'] === ''
		
	)
	{

		Payment::setError("Informe o Código de Segurança do Cartão.");
		header('Location: /dashboard/meu-plano/upgrade/checkout');
		exit;

	}//end if

	
	$wirecard = new Wirecard();


	//$account = new Account();
	//$account->get((int)$user->getiduser());


	$wirecardCustomerData = $wirecard->createCustomer(

			$_POST['desholdername'],
			$_POST['desemail'],
			$_POST['dtholderbirth'],
			$_POST['inholdertypedoc'],
			$_POST['desholderdocument'],
			Rule::NR_COUNTRY_AREA,
			$_POST['nrholderddd'],
			$_POST['nrholderphone'],
			$_POST['desholderaddress'],
			$_POST['desholdernumber'],
			$_POST['desholdercomplement'],
			$_POST['desholderdistrict'],
			$_POST['desholdercity'],
			$_POST['desholderstate'],
			$_POST['zipcode'],
			$_POST['descardcode_month'],
			(int)$_POST['descardcode_year'],
			$_POST['descardcode_number'],
			$_POST['descardcode_cvc']


	);//END createCustomer

	



	$customer = new Customer();

	$customer->setData([

		'iduser'=>$user->getiduser(),
		'descustomercode'=>$wirecardCustomerData['descustomercode'],
		'desname'=>$_POST['desholdername'],
		'desemail'=>$_POST['desemail'],
		'nrcountryarea'=>Rule::NR_COUNTRY_AREA,
		'nrddd'=>$_POST['nrholderddd'],
		'nrphone'=>$_POST['desemail'],
		'intypedoc'=>$_POST['nrholderphone'],
		'desdocument'=>$_POST['desholderdocument'],
		'deszipcode'=>$_POST['zipcode'],
		'desaddress'=>$_POST['desholderaddress'],
		'desnumber'=>$_POST['desholdernumber'],
		'descomplement'=>$_POST['desholdercomplement'],
		'desdistrict'=>$_POST['desholderdistrict'],
		'descity'=>$_POST['desholdercity'],
		'desstate'=>$_POST['desholderstate'],
		'descountry'=>Rule::DESCOUNTRY,
		'descardcode'=>$wirecardCustomerData['descardcode'],
		'desbrand'=>$wirecardCustomerData['desbrand'],
		'infirst6'=>$wirecardCustomerData['infirst6'],
		'inlast4'=>$wirecardCustomerData['inlast4'],
		'dtbirth'=>$_POST['dtholderbirth']


	]);//end setData




	$customer->save();


	

	if($customer->getidcustomer() > 0)
	{

		$plan = new Plan();

		$lastplan = $plan->getLastPlanPurchased($user->getiduser());

		$inplan = Wirecard::getPlanArray($_POST['inplan']);

		$inplanCode = $_POST['inplan'];

		//$dtbegin = new DateTime($lastplan['dtend'] ." + 1 day");

		$dtbegin = new DateTime(date('Y-m-d'));

		//$dtbegin->format('Y-m-d');

		//$dtend = new DateTime($dtbegin->format('Y-m-d') . ' +'. $inplan['inperiod'] .' month');

		//$dtend->format('Y-m-d');


		$plan->setData([

			'iduser'=>$user->getiduser(),
			'iddiscount'=>NULL,
			'idcupom'=>NULL,
			'incupom'=>0,
			'indiscount'=>0,
			'insellercategory'=>Rule::SELLER_CATEGORY_PLAN,
			'inplancode'=>$_POST['inplan'],
			'inmigration'=>0,
			'inperiod'=>$inplan['inperiod'],
			'desplan'=>$inplan['desplan'],
			'vlregularprice'=>$inplan['vlprice'],
			'vlsaleprice'=>$inplan['vlprice'],
			'dtbegin'=>$dtbegin->format('Y-m-d'),
			'dtend'=>$lastplan['dtend']

		]);//end setData



		$plan->save();


		# Backup Aula 28 PS
		$_POST['desholderaddress'] = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $_POST['desholderaddress']);


		if( $plan->getidplan() > 0)
		{

			$wirecardPaymentData = $wirecard->payPlan(

				$plan->getidplan(),
				$customer->getdescustomercode(),
				Rule::NR_COUNTRY_AREA,
				$_POST['nrholderddd'],
				$_POST['nrholderphone'],
				$_POST['desholdername'],
				$_POST['dtholderbirth'],
				$_POST['inholdertypedoc'],
				$_POST['desholderdocument'],
				$_POST['desholderaddress'],
				$_POST['desholdernumber'],
				$_POST['desholderdistrict'],
				$_POST['desholdercity'],
				$_POST['desholderstate'],
				$_POST['zipcode'],
				$_POST['desholdercomplement'],
				$_POST['descardcode_month'],
				$_POST['descardcode_year'],
				$_POST['descardcode_number'],
				$_POST['descardcode_cvc']


			);//end payPlan




			$payment = new Payment();

			
			$payment->setData([

				'iduser'=>$user->getiduser(),
				'despaymentcode'=>$wirecardPaymentData['despaymentcode'],
				'desstatus'=>$wirecardPaymentData['desstatus'],
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




			if ( (int)$payment->getidpayment() > 0)
			{

				
				$orderplan = new OrderPlan();

				$orderplan->setData([

					'iduser'=>$user->getiduser(),
					'idplan'=>$plan->getidplan(),
					'idcustomer'=>$customer->getidcustomer(),
					'idpayment'=>$payment->getidpayment(),
					'desordercode'=>$wirecardPaymentData['desordercode'],
					'vltotal'=>$plan->getvlsaleprice()

				]);//end setData

				

				$orderplan->save();


				

				if( $orderplan->getidorderplan() > 0 )
				{

					$userMailer = new Mailer(
								
						$user->getdeslogin(), 
						$user->getdesperson(), 
						"Amar Casar - Upgrade de Plano",
						# template do e-mail em si na /views/email/ e não da administração
						"plan-upgrade", 
						
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

					
					//User::loginAfterPlanPurchase($user->getdeslogin(), $user->getdespassword());

					header("Location: /dashboard/meu-plano");
					exit;

				}//end if
				

			}//end if


		}//end if


	}//end if


});//END route


















$app->get( "/dashboard/meu-plano/upgrade", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	//$plan = new Plan();

	$plan = substr($user->getinplan(), 0, 1);
	$sufix = substr($user->getinplan(), 1, 2);

	$results = Plan::getPlanArrayUpgrade( $plan, $sufix );


	$page = new PageDashboard();

	$page->setTpl(
		
 		"plans-upgrade", 
		
		[
			'plan'=>$plan,
			'sufix'=>$sufix,
			'user'=>$user->getValues(),
			'wirecard'=>$results,
			'planError'=>Plan::getError()
			

		]
	
	);//end setTpl

});//END route










?>