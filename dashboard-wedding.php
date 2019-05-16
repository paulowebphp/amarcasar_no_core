<?php

use Core\PageDashboard;
use Core\Model\User;
use Core\Model\Wedding;
use Core\Model\CustomStyle;


$app->get( "/dashboard/meu-casamento", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$wedding = new Wedding();

	$wedding->get((int)$user->getiduser());
		
	$page = new PageDashboard();

	$page->setTpl(
		


		"wedding", 
		
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
		
		!isset($_POST['dtwedding']) 
		|| 
		$_POST['dtwedding'] === ''
		
	){

		Wedding::setError("Insira a Data do Casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if

	if(
		
		!isset($_POST['desweddingdescription']) 
		|| 
		$_POST['desweddingdescription'] === ''
		
	){

		Wedding::setError("Preencha a Descrição do Casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if

	if(
		
		!isset($_POST['desweddinglocation']) 
		|| 
		$_POST['desweddinglocation'] === ''
		
	){

		Wedding::setError("Preencha o Local do Casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if


	$user = User::getFromSession();

	$wedding = new Wedding();

	$_POST['iduser'] = $user->getiduser();

	$wedding->setData($_POST);

	$wedding->update();

	Wedding::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/meu-casamento');
	exit;

});//END route










$app->get( "/dashboard/personalizar-site", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$customStyle = new CustomStyle();

	$customStyle->get((int)$user->getiduser());
		
	$page = new PageDashboard();

	$page->setTpl(
		


		"customstyle", 
		
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

		CustomStyle::setError("Preencha os campos desejados");
		header('Location: /dashboard/personalizar-site');
		exit;

	}//end if

	$user = User::getFromSession();

	$customStyle = new CustomStyle();

	$_POST['iduser'] = $user->getiduser();

	$customStyle->setData($_POST);

	# Core colocou $user->save(); Aula 120
	$customStyle->update();

	CustomStyle::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/personalizar-site');
	exit;

});//END route








?>