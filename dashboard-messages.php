<?php

use Core\PageDashboard;
use Core\Model\User;
use Core\Rule;
use Core\Model\Message;






$app->get( "/dashboard/mensagens/:idmessage/aprovar", function( $idmessage )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $message = new Message();
    
    $message->getMessage((int)$idmessage);




    $message->aproveMessage();

	header("Location: /dashboard/mensagens");
	exit;
   
	/*$page = new PageDashboard();

	$page->setTpl(
		
		"messages-update", 
		
		[

			'message'=>$message->getValues(),
			'success'=>Message::getSuccess(),
			'error'=>Message::getError()
			

		]
	
	);//end setTpl*/

});//END route





$app->get( "/dashboard/mensagens/:idmessage/moderar", function( $idmessage )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $message = new Message();
    
    $message->getMessage((int)$idmessage);

    $message->moderateMessage();

	header("Location: /dashboard/mensagens");
	exit;
   
	/*$page = new PageDashboard();

	$page->setTpl(
		
		"messages-update", 
		
		[

			'message'=>$message->getValues(),
			'success'=>Message::getSuccess(),
			'error'=>Message::getError()
			

		]
	
	);//end setTpl*/

});//END route








$app->get( "/dashboard/mensagens/:idmessage/deletar", function( $idmessage ) 
{
	User::verifyLogin();

	$message = new Message();

	$message->getMessage((int)$idmessage);

	$message->delete();

	header('Location: /dashboard/mensagens');
	exit;
	
});//END route






$app->get( "/dashboard/mensagens", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$message = new Message();

	if( $search != '' )
	{

		$results = $message->getSearch((int)$user->getiduser(),$search,$currentPage,Rule::ITENS_PER_PAGE);

	}//end if
	else
	{
		
		$results = $message->getPage((int)$user->getiduser(),$currentPage,Rule::ITENS_PER_PAGE);

	}//end else
        
    


	$numMessages = $results['nummessages'];

	$message->setData($results['results']);

	$maxMessages = $message->maxMessages($user->getinplan());

	$pages = [];	
    
	for ( $x=0; $x < $results['pages']; $x++ )
	{ 
		# code...
		array_push(
			
			$pages, 
			
			[

				'href'=>'/dashboard/mensagens?'.http_build_query(
					
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
		


		"messages", 
		
		[
			'user'=>$user->getValues(),
			'search'=>$search,
			'pages'=>$pages,
			'maxMessages'=>$maxMessages,
			'numMessages'=>$numMessages,
			'message'=>$message->getValues(),
			'success'=>Message::getSuccess(),
			'error'=>Message::getError()
			

		]
	
	);//end setTpl

});//END route





?>