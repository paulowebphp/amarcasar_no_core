<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Model\User;
use Core\Model\Rsvp;
use Core\Model\RsvpConfig;





$app->get("/dashboard/rsvp/download", function(){

	User::verifyLogin(false);

	$user = User::getFromSession();

	Rsvp::generateCsv( $user->getiduser() );

});//END route






$app->get( "/dashboard/rsvp/confirmados", function() 
{

	User::verifyLogin(false);

	$user = User::getFromSession();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$rsvp = new Rsvp();

	if( $search != '' )
	{

		$results = $rsvp->getConfirmedSearch((int)$user->getiduser(),$search,$currentPage,Rule::ITENS_PER_PAGE);

	}//end if
	else
	{
		
		$results = $rsvp->getConfirmedPage((int)$user->getiduser(),$currentPage,Rule::ITENS_PER_PAGE);

	}//end else
    


	$numConfirmed = $results['nrtotal'];

	$rsvp->setData($results['results']);

	//$maxRsvp = $rsvp->maxRsvp($user->getinplan());

	$pages = [];	
    
	for ( $x=0; $x < $results['pages']; $x++ )
	{ 
		# code...
		array_push(
			
			$pages, 
			
			[

				'href'=>'/dashboard/rsvp?'.http_build_query(
					
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
		
 
 
		"rsvp-confirmed", 
		
		[
			'user'=>$user->getValues(),
			'search'=>$search,
			'pages'=>$pages,
			//'maxRsvp'=>$maxRsvp,
			'numConfirmed'=>$numConfirmed,
			'rsvp'=>$rsvp->getValues(),
			'rsvpMsg'=>Rsvp::getSuccess(),
			'rsvpError'=>Rsvp::getError()
			

		]
	
	);//end setTpl
	
});//END route







$app->get( "/dashboard/rsvp/:idrsvp/deletar", function( $idrsvp ) 
{

	User::verifyLogin(false);

	$user = User::getFromSession();

	$rsvp = new Rsvp();

	$rsvp->getRsvp((int)$idrsvp);

	$rsvp->delete();

	header('Location: /dashboard/rsvp');
	exit;
	
});//END route







$app->post( "/dashboard/rsvp/configurar", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();



	if( 
		
		!isset($_POST['innameconfirm']) 
		|| 
		$_POST['innameconfirm'] === ''
		
	)
	{

		RsvpConfig::setError("Digite o Nome do Convidado");
		header("Location: /dashboard/rsvp");
		exit;

	}//end if


	if(
		
		!isset($_POST['inmaxadultsconfig']) 
		|| 
		$_POST['inmaxadultsconfig'] === ''
		
	)
	{

		RsvpConfig::setError("Digite a Quantidade Máxima de Adultos");
		header("Location: /dashboard/rsvp");
		exit;

	}//end if


	if(
		
		!isset($_POST['inmaxchildrenconfig'])
		|| 
		$_POST['inmaxchildrenconfig'] === ''
		
	)
	{

		RsvpConfig::setError("Digite a Quantidade Máxima de Crianças");
		header("Location: /dashboard/rsvp");
		exit;

	}//end if




	$rsvpconfig = new RsvpConfig();


	$rsvpconfig->setData([

			'idrsvpconfig'=>$_POST['idrsvpconfig'],
			'iduser'=>$user->getiduser(),
			'inclosed'=>$_POST['inclosed'],
			'innameconfirm'=>$_POST['innameconfirm'],
			'inmaxadultsconfig'=>$_POST['inmaxadultsconfig'],
			'inmaxchildrenconfig'=>$_POST['inmaxchildrenconfig']

		]);

	

	$rsvpconfig->update();



	if( $rsvpconfig->getidrsvpconfig() > 0 )
	{

		RsvpConfig::setSuccess("Dados alterados");

		header("Location: /dashboard/rsvp/configurar");
		exit;


	}//end if


	

});//END route









$app->get( "/dashboard/rsvp/configurar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $rsvpconfig = new RsvpConfig();
    
    $rsvpconfig->get((int)$user->getiduser());

    		

    if( !$rsvpconfig->getidrsvpconfig() ) $rsvpconfig->setidrsvpconfig('');
	if( !$rsvpconfig->getinmaxadultsconfig() ) $rsvpconfig->setinmaxadultsconfig('');
	if( !$rsvpconfig->getinmaxadultsconfig() ) $rsvpconfig->setinmaxadultsconfig('');
	if( !$rsvpconfig->getinmaxchildrenconfig() ) $rsvpconfig->setinmaxchildrenconfig('');
	if( !$rsvpconfig->getinaccompaniesconfirm() ) $rsvpconfig->setinaccompaniesconfirm('');
   


	$page = new PageDashboard();

	$page->setTpl(
		
 
		"rsvp-config", 
		
		[
			'user'=>$user->getValues(),
			'rsvpconfig'=>$rsvpconfig->getValues(),
			'rsvpconfigSuccess'=>Rsvpconfig::getSuccess(),
			'rsvpconfigError'=>RsvpConfig::getError()
			

		]
	
	);//end setTpl

});//END route












$app->post( "/dashboard/rsvp/adicionar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();


	if(
		
		!isset($_POST['desguest']) 
		|| 
		$_POST['desguest'] === ''
		
	)
	{

		Rsvp::setError("Preencha nome do Convidado.");
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

	

	$rsvp = new Rsvp();

	//$rsvp->get((int)$user->getiduser());

	//$_POST['iduser'] = $user->getiduser();

    $rsvp->setData([

    	'iduser'=>$user->getiduser(),
    	'desguest'=>$_POST['desguest'],
    	'desemail'=>NULL,
    	'nrphone'=>NULL,
    	'inconfirmed'=>0,
    	'inmaxadults'=>$_POST['inmaxadults'],
    	'inadultsconfirmed'=>NULL,
    	'inmaxchildren'=>$_POST['inmaxchildren'],
    	'inchildrenconfirmed'=>NULL,
    	'desguestaccompanies'=>NULL,
    	'dtconfirmed'=>NULL

    ]);

    
	# Core colocou $user->save(); Aula 120
	$rsvp->update();

	Rsvp::setSuccess("Convidado criado");

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
	
	$page = new PageDashboard();

	$page->setTpl(
		
 
 
		"rsvp-create", 
			
		[
			'user'=>$user->getValues(),
			'rsvpMsg'=>Rsvp::getSuccess(),
			'rsvpError'=>Rsvp::getError()
			

		]
	
	);//end setTpl

});//END route









$app->get( "/dashboard/rsvp/:idrsvp", function( $idrsvp )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $rsvp = new Rsvp();
    
    $rsvp->getRsvp((int)$idrsvp);
   
	$page = new PageDashboard();

	$page->setTpl(
		
 
 
		"rsvp-update", 
		
		[
			'user'=>$user->getValues(),
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
		
		!isset($_POST['desguest']) 
		|| 
		$_POST['desguest'] === ''
		
	)
	{

		Rsvp::setError("Preencha o nome do Convidado.");
		header('Location: /dashboard/rsvp/'.$idrsvp);
		exit;

	}//end if

	

	if(
		
		!isset($_POST['inmaxadults']) 
		|| 
		$_POST['inmaxadults'] === ''
		
	)
	{

		Rsvp::setError("Preencha o numero de acompanhantes adultos");
		header('Location: /dashboard/rsvp/'.$idrsvp);
		exit;

	}//end if

	if(
		
		!isset($_POST['inmaxchildren']) 
		|| 
		$_POST['inmaxchildren'] === ''
		
	)
	{

		Rsvp::setError("Preencha o numero de acompanhantes crianças");
		header('Location: /dashboard/rsvp/'.$idrsvp);
		exit;

	}//end if

	

	$user = User::getFromSession();

	$rsvp = new Rsvp();

	//$rsvp->getRsvp((int)$idrsvp);

	//$_POST['iduser'] = $user->getiduser();

	//$rsvp->setData($_POST);

	



	$rsvp->setData([

		'idrsvp'=>$_POST['idrsvp'],
    	'iduser'=>$user->getiduser(),
    	'desguest'=>$_POST['desguest'],
    	'desemail'=>NULL,
    	'nrphone'=>NULL,
    	'inconfirmed'=>NULL,
    	'inmaxadults'=>$_POST['inmaxadults'],
    	'inadultsconfirmed'=>NULL,
    	'inmaxchildren'=>$_POST['inmaxchildren'],
    	'inchildrenconfirmed'=>NULL,
    	'desguestaccompanies'=>NULL,
    	'dtconfirmed'=>NULL

    ]);



	# Core colocou $user->save(); Aula 120
	$rsvp->update();

	Rsvp::setSuccess("Dados alterados");

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
    
    

	$numRsvp = $results['nrtotal'];

	$rsvp->setData($results['results']);

	$maxRsvp = $rsvp->maxRsvp($user->getinplan());

	$pages = [];	
    
	for ( $x=0; $x < $results['pages']; $x++ )
	{ 
		# code...
		array_push(
			
			$pages, 
			
			[

				'href'=>'/dashboard/rsvp?'.http_build_query(
					
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
		
 
 
		"rsvp", 
		
		[
			'user'=>$user->getValues(),
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