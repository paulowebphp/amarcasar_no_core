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








$app->get( "/dashboard/transferencias/transferir-saldo", function() 
{
	User::verifyLogin(false);

	$user = User::getFromSession();




	$transfer = new Transfer();

	$transfer->get((int)$user->getiduser());





	if( !$transfer->getvlamount() ) $transfer->setvlamount('');



	$bank = new Bank();

	$bank->get((int)$user->getiduser());

	



	if( !$bank->getdesbanknumber() ) $bank->setdesbanknumber('');
	if( !$bank->getdesagencynumber() ) $bank->setdesagencynumber('');
	if( !$bank->getdesagencycheck() ) $bank->setdesagencycheck('');
	if( !$bank->getdesaccounttype() ) $bank->setdesaccounttype('');
	if( !$bank->getdesaccountnumber() ) $bank->setdesaccountnumber('');
	if( !$bank->getdesaccountcheck() ) $bank->setdesaccountcheck('');

	
	$bankValues = Bank::getBanksValues();
	





	$page = new PageDashboard();

	$page->setTpl(
		

 
		"transfers-create", 
		
		[	
			'bankvalues'=>$bankValues,
			'user'=>$user->getValues(),
			'transfer'=>$transfer->getValues(),
			'bank'=>$bank->getValues(),
			'transfer'=>$transfer->getValues(),
			'success'=>Transfer::getSuccess(),
			'error'=>Transfer::getError()

		]
	
	);//end setTpl
	
});//END route








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

	if( !$vlamount = Validate::validateTransferAmount($_POST['vlamount']) )
	{

		Transfer::setError("Informe um valor inteiro ou com 2 casas decimais");
		header("Location: /dashboard/conta-bancaria");
		exit;

	}//end if



	$bank = new Bank();


	$bank->get($user->getiduser());





	$transfer = new Transfer();


	$transfer->setData([

		'iduser'=>$user->getiduser(),
		'idstatus'=>TransferStatus::REQUESTED,
		'destransfercode'=>NULL,
		'destransferholdername'=>$user->getdesperson(),
		'desbanknumber'=>$bank->getdesbanknumber(),
		'desagencynumber'=>$bank->getdesagencynumber(),
		'desagencycheck'=>$bank->getdesagencycheck(),
		'desaccounttype'=>$bank->getdesaccounttype(),
		'desaccountnumber'=>$bank->getdesaccountnumber(),
		'desaccountcheck'=>$bank->getdesaccountcheck(),
		'vlamount'=>$vlamount

	]);


	$transfer->save();

	



	if( $transfer->getidtransfer() > 0 )
	{

		Transfer::setSuccess("Conta bancária alterada com sucesso");

		header("Location: /dashboard/transferencias");
		exit;


	}//end if


	




});//END route










?>