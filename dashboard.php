<?php

use Core\PageDashboard;
use Core\Wirecard;
use Core\Model\User;
use Core\Model\Order;
use Core\Model\Cart;
use Core\Model\Wedding;
use Core\Model\Message;
use Core\Model\Account;
use Core\Model\Rsvp;







/*$app->get( "/dashboard/orders", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();

	$page = new PageDashboard();

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

	$page = new PageDashboard();

	$page->setTpl(
		

	 
		"dashboard-orders-detail", 
		
		[
			
			'order'=>$order->getValues(),
			'cart'=>$cart->getValues(),
			'products'=>$cart->getProducts()

		]
	
	);//end setTpl

});//END route
*/









$app->get( "/dashboard/mudar-senha", function()
{

	User::verifyLogin(false);

	$page = new PageDashboard();

	$page->setTpl(
		

	 
		"dashboard-change-password", 
		
		[
			'user'=>$user->getValues(),

			'changePassError'=>User::getError(),
			'changePassSuccess'=>User::getSuccess()

		]
	
	);//end setTpl

});//END route














$app->post( "/dashboard/mudar-senha", function()
{

	User::verifyLogin(false);

	if( 
		
		!isset($_POST['current_pass']) 
		|| 
		$_POST['current_pass'] === ''
		
	)
	{

		User::setError("Digite sua senha atual");
		header("Location: /dashboard/mudar-senha");
		exit;

	}//end if


	if(
		
		!isset($_POST['new_pass']) 
		|| 
		$_POST['new_pass'] === ''
		
	)
	{

		User::setError("Digite a senha nova");
		header("Location: /dashboard/mudar-senha");
		exit;

	}//end if


	if(
		
		!isset($_POST['new_pass_confirm'])
		|| 
		$_POST['new_pass_confirm'] === ''
		
	)
	{

		User::setError("Confirme a nova senha");
		header("Location: /dashboard/mudar-senha");
		exit;

	}//end if

	if( !($_POST['new_pass'] === $_POST['new_pass_confirm']) )
	{

		User::setError("A senhas novas digitadas são diferentes | Digite novamente");
		header("Location: /dashboard/mudar-senha");
		exit;		

	}//end if


	if( $_POST['current_pass'] === $_POST['new_pass'] )
	{

		User::setError("A sua nova senha deve ser diferente da atual | Por favor, preencha novamente");
		header("Location: /dashboard/mudar-senha");
		exit;		

	}//end if

	$user = User::getFromSession();

	if( !password_verify( $_POST['current_pass'], $user->getdespassword() ) )
	{

		User::setError("A senha atual inserida está inválida | Por favor, preencha novamente");
		header("Location: /dashboard/mudar-senha");
		exit;			

	}//end if

	$user->setdespassword($_POST['new_pass']);

	$user->update();

	$user->setToSession();

	User::setSuccess("Senha alterada");

	header("Location: /dashboard/mudar-senha");
	exit;

});//END route










$app->get( "/dashboard", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();





	$message = new Message();

	$nrtotal = $message->get((int)$user->getiduser());





	$rsvp = new Rsvp();

	$rsvp_confirmed = $rsvp->getConfirmed((int)$user->getiduser());
	
	$results = $rsvp->get((int)$user->getiduser());


	
	$account = new Account();

	$account->get((int)$user->getiduser());


	$wirecard = new Wirecard();

	$balances = $wirecard->getBalances($account->getdesaccesstoken());



	$page = new PageDashboard();

	$page->setTpl(
		

	 
		"index", 
		
		[
			'balances'=>$balances,
			'rsvp_confirmed'=>$rsvp_confirmed,
			'rsvp_total'=>$results['nrtotal'],
			'message'=>$nrtotal['nrtotal'],
			'user'=>$user->getValues(),
			'success'=>User::getSuccess(),
			'error'=>User::getError()

		]
	
	);//end setTpl

});//END route









?>