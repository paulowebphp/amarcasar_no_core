<?php

use Core\PageDomain;
use Core\Rule;
use Core\Model\User;
use Core\Model\Product;
use Core\Model\Cart;





$app->get( "/:desdomain/loja", function( $desdomain )
{

	$user = new User();
	
	$user->getFromUrl($desdomain);


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
	

	$pages = [];	
    
	for ( $x=0; $x < $results['pages']; $x++ )
	{ 
		# code...
		array_push(
			
			$pages, 
			
			[

				'href'=>'/'.$desdomain.'/loja?'.http_build_query(
					
					[

						'page'=>$x+1

					]
				
				),

			'text'=>$x+1

			]
		
		);//end array_push

	}//end for

	$page = new PageDomain();	
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "store", 
		
		[
			'search'=>$search,
			'pages'=>$pages,
			'user'=>$user->getValues(),
			'product'=>$product->getValues(),
			'success'=>Product::getSuccess(),
			'error'=>Product::getError()

		]
	
	);//end setTpl

});//END route





?>