<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Photo;
use Core\Model\User;
use Core\Model\Party;






$app->get( "/dashboard/festa-de-casamento", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$party = new Party();

	$party->get((int)$user->getiduser());

		
	$page = new PageDashboard();

	$page->setTpl(
		


		"parties", 
		
		[
			'user'=>$user->getValues(),
			'party'=>$party->getValues(),
			'success'=>Party::getSuccess(),
			'error'=>Party::getError()
			

		]
	
	);//end setTpl

});//END route








$app->post( "/dashboard/festa-de-casamento", function()
{


	User::verifyLogin(false);

	if(
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	){

		Party::setError("Insira uma descrição");
		header('Location: /dashboard/festa-de-casamento');
		exit;

	}//end if

	if(
		
		!isset($_POST['deslocation']) 
		|| 
		$_POST['deslocation'] === ''
		
	){

		Party::setError("Insira o local");
		header('Location: /dashboard/festa-de-casamento');
		exit;

	}//end if

	if(
		
		!isset($_POST['dtparty']) 
		|| 
		$_POST['dtparty'] === ''
		
	){

		Party::setError("Insira a data");
		header('Location: /dashboard/festa-de-casamento');
		exit;

	}//end if

	if(
		
		!isset($_POST['inpartystatus']) 
		|| 
		$_POST['inpartystatus'] === ''
		
	){

		Party::setError("Defina um status");
		header('Location: /dashboard/festa-de-casamento');
		exit;

	}//end if

	

	$user = User::getFromSession();

	$party = new Party();

	$party->get((int)$user->getiduser());

	
	




	if( $_FILES["file"]["name"] !== "" )
	{

		$photo = new Photo();

		if( $party->getdesphoto() != Rule::DEFAULT_PHOTO )
		{

			$photo->deletePhoto($party->getdesphoto(), Rule::CODE_PARTIES);

		}//end if

		$basename = $photo->setPhoto(
			
			$_FILES["file"], 
			$user->getiduser(),
			Rule::CODE_PARTIES,
			$party->getidparty(),
			0
			
		);//end setPhoto


		if( $basename['basename'] === false )
		{
			Party::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
			header('Location: /dashboard/festa-de-casamento');
			exit;

		}//end if
		else
		{
			
	
			$party->setdesphoto($basename['basename']);
			$party->setdesextension($basename['extension']);


		}//end else

	}//end if

	$party->setData([


		'idparty'=>$_POST['idparty'],
		'iduser'=>$user->getiduser(),
		'inpartystatus'=>$_POST['inpartystatus'],
		'desdescription'=>$_POST['desdescription'],
		'deslocation'=>$_POST['deslocation'],
		'desphoto'=>$party->getdesphoto(),
		'desextension'=>$party->getdesextension(),
		'dtparty'=>$_POST['dtparty']

	]);//end setData

	//$_POST['iduser'] = $user->getiduser();

	//$party->setData($_POST);

	//$party->update();

	$party->update();
	

	Party::setSuccess("Dados alterados");

	header('Location: /dashboard/festa-de-casamento');
	exit;



});//END route











?>