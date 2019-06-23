<?php

use Core\PageDashboard;
use Core\Validate;
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

		Menu::setError("Informe o inwedding");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( ($inwedding = Validate::validateBoolean($_POST['inwedding'])) === false )
	{	
		
		Menu::setError("O inwedding deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/menu');
		exit;

	}//end if










	if( 
		
		!isset($_POST['inparty']) 
		|| 
		$_POST['inparty'] === ''
	)
	{

		Menu::setError("Informe o inparty");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( ($inparty = Validate::validateBoolean($_POST['inparty'])) === false )
	{	
		
		Menu::setError("O inparty deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/menu');
		exit;

	}//end if










	if( 
		
		!isset($_POST['inbestfriend']) 
		|| 
		$_POST['inbestfriend'] === ''
	)
	{

		Menu::setError("Informe o inbestfriend");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( ($inbestfriend = Validate::validateBoolean($_POST['inbestfriend'])) === false )
	{	
		
		Menu::setError("O inbestfriend deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/menu');
		exit;

	}//end if









	if( 
		
		!isset($_POST['inrsvp']) 
		|| 
		$_POST['inrsvp'] === ''
	)
	{

		Menu::setError("Informe o inrsvp");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( ($inrsvp = Validate::validateBoolean($_POST['inrsvp'])) === false )
	{	
		
		Menu::setError("O inrsvp deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/menu');
		exit;

	}//end if









	if( 
		
		!isset($_POST['inmessage']) 
		|| 
		$_POST['inmessage'] === ''
	)
	{

		Menu::setError("Informe o inmessage");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( ($inmessage = Validate::validateBoolean($_POST['inmessage'])) === false )
	{	
		
		Menu::setError("O inmessage deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/menu');
		exit;

	}//end if










	if( 
		
		!isset($_POST['instore']) 
		|| 
		$_POST['instore'] === ''
	)
	{

		Menu::setError("Informe o instore");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if


	if( ($instore = Validate::validateBoolean($_POST['instore'])) === false )
	{	
		
		Menu::setError("O instore deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/menu');
		exit;

	}//end if











	if( 
		
		!isset($_POST['inevent']) 
		|| 
		$_POST['inevent'] === ''
	)
	{

		Menu::setError("Informe o inevent");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if


	if( ($inevent = Validate::validateBoolean($_POST['inevent'])) === false )
	{	
		
		Menu::setError("O inevent deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/menu');
		exit;

	}//end if










	if( 
		
		!isset($_POST['inalbum']) 
		|| 
		$_POST['inalbum'] === ''
	)
	{

		Menu::setError("Informe o inalbum");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( ($inalbum = Validate::validateBoolean($_POST['inalbum'])) === false )
	{	
		
		Menu::setError("O inalbum deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/menu');
		exit;

	}//end if









	if( 
		
		!isset($_POST['invideo']) 
		|| 
		$_POST['invideo'] === ''
	)
	{

		Menu::setError("Informe a invideo");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( ($invideo = Validate::validateBoolean($_POST['invideo'])) === false )
	{	
		
		Menu::setError("O invideo deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/menu');
		exit;

	}//end if









	if( 
		
		!isset($_POST['instakeholder']) 
		|| 
		$_POST['instakeholder'] === ''
	)
	{

		Menu::setError("Informe o instakeholder");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if


	if( ($instakeholder = Validate::validateBoolean($_POST['instakeholder'])) === false )
	{	
		
		Menu::setError("O instakeholder deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/menu');
		exit;

	}//end if











	if( 
		
		!isset($_POST['inouterlist']) 
		|| 
		$_POST['inouterlist'] === ''
	)
	{

		Menu::setError("Informe o inouterlist");
		header('Location: /dashboard/menu');
		exit;
		
	}//end if

	if( ($inouterlist = Validate::validateBoolean($_POST['inouterlist'])) === false )
	{	
		
		Menu::setError("O inouterlist deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/menu');
		exit;

	}//end if





	$menu = new Menu();

	$menu->setData([

		'idmenu'=>$_POST['idmenu'],
		'iduser'=>$user->getiduser(),
		'inwedding'=>$inwedding,
		'inparty'=>$inparty,
		'inbestfriend'=>$inbestfriend,
		'inrsvp'=>$inrsvp,
		'inmessage'=>$inmessage,
		'instore'=>$instore,
		'inevent'=>$inevent,
		'inalbum'=>$inalbum,
		'invideo'=>$invideo,
		'instakeholder'=>$instakeholder,
		'inouterlist'=>$inouterlist

	]);//end setData



	echo '<pre>';
	var_dump($menu);
	exit;	


	



	$menu->update();

	//$user->setData($_POST);

	Menu::setSuccess("Dados alterados");

	header('Location: /dashboard/menu');
	exit;

});//END route



?>