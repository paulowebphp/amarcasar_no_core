<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Photo;
use Core\Validate;
use Core\Model\User;
use Core\Model\Event;
use Core\Model\Address;







$app->get( "/dashboard/eventos/adicionar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    /**$Event = new Event();
    
	$Event->get((int)$user->getiduser());

	$Event->setData(); */



	
	$page = new PageDashboard();

	$page->setTpl(
		
 

		"events-create", 
			
		[
			'user'=>$user->getValues(),

			'success'=>Event::getSuccess(),
			'error'=>Event::getError(),
			'success'=>Event::getSuccess()
			

		]
	
	);//end setTpl

});//END route









$app->post( "/dashboard/eventos/adicionar", function()
{

	
	User::verifyLogin(false);

	$user = User::getFromSession();



	



	if(
		
		!isset($_POST['ineventstatus']) 
		|| 
		$_POST['ineventstatus'] === ''
		
	)
	{

		Event::setError("Preencha o status do evento");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if


	if( !Validate::validateStatus($_POST['ineventstatus']) )
	{

		Event::setError("Informe o status apenas com números");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if









	if(
		
		!isset($_POST['tmevent']) 
		|| 
		$_POST['tmevent'] === ''
		
	){

		Event::setError("Insira o horário do evento");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if( !$tmevent = Validate::validateTime($_POST['tmevent']) )
	{	
		

		Event::setError("Informe uma hora válida");
		header('Location: /dashboard/eventos/adicionar');;
		exit;

	}//end if











	if(
		
		!isset($_POST['dtevent']) 
		|| 
		$_POST['dtevent'] === ''
		
	)
	{

		Event::setError("Preencha a data do evento");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if( !$dtevent = Validate::validateDate($_POST['dtevent'], 1) )
	{

		Event::setError("Informe uma data válida");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if







	







	if(
		
		!isset($_POST['desevent']) 
		|| 
		$_POST['desevent'] === ''
		
	)
	{

		Event::setError("Preencha o nome do Evento");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if( !$desevent = Validate::validateString($_POST['desevent']) )
	{

		Event::setError("O nome do evento não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if









	if(
		
		!isset($_POST['nrcountryarea']) 
		|| 
		$_POST['nrcountryarea'] === ''
		
	)
	{

		Event::setError("Preencha o DDI - Codigo Internacional");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if( !$nrcountryarea = Validate::validateNumber($_POST['nrcountryarea']) )
	{

		Event::setError("O DDI - Código Internacinoal - deve ser formado apenas por números");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if












	if(
		
		!isset($_POST['nrddd']) 
		|| 
		$_POST['nrddd'] === ''
		
	)
	{

		Event::setError("Preencha o DDD");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if( !$nrddd = Validate::validateDDD($_POST['nrddd']) )
	{

		Event::setError("Informe um DDD válido");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if











	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Event::setError("Preencha o telefone do evento");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if


	if( !$nrphone = Validate::validatePhone($_POST['nrphone']) )
	{

		Event::setError("Informe um telefone ou celular válido");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if













	if(
		
		!isset($_POST['desaddress']) 
		|| 
		$_POST['desaddress'] === ''
		
	)
	{

		Event::setError("Preencha o Local do Evento");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if( !$desaddress = Validate::validateString($_POST['desaddress']) )
	{

		Event::setError("O seu endereço não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if







	if(
		
		!isset($_POST['desnumber']) 
		|| 
		$_POST['desnumber'] === ''
		
	)
	{

		Event::setError("Preencha o Local do Evento");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if

	if( !$desnumber = Validate::validateNumber($_POST['desnumber']) )
	{

		Event::setError("Informe o seu nome apenas com números");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if










	
	






	if( $_FILES["file"]["error"] === '' )
	{
		Event::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if






	if( $_FILES["file"]["size"] > Rule::MAX_PHOTO_UPLOAD_SIZE )
	{

		Event::setError("Só é possível fazer upload de arquivos de até ".(Rule::MAX_PHOTO_UPLOAD_SIZE/1000000)."MB");
		header('Location: /dashboard/eventos/adicionar');
		exit;

	}//end if




	$desdescription = Validate::validateString($_POST['desdescription'], true);
	$descomplement = Validate::validateString($_POST['descomplement'], true);
	$desdistrict = Validate::validateString($_POST['desdistrict'], true);
	$descity = Validate::validateString($_POST['descity']);
	$desstate = Validate::validateString($_POST['desstate']);
	$descountry = Validate::validateString($_POST['descountry']);
	$ineventstatus = $_POST['ineventstatus'];



	

	$event = new Event();


	//$_POST['iduser'] = $user->getiduser();
	//$_POST['descountry'] = Rule::DESCOUNTRY;
	//$_POST['nrcountryarea'] = Rule::NR_COUNTRY_AREA;
	//$_POST['nrddd'] = $_POST['nrddd'];
	//$_POST['nrphone'] = (int)$_POST['nrphone'];
	//$_POST['desphoto'] = '0.jpg';
	//$_POST['desextension'] = 'jpg';
	


	$event->setData([


		'iduser'=>$user->getiduser(),
		'ineventstatus'=>$ineventstatus,
		'tmevent'=>$tmevent,
		'dtevent'=>$dtevent,
		'desevent'=>$desevent,
		'desdescription'=>$desdescription,
		'nrcountryarea'=>$nrcountryarea,
		'nrddd'=>$nrddd,
		'nrphone'=>$nrphone,
		'desaddress'=>$desaddress,
		'desnumber'=>$desnumber,
		'descomplement'=>$descomplement,
		'desdistrict'=>$desdistrict,
		'descity'=>$descity,
		'desstate'=>$desstate,
		'descountry'=>$descountry,
		'desphoto'=>Rule::DEFAULT_PHOTO,
		'desextension'=>Rule::DEFAULT_PHOTO_EXTENSION

	]);//setData

	
	
	$event->update();



	if( $_FILES["file"]["name"] === "" )
	{


		//$event->setdesphoto(Rule::DEFAULT_PHOTO);
		//$event->setdesextension(Rule::DEFAULT_PHOTO_EXTENSION);

		//$event->update();

		Event::setSuccess("Item criado com sucesso | Adicione uma imagem depois clicando em Editar");

		header('Location: /dashboard/eventos');
		exit;

	}//end if
	else
	{
		
		$photo = new Photo();

		$basename = $photo->setPhoto(
			
			$_FILES["file"], 
			$event->getiduser(),
			Rule::CODE_EVENTS,
			$event->getidevent(),
			0
			
			
		);//end setPhoto
		
		if( $basename['basename'] === false )
		{
	
			$event->delete();

			Event::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");

			header('Location: /dashboard/eventos/adicionar');
			exit;

		}//end if
		else
		{

			$event->setdesphoto($basename['basename']);
			$event->setdesextension($basename['extension']);
	
			$event->update();

			Event::setSuccess("Item criado");

			header('Location: /dashboard/eventos');
			exit;

		}//end else
			

	}//end else





});//END route













$app->get( "/dashboard/eventos/:idevent/deletar", function( $idevent ) 
{
	User::verifyLogin(false);

	$user = User::getFromSession();
	

	$event = new Event();
	

	$event->getEvent((int)$idevent);

	$event->delete();

	header('Location: /dashboard/eventos');
	exit;
	
});//END route










$app->get( "/dashboard/eventos/:idevent", function( $idevent )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $event = new Event();
    
    $event->getEvent((int)$idevent);

    $state = Address::listAllStates();

	$city = Address::listAllCitiesByState((int)$event->getidstate());

   


	$page = new PageDashboard();

	$page->setTpl(
		
 

		"events-update", 
		
		[
			'state'=>$state,
			'city'=>$city,
			'user'=>$user->getValues(),
			'event'=>$event->getValues(),
			'success'=>Event::getSuccess(),
			'error'=>Event::getError()
			

		]
	
	);//end setTpl

});//END route










$app->post( "/dashboard/eventos/:idevent", function( $idevent )
{

	User::verifyLogin(false);

	$user = User::getFromSession();



	

	



	if(
		
		!isset($_POST['ineventstatus']) 
		|| 
		$_POST['ineventstatus'] === ''
		
	)
	{

		Event::setError("Preencha o status do evento");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if

	if( !Validate::validateStatus($_POST['ineventstatus']) )
	{

		Event::setError("Informe o status apenas com números");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if











	if(
		
		!isset($_POST['tmevent']) 
		|| 
		$_POST['tmevent'] === ''
		
	){

		Event::setError("Insira o horário do evento");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if

	if( !$tmevent = Validate::validateTime($_POST['tmevent']) )
	{	
		

		Event::setError("Informe uma hora válida");
		header('Location: /dashboard/eventos/'.$idevent);;
		exit;

	}//end if











	if(
		
		!isset($_POST['dtevent']) 
		|| 
		$_POST['dtevent'] === ''
		
	)
	{

		Event::setError("Preencha a data do evento");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if

	if( !$dtevent = Validate::validateDate($_POST['dtevent'], 1) )
	{

		Event::setError("Informe uma data válida");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if







	







	if(
		
		!isset($_POST['desevent']) 
		|| 
		$_POST['desevent'] === ''
		
	)
	{

		Event::setError("Preencha o nome do Evento");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if

	if( !$desevent = Validate::validateString($_POST['desevent']) )
	{

		Event::setError("O nome do evento não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if









	if(
		
		!isset($_POST['nrcountryarea']) 
		|| 
		$_POST['nrcountryarea'] === ''
		
	)
	{

		Event::setError("Preencha o DDI - Codigo Internacional");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if

	if( !$nrcountryarea = Validate::validateNumber($_POST['nrcountryarea']) )
	{

		Event::setError("O DDI - Código Internacinoal - deve ser formado apenas por números");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if












	if(
		
		!isset($_POST['nrddd']) 
		|| 
		$_POST['nrddd'] === ''
		
	)
	{

		Event::setError("Preencha o DDD");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if

	if( !$nrddd = Validate::validateDDD($_POST['nrddd']) )
	{

		Event::setError("Informe um DDD válido");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if











	if(
		
		!isset($_POST['nrphone']) 
		|| 
		$_POST['nrphone'] === ''
		
	)
	{

		Event::setError("Preencha o Telefone do Evento");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if


	if( !$nrphone = Validate::validatePhone($_POST['nrphone']) )
	{

		Event::setError("Informe um telefone ou celular válido");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if













	if(
		
		!isset($_POST['desaddress']) 
		|| 
		$_POST['desaddress'] === ''
		
	)
	{

		Event::setError("Preencha o Local do Evento");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if

	if( !$desaddress = Validate::validateString($_POST['desaddress']) )
	{

		Event::setError("O seu endereço não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if







	if(
		
		!isset($_POST['desnumber']) 
		|| 
		$_POST['desnumber'] === ''
		
	)
	{

		Event::setError("Preencha o Local do Evento");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if

	if( !$desnumber = Validate::validateNumber($_POST['desnumber']) )
	{

		Event::setError("Informe o seu nome apenas com números");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if












	if( $_FILES["file"]["error"] === '' )
	{
		Event::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if




	if( $_FILES["file"]["size"] > Rule::MAX_PHOTO_UPLOAD_SIZE )
	{

		Event::setError("Só é possível fazer upload de arquivos de até ".(Rule::MAX_PHOTO_UPLOAD_SIZE/1000000)."MB");
		header('Location: /dashboard/eventos/'.$idevent);
		exit;

	}//end if





	$desdescription = Validate::validateString($_POST['desdescription'], true);
	$descomplement = Validate::validateString($_POST['descomplement'], true);
	$desdistrict = Validate::validateString($_POST['desdistrict'], true);
	$descity = Validate::validateString($_POST['descity']);
	$desstate = Validate::validateString($_POST['desstate']);
	$descountry = Validate::validateString($_POST['descountry']);
	$ineventstatus = $_POST['ineventstatus'];


	

	




	$event = new Event();

	$event->getEvent((int)$idevent);

	


	$event->setData([

		'idevent'=>$event->getidevent(),
		'iduser'=>$user->getiduser(),
		'ineventstatus'=>$ineventstatus,
		'tmevent'=>$tmevent,
		'dtevent'=>$dtevent,
		'desevent'=>$desevent,
		'desdescription'=>$desdescription,
		'nrcountryarea'=>$nrcountryarea,
		'nrddd'=>$nrddd,
		'nrphone'=>$nrphone,
		'desaddress'=>$desaddress,
		'desnumber'=>$desnumber,
		'descomplement'=>$descomplement,
		'desdistrict'=>$desdistrict,
		'descity'=>$descity,
		'desstate'=>$desstate,
		'descountry'=>$descountry,
		'desphoto'=>$event->getdesphoto(),
		'desextension'=>$event->getdesextension()

	]);//setData

	$event->update();





	if( $_FILES["file"]["name"] !== "" )
	{

		$photo = new Photo();

		if( $event->getdesphoto() != Rule::DEFAULT_PHOTO )
		{

			$photo->deletePhoto($event->getdesphoto(), Rule::CODE_EVENTS);

		}//end if

		$basename = $photo->setPhoto(
			
			$_FILES["file"], 
			$event->getiduser(),
			Rule::CODE_EVENTS,
			$event->getidevent(),
			0
			
		);//end setPhoto


		if( $basename['basename'] === false )
		{
			Event::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
			header('Location: /dashboard/eventos/'.$idevent);
			exit;

		}//end if
		else
		{
			
	
			$event->setdesphoto($basename['basename']);
			$event->setdesextension($basename['extension']);
	
			$event->update();

		}//end else

	}//end if





	Event::setSuccess("Item alterado");

	header('Location: /dashboard/eventos');
	exit;

});//END route














$app->get( "/dashboard/eventos", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$event = new Event();

	if( $search != '' )
	{

		$results = $event->getSearch((int)$user->getiduser(),$search,$currentPage,Rule::ITENS_PER_PAGE);

	}//end if
	else
	{
		
		$results = $event->getPage((int)$user->getiduser(),$currentPage,Rule::ITENS_PER_PAGE);

	}//end else
    	



	$numEvents = $results['numevents'];

	$event->setData($results['results']);

	$maxEvents = $event->maxEvents($user->getinplan());

	$pages = [];	
    
	for ( $x=0; $x < $results['pages']; $x++ )
	{ 
		# code...
		array_push(
			
			$pages, 
			
			[

				'href'=>'/dashboard/eventos?'.http_build_query(
					
					[

						'page'=>$x+1

					]
				
				),

			'text'=>$x+1

			]
		
		);//end array_push

	}//end for
	

	$page = new PageDashboard();

	$page->setTpl(
		
 

		"events", 
		
		[
			'user'=>$user->getValues(),
			'search'=>$search,
			'pages'=>$pages,
			'maxEvents'=>$maxEvents,
			'numEvents'=>$numEvents,
			'event'=>$event->getValues(),
			'success'=>Event::getSuccess(),
			'error'=>Event::getError()
			

		]
	
	);//end setTpl

});//END route





?>