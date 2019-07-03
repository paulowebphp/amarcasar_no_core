<?php

use Core\PageDashboard;
use Core\Photo;
use Core\Wirecard;
use Core\Rule;
use Core\Validate;
use Core\Model\User;
use Core\Model\Order;
use Core\Model\Product;
use Core\Model\Gift;
use Core\Model\BAnk;
use Core\Model\Transfer;
use Core\Model\TransferStatus;
use Core\Model\Account;











$app->post( "/dashboard/conta-bancaria", function()
{


	User::verifyLogin(false);

	$user = User::getFromSession();






	



	if( 
		
		!isset($_POST['desbanknumber']) 
		|| 
		$_POST['desbanknumber'] === ''
		
	)
	{

		Bank::setError("Digite o número do banco");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if

	if( !$desbanknumber = Validate::validateBankNumber($_POST['desbanknumber']) )
	{

		Bank::setError("Informe um numero de banco válido, de acordo com os Termos da Lista de Presentes Virtuais do Amar Casar");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if










	if( 
		
		!isset($_POST['desaccounttype']) 
		|| 
		$_POST['desaccounttype'] === ''
		
	)
	{

		Bank::setError("Digite o número do banco");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if

	if( !$desaccounttype = Validate::validateAccountType($_POST['desaccounttype']) )
	{

		Bank::setError("Informe um tipo de conta válida");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if










	if( 
		
		!isset($_POST['desagencynumber']) 
		|| 
		$_POST['desagencynumber'] === ''
		
	)
	{

		Bank::setError("Digite o número da agência sem dígito verificador");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if

	if( !$desagencynumber = Validate::validateAgencyNumber($_POST['desagencynumber']) )
	{

		
		Bank::setError("O número da agência deve ter entre 4 a 6 caracteres, e deve conter apenas números");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if










	if(
		
		!isset($_POST['desagencycheck']) 
		|| 
		$_POST['desagencycheck'] === ''
		
	)
	{

		Bank::setError("Digite o dígito verificador da agência");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if

	if( !$desagencycheck = Validate::validateAgencyCheck($_POST['desagencycheck']) )
	{

		
		Bank::setError("O dígito verificador da agência ter apenas 1 caracter");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if









	if(
		
		!isset($_POST['desaccountnumber'])
		|| 
		$_POST['desaccountnumber'] === ''
		
	)
	{

		Bank::setError("Digite o número da conta sem dígito verificador");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if

	if( !$desaccountnumber = Validate::validateAccountNumber($_POST['desaccountnumber']) )
	{

		
		Bank::setError("O número da conta deve ter entre 6 a 8 caracteres");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if











	if(
		
		!isset($_POST['desaccountcheck'])
		|| 
		$_POST['desaccountcheck'] === ''
		
	)
	{

		Bank::setError("Digite o dígito verificador da conta");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if

	if( !$desaccountcheck = Validate::validateAccountCheck($_POST['desaccountcheck']) )
	{

		
		Bank::setError("O dígito verificador da agência ter apenas 1 caracter");
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

			$desbanknumber,
			$desagencynumber,
			$desagencycheck,
			$desaccountnumber,
			$desaccountcheck,
			$desaccounttype,
			$user->getdesperson(),
			$user->getdesdocument(),
			$user->getintypedoc(),
			$account->getdesaccesstoken(),
			$account->getdesaccountcode()

		);//end createBank

		


		
		if( $bankData != '' )
		{

			
			$bank->setData([

				'iduser'=>$user->getiduser(),
				'desbankcode'=>$bankData,
				'desbanknumber'=>$desbanknumber,
				'desagencynumber'=>$desagencynumber,
				'desagencycheck'=>$desagencycheck,
				'desaccounttype'=>$desaccounttype,
				'desaccountnumber'=>$desaccountnumber,
				'desaccountcheck'=>$desaccountcheck

			]);


			
			$bank->update();


			Bank::setSuccess("Conta bancária criada");

			header("Location: /dashboard/conta-bancaria");
			exit;


		}//end if


	}//end else
	else
	{


		$bankData = $wirecard->updateBank(

			$desbanknumber,
			$desagencynumber,
			$desagencycheck,
			$desaccountnumber,
			$desaccountcheck,
			$desaccounttype,
			$user->getdesperson(),
			$user->getdesdocument(),
			$user->getintypedoc(),
			$account->getdesaccesstoken(),
			$data['desbankcode']

		);//end updateBank



		if( $bankData != '')
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