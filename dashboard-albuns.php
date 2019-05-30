<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Photo;
use Core\Model\User;
use Core\Model\Album;





$app->get( "/dashboard/album/adicionar", function()
{
	
	User::verifyLogin(false);

	//	$user = User::getFromSession();

    /**$album = new Event();
    
	$Event->get((int)$user->getiduser());

	$Event->setData(); */
	
	$page = new PageDashboard();

	$page->setTpl(
		


		"albuns-create", 
			
		[

			'success'=>Album::getSuccess(),
			'error'=>Album::getError()
			

		]
	
	);//end setTpl

});//END route






$app->post( "/dashboard/album/adicionar", function()
{
	
	User::verifyLogin(false);

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


	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		Album::setError("Preencha a Descrição da Imagem.");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['descategory']) 
		|| 
		$_POST['descategory'] === ''
		
	)
	{

		Album::setError("Preencha a Categoria da Imagem.");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if

	
	if(
		
		!isset($_POST['inalbumstatus']) 
		|| 
		$_POST['inalbumstatus'] === ''
		
	)
	{

		Album::setError("Preencha o Status da Imagem.");
		header('Location: /dashboard/album/adicionar');
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

	}


	$user = User::getFromSession();

	$album = new Album();

	$album->get((int)$user->getiduser());

	$_POST['iduser'] = $user->getiduser();

	$album->setData($_POST);

	# Core colocou $user->save(); Aula 120
	$album->update();


	if( $_FILES["file"]["name"] === "" )
	{


		$album->setdesphoto(Rule::DEFAULT_PHOTO);
		$album->setdesextension(Rule::DEFAULT_PHOTO_EXTENSION);
		$album->setinphotosize(Rule::DEFAULT_PHOTO_SIZE);


		$album->update();

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

			Album::setSuccess("Item criado");

			header('Location: /dashboard/album');
			exit;

		}//end else
			

	}//end else



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

			'album'=>$album->getValues(),
			'success'=>Album::getSuccess(),
			'error'=>Album::getError()
			

		]
	
	);//end setTpl

});//END route






$app->post( "/dashboard/album/:idalbum", function( $idalbum )
{

	User::verifyLogin(false);

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


	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		Album::setError("Preencha a Descrição da Imagem.");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if


	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		Album::setError("Preencha a Descrição da Imagem.");
		header('Location: /dashboard/album/'.$idalbum);
		exit;

	}//end if

	

	if(
		
		!isset($_POST['inalbumstatus']) 
		|| 
		$_POST['inalbumstatus'] === ''
		
	)
	{

		Album::setError("Preencha o Status da Imagem.");
		header('Location: /dashboard/album/'.$idalbum);
		exit;

	}//end if

	if( $_FILES["file"]["error"] === '' )
	{
		Album::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
		header('Location: /dashboard/album/'.$ialbum);
		exit;

	}//end if

	if( $_FILES["file"]["size"] > Rule::MAX_PHOTO_UPLOAD_SIZE )
	{

		Album::setError("Só é possível fazer upload de arquivos de até ".(Rule::MAX_PHOTO_UPLOAD_SIZE/1000000)."MB");
		header('Location: /dashboard/album/'.$ialbum);
		exit;

	}
	
	$user = User::getFromSession();

	$album = new Album();

	//$album->getAlbum((int)$idalbum);

	$_POST['iduser'] = $user->getiduser();

	$album->setData($_POST);

	

	# Core colocou $user->save(); Aula 120
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


			Album::setSuccess("Dados alterados");

			header('Location: /dashboard/album');
			exit;

		}//end else

	}//end if




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