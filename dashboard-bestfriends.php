<?php

use Core\PageDashboard;
use Core\Photo;
use Core\Rule;
use Core\Validate;
use Core\Model\User;
use Core\Model\BestFriend;








$app->get( "/dashboard/padrinhos-madrinhas/adicionar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$bestfriend = new BestFriend();

	
    
	$results = $bestfriend->get((int)$user->getiduser());
	
	$numBestFriends = $results['numbestfriends'];

	$bestfriend->setData($results['results']);

	$maxBestFriends = $bestfriend->maxBestFriends($user->getinplan());
	
	if( $numBestFriends >= $maxBestFriends )
	{

		BestFriend::setError("Você já atingiu o limite de Melhores Amigxs");
		header('Location: /dashboard/padrinhos-madrinhas');
		exit;

	}//end if
	
	$page = new PageDashboard();

	$page->setTpl(
		
	

		"bestfriends-create", 
			
		[
			'user'=>$user->getValues(),
			'success'=>BestFriend::getSuccess(),
			'error'=>BestFriend::getError()
			

		]
	
	);//end setTpl

});//END route














$app->post( "/dashboard/padrinhos-madrinhas/adicionar", function()
{


	User::verifyLogin(false);

	$user = User::getFromSession();







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

	if( ($instatus = Validate::validateBoolean($_POST['instatus'])) === false )
	{	
		
		BestFriend::setError("O status deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
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

	if( ($inposition = Validate::validatePosition($_POST['inposition'])) === false )
	{	
		

		BestFriend::setError("A posição deve estar entre 0 e 99");
		header('Location: /dashboard/padrinhos-madrinhas/adicionar');
		exit;

	}//end if











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

	if( !$desbestfriend = Validate::validateString($_POST['desbestfriend']) )
	{

		BestFriend::setError("O nome do melhxr amigx não pode ser formado apenas com caracteres especiais, tente novamente");
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

	

	$desdescription = Validate::validateString($_POST['desdescription'], true);




		




	$bestfriend = new BestFriend();


	$bestfriend->setData([

		'iduser'=>$user->getiduser(),
		'instatus'=>$instatus,
		'inposition'=>$inposition,
		'desbestfriend'=>$desbestfriend,
		'desdescription'=>$desdescription,
		'desphoto'=>Rule::DEFAULT_PHOTO,
		'desextension'=>Rule::DEFAULT_PHOTO_EXTENSION

	]);//setData

		

	
	$bestfriend->update();

	
	

	if( $_FILES["file"]["name"] === "" )
	{

		//$bestfriend->setdesphoto(Rule::DEFAULT_PHOTO);
		//$bestfriend->setdesextension(Rule::DEFAULT_PHOTO_EXTENSION);

		//$bestfriend->update();

		BestFriend::setSuccess("Item criado com sucesso | Adicione uma imagem depois clicando em Editar");

		header('Location: /dashboard/padrinhos-madrinhas');
		exit;

	}//end if
	else
	{
		$photo = new Photo();

		$basename = $photo->setPhoto(
			
			$_FILES["file"], 
			$user->getiduser(),
			Rule::CODE_BESTFRIENDS,
			$bestfriend->getidbestfriend()
			
			
		);//end setPhoto
		
		if( $basename['basename'] === false )
		{
	
			$bestfriend->delete();

			BestFriend::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");

			header('Location: /dashboard/padrinhos-madrinhas/adicionar');
			exit;

		}//end if
		else
		{

			$bestfriend->setdesphoto($basename['basename']);
			$bestfriend->setdesextension($basename['extension']);
	
			$bestfriend->update();

			BestFriend::setSuccess("Item criado");

			header('Location: /dashboard/padrinhos-madrinhas');
			exit;

		}//end else
			

	}//end else


});//END route














$app->get( "/dashboard/padrinhos-madrinhas/:idbestfriend/deletar", function( $idbestfriend ) 
{
	User::verifyLogin(false);

	$user = User::getFromSession();

	$bestfriend = new BestFriend();

	$bestfriend->getBestFriend((int)$idbestfriend);

	$bestfriend->delete();

	$bestfriend->deletePhoto($bestfriend->getdesphoto());

	header('Location: /dashboard/padrinhos-madrinhas');
	exit;
	
});//END route














$app->get( "/dashboard/padrinhos-madrinhas/:idbestfriend", function( $idbestfriend )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $bestfriend = new BestFriend();
    
    $bestfriend->getBestFriend((int)$idbestfriend);
   
	$page = new PageDashboard();

	$page->setTpl(
		
	

		"bestfriends-update", 
		
		[
			'user'=>$user->getValues(),
			'bestfriend'=>$bestfriend->getValues(),
			'success'=>BestFriend::getSuccess(),
			'error'=>BestFriend::getError()
			

		]
	
	);//end setTpl

});//END route












$app->post( "/dashboard/padrinhos-madrinhas/:idbestfriend", function( $idbestfriend )
{

	User::verifyLogin(false);

	$user = User::getFromSession();

	





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

	if( ($instatus = Validate::validateBoolean($_POST['instatus'])) === false )
	{	
		
		BestFriend::setError("O status deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
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

		if( ($inposition = Validate::validatePosition($_POST['inposition'])) === false )
		{	
			

			BestFriend::setError("A posição deve estar entre 0 e 99");
			header('Location: /dashboard/padrinhos-madrinhas/'.$idbestfriend);
			exit;

		}//end if















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

	if( !$desbestfriend = Validate::validateString($_POST['desbestfriend']) )
	{

		BestFriend::setError("O nome do melhxr amigx não pode ser formado apenas com caracteres especiais, tente novamente");
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

	}//end if



	$desdescription = Validate::validateString($_POST['desdescription'], true);


	

	$bestfriend = new BestFriend();

	$bestfriend->getBestFriend((int)$idbestfriend);



	






	
	$bestfriend->setData([

		'idbestfriend'=>$bestfriend->getidbestfriend(),
		'iduser'=>$user->getiduser(),
		'instatus'=>$instatus,
		'inposition'=>$inposition,
		'desbestfriend'=>$desbestfriend,
		'desdescription'=>$desdescription,
		'desphoto'=>$bestfriend->getdesphoto(),
		'desextension'=>$bestfriend->getdesextension()

	]);//setData





	$bestfriend->update();	



	
	if( $_FILES["file"]["name"] != "" )
	{

		$photo = new Photo();

		if( $bestfriend->getdesphoto() != Rule::DEFAULT_PHOTO )
		{

			$photo->deletePhoto($bestfriend->getdesphoto(), Rule::CODE_BESTFRIENDS);

		}//end if

		$basename = $photo->setPhoto(
			
			$_FILES["file"], 
			$user->getiduser(),
			Rule::CODE_BESTFRIENDS,
			$bestfriend->getidbestfriend()
			
		);//end setPhoto


		if( $basename['basename'] === false )
		{
			BestFriend::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
			header('Location: /dashboard/padrinhos-madrinhas');
			exit;

		}//end if
		else
		{
			
	
			$bestfriend->setdesphoto($basename['basename']);
			$bestfriend->setdesextension($basename['extension']);
	
			$bestfriend->update();

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

	$bestfriend = new BestFriend();
	   
	$results = $bestfriend->get((int)$user->getiduser());
	
	//$results = $bestfriend->getWithLimit((int)$user->getiduser(),(int)$user->getinplan());
	
	$bestfriend->setData($results['results']);
	
	$numBestFriends = $results['numbestfriends'];

	
	$maxBestFriends = $bestfriend->maxBestFriends($user->getinplan());

	

	$page = new PageDashboard();

	$page->setTpl(
		
	

		"bestfriends", 
		
		[
			'user'=>$user->getValues(),
			'maxBestFriends'=>$maxBestFriends,
			'numBestFriends'=>$numBestFriends,
			'bestfriend'=>$bestfriend->getValues(),
			'success'=>BestFriend::getSuccess(),
			'error'=>BestFriend::getError()
			

		]
	
	);//end setTpl

});//END route





?>