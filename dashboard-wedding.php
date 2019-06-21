<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Photo;
use Core\Validate;
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

	$user = User::getFromSession();





	if(
		
		!isset($_POST['dtwedding']) 
		|| 
		$_POST['dtwedding'] === ''
		
	){

		Wedding::setError("Insira a data do casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if

	if( !$dtwedding = Validate::validateDate($_POST['dtwedding'], 1) )
	{

		Wedding::setError("Informe uma data válida");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if







	if(
		
		!isset($_POST['tmwedding']) 
		|| 
		$_POST['tmwedding'] === ''
		
	){

		Wedding::setError("Insira o horário do casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if

	if( !$tmwedding = Validate::validateTime($_POST['tmwedding']) )
	{	
		

		Wedding::setError("Informe uma hora válida");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if





	$idwedding = $_POST['idwedding'];
	$deslocation = Validate::validateString($_POST['deslocation'], true);
	$desdescription = Validate::validateString($_POST['desdescription'], true);



	
	


	

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

		'idwedding'=>$idwedding,
		'iduser'=>$user->getiduser(),
		'desdescription'=>$desdescription,
		'deslocation'=>$deslocation,
		'desphoto'=>$wedding->getdesphoto(),
		'desextension'=>$wedding->getdesextension(),
		'tmwedding'=>$tmwedding,
		'dtwedding'=>$dtwedding

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