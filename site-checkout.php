<?php

use \Core\Page;
use \Core\Rule;
use \Core\Wirecard;
use \Core\Model\Cart;
use \Core\Model\Address;
use \Core\Model\User;
use \Core\Model\Order;
use \Core\Model\OrderStatus;
use \Core\Model\Payment;
use \Core\Model\Account;
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
		'desperson'=>utf8_decode($_POST['name']),
		'desnick'=>utf8_decode($desnick),
		'desemail'=>$_POST['email'],
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
	
	$wirecard = new Wirecard();

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


	$user = new User();

	$user->getFromHash($hash);

	$wirecard = new Wirecard();

	//$inplan = Wirecard::getPlan($user->getinplan());
	
	$account = new Account();

	# Backup Aula 28 PS
	$_POST['desaddress'] = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $_POST['desaddress']);

	$ddd = substr($_POST['nrphone'], 0, 2);
	$phone = substr($_POST['nrphone'], 2, strlen($_POST['nrphone']));

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


	$wirecardAccountData = $wirecard->createTransparentAccount(

			$user->getdesperson(),
			$user->getdesemail(),
			$_POST['dtbirth'],
			$_POST['desdocument'],
			$ddd,
			$phone,
			$_POST['desaddress'],
			$_POST['desnumber'],
			$_POST['desdistrict'],		
			$_POST['descity'],
			$_POST['desstate'],
			$_POST['zipcode'],
			$_POST['descomplement']


		);//END createTransparentAccount


		//$account->setData($_POST);

		$account->setData([


			'iduser'=>$user->getiduser(),
			'desaccountcode'=>$wirecardAccountData['account'],
			'desaccesstoken'=>$wirecardAccountData['acesstoken'],
			'deschannelid'=>$wirecardAccountData['channelid'],
			'desname'=>$user->getdesperson(),
			'desemail'=>$user->getdesemail(),
			'nrddd'=>$ddd,
			'nrphone'=>$phone,
			'intypedoc'=>$user->getintypedoc(),
			'desdocument'=>$_POST['desdocument'],
		  	'deszipcode' =>$_POST['zipcode'],
			'desaddress'=>$_POST['desaddress'],
			'desnumber' =>$_POST['desnumber'],
		  	'descomplement'=>$_POST['descomplement'],
		  	'desdistrict'=>$_POST['desdistrict'],
		  	'descity'=>$_POST['descity'],
		  	'desstate'=>$_POST['desstate'],
		  	'descountry'=>'BRA',
		  	'dtbirth'=>$_POST['dtbirth']

		]);

		

		$account->save();




	if( $account->getidaccount() > 0 )
	{	

		
		
		$user->setdesdocument($account->getdesdocument());
		$user->setnrddd($account->getnrddd());
		$user->setnrphone($account->getnrphone());
		$user->setdtbirth($account->getdtbirth());


		$user->update();

		header("Location: /checkout/".$hash);
		exit;


	}//end if








});//END route



















$app->get( "/checkout/:hash", function( $hash )
{
	
	$user = new User();

	$user->getFromHash($hash);

	$_SESSION['registerValues'] = $_POST;
	
	$wirecard = new Wirecard();

	$inplan = Wirecard::getPlan($user->getinplan());

	$address = new Address();



	/*if ( isset($_GET['zipcode']) )
	{

		$address->loadFromCEP($_GET['zipcode']);
		$address->setdesnumber($_GET['desnumber']);


	}//end if*/


	if( !$address->getdesaddress() ) $address->setdesaddress('');
	if( !$address->getdesnumber() ) $address->setdesnumber('');
	if( !$address->getdescomplement() ) $address->setdescomplement('');
	if( !$address->getdesdistrict() ) $address->setdesdistrict('');
	if( !$address->getdescity() ) $address->setdescity('');
	if( !$address->getdesstate() ) $address->setdesstate('');
	if( !$address->getdescountry() ) $address->setdescountry('');
	if( !$address->getdeszipcode() ) $address->setdeszipcode('');

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
		
		"checkout", 
		
		[
			'user'=>$user->getValues(),
			'hash'=>$hash,
			'inplan'=>$inplan,
			'payment'=>$payment->getValues(),
			'address'=>$address->getValues(),
			'error'=>Address::getMsgError()
			
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

		Address::setMsgError("Informe o CEP.");
		header('Location: /checkout/'.$hash);
		exit;
		
	}//end if




	if(
		!isset($_POST['desaddress']) 
		|| 
		$_POST['desaddress'] === ''
		
	)
	{

		Address::setMsgError("Informe o endereço.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if


	

	if(
		
		!isset($_POST['desnumber']) 
		|| 
		$_POST['desnumber'] === ''
		
	)
	{

		Address::setMsgError("Informe o número.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if




	if(
		
		!isset($_POST['desdistrict']) 
		|| 
		$_POST['desdistrict'] === ''
		
	)
	{

		Address::setMsgError("Informe o bairro.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if




	if(
		
		!isset($_POST['descity']) 
		|| 
		$_POST['descity'] === ''
		
	)
	{

		Address::setMsgError("Informe a cidade.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if



	if(
		
		!isset($_POST['desstate']) 
		|| 
		$_POST['desstate'] === ''
		
	)
	{

		Address::setMsgError("Informe o estado.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if




	/*if(
		
		!isset($_POST['descountry']) 
		|| 
		$_POST['descountry'] === ''
		
	)
	{

		Address::setMsgError("Informe o país.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if*/


	/*if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nome.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if*/

	if(
		
		!isset($_POST['desdocument']) 
		|| 
		$_POST['desdocument'] === ''
		
	)
	{

		Payment::setMsgError("Informe o CPF.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	/*if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	)
	{

		Payment::setMsgError("Informe o E-mail.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if*/

	if(
		
		!isset($_POST['dtbirth']) 
		|| 
		$_POST['dtbirth'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nascimento.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Telefone.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_number']) 
		|| 
		$_POST['descardcode_number'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Número do Cartão.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['desholdername']) 
		|| 
		$_POST['desholdername'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nome tal como está impresso no Cartão.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_month']) 
		|| 
		$_POST['descardcode_month'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Mês de Validade do Cartão.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_year']) 
		|| 
		$_POST['descardcode_year'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Ano de Validade do Cartão.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_cvv']) 
		|| 
		$_POST['descardcode_cvv'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Código de Segurança do Cartão.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if

	$user = new User();


	$user->getFromHash($hash);
	

	

	$wirecard = new Wirecard();

	$inplan = Wirecard::getPlan($user->getinplan());
	

	$address = new Address();

	# Backup Aula 28 PS
	$_POST['desaddress'] = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $_POST['desaddress']);

	$_POST['desholderzipcode'] = $_POST['zipcode'];
	$_POST['deszipcode'] = $_POST['zipcode'];
	$_POST['iduser'] = $user->getiduser();
	$_POST['desholderaddress'] = $_POST['desaddress'];
	$_POST['desholdernumber'] = $_POST['desnumber'];
	$_POST['desholdercomplement'] = $_POST['descomplement'];
	$_POST['desholdercity'] = $_POST['descity'];
	$_POST['desholderstate'] = $_POST['desstate'];
	$_POST['desholderdistrict'] = $_POST['desdistrict'];

	$address->setData($_POST);

	$address->savePlanAddress();

	$plan = new Plan();


	$plan->setData([

		'iduser'=>$user->getiduser(),
		'idaddressplan'=>$address->getidaddressplan(),
		'idstatus'=>OrderStatus::AGUARDANDO_PAGAMENTO,
		'inplanbought'=>$user->getinplan(),
		'inmigration'=>0,
		'inperiod'=>$inplan['inperiod'],
		'incupom'=>0,
		'vlprice'=>$inplan['vlprice']

	]);//end setData



	$plan->save();


	





	if( $plan->getidplan() > 0 )
	{	

		


		$wirecardAccountData = $wirecard->createTransparentAccount(

			$user->getdesperson(),
			$user->getdesemail(),
			$_POST['dtbirth'],
			$_POST['desdocument'],
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



		);//END createTransparentAccount



		$wirecardPaymentData = $wirecard->payPlan(

			$user->getinplan(),
			$plan->getidplan(),
			$wirecardAccountData['customerid'],
			$user->getdesperson(),
			$_POST['dtbirth'],
			$_POST['desdocument'],
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
			'descustomercode'=>$wirecardAccountData['customerid'],
			'descardcode'=>$wirecardAccountData['descardcode'],
			'desordercode'=>$wirecardPaymentData['desordercode'],
			'despaymentcode'=>$wirecardPaymentData['despaymentcode'],
			'deschannelidcode'=>$wirecardAccountData['channelId'],
			'desname'=>$user->getdesperson(),
			'desholdername'=>$user->getdesperson(),
			'desemail'=>$user->getdesemail(),
			'intypedocument'=>$user->getinusertypedocument(),
			'desdocument'=>$_POST['desdocument'],
			'desholderdocument'=>$_POST['desdocument'],
			'nrphone'=>$_POST['nrphone'],
			'nrholderphone'=>$_POST['nrphone'],
			'dtbirth'=>$_POST['dtbirth'],
			'dtholderbirth'=>$_POST['dtbirth']

		]);


		$payment->savePlan();

	




		if ( (int)$payment->getidpaymentplan() > 0)
		{

			$dtplanbegin = new DateTime(date('Y-m-d'));

			$today = date('Y-m-d');

			$dtplanend = new DateTime('+'.$inplan['inperiod'].' month');

			$dtplanend->format('Y-m-d');

			$user->setdesuserdocument($payment->getdesdocument());
			$user->setinstatus('1');
			$user->setdesaccountcode($wirecardAccountData['account']);
			$user->setdesaccesstoken($wirecardAccountData['accessToken']);
			$user->setdesusercustomercode($wirecardAccountData['customerid']);
			$user->setdesusercardcode($wirecardAccountData['descardcode']);
			$user->setnrphone($payment->getnrphone());
			$user->setdtuserbirth($payment->getdtbirth());
			$user->setdtplanbegin($dtplanbegin->format('Y-m-d'));
			$user->setdtplanend($dtplanend->format('Y-m-d'));

			$user->update();


			User::loginAfterPlanPurchase($user->getdeslogin(), $user->getdespassword());

			header("Location: /dashboard");
			exit;

		}//end if

		//$order->sendOrder();

		//$orderResponse = $order->createOrderInWirecard();

		//if(count($orderResponse) > 0)
		//{

			//$order->sendPayment($orderResponse['id']);

		//}//end if


	}//end if





	





});//END route













?>