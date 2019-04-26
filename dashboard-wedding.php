<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Wedding;
use Hcode\Model\Story;
use Hcode\Model\CustomStyle;


$app->get( "/dashboard/meu-casamento", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$wedding = new Wedding();

	$wedding->get((int)$user->getiduser());
		
	$page = new Page();

	$page->setTpl(
		
		"dashboard-wedding", 
		
		[

			'wedding'=>$wedding->getValues(),
			'weddingMsg'=>Wedding::getSuccess(),
			'weddingError'=>Wedding::getError()
			

		]
	
	);//end setTpl

});//END route





$app->post( "/dashboard/meu-casamento", function()
{

	User::verifyLogin(false);

	if(
		
		!isset($_POST['desconsortname']) 
		|| 
		$_POST['desconsortname'] === ''
		
	)
	{

		User::setError("Preencha o Nome do Cônjuge.");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if


	if(
		
		!isset($_POST['dtwedding']) 
		|| 
		$_POST['dtwedding'] === ''
		
	){

		User::setError("Insira a Data do Casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if


	if(
		
		!isset($_POST['desweddinglocation']) 
		|| 
		$_POST['desweddinglocation'] === ''
		
	){

		User::setError("Preencha o Local do Casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if



	if(
		
		!isset($_POST['desweddingdescription']) 
		|| 
		$_POST['desweddingdescription'] === ''
		
	){

		User::setError("Preencha a Descrição do Casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if



	if(
		
		!isset($_POST['dtparty']) 
		|| 
		$_POST['dtparty'] === ''
		
	){

		User::setError("Preencha a Data da Festa");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if



	if(
		
		!isset($_POST['despartylocation']) 
		|| 
		$_POST['despartylocation'] === ''
		
	){

		User::setError("Preencha o Local da Festa");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if



	if(
		
		!isset($_POST['despartydescription']) 
		|| 
		$_POST['despartydescription'] === ''
		
	){

		User::setError("Preencha a Descrição da Festa");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if

	$user = User::getFromSession();

	$wedding = new Wedding();

	$_POST['iduser'] = $user->getiduser();

	
	$wedding->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$wedding->update();

	Wedding::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/meu-casamento');
	exit;

});//END route




$app->get( "/dashboard/historia-casal", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$story = new Story();

	$story->get((int)$user->getiduser());
		
	$page = new Page();

	$page->setTpl(
		
		"dashboard-stories", 
		
		[

			'story'=>$story->getValues(),
			'storyMsg'=>Story::getSuccess(),
			'storyError'=>Story::getError()
			

		]
	
	);//end setTpl

});//END route





$app->post( "/dashboard/historia-casal", function()
{

	User::verifyLogin(false);

	
	if(
		
		!isset($_POST) 
		
	){

		User::setError("Preencha os campos desejados");
		header('Location: /dashboard/historia-casal');
		exit;

	}//end if

	$user = User::getFromSession();

	$story = new Story();

	$_POST['iduser'] = $user->getiduser();

	$story->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$story->update();

	Story::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/historia-casal');
	exit;

});//END route





$app->get( "/dashboard/personalizar-site", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$customStyle = new CustomStyle();

	$customStyle->get((int)$user->getiduser());
		
	$page = new Page();

	$page->setTpl(
		
		"dashboard-customstyle", 
		
		[

			'customStyle'=>$customStyle->getValues(),
			'customStyleMsg'=>CustomStyle::getSuccess(),
			'customStyleError'=>CustomStyle::getError()
			

		]
	
	);//end setTpl

});//END route





$app->post( "/dashboard/personalizar-site", function()
{

	User::verifyLogin(false);

	
	if(
		
		!isset($_POST) 
		
	){

		User::setError("Preencha os campos desejados");
		header('Location: /dashboard/personalizar-site');
		exit;

	}//end if

	$user = User::getFromSession();

	$customStyle = new CustomStyle();

	$_POST['iduser'] = $user->getiduser();

	

	$customStyle->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$customStyle->update();

	CustomStyle::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/personalizar-site');
	exit;

});//END route






?>