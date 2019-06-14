<?php

use Core\PageDashboard;
use Core\Model\User;
use Core\Model\Wedding;
use Core\Model\CustomStyle;







$app->get( "/dashboard/meu-template", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$customStyle = new CustomStyle();

	$customStyle->get((int)$user->getiduser());
		
	$page = new PageDashboard();

	$page->setTpl(
		


		"template", 
		
		[
			'user'=>$user->getValues(),
			'customstyle'=>$customStyle->getValues(),
			'success'=>CustomStyle::getSuccess(),
			'error'=>CustomStyle::getError()
			

		]
	
	);//end setTpl

});//END route





$app->post( "/dashboard/meu-template", function()
{

	User::verifyLogin(false);

	$user = User::getFromSession();
	

	if( 
		
		!isset($_POST['idtemplate']) 
		|| 
		$_POST['idtemplate'] === ''
	)
	{

		User::setError("Escolha o template");
		header('Location: /dashboard/meu-template');
		exit;
		
	}//end if

	//$customstyle = new CustomStyle();

	//$customstyle->setData($_POST);

	# Core colocou $user->save(); Aula 120
	Customstyle::updateTemplate( $user->getiduser(), $_POST['idcustomstyle'], $_POST['idtemplate'] );

	CustomStyle::setSuccess("Dados alterados");

	header('Location: /dashboard/meu-template');
	exit;


});//END route








?>