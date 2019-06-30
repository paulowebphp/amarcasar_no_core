<?php

use Core\PageDomain;
use Core\Mailer;
use Core\Validate;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\Rsvp;
use Core\Model\RsvpConfig;
use Core\Model\CustomStyle;









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



	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());





	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "rsvp-confirmed",
		
		[
			'customstyle'=>$customstyle->getValues(),
			'hash'=>$hash,
			'consort'=>$consort->getValues(),
			'rsvpconfig'=>$rsvpconfig->getValues(),
			'rsvp'=>$rsvp->getValues(),
			'user'=>$user->getValues(),
			'error'=>Rsvp::getError()

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

		Rsvp::setError("Preencha o seu telefone (com DDD)");
		header("Location: /".$user->getdesdomain()."/rsvp/confirmacao/".$hash);
		exit;

	}//end if

	if( !$nrphone = Validate::validateLongPhone($_POST['nrphone']) )
	{

		Rsvp::setError("Informe um telefone ou celular válido");
		header("Location: /".$user->getdesdomain()."/rsvp/confirmacao/".$hash);
		exit;

	}//end if







	if( 
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] == ''
	)
	{

		Rsvp::setError("Preencha o seu e-mail.");
		header("Location: /".$user->getdesdomain()."/rsvp/confirmacao/".$hash);
		exit;

	}//end if

	if( ($desemail = Validate::validateEmail($_POST['desemail'])) === false )
	{	
		
		User::setError("O e-mail parece estar num formato inválido, tente novamente");
		header("Location: /".$user->getdesdomain()."/rsvp/confirmacao/".$hash);
		exit;

	}//end if






	if( 
		
		!isset($_POST['inadultsconfirmed']) 
		|| 
		$_POST['inadultsconfirmed'] == ''
	)
	{

		Rsvp::setError("Confirme o número de acompanhantes adultos");
		header("Location: /".$user->getdesdomain()."/rsvp/confirmacao/".$hash);
		exit;

	}//end if

	if( ($inadultsconfirmed = Validate::validateMaxRsvp($_POST['inadultsconfirmed'])) === false )
	{	
		

		RsvpConfig::setError("A quantidade deve estar entre 0 e 99");
		header("Location: /".$user->getdesdomain()."/rsvp/confirmacao/".$hash);
		exit;

	}//end if







	if( 
		
		!isset($_POST['inchildrenconfirmed']) 
		|| 
		$_POST['inchildrenconfirmed'] == ''
	)
	{

		Rsvp::setError("Confirme o número de acompanhantes adultos");
		header("Location: /".$user->getdesdomain()."/rsvp/confirmacao/".$hash);
		exit;

	}//end if

	if( ($inchildrenconfirmed = Validate::validateMaxRsvp($_POST['inchildrenconfirmed'])) === false )
	{	
		

		RsvpConfig::setError("A quantidade deve estar entre 0 e 99");
		header("Location: /".$user->getdesdomain()."/rsvp/confirmacao/".$hash);
		exit;

	}//end if




	if( 


		(int)$_POST['inadultsconfirmed'] != 0
		||
		(int)$_POST['inchildrenconfirmed'] != 0
		
	)
	{


		if( 
		
			!isset($_POST['desguestaccompanies']) 
			|| 
			$_POST['desguestaccompanies'] == ''
		)
		{

			Rsvp::setError("Preencha o nome dos acompanhantes");
			header("Location: /".$user->getdesdomain()."/rsvp/confirmacao/".$hash);
			exit;

		}//end if

		$desguestaccompanies = Validate::validateString($_POST['desguestaccompanies']);

	}//end if
	else
	{

		$desguestaccompanies = Validate::validateString($_POST['desguestaccompanies'], true);

	}//end else




	$timezone = new \DateTimeZone('America/Sao_Paulo');

	$dtconfirmed = new \DateTime("now");

	$dtconfirmed->setTimezone($timezone);




	$rsvp = new Rsvp();

	$rsvp->getFromHash($hash);

	$rsvp->setData([

		'idrsvp'=>$rsvp->getidrsvp(),
		'iduser'=>$user->getiduser(),
		'desguest'=>$rsvp->getdesguest(),
		'desemail'=>$desemail,
		'nrphone'=>$nrphone,
		'inconfirmed'=>1,
		'inmaxadults'=>$rsvp->getinmaxadults(),
		'inadultsconfirmed'=>$inadultsconfirmed,
		'inmaxchildren'=>$rsvp->getinmaxchildren(),
		'inchildrenconfirmed'=>$inchildrenconfirmed,
		'desguestaccompanies'=>$desguestaccompanies,
		'dtconfirmed'=>$dtconfirmed->format('Y-m-d')

	]);

	

	$rsvp->update();

	

	if($rsvp->getidrsvp() > 0 )
	{
		

		$consort = new Consort();

		$consort->get((int)$user->getiduser());


		$guestMailer = new Mailer(
					
			$rsvp->getdesemail(), 
			$rsvp->getdesguest(), 
			"Amar Casar - Presença Confirmada",
			# template do e-mail em si na /views/email/ e não da administração
			"rsvp-guest", 
			
			array(

				'consort'=>$consort->getValues(),
				"user"=>$user->getValues(),
				"rsvp"=>$rsvp->getValues()

			)//end array
		
		);//end Mailer
		
		



		$userMailer = new Mailer(
					
			$user->getdeslogin(), 
			$user->getdesperson(), 
			"Amar Casar - Presença Confirmada",
			# template do e-mail em si na /views/email/ e não da administração
			"rsvp-user", 
			
			array(

				'consort'=>$consort->getValues(),
				"user"=>$user->getValues(),
				"rsvp"=>$rsvp->getValues()

			)//end array
		
		);//end Mailer



		$guestMailer->send();
		
		$userMailer->send();

		header('Location: /'.$user->getdesdomain().'/rsvp/confirmacao/'.$hash.'/presenca-confirmada');
		exit;



	}//end if

	



	

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



	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());



	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "rsvp-confirmation",
		
		[
			'customstyle'=>$customstyle->getValues(),
			'hash'=>$hash,
			'consort'=>$consort->getValues(),
			'rsvpconfig'=>$rsvpconfig->getValues(),
			'rsvp'=>$rsvp->getValues(),
			'user'=>$user->getValues(),
			'error'=>Rsvp::getError()

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

		Rsvp::setError("Preencha o seu nome.");
		header("Location: /".$user->getdesdomain()."/rsvp");
		exit;

	}//end if





	$dataRsvp = Rsvp::checkDesguestExists($user->getiduser(), $_POST['desguest']);




	if( $dataRsvp === false )
	{

		Rsvp::setError("Não consta este nome na lista ! Por favor, verifique a ortografia e tente novamente");
		header("Location: /".$user->getdesdomain()."/rsvp");
		exit;

	}//end if
	else
	{

		if ( (int)$dataRsvp['inconfirmed'] == 0) {
			# code...
			$hash = base64_encode($dataRsvp['idrsvp']);

			header('Location: /'.$user->getdesdomain().'/rsvp/confirmacao/'.$hash);
			exit;

		}//end if
		else
		{

			
			$dtconfirmed = new \DateTime($dataRsvp['dtconfirmed']);

			Rsvp::setError("Você já realizou sua confirmação de presença em ".$dtconfirmed->format('d/m/Y')." | Entre em contato com o casal, pois somente o mesmo pode corrigir uma confirmação já realizada");
			header("Location: /".$user->getdesdomain()."/rsvp");
			exit;


		}//end else



		

	}//end else


	

});//END route







$app->get( "/:desdomain/rsvp", function( $desdomain )
{


    $user = new User();
 
	$user->getFromUrl($desdomain);



	$consort = new Consort();

	$consort->get((int)$user->getiduser());



	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());


	

	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "rsvp",
		
		[

			'customstyle'=>$customstyle->getValues(),
			'consort'=>$consort->getValues(),
			'user'=>$user->getValues(),
			'error'=>Rsvp::getError()

		]
	
	);//end setTpl

});//END route





?>