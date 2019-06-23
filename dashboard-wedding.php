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













	if(
		
		!isset($_POST['desaddress']) 
		|| 
		$_POST['desaddress'] === ''
		
	)
	{

		Wedding::setError("Preencha o endereço do casamento");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if

	if( !$desaddress = Validate::validateString($_POST['desaddress']) )
	{

		Wedding::setError("O endereço não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if







	if(
		
		!isset($_POST['desnumber']) 
		|| 
		$_POST['desnumber'] === ''
		
	)
	{

		Wedding::setError("Preencha o número");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if

	if( !$desnumber = Validate::validateNumber($_POST['desnumber']) )
	{

		Wedding::setError("O número não deve conter apenas caracteres especiais, nem pode ser vazio, tente novamente");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if














	if(
		
		!isset($_POST['descity']) 
		|| 
		$_POST['descity'] === ''
		
	)
	{

		Wedding::setError("Preencha a cidade");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if

	if( !$descity = Validate::validateString($_POST['descity']) )
	{

		Wedding::setError("A cidade não deve conter apenas caracteres especiais, nem pode ser vazio, tente novamente");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if












	if(
		
		!isset($_POST['desstate']) 
		|| 
		$_POST['desstate'] === ''
		
	)
	{

		Wedding::setError("Preencha o estado");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if

	if( !$desstate = Validate::validateString($_POST['desstate']) )
	{

		Wedding::setError("O estado não deve conter apenas caracteres especiais, nem pode ser vazio, tente novamente");
		header('Location: /dashboard/meu-casamento');
		exit;

	}//end if


















	$idwedding = $_POST['idwedding'];
	$desdescription = Validate::validateString($_POST['desdescription'], true);
	$desdistrict = Validate::validateString($_POST['desdistrict'], true);
	$descountry = Validate::validateString($_POST['descountry'], true);
	$descostume = Validate::validateString($_POST['descostume'], true);
	$desdirections = Validate::validateString($_POST['desdirections'], true);











	
	


	

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
		'dtwedding'=>$dtwedding,
		'tmwedding'=>$tmwedding,
		'desdescription'=>$desdescription,
		'descostume'=>$descostume,
		'desdirections'=>$desdirections,
		'desaddress'=>$desaddress,
		'desnumber'=>$desnumber,
		'desdistrict'=>$desdistrict,
		'descity'=>$descity,
		'desstate'=>$desstate,
		'descountry'=>$descountry,
		'desphoto'=>$wedding->getdesphoto(),
		'desextension'=>$wedding->getdesextension()

	]);//end setData

	



	$wedding->update();
	

	Wedding::setSuccess("Dados alterados");

	header('Location: /dashboard/meu-casamento');
	exit;



});//END route











?>