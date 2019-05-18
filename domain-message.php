<?php

use Core\PageDomain;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\Message;









$app->get( "/:desdomain/mural-mensagens/:hash/mensagem-enviada", function( $desdomain, $hash )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);

	$message = new Message();

	$message->getFromHash($hash);

	$consort = new Consort();

	$consort->get((int)$user->getiduser());

	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "message-sent",
		
		[
			'consort'=>$consort->getValues(),
			'user'=>$user->getValues(),
			'message'=>$message->getValues(),
			'messageError'=>Message::getError()

		]
	
	);//end setTpl

});//END route












$app->post( "/:desdomain/mural-mensagens/enviar", function( $desdomain )
{

	$user = new User();
 
	$user->getFromUrl($desdomain);

	if( 
		
		!isset($_POST['desmessage']) 
		|| 
		$_POST['desmessage'] == ''
	)
	{

		User::setErrorRegister("Preencha o seu nome.");
		header("Location: /".$user->getdesdomain()."/mural-mensagens/enviar");
		exit;

	}//end if

	if( 
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] == ''
	)
	{

		User::setErrorRegister("Preencha o seu e-mail.");
		header("Location: /".$user->getdesdomain()."/mural-mensagens/enviar");
		exit;

	}//end if

	if( 
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] == ''
	)
	{

		User::setErrorRegister("Escreve a mensagem a ser enviada");
		header("Location: /".$user->getdesdomain()."/mural-mensagens/enviar");
		exit;

	}//end if


	$message = new Message();

	$message->setData([

		'iduser'=>$user->getiduser(),
		'inmessagestatus'=>0,
		'desmessage'=>$_POST['desmessage'],
		'desemail'=>$_POST['desemail'],
		'desdescription'=>$_POST['desdescription'],
		'inreply'=>0,
		'desreply'=>NULL,
		'dtreply'=>NULL

	]);

	
	$message->update();



	if( $message->getidmessage() > 0)
	{
		$hash = base64_encode($message->getidmessage());

		//Message::setSuccess('Muito obrigado por enviar sua mensagem | Quando o casal aceitar, ela aparecerá no Mural');
		header('Location: /'.$user->getdesdomain().'/mural-mensagens/'.$hash.'/mensagem-enviada');
		exit;	

	}//end else



	


	

});//END route







$app->get( "/:desdomain/mural-mensagens/enviar", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);

	


	$message = new Message();

	if( !$message->getdesmessage() ) $message->setdesmessage('');
	if( !$message->getdesemail() ) $message->setdesemail('');
	if( !$message->getdesdescription() ) $message->setdesdescription('');

	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "message-create",
		
		[
			'user'=>$user->getValues(),
			'message'=>$message->getValues(),
			'messageError'=>Message::getError()

		]
	
	);//end setTpl

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

		$results['results'] = [

			'desdescription'=>'',
			'desmessage'=>'',
			'dtregister'=>''

		];

	}//end if


	
	
	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "message",
		
		[
			'numMessages'=>$numMessages,
			'user'=>$user->getValues(),
			'message'=>$results['results'],
			'messageError'=>Message::getError()

		]
	
	);//end setTpl

});//END route





?>