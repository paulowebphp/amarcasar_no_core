<?php

use Core\PageDomain;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\Message;














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







$app->get( "/:desdomain/mural-mensagens", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);

	$message = new Message();

	$results = $message->get((int)$user->getiduser());

	$numMessages = $results['nrtotal'];
	
	if ( $results['nrtotal'] === 0 )
	{

		$results = [

			[

				'desdescription'=>'',
				'desmessage'=>'',
				'dtregister'=>''

			]
		];

	}//end if


	
	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "message",
		
		[
			'numMessages'=>$numMessages,
			'user'=>$user->getValues(),
			'message'=>$results,
			'messageError'=>Message::getError()

		]
	
	);//end setTpl

});//END route





?>