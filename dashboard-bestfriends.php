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
		BestFriend::setError("Falha no envio da imagem, tente novamente | Se o erro persistir, entre em contato com o suporte");
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

	$bestFriend->get((int)$user->getiduser());

	$_POST['iduser'] = $user->getiduser();

	$bestFriend->setData($_POST);

	$bestFriend->update();

	
	
	if( $_FILES["file"]["name"] === "" )
	{

		$bestFriend->setdesphoto(Rule::DEFAULT_ENTITY_PHOTO);

		$bestFriend->update();

		BestFriend::setSuccess("Ítem criado com sucesso | Adicione uma imagem clicando em Editar");

		header('Location: /dashboard/padrinhos-madrinhas');
		exit;

	}//end if
	else
	{
		$upload = new Upload();

		$basename = $upload->setEntityPhoto(
			
			$_FILES["file"], 
			$bestFriend->getiduser(),
			Rule::UPLOAD_CODE_BESTFRIENDS,
			$bestFriend->getidbestfriend()
			
			
		);//end setEntityPhoto
		
		if( $basename === false )
		{
			$basename = Rule::DEFAULT_ENTITY_PHOTO;

			$bestFriend->setdesphoto($basename);
	
			$bestFriend->update();

			BestFriend::setError("O item foi criado, mas houve falha no envio da imagem | Tente enviar a imagem novamente | Se a falha persistir, entre em contato com o suporte");

			header('Location: /dashboard/padrinhos-madrinhas/'.$bestFriend->getidbestfriend());
			exit;

		}//end if
		else
		{

			$bestFriend->setdesphoto($basename);
	
			$bestFriend->update();

			BestFriend::setSuccess("Ítem criado com sucesso");

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
		BestFriend::setError("Falha no envio da imagem, tente novamente | Se o erro persistir, entre em contato com o suporte");
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

	$bestFriend->getBestFriend((int)$idbestfriend);

	$_POST['iduser'] = $user->getiduser();

	$bestFriend->setData($_POST);

	$bestFriend->update();
	


	if( $_FILES["file"]["name"] !== "" )
	{
		$upload = new Upload();

		$basename = $upload->setEntityPhoto(
			
			$_FILES["file"], 
			$bestFriend->getiduser(),
			Rule::UPLOAD_CODE_BESTFRIENDS,
			$bestFriend->getidbestfriend()
			
		
		);//end setEntityPhoto


		if( $basename === false )
		{
			BestFriend::setError("Falha no envio da imagem, tente novamente | Se o erro persistir, entre em contato com o suporte");
			header('Location: /dashboard/padrinhos-madrinhas');
			exit;

		}//end if
		else
		{
	
			$bestFriend->setdesphoto($basename);
	
			$bestFriend->update();

		}//end else

	}//end if


	BestFriend::setSuccess("Dados alterados com sucesso");

	header('Location: /dashboard/padrinhos-madrinhas');
	exit;





});//END route














$app->get( "/dashboard/padrinhos-madrinhas", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$bestFriend = new BestFriend();
	   
	//$results = $bestFriend->get((int)$user->getiduser());
	$results = $bestFriend->getWithLimit((int)$user->getiduser(),(int)$user->getinplan());
	
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