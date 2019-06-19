<?php

use Core\PageDashboard;
use Core\Photo;
use Core\Wirecard;
use Core\Rule;
use Core\Model\User;
use Core\Model\Order;
use Core\Model\OrderStatus;
use Core\Model\Product;
use Core\Model\Gift;
use Core\Model\BAnk;
use Core\Model\Transfer;
use Core\Model\Account;










$app->post( "/dashboard/transferencias/transferir-saldo", function()
{


	User::verifyLogin(false);


	$user = User::getFromSession();



	if( 
		
		!isset($_POST['vlamount']) 
		|| 
		$_POST['vlamount'] === ''
		
	)
	{

		Transfer::setError("Digite o saldo a ser transferido");
		header("Location: /dashboard/transferencias/transferir-saldo");
		exit;

	}//end if

	$transfer = new Transfer();


	$transfer->setData([

		'iduser'=>$user->getiduser(),
		'idstatus'=>OrderStatus::AGUARDANDO_PAGAMENTO,
		'destransfercode'=>NULL,
		'destransferholdername'=>$user->getdesperson(),
		'desbanknumber'=>$_POST['desbanknumber'],
		'desagencynumber'=>$_POST['desagencynumber'],
		'desagencycheck'=>$_POST['desagencycheck'],
		'desaccounttype'=>$_POST['desaccounttype'],
		'desaccountnumber'=>$_POST['desaccountnumber'],
		'desaccountcheck'=>$_POST['desaccountcheck'],
		'vlamount'=>$_POST['vlamount']

	]);

	$transfer->save();

	






	if( $bank->getidtransferbank() > 0 )
	{

		Transfer::setSuccess("Conta bancária alterada com sucesso");

		header("Location: /dashboard/transferencias");
		exit;


	}//end if


	




});//END route










$app->get( "/dashboard/transferencias/transferir-saldo", function() 
{
	User::verifyLogin(false);

	$user = User::getFromSession();

	$transfer = new Transfer();

	if( !$transfer->getvlamount() ) $transfer->setvlamount('');

	$bank = new Bank();

	if( !$bank->getdesbanknumber() ) $bank->setdesbanknumber('');
	if( !$bank->getdesagencynumber() ) $bank->setdesagencynumber('');
	if( !$bank->getdesagencycheck() ) $bank->setdesagencycheck('');
	if( !$bank->getdesaccounttype() ) $bank->setdesaccounttype('');
	if( !$bank->getdesaccountnumber() ) $bank->setdesaccountnumber('');
	if( !$bank->getdesaccountcheck() ) $bank->setdesaccountcheck('');

	

	

	$bank->get((int)$user->getiduser());


	$page = new PageDashboard();

	$page->setTpl(
		

 
		"transfers-create", 
		
		[
			'user'=>$user->getValues(),
			'transfer'=>$transfer->getValues(),
			'bank'=>$bank->getValues(),
			'transfer'=>$transfer->getValues(),
			'transferSuccess'=>Transfer::getSuccess(),
			'transferError'=>Transfer::getError()

		]
	
	);//end setTpl
	
});//END route













$app->get( "/dashboard/transferencias", function() 
{
	User::verifyLogin(false);

	$user = User::getFromSession();

	$transfer = new Transfer();

	$transfer->get((int)$user->getiduser());


	$page = new PageDashboard();

	$page->setTpl(
		

 
		"transfers", 
		
		[
			'user'=>$user->getValues(),
			'page'=>[],
			'search'=>'',
			'transfer'=>$transfer->getValues(),
			'transferSuccess'=>Transfer::getSuccess(),
			'transferError'=>Transfer::getError()

		]
	
	);//end setTpl
	
});//END route








$app->post( "/dashboard/conta-bancaria", function()
{


	User::verifyLogin(false);


	$user = User::getFromSession();



	if( 
		
		!isset($_POST['desagencynumber']) 
		|| 
		$_POST['desagencynumber'] === ''
		
	)
	{

		Bank::setError("Digite o Número da Agência Sem Dígito Verificador");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if


	if(
		
		!isset($_POST['desagencycheck']) 
		|| 
		$_POST['desagencycheck'] === ''
		
	)
	{

		Bank::setError("Digite o Dígito Verificador da Agência");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if


	if(
		
		!isset($_POST['desaccountnumber'])
		|| 
		$_POST['desaccountnumber'] === ''
		
	)
	{

		Bank::setError("Digite o Número da Conta Sem Dígito Verificador");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if

	if(
		
		!isset($_POST['desaccountcheck'])
		|| 
		$_POST['desaccountcheck'] === ''
		
	)
	{

		Bank::setError("Digite o Dígito Verificador da Conta");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if


	$wirecard = new Wirecard();

	

	$account = new Account();

	$account->get((int)$user->getiduser());



	$bank = new Bank();

	$data = Bank::checkBankCodeExists( $user->getiduser() );




	if( $data === false )
	{
		

		$bankData = $wirecard->createBank(

			$_POST['desbanknumber'],
			$_POST['desagencynumber'],
			$_POST['desagencycheck'],
			$_POST['desaccountnumber'],
			$_POST['desaccountcheck'],
			$_POST['desaccounttype'],
			$user->getdesperson(),
			$user->getdesdocument(),
			$user->getintypedoc(),
			$account->getdesaccesstoken(),
			$account->getdesaccountcode()

		);

		
		if( $bankData != false )
		{

			
			$bank->setData([

				'iduser'=>$user->getiduser(),
				'desbankcode'=>$bankData,
				'desbanknumber'=>$_POST['desbanknumber'],
				'desagencynumber'=>$_POST['desagencynumber'],
				'desagencycheck'=>$_POST['desagencycheck'],
				'desaccounttype'=>$_POST['desaccounttype'],
				'desaccountnumber'=>$_POST['desaccountnumber'],
				'desaccountcheck'=>$_POST['desaccountcheck']

			]);

			$bank->update();

		}//end if


	}//end else
	else
	{


		$bankData = $wirecard->updateBank(

			$_POST['desbanknumber'],
			$_POST['desagencynumber'],
			$_POST['desagencycheck'],
			$_POST['desaccountnumber'],
			$_POST['desaccountcheck'],
			$_POST['desaccounttype'],
			$user->getdesperson(),
			$user->getdesdocument(),
			$user->getintypedoc(),
			$account->getdesaccesstoken(),
			$data['desbankcode']

		);


		if( !$bankData === false )
		{

			$bank->setData([

				'idbank'=>$data['idbank'],
				'iduser'=>$user->getiduser(),
				'desbankcode'=>$bankData['desbankcode'],
				'desbanknumber'=>$bankData['desbanknumber'],
				'desagencynumber'=>$bankData['desagencynumber'],
				'desagencycheck'=>$bankData['desagencycheck'],
				'desaccounttype'=>$bankData['desaccounttype'],
				'desaccountnumber'=>$bankData['desaccountnumber'],
				'desaccountcheck'=>$bankData['desaccountcheck']

			]);

			$bank->update();

	
			Bank::setSuccess("Conta bancária alterada");

			header("Location: /dashboard/conta-bancaria");
			exit;




		}//end if

		
	}//end else



});//END route











$app->get( "/dashboard/conta-bancaria", function() 
{
	User::verifyLogin(false);

	$user = User::getFromSession();

	$bank = new Bank();

	$bankValues = Bank::getBanksValues();

	$bank->get((int)$user->getiduser());


	if( !$bank->getdesbanknumber() ) $bank->setdesbanknumber('');
	if( !$bank->getdesagencynumber() ) $bank->setdesagencynumber('');
	if( !$bank->getdesagencycheck() ) $bank->setdesagencycheck('');
	if( !$bank->getdesaccounttype() ) $bank->setdesaccounttype('');
	if( !$bank->getdesaccountnumber() ) $bank->setdesaccountnumber('');
	if( !$bank->getdesaccountcheck() ) $bank->setdesaccountcheck('');


	$page = new PageDashboard();

	$page->setTpl(
		

 
		"banks", 
		
		[
			'user'=>$user->getValues(),
			'bankvalues'=>$bankValues,
			'bank'=>$bank->getValues(),
			'success'=>Bank::getSuccess(),
			'error'=>Bank::getError()

		]
	
	);//end setTpl
	
});//END route








?>