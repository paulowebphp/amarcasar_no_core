<?php

use Core\PageDashboard;
use Core\Model\User;
use Core\Model\Address;













$app->get( "/dashboard/dominio", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();

		
	//$user->get((int)$user->getiduser());



	$page = new PageDashboard();

	$page->setTpl(
		
		"dashboard-domain", 
		
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

		User::setError("Informe o Domínio");
		header('Location: /dashboard/dominio');
		exit;
		
	}//end if


	if( $_POST['desdomain'] == $user->getdesdomain() )
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

	}//end if


	$user->setdesdomain($_POST['desdomain']);
	
	# Core colocou $user->save(); Aula 120
	$user->update();

	$user->setToSession();

	User::setSuccess("Dados alterados");

	header('Location: /dashboard/dominio');
	exit;

});//END route



?>