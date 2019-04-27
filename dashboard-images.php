<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Rule;
use Hcode\Model\Image;






$app->post( "/dashboard/album/adicionar", function()
{
	
	User::verifyLogin(false);

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Image::setError("Preencha a posição da Imagem.");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desimage']) 
		|| 
		$_POST['desimage'] === ''
		
	)
	{

		Image::setError("Preencha o nome da Imagem.");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if


	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		Image::setError("Preencha a Descrição da Imagem.");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if

	
	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Image::setError("Preencha o Status da Imagem.");
		header('Location: /dashboard/album/adicionar');
		exit;

	}//end if


	$user = User::getFromSession();

	$image = new Image();

	$image->get((int)$user->getiduser());

	$_POST['iduser'] = $user->getiduser();

	$image->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$image->update();

	Image::setSuccess("Dados alterados com sucesso!");

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
	
	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"images-create", 
			
		[

			'imageMsg'=>Image::getSuccess(),
			'imageError'=>Image::getError()
			

		]
	
	);//end setTpl

});//END route



$app->get( "/dashboard/album/:idimage/deletar", function( $idimage ) 
{
	User::verifyLogin();

	$image = new Image();

	$image->getImage((int)$idimage);

	$image->delete();

	header('Location: /dashboard/album');
	exit;
	
});//END route





$app->get( "/dashboard/album/:idimage", function( $idimage )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $image = new Image();
    
    $image->getImage((int)$idimage);
   
	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"images-update", 
		
		[

			'image'=>$image->getValues(),
			'imageMsg'=>Image::getSuccess(),
			'imageError'=>Image::getError()
			

		]
	
	);//end setTpl

});//END route






$app->post( "/dashboard/album/:idimage", function( $idimage )
{

	User::verifyLogin(false);

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Image::setError("Preencha a posição da Imagem.");
		header('Location: /dashboard/album/:idimage');
		exit;

	}//end if

	if(
		
		!isset($_POST['desimage']) 
		|| 
		$_POST['desimage'] === ''
		
	)
	{

		Image::setError("Preencha o nome da Imagem.");
		header('Location: /dashboard/album/:idimage');
		exit;

	}//end if


	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		Image::setError("Preencha a Descrição da Imagem.");
		header('Location: /dashboard/album/:idimage');
		exit;

	}//end if

	

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Image::setError("Preencha o Status da Imagem.");
		header('Location: /dashboard/album/:idimage');
		exit;

	}//end if



	$user = User::getFromSession();

	$image = new Image();

	$image->getImage((int)$idimage);

	$_POST['iduser'] = $user->getiduser();

	$image->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$image->update();

	Image::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/album');
	exit;

});//END route














$app->get( "/dashboard/album", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$image = new Image();

	if( $search != '' )
	{

		$results = $image->getSearch((int)$user->getiduser(),$search,$currentPage,Rule::ITENS_PER_PAGE);

	}//end if
	else
	{
		
		$results = $image->getPage((int)$user->getiduser(),$currentPage,Rule::ITENS_PER_PAGE);

	}//end else
    	

	$numImages = $results['numimages'];

	$image->setData($results['results']);

	$maxImages = $image->maxImages($user->getinplan());

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


	

	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"images", 
		
		[
			'search'=>$search,
			'pages'=>$pages,
			'maxImages'=>$maxImages,
			'numImages'=>$numImages,
			'image'=>$image->getValues(),
			'imageMsg'=>Image::getSuccess(),
			'imageError'=>Image::getError()
			

		]
	
	);//end setTpl

});//END route





?>