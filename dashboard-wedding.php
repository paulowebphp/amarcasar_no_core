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











?>