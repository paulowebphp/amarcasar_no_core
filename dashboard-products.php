<?php

use Hcode\Page;
use Hcode\Photo;
use Hcode\Model\Rule;
use Hcode\Model\User;
use Hcode\Model\Product;
use Hcode\Model\Gift;






$app->post( "/dashboard/presentes-virtuais/adicionar", function()
{
	
	User::verifyLogin(false);

	if(
		
		!isset($_POST['desproduct']) 
		|| 
		$_POST['desproduct'] === ''
		
	)
	{

		Product::setError("Preencha o nome do Presente Virtual");
		header('Location: /dashboard/presentes-virtuais/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['incategory']) 
		|| 
		$_POST['incategory'] === ''
		
	)
	{

		Product::setError("Preencha o nome de uma categoria para o Presente Virtual");
		header('Location: /dashboard/presentes-virtuais/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['vlprice']) 
		|| 
		$_POST['vlprice'] === ''
		
	)
	{

		Product::setError("Preencha o valor do Presente Virtual");
		header('Location: /dashboard/presentes-virtuais/adicionar');
		exit;

	}//end if

	if( $_FILES["file"]["error"] === '' )
	{
		Product::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
		header('Location: /dashboard/presentes-virtuais/adicionar');
		exit;

	}//end if

	if( $_FILES["file"]["size"] > Rule::MAX_PHOTO_UPLOAD_SIZE )
	{

		Product::setError("Só é possível fazer upload de arquivos de até ".(Rule::MAX_PHOTO_UPLOAD_SIZE/1000000)."MB");
		header('Location: /dashboard/presentes-virtuais/adicionar');
		exit;

	}



	$user = User::getFromSession();

	$product = new Product();

	//$product->get((int)$user->getiduser());

	$_POST['iduser'] = $user->getiduser();

	$product->setData($_POST);

	$product->update();

	if( $_FILES["file"]["name"] === "" )
	{

		$product->setdesphoto(Rule::DEFAULT_PHOTO);
		$product->setdesextension(Rule::DEFAULT_PHOTO_EXTENSION);

		$product->update();

		Product::setSuccess("Item criado com sucesso | Adicione uma imagem depois clicando em Editar");

		header('Location: /dashboard/presentes-virtuais');
		exit;

	}//end if
	else
	{
		
		$photo = new Photo();

		$basename = $photo->setPhoto(
			
			$_FILES["file"], 
			$product->getiduser(),
			Rule::CODE_PRODUCTS,
			$product->getidproduct(),
			0
			
			
		);//end setPhoto
		
		if( $basename['basename'] === false )
		{
	
			$product->delete();

			Product::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");

			header('Location: /dashboard/presentes-virtuais');
			exit;

		}//end if
		else
		{

			$product->setdesphoto($basename['basename']);
			$product->setdesextension($basename['extension']);
	
			$product->update();

			Product::setSuccess("Item criado");

			header('Location: /dashboard/presentes-virtuais');
			exit;

		}//end else
			

	}//end else

});//END route






$app->get( "/dashboard/presentes-virtuais/adicionar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$product = new Product();
    
	$results = $product->get((int)$user->getiduser());
	
	$numProducts = $results['numproducts'];

	$product->setData($results['results']);

	$maxProducts = $product->maxProducts($user->getinplan());
	
	if( $numProducts >= $maxProducts )
	{

		Product::setError("Você já atingiu o limite máximo de Presentes Virtuais | Em caso de dúvida, entre em contato com o Suporte");
		header('Location: /dashboard/presentes-virtuais');
		exit;

	}//end if
	
	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"products-create", 
			
		[

			'productMsg'=>Product::getSuccess(),
			'productError'=>Product::getError()
			

		]
	
	);//end setTpl

});//END route






$app->get( "/dashboard/presentes-virtuais/:idproduct/deletar", function( $idproduct ) 
{
	User::verifyLogin();

	$product = new Product();

	$product->getProduct((int)$idproduct);

	$product->delete();

	$product->deletePhoto($product->getdesphoto());

	header('Location: /dashboard/presentes-virtuais');
	exit;
	
});//END route





$app->get( "/dashboard/presentes-virtuais/lista-pronta/adicionar", function()
{
	
	User::verifyLogin(false);

	if( !isset($_GET['presente']) )
	{
		
		Product::setError("A URL que você tentou acessar não existe, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
		header('Location: /dashboard/presentes-virtuais/lista-pronta');
		exit;
	}

	$user = User::getFromSession();

	$idgift = $_GET['presente'];
   
	$numGifts = Gift::getNumGifts();

	if( $_GET['presente'] < 1 || $_GET['presente'] > $numGifts )
	{
		
		Product::setError("A URL que você tentou acessar não existe, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
		header('Location: /dashboard/presentes-virtuais/lista-pronta');
		exit;
	}

	$gift = new Gift();
   
	$gift->getGift($idgift);

	$product = new Product();

	$product->setiduser($user->getiduser());
	$product->setincategory($gift->getincategory());
	$product->setdesproduct($gift->getdesgift());
	$product->setvlprice($gift->getvlprice());
	$product->setdesextension($gift->getdesextension());

	$product->update();

	

	$photo = new Photo();


	$basename = $photo->copyPhoto( 
		
		$gift->getdesphoto(), 
		$user->getiduser(), 
		Rule::CODE_GIFTS, 
		$product->getidproduct(), 
		$product->getdesextension(),
		Rule::CODE_PRODUCTS
		
	);//end copyPhoto
	
	$product->setdesphoto($basename);

	$product->update();

	Product::setSuccess("Item criado");

	header('Location: /dashboard/presentes-virtuais');
	exit;

});//END route







$app->get( "/dashboard/presentes-virtuais/lista-pronta", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
   
	$gift = new Gift();

	if( $search != '' )
	{

		$results = $gift->getSearch($search,$currentPage,Rule::ITENS_PER_PAGE);

	}//end if
	else
	{
		
		$results = $gift->getPage($currentPage,Rule::ITENS_PER_PAGE);

	}//end else

	
	$gift->setData($results['results']);

	$pages = [];	
    
	for ( $x=0; $x < $results['pages']; $x++ )
	{ 
		# code...
		array_push(
			
			$pages, 
			
			[

				'href'=>'/dashboard/presentes-virtuais/lista-pronta?'.http_build_query(
					
					[

						'page'=>$x+1

					]
				
				),

			'text'=>$x+1

			]
		
		);//end array_push

	}//end for
	
	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"products-gifts", 
		
		[
			'search'=>$search,
			'pages'=>$pages,
			'gift'=>$gift->getValues(),
			'productMsg'=>Product::getSuccess(),
			'productError'=>Product::getError()
			

		]
	
	);//end setTpl

});//END route





$app->get( "/dashboard/presentes-virtuais/:idproduct", function( $idproduct )
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

    $product = new Product();
    
    $product->getProduct((int)$idproduct);
   
	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"products-update", 
		
		[

			'product'=>$product->getValues(),
			'productMsg'=>Product::getSuccess(),
			'productError'=>Product::getError()
			

		]
	
	);//end setTpl

});//END route






$app->post( "/dashboard/presentes-virtuais/:idproduct", function( $idproduct )
{

	User::verifyLogin(false);

	if(
		
		!isset($_POST['desproduct']) 
		|| 
		$_POST['desproduct'] === ''
		
	)
	{

		Product::setError("Preencha o nome do Presente Virtual");
		header('Location: /dashboard/presentes-virtuais/'.$idproduct);
		exit;

	}//end if

	if(
		
		!isset($_POST['incategory']) 
		|| 
		$_POST['incategory'] === ''
		
	)
	{

		Product::setError("Preencha o nome de uma categoria para o Presente Virtual");
		header('Location: /dashboard/presentes-virtuais/'.$idproduct);
		exit;

	}//end if

	if(
		
		!isset($_POST['vlprice']) 
		|| 
		$_POST['vlprice'] === ''
		
	)
	{

		Product::setError("Preencha o valor do Presente Virtual");
		header('Location: /dashboard/presentes-virtuais/'.$idproduct);
		exit;

	}//end if

	if( $_FILES["file"]["error"] === '' )
	{
		Product::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
		header('Location: /dashboard/presentes-virtuais/'.$idproduct);
		exit;

	}//end if

	if( $_FILES["file"]["size"] > Rule::MAX_PHOTO_UPLOAD_SIZE )
	{

		Product::setError("Só é possível fazer upload de arquivos de até ".(Rule::MAX_PHOTO_UPLOAD_SIZE/1000000)."MB");
		header('Location: /dashboard/presentes-virtuais/'.$idproduct);
		exit;

	}

	$user = User::getFromSession();

	$product = new Product();

	$product->getProduct((int)$idproduct);

	$_POST['iduser'] = $user->getiduser();

    $product->setData($_POST);
    
	$product->update();

	if( $_FILES["file"]["name"] !== "" )
	{
		$photo = new Photo();

		if( $product->getdesphoto() != Rule::DEFAULT_PHOTO )
		{

			$photo->deletePhoto($product->getdesphoto(), Rule::CODE_PRODUCTS);

		}//end if

		$basename = $photo->setPhoto(
			
			$_FILES["file"], 
			$product->getiduser(),
			Rule::CODE_PRODUCTS,
			$product->getidproduct(),
			0
			
		
		);//end setPhoto


		if( $basename['basename'] === false )
		{
			Product::setError("Falha no envio da imagem, tente novamente | Se a falha persistir, tente enviar outra imagem ou entre em contato com o suporte");
			header('Location: /dashboard/presentes-virtuais');
			exit;

		}//end if
		else
		{
	
			$product->setdesphoto($basename['basename']);
			$product->setdesextension($basename['extension']);
	
			$product->update();

		}//end else

	}//end if


	Product::setSuccess("Item alterado");

	header('Location: /dashboard/presentes-virtuais');
	exit;


});//END route














$app->get( "/dashboard/presentes-virtuais", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$product = new Product();

	if( $search != '' )
	{

		$results = $product->getSearch((int)$user->getiduser(),$search,$currentPage,Rule::ITENS_PER_PAGE);

	}//end if
	else
	{
		
		$results = $product->getPage((int)$user->getiduser(),$currentPage,Rule::ITENS_PER_PAGE);

	}//end else


	$product->setData($results['results']);

	$numProducts = $results['numproducts'];

	$maxProducts = $product->maxProducts($user->getinplan());

	$pages = [];	
    
	for ( $x=0; $x < $results['pages']; $x++ )
	{ 
		# code...
		array_push(
			
			$pages, 
			
			[

				'href'=>'/dashboard/presentes-virtuais?'.http_build_query(
					
					[

						'page'=>$x+1

					]
				
				),

			'text'=>$x+1

			]
		
		);//end array_push

	}//end for

   


	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"products", 
		
		[
			'search'=>$search,
			'pages'=>$pages,
			'maxProducts'=>$maxProducts,
			'numProducts'=>$numProducts,
			'product'=>$product->getValues(),
			'productMsg'=>Product::getSuccess(),
			'productError'=>Product::getError()
			

		]
	
	);//end setTpl

});//END route





?>