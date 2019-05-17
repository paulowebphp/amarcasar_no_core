<?php

use Core\PageDomain;
use Core\Model\User;
use Core\Model\Rsvp;
use Core\Model\RsvpConfig;






$app->get( "/:desdomain/rsvp/confirmar/:hash", function( $desdomain, $hash )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);

	$rsvp = new Rsvp();

	$rsvp->getFromHash($hash);
	
	$rsvpconfig = new RsvpConfig();

	$rsvpconfig->get((int)$user->getiduser());

	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "rsvp-confirm",
		
		[

			'rsvpconfig'=>$rsvpconfig->getValues(),
			'rsvp'=>$rsvp->getValues(),
			'user'=>$user->getValues(),
			'rsvpError'=>Rsvp::getError()

		]
	
	);//end setTpl

});//END route






$app->post( "/:desdomain/rsvp", function( $desdomain )
{

	$user = new User();
 
	$user->getFromUrl($desdomain);

	if( 
		
		!isset($_POST['desguest']) 
		|| 
		$_POST['desguest'] == ''
	)
	{

		User::setErrorRegister("Preencha o seu nome.");
		header("Location: /".$user->getdesdomain()."/rsvp");
		exit;

	}//end if

	$dataRsvp = Rsvp::checkDesguestExists($user->getiduser(), $_POST['desguest']);

	if( $dataRsvp === false )
	{

		User::setErrorRegister("Não consta este nome na lista ! Por favor,verifique a ortografia e tente novamente");
		header("Location: /".$user->getdesdomain()."/rsvp");
		exit;

	}//end if
	else
	{
		$hash = base64_encode($dataRsvp['idrsvp']);

		header('Location: /'.$user->getdesdomain().'/rsvp/confirmar/'.$hash);
		exit;

	}//end else


	

});//END route







$app->get( "/:desdomain/rsvp", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);
	

	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "rsvp",
		
		[
		
			'user'=>$user->getValues(),
			'rsvpError'=>Rsvp::getError()

		]
	
	);//end setTpl

});//END route





?>