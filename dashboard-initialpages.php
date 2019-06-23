<?php

use Core\PageDashboard;
use Core\Validate;
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
			'user'=>$user->getValues(),
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

		InitialPage::setError("Informe o inparty");
		header('Location: /dashboard/pagina-inicial');
		exit;
		
	}//end if

	if( ($inparty = Validate::validateBoolean($_POST['inparty'])) === false )
	{	
		
		InitialPage::setError("O status inparty deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/pagina-inicial');
		exit;

	}//end if






	if( 
		
		!isset($_POST['inbestfriend']) 
		|| 
		$_POST['inbestfriend'] === ''
	)
	{

		InitialPage::setError("Informe o inbestfriend");
		header('Location: /dashboard/pagina-inicial');
		exit;
		
	}//end if


	if( ($inbestfriend = Validate::validateBoolean($_POST['inbestfriend'])) === false )
	{	
		
		InitialPage::setError("O status inbestfriend deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/pagina-inicial');
		exit;

	}//end if







	if( 
		
		!isset($_POST['inalbum']) 
		|| 
		$_POST['inalbum'] === ''
	)
	{

		InitialPage::setError("Informe o inalbum");
		header('Location: /dashboard/pagina-inicial');
		exit;
		
	}//end if

	if( ($inalbum = Validate::validateBoolean($_POST['inalbum'])) === false )
	{	
		
		InitialPage::setError("O status inalbum deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/pagina-inicial');
		exit;

	}//end if








	if( 
		
		!isset($_POST['invideo']) 
		|| 
		$_POST['invideo'] === ''
	)
	{

		InitialPage::setError("Informe a invideo");
		header('Location: /dashboard/pagina-inicial');
		exit;
		
	}//end if

	if( ($invideo = Validate::validateBoolean($_POST['invideo'])) === false )
	{	
		
		InitialPage::setError("O status invideo deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/pagina-inicial');
		exit;

	}//end if



	





	$initialpage = new InitialPage();

	$initialpage->setData([

		'idinitialpage'=>$_POST['idinitialpage'],
		'iduser'=>$user->getiduser(),
		'inparty'=>$inparty,
		'inbestfriend'=>$inbestfriend,
		'inalbum'=>$inalbum,
		'invideo'=>$invideo

	]);//end setData




	$initialpage->update();

	//$user->setData($_POST);

	InitialPage::setSuccess("Dados alterados");

	header('Location: /dashboard/pagina-inicial');
	exit;

});//END route



?>