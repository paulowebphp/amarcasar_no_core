<?php

use Core\PageDashboard;
use Core\Photo;
use Core\Rule;
use Core\Model\User;
use Core\Model\Order;
use Core\Model\OrderStatus;
use Core\Model\Product;
use Core\Model\Gift;
use Core\Model\Account;
use Core\Wirecard;














$app->get( "/dashboard/painel-financeiro/:idorder/detalhes", function( $idorder ) 
{
	User::verifyLogin(false);

	$user = User::getFromSession();

	$order = new Order();

	$order->getOrder((int)$idorder);

	//var_dump(Order::getSuccess());
	//exit;

	$product = $order->getProducts();
	
		

	$page = new PageDashboard();
	
	$page->setTpl(
		


		"order-details", 
		
		[
			'user'=>$user->getValues(),
			
			'product'=>$product,
			'order'=>$order->getValues(),
			'status'=>OrderStatus::listAll(),
			'success'=>Order::getSuccess(),
			'error'=>Order::getError()

		]
	
	);//end setTpl
	
});//END route




















$app->get( "/dashboard/painel-financeiro", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();





	$account = new Account();

	$account->get($user->getiduser());

	




	$search = (isset($_GET['search'])) ? $_GET['search'] : "";

	$currentPage = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;





	$order = new Order();

	if( $search != '' )
	{

		$results = $order->getSearch( 

			(int)$user->getiduser(),
			1,
			$search,
			$currentPage,
			Rule::ITENS_PER_PAGE 

		);//end getSearch

	}//end if
	else
	{
		
		$results = $order->getPage( 

			(int)$user->getiduser(),
			1,
			$currentPage,
			Rule::ITENS_PER_PAGE

		);//end getPage

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
	
	$wirecard = new Wirecard();

	$balances = $wirecard->getBalances($account->getdesaccesstoken());

	
	

		
	$page = new PageDashboard();

	$page->setTpl(
		


		"orders", 
		
		[
			'user'=>$user->getValues(),
			'balances'=>$balances,
			'search'=>$search,
			'pages'=>$pages,
			'numOrders'=>$numOrders,
			'order'=>$order->getValues(),
			'success'=>Order::getSuccess(),
			'error'=>Order::getError()
			

		]
	
	);//end setTpl

});//END route








?>