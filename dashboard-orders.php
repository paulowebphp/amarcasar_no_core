<?php

use Hcode\Page;
use Hcode\Photo;
use Hcode\Model\Rule;
use Hcode\Model\User;
use Hcode\Model\Order;
use Hcode\Model\OrderStatus;
use Hcode\Model\Product;
use Hcode\Model\Gift;









$app->get( "/dashboard/painel-financeiro/:idorder/detalhes", function( $idorder ) 
{
	User::verifyLogin(false);

	$user = User::getFromSession();

	$order = new Order();

	$order->getOrder((int)$idorder);

	//var_dump(Order::getSuccess());
	//exit;

	$product = $order->getProducts();


	$page = new page();
	
	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"order-details", 
		
		[
			'product'=>$product,
			'order'=>$order->getValues(),
			'status'=>OrderStatus::listAll(),
			'msgSuccess'=>Order::getSuccess(),
			'msgError'=>Order::getError()

		]
	
	);//end setTpl
	
});//END route










$app->get( "/dashboard/painel-financeiro", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$order = new Order();

	if( $search != '' )
	{

		$results = $order->getSearch((int)$user->getiduser(),$search,$currentPage,Rule::ITENS_PER_PAGE);

	}//end if
	else
	{
		
		$results = $order->getPage((int)$user->getiduser(),$currentPage,Rule::ITENS_PER_PAGE);

	}//end else




	$order->setData($results['results']);


	$numOrders = $results['nrtotal'];


	$pages = [];	
    
	for ( $x=0; $x < $results['pages']; $x++ )
	{ 
		# code...
		array_push(
			
			$pages, 
			
			[

				'href'=>'/dashboard/painel-financeiro?'.http_build_query(
					
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
		"orders", 
		
		[
			'search'=>$search,
			'pages'=>$pages,
			'numOrders'=>$numOrders,
			'order'=>$order->getValues(),
			'orderMsg'=>Order::getSuccess(),
			'orderError'=>Order::getError()
			

		]
	
	);//end setTpl

});//END route





?>