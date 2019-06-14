<?php

use Core\PageDashboard;
use Core\Model\User;
use Core\Model\Wedding;
use Core\Model\CustomStyle;









$app->get( "/dashboard/personalizar-site", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());

	$page = new PageDashboard();

	$page->setTpl(
		


		"customstyle", 
		
		[
			'user'=>$user->getValues(),

			'customstyle'=>$customstyle->getValues(),
			'success'=>CustomStyle::getSuccess(),
			'error'=>CustomStyle::getError()
			

		]
	
	);//end setTpl

});//END route





$app->post( "/dashboard/personalizar-site", function()
{

	User::verifyLogin(false);

	





	
	if( 
		
		!isset($_POST['desbanner']) 
		|| 
		$_POST['desbanner'] === ''
	)
	{

		CustomStyle::setError("Informe o Banner");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['descolorheader']) 
		|| 
		$_POST['descolorheader'] === ''
	)
	{

		CustomStyle::setError("Informe a Cor do Header");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['descolorheadertext']) 
		|| 
		$_POST['descolorheadertext'] === ''
	)
	{

		CustomStyle::setError("Informe a Cor do Texto do Header");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['descolorheaderhover']) 
		|| 
		$_POST['descolorheaderhover'] === ''
	)
	{

		CustomStyle::setError("Informe a Cor do Hover do Texto do Header");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['descolorfooter']) 
		|| 
		$_POST['descolorfooter'] === ''
	)
	{

		CustomStyle::setError("Informe a Cor do Footer");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['descolorfootertext']) 
		|| 
		$_POST['descolorfootertext'] === ''
	)
	{

		CustomStyle::setError("Informe a Cor do Texto do Footer");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['descolorfooterhover']) 
		|| 
		$_POST['descolorfooterhover'] === ''
	)
	{

		CustomStyle::setError("Informe a Cor do Hover do Texto do Footer");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['descolorh1']) 
		|| 
		$_POST['descolorh1'] === ''
	)
	{

		CustomStyle::setError("Informe a Cor do H1");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['desfontfamilyh1']) 
		|| 
		$_POST['desfontfamilyh1'] === ''
	)
	{

		CustomStyle::setError("Informe a Fonte do H1");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['desfontsizeh1']) 
		|| 
		$_POST['desfontsizeh1'] === ''
	)
	{

		CustomStyle::setError("Informe o tamanho do H1");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['descolorh2']) 
		|| 
		$_POST['descolorh2'] === ''
	)
	{

		CustomStyle::setError("Informe a Cor do H2");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if






	if( 
		
		!isset($_POST['desfontfamilyh2']) 
		|| 
		$_POST['desfontfamilyh2'] === ''
	)
	{

		CustomStyle::setError("Informe a Fonte do H2");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if





	
	if( 
		
		!isset($_POST['desfontsizeh2']) 
		|| 
		$_POST['desfontsizeh2'] === ''
	)
	{

		CustomStyle::setError("Informe o tamanho do H2");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['descolorh3']) 
		|| 
		$_POST['descolorh3'] === ''
	)
	{

		CustomStyle::setError("Informe a Cor do H3");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['desfontfamilyh3']) 
		|| 
		$_POST['desfontfamilyh3'] === ''
	)
	{

		CustomStyle::setError("Informe a Fonte do H3");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['desfontsizeh3']) 
		|| 
		$_POST['desfontsizeh3'] === ''
	)
	{

		CustomStyle::setError("Informe o tamanho do H3");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if








	
	if( 
		
		!isset($_POST['descolorh4']) 
		|| 
		$_POST['descolorh4'] === ''
	)
	{

		CustomStyle::setError("Informe a Cor do H4");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['desfontfamilyh4']) 
		|| 
		$_POST['desfontfamilyh4'] === ''
	)
	{

		CustomStyle::setError("Informe a Fonte do H4");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['desfontsizeh4']) 
		|| 
		$_POST['desfontsizeh4'] === ''
	)
	{

		CustomStyle::setError("Informe o tamanho do H4");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if



	
	if( 
		
		!isset($_POST['descolortext']) 
		|| 
		$_POST['descolortext'] === ''
	)
	{

		CustomStyle::setError("Informe a cor do texto comum");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if



if( 
		
		!isset($_POST['descolortexthover']) 
		|| 
		$_POST['descolortexthover'] === ''
	)
	{

		CustomStyle::setError("Informe a cor do hover dos links dos textos comuns");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if



	
	if( 
		
		!isset($_POST['desfontfamilytext']) 
		|| 
		$_POST['desfontfamilytext'] === ''
	)
	{

		CustomStyle::setError("Informe o fonte dos textos comuns");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if







	
	if( 
		
		!isset($_POST['desfontsizetext']) 
		|| 
		$_POST['desfontsizetext'] === ''
	)
	{

		CustomStyle::setError("Informe o tamanho do texto comum");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if





		if( 
		
		!isset($_POST['desroundbordersize']) 
		|| 
		$_POST['desroundbordersize'] === ''
	)
	{

		CustomStyle::setError("Informe o tamanho da borda arredondada");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if


	$user = User::getFromSession();

	$customstyle = new CustomStyle();

	$banner = explode('.', $_POST['desbanner']);

	//$_POST['iduser'] = $user->getiduser();
	//$customStyle->setData($_POST);
	$customstyle->setData([

		'idcustomstyle'=>$_POST['idcustomstyle'],
		'iduser'=>$user->getiduser(),
		'idtemplate'=>$_POST['idtemplate'],
		'desbanner'=>$_POST['desbanner'],
		'desbannerextension'=>$banner[1],
		'descolorheader'=>$_POST['descolorheader'],
		'descolorheadertext'=>$_POST['descolorheadertext'],
		'descolorheaderhover'=>$_POST['descolorheaderhover'],
		'descolorfooter'=>$_POST['descolorfooter'],
		'descolorfootertext'=>$_POST['descolorfootertext'],
		'descolorfooterhover'=>$_POST['descolorfooterhover'],
		'descolorh1'=>$_POST['descolorh1'],
		'desfontfamilyh1'=>$_POST['desfontfamilyh1'],
		'desfontsizeh1'=>$_POST['desfontsizeh1'],
		'descolorh2'=>$_POST['descolorh2'],
		'desfontfamilyh2'=>$_POST['desfontfamilyh2'],
		'desfontsizeh2'=>$_POST['desfontsizeh2'],
		'descolorh3'=>$_POST['descolorh3'],
		'desfontfamilyh3'=>$_POST['desfontfamilyh3'],
		'desfontsizeh3'=>$_POST['desfontsizeh3'],
		'descolorh4'=>$_POST['descolorh4'],
		'desfontfamilyh4'=>$_POST['desfontfamilyh4'],
		'desfontsizeh4'=>$_POST['desfontsizeh4'],
		'descolortext'=>$_POST['descolortext'],
		'descolortexthover'=>$_POST['descolortexthover'],
		'desfontfamilytext'=>$_POST['desfontfamilytext'],
		'desfontsizetext'=>$_POST['desfontsizetext'],
		'desroundbordersize'=>$_POST['desroundbordersize']

	]);//end setData

	

	# Core colocou $user->save(); Aula 120
	$customstyle->update();

	CustomStyle::setSuccess("Dados alterados");

	header('Location: /dashboard/personalizar-site');
	exit;

});//END route








?>