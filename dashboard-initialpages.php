<?php

use Core\PageDashboard;
use Core\Model\User;
use Core\Model\InitialPage;













$app->get( "/dashboard/pagina-inicial", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();

		
	//$user->get((int)$user->getiduser());

	$initialpage = new InitialPage();

	$initialpage->get((int)$user->getiduser());

	$page = new PageDashboard();

	$page->setTpl(
		
		"initialpages", 
		
		[
			'initialpage'=>$initialpage->getValues(),
			'success'=>InitialPage::getSuccess(),
			'error'=>InitialPage::getError()

		]
	
	);//end setTpl

});//END route










$app->post( "/dashboard/pagina-inicial", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();



	if( 
		
		!isset($_POST['inparty']) 
		|| 
		$_POST['inparty'] === ''
	)
	{

		User::setError("Informe o inparty");
		header('Location: /dashboard/pagina-inicial');
		exit;
		
	}//end if


	if( 
		
		!isset($_POST['inbestfriend']) 
		|| 
		$_POST['inbestfriend'] === ''
	)
	{

		User::setError("Informe o inbestfriend");
		header('Location: /dashboard/pagina-inicial');
		exit;
		
	}//end if


	

	if( 
		
		!isset($_POST['inalbum']) 
		|| 
		$_POST['inalbum'] === ''
	)
	{

		User::setError("Informe o inalbum");
		header('Location: /dashboard/pagina-inicial');
		exit;
		
	}//end if

	if( 
		
		!isset($_POST['invideo']) 
		|| 
		$_POST['invideo'] === ''
	)
	{

		User::setError("Informe a invideo");
		header('Location: /dashboard/pagina-inicial');
		exit;
		
	}//end if

	



	$initialpage = new InitialPage();

	$initialpage->setData([

		'idinitialpage'=>$_POST['idinitialpage'],
		'iduser'=>$user->getiduser(),
		'inparty'=>$_POST['inparty'],
		'inbestfriend'=>$_POST['inbestfriend'],
		'inalbum'=>$_POST['inalbum'],
		'invideo'=>$_POST['invideo']

	]);//end setData



	$initialpage->update();

	//$user->setData($_POST);

	InitialPage::setSuccess("Dados alterados");

	header('Location: /dashboard/pagina-inicial');
	exit;

});//END route



?>