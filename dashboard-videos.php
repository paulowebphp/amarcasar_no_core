<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Model\User;
use Core\Model\Video;






$app->post( "/dashboard/videos/adicionar", function()
{
	
	User::verifyLogin(false);

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Video::setError("Preencha a posição do Video.");
		header('Location: /dashboard/videos/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desvideo']) 
		|| 
		$_POST['desvideo'] === ''
		
	)
	{

		Video::setError("Preencha o nome do Video.");
		header('Location: /dashboard/videos/adicionar');
		exit;

	}//end if


	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		Video::setError("Preencha a Descrição do Fornecedor.");
		header('Location: /dashboard/videos/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdomain']) 
		|| 
		$_POST['desdomain'] === ''
		
	)
	{

		Video::setError("Preencha o endereço do Video.");
		header('Location: /dashboard/videos/adicionar');
		exit;

	}//end if


	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Video::setError("Preencha o Status do Video.");
		header('Location: /dashboard/videos/adicionar');
		exit;

	}//end if


	$user = User::getFromSession();

	$video = new Video();

	$video->get((int)$user->getiduser());

	$_POST['iduser'] = $user->getiduser();

	$video->setData($_POST);

	# Core colocou $user->save(); Aula 120
	$video->update();

	Video::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/videos');
	exit;

});//END route






$app->get( "/dashboard/videos/adicionar", function()
{
	
	User::verifyLogin(false);

	//	$user = User::getFromSession();

    /**$Event = new Event();
    
	$Event->get((int)$user->getiduser());

	$Event->setData(); */
	
	$page = new PageDashboard();

	$page->setTpl(
		

 
		"videos-create", 
			
		[

			'videoMsg'=>Video::getSuccess(),
			'videoError'=>Video::getError()
			

		]
	
	);//end setTpl

});//END route



$app->get( "/dashboard/videos/:idvideo/deletar", function( $idstakeholder ) 
{
	User::verifyLogin();

	$video = new Video();

	$video->getVideo((int)$idstakeholder);

	$video->delete();

	header('Location: /dashboard/videos');
	exit;
	
});//END route





$app->get( "/dashboard/videos/:idvideo", function( $idstakeholder )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $video = new Video();
    
    $video->getVideo((int)$idstakeholder);
   
	$page = new PageDashboard();

	$page->setTpl(
		

 
		"videos-update", 
		
		[

			'video'=>$video->getValues(),
			'videoMsg'=>Video::getSuccess(),
			'videoError'=>Video::getError()
			

		]
	
	);//end setTpl

});//END route






$app->post( "/dashboard/videos/:idvideo", function( $idstakeholder )
{

	User::verifyLogin(false);

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Video::setError("Preencha a posição do Video.");
		header('Location: /dashboard/videos/:idvideo');
		exit;

	}//end if

	if(
		
		!isset($_POST['desvideo']) 
		|| 
		$_POST['desvideo'] === ''
		
	)
	{

		Video::setError("Preencha o nome do Video.");
		header('Location: /dashboard/videos/:idvideo');
		exit;

	}//end if


	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		Video::setError("Preencha a Descrição do Fornecedor.");
		header('Location: /dashboard/videos/:idvideo');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdomain']) 
		|| 
		$_POST['desdomain'] === ''
		
	)
	{

		Video::setError("Preencha o endereço do Video.");
		header('Location: /dashboard/videos/:idvideo');
		exit;

	}//end if


	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Video::setError("Preencha o Status do Video.");
		header('Location: /dashboard/videos/:idvideo');
		exit;

	}//end if



	$user = User::getFromSession();

	$video = new Video();

	$video->getVideo((int)$idstakeholder);

	$_POST['iduser'] = $user->getiduser();

	$video->setData($_POST);

	# Core colocou $user->save(); Aula 120
	$video->update();

	Video::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/videos');
	exit;

});//END route














$app->get( "/dashboard/videos", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$video = new Video();

	if( $search != '' )
	{

		$results = $video->getSearch((int)$user->getiduser(),$search,$currentPage,Rule::ITENS_PER_PAGE);

	}//end if
	else
	{
		
		$results = $video->getPage((int)$user->getiduser(),$currentPage,Rule::ITENS_PER_PAGE);

	}//end else
    	

	$numVideos = $results['numvideos'];

	$video->setData($results['results']);

	$maxVideos = $video->maxVideos($user->getinplan());

	$pages = [];	
    
	for ( $x=0; $x < $results['pages']; $x++ )
	{ 
		# code...
		array_push(
			
			$pages, 
			
			[

				'href'=>'/dashboard/videos?'.http_build_query(
					
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
		

 
		"videos", 
		
		[
			'search'=>$search,
			'pages'=>$pages,
			'maxVideos'=>$maxVideos,
			'numVideos'=>$numVideos,
			'video'=>$video->getValues(),
			'videoMsg'=>Video::getSuccess(),
			'videoError'=>Video::getError()
			

		]
	
	);//end setTpl

});//END route





?>