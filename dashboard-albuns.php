<?php

use Core\PageDashboard;
use Core\Model\User;
use Core\Rule;
use Core\Model\Album;






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


	$user = User::getFromSession();

	$album = new Album();

	$album->get((int)$user->getiduser());

	$_POST['iduser'] = $user->getiduser();

	$album->setData($_POST);

	# Core colocou $user->save(); Aula 120
	$album->update();

	Album::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/album');
	exit;

});//END route






$app->get( "/dashboard/album/adicionar", function()
{
	
	User::verifyLogin(false);

	//	$user = User::getFromSession();

    /**$Event = new Event();
    
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


	
	$user = User::getFromSession();

	$album = new Album();

	//$album->getAlbum((int)$idalbum);

	$_POST['iduser'] = $user->getiduser();

	$album->setData($_POST);

	

	# Core colocou $user->save(); Aula 120
	$album->update();

	Album::setSuccess("Dados alterados com sucesso!");

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