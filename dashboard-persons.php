<?php

use Core\PageDashboard;
use Core\Model\User;
use Core\Model\Address;








$app->get( "/dashboard/meus-dados", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();

		
	//$user->get((int)$user->getiduser());


	$address = new Address();

	$address->get((int)$user->getiduser());


	$state = Address::listAllStates();

	$city = Address::listAllCitiesByState((int)$address->getidstate());

	
	




	$page = new PageDashboard();

	$page->setTpl(
		
		"persons", 
		
		[
			'state'=>$state,
			'city'=>$city,
			'address'=>$address->getValues(),
			'user'=>$user->getValues(),
			'success'=>User::getSuccess(),
			'error'=>User::getError()

		]
	
	);//end setTpl

});//END route










$app->post( "/dashboard/meus-dados", function()
{

	


	User::verifyLogin(false);

	$user = User::getFromSession();


	if( 
		
		!isset($_POST['desperson']) 
		|| 
		$_POST['desperson'] === ''
	)
	{

		User::setError("Informe o Nome");
		header('Location: /dashboard/meus-dados');
		exit;
		
	}//end if



	if( 
		
		!isset($_POST['nrddd']) 
		|| 
		$_POST['nrddd'] === ''
	)
	{

		User::setError("Informe o DDD");
		header('Location: /dashboard/meus-dados');
		exit;
		
	}//end if


	if( 
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
	)
	{

		User::setError("Informe o Telefone");
		header('Location: /dashboard/meus-dados');
		exit;
		
	}//end if


	if( 
		
		!isset($_POST['deszipcode']) 
		|| 
		$_POST['deszipcode'] === ''
	)
	{

		User::setError("Informe o CEP");
		header('Location: /dashboard/meus-dados');
		exit;
		
	}//end if

	if( 
		
		!isset($_POST['desaddress']) 
		|| 
		$_POST['desaddress'] === ''
	)
	{

		User::setError("Informe o Endereço");
		header('Location: /dashboard/meus-dados');
		exit;
		
	}//end if

	if( 
		
		!isset($_POST['desnumber']) 
		|| 
		$_POST['desnumber'] === ''
	)
	{

		User::setError("Informe o Número");
		header('Location: /dashboard/meus-dados');
		exit;
		
	}//end if

	if( 
		
		!isset($_POST['descomplement']) 
		|| 
		$_POST['descomplement'] === ''
	)
	{

		User::setError("Informe o Complemento");
		header('Location: /dashboard/meus-dados');
		exit;
		
	}//end if

	if( 
		
		!isset($_POST['desdistrict']) 
		|| 
		$_POST['desdistrict'] === ''
	)
	{

		User::setError("Informe o Bairro");
		header('Location: /dashboard/meus-dados');
		exit;
		
	}//end if

	/*if( 
		
		!isset($_POST['descity']) 
		|| 
		$_POST['descity'] === ''
	)
	{

		User::setError("Informe a Cidade");
		header('Location: /dashboard/meus-dados');
		exit;
		
	}//end if

	if( 
		
		!isset($_POST['desstate']) 
		|| 
		$_POST['desstate'] === ''
	)
	{

		User::setError("Informe o Estado");
		header('Location: /dashboard/meus-dados');
		exit;
		
	}//end if*/






	/*$address->setdeszipcode( $_POST['deszipcode'] );
	$address->setdesaddress( $_POST['desaddress'] );
	$address->setdesnumber( $_POST['desnumber'] );
	$address->setdescomplement( $_POST['descomplement'] );
	$address->setdesdistrict( $_POST['desdistrict'] );
	$address->setdescity( $_POST['descity'] );
	$address->setdesstate( $_POST['desstate'] );*/

	$address = new Address();

	$address->setData([

		'idaddress'=>$_POST['idaddress'],
		'iduser'=>$user->getiduser(),
		'deszipcode'=>$_POST['deszipcode'],
		'desaddress'=>$_POST['desaddress'],
		'desnumber'=>$_POST['desnumber'],
		'descomplement'=>$_POST['descomplement'],
		'desdistrict'=>$_POST['desdistrict'],
		'descity'=>$_POST['descity'],
		'desstate'=>$_POST['desstate'],
		'descountry'=>$_POST['descountry']

	]);//end setData




	$address->update();

	//$user->setData($_POST);



	$user->setdesperson( $_POST['desperson'] );
	$user->setnrddd( $_POST['nrddd'] );
	$user->setnrphone( $_POST['nrphone'] );
	
	# Core colocou $user->save(); Aula 120
	$user->update();

	$user->setToSession();

	User::setSuccess("Dados alterados");

	header('Location: /dashboard/meus-dados');
	exit;

});//END route



?>