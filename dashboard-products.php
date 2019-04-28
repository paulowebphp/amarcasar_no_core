<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Rule;
use Hcode\Model\Product;






$app->post( "/dashboard/presentes-virtuais/adicionar", function()
{
	
	User::verifyLogin(false);

	if(
		
		!isset($_POST['desproduct']) 
		|| 
		$_POST['desproduct'] === ''
		
	)
	{

		Product::setError("Preencha o nome do Produto.");
		header('Location: /dashboard/presentes-virtuais/adicionar');
		exit;

	}//end if

	if(
		
		!isset($_POST['vlprice']) 
		|| 
		$_POST['vlprice'] === ''
		
	)
	{

		Product::setError("Preencha o preço do Produto.");
		header('Location: /dashboard/presentes-virtuais/adicionar');
		exit;

	}//end if



	$user = User::getFromSession();

	$product = new Product();

	$product->get((int)$user->getiduser());

	$_POST['iduser'] = $user->getiduser();

	$product->setData($_POST);

	# Hcode colocou $user->save(); Aula 120
	$product->update();

	Product::setSuccess("Dados alterados com sucesso!");

	header('Location: /dashboard/presentes-virtuais');
	exit;

});//END route






$app->get( "/dashboard/presentes-virtuais/adicionar", function()
{
	
	User::verifyLogin(false);

	//	$user = User::getFromSession();

    /**$Event = new Event();
    
	$Event->get((int)$user->getiduser());

	$Event->setData(); */
	
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

	header('Location: /dashboard/presentes-virtuais');
	exit;
	
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

		Product::setError("Preencha o nome do Produto.");
		header('Location: /dashboard/presentes-virtuais/:idproduct');
		exit;

	}//end if

	if(
		
		!isset($_POST['vlprice']) 
		|| 
		$_POST['vlprice'] === ''
		
	)
	{

		Product::setError("Preencha o preço do Produto.");
		header('Location: /dashboard/presentes-virtuais/:idproduct');
		exit;

	}//end if

	$user = User::getFromSession();

	$product = new Product();

	$product->getProduct((int)$idproduct);

	$_POST['iduser'] = $user->getiduser();

    $product->setData($_POST);
    
    

	# Hcode colocou $user->save(); Aula 120
	$product->update();

	Product::setSuccess("Dados alterados com sucesso!");

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

   

	$numProducts = $results['numproducts'];

	$product->setData($results['results']);

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