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



$app->get( "/dashboard/orders/:idorder", function( $idorder )
{

	User::verifyLogin(false);

	$order = new Order();

	$order->get((int)$idorder);

	$cart = new Cart();

	$cart->get((int)$order->getidcart());

	$cart->getCalculateTotal();

	$page = new Page();

	$page->setTpl(
		
		"dashboard-orders-detail", 
		
		[
			
			'order'=>$order->getValues(),
			'cart'=>$cart->getValues(),
			'products'=>$cart->getProducts()

		]
	
	);//end setTpl

});//END route






$app->get( "/dashboard/change-password", function()
{

	User::verifyLogin(false);

	$page = new Page();

	$page->setTpl(
		
		"dashboard-change-password", 
		
		[

			'changePassError'=>User::getError(),
			'changePassSuccess'=>User::getSuccess()

		]
	
	);//end setTpl

});//END route










$app->post( "/dashboard/change-password", function()
{

	User::verifyLogin(false);

	if( 
		
		!isset($_POST['current_pass']) 
		|| 
		$_POST['current_pass'] === ''
		
	)
	{

		User::setError("Digite a senha atual.");
		header("Location: /dashboard/change-password");
		exit;

	}//end if


	if(
		
		!isset($_POST['new_pass']) 
		|| 
		$_POST['new_pass'] === ''
		
	)
	{

		User::setError("Você não digitou a nova senha. Por favor, preencha os dados novamente.");
		header("Location: /dashboard/change-password");
		exit;

	}//end if


	if(
		
		!isset($_POST['new_pass_confirm'])
		|| 
		$_POST['new_pass_confirm'] === ''
		
	)
	{

		User::setError("Você não confirmou a nova senha. Por favor, preencha os dados novamente.");
		header("Location: /dashboard/change-password");
		exit;

	}//end if


	if( $_POST['current_pass'] === $_POST['new_pass'] )
	{

		User::setError("A sua nova senha deve ser diferente da atual. Por favor, preencha os dados novamente.");
		header("Location: /dashboard/change-password");
		exit;		

	}//end if

	$user = User::getFromSession();

	if( !password_verify( $_POST['current_pass'], $user->getdespassword() ) )
	{

		User::setError("A senha atual inserida está inválida. Por favor, preencha os dados novamente.");
		header("Location: /dashboard/change-password");
		exit;			

	}//end if

	$user->setdespassword($_POST['new_pass']);

	$user->update();

	User::setSuccess("Senha alterada com sucesso.");

	header("Location: /dashboard/change-password");
	exit;

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

		if( User::checkLoginExists($_POST['desurl']) === true )
		{

			User::setError("Este endereço de e-mail já está cadastrado.");
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