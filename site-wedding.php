<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Order;
use Hcode\Model\Cart;
use Hcode\Model\Wedding;



$app->get( "/dashboard/meu-casamento", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$wedding = new Wedding();

	$wedding->get((int)$user->getiduser());
		
	$page = new Page();

	$page->setTpl(
		
		"dashboard-wedding", 
		
		[

			'wedding'=>$wedding->getValues(),
			'weddingMsg'=>Wedding::getSuccess(),
			'weddingError'=>Wedding::getError()
			

		]
	
	);//end setTpl

});//END route





$app->post( "/dashboard/meu-casamento", function()
{

	User::verifyLogin(false);

	if(
		
		!isset($_POST['desconsortname']) 
		|| 
		$_POST['desconsortname'] === ''
		
	)
	{

		User::setError("Preencha o Nome do Cônjuge.");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if


	if(
		
		!isset($_POST['dtwedding']) 
		|| 
		$_POST['dtwedding'] === ''
		
	){

		User::setError("Insira a Data do Casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if


	if(
		
		!isset($_POST['desweddinglocation']) 
		|| 
		$_POST['desweddinglocation'] === ''
		
	){

		User::setError("Preencha o Local do Casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if



	if(
		
		!isset($_POST['desweddingdescription']) 
		|| 
		$_POST['desweddingdescription'] === ''
		
	){

		User::setError("Preencha a Descrição do Casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if



	if(
		
		!isset($_POST['dtparty']) 
		|| 
		$_POST['dtparty'] === ''
		
	){

		User::setError("Preencha a Data da Festa");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if



	if(
		
		!isset($_POST['despartylocation']) 
		|| 
		$_POST['despartylocation'] === ''
		
	){

		User::setError("Preencha o Local da Festa");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if



	if(
		
		!isset($_POST['despartydescription']) 
		|| 
		$_POST['despartydescription'] === ''
		
	){

		User::setError("Preencha a Descrição da Festa");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if

	$user = User::getFromSession();

	$wedding = new Wedding();

	$_POST['iduser'] = $user->getiduser();

	
	$wedding->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$wedding->update();

	Wedding::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/meu-casamento');
	exit;

});//END route







$app->get( "/dashboard/orders", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();

	$page = new Page();

	$page->setTpl(
		
		"dashboard-orders", 
		
		[

			'orders'=>$user->getOrders()

		]
	
	);//end setTpl

});//END route



$app->get( "/:desurl", function( $desurl )
{
    User::verifyLogin(false);

    $user = new User();
 
    $user->getFromUrl($desurl);

  

	$page = new Page();

	$page->setTpl(
		
		"wedding", 
		
		[
		
			'user'=>$user->getValues()

		]
	
	);//end setTpl

});//END route





$app->get( "/dashboard", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();
	
	$user->get((int)$user->getiduser());

	$page = new Page();

	$page->setTpl(
		
		"dashboard", 
		
		[
		
			'user'=>$user->getValues(),
			'dashboardMsg'=>User::getSuccess(),
			'dashboardError'=>User::getError()

		]
	
	);//end setTpl

});//END route






$app->post( "/dashboard", function()
{

	User::verifyLogin(false);

	if(
		
		!isset($_POST) 
				
	)
	{

		User::setError("Preencha os campos desejados");
		header('Location: /dashboard');
		exit;

	}//end if


	$user = User::getFromSession();

	
	
	if( $_POST['desurl'] !== $user->getdesurl() )
	{

		if( User::checkUrlExists($_POST['desurl']) === true )
		{

			User::setError("Este domínio já está cadastrado.");
			header('Location: /dashboard');
			exit;

		}//end if

	}//end if

	$_POST['despassword'] = $user->getdespassword();

	$user->setData($_POST);
	
	# Hcode colocou $user->save(); Aula 120
	$user->update();

	User::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard');
	exit;

});//END route



?>