<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Event;






$app->post( "/dashboard/eventos/adicionar", function()
{
	
	User::verifyLogin(false);

	if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		Event::setError("Preencha o Nome do Padrinho ou Madrinha.");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		Event::setError("Preencha a Descrição.");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Event::setError("Preencha a Posição.");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Event::setError("Preencha o Status.");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if


	$user = User::getFromSession();

	$event = new Event();

	$event->get((int)$user->getiduser());

	$_POST['iduser'] = $user->getiduser();

	$event->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$event->update();

	Event::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/eventos');
	exit;

});//END route






$app->get( "/dashboard/eventos/adicionar", function()
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
		"Events-create", 
			
		[

			'EventMsg'=>Event::getSuccess(),
			'EventError'=>Event::getError()
			

		]
	
	);//end setTpl

});//END route



$app->get( "/dashboard/eventos/:idEvent/deletar", function( $idEvent ) 
{
	User::verifyLogin();

	$Event = new Event();

	$Event->getEvent((int)$idEvent);

	$Event->delete();

	header('Location: /dashboard/eventos');
	exit;
	
});//END route





$app->get( "/dashboard/eventos/:idEvent", function( $idEvent )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $Event = new Event();
    
    $Event->getEvent((int)$idEvent);
   
	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"Events-update", 
		
		[

			'Event'=>$Event->getValues(),
			'EventMsg'=>Event::getSuccess(),
			'EventError'=>Event::getError()
			

		]
	
	);//end setTpl

});//END route






$app->post( "/dashboard/eventos/:idEvent", function( $idEvent )
{

	User::verifyLogin(false);

	if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		Event::setError("Preencha o Nome do Padrinho ou Madrinha.");
		header('Location: /dashboard/eventos/:idEvent');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		Event::setError("Preencha a Descrição.");
		header('Location: /dashboard/eventos/:idEvent');
		exit;

	}//end if

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Event::setError("Preencha a Posição.");
		header('Location: /dashboard/eventos/:idEvent');
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Event::setError("Preencha o Status.");
		header('Location: /dashboard/eventos/:idEvent');
		exit;

	}//end if


	$user = User::getFromSession();

	$Event = new Event();

	$Event->getEvent((int)$idEvent);

	$_POST['iduser'] = $user->getiduser();

	$Event->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$Event->update();

	Event::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/eventos');
	exit;

});//END route














$app->get( "/dashboard/eventos", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$event = new Event();

	if( $search != '' )
	{

		$results = $event->getSearch((int)$user->getiduser(),$search,$currentPage,3);

	}//end if
	else
	{
		# Aula 126
		// $users = User::listAll();

		# Aula 126
		$results = $event->get((int)$user->getiduser(),$currentPage,3);

	}//end else
    
	

	$numEvents = $results['numevents'];

	$event->setData($results['results']);

	$maxEvents = $event->maxEvents($user->getinplan());

	$pages = [];	
    
	for ( $x=0; $x < $results['pages']; $x++ )
	{ 
		# code...
		array_push(
			
			$pages, 
			
			[

				'href'=>'/dashboard/eventos?'.http_build_query(
					
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
		"events", 
		
		[
			'search'=>$search,
			'pages'=>$pages,
			'maxEvents'=>$maxEvents,
			'numEvents'=>$numEvents,
			'event'=>$event->getValues(),
			'eventMsg'=>Event::getSuccess(),
			'eventError'=>Event::getError()
			

		]
	
	);//end setTpl

});//END route





?>