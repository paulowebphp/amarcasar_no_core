<?php

use Hcode\Page;
use Hcode\Model\Rule;
use Hcode\Model\User;
use Hcode\Model\Product;
use Hcode\Model\Cart;





$app->get( "/:desurl/loja", function( $desurl )
{

	$user = new User();
	
	$user->getFromUrl($desurl);


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

				'href'=>'/'.$desurl.'/loja?'.http_build_query(
					
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
		
		"templates" . 
		DIRECTORY_SEPARATOR . $user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "store", 
		
		[
			'search'=>$search,
			'pages'=>$pages,
			'user'=>$user->getValues(),
			'product'=>$product->getValues(),
			'productMsg'=>Product::getSuccess(),
			'productError'=>Product::getError()

		]
	
	);//end setTpl

});//END route





?>