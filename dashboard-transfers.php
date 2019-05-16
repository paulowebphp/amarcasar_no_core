<?php

use Core\Page;
use Core\Photo;
use Core\Model\Rule;
use Core\Model\User;
use Core\Model\Order;
use Core\Model\OrderStatus;
use Core\Model\Product;
use Core\Model\Gift;
use Core\Model\Wirecard;
use Core\Model\BAnk;







$app->post( "/dashboard/painel-financeiro/conta-bancaria", function()
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
		header("Location: /dashboard/painel-financeiro/conta-bancaria");
		exit;

	}//end if


	if(
		
		!isset($_POST['desagencycheck']) 
		|| 
		$_POST['desagencycheck'] === ''
		
	)
	{

		Bank::setError("Digite o Dígito Verificador da Agência");
		header("Location: /dashboard/painel-financeiro/conta-bancaria");
		exit;

	}//end if


	if(
		
		!isset($_POST['desaccountnumber'])
		|| 
		$_POST['desaccountnumber'] === ''
		
	)
	{

		Bank::setError("Digite o Número da Conta Sem Dígito Verificador");
		header("Location: /dashboard/painel-financeiro/conta-bancaria");
		exit;

	}//end if

	if(
		
		!isset($_POST['desaccountcheck'])
		|| 
		$_POST['desaccountcheck'] === ''
		
	)
	{

		Bank::setError("Digite o Dígito Verificador da Conta");
		header("Location: /dashboard/painel-financeiro/conta-bancaria");
		exit;

	}//end if


	$wirecard = new Wirecard();

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
			$user->getdesuserdocument(),
			$user->getinusertypedocument(),
			$user->getdesaccesstoken(),
			$user->getdesaccountcode()

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
		
		//$wirecard->updateBank( $user->getdesaccountcode() );

		$bank->setData([

			'idbank'=>$data['idbank'],
			'iduser'=>$user->getiduser(),
			'desbankcode'=>$data['desbankcode'],
			'desbanknumber'=>$_POST['desbanknumber'],
			'desagencynumber'=>$_POST['desagencynumber'],
			'desagencycheck'=>$_POST['desagencycheck'],
			'desaccounttype'=>$_POST['desaccounttype'],
			'desaccountnumber'=>$_POST['desaccountnumber'],
			'desaccountcheck'=>$_POST['desaccountcheck']

		]);

			

		$bank->update();

	}//end else





	if( $bank->getidbank() > 0 )
	{

		Bank::setSuccess("Conta bancária alterada com sucesso");

		header("Location: /dashboard/painel-financeiro/conta-bancaria");
		exit;


	}//end if


	




});//END route











$app->get( "/dashboard/painel-financeiro/conta-bancaria", function() 
{
	User::verifyLogin(false);

	$user = User::getFromSession();

	$bank = new Bank();

	if( !$bank->getdesbanknumber() ) $bank->setdesbanknumber('');
	if( !$bank->getdesagencynumber() ) $bank->setdesagencynumber('');
	if( !$bank->getdesagencycheck() ) $bank->setdesagencycheck('');
	if( !$bank->getdesaccounttype() ) $bank->setdesaccounttype('');
	if( !$bank->getdesaccountnumber() ) $bank->setdesaccountnumber('');
	if( !$bank->getdesaccountcheck() ) $bank->setdesaccountcheck('');


	$bankValues = Bank::getBanksValues();

	$bank->get((int)$user->getiduser());


	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"banks-create", 
		
		[
			'bankvalues'=>$bankValues,
			'bank'=>$bank->getValues(),
			'bankSuccess'=>Bank::getSuccess(),
			'bankError'=>Bank::getError()

		]
	
	);//end setTpl
	
});//END route








?>