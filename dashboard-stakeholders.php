<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Validate;
use Core\Model\User;
use Core\Model\Stakeholder;







$app->get( "/dashboard/fornecedores/adicionar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    /**$Event = new Event();
    
	$Event->get((int)$user->getiduser());

	$Event->setData(); */
	
	$page = new PageDashboard();

	$page->setTpl(
		
 
 
		"stakeholders-create", 
			
		[
			'user'=>$user->getValues(),
			'success'=>Stakeholder::getSuccess(),
			'error'=>Stakeholder::getError()
			

		]
	
	);//end setTpl

});//END route





$app->post( "/dashboard/fornecedores/adicionar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();









	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o status do fornecedor");
		header('Location: /dashboard/fornecedores/adicionar');
		exit;

	}//end if



	if( ($instatus = Validate::validateStatus($_POST['instatus'])) === false )
	{	
		
		Stakeholder::setError("O status deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/fornecedores/adicionar');;
		exit;

	}//end if











	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Stakeholder::setError("Preencha a posição do fornecedor");
		header('Location: /dashboard/fornecedores/adicionar');
		exit;

	}//end if

	if( ($inposition = Validate::validatePosition($_POST['inposition'])) === false )
	{	
		

		Stakeholder::setError("A posição deve estar entre 0 e 99");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);;
		exit;

	}//end if












	if(
		
		!isset($_POST['desstakeholder']) 
		|| 
		$_POST['desstakeholder'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o nome do fornecedor");
		header('Location: /dashboard/fornecedores/adicionar');
		exit;

	}//end if

	if( !$desstakeholder = Validate::validateString($_POST['desstakeholder']) )
	{	
		

		Stakeholder::setError("O nome não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/fornecedores/adicionar');;
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

	if( !$descategory = Validate::validateString($_POST['descategory']) )
	{	
		

		Stakeholder::setError("A categoria não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/fornecedores/adicionar');;
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

	if( !$nrphone = Validate::validateLongPhone($_POST['nrphone']) )
	{	
		
		Stakeholder::setError("O telefone não pode ser formada apenas com caracteres especiais e deve ter de 8 a 13 caracteres, tente novamente");
		header('Location: /dashboard/fornecedores/adicionar');;
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

	if( !$dessite = Validate::validateURL($_POST['dessite']) )
	{	
		
		Stakeholder::setError("A URL não parece estar num formato válido, tente novamente");
		header('Location: /dashboard/fornecedores/adicionar');;
		exit;

	}//end if





	if( ($desemail = Validate::validateEmail($_POST['desemail'], true)) === false )
	{	
		
		Stakeholder::setError("O e-mail parece estar num formato inválido, tente novamente");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);;
		exit;

	}//end if







	$desdescription = Validate::validateString($_POST['desdescription'], true);
	$deslocation = Validate::validateString($_POST['deslocation'], true);



	

	

	$stakeholder = new Stakeholder();

	//$stakeholder->get((int)$user->getiduser());

	//$_POST['iduser'] = $user->getiduser();

	$stakeholder->setData([

		'iduser'=>$user->getiduser(),
		'instatus'=>$instatus,
		'inposition'=>$inposition,
		'desstakeholder'=>$desstakeholder,
		'desdescription'=>$desdescription,
		'descategory'=>$descategory,
		'deslocation'=>$deslocation,
		'desemail'=>$desemail,
		'dessite'=>$dessite,
		'nrphone'=>$nrphone

	]);//setData


		

	$stakeholder->update();

	Stakeholder::setSuccess("Dados alterados");

	header('Location: /dashboard/fornecedores');
	exit;

});//END route










$app->get( "/dashboard/fornecedores/:idstakeholder/deletar", function( $idstakeholder ) 
{
	User::verifyLogin(false);

	$user = User::getFromSession();

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
			'user'=>$user->getValues(),
			'stakeholder'=>$stakeholder->getValues(),
			'success'=>Stakeholder::getSuccess(),
			'error'=>Stakeholder::getError()
			

		]
	
	);//end setTpl

});//END route













$app->post( "/dashboard/fornecedores/:idstakeholder", function( $idstakeholder )
{

	User::verifyLogin(false);

	$user = User::getFromSession();




	if(
		
		!isset($_POST['instatus']) 
		|| 
		$_POST['instatus'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o status do fornecedor");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);
		exit;

	}//end if



	if( ($instatus = Validate::validateStatus($_POST['instatus'])) === false )
	{	
		
		Stakeholder::setError("O status deve conter apenas 0 ou 1 e não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);
		exit;

	}//end if











	if(
		
		!isset($_POST['inposition']) 
		|| 
		$_POST['inposition'] === ''
		
	)
	{

		Stakeholder::setError("Preencha a posição do fornecedor");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);
		exit;

	}//end if



	if( ($inposition = Validate::validatePosition($_POST['inposition'])) === false )
	{	
		

		Stakeholder::setError("A posição deve estar entre 0 e 99");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);;
		exit;

	}//end if












	if(
		
		!isset($_POST['desstakeholder']) 
		|| 
		$_POST['desstakeholder'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o nome do fornecedor");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);
		exit;

	}//end if

	if( !$desstakeholder = Validate::validateString($_POST['desstakeholder']) )
	{	
		

		Stakeholder::setError("O nome não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);;
		exit;

	}//end if	








	if(
		
		!isset($_POST['descategory']) 
		|| 
		$_POST['descategory'] === ''
		
	)
	{

		Stakeholder::setError("Preencha a categoria do Fornecedor.");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);
		exit;

	}//end if

	if( !$descategory = Validate::validateString($_POST['descategory']) )
	{	
		

		Stakeholder::setError("A categoria não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);;
		exit;

	}//end if
























	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o telefone do Fornecedor.");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);
		exit;

	}//end if

	if( !$nrphone = Validate::validateLongPhone($_POST['nrphone']) )
	{	
		
		Stakeholder::setError("O telefone não pode ser formada apenas com caracteres especiais e deve ter de 8 a 13 caracteres, tente novamente");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);;
		exit;

	}//end if








	if(
		
		!isset($_POST['dessite']) 
		|| 
		$_POST['dessite'] === ''
		
	)
	{

		Stakeholder::setError("Preencha o Site do Fornecedor.");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);
		exit;

	}//end if

	if( !$dessite = Validate::validateURL($_POST['dessite']) )
	{	
		
		Stakeholder::setError("A URL não parece estar num formato válido, tente novamente");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);;
		exit;

	}//end if






	if( ($desemail = Validate::validateEmail($_POST['desemail'], true)) === false )
	{	
		
		Stakeholder::setError("O e-mail parece estar num formato inválido, tente novamente");
		header('Location: /dashboard/fornecedores/'.$idstakeholder);;
		exit;

	}//end if







	$desdescription = Validate::validateString($_POST['desdescription'], true);
	$deslocation = Validate::validateString($_POST['deslocation'], true);
	







	

	$stakeholder = new Stakeholder();

	$stakeholder->getStakeholder((int)$idstakeholder);

	//$_POST['iduser'] = $user->getiduser();

	$stakeholder->setData([

		'idstakeholder'=>$stakeholder->getidstakeholder(),
		'iduser'=>$user->getiduser(),
		'instatus'=>$instatus,
		'inposition'=>$inposition,
		'desstakeholder'=>$desstakeholder,
		'desdescription'=>$desdescription,
		'descategory'=>$descategory,
		'deslocation'=>$deslocation,
		'desemail'=>$desemail,
		'dessite'=>$dessite,
		'nrphone'=>$nrphone

	]);//setData

	$stakeholder->update();

	Stakeholder::setSuccess("Dados alterados");

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
			'user'=>$user->getValues(),
			'search'=>$search,
			'pages'=>$pages,
			'maxStakeholders'=>$maxStakeholders,
			'numStakeholders'=>$numStakeholders,
			'stakeholder'=>$stakeholder->getValues(),
			'success'=>Stakeholder::getSuccess(),
			'error'=>Stakeholder::getError()
			

		]
	
	);//end setTpl

});//END route





?>