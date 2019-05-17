<?php

use Core\PageDomain;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\Rsvp;
use Core\Model\RsvpConfig;









$app->get( "/:desdomain/rsvp/confirmacao/:hash/presenca-confirmada", function( $desdomain, $hash )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);

	$rsvp = new Rsvp();

	$rsvp->getFromHash($hash);
	
	$rsvpconfig = new RsvpConfig();

	$rsvpconfig->get((int)$user->getiduser());

	$consort = new Consort();

	$consort->get((int)$user->getiduser());

	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "rsvp-confirmed",
		
		[
			'hash'=>$hash,
			'consort'=>$consort->getValues(),
			'rsvpconfig'=>$rsvpconfig->getValues(),
			'rsvp'=>$rsvp->getValues(),
			'user'=>$user->getValues(),
			'rsvpError'=>Rsvp::getError()

		]
	
	);//end setTpl

});//END route









$app->post( "/:desdomain/rsvp/confirmacao/:hash", function( $desdomain, $hash )
{

	$user = new User();
 
	$user->getFromUrl($desdomain);

	if( 
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] == ''
	)
	{

		User::setErrorRegister("Preencha o seu telefone (com DDD)");
		header("Location: /".$user->getdesdomain()."/rsvp/".$hash);
		exit;

	}//end if

	if( 
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] == ''
	)
	{

		User::setErrorRegister("Preencha o seu e-mail.");
		header("Location: /".$user->getdesdomain()."/rsvp/".$hash);
		exit;

	}//end if

	if( 
		
		!isset($_POST['inadultsconfirmed']) 
		|| 
		$_POST['inadultsconfirmed'] == ''
	)
	{

		User::setErrorRegister("Confirme o número de acompanhantes adultos");
		header("Location: /".$user->getdesdomain()."/rsvp/".$hash);
		exit;

	}//end if

	if( 
		
		!isset($_POST['inchildrenconfirmed']) 
		|| 
		$_POST['inchildrenconfirmed'] == ''
	)
	{

		User::setErrorRegister("Confirme o número de acompanhantes adultos");
		header("Location: /".$user->getdesdomain()."/rsvp/".$hash);
		exit;

	}//end if


	if( 
		
		!isset($_POST['desguestaccompanies']) 
		|| 
		$_POST['desguestaccompanies'] == ''
	)
	{

		User::setErrorRegister("Preencha o nome completo dos acompanhantes");
		header("Location: /".$user->getdesdomain()."/rsvp/".$hash);
		exit;

	}//end if



	$rsvp = new Rsvp();

	$rsvp->getFromHash($hash);

	$rsvp->setData([

		'idrsvp'=>$rsvp->getidrsvp(),
		'iduser'=>$user->getiduser(),
		'desguest'=>$rsvp->getdesguest(),
		'desemail'=>$_POST['desemail'],
		'nrphone'=>$_POST['nrphone'],
		'inconfirmed'=>1,
		'inmaxadults'=>$rsvp->getinmaxadults(),
		'inadultsconfirmed'=>$_POST['inadultsconfirmed'],
		'inmaxchildren'=>$rsvp->getinmaxchildren(),
		'inchildrenconfirmed'=>$_POST['inchildrenconfirmed'],
		'desguestaccompanies'=>$_POST['desguestaccompanies'],
		'dtconfirmed'=>date('Y-m-d')

	]);

	$rsvp->update();

	

	header('Location: /'.$user->getdesdomain().'/rsvp/confirmacao/'.$hash.'/presenca-confirmada');
	exit;



	

});//END route













$app->get( "/:desdomain/rsvp/confirmacao/:hash", function( $desdomain, $hash )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);

	$rsvp = new Rsvp();

	$rsvp->getFromHash($hash);
	
	$rsvpconfig = new RsvpConfig();

	$rsvpconfig->get((int)$user->getiduser());

	$consort = new Consort();

	$consort->get((int)$user->getiduser());

	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "rsvp-confirmation",
		
		[
			'hash'=>$hash,
			'consort'=>$consort->getValues(),
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

		header('Location: /'.$user->getdesdomain().'/rsvp/confirmacao/'.$hash);
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