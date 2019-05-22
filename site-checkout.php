<?php

use \Core\Page;
use \Core\Rule;
use \Core\Wirecard;
use \Core\Model\Cart;
use \Core\Model\Address;
use \Core\Model\User;
use \Core\Model\UserAddress;
use \Core\Model\Order;
use \Core\Model\OrderPlan;
use \Core\Model\OrderStatus;
use \Core\Model\Payment;
use \Core\Model\Account;
use \Core\Model\Customer;
use \Core\Model\Plan;







$app->get( "/planos", function()
{
	

	$page = new Page();

	$page->setTpl(
		
		"plans"
	
	);//end setTpl

});//END route







$app->get( "/criar-site-de-casamento", function()
{



	if ( isset($_GET['plano']) )
	{

		$plan['inplan'] = $_GET['plano'];

	}//end if
	else if( !isset($_GET['plano']) )
	{

		header('Location: /planos');
		exit;

	}//end else if
	

	$page = new Page();

	$page->setTpl(
		
		"register",

		[
			'plan'=>$plan,
			'errorRegister'=>User::getErrorRegister(),
			'registerValues'=>['name'=>'', 'email'=>'']

		]
	
	);//end setTpl

});//END route








$app->post( "/criar-site-de-casamento", function()
{



	$_SESSION['registerValues'] = $_POST;



	if( 
		
		!isset($_POST['name']) 
		|| 
		$_POST['name'] == ''
	)
	{

		User::setErrorRegister("Preencha o seu nome.");
		header("Location: /criar-site-de-casamento");
		exit;

	}//end if




	if(
		
		!isset($_POST['email']) 
		|| 
		$_POST['email'] == ''
	)
	{

		User::setErrorRegister("Preencha o seu e-mail.");
		header("Location: /criar-site-de-casamento");
		exit;

	}//end if





	if(
		
		!isset($_POST['password']) 
		|| 
		$_POST['password'] == ''
		
	)
	{

		User::setErrorRegister("Preencha a senha.");
		header("Location: /criar-site-de-casamento");
		exit;

	}//end if





	/*if( User::checkLoginExists($_POST['email']) === true )
	{

		User::setErrorRegister("Este endereço de e-mail já está sendo usado por outro usuário.");
		header("Location: /criar-site-de-casamento");
		exit;

	}//end if*/


	$nameArray = explode(' ', $_POST['name']);

	$desnick = $nameArray[0];

	$user = new User();

	$user->setData([

		'deslogin'=>$_POST['email'],
		'despassword'=>$_POST['password'],
		'desdomain'=>NULL,
		'inadmin'=>0,
		'inseller'=>1,
		'instatus'=>0,
		'inplan'=>$_POST['inplan'],
		'interms'=>0,
		'desipterms'=>NULL,
		'dtterms'=>NULL,
		'dtplanbegin'=>NULL,
		'dtplanend'=>NULL,
		'desperson'=>$_POST['name'],
		'desnick'=>$desnick,
		'desemail'=>$_POST['email'],
		'nrcountryarea'=>NULL,
		'nrddd'=>NULL,
		'nrphone'=>NULL,
		'intypedoc'=>0,
		'desdocument'=>NULL,
		'desphoto'=>Rule::DEFAULT_PHOTO,
		'desextension'=>Rule::DEFAULT_PHOTO_EXTENSION,
		'dtbirth'=>NULL


	]);//end setData


	


	$user->save();

	$hash = base64_encode($user->getiduser());

	//User::login($_POST['email'], $_POST['password']);

	header('Location: /cadastrar/'.$hash);
	exit;

});//END route







$app->get( "/cadastrar/:hash", function( $hash )
{
	
	$user = new User();

	$user->getFromHash($hash);

	$_SESSION['registerValues'] = $_POST;
	
	//$wirecard = new Wirecard();

	//$inplan = Wirecard::getPlan($user->getinplan());

	$account = new Account();



	/*if ( isset($_GET['zipcode']) )
	{

		$account->loadFromCEP($_GET['zipcode']);
		$account->setdesnumber($_GET['desnumber']);


	}//end if*/


	if( !$account->getdesaddress() ) $account->setdesaddress('');
	if( !$account->getdesnumber() ) $account->setdesnumber('');
	if( !$account->getdescomplement() ) $account->setdescomplement('');
	if( !$account->getdesdistrict() ) $account->setdesdistrict('');
	if( !$account->getdescity() ) $account->setdescity('');
	if( !$account->getdesstate() ) $account->setdesstate('');
	if( !$account->getdescountry() ) $account->setdescountry('');
	if( !$account->getdeszipcode() ) $account->setdeszipcode('');
	if( !$account->getdesdocument() ) $account->setdesdocument('');
	if( !$account->getdtbirth() ) $account->setdtbirth('');
	if( !$account->getnrddd() ) $account->setnrddd('');
	if( !$account->getnrphone() ) $account->setnrphone('');



	$page = new Page();

	$page->setTpl(
		
		"register-accounts", 
		
		[
			'user'=>$user->getValues(),
			'hash'=>$hash,
			'account'=>$account->getValues(),
			'error'=>Account::getError()
			
		]
	
	);//end setTpl

});//END route















$app->post( "/cadastrar/:hash", function( $hash )
{

		
	
	if( 
		
		!isset($_POST['zipcode']) 
		|| 
		$_POST['zipcode'] === ''
	)
	{

		Account::setError("Informe o CEP.");
		header('Location: /cadastrar/'.$hash);
		exit;
		
	}//end if




	if(
		!isset($_POST['desaddress']) 
		|| 
		$_POST['desaddress'] === ''
		
	)
	{

		Account::setError("Informe o endereço.");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if


	

	if(
		
		!isset($_POST['desnumber']) 
		|| 
		$_POST['desnumber'] === ''
		
	)
	{

		Account::setError("Informe o número.");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if




	if(
		
		!isset($_POST['desdistrict']) 
		|| 
		$_POST['desdistrict'] === ''
		
	)
	{

		Account::setError("Informe o bairro.");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if




	if(
		
		!isset($_POST['descity']) 
		|| 
		$_POST['descity'] === ''
		
	)
	{

		Account::setError("Informe a cidade.");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if



	if(
		
		!isset($_POST['desstate']) 
		|| 
		$_POST['desstate'] === ''
		
	)
	{

		Account::setError("Informe o estado.");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if




	/*if(
		
		!isset($_POST['descountry']) 
		|| 
		$_POST['descountry'] === ''
		
	)
	{

		Account::setError("Informe o país.");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if*/


	/*if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		Payment::setError("Informe o Nome.");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if*/

	if(
		
		!isset($_POST['desdocument']) 
		|| 
		$_POST['desdocument'] === ''
		
	)
	{

		Account::setError("Informe o CPF.");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if

	/*if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	)
	{

		Account::setError("Informe o E-mail.");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if*/

	if(
		
		!isset($_POST['dtbirth']) 
		|| 
		$_POST['dtbirth'] === ''
		
	)
	{

		Account::setError("Informe o Nascimento.");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Account::setError("Informe o Telefone.");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if


	if(
		
		!isset($_POST['interms']) 
		|| 
		$_POST['interms'] === ''
		||
		(int)$_POST['interms'] != 1
		
	)
	{

		Account::setError("Aceitar os Termos de Uso.");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if


	$user = new User();

	$user->getFromHash($hash);

	$wirecard = new Wirecard();

	//$inplan = Wirecard::getPlan($user->getinplan());
	
	$account = new Account();

	# Backup Aula 28 PS
	$_POST['desaddress'] = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $_POST['desaddress']);

	
	//$_POST['nrcountryarea'] = 55;
	//$_POST['descountry'] = 'BRA';
	//$_POST['iduser'] = $user->getiduser();
	//$_POST['desaddress'] = $_POST['desaddress'];
	//$_POST['desnumber'] = $_POST['desnumber'];
	//$_POST['descomplement'] = $_POST['descomplement'];
	//$_POST['descity'] = $_POST['descity'];
	//$_POST['desstate'] = $_POST['desstate'];
	//$_POST['descountry'] = $_POST['descountry'];
	//$_POST['desdocument'] = $_POST['desdocument'];
	//$_POST['dtbirth'] = $_POST['desdistrict'];
	//$_POST['nrphone'] = $_POST['nrphone'];


	$wirecardAccountData = $wirecard->createAccount(

			$user->getdesperson(),
			$user->getdesemail(),
			$_POST['dtbirth'],
			$_POST['desdocument'],
			Rule::NR_COUNTRY_AREA,
			(int)$_POST['nrddd'],
			(int)$_POST['nrphone'],
			$_POST['desaddress'],
			(int)$_POST['desnumber'],
			$_POST['desdistrict'],		
			$_POST['descity'],
			$_POST['desstate'],
			$_POST['zipcode'],
			$_POST['descomplement'],
			Rule::DESCOUNTRY


		);//END createAccount


	


		//$account->setData($_POST);

		$account->setData([


			'iduser'=>$user->getiduser(),
			'desaccountcode'=>$wirecardAccountData['desaccountcode'],
			'desaccesstoken'=>$wirecardAccountData['desaccesstoken'],
			'deschannelid'=>$wirecardAccountData['deschannelid'],
			'desname'=>$user->getdesperson(),
			'desemail'=>$user->getdesemail(),
			'nrcountryarea'=>Rule::NR_COUNTRY_AREA,
			'nrddd'=>$_POST['nrddd'],
			'nrphone'=>$_POST['nrphone'],
			'intypedoc'=>$user->getintypedoc(),
			'desdocument'=>$_POST['desdocument'],
		  	'deszipcode' =>$_POST['zipcode'],
			'desaddress'=>$_POST['desaddress'],
			'desnumber' =>$_POST['desnumber'],
		  	'descomplement'=>$_POST['descomplement'],
		  	'desdistrict'=>$_POST['desdistrict'],
		  	'descity'=>$_POST['descity'],
		  	'desstate'=>$_POST['desstate'],
		  	'descountry'=>Rule::DESCOUNTRY,
		  	'dtbirth'=>$_POST['dtbirth']

		]);

		



		$account->save();




	if( $account->getidaccount() > 0 )
	{	

		$useraddress = new UserAddress();

		$useraddress->setData([


			'iduser'=>$user->getiduser(),
			'deszipcode'=>$account->getdeszipcode(),
			'desaddress'=>$account->getdesaddress(),
			'desnumber'=>$account->getdesnumber(),
			'descomplement'=>$account->getdescomplement(),
			'desdistrict'=>$account->getdesdistrict(),
			'descity'=>$account->getdescity(),
			'desstate'=>$account->getdesstate(),
			'descountry'=>$account->getdescountry()


		]);



		$useraddress->update();




		if( $useraddress->getiduseraddress() > 0 )
		{		

		
			$user->setdesdocument($account->getdesdocument());
			$user->setnrcountryarea($account->getnrcountryarea());
			$user->setnrddd($account->getnrddd());
			$user->setnrphone($account->getnrphone());
			$user->setdtbirth($account->getdtbirth());
			$user->setdtterms(date('Y-m-d H:i:s'));
			$user->setdesipterms($_SERVER['SERVER_ADDR']);
			$user->setinterms($_POST['interms']);


			$user->update();



			header("Location: /checkout/".$hash);
			exit;

		}//end if


	}//end if








});//END route



















$app->get( "/checkout/:hash", function( $hash )
{
	
	$user = new User();

	$user->getFromHash($hash);

	$_SESSION['registerValues'] = $_POST;
	
	$wirecard = new Wirecard();

	$inplan = Wirecard::getPlanArray($user->getinplan());

	//$address = new Address();



	/*if ( isset($_GET['zipcode']) )
	{

		$address->loadFromCEP($_GET['zipcode']);
		$address->setdesnumber($_GET['desnumber']);


	}//end if*/


	$payment = new Payment();


	/*if ( isset($_GET['zipcode']) )
	{

		$account->loadFromCEP($_GET['zipcode']);
		$account->setdesnumber($_GET['desnumber']);


	}//end if*/


	if( !$payment->getdesholderaddress() ) $payment->setdesholderaddress('');
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



	$page = new Page();

	$page->setTpl(
		
		"checkout", 
		
		[
			'hash'=>$hash,
			'inplan'=>$inplan,
			'payment'=>$payment->getValues(),
			'error'=>Payment::getError()
			
		]
	
	);//end setTpl

});//END route















$app->post( "/checkout/:hash", function( $hash )
{

		
	
	if( 
		
		!isset($_POST['zipcode']) 
		|| 
		$_POST['zipcode'] === ''
	)
	{

		Payment::setError("Informe o CEP.");
		header('Location: /checkout/'.$hash);
		exit;
		
	}//end if




	if(
		!isset($_POST['desholderaddress']) 
		|| 
		$_POST['desholderaddress'] === ''
		
	)
	{

		Payment::setError("Informe o endereço.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if


	

	if(
		
		!isset($_POST['desholdernumber']) 
		|| 
		$_POST['desholdernumber'] === ''
		
	)
	{

		Payment::setError("Informe o número.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if




	if(
		
		!isset($_POST['desholderdistrict']) 
		|| 
		$_POST['desholderdistrict'] === ''
		
	)
	{

		Payment::setError("Informe o bairro.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if




	if(
		
		!isset($_POST['desholdercity']) 
		|| 
		$_POST['desholdercity'] === ''
		
	)
	{

		Payment::setError("Informe a cidade.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if



	if(
		
		!isset($_POST['desholderstate']) 
		|| 
		$_POST['desholderstate'] === ''
		
	)
	{

		Payment::setError("Informe o estado.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if




	/*if(
		
		!isset($_POST['descountry']) 
		|| 
		$_POST['descountry'] === ''
		
	)
	{

		Payment::setError("Informe o país.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if*/


	/*if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		Payment::setError("Informe o Nome.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if*/

	if(
		
		!isset($_POST['inholdertypedoc']) 
		|| 
		$_POST['inholdertypedoc'] === ''
		
	)
	{

		Payment::setError("Informe o Tipo de Documento.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['desholderdocument']) 
		|| 
		$_POST['desholderdocument'] === ''
		
	)
	{

		Payment::setError("Informe o Número do Documento.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	/*if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	)
	{

		Payment::setError("Informe o E-mail.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if*/

	if(
		
		!isset($_POST['dtholderbirth']) 
		|| 
		$_POST['dtholderbirth'] === ''
		
	)
	{

		Payment::setError("Informe o Nascimento.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['nrholderphone']) 
		|| 
		$_POST['nrholderphone'] === ''
		
	)
	{

		Payment::setError("Informe o Telefone.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_number']) 
		|| 
		$_POST['descardcode_number'] === ''
		
	)
	{

		Payment::setError("Informe o Número do Cartão.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['desholdername']) 
		|| 
		$_POST['desholdername'] === ''
		
	)
	{

		Payment::setError("Informe o Nome tal como está impresso no Cartão.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_month']) 
		|| 
		$_POST['descardcode_month'] === ''
		
	)
	{

		Payment::setError("Informe o Mês de Validade do Cartão.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_year']) 
		|| 
		$_POST['descardcode_year'] === ''
		
	)
	{

		Payment::setError("Informe o Ano de Validade do Cartão.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_cvc']) 
		|| 
		$_POST['descardcode_cvc'] === ''
		
	)
	{

		Payment::setError("Informe o Código de Segurança do Cartão.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	$user = new User();


	$user->getFromHash($hash);
	


	$wirecard = new Wirecard();

	
	




	$account = new Account();

	$account->get((int)$user->getiduser());

	



	$wirecardCustomerData = $wirecard->createCustomer(

			$user->getdesperson(),
			$user->getdesemail(),
			$user->getdtbirth(),
			$user->getintypedoc(),
			$user->getdesdocument(),
			$user->getnrcountryarea(),
			$user->getnrddd(),
			$user->getnrphone(),
			$account->getdesaddress(),
			$account->getdesnumber(),
			$account->getdescomplement(),
			$account->getdesdistrict(),
			$account->getdescity(),
			$account->getdesstate(),
			$account->getdeszipcode(),
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
		'nrddd'=>$user->getnrddd(),
		'nrphone'=>$user->getnrphone(),
		'intypedoc'=>$user->getintypedoc(),
		'desdocument'=>$user->getdesdocument(),
		'deszipcode'=>$account->getdeszipcode(),
		'desaddress'=>$account->getdesaddress(),
		'desnumber'=>$account->getdesnumber(),
		'descomplement'=>$account->getdescomplement(),
		'desdistrict'=>$account->getdesdistrict(),
		'descity'=>$account->getdescity(),
		'desstate'=>$account->getdesstate(),
		'descountry'=>$account->getdescountry(),
		'descardcode'=>$wirecardCustomerData['descardcode'],
		'desbrand'=>$wirecardCustomerData['desbrand'],
		'infirst6'=>$wirecardCustomerData['infirst6'],
		'inlast4'=>$wirecardCustomerData['inlast4'],
		'dtbirth'=>$user->getdtbirth()


	]);

	$customer->save();

	

	if($customer->getidcustomer() > 0)
	{

		$plan = new Plan();

		$inplan = Wirecard::getPlanArray($user->getinplan());

		$plan->setData([

			'iduser'=>$user->getiduser(),
			'iddiscount'=>NULL,
			'idcupom'=>NULL,
			'incupom'=>0,
			'indiscount'=>0,
			'insellercategory'=>Rule::SELLER_CATEGORY_PLAN,
			'inplancode'=>$user->getinplan(),
			'inmigration'=>0,
			'inperiod'=>$inplan['inperiod'],
			'desplan'=>$inplan['desplan'],
			'vlregularprice'=>$inplan['vlprice'],
			'vlsaleprice'=>$inplan['vlprice']

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

					$dtplanbegin = new DateTime(date('Y-m-d'));

					$today = date('Y-m-d');

					$dtplanend = new DateTime('+'.$inplan['inperiod'].' month');

					$dtplanend->format('Y-m-d');

					$user->setinstatus('1');
					$user->setdtplanbegin($dtplanbegin->format('Y-m-d'));
					$user->setdtplanend($dtplanend->format('Y-m-d'));


					$user->update();


					User::loginAfterPlanPurchase($user->getdeslogin(), $user->getdespassword());

					header("Location: /dashboard");
					exit;

				}//end if
				


			}//end if


		}//end if


	}//end if







});//END route









?>