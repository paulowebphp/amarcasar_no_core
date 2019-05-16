<?php

use Core\PageDashboard;
use Core\Model\User;
use Core\Model\Rule;
use Core\Model\Stakeholder;






$app->post( "/dashboard/eventos/adicionar", function()
{
	
	User::verifyLogin(false);

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Stakeholder::setError("Preencha a posição do Fornecedor.");
		header('Location: /dashboard/fornecedores/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desstakeholder']) 
		|| 
		$_POST['desstakeholder'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o nome do Fornecedor.");
		header('Location: /dashboard/fornecedores/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['descategory']) 
		|| 
		$_POST['descategory'] === ''
		
	)
	{

		Stakeholder::setError("Preencha a categoria do Fornecedor.");
		header('Location: /dashboard/fornecedores/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		Stakeholder::setError("Preencha a Descrição do Fornecedor.");
		header('Location: /dashboard/fornecedores/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o telefone do Fornecedor.");
		header('Location: /dashboard/fornecedores/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['dessite']) 
		|| 
		$_POST['dessite'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o Site do Fornecedor.");
		header('Location: /dashboard/fornecedores/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o e-mail do Fornecedor.");
		header('Location: /dashboard/fornecedores/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o Status do Fornecedor.");
		header('Location: /dashboard/fornecedores/adicionar');
		exit;

	}//end if


	$user = User::getFromSession();

	$stakeholder = new Stakeholder();

	$stakeholder->get((int)$user->getiduser());

	$_POST['iduser'] = $user->getiduser();

	$stakeholder->setData($_POST);

	# Core colocou $user->save(); Aula 120
	$stakeholder->update();

	Stakeholder::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/fornecedores');
	exit;

});//END route






$app->get( "/dashboard/fornecedores/adicionar", function()
{
	
	User::verifyLogin(false);

	//	$user = User::getFromSession();

    /**$Event = new Event();
    
	$Event->get((int)$user->getiduser());

	$Event->setData(); */
	
	$page = new PageDashboard();

	$page->setTpl(
		
 
 
		"stakeholders-create", 
			
		[

			'stakeholderMsg'=>Stakeholder::getSuccess(),
			'stakeholderError'=>Stakeholder::getError()
			

		]
	
	);//end setTpl

});//END route



$app->get( "/dashboard/fornecedores/:idstakeholder/deletar", function( $idstakeholder ) 
{
	User::verifyLogin();

	$stakeholder = new Stakeholder();

	$stakeholder->getStakeholder((int)$idstakeholder);

	$stakeholder->delete();

	header('Location: /dashboard/fornecedores');
	exit;
	
});//END route





$app->get( "/dashboard/fornecedores/:idstakeholder", function( $idstakeholder )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $stakeholder = new Stakeholder();
    
    $stakeholder->getStakeholder((int)$idstakeholder);
   
	$page = new PageDashboard();

	$page->setTpl(
		
 
 
		"stakeholders-update", 
		
		[

			'stakeholder'=>$stakeholder->getValues(),
			'stakeholderMsg'=>Stakeholder::getSuccess(),
			'stakeholderError'=>Stakeholder::getError()
			

		]
	
	);//end setTpl

});//END route






$app->post( "/dashboard/fornecedores/:idstakeholder", function( $idstakeholder )
{

	User::verifyLogin(false);

	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Stakeholder::setError("Preencha a posição do Fornecedor.");
		header('Location: /dashboard/fornecedores/:idstakeholder');
		exit;

	}//end if

	if(
		
		!isset($_POST['desstakeholder']) 
		|| 
		$_POST['desstakeholder'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o nome do Fornecedor.");
		header('Location: /dashboard/fornecedores/:idstakeholder');
		exit;

	}//end if

	

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	)
	{

		Stakeholder::setError("Preencha a descrição do Fornecedor.");
		header('Location: /dashboard/fornecedores/:idstakeholder');
		exit;

	}//end if

	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o Telefone do Fornecedor.");
		header('Location: /dashboard/fornecedores/:idstakeholder');
		exit;

	}//end if

	if(
		
		!isset($_POST['dessite']) 
		|| 
		$_POST['dessite'] === ''
		
	)
	{

		Stakeholder::setError("Preencha site do Fornecedor.");
		header('Location: /dashboard/fornecedores/:idstakeholder');
		exit;

	}//end if

	if(
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o e-mail do Fornecedor.");
		header('Location: /dashboard/fornecedores/:idstakeholder');
		exit;

	}//end if

	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o Status do Stakeholdero.");
		header('Location: /dashboard/fornecedores/:idstakeholder');
		exit;

	}//end if


	$user = User::getFromSession();

	$stakeholder = new Stakeholder();

	$stakeholder->getStakeholder((int)$idstakeholder);

	$_POST['iduser'] = $user->getiduser();

	$stakeholder->setData($_POST);

	# Core colocou $user->save(); Aula 120
	$stakeholder->update();

	Stakeholder::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/fornecedores');
	exit;

});//END route














$app->get( "/dashboard/fornecedores", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$stakeholder = new Stakeholder();

	if( $search != '' )
	{

		$results = $stakeholder->getSearch((int)$user->getiduser(),$search,$currentPage,Rule::ITENS_PER_PAGE);

	}//end if
	else
	{
		
		$results = $stakeholder->getPage((int)$user->getiduser(),$currentPage,Rule::ITENS_PER_PAGE);

	}//end else
    	

	$numStakeholders = $results['numstakeholders'];

	$stakeholder->setData($results['results']);

	$maxStakeholders = $stakeholder->maxStakeholders($user->getinplan());

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


	

	$page = new PageDashboard();

	$page->setTpl(
		
 
 
		"stakeholders", 
		
		[
			'search'=>$search,
			'pages'=>$pages,
			'maxStakeholders'=>$maxStakeholders,
			'numStakeholders'=>$numStakeholders,
			'stakeholder'=>$stakeholder->getValues(),
			'stakeholderMsg'=>Stakeholder::getSuccess(),
			'stakeholderError'=>Stakeholder::getError()
			

		]
	
	);//end setTpl

});//END route





?>