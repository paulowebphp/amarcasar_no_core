<?php

use Core\PageDashboard;
use Core\Validate;
use Core\Model\User;
use Core\Model\Address;













$app->get( "/dashboard/dominio", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();

		
	//$user->get((int)$user->getiduser());



	$page = new PageDashboard();

	$page->setTpl(
		
		"domain", 
		
		[
			'user'=>$user->getValues(),
			'success'=>User::getSuccess(),
			'error'=>User::getError()

		]
	
	);//end setTpl

});//END route










$app->post( "/dashboard/dominio", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();


	if( 
		
		!isset($_POST['desdomain']) 
		|| 
		$_POST['desdomain'] === ''
	)
	{

		User::setError("Informe o domínio");
		header('Location: /dashboard/dominio');
		exit;
		
	}//end if



	if( !$desdomain = Validate::validateDomain($_POST['desdomain']) )
	{
		

		User::setError("O domínio deve conter letras minúsculas, números, hífen e underline e deve ter ao menos 3 dígitos");
		header('Location: /dashboard/dominio');
		exit;
	}






	if( $desdomain == $user->getdesdomain() )
	{

		User::setError("Você já está usando este domínio");
		header('Location: /dashboard/dominio');
		exit;
		
	}//end if


	if( $desdomain !== $user->getdesdomain() )
	{

		if( User::checkUrlExists($desdomain) === true )
		{

			User::setError("Este domínio já está cadastrado");
			header('Location: /dashboard/dominio');
			exit;

		}//end if

	}//end if


	/*if( $_POST['desdomain'] == $user->getdesdomain() )
	{

		User::setError("Você já está usando este domínio");
		header('Location: /dashboard/dominio');
		exit;
		
	}//end if


	if( $_POST['desdomain'] !== $user->getdesdomain() )
	{

		if( User::checkUrlExists($_POST['desdomain']) === true )
		{

			User::setError("Este domínio já está cadastrado");
			header('Location: /dashboard/dominio');
			exit;

		}//end if

	}//end if*/


	$user->setdesdomain($desdomain);
	
	# Core colocou $user->save(); Aula 120
	$user->update();

	$user->setToSession();

	User::setSuccess("Dados alterados");

	header('Location: /dashboard/dominio');
	exit;

});//END route



?>