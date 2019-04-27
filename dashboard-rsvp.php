<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Rule;
use Hcode\Model\Rsvp;






$app->post( "/dashboard/rsvp/adicionar", function()
{
	
	User::verifyLogin(false);

	if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		Rsvp::setError("Preencha nome do Convidado.");
		header('Location: /dashboard/rsvp/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	)
	{

		Rsvp::setError("Preencha o e-mail do Convidado.");
		header('Location: /dashboard/rsvp/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Rsvp::setError("Preencha o telefone do Convidado.");
		header('Location: /dashboard/rsvp/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['inmaxadults']) 
		|| 
		$_POST['inmaxadults'] === ''
		
	)
	{

		Rsvp::setError("Preencha quantos convidados adultos no máximo o Convidado poderá levar.");
		header('Location: /dashboard/rsvp/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['inmaxchildren']) 
		|| 
		$_POST['inmaxchildren'] === ''
		
	)
	{

		Rsvp::setError("Preencha quantos convidados crianças no máximo o Convidado poderá levar..");
		header('Location: /dashboard/rsvp/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Rsvp::setError("Preencha o Status do Convidado.");
		header('Location: /dashboard/rsvp/adicionar');
		exit;

	}//end if


	$user = User::getFromSession();

	$rsvp = new Rsvp();

	$rsvp->get((int)$user->getiduser());

	$_POST['iduser'] = $user->getiduser();

    $rsvp->setData($_POST);
    
	# Hcode colocou $user->save(); Aula 120
	$rsvp->update();

	Rsvp::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/rsvp');
	exit;

});//END route






$app->get( "/dashboard/rsvp/adicionar", function()
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
		"rsvp-create", 
			
		[

			'rsvpMsg'=>Rsvp::getSuccess(),
			'rsvpError'=>Rsvp::getError()
			

		]
	
	);//end setTpl

});//END route



$app->get( "/dashboard/rsvp/:idrsvp/deletar", function( $idrsvp ) 
{
	User::verifyLogin();

	$rsvp = new Rsvp();

	$rsvp->getRsvp((int)$idrsvp);

	$rsvp->delete();

	header('Location: /dashboard/rsvp');
	exit;
	
});//END route





$app->get( "/dashboard/rsvp/:idrsvp", function( $idrsvp )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $rsvp = new Rsvp();
    
    $rsvp->getRsvp((int)$idrsvp);
   
	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"rsvp-update", 
		
		[

			'rsvp'=>$rsvp->getValues(),
			'rsvpMsg'=>Rsvp::getSuccess(),
			'rsvpError'=>Rsvp::getError()
			

		]
	
	);//end setTpl

});//END route






$app->post( "/dashboard/rsvp/:idrsvp", function( $idrsvp )
{

	User::verifyLogin(false);

	if(
		
		!isset($_POST['desname']) 
		|| 
		$_POST['desname'] === ''
		
	)
	{

		Rsvp::setError("Preencha o nome do Convidado.");
		header('Location: /dashboard/rsvp/:idrsvp');
		exit;

	}//end if

	if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	)
	{

		Rsvp::setError("Preencha o e-mail do Convidado.");
		header('Location: /dashboard/rsvp/:idrsvp');
		exit;

	}//end if

	

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Rsvp::setError("Preencha a telefone do Convidado.");
		header('Location: /dashboard/rsvp/:idrsvp');
		exit;

	}//end if

	if(
		
		!isset($_POST['inmaxadults']) 
		|| 
		$_POST['inmaxadults'] === ''
		
	)
	{

		Rsvp::setError("Preencha o numero de acompanhantes adultos");
		header('Location: /dashboard/rsvp/:idrsvp');
		exit;

	}//end if

	if(
		
		!isset($_POST['inmaxchildren']) 
		|| 
		$_POST['inmaxchildren'] === ''
		
	)
	{

		Rsvp::setError("Preencha o numero de acompanhantes crianças");
		header('Location: /dashboard/rsvp/:idrsvp');
		exit;

	}//end if

	

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Rsvp::setError("Preencha o Status do Stakeholdero.");
		header('Location: /dashboard/rsvp/:idrsvp');
		exit;

	}//end if


	$user = User::getFromSession();

	$rsvp = new Rsvp();

	$rsvp->getRsvp((int)$idrsvp);

	$_POST['iduser'] = $user->getiduser();

	$rsvp->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$rsvp->update();

	Rsvp::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/rsvp');
	exit;

});//END route














$app->get( "/dashboard/rsvp", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$rsvp = new Rsvp();

	if( $search != '' )
	{

		$results = $rsvp->getSearch((int)$user->getiduser(),$search,$currentPage,Rule::ITENS_PER_PAGE);

	}//end if
	else
	{
		
		$results = $rsvp->getPage((int)$user->getiduser(),$currentPage,Rule::ITENS_PER_PAGE);

	}//end else
        

	$numRsvp = $results['numrsvp'];

	$rsvp->setData($results['results']);

	$maxRsvp = $rsvp->maxRsvp($user->getinplan());

	$pages = [];	
    
	for ( $x=0; $x < $results['pages']; $x++ )
	{ 
		# code...
		array_push(
			
			$pages, 
			
			[

				'href'=>'/dashboard/fornecedores?'.http_build_query(
					
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
		"rsvp", 
		
		[
			'search'=>$search,
			'pages'=>$pages,
			'maxRsvp'=>$maxRsvp,
			'numRsvp'=>$numRsvp,
			'rsvp'=>$rsvp->getValues(),
			'rsvpMsg'=>Rsvp::getSuccess(),
			'rsvpError'=>Rsvp::getError()
			

		]
	
	);//end setTpl

});//END route





?>