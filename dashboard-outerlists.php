<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Model\User;
use Core\Model\OuterList;







$app->get( "/dashboard/listas-de-fora/adicionar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    /**$Event = new Event();
    
	$Event->get((int)$user->getiduser());

	$Event->setData(); */
	
	$page = new PageDashboard();

	$page->setTpl(
		
 
 
		"outerlists-create", 
			
		[
			'user'=>$user->getValues(),
			'success'=>OuterList::getSuccess(),
			'error'=>OuterList::getError()
			

		]
	
	);//end setTpl

});//END route





$app->post( "/dashboard/listas-de-fora/adicionar", function()
{
	
	User::verifyLogin(false);

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		OuterList::setError("Preencha a posição da Lista");
		header('Location: /dashboard/listas-de-fora/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desouterlist']) 
		|| 
		$_POST['desouterlist'] === ''
		
	)
	{

		OuterList::setError("Preencha o título da Lista");
		header('Location: /dashboard/listas-de-fora/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['nrddd']) 
		|| 
		$_POST['nrddd'] === ''
		
	)
	{

		OuterList::setError("Preencha o DDD da Lista");
		header('Location: /dashboard/listas-de-fora/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		OuterList::setError("Preencha a Descrição da Lista");
		header('Location: /dashboard/listas-de-fora/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		OuterList::setError("Preencha o telefone da Lista");
		header('Location: /dashboard/listas-de-fora/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['dessite']) 
		|| 
		$_POST['dessite'] === ''
		
	)
	{

		OuterList::setError("Preencha o Site da Lista");
		header('Location: /dashboard/listas-de-fora/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['deslocation']) 
		|| 
		$_POST['deslocation'] === ''
		
	)
	{

		OuterList::setError("Preencha o endereço da Lista");
		header('Location: /dashboard/listas-de-fora/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		OuterList::setError("Preencha o Status da Lista");
		header('Location: /dashboard/listas-de-fora/adicionar');
		exit;

	}//end if


	$user = User::getFromSession();

	$outerlist = new OuterList();

	//$outerlist->get((int)$user->getiduser());

	$_POST['iduser'] = $user->getiduser();
	$_POST['nrcountryarea'] = Rule::NR_COUNTRY_AREA;

	$outerlist->setData($_POST);

	# Core colocou $user->save(); Aula 120
	$outerlist->update();

	OuterList::setSuccess("Dados alterados");

	header('Location: /dashboard/listas-de-fora');
	exit;

});//END route









$app->get( "/dashboard/listas-de-fora/:idouterlist/deletar", function( $idouterlist ) 
{
	User::verifyLogin(false);

	$user = User::getFromSession();

	$outerlist = new OuterList();

	$outerlist->getOuterList((int)$idouterlist);

	$outerlist->delete();

	header('Location: /dashboard/listas-de-fora');
	exit;
	
});//END route





$app->get( "/dashboard/listas-de-fora/:idouterlist", function( $idouterlist )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $outerlist = new OuterList();
    
    $outerlist->getOuterList((int)$idouterlist);
   
	$page = new PageDashboard();

	$page->setTpl(
		
 
 
		"outerlists-update", 
		
		[
			'user'=>$user->getValues(),
			'outerlist'=>$outerlist->getValues(),
			'success'=>OuterList::getSuccess(),
			'error'=>OuterList::getError()
			

		]
	
	);//end setTpl

});//END route






$app->post( "/dashboard/listas-de-fora/:idouterlist", function( $idouterlist )
{

	User::verifyLogin(false);

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		OuterList::setError("Preencha a posição da Lista");
		header('Location: /dashboard/listas-de-fora/'.$idouterlist);
		exit;

	}//end if

	if(
		
		!isset($_POST['desouterlist']) 
		|| 
		$_POST['desouterlist'] === ''
		
	)
	{

		OuterList::setError("Preencha o nome da Lista");
		header('Location: /dashboard/listas-de-fora/'.$idouterlist);
		exit;

	}//end if

	

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		OuterList::setError("Preencha a descrição da Lista");
		header('Location: /dashboard/listas-de-fora/'.$idouterlist);
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		OuterList::setError("Preencha o Telefone da Lista");
		header('Location: /dashboard/listas-de-fora/'.$idouterlist);
		exit;

	}//end if

	if(
		
		!isset($_POST['dessite']) 
		|| 
		$_POST['dessite'] === ''
		
	)
	{

		OuterList::setError("Preencha site da Lista");
		header('Location: /dashboard/listas-de-fora/'.$idouterlist);
		exit;

	}//end if

	if(
		
		!isset($_POST['nrddd']) 
		|| 
		$_POST['nrddd'] === ''
		
	)
	{

		OuterList::setError("Preencha o DDD da Lista");
		header('Location: /dashboard/listas-de-fora/'.$idouterlist);
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		OuterList::setError("Preencha o Status do Stakeholdero.");
		header('Location: /dashboard/listas-de-fora/'.$idouterlist);
		exit;

	}//end if


	if(
		
		!isset($_POST['deslocation']) 
		|| 
		$_POST['deslocation'] === ''
		
	)
	{

		OuterList::setError("Preencha o Status do Stakeholdero.");
		header('Location: /dashboard/listas-de-fora/'.$idouterlist);
		exit;

	}//end if


	$user = User::getFromSession();

	$outerlist = new OuterList();

	$outerlist->getOuterList((int)$idouterlist);

	$_POST['iduser'] = $user->getiduser();

	$outerlist->setData($_POST);

	# Core colocou $user->save(); Aula 120
	$outerlist->update();

	OuterList::setSuccess("Dados alterados");

	header('Location: /dashboard/listas-de-fora');
	exit;

});//END route














$app->get( "/dashboard/listas-de-fora", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$outerlist = new OuterList();

	if( $search != '' )
	{

		$results = $outerlist->getSearch((int)$user->getiduser(),$search,$currentPage,Rule::ITENS_PER_PAGE);

	}//end if
	else
	{
		
		$results = $outerlist->getPage((int)$user->getiduser(),$currentPage,Rule::ITENS_PER_PAGE);

	}//end else


    	

	$numouterlists = $results['nrtotal'];

	$outerlist->setData($results['results']);

	$maxouterlists = $outerlist->maxOuterLists($user->getinplan());

	$pages = [];	
    
	for ( $x=0; $x < $results['pages']; $x++ )
	{ 
		# code...
		array_push(
			
			$pages, 
			
			[

				'href'=>'/dashboard/listas-de-fora?'.http_build_query(
					
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
		
 
 
		"outerlists", 
		
		[
			'user'=>$user->getValues(),
			'search'=>$search,
			'pages'=>$pages,
			'maxouterlists'=>$maxouterlists,
			'numouterlists'=>$numouterlists,
			'outerlist'=>$outerlist->getValues(),
			'success'=>OuterList::getSuccess(),
			'error'=>OuterList::getError()
			

		]
	
	);//end setTpl

});//END route





?>