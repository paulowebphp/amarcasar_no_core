<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Validate;
use Core\Model\User;
use Core\Model\Video;







$app->get( "/dashboard/videos/adicionar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    /**$Event = new Event();
    
	$Event->get((int)$user->getiduser());

	$Event->setData(); */
	
	$page = new PageDashboard();

	$page->setTpl(
		

 
		"videos-create", 
			
		[
			'user'=>$user->getValues(),
			'success'=>Video::getSuccess(),
			'error'=>Video::getError()
			

		]
	
	);//end setTpl

});//END route

















$app->post( "/dashboard/videos/adicionar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();








	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Video::setError("Preencha o status do sideo");
		header('Location: /dashboard/videos/adicionar');
		exit;

	}//end if

	if( ($instatus = Validate::validateBoolean($_POST['instatus'])) === false )
	{	
		
		Video::setError("O status deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/videos/adicionar');
		exit;

	}//end if












	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Video::setError("Preencha a posição do vídeo");
		header('Location: /dashboard/videos/adicionar');
		exit;

	}//end if

	if( ($inposition = Validate::validatePosition($_POST['inposition'])) === false )
	{	
		

		Video::setError("A posição deve estar entre 0 e 99");
		header('Location: /dashboard/videos/adicionar');
		exit;

	}//end if

















	if(
		
		!isset($_POST['desvideo']) 
		|| 
		$_POST['desvideo'] === ''
		
	)
	{

		Video::setError("Preencha o nome do vídeo");
		header('Location: /dashboard/videos/adicionar');
		exit;

	}//end if

	if( !$desvideo = Validate::validateString($_POST['desvideo']) )
	{	
		

		Video::setError("O nome não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/videos/adicionar');
		exit;

	}//end if












	if(
		
		!isset($_POST['desurl']) 
		|| 
		$_POST['desurl'] === ''
		
	)
	{

		Video::setError("Preencha o endereço (url) do vídeo");
		header('Location: /dashboard/videos/adicionar');
		exit;

	}//end if


	if( !$desurl = Validate::validateURL($_POST['desurl']) )
	{	
		
		Video::setError("A URL não parece estar num formato válido, tente novamente");
		header('Location: /dashboard/videos/adicionar');
		exit;

	}//end if



	



	$desdescription = Validate::validateString($_POST['desdescription'], true);



	



	

	$video = new Video();

	$video->get((int)$user->getiduser());

	$video->setData([

		'iduser'=>$user->getiduser(),
		'instatus'=>$instatus,
		'inposition'=>$inposition,
		'desvideo'=>$desvideo,
		'desdescription'=>$desdescription,
		'desurl'=>$desurl,
		'desphoto'=>Rule::DEFAULT_PHOTO,
		'desextension'=>Rule::DEFAULT_PHOTO_EXTENSION

	]);//setData



	$video->update();

	Video::setSuccess("Dados alterados");

	header('Location: /dashboard/videos');
	exit;

});//END route

















$app->get( "/dashboard/videos/:idvideo/deletar", function( $idvideo ) 
{
	User::verifyLogin(false);

	$user = User::getFromSession();

	$video = new Video();

	$video->getVideo((int)$idvideo);

	$video->delete();

	header('Location: /dashboard/videos');
	exit;
	
});//END route















$app->get( "/dashboard/videos/:idvideo", function( $idvideo )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $video = new Video();
    
    $video->getVideo((int)$idvideo);
   
	$page = new PageDashboard();

	$page->setTpl(
		

 
		"videos-update", 
		
		[
			'user'=>$user->getValues(),
			'video'=>$video->getValues(),
			'success'=>Video::getSuccess(),
			'error'=>Video::getError()
			

		]
	
	);//end setTpl

});//END route

















$app->post( "/dashboard/videos/:idvideo", function( $idvideo )
{

	User::verifyLogin(false);

	$user = User::getFromSession();













if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Video::setError("Preencha o status do sideo");
		header('Location: /dashboard/videos/'.$idvideo);
		exit;

	}//end if

	if( ($instatus = Validate::validateBoolean($_POST['instatus'])) === false )
	{	
		
		Video::setError("O status deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/videos/'.$idvideo);
		exit;

	}//end if












	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Video::setError("Preencha a posição do vídeo");
		header('Location: /dashboard/videos/'.$idvideo);
		exit;

	}//end if

	if( ($inposition = Validate::validatePosition($_POST['inposition'])) === false )
	{	
		

		Video::setError("A posição deve estar entre 0 e 99");
		header('Location: /dashboard/videos/'.$idvideo);
		exit;

	}//end if

















	if(
		
		!isset($_POST['desvideo']) 
		|| 
		$_POST['desvideo'] === ''
		
	)
	{

		Video::setError("Preencha o nome do vídeo");
		header('Location: /dashboard/videos/'.$idvideo);
		exit;

	}//end if

	if( !$desvideo = Validate::validateString($_POST['desvideo']) )
	{	
		

		Video::setError("O nome não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/videos/'.$idvideo);
		exit;

	}//end if












	if(
		
		!isset($_POST['desurl']) 
		|| 
		$_POST['desurl'] === ''
		
	)
	{

		Video::setError("Preencha o endereço (url) do vídeo");
		header('Location: /dashboard/videos/'.$idvideo);
		exit;

	}//end if


	if( !$desurl = Validate::validateVideoCode($_POST['desurl']) )
	{	
		
		Video::setError("A URL não parece estar num formato válido, tente novamente");
		header('Location: /dashboard/videos/'.$idvideo);
		exit;

	}//end if






	$desdescription = Validate::validateString($_POST['desdescription'], true);



	

	$video = new Video();

	$video->getVideo((int)$idvideo);

	$video->setData([

		'idvideo'=>$video->getidvideo(),
		'iduser'=>$user->getiduser(),
		'instatus'=>$instatus,
		'inposition'=>$inposition,
		'desvideo'=>$desvideo,
		'desdescription'=>$desdescription,
		'desurl'=>$desurl,
		'desphoto'=>$video->getdesphoto(),
		'desextension'=>$video->getdesextension()

	]);//setData


		

	$video->update();

	Video::setSuccess("Dados alterados");

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
    	

	$numvideos = $results['nrtotal'];

	$video->setData($results['results']);

	$maxvideos = $video->maxVideos($user->getinplan());

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
			'user'=>$user->getValues(),
			'search'=>$search,
			'pages'=>$pages,
			'maxvideos'=>$maxvideos,
			'numvideos'=>$numvideos,
			'video'=>$video->getValues(),
			'success'=>Video::getSuccess(),
			'error'=>Video::getError()
			

		]
	
	);//end setTpl

});//END route





?>