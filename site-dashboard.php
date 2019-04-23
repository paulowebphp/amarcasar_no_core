<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Order;
use Hcode\Model\Cart;



$app->get( "/dashboard", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();

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
		
		!isset($_POST['desperson']) 
		|| 
		$_POST['desperson'] === ''
		
	)
	{

		User::setError("Preencha o seu nome.");
		header('Location: /dashboard');
		exit;

	}//end if


	if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	){

		User::setError("Preencha o seu e-mail.");
		header('Location: /dashboard');
		exit;

	}//end if


	$user = User::getFromSession();

	if( $_POST['desemail'] !== $user->getdesemail() )
	{

		if( User::checkLoginExists($_POST['desemail']) === true )
		{

			User::setError("Este endereço de e-mail já está cadastrado.");
			header('Location: /dashboard');
			exit;

		}//end if

	}//end if

	$_POST['inadmin'] = $user->getinadmin();
	$_POST['despassword'] = $user->getdespassword();
	$_POST['deslogin'] = $_POST['desemail'];

	$user->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$user->update();

	User::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard');
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
		$_POST['new_pass'] === '')
	
	{

		User::setError("Digite a nova senha.");
		header("Location: /dashboard/change-password");
		exit;

	}//end if


	if(
		
		!isset($_POST['new_pass_confirm']) 
		|| 
		$_POST['new_pass_confirm'] === ''
		
	)
	{

		User::setError("Confirme a nova senha.");
		header("Location: /dashboard/change-password");
		exit;

	}//end if


	if( $_POST['current_pass'] === $_POST['new_pass'] )
	{

		User::setError("A sua nova senha deve ser diferente da atual.");
		header("Location: /dashboard/change-password");
		exit;		

	}//end if


	$user = User::getFromSession();

	if( !password_verify($_POST['current_pass'], $user->getdespassword() ) )
	{

		User::setError("A senha está inválida.");
		header("Location: /dashboard/change-password");
		exit;			

	}//end if
	

	$user->setdespassword($_POST['new_pass']);

	$user->update();

	User::setSuccess("Senha alterada com sucesso.");

	header("Location: /dashboard/change-password");
	exit;

});//END route




?>