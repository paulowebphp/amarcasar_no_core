<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Validate;
use Core\Photo;
use Core\Model\User;
use Core\Model\Album;





$app->get( "/dashboard/album/adicionar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    /**$album = new Event();
    
	$Event->get((int)$user->getiduser());

	$Event->setData(); */
	
	$page = new PageDashboard();

	$page->setTpl(
		


		"albuns-create", 
			
		[
			'user'=>$user->getValues(),
			'success'=>Album::getSuccess(),
			'error'=>Album::getError()
			

		]
	
	);//end setTpl

});//END route

















$app->post( "/dashboard/album/adicionar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();








	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Album::setError("Preencha o Status da Imagem.");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if

	if( ($instatus = Validate::validateBoolean($_POST['instatus'])) === false )
	{	
		
		Album::setError("O status deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if








	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Album::setError("Preencha a posição da Imagem.");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if

	if( ($inposition = Validate::validatePosition($_POST['inposition'])) === false )
	{	
		

		Album::setError("A posição deve estar entre 0 e 99");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if










	if(
		
		!isset($_POST['desalbum']) 
		|| 
		$_POST['desalbum'] === ''
		
	)
	{

		Album::setError("Preencha o nome da Imagem.");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if

	if( !$desalbum = Validate::validateString($_POST['desalbum']) )
	{	
		

		Album::setError("O nome não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if


























	if( $_FILES["file"]["error"] === '' )
	{
		Album::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if

	if( $_FILES["file"]["size"] > Rule::MAX_PHOTO_UPLOAD_SIZE )
	{

		Album::setError("Só é possível fazer upload de arquivos de até ".(Rule::MAX_PHOTO_UPLOAD_SIZE/1000000)."MB");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if






	$desdescription = Validate::validateString($_POST['desdescription'], true);
	$descategory = Validate::validateString($_POST['descategory'], true);




	






	

	$album = new Album();

	$album->get((int)$user->getiduser());

	$album->setData([

		'iduser'=>$user->getiduser(),
		'instatus'=>$instatus,
		'inposition'=>$inposition,
		'inphotosize'=>Rule::DEFAULT_PHOTO_SIZE,
		'desalbum'=>$desalbum,
		'descategory'=>$descategory,
		'desdescription'=>$desdescription,
		'desphoto'=>Rule::DEFAULT_PHOTO,
		'desextension'=>Rule::DEFAULT_PHOTO_EXTENSION

	]);//setData
	


	$album->update();


	if( $_FILES["file"]["name"] === "" )
	{

		//$album->setinphotosize(Rule::DEFAULT_PHOTO_SIZE);
		//$album->setdesphoto(Rule::DEFAULT_PHOTO);
		//$album->setdesextension(Rule::DEFAULT_PHOTO_EXTENSION);


		//$album->update();

		Album::setSuccess("Item criado com sucesso | Adicione uma imagem depois clicando em Editar");

		header('Location: /dashboard/album');
		exit;

	}//end if
	else
	{
		
		$photo = new Photo();

		$basename = $photo->setPhoto(
			
			$_FILES["file"], 
			$album->getiduser(),
			Rule::CODE_ALBUNS,
			$album->getidalbum(),
			0
			
			
		);//end setPhoto
		
		if( $basename['basename'] === false )
		{
	
			$album->delete();

			Album::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");


			//$album->setinphotosize(Rule::DEFAULT_PHOTO_SIZE);
			//$album->update();


			header('Location: /dashboard/album/adicionar');
			exit;

		}//end if
		else
		{

			$album->setdesphoto($basename['basename']);
			$album->setdesextension($basename['extension']);
			$album->setinphotosize($_FILES["file"]["size"]);

			
			$album->update();

			

		}//end else

	}//end else



	Album::setSuccess("Item criado");

	header('Location: /dashboard/album');
	exit;



});//END route










$app->get( "/dashboard/album/:idalbum/deletar", function( $idalbum ) 
{
	User::verifyLogin(false);

	$user = User::getFromSession();

	$album = new Album();

	$album->getAlbum((int)$idalbum);

	$album->delete();

	header('Location: /dashboard/album');
	exit;
	
});//END route












$app->get( "/dashboard/album/:idalbum", function( $idalbum )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $album = new Album();
    
    $album->getAlbum((int)$idalbum);


   
	$page = new PageDashboard();

	$page->setTpl(
		


		"albuns-update", 
		
		[
			'user'=>$user->getValues(),
			'album'=>$album->getValues(),
			'success'=>Album::getSuccess(),
			'error'=>Album::getError()
			

		]
	
	);//end setTpl

});//END route
















$app->post( "/dashboard/album/:idalbum", function( $idalbum )
{

	User::verifyLogin(false);

	$user = User::getFromSession();








	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Album::setError("Preencha o Status da Imagem.");
		header('Location: /dashboard/album/'.$idalbum);
		exit;

	}//end if

	if( ($instatus = Validate::validateBoolean($_POST['instatus'])) === false )
	{	
		
		Album::setError("O status deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/album/'.$idalbum);
		exit;

	}//end if








	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Album::setError("Preencha a posição da Imagem.");
		header('Location: /dashboard/album/'.$idalbum);
		exit;

	}//end if

	if( ($inposition = Validate::validatePosition($_POST['inposition'])) === false )
	{	
		

		Album::setError("A posição deve estar entre 0 e 99");
		header('Location: /dashboard/album/'.$idalbum);
		exit;

	}//end if










	if(
		
		!isset($_POST['desalbum']) 
		|| 
		$_POST['desalbum'] === ''
		
	)
	{

		Album::setError("Preencha o nome da Imagem.");
		header('Location: /dashboard/album/'.$idalbum);
		exit;

	}//end if

	if( !$desalbum = Validate::validateString($_POST['desalbum']) )
	{	
		

		Album::setError("O nome não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/album/'.$idalbum);
		exit;

	}//end if







	if( $_FILES["file"]["error"] === '' )
	{
		Album::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
		header('Location: /dashboard/album/'.$idalbum);
		exit;

	}//end if

	if( $_FILES["file"]["size"] > Rule::MAX_PHOTO_UPLOAD_SIZE )
	{

		Album::setError("Só é possível fazer upload de arquivos de até ".(Rule::MAX_PHOTO_UPLOAD_SIZE/1000000)."MB");
		header('Location: /dashboard/album/'.$idalbum);
		exit;

	}//end if






	$desdescription = Validate::validateString($_POST['desdescription'], true);
	$descategory = Validate::validateString($_POST['descategory'], true);
	
	







	$album = new Album();

	$album->getAlbum((int)$idalbum);

	$album->setData([

		'idalbum'=>$album->getidalbum(),
		'iduser'=>$user->getiduser(),
		'instatus'=>$instatus,
		'inposition'=>$inposition,
		'inphotosize'=>$album->getinphotosize(),
		'desalbum'=>$desalbum,
		'descategory'=>$descategory,
		'desdescription'=>$desdescription,
		'desphoto'=>$album->getdesphoto(),
		'desextension'=>$album->getdesextension()

	]);//setData

	

	$album->update();









	if( $_FILES["file"]["name"] !== "" )
	{

		$photo = new Photo();

		if( $album->getdesphoto() != Rule::DEFAULT_PHOTO )
		{

			$photo->deletePhoto($album->getdesphoto(), Rule::CODE_ALBUNS);

		}//end if


		$basename = $photo->setPhoto(
			
			$_FILES["file"], 
			$album->getiduser(),
			Rule::CODE_ALBUNS,
			$album->getidalbum(),
			0
			
		);//end setPhoto


		if( $basename['basename'] === false )
		{
			Album::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
			header('Location: /dashboard/album/'.$idalbum);
			exit;

		}//end if
		else
		{
			
	
			$album->setdesphoto($basename['basename']);
			$album->setdesextension($basename['extension']);
			$album->setinphotosize($_FILES["file"]["size"]);
	
			$album->update();


		}//end else

	}//end if


	Album::setSuccess("Dados alterados");

	header('Location: /dashboard/album');
	exit;





});//END route














$app->get( "/dashboard/album", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$album = new Album();

	if( $search != '' )
	{

		$results = $album->getSearch((int)$user->getiduser(),$search,$currentPage,Rule::ITENS_PER_PAGE);

	}//end if
	else
	{
		
		$results = $album->getPage((int)$user->getiduser(),$currentPage,Rule::ITENS_PER_PAGE);

	}//end else

    	

	$numalbuns = $results['nrtotal'];

	$album->setData($results['results']);

	$maxalbuns = $album->maxAlbuns($user->getinplan());

	$pages = [];	
    
	for ( $x=0; $x < $results['pages']; $x++ )
	{ 
		# code...
		array_push(
			
			$pages, 
			
			[

				'href'=>'/dashboard/album?'.http_build_query(
					
					[

						'page'=>$x+1

					]
				
				),

			'text'=>$x+1

			]
		
		);//end array_push

	}//end for


	

	$page = new PageDashboard();

	$page->setTpl(
		


		"albuns", 
		
		[
			'user'=>$user->getValues(),
			'search'=>$search,
			'pages'=>$pages,
			'maxalbuns'=>$maxalbuns,
			'numalbuns'=>$numalbuns,
			'album'=>$album->getValues(),
			'success'=>Album::getSuccess(),
			'error'=>Album::getError()
			

		]
	
	);//end setTpl

});//END route





?>