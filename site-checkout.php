<?php

use \Core\Page;
use \Core\Rule;
use \Core\Validate;
use \Core\Wirecard;
use \Core\Mailer;
use \Core\Model\Cart;
use \Core\Model\Address;
use \Core\Model\User;
use \Core\Model\Consort;
use \Core\Model\Party;
use \Core\Model\Order;
use \Core\Model\Payment;
use \Core\Model\PaymentStatus;
use \Core\Model\Account;
use \Core\Model\Customer;
use \Core\Model\Plan;
use \Core\Model\Wedding;
use \Core\Model\InitialPage;
use \Core\Model\Menu;
use \Core\Model\RsvpConfig;
use \Core\Model\CustomStyle;







$app->get( "/planos", function()
{
	$plans = Plan::getPlansFullArray();

	$page = new Page();

	$page->setTpl(
		
		"plans",

		[

			'plans'=>$plans

		]
	
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

		User::setErrorRegister("Preencha o seu nome");
		header("Location: /criar-site-de-casamento?plano=".$_POST['inplan']);
		exit;

	}//end if




	if(
		
		!isset($_POST['email']) 
		|| 
		$_POST['email'] == ''
	)
	{

		User::setErrorRegister("Preencha o seu e-mail");
		header("Location: /criar-site-de-casamento?plano=".$_POST['inplan']);
		exit;

	}//end if





	if(
		
		!isset($_POST['password']) 
		|| 
		$_POST['password'] == ''
		
	)
	{

		User::setErrorRegister("Preencha a senha");
		header("Location: /criar-site-de-casamento?plano=".$_POST['inplan']);
		exit;

	}//end if


	if(
		
		!isset($_POST['confirmation-register']) 
		|| 
		$_POST['confirmation-register'] == ''
		
	)
	{

		User::setErrorRegister("Preencha a confirmação da senha");
		header("Location: /criar-site-de-casamento?plano=".$_POST['inplan']);
		exit;

	}//end if


	if(
		
		$_POST['confirmation-register'] != $_POST['password']
		
	)
	{

		User::setErrorRegister("Você digitou duas senhas diferentes, tente novamente");
		header("Location: /criar-site-de-casamento?plano=".$_POST['inplan']);
		exit;

	}//end if



	/*if( User::checkLoginExists($_POST['email']) === true )
	{

		User::setErrorRegister("Este endereço de e-mail já está sendo usado por outro usuário");
		header("Location: /criar-site-de-casamento?plano=".$_POST['inplan']);
		exit;

	}//end if*/


	


	/*if( ctype_graph($name) )
	{ 

		User::setErrorRegister("Este não parece ser um nome completo");
		header("Location: /criar-site-de-casamento?plano=".$_POST['inplan']);
		exit;

	}//end if*/


	if( !Validate::validateFullName($_POST['name']) )
	{ 

		User::setErrorRegister("Este não parece ser um nome completo");
		header("Location: /criar-site-de-casamento?plano=".$_POST['inplan']);
		exit;

	}//end if


	$nameArray = explode(' ', $_POST['name']);

	$desnick = $nameArray[0];

	$inplancontext = substr($_POST['inplan'], 0, 1);

	$user = new User();

	$user->setData([

		'deslogin'=>$_POST['email'],
		'despassword'=>$_POST['password'],
		'desdomain'=>NULL,
		'inadmin'=>0,
		'inseller'=>1,
		'instatus'=>0,
		'inregister'=>0,
		'inplancontext'=>$inplancontext,
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


	



	if($user->getiduser() > 0)
	{


		//$dtbegin = new DateTime(date('Y-m-d'));

		//$today = date('Y-m-d');


		if( $user->getinplan() == 0 )
		{

			$plan = new Plan();

			$inplan = Plan::getPlanArray($user->getinplan());



			$timezone = new DateTimeZone('America/Sao_Paulo');

			$dtbegin = new DateTime('now');

			$dtbegin->setTimezone($timezone);

			$dtend = new DateTime('now + 10 day');

			$dtend->setTimezone($timezone);


			$plan->setData([

				'iduser'=>$user->getiduser(),
				'iddiscount'=>NULL,
				'idcupom'=>NULL,
				'incupom'=>0,
				'indiscount'=>0,
				'inplancode'=>$user->getinplan(),
				'inmigration'=>0,
				'inperiod'=>$inplan['inperiod'],
				'desplan'=>utf8_decode($inplan['desplan']),
				'vlregularprice'=>$inplan['vlregularprice'],
				'vlsaleprice'=>$inplan['vlsaleprice'],
				'dtbegin'=>$dtbegin->format('Y-m-d'),
				'dtend'=>$dtend->format('Y-m-d')

			]);//end setData

	
			$plan->save();



		}//end if
		
		

		





		$customstyle = new CustomStyle();

		$customstyle->setData([

			'iduser'=>$user->getiduser(),
			'idtemplate'=>1,
			'desbanner'=>'default.jpg',
			'desbannerextension'=>'jpg',
			'descolorheader'=>'#f6f6f6',
			'descolorheadertext'=>'#000000',
			'descolorheaderhover'=>'#f6f6f6',
			'descolorfooter'=>'#f6f6f6',
			'descolorfootertext'=>'#000000',
			'descolorfooterhover'=>'#f6f6f6',
			'descolorh1'=>'#000000',
			'desfontfamilyh1'=>'Arial',
			'desfontsizeh1'=>'22',
			'descolorh2'=>'#000000',
			'desfontfamilyh2'=>'Arial',
			'desfontsizeh2'=>'22',
			'descolorh3'=>'#000000',
			'desfontfamilyh3'=>'Arial',
			'desfontsizeh3'=>'22',
			'descolorh4'=>'#000000',
			'desfontfamilyh4'=>'Arial',
			'desfontsizeh4'=>'22',
			'descolortext'=>'#000000',
			'descolortexthover'=>'#f6f6f6',
			'desfontfamilytext'=>'Arial',
			'desfontsizetext'=>'14',
			'desroundbordersize'=>'6'

		]);//end setData


				

		$customstyle->update();








		$consort = new Consort();

		$consort->setData([

			'iduser'=>$user->getiduser(),
			'desconsort'=>'Meu Amor',
			'desconsortemail'=>NULL,
			'desconsortphoto'=>Rule::DEFAULT_PHOTO,
			'desconsortextension'=>Rule::DEFAULT_PHOTO_EXTENSION

		]);//end setData


		$consort->update();







		$timezone = new DateTimeZone('America/Sao_Paulo');

		$dtwedding = new DateTime("now + 1 year");

		$dtwedding->setTimezone($timezone);

		$wedding = new Wedding();	

		$wedding->setData([

			'iduser'=>$user->getiduser(),
			'desdescription'=>'Descrição do Casamento',
			'deslocation'=>'Local do Casamento',
			'desphoto'=>Rule::DEFAULT_PHOTO,
			'desextension'=>Rule::DEFAULT_PHOTO_EXTENSION,
			'dtwedding'=>$dtwedding->format('Y-m-d 20:00:00')

		]);//end setData

		
	
		$wedding->update();









		$party = new Party();	

		$party->setData([

			'iduser'=>$user->getiduser(),
			'inpartystatus'=>1,
			'desdescription'=>'',
			'deslocation'=>'',
			'desphoto'=>Rule::DEFAULT_PHOTO,
			'desextension'=>Rule::DEFAULT_PHOTO_EXTENSION,
			'dtparty'=>$dtwedding->format('Y-m-d 22:00:00')


		]);//end setData
	


		$party->update();


		




		$initialpage = new InitialPage();

		$initialpage->setData([

			'iduser'=>$user->getiduser(),
			'inparty'=>1,
			'inbestfriend'=>1,
			'inalbum'=>1,
			'invideo'=>0

		]);//end setData

		

		$initialpage->update();







		$menu = new Menu();

		$menu->setData([

			'iduser'=>$user->getiduser(),
			'inwedding'=>1,
			'inparty'=>1,
			'inbestfriend'=>1,
			'inrsvp'=>1,
			'inmessage'=>1,
			'instore'=>1,
			'inevent'=>1,
			'inalbum'=>1,
			'invideo'=>1,
			'instakeholder'=>1,
			'inouterlist'=>1

		]);//end setData
		

		
		$menu->update();





		$rsvpconfig = new RsvpConfig();

		$rsvpconfig->setData([

			'iduser'=>$user->getiduser(),
			'inclosed'=>0,
			'inmaxadultsconfig'=>10,
			'inmaxchildrenconfig'=>10


		]);//end setData



		$rsvpconfig->update();







		$hash = base64_encode($user->getiduser());

		//User::login($_POST['email'], $_POST['password']);

		header('Location: /cadastrar/'.$hash);
		exit;


	}//end if

	

});//END route













$app->get( "/state/city", function()
{
	
	
	if( !isset($_GET['idstate']) )
	{

		header('Location: /');
		exit;			

	}


	Address::getCitiesJson($_GET['idstate']);

	

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



	$state = Address::listStates();

	$city = Address::getCitiesByState(1); 


	$page = new Page();

	$page->setTpl(
		
		"accounts", 
		
		[
			'city'=>$city,
			'state'=>$state,
			'user'=>$user->getValues(),
			'hash'=>$hash,
			'account'=>$account->getValues(),
			'error'=>Account::getError()
			
		]
	
	);//end setTpl

});//END route



















$app->post( "/cadastrar/:hash", function( $hash )
{	


	$user = new User();

	$user->getFromHash($hash);
	







	if(
		
		!isset($_POST['desdocument']) 
		|| 
		$_POST['desdocument'] === ''
		
	)
	{

		Account::setError("Informe o CPF");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if


	if( !$desdocument = Validate::validateDocument($user->intypedoc(), $_POST['desdocument']) )
	{

		Account::setError("Informe um CPF válido");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if










	if(
		
		!isset($_POST['dtbirth']) 
		|| 
		$_POST['dtbirth'] === ''
		
	)
	{

		Account::setError("Informe a data de nascimento");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if

	if( !$dtbirth = Validate::validateDate($_POST['dtbirth']) )
	{

		Account::setError("Informe uma data válida");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if




	

	






	if(
		
		!isset($_POST['nrddd']) 
		|| 
		$_POST['nrddd'] === ''
		
	)
	{

		Account::setError("Informe o DDD");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Account::setError("Informe o telefone ou celular");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if

	if( !$nrddd = Validate::validateDDD($_POST['nrddd']) )
	{

		Account::setError("Informe um DDD válido");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if


	if( !$nrphone = Validate::validatePhone($_POST['nrphone']) )
	{

		Account::setError("Informe um telefone ou celular válido");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if














	
	if( 
		
		!isset($_POST['zipcode']) 
		|| 
		$_POST['zipcode'] === ''
	)
	{

		Account::setError("Informe o CEP");
		header('Location: /cadastrar/'.$hash);
		exit;
		
	}//end if

	if( !$deszipcode = Validate::validateCEP($_POST['zipcode']) )
	{

		Account::setError("Informe um CEP válido");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if
	










	if(
		!isset($_POST['desaddress']) 
		|| 
		$_POST['desaddress'] === ''
		
	)
	{

		Account::setError("Informe o endereço");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if

	if( !$desaddress = Validate::validateString($_POST['desaddress']) )
	{

		Payment::setError("O seu endereço não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if













	

	if(
		
		!isset($_POST['desnumber']) 
		|| 
		$_POST['desnumber'] === ''
		
	)
	{

		Account::setError("Informe o número");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if

	if( !$desnumber = Validate::validateNumber($_POST['desnumber']) )
	{

		Payment::setError("Informe o seu nome apenas com números");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if







	if( !$descomplement = Validate::validateString($_POST['descomplement']) )
	{

		Payment::setError("O complemento não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if







	if(
		
		!isset($_POST['desdistrict']) 
		|| 
		$_POST['desdistrict'] === ''
		
	)
	{

		Account::setError("Informe o bairro");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if

	if( !$desdistrict = Validate::validateString($_POST['desdistrict']) )
	{

		Payment::setError("O nome do bairro não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /checkout/'.$hash);
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

		Account::setError("Marque o checkbox no fim da página se está de acordo com Termos de Uso, os Termos da Lista de Presentes Virtuais e a Política de Privacidade do Amar Casar");
		header('Location: /cadastrar/'.$hash);
		exit;

	}//end if







	

	$desstate = Address::getStateCode($_POST['desstate']);
	
	


	$wirecard = new Wirecard();

	//$inplan = Wirecard::getPlan($user->getinplan());
	 


	$wirecardAccountData = $wirecard->createAccount(

			$user->getdesperson(),
			$user->getdesemail(),
			$_POST['dtbirth'],
			$desdocument,
			Rule::NR_COUNTRY_AREA,
			(int)$nrddd,
			(int)$nrphone,
			$deszipcode,
			$desaddress,
			(int)$desnumber,
			$descomplement,
			$desdistrict,		
			$_POST['descity'],
			$desstate['desstatecode'],
			Rule::DESCOUNTRY


		);//END createAccount


	/*$wirecardAccountData = $wirecard->createAccount(

			$user->getdesperson(),
			$user->getdesemail(),
			$_POST['dtbirth'],
			$_POST['desdocument'],
			Rule::NR_COUNTRY_AREA,
			(int)$_POST['nrddd'],
			(int)$_POST['nrphone'],
			$nrcep,
			$_POST['desaddress'],
			(int)$_POST['desnumber'],
			$_POST['descomplement'],
			$_POST['desdistrict'],		
			$_POST['descity'],
			$_POST['desstate'],
			Rule::DESCOUNTRY


		);//END createAccount*/




		$account = new Account();

		$account->setData([


			'iduser'=>$user->getiduser(),
			'desaccountcode'=>$wirecardAccountData['desaccountcode'],
			'desaccesstoken'=>$wirecardAccountData['desaccesstoken'],
			'deschannelid'=>$wirecardAccountData['deschannelid'],
			'desname'=>$user->getdesperson(),
			'desemail'=>$user->getdesemail(),
			'nrcountryarea'=>Rule::NR_COUNTRY_AREA,
			'nrddd'=>$nrddd,
			'nrphone'=>$nrphone,
			'intypedoc'=>$user->getintypedoc(),
			'desdocument'=>$desdocument,
		  	'deszipcode' =>$nrcep,
			'desaddress'=>$desaddress,
			'desnumber' =>$desnumber,
		  	'descomplement'=>$descomplement,
		  	'desdistrict'=>$desdistrict,
		  	'descity'=>$_POST['descity'],
		  	'desstate'=>$desstate['desstatecode'],
		  	'descountry'=>Rule::DESCOUNTRY,
		  	'dtbirth'=>$_POST['dtbirth']

		]);//end setData


		

		/*$account->setData([


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
		  	'deszipcode' =>$nrcep,
			'desaddress'=>$_POST['desaddress'],
			'desnumber' =>$_POST['desnumber'],
		  	'descomplement'=>$_POST['descomplement'],
		  	'desdistrict'=>$_POST['desdistrict'],
		  	'descity'=>$_POST['descity'],
		  	'desstate'=>$_POST['desstate'],
		  	'descountry'=>Rule::DESCOUNTRY,
		  	'dtbirth'=>$_POST['dtbirth']

		]);*/
				

		$account->save();

		





	if( $account->getidaccount() > 0 )
	{	

		$address = new Address();

		$address->setData([


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


		$address->update();



		if( $address->getidaddress() > 0 )
		{	

			$timezone = new DateTimeZone('America/Sao_Paulo');

			$dtterms = new DateTime("now");

			$dtterms->setTimezone($timezone);

			$user->setdesdocument($account->getdesdocument());
			$user->setnrcountryarea($account->getnrcountryarea());
			$user->setnrddd($account->getnrddd());
			$user->setnrphone($account->getnrphone());
			$user->setdtbirth($account->getdtbirth());
			$user->setdtterms($dtterms->format('Y-m-d H:i:s'));
			$user->setdesipterms($_SERVER['REMOTE_ADDR']);
			$user->setinterms($_POST['interms']);
			$user->setinregister(1);
		

			$user->update();
			$user->setToSession();

			

			if( (int)$user->getinplancontext() != 0 )
			{

				header("Location: /checkout/".$hash);
				exit;

			}//end if
			else
			{

				User::loginAfterPlanPurchase($user->getdeslogin(), $user->getdespassword());

				header("Location: /dashboard");
				exit;

			}//end else



			

		}//end if


	}//end if




});//END route



















$app->get( "/checkout/:hash", function( $hash )
{


	$user = new User();

	$user->getFromHash($hash);

	$_SESSION['registerValues'] = $_POST;
	
	//$wirecard = new Wirecard();

	$inplan = Plan::getPlanArray( $user->getinplan() );



	//$address = new Address();



	/*if ( isset($_GET['zipcode']) )
	{

		$address->loadFromCEP($_GET['zipcode']);
		$address->setdesnumber($_GET['desnumber']);


	}//end if*/


	/*$payment = new Payment();


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
*/


	$page = new Page();

	$page->setTpl(
		
		"checkout", 
		
		[
			'user'=>$user->getValues(),
			'hash'=>$hash,
			'inplan'=>$inplan,
			'error'=>Payment::getError()
			
		]
	
	);//end setTpl

});//END route











$app->post( "/checkout/:hash", function( $hash )
{

	$user = new User();

	$user->getFromHash($hash);



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

		$payment->setinpaymentoption('0');
		$payment->setnrinstallment('1');



	}//end if
	else if( isset($_POST['checkout-third-party-card']) )
	{






		if(
			
			!isset($_POST['desholderdocument']) 
			|| 
			$_POST['desholderdocument'] === ''
			
		)
		{

			Payment::setError("Informe o número do documento");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$desholderdocument = Validate::validateDocument($_POST['inholdertypedoc'], $_POST['desholderdocument']) )
		{

			Payment::setError("Informe um documento válido");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if
		











		if(
			
			!isset($_POST['nrholderddd']) 
			|| 
			$_POST['nrholderddd'] === ''
			
		)
		{

			Payment::setError("Informe o DDD");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if(
			
			!isset($_POST['nrholderphone']) 
			|| 
			$_POST['nrholderphone'] === ''
			
		)
		{

			Payment::setError("Informe o telefone ou celular");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$nrholderddd = Validate::validateDDD($_POST['nrholderddd']) )
		{

			Payment::setError("Informe um DDD válido");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if


		if( !$nrholderphone = Validate::validatePhone($_POST['nrholderphone']) )
		{

			Payment::setError("Informe um telefone ou celular válido");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if














		if(
			
			!isset($_POST['dtholderbirth']) 
			|| 
			$_POST['dtholderbirth'] === ''
			
		)
		{

			Payment::setError("Informe a data de nascimento");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$dtholderbirth = Validate::validateDate($_POST['dtholderbirth']) )
		{

			Payment::setError("Informe uma data válida");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if










		if( 
		
			!isset($_POST['zipcode']) 
			|| 
			$_POST['zipcode'] === ''
		)
		{

			Payment::setError("Informe o CEP");
			header('Location: /checkout/'.$hash);
			exit;
			
		}//end if


		if( !$desholderzipcode = Validate::validateCEP($_POST['zipcode']) )
		{

			Payment::setError("Informe um CEP válido");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if












		if(
			!isset($_POST['desholderaddress']) 
			|| 
			$_POST['desholderaddress'] === ''
			
		)
		{

			Payment::setError("Informe o endereço");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$desholderaddress = Validate::validateString($_POST['desholderaddress']) )
		{

			Payment::setError("O seu endereço não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if












		

		if(
			
			!isset($_POST['desholdernumber']) 
			|| 
			$_POST['desholdernumber'] === ''
			
		)
		{

			Payment::setError("Informe o número");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$desholdernumber = Validate::validateNumber($_POST['desholdernumber']) )
		{

			Payment::setError("Informe o seu nome apenas com números");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if








		if( !$desholdercomplement = Validate::validateString($_POST['desholdercomplement']) )
		{

			Payment::setError("O complemento não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if









		if(
			
			!isset($_POST['desholderdistrict']) 
			|| 
			$_POST['desholderdistrict'] === ''
			
		)
		{

			Payment::setError("Informe o bairro");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$desholderdistrict = Validate::validateString($_POST['desholderdistrict']) )
		{

			Payment::setError("O nome do bairro não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if








		if(
		
			!isset($_POST['descardcode_number']) 
			|| 
			$_POST['descardcode_number'] === ''
			
		)
		{

			Payment::setError("Informe o número do cartão");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$descardcode_number = Validate::validateCardNumber($_POST['descardcode_number']) )
		{

			Payment::setError("Informe o número do cartão com 12 dígitos");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if












		if(
			
			!isset($_POST['desholdername']) 
			|| 
			$_POST['desholdername'] === ''
			
		)
		{

			Payment::setError("Informe o nome tal como está impresso no cartão");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$desholdername = Validate::validateString($_POST['desholdername']) )
		{

			Payment::setError("O seu nome não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if











		if(
			
			!isset($_POST['descardcode_month']) 
			|| 
			$_POST['descardcode_month'] === ''
			
		)
		{

			Payment::setError("Informe o mês de validade do cartão");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$descardcode_month = Validate::validateMonth($_POST['descardcode_month']) )
		{

			Payment::setError("Informe o mês de validade com 2 dígitos");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if











		if(
			
			!isset($_POST['descardcode_year']) 
			|| 
			$_POST['descardcode_year'] === ''
			
		)
		{

			Payment::setError("Informe o ano de validade do cartão");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$descardcode_year = Validate::validateYear($_POST['descardcode_year']) )
		{

			Payment::setError("Informe o ano de validade com 4 dígitos");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if









		if(
			
			!isset($_POST['descardcode_cvc']) 
			|| 
			$_POST['descardcode_cvc'] === ''
			
		)
		{

			Payment::setError("Informe o código de segurança do cartão");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$descardcode_cvc = Validate::validateCvc($_POST['descardcode_cvc']) )
		{

			Payment::setError("Informe o código de segurança apenas 3 a 4 dígitos");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if



		
	


		$desholderstate = Address::getStateCode($_POST['desholderstate']);

		$payment->setinpaymentoption('1');
		$payment->setnrinstallment($_POST['installment']);


		echo '<pre>';
	var_dump($_POST);
	var_dump($desholderdocument);
	var_dump($desholderzipcode);
	var_dump($nrholderddd);
	var_dump($nrholderphone);
	var_dump($dtholderbirth);
	var_dump($desholdername);
	var_dump($desholdernumber);
	var_dump($desholderaddress);
	var_dump($desholdercomplement);
	var_dump($desholderdistrict);
	var_dump($descardcode_month);
	var_dump($descardcode_year);
	var_dump($descardcode_cvc);
	var_dump($descardcode_number);
	var_dump($desholderstate);
	var_dump($payment);
	exit;


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
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$descardcode_number = Validate::validateCardNumber($_POST['descardcode_number']) )
		{

			Payment::setError("Informe o número do cartão com 12 dígitos");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if







		if(
			
			!isset($_POST['desholdername']) 
			|| 
			$_POST['desholdername'] === ''
			
		)
		{

			Payment::setError("Informe o nome tal como está impresso no cartão");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$desholdername = Validate::validateString($_POST['desholdername']) )
		{

			Payment::setError("O seu nome não pode ser formado apenas com caracteres especiais, tente novamente");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if





		if(
			
			!isset($_POST['descardcode_month']) 
			|| 
			$_POST['descardcode_month'] === ''
			
		)
		{

			Payment::setError("Informe o mês de validade do cartão");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$descardcode_month = Validate::validateMonth($_POST['descardcode_month']) )
		{

			Payment::setError("Informe o mês de validade com 2 dígitos");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if









		if(
			
			!isset($_POST['descardcode_year']) 
			|| 
			$_POST['descardcode_year'] === ''
			
		)
		{

			Payment::setError("Informe o ano de validade do cartão");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$descardcode_year = Validate::validateYear($_POST['descardcode_year']) )
		{

			Payment::setError("Informe o ano de validade com 4 dígitos");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if












		if(
			
			!isset($_POST['descardcode_cvc']) 
			|| 
			$_POST['descardcode_cvc'] === ''
			
		)
		{

			Payment::setError("Informe o código de segurança do cartão.");
			header('Location: /checkout/'.$hash);
			exit;

		}//end if

		if( !$descardcode_cvc = Validate::validateCvc($_POST['descardcode_cvc']) )
		{

			Payment::setError("Informe o código de segurança apenas 3 a 4 dígitos");
			header('Location: /checkout/'.$hash);
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

		$payment->setinpaymentoption('1');
		$payment->setnrinstallment($_POST['installment']);



	echo '<pre>';
	var_dump($_POST);
	var_dump($desholderdocument);
	var_dump($desholderzipcode);
	var_dump($nrholderddd);
	var_dump($nrholderphone);
	var_dump($dtholderbirth);
	var_dump($desholdername);
	var_dump($desholdernumber);
	var_dump($desholderaddress);
	var_dump($desholdercomplement);
	var_dump($desholderdistrict);
	var_dump($descardcode_month);
	var_dump($descardcode_year);
	var_dump($descardcode_cvc);
	var_dump($descardcode_number);
	var_dump($desholderstate);
	var_dump($payment);
	exit;

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


	]);

	$customer->save();



		

	

	if($customer->getidcustomer() > 0)
	{

		$plan = new Plan();

		$inplan = Plan::getPlanArray($user->getinplan());



		$timezone = new DateTimeZone('America/Sao_Paulo');



		$dtbegin = new DateTime('now');

		$dtbegin->setTimezone($timezone);



		//$dtbegin = new DateTime(date('Y-m-d'));

		//$today = date('Y-m-d');

		$dtend = new DateTime('now +'.$inplan['inperiod'].' month');

		$dtend->setTimezone($timezone);


		//$dtend->format('Y-m-d');

		//$dtbegin->format('Y-m-d');


		$plan->setData([

			'iduser'=>$user->getiduser(),
			'iddiscount'=>NULL,
			'idcupom'=>NULL,
			'incupom'=>0,
			'indiscount'=>0,
			'inplancode'=>$user->getinplan(),
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
				$payment->getinpaymentoption(),
				$payment->getnrinstallment(),
				$_POST['descardcode_month'],
				$_POST['descardcode_year'],
				$_POST['descardcode_number'],
				$_POST['descardcode_cvc']


			);//end payPlan



					
				
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
				'ininstallment'=>$payment->getinpaymentoption(),
				'nrinstallment'=>$payment->getnrinstallment(),
				'desholderzipcode'=>$_POST['zipcode'],
				'desholderaddress'=>$_POST['desholderaddress'],
				'desholdernumber'=>$_POST['desholdernumber'],
				'desholdercomplement'=>$_POST['desholdercomplement'],
				'desholderdistrict'=>$_POST['desholderdistrict'],
				'desholdercity'=>$_POST['desholdercity'],
				'desholderstate'=>$_POST['desholderstate'],
				'dtholderbirth'=>$_POST['dtholderbirth']

			]);//end setData

			$payment->update();





			if ( (int)$payment->getidpayment() > 0)
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
						"Amar Casar - Compra de Plano",
						# template do e-mail em si na /views/email/ e não da administração
						"plan", 
						
						array(

							"user"=>$user->getValues(),
							"plan"=>$plan->getValues()

						)//end array
					
					);//end Mailer
					
					$userMailer->send();


	
					$user->setinstatus('1');
					$user->setdtplanbegin($dtbegin->format('Y-m-d'));
					$user->setdtplanend($dtend->format('Y-m-d'));

					$user->update();

					$user->setToSession();


					User::loginAfterPlanPurchase($user->getdeslogin(), $user->getdespassword());

					header("Location: /dashboard");
					exit;

				}//end if
				
			}//end if

		}//end if

	}//end if



});//END route










/*$app->post( "/checkout/:hash", function( $hash )
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




	if(
		
		!isset($_POST['descountry']) 
		|| 
		$_POST['descountry'] === ''
		
	)
	{

		Payment::setError("Informe o país.");
		header('Location: /checkout/'.$hash);
		exit;

	}//end if*/


	/*//if(
		
		//!isset($_POST['desname']) 
		//|| 
		//$_POST['desname'] === ''
		
	//)
	//{

		//Payment::setError("Informe o Nome.");
		//header('Location: /checkout/'.$hash);
		//exit;

	//}//end if

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

	//if(
		
		//!isset($_POST['desemail']) 
		//|| 
		//$_POST['desemail'] === ''
		
	//)
	//{

		//Payment::setError("Informe o E-mail.");
		//header('Location: /checkout/'.$hash);
		///exit;

	//}//end if

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

	
	//$cart = new Cart();

	//$data = [

		//'dessessionid'=>session_id(),
		//'iduser'=>$user->getiduser(),
		//'incartstatus'=>0

	//];//end $data


	//$cart->setData($data);

	//$cart->save();






	$account = new Account();

	$account->get((int)$user->getiduser());

	



	$wirecardCustomerData = $wirecard->createCustomer(

			$user->getdesperson(),
			$user->getdesemail(),
			$user->getdtbirth(),
			$user->getintypedoc(),
			$user->getdesdocument(),
			Rule::NR_COUNTRY_AREA,
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
		'nrcountryarea'=>Rule::NR_COUNTRY_AREA,
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

		$dtbegin = new DateTime(date('Y-m-d'));

		//$today = date('Y-m-d');

		$dtend = new DateTime('+'.$inplan['inperiod'].' month');

		//$dtend->format('Y-m-d');

		//$dtbegin->format('Y-m-d');


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
			'vlsaleprice'=>$inplan['vlprice'],
			'dtbegin'=>$dtbegin->format('Y-m-d'),
			'dtend'=>$dtend->format('Y-m-d')

		]);//end setData

		$plan->save();



		# Backup Aula 28 PS
		$_POST['desholderaddress'] = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $_POST['desholderaddress']);


		if( $plan->getidplan() > 0)
		{

			//$cart->addItem($cart->getidcart(), $plan->getidplan(), 0);


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

				$order = new Order();

				$order->setData([

					'iduser'=>$user->getiduser(),
					'idcart'=>$plan->getidcart(),
					'idcustomer'=>$customer->getidcustomer(),
					'idpayment'=>$payment->getidpayment(),
					'inorderstatus'=>OrderStatus::CREATED,
					'desordercode'=>$wirecardPaymentData['desordercode'],
					'vltotal'=>$plan->getvlsaleprice()

				]);//end setData


				$order->save();



				if( $order->getidorder() > 0 )
				{


					$userMailer = new Mailer(
								
						$user->getdeslogin(), 
						$user->getdesperson(), 
						"Amar Casar - Compra de Plano",
						# template do e-mail em si na /views/email/ e não da administração
						"plan", 
						
						array(

							"user"=>$user->getValues(),
							"plan"=>$plan->getValues()

						)//end array
					
					);//end Mailer

					
					$userMailer->send();




	
					$user->setinstatus('1');
					$user->setdtplanbegin($dtbegin->format('Y-m-d'));
					$user->setdtplanend($dtend->format('Y-m-d'));

					$user->update();


					User::loginAfterPlanPurchase($user->getdeslogin(), $user->getdespassword());

					header("Location: /dashboard");
					exit;

				}//end if
				


			}//end if


		}//end if


	}//end if



});//END route*/










?>