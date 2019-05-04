<?php

use Hcode\Page;
use Hcode\Photo;
use Hcode\Model\Rule;
use Hcode\Model\User;
use Hcode\Model\BestFriend;




$app->post( "/dashboard/padrinhos-madrinhas/adicionar", function()
{

	if(
		
		!isset($_POST['desbestfriend']) 
		|| 
		$_POST['desbestfriend'] === ''
		
	)
	{

		BestFriend::setError("Preenhca o nome dx Melhxr Amigx");
		header('Location: /dashboard/padrinhos-madrinhas/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		BestFriend::setError("Preencha uma descrição dx Melhxr Amigx");
		header('Location: /dashboard/padrinhos-madrinhas/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		BestFriend::setError("Preencha a posição dx Melhxr Amigx");
		header('Location: /dashboard/padrinhos-madrinhas/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		BestFriend::setError("Preencha o status dx Melhxr Amigx");
		header('Location: /dashboard/padrinhos-madrinhas/adicionar');
		exit;

	}//end if


	if( $_FILES["file"]["error"] === '' )
	{
		BestFriend::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
		header('Location: /dashboard/padrinhos-madrinhas/adicionar');
		exit;

	}//end if

	if( $_FILES["file"]["size"] > Rule::MAX_PHOTO_UPLOAD_SIZE )
	{

		BestFriend::setError("Só é possível fazer upload de arquivos de até ".(Rule::MAX_PHOTO_UPLOAD_SIZE/1000000)."MB");
		header('Location: /dashboard/padrinhos-madrinhas/adicionar');
		exit;

	}

	$user = User::getFromSession();

	$bestFriend = new BestFriend();

	$_POST['iduser'] = $user->getiduser();

	$bestFriend->setData($_POST);
	
	$bestFriend->update();

	
	
	if( $_FILES["file"]["name"] === "" )
	{

		$bestFriend->setdesphoto(Rule::DEFAULT_ENTITY_PHOTO);
		$bestFriend->setdesextension(Rule::DEFAULT_ENTITY_PHOTO_EXTENSION);

		$bestFriend->update();

		BestFriend::setSuccess("Item criado com sucesso | Adicione uma imagem depois clicando em Editar");

		header('Location: /dashboard/padrinhos-madrinhas');
		exit;

	}//end if
	else
	{
		$photo = new Photo();

		$basename = $photo->setPhoto(
			
			$_FILES["file"], 
			$bestFriend->getiduser(),
			Rule::UPLOAD_CODE_BESTFRIENDS,
			$bestFriend->getidbestfriend()
			
			
		);//end setPhoto
		
		if( $basename['basename'] === false )
		{
	
			$bestFriend->delete();

			BestFriend::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");

			header('Location: /dashboard/padrinhos-madrinhas/adicionar');
			exit;

		}//end if
		else
		{

			$bestFriend->setdesphoto($basename['basename']);
			$bestFriend->setdesextension($basename['extension']);
	
			$bestFriend->update();

			BestFriend::setSuccess("Item criado");

			header('Location: /dashboard/padrinhos-madrinhas');
			exit;

		}//end else
			

	}//end else


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

		BestFriend::setError("Você já atingiu o limite de Melhxres Amigxs");
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

	$bestFriend->deletePhoto($bestFriend->getdesphoto());

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

		BestFriend::setError("Preenhca o nome dx Melhxr Amigx");
		header('Location: /dashboard/padrinhos-madrinhas/'.$idbestfriend);
		exit;

	}//end if

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		BestFriend::setError("Preencha uma descrição dx Melhxr Amigx");
		header('Location: /dashboard/padrinhos-madrinhas/'.$idbestfriend);
		exit;

	}//end if

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		BestFriend::setError("Preencha a posição dx Melhxr Amigx");
		header('Location: /dashboard/padrinhos-madrinhas/'.$idbestfriend);
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		BestFriend::setError("Preencha o status dx Melhxr Amigx");
		header('Location: /dashboard/padrinhos-madrinhas/'.$idbestfriend);
		exit;

	}//end if


	if( $_FILES["file"]["error"] === '' )
	{
		BestFriend::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
		header('Location: /dashboard/padrinhos-madrinhas/'.$idbestfriend);
		exit;

	}//end if

	if( $_FILES["file"]["size"] > Rule::MAX_PHOTO_UPLOAD_SIZE )
	{

		BestFriend::setError("Só é possível fazer upload de arquivos de até ".(Rule::MAX_PHOTO_UPLOAD_SIZE/1000000)."MB");
		header('Location: /dashboard/padrinhos-madrinhas/'.$idbestfriend);
		exit;

	}


	$user = User::getFromSession();

	$bestFriend = new BestFriend();

	$bestFriend->getBestFriend((int)$idbestfriend);

	$_POST['iduser'] = $user->getiduser();
	
	$bestFriend->setData($_POST);

	$bestFriend->update();	
	
	if( $_FILES["file"]["name"] !== "" )
	{

		$photo = new Photo();

		if( $bestFriend->getdesphoto() != Rule::DEFAULT_ENTITY_PHOTO )
		{

			$photo->deletePhoto($bestFriend->getdesphoto(), Rule::UPLOAD_CODE_BESTFRIENDS);

		}//end if

		$basename = $photo->setPhoto(
			
			$_FILES["file"], 
			$bestFriend->getiduser(),
			Rule::UPLOAD_CODE_BESTFRIENDS,
			$bestFriend->getidbestfriend()
			
		);//end setPhoto


		if( $basename['basename'] === false )
		{
			BestFriend::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
			header('Location: /dashboard/padrinhos-madrinhas');
			exit;

		}//end if
		else
		{
			
	
			$bestFriend->setdesphoto($basename['basename']);
			$bestFriend->setdesextension($basename['extension']);
	
			$bestFriend->update();

		}//end else

	}//end if


	BestFriend::setSuccess("Item alterado");

	header('Location: /dashboard/padrinhos-madrinhas');
	exit;





});//END route














$app->get( "/dashboard/padrinhos-madrinhas", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$bestFriend = new BestFriend();
	   
	$results = $bestFriend->get((int)$user->getiduser());
	
	//$results = $bestFriend->getWithLimit((int)$user->getiduser(),(int)$user->getinplan());
	
	$bestFriend->setData($results['results']);
	
	$numBestFriends = $results['numbestfriends'];

	
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