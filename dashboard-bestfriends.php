<?php

use Hcode\Page;
use Hcode\Upload;
use Hcode\Model\User;
use Hcode\Model\Rule;
use Hcode\Model\BestFriend;




$app->post( "/dashboard/padrinhos-madrinhas/adicionar", function()
{

	if(
		
		!isset($_POST['desbestfriend']) 
		|| 
		$_POST['desbestfriend'] === ''
		
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


	if( $_FILES["file"]["error"] === '' )
	{
		BestFriend::setError("Erro: ". $file["error"] . ". Tente novamente.");
		header('Location: /dashboard/padrinhos-madrinhas/adicionar');
		exit;

	}//end if


	$user = User::getFromSession();

	$bestFriend = new BestFriend();

	$bestFriend->get((int)$user->getiduser());

	$_POST['iduser'] = $user->getiduser();

	$bestFriend->setData($_POST);

	$bestFriend->update();

	$upload = new Upload();	

	if( $_FILES["file"]["name"] === "" )
	{

		$bestFriend->setdesphoto(Rule::DEFAULT_ENTITY_PHOTO);

		$bestFriend->update();

	

	}//end if
	else
	{

		$basename = $upload->setEntityPhoto($_FILES["file"], $bestFriend->getiduser(), $bestFriend->getidbestfriend(), Rule::UPLOAD_CODE_BESTFRIENDS);

		$bestFriend->setdesphoto($basename['squarePhoto']);

		$bestFriend->setdesthumbnail($basename['thumbnail']);

		$bestFriend->update();

	}//end else

	BestFriend::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/padrinhos-madrinhas');
	exit;

});//END route






$app->get( "/dashboard/padrinhos-madrinhas/adicionar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$bestFriend = new BestFriend();
    
	$results = $bestFriend->get((int)$user->getiduser());
	
	$numBestFriends = $results['numbestfriends'];

	$bestFriend->setData($results['results']);

	$maxBestFriends = $bestFriend->maxBestFriends($user->getinplan());
	
	if( $numBestFriends >= $maxBestFriends )
	{

		BestFriend::setError("Você já atingiu o limite de Padrinhos ou Madrinhas");
		header('Location: /dashboard/padrinhos-madrinhas');
		exit;

	}//end if
	
	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"bestfriends-create", 
			
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
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"bestfriends-update", 
		
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
		
		!isset($_POST['desbestfriend']) 
		|| 
		$_POST['desbestfriend'] === ''
		
	)
	{

		BestFriend::setError("Preencha o Nome do Padrinho ou Madrinha.");
		header('Location: /dashboard/padrinhos-madrinhas/:idbestfriend');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		BestFriend::setError("Preencha a Descrição.");
		header('Location: /dashboard/padrinhos-madrinhas/:idbestfriend');
		exit;

	}//end if

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		BestFriend::setError("Preencha a Posição.");
		header('Location: /dashboard/padrinhos-madrinhas/:idbestfriend');
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		BestFriend::setError("Preencha o Status.");
		header('Location: /dashboard/padrinhos-madrinhas/:idbestfriend');
		exit;

	}//end if

	if( $_FILES["file"]["error"] === '' )
	{
		BestFriend::setError("Erro: ". $file["error"] . ". Tente novamente.");
		header('Location: /dashboard/padrinhos-madrinhas/adicionar');
		exit;

	}//end if


	$user = User::getFromSession();

	$bestFriend = new BestFriend();

	$bestFriend->getBestFriend((int)$idbestfriend);

	$_POST['iduser'] = $user->getiduser();

	$bestFriend->setData($_POST);

	$bestFriend->update();

	$upload = new Upload();

	if( $_FILES["file"]["name"] !== "" )
	{

		$basename = $upload->setEntityPhoto($_FILES["file"], $bestFriend->getiduser(), $bestFriend->getidbestfriend(), Rule::UPLOAD_CODE_BESTFRIENDS);

		$bestFriend->setdesphoto($basename['squarePhoto']);

		$bestFriend->update();

	}//end if


	BestFriend::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/padrinhos-madrinhas');
	exit;

});//END route














$app->get( "/dashboard/padrinhos-madrinhas", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $bestFriend = new BestFriend();
    
	$results = $bestFriend->get((int)$user->getiduser());
	
	$numBestFriends = $results['numbestfriends'];

	$bestFriend->setData($results['results']);

	$maxBestFriends = $bestFriend->maxBestFriends($user->getinplan());

	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"bestfriends", 
		
		[
			'maxBestFriends'=>$maxBestFriends,
			'numBestFriends'=>$numBestFriends,
			'bestFriend'=>$bestFriend->getValues(),
			'bestFriendMsg'=>BestFriend::getSuccess(),
			'bestFriendError'=>BestFriend::getError()
			

		]
	
	);//end setTpl

});//END route





?>