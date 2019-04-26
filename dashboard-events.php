<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Event;
use Hcode\Model\Rule;






$app->post( "/dashboard/eventos/adicionar", function()
{
	
	User::verifyLogin(false);

	if(
		
		!isset($_POST['dtevent']) 
		|| 
		$_POST['dtevent'] === ''
		
	)
	{

		Event::setError("Preencha a Data do Evento.");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desevent']) 
		|| 
		$_POST['desevent'] === ''
		
	)
	{

		Event::setError("Preencha o nome do Evento.");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		Event::setError("Preencha a Descrição do Evento.");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['deslocation']) 
		|| 
		$_POST['deslocation'] === ''
		
	)
	{

		Event::setError("Preencha o Local do Evento.");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Event::setError("Preencha o Telefone do Evento.");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Event::setError("Preencha o Status do Evento.");
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
		"events-create", 
			
		[

			'eventMsg'=>Event::getSuccess(),
			'eventError'=>Event::getError()
			

		]
	
	);//end setTpl

});//END route



$app->get( "/dashboard/eventos/:idevent/deletar", function( $idevent ) 
{
	User::verifyLogin();

	$event = new Event();

	$event->getEvent((int)$idevent);

	$event->delete();

	header('Location: /dashboard/eventos');
	exit;
	
});//END route





$app->get( "/dashboard/eventos/:idevent", function( $idevent )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $event = new Event();
    
    $event->getEvent((int)$idevent);
   
	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"events-update", 
		
		[

			'event'=>$event->getValues(),
			'eventMsg'=>Event::getSuccess(),
			'eventError'=>Event::getError()
			

		]
	
	);//end setTpl

});//END route






$app->post( "/dashboard/eventos/:idevent", function( $idevent )
{

	User::verifyLogin(false);

	if(
		
		!isset($_POST['dtevent']) 
		|| 
		$_POST['dtevent'] === ''
		
	)
	{

		Event::setError("Preencha a data do Evento.");
		header('Location: /dashboard/eventos/:idevent');
		exit;

	}//end if

	if(
		
		!isset($_POST['desevent']) 
		|| 
		$_POST['desevent'] === ''
		
	)
	{

		Event::setError("Preencha o nome do Evento.");
		header('Location: /dashboard/eventos/:idevent');
		exit;

	}//end if

	

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		Event::setError("Preencha a descrição do Evento.");
		header('Location: /dashboard/eventos/:idevent');
		exit;

	}//end if

	if(
		
		!isset($_POST['deslocation']) 
		|| 
		$_POST['deslocation'] === ''
		
	)
	{

		Event::setError("Preencha o Local do evento.");
		header('Location: /dashboard/eventos/:idevent');
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Event::setError("Preencha o telefone de contato do evento.");
		header('Location: /dashboard/eventos/:idevent');
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Event::setError("Preencha o Status do evento.");
		header('Location: /dashboard/eventos/:idevent');
		exit;

	}//end if


	$user = User::getFromSession();

	$event = new Event();

	$event->getEvent((int)$idevent);

	$_POST['iduser'] = $user->getiduser();

	$event->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$event->update();

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

		$results = $event->getSearch((int)$user->getiduser(),$search,$currentPage,Rule::ITENS_PER_PAGE);

	}//end if
	else
	{
		
		$results = $event->getPage((int)$user->getiduser(),$currentPage,Rule::ITENS_PER_PAGE);

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