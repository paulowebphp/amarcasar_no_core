<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Photo;
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
			'user'=>$user->getValues(),
			'wedding'=>$wedding->getValues(),
			'success'=>Wedding::getSuccess(),
			'error'=>Wedding::getError()
			

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
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] === ''
		
	){

		Wedding::setError("Preencha a Descrição do Casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if

	if(
		
		!isset($_POST['deslocation']) 
		|| 
		$_POST['deslocation'] === ''
		
	){

		Wedding::setError("Preencha o Local do Casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if





	$user = User::getFromSession();

	$wedding = new Wedding();

	$wedding->get((int)$user->getiduser());

	


	if( $_FILES["file"]["name"] !== "" )
	{

		$photo = new Photo();

		if( $wedding->getdesphoto() != Rule::DEFAULT_PHOTO )
		{

			$photo->deletePhoto($wedding->getdesphoto(), Rule::CODE_WEDDINGS);

		}//end if

		$basename = $photo->setPhoto(
			
			$_FILES["file"], 
			$user->getiduser(),
			Rule::CODE_WEDDINGS,
			$wedding->getidwedding(),
			0
			
		);//end setPhoto


		if( $basename['basename'] === false )
		{
			Wedding::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
			header('Location: /dashboard/meu-casamento');
			exit;

		}//end if
		else
		{
			
	
			$wedding->setdesphoto($basename['basename']);
			$wedding->setdesextension($basename['extension']);


		}//end else

	}//end if

	$wedding->setData([


		'idwedding'=>$_POST['idwedding'],
		'iduser'=>$user->getiduser(),
		'desdescription'=>$_POST['desdescription'],
		'deslocation'=>$_POST['deslocation'],
		'desphoto'=>$wedding->getdesphoto(),
		'desextension'=>$wedding->getdesextension(),
		'dtwedding'=>$_POST['dtwedding']

	]);//end setData

	//$_POST['iduser'] = $user->getiduser();

	//$wedding->setData($_POST);

	//$wedding->update();

	$wedding->update();
	

	Wedding::setSuccess("Dados alterados");

	header('Location: /dashboard/meu-casamento');
	exit;



});//END route











?>