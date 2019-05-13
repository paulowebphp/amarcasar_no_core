<?php

use \Hcode\Page;
use \Hcode\Model\Cart;
use \Hcode\Model\Address;
use \Hcode\Model\User;
use \Hcode\Model\Order;
use \Hcode\Model\OrderStatus;
use \Hcode\Model\Payment;
use \Hcode\Model\Rule;
use \Hcode\Model\Plan;








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



	$user = new User();

	$user->setData([

		'desperson'=>$_POST['name'],
		'deslogin'=>$_POST['email'],
		'despassword'=>$_POST['password'],
		'desdomain'=>NULL,
		'inadmin'=>0,
		'inseller'=>1,
		'inbuyer'=>0,
		'instatus'=>0,
		'inplan'=>$_POST['inplan'],
		'inusertypedocument'=>0,
		'desuserdocument'=>NULL,
		'desusertoken'=>NULL,
		'desusercustomercode'=>NULL,
		'desusercardcode'=>NULL,
		'dtbirthday'=>NULL,
		'dtplanbegin'=>NULL,
		'dtplanend'=>NULL,
		'desemail'=>$_POST['email'],
		'nrphone'=>NULL,
		'desphoto'=>Rule::DEFAULT_PHOTO,
		'desextension'=>Rule::DEFAULT_PHOTO_EXTENSION

	]);//end setData

	$user->save();



	$hash = base64_encode($user->getiduser());


	//User::login($_POST['email'], $_POST['password']);

	header('Location: /checkout/'.$hash);
	exit;

});//END route








$app->get( "/checkout/:hash", function( $hash )
{
	
	$user = new User();

	$user->getFromHash($hash);


		

	$plan = new Plan();

	$inplan = $plan->getPlan($user->getinplan());

	

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


	if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nome.");
		header('Location: /checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdocument']) 
		|| 
		$_POST['desdocument'] === ''
		
	)
	{

		Payment::setMsgError("Informe o CPF.");
		header('Location: /checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	)
	{

		Payment::setMsgError("Informe o E-mail.");
		header('Location: /checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['dtbirth']) 
		|| 
		$_POST['dtbirth'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nascimento.");
		header('Location: /checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Telefone.");
		header('Location: /checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_number']) 
		|| 
		$_POST['descardcode_number'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Número do Cartão.");
		header('Location: /checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['desholdername']) 
		|| 
		$_POST['desholdername'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Nome tal como está impresso no Cartão.");
		header('Location: /checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_month']) 
		|| 
		$_POST['descardcode_month'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Mês de Validade do Cartão.");
		header('Location: /checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_year']) 
		|| 
		$_POST['descardcode_year'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Ano de Validade do Cartão.");
		header('Location: /checkout');
		exit;

	}//end if

	if(
		
		!isset($_POST['descardcode_cvv']) 
		|| 
		$_POST['descardcode_cvv'] === ''
		
	)
	{

		Payment::setMsgError("Informe o Código de Segurança do Cartão.");
		header('Location: /checkout');
		exit;

	}//end if

	$user = new User();

	$user->getFromHash($hash);
	

	$plan = new Plan();

	$inplan = $plan->getPlan($user->getinplan());
	

	$address = new Address();

	# Backup Aula 28 PS
	$_POST['desaddress'] = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $_POST['desaddress']);

	$_POST['desholderzipcode'] = $_POST['zipcode'];
	$_POST['deszipcode'] = $_POST['zipcode'];
	$_POST['iduser'] = $user->getiduser();
	$_POST['idplan'] = $plan->getidplan();
	$_POST['desholderaddress'] = $_POST['desaddress'];
	$_POST['desholdernumber'] = $_POST['desnumber'];
	$_POST['desholdercomplement'] = $_POST['descomplement'];
	$_POST['desholdercity'] = $_POST['descity'];
	$_POST['desholderstate'] = $_POST['desstate'];
	$_POST['desholdercountry'] = $_POST['descountry'];
	$_POST['desholderdistrict'] = $_POST['desdistrict'];

	$address->setData($_POST);

	$address->savePlanAddress();

	$plan->setData([

		'idcart'=>$cart->getidcart(),
		'iduser'=>$user->getiduser(),
		'idplanaddress'=>$address->getidplanaddress(),
		'idstatus'=>OrderStatus::AGUARDANDO_PAGAMENTO,
		'inplan'=>$user->getinplan(),
		'inmigration'=>0,
		'inperiod'=>$inplan['inperiod'],
		'vlprice'=>$inplan['vlprice']

	]);//end setData

	$plan->save();


	if( $plan->getidplan() > 0 )
	{	
		
		$payment = new Payment();

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


		
		/*fazer if no paymentData true or false*/

		

		$payment->setData($paymentData);


		$payment->update();


		

		//$order->sendOrder();

		//$orderResponse = $order->createOrderInWirecard();

		//if(count($orderResponse) > 0)
		//{

			//$order->sendPayment($orderResponse['id']);

		//}//end if


	}//end if




	header("Location: /dashboard");
	exit;





});//END route













?>