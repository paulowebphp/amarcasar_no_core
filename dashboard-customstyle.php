<?php

use Core\PageDashboard;
use Core\Rule;
use Core\Validate;
use Core\Photo;
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

	$user = User::getFromSession();




	

	
	if( 
		
		!isset($_POST['descolorheader']) 
		|| 
		$_POST['descolorheader'] === ''
	)
	{

		CustomStyle::setError("Informe a cor do texto do Header");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$descolorheader = Validate::validateHexa($_POST['descolorheader']) )
	{

		CustomStyle::setError("A cor do Header não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}







	
	if( 
		
		!isset($_POST['descolorheaderhover']) 
		|| 
		$_POST['descolorheaderhover'] === ''
	)
	{

		CustomStyle::setError("Informe a cor do texto do Header | Efeito Hover");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$descolorheaderhover = Validate::validateHexa($_POST['descolorheaderhover']) )
	{

		CustomStyle::setError("A cor do Header não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}






	
	if( 
		
		!isset($_POST['desbgcolorfooter']) 
		|| 
		$_POST['desbgcolorfooter'] === ''
	)
	{

		CustomStyle::setError("Informe a cor de fundo do Footer");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$desbgcolorfooter = Validate::validateHexa($_POST['desbgcolorfooter']) )
	{

		CustomStyle::setError("A cor de fundo do Footer não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}











	
	if( 
		
		!isset($_POST['descolorfooter']) 
		|| 
		$_POST['descolorfooter'] === ''
	)
	{

		CustomStyle::setError("Informe a cor do texto do Footer");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$descolorfooter = Validate::validateHexa($_POST['descolorfooter']) )
	{

		CustomStyle::setError("A cor do texto do Footer não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}











	
	if( 
		
		!isset($_POST['descolorfooterhover']) 
		|| 
		$_POST['descolorfooterhover'] === ''
	)
	{

		CustomStyle::setError("Informe a cor do texto do Footer | Efeito Hover");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$descolorfooterhover = Validate::validateHexa($_POST['descolorfooterhover']) )
	{

		CustomStyle::setError("A cor do texto do Footer | Efeito Hover - não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}










	
	if( 
		
		!isset($_POST['descolorh1']) 
		|| 
		$_POST['descolorh1'] === ''
	)
	{

		CustomStyle::setError("Informe a cor do H1");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$descolorh1 = Validate::validateHexa($_POST['descolorh1']) )
	{

		CustomStyle::setError("A cor do H1 não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}










	
	if( 
		
		!isset($_POST['desfontfamilyh1']) 
		|| 
		$_POST['desfontfamilyh1'] === ''
	)
	{

		CustomStyle::setError("Informe o tipo de fonte do H1");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if


	if( !$desfontfamilyh1 = Validate::validateFontFamily($_POST['desfontfamilyh1']) )
	{

		CustomStyle::setError("O tipo de fonte do H1 não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}




	




	
	if( 
		
		!isset($_POST['descolorh2']) 
		|| 
		$_POST['descolorh2'] === ''
	)
	{

		CustomStyle::setError("Informe a cor do H2");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$descolorh2 = Validate::validateHexa($_POST['descolorh2']) )
	{

		CustomStyle::setError("A cor do H2 não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}













	if( 
		
		!isset($_POST['desfontfamilyh2']) 
		|| 
		$_POST['desfontfamilyh2'] === ''
	)
	{

		CustomStyle::setError("Informe o tipo de fonte do H2");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$desfontfamilyh2 = Validate::validateFontFamily($_POST['desfontfamilyh2']) )
	{

		CustomStyle::setError("O tipo de fonte do H2 não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}








	
	if( 
		
		!isset($_POST['descolorh3']) 
		|| 
		$_POST['descolorh3'] === ''
	)
	{

		CustomStyle::setError("Informe a cor do H3");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$descolorh3 = Validate::validateHexa($_POST['descolorh3']) )
	{

		CustomStyle::setError("A cor do H3 não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}












	
	if( 
		
		!isset($_POST['desfontfamilyh3']) 
		|| 
		$_POST['desfontfamilyh3'] === ''
	)
	{

		CustomStyle::setError("Informe o tipo de fonte do H3");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$desfontfamilyh3 = Validate::validateFontFamily($_POST['desfontfamilyh3']) )
	{

		CustomStyle::setError("O tipo de fonte do H3 não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}














	
	if( 
		
		!isset($_POST['descolorh4']) 
		|| 
		$_POST['descolorh4'] === ''
	)
	{

		CustomStyle::setError("Informe a cor do H4");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$descolorh4 = Validate::validateHexa($_POST['descolorh4']) )
	{

		CustomStyle::setError("A cor do H4 não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}












	
	if( 
		
		!isset($_POST['desfontfamilyh4']) 
		|| 
		$_POST['desfontfamilyh4'] === ''
	)
	{

		CustomStyle::setError("Informe o tipo de fonte do H4");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$desfontfamilyh4 = Validate::validateFontFamily($_POST['desfontfamilyh4']) )
	{

		CustomStyle::setError("O tipo de fonte do H4 não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}














	
	if( 
		
		!isset($_POST['descolortext']) 
		|| 
		$_POST['descolortext'] === ''
	)
	{

		CustomStyle::setError("Informe a cor do texto");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$descolortext = Validate::validateHexa($_POST['descolortext']) )
	{

		CustomStyle::setError("A cor do texto não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}


	









	
	if( 
		
		!isset($_POST['desfontfamilytext']) 
		|| 
		$_POST['desfontfamilytext'] === ''
	)
	{

		CustomStyle::setError("Informe o tipo de fonte do texto");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$desfontfamilytext = Validate::validateFontFamily($_POST['desfontfamilytext']) )
	{

		CustomStyle::setError("O tipo de fonte do texto não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}










	if( 
		
		!isset($_POST['descolorlinkhover']) 
		|| 
		$_POST['descolorlinkhover'] === ''
	)
	{

		CustomStyle::setError("Informe a cor dos links | Efeito Hover");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$descolorlinkhover = Validate::validateHexa($_POST['descolorlinkhover']) )
	{

		CustomStyle::setError("A cor dos links | Efeito Hover - não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}













	if( 
		
		!isset($_POST['desroundbordersize']) 
		|| 
		$_POST['desroundbordersize'] === ''
	)
	{

		CustomStyle::setError("Informe o tamanho da borda das imagens");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$desroundbordersize = Validate::validateBorderSize($_POST['desroundbordersize']) )
	{

		CustomStyle::setError("O tamanho da borda das imagens não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}











	if( 
		
		!isset($_POST['desbgcolorbutton']) 
		|| 
		$_POST['desbgcolorbutton'] === ''
	)
	{

		CustomStyle::setError("Informe a cor de fundo dos botões");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$desbgcolorbutton = Validate::validateHexa($_POST['desbgcolorbutton']) )
	{

		CustomStyle::setError("A cor de fundo dos botões não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}













	if( 
		
		!isset($_POST['desbgcolorbuttonhover']) 
		|| 
		$_POST['desbgcolorbuttonhover'] === ''
	)
	{

		CustomStyle::setError("Informe a cor de fundo dos botões | Efeito Hover");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$desbgcolorbuttonhover = Validate::validateHexa($_POST['desbgcolorbuttonhover']) )
	{

		CustomStyle::setError("A cor de fundo dos botões | Efeito Hover - não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}












	
	

	if( 
		
		!isset($_POST['descolorbutton']) 
		|| 
		$_POST['descolorbutton'] === ''
	)
	{

		CustomStyle::setError("Informe a cor do texto dos botões");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$descolorbutton = Validate::validateHexa($_POST['descolorbutton']) )
	{

		CustomStyle::setError("A cor do texto dos botões não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}












	if( 
		
		!isset($_POST['descolorbuttonhover']) 
		|| 
		$_POST['descolorbuttonhover'] === ''
	)
	{

		CustomStyle::setError("Informe a cor do texto dos botões | Efeito Hover");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$descolorbuttonhover = Validate::validateHexa($_POST['descolorbuttonhover']) )
	{

		CustomStyle::setError("A cor do texto dos botões | Efeito Hover - não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}














	if( 
		
		!isset($_POST['desbordercolorbutton']) 
		|| 
		$_POST['desbordercolorbutton'] === ''
	)
	{

		CustomStyle::setError("Informe a cor da borda dos botões");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$desbordercolorbutton = Validate::validateHexa($_POST['desbordercolorbutton']) )
	{

		CustomStyle::setError("A cor da borda dos botões não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}














	if( 
		
		!isset($_POST['desbordercolorbuttonhover']) 
		|| 
		$_POST['desbordercolorbuttonhover'] === ''
	)
	{

		CustomStyle::setError("Informe a cor da borda dos botões | Efeito Hover");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$desbordercolorbuttonhover = Validate::validateHexa($_POST['desbordercolorbuttonhover']) )
	{

		CustomStyle::setError("A cor da borda dos botões | Efeito Hover - não pode ser formada apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}












	if( 
		
		!isset($_POST['desborderradiusbutton']) 
		|| 
		$_POST['desborderradiusbutton'] === ''
	)
	{

		CustomStyle::setError("Informe o arredondamento dos botões");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$desborderradiusbutton = Validate::validateBorderRadius($_POST['desborderradiusbutton']) )
	{

		CustomStyle::setError("O tamanho do arredondamento dos botões não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}










	if( 
		
		!isset($_POST['desfontfamilybutton']) 
		|| 
		$_POST['desfontfamilybutton'] === ''
	)
	{

		CustomStyle::setError("Informe o tipo de fonte dos botões");
		header('Location: /dashboard/personalizar-site');
		exit;
		
	}//end if

	if( !$desfontfamilybutton = Validate::validateFontFamily($_POST['desfontfamilybutton']) )
	{

		CustomStyle::setError("O tipo de fonte dos botões não pode ser formado apenas com caracteres especiais, tente novamente");
		header('Location: /dashboard/meus-dados');
		exit;
	}














	if( $_FILES["file"]["error"] === '' )
	{
		CustomStyle::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
		header('Location: /dashboard/personalizar-site/');
		exit;

	}//end if

	if( $_FILES["file"]["size"] > Rule::MAX_PHOTO_UPLOAD_SIZE )
	{

		CustomStyle::setError("Só é possível fazer upload de arquivos de até ".(Rule::MAX_PHOTO_UPLOAD_SIZE/1000000)."MB");
		header('Location: /dashboard/personalizar-site/');
		exit;

	}//end if










			



			






	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());



	$customstyle->setData([

		'idcustomstyle'=>$_POST['idcustomstyle'],
		'iduser'=>$user->getiduser(),
		'idtemplate'=>$_POST['idtemplate'],
		'desbanner'=>$customstyle->getdesbanner(),
		'desbannerextension'=>$customstyle->getdesbannerextension(),
		'descolorheader'=>$descolorheader,
		'descolorheaderhover'=>$descolorheaderhover,
		'desbgcolorfooter'=>$desbgcolorfooter,
		'descolorfooter'=>$descolorfooter,
		'descolorfooterhover'=>$descolorfooterhover,
		'descolorh1'=>$descolorh1,
		'desfontfamilyh1'=>$desfontfamilyh1,
		'descolorh2'=>$descolorh2,
		'desfontfamilyh2'=>$desfontfamilyh2,
		'descolorh3'=>$descolorh3,
		'desfontfamilyh3'=>$desfontfamilyh3,
		'descolorh4'=>$descolorh4,
		'desfontfamilyh4'=>$desfontfamilyh4,
		'descolortext'=>$descolortext,
		'desfontfamilytext'=>$desfontfamilytext,
		'descolorlinkhover'=>$descolorlinkhover,
		'desroundbordersize'=>$desroundbordersize,
		'desbgcolorbutton'=>$desbgcolorbutton,
		'desbgcolorbuttonhover'=>$desbgcolorbuttonhover,
		'descolorbutton'=>$descolorbutton,
		'descolorbuttonhover'=>$descolorbuttonhover,
		'desbordercolorbutton'=>$desbordercolorbutton,
		'desbordercolorbuttonhover'=>$desbordercolorbuttonhover,
		'desborderradiusbutton'=>$desborderradiusbutton,
		'desfontfamilybutton'=>$desfontfamilybutton

	]);//end setData

	

	$customstyle->update();





	if( $_FILES["file"]["name"] != "" )
	{

		$photo = new Photo();

		if( $customstyle->getdesbanner() != Rule::DEFAULT_PHOTO )
		{

			$photo->deletePhoto($customstyle->getdesbanner(), Rule::CODE_CUSTOMSTYLE);

		}//end if

		$basename = $photo->setPhoto(
			
			$_FILES["file"], 
			$user->getiduser(),
			Rule::CODE_CUSTOMSTYLE,
			$customstyle->getidcustomstyle(),
			0
			
		);//end setPhoto


		if( $basename['basename'] === false )
		{
			CustomStyle::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
			header('Location: /dashboard/personalizar-site');
			exit;

		}//end if
		else
		{
			
	
			$customstyle->setdesbanner($basename['basename']);
			$customstyle->setdesbannerextension($basename['extension']);
	
			$customstyle->update();

		}//end else

	}//end if




	CustomStyle::setSuccess("Dados alterados");

	header('Location: /dashboard/personalizar-site');
	exit;

});//END route








?>