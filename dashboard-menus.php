<?php

use Core\PageDashboard;
use Core\Model\User;
use Core\Model\Menu;













$app->get( "/dashboard/menu", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();

		
	//$user->get((int)$user->getiduser());

	$menu = new Menu();

	$menu->get((int)$user->getiduser());

	$page = new PageDashboard();

	$page->setTpl(
		
		"menus", 
		
		[
			'user'=>$user->getValues(),
			'menu'=>$menu->getValues(),
			'success'=>Menu::getSuccess(),
			'error'=>Menu::getError()

		]
	
	);//end setTpl

});//END route










$app->post( "/dashboard/menu", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();


	if( 
		
		!isset($_POST['inwedding']) 
		|| 
		$_POST['inwedding'] === ''
	)
	{

		User::setError("Informe o inwedding");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if



	if( 
		
		!isset($_POST['inparty']) 
		|| 
		$_POST['inparty'] === ''
	)
	{

		User::setError("Informe o inparty");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if


	if( 
		
		!isset($_POST['inbestfriend']) 
		|| 
		$_POST['inbestfriend'] === ''
	)
	{

		User::setError("Informe o inbestfriend");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if


	if( 
		
		!isset($_POST['inrsvp']) 
		|| 
		$_POST['inrsvp'] === ''
	)
	{

		User::setError("Informe o inrsvp");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( 
		
		!isset($_POST['inmessage']) 
		|| 
		$_POST['inmessage'] === ''
	)
	{

		User::setError("Informe o inmessage");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( 
		
		!isset($_POST['instore']) 
		|| 
		$_POST['instore'] === ''
	)
	{

		User::setError("Informe o instore");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( 
		
		!isset($_POST['inevent']) 
		|| 
		$_POST['inevent'] === ''
	)
	{

		User::setError("Informe o inevent");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( 
		
		!isset($_POST['inalbum']) 
		|| 
		$_POST['inalbum'] === ''
	)
	{

		User::setError("Informe o inalbum");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( 
		
		!isset($_POST['invideo']) 
		|| 
		$_POST['invideo'] === ''
	)
	{

		User::setError("Informe a invideo");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( 
		
		!isset($_POST['instakeholder']) 
		|| 
		$_POST['instakeholder'] === ''
	)
	{

		User::setError("Informe o instakeholder");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( 
		
		!isset($_POST['inouterlist']) 
		|| 
		$_POST['inouterlist'] === ''
	)
	{

		User::setError("Informe o inouterlist");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if



	$menu = new Menu();

	$menu->setData([

		'idmenu'=>$_POST['idmenu'],
		'iduser'=>$user->getiduser(),
		'inwedding'=>$_POST['inwedding'],
		'inparty'=>$_POST['inparty'],
		'inbestfriend'=>$_POST['inbestfriend'],
		'inrsvp'=>$_POST['inrsvp'],
		'inmessage'=>$_POST['inmessage'],
		'instore'=>$_POST['instore'],
		'inevent'=>$_POST['inevent'],
		'inalbum'=>$_POST['inalbum'],
		'invideo'=>$_POST['invideo'],
		'instakeholder'=>$_POST['instakeholder'],
		'inouterlist'=>$_POST['inouterlist']

	]);//end setData



	$menu->update();

	//$user->setData($_POST);

	Menu::setSuccess("Dados alterados");

	header('Location: /dashboard/menu');
	exit;

});//END route



?>