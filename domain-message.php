<?php

use Core\PageDomain;
use Core\Mailer;
use Core\Validate;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\Message;
use Core\Model\CustomStyle;









$app->get( "/:desdomain/mural-mensagens/:hash/mensagem-enviada", function( $desdomain, $hash )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);

	

	$message = new Message();

	$message->getFromHash($hash);

	


	$consort = new Consort();

	$consort->get((int)$user->getiduser());



	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());
	


	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "message-sent",
		
		[
			'customstyle'=>$customstyle->getValues(),
			'consort'=>$consort->getValues(),
			'user'=>$user->getValues(),
			'message'=>$message->getValues(),
			'error'=>Message::getError()

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

		Message::setError("Preencha o seu nome");
		header("Location: /".$user->getdesdomain()."/mural-mensagens/enviar");
		exit;

	}//end if

	if( !$desmessage = Validate::validateString($_POST['desmessage']) )
	{	
		

		Message::setError("O nome não pode ser formado apenas com caracteres especiais, tente novamente");
		header("Location: /".$user->getdesdomain()."/mural-mensagens/enviar");
		exit;

	}//end if	







	if( 
		
		!isset($_POST['desemail']) 
		|| 
		$_POST['desemail'] == ''
	)
	{

		Message::setError("Preencha o seu e-mail.");
		header("Location: /".$user->getdesdomain()."/mural-mensagens/enviar");
		exit;

	}//end if

	if( ($desemail = Validate::validateEmail($_POST['desemail'])) === false )
	{	
		
		Message::setError("O e-mail parece estar num formato inválido, tente novamente");
		header("Location: /".$user->getdesdomain()."/mural-mensagens/enviar");
		exit;

	}//end if





	if( 
		
		!isset($_POST['desdescription']) 
		|| 
		$_POST['desdescription'] == ''
	)
	{

		Message::setError("Escreve a mensagem a ser enviada");
		header("Location: /".$user->getdesdomain()."/mural-mensagens/enviar");
		exit;

	}//end if

	if( !$desdescription = Validate::validateString($_POST['desdescription']) )
	{	
		

		Message::setError("A mensagem não pode ser formada apenas com caracteres especiais, tente novamente");
		header("Location: /".$user->getdesdomain()."/mural-mensagens/enviar");
		exit;

	}//end if	









	$message = new Message();

	$message->setData([

		'iduser'=>$user->getiduser(),
		'instatus'=>0,
		'desmessage'=>$desmessage,
		'desemail'=>$desemail,
		'desdescription'=>$desdescription

	]);


		
	$message->update();

	




	if( $message->getidmessage() > 0)
	{


		$consort = new Consort();

		$consort->get((int)$user->getiduser());



		$guestMailer = new Mailer(
					
			$message->getdesemail(), 
			$message->getdesmessage(), 
			"Amar Casar - Mensagem Enviada",
			# template do e-mail em si na /views/email/ e não da administração
			"message-guest", 
			
			array(

				"consort"=>$consort->getValues(),
				"user"=>$user->getValues(),
				"message"=>$message->getValues()

			)//end array
		
		);//end Mailer
		
		



		$userMailer = new Mailer(
					
			$user->getdeslogin(), 
			$user->getdesperson(), 
			"Amar Casar - Mensagem Enviada",
			# template do e-mail em si na /views/email/ e não da administração
			"message-user", 
			
			array(

				"consort"=>$consort->getValues(),
				"user"=>$user->getValues(),
				"message"=>$message->getValues()

			)//end array
		
		);//end Mailer




		$guestMailer->send();
		
		$userMailer->send();



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

	

	$consort = new Consort();

	$consort->get((int)$user->getiduser());


	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());
	

	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "message-create",
		
		[
			'customstyle'=>$customstyle->getValues(),	
			'consort'=>$consort->getValues(),	
			'user'=>$user->getValues(),
			'error'=>Message::getError()

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




	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());

	
	
	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "message",
		
		[
			'customstyle'=>$customstyle->getValues(),
			'numMessages'=>$numMessages,
			'user'=>$user->getValues(),
			'message'=>$results['results'],
			'error'=>Message::getError()

		]
	
	);//end setTpl

});//END route





?>