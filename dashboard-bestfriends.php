<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\BestFriend;






$app->post( "/dashboard/padrinhos-madrinhas/adicionar", function()
{
	
	User::verifyLogin(false);

	if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		BestFriend::setError("Preencha o Nome do Padrinho ou Madrinha.");
		header('Location: /dashboard/padrinhos-madrinhas/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		BestFriend::setError("Preencha a Descrição.");
		header('Location: /dashboard/padrinhos-madrinhas/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		BestFriend::setError("Preencha a Posição.");
		header('Location: /dashboard/padrinhos-madrinhas/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		BestFriend::setError("Preencha o Status.");
		header('Location: /dashboard/padrinhos-madrinhas/adicionar');
		exit;

	}//end if


	$user = User::getFromSession();

	$bestFriend = new BestFriend();

	$bestFriend->get((int)$user->getiduser());

	$_POST['iduser'] = $user->getiduser();

	$bestFriend->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$bestFriend->update();

	BestFriend::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/padrinhos-madrinhas');
	exit;

});//END route






$app->get( "/dashboard/padrinhos-madrinhas/adicionar", function()
{
	
	User::verifyLogin(false);

	//	$user = User::getFromSession();

    /**$bestFriend = new BestFriend();
    
	$bestFriend->get((int)$user->getiduser());

	$bestFriend->setData(); */
	
	$page = new Page();

	$page->setTpl(
		
		"dashboard-bestfriends-create", 
			
		[

			'bestFriendMsg'=>BestFriend::getSuccess(),
			'bestFriendError'=>BestFriend::getError()
			

		]
	
	);//end setTpl

});//END route



$app->get( "/dashboard/padrinhos-madrinhas/:idbestfriend/deletar", function( $idbestfriend ) 
{
	User::verifyLogin();

	$bestFriend = new BestFriend();

	$bestFriend->getBestFriend((int)$idbestfriend);

	$bestFriend->delete();

	header('Location: /dashboard/padrinhos-madrinhas');
	exit;
	
});//END route





$app->get( "/dashboard/padrinhos-madrinhas/:idbestfriend", function( $idbestfriend )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $bestFriend = new BestFriend();
    
    $bestFriend->getBestFriend((int)$idbestfriend);
   
	$page = new Page();

	$page->setTpl(
		
		"dashboard-bestfriends-update", 
		
		[

			'bestFriend'=>$bestFriend->getValues(),
			'bestFriendMsg'=>BestFriend::getSuccess(),
			'bestFriendError'=>BestFriend::getError()
			

		]
	
	);//end setTpl

});//END route






$app->post( "/dashboard/padrinhos-madrinhas/:idbestfriend", function( $idbestfriend )
{

	User::verifyLogin(false);

	if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		User::setError("Preencha o Nome do Padrinho ou Madrinha.");
		header('Location: /dashboard/padrinhos-madrinhas/:idbestfriend');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		User::setError("Preencha a Descrição.");
		header('Location: /dashboard/padrinhos-madrinhas/:idbestfriend');
		exit;

	}//end if

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		User::setError("Preencha a Posição.");
		header('Location: /dashboard/padrinhos-madrinhas/:idbestfriend');
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		User::setError("Preencha o Status.");
		header('Location: /dashboard/padrinhos-madrinhas/:idbestfriend');
		exit;

	}//end if


	$user = User::getFromSession();

	$bestFriend = new BestFriend();

	$bestFriend->getBestFriend((int)$idbestfriend);

	$_POST['iduser'] = $user->getiduser();

	$bestFriend->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$bestFriend->update();

	BestFriend::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/padrinhos-madrinhas');
	exit;

});//END route














$app->get( "/dashboard/padrinhos-madrinhas", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $bestFriend = new BestFriend();
    
    $bestFriend->get((int)$user->getiduser());

	$page = new Page();

	$page->setTpl(
		
		"dashboard-bestfriends", 
		
		[

			'bestFriend'=>$bestFriend->getValues(),
			'bestFriendMsg'=>BestFriend::getSuccess(),
			'bestFriendError'=>BestFriend::getError()
			

		]
	
	);//end setTpl

});//END route





?>