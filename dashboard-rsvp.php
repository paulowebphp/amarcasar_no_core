<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Validate;
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
			'success'=>Rsvp::getSuccess(),
			'error'=>Rsvp::getError()
			

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










$app->get( "/dashboard/rsvp/configurar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $rsvpconfig = new RsvpConfig();
    
    $rsvpconfig->get((int)$user->getiduser());



	$page = new PageDashboard();

	$page->setTpl(
		
 
		"rsvp-config", 
		
		[
			'user'=>$user->getValues(),
			'rsvpconfig'=>$rsvpconfig->getValues(),
			'success'=>Rsvpconfig::getSuccess(),
			'error'=>RsvpConfig::getError()
			

		]
	
	);//end setTpl

});//END route













$app->post( "/dashboard/rsvp/configurar", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();








	if( 
		
		!isset($_POST['inclosed']) 
		|| 
		$_POST['inclosed'] === ''
		
	)
	{

		RsvpConfig::setError("Digite o Nome do Convidado");
		header("Location: /dashboard/rsvp/configurar");
		exit;

	}//end if

	if( ($inclosed = Validate::validateBoolean($_POST['inclosed'])) === false )
	{	
		
		RsvpConfig::setError("O status da lista deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header("Location: /dashboard/rsvp/configurar");
		exit;

	}//end if







	if(
		
		!isset($_POST['inmaxadultsconfig']) 
		|| 
		$_POST['inmaxadultsconfig'] === ''
		
	)
	{

		RsvpConfig::setError("Digite a Quantidade Máxima de Adultos");
		header("Location: /dashboard/rsvp/configurar");
		exit;

	}//end if

	if( ($inmaxadultsconfig = Validate::validateMaxRsvp($_POST['inmaxadultsconfig'])) === false )
	{	
		

		RsvpConfig::setError("A quantidade deve estar entre 0 e 99");
		header("Location: /dashboard/rsvp/configurar");
		exit;

	}//end if









	if(
		
		!isset($_POST['inmaxchildrenconfig'])
		|| 
		$_POST['inmaxchildrenconfig'] === ''
		
	)
	{

		RsvpConfig::setError("Digite a Quantidade Máxima de Crianças");
		header("Location: /dashboard/rsvp/configurar");
		exit;

	}//end if

	if( ($inmaxchildrenconfig = Validate::validateMaxRsvp($_POST['inmaxchildrenconfig'])) === false )
	{	
		

		RsvpConfig::setError("A quantidade deve estar entre 0 e 99");
		header("Location: /dashboard/rsvp/configurar");
		exit;

	}//end if









	$rsvpconfig = new RsvpConfig();


	$rsvpconfig->setData([

		'idrsvpconfig'=>$_POST['idrsvpconfig'],
		'iduser'=>$user->getiduser(),
		'inclosed'=>$inclosed,
		'inmaxadultsconfig'=>$inmaxadultsconfig,
		'inmaxchildrenconfig'=>$inmaxchildrenconfig

	]);//setData



	$rsvpconfig->update();



	RsvpConfig::setSuccess("Dados alterados");

	header("Location: /dashboard/rsvp/configurar");
	exit;

	

});//END route























$app->get( "/dashboard/rsvp/adicionar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    /**$Event = new Event();
    
	$Event->get((int)$user->getiduser());

	$Event->setData(); */
	
	$page = new PageDashboard();

	$page->setTpl(
		
 
 
		"rsvp-create", 
			
		[
			'user'=>$user->getValues(),
			'success'=>Rsvp::getSuccess(),
			'error'=>Rsvp::getError()
			

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

	if( !$desguest = Validate::validateString($_POST['desguest']) )
	{

		Rsvp::setError("O nome do convidado não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/rsvp/adicionar');
		exit;

	}//end if






	

	if(
		
		!isset($_POST['inmaxadults']) 
		|| 
		$_POST['inmaxadults'] === ''
		
	)
	{

		Rsvp::setError("Preencha quantos convidados adultos no máximo o convidado poderá levar.");
		header('Location: /dashboard/rsvp/adicionar');
		exit;

	}//end if

	if( ($inmaxadults = Validate::validateMaxRsvp($_POST['inmaxadults'])) === false )
	{	
		

		Rsvp::setError("A quantidade deve estar entre 0 e 99");
		header('Location: /dashboard/rsvp/adicionar');
		exit;

	}//end if







	if(
		
		!isset($_POST['inmaxchildren']) 
		|| 
		$_POST['inmaxchildren'] === ''
		
	)
	{

		Rsvp::setError("Preencha quantas crianças no máximo o convidado poderá levar");
		header('Location: /dashboard/rsvp/adicionar');
		exit;

	}//end if

	if( ($inmaxchildren = Validate::validateMaxRsvp($_POST['inmaxchildren'])) === false )
	{	
		

		Rsvp::setError("A quantidade deve ser entre 0 e 99");
		header('Location: /dashboard/rsvp/adicionar');
		exit;

	}//end if








	

	$rsvp = new Rsvp();

	//$rsvp->get((int)$user->getiduser());

	//$_POST['iduser'] = $user->getiduser();

    $rsvp->setData([

    	'iduser'=>$user->getiduser(),
    	'desguest'=>$desguest,
    	'desemail'=>NULL,
    	'nrphone'=>NULL,
    	'inconfirmed'=>0,
    	'inmaxadults'=>$inmaxadults,
    	'inadultsconfirmed'=>NULL,
    	'inmaxchildren'=>$inmaxchildren,
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
			'success'=>Rsvp::getSuccess(),
			'error'=>Rsvp::getError()
			

		]
	
	);//end setTpl

});//END route

















$app->post( "/dashboard/rsvp/:idrsvp", function( $idrsvp )
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
		header('Location: /dashboard/rsvp/'.$idrsvp);
		exit;

	}//end if

	if( !$desguest = Validate::validateString($_POST['desguest']) )
	{

		Rsvp::setError("O nome do convidado não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/rsvp/'.$idrsvp);
		exit;

	}//end if






	

	if(
		
		!isset($_POST['inmaxadults']) 
		|| 
		$_POST['inmaxadults'] === ''
		
	)
	{

		Rsvp::setError("Preencha quantos convidados adultos no máximo o convidado poderá levar.");
		header('Location: /dashboard/rsvp/'.$idrsvp);
		exit;

	}//end if

	if( ($inmaxadults = Validate::validateMaxRsvp($_POST['inmaxadults'])) === false )
	{	
		

		Rsvp::setError("A quantidade deve estar entre 0 e 99");
		header('Location: /dashboard/rsvp/'.$idrsvp);
		exit;

	}//end if







	if(
		
		!isset($_POST['inmaxchildren']) 
		|| 
		$_POST['inmaxchildren'] === ''
		
	)
	{

		Rsvp::setError("Preencha quantas crianças no máximo o convidado poderá levar");
		header('Location: /dashboard/rsvp/'.$idrsvp);
		exit;

	}//end if

	if( ($inmaxchildren = Validate::validateMaxRsvp($_POST['inmaxchildren'])) === false )
	{	
		

		Rsvp::setError("A quantidade deve ser entre 0 e 99");
		header('Location: /dashboard/rsvp/'.$idrsvp);
		exit;

	}//end if




	

	$rsvp = new Rsvp();

	//$rsvp->getRsvp((int)$idrsvp());

	//$_POST['iduser'] = $user->getiduser();

    $rsvp->setData([

    	'idrsvp'=>$idrsvp,
    	'iduser'=>$user->getiduser(),
    	'desguest'=>$desguest,
    	'desemail'=>NULL,
    	'nrphone'=>NULL,
    	'inconfirmed'=>0,
    	'inmaxadults'=>$inmaxadults,
    	'inadultsconfirmed'=>NULL,
    	'inmaxchildren'=>$inmaxchildren,
    	'inchildrenconfirmed'=>NULL,
    	'desguestaccompanies'=>NULL,
    	'dtconfirmed'=>NULL

    ]);//end setData






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
			'success'=>Rsvp::getSuccess(),
			'error'=>Rsvp::getError()
			

		]
	
	);//end setTpl

});//END route





?>