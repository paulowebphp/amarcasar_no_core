<?php 

use \Core\Page;
use \Core\Model\Product;
//use \Core\Model\Category;
//use \Core\Model\Cart;
//use \Core\Model\Address;
//use \Core\Model\User;
//use \Core\Model\Order;
//use \Core\Model\OrderStatus;






$app->post( '/webhooks', function()
{

	$json = file_get_contents('php://input');
	// Converte os dados recebidos
	$data = json_decode($json, true);



	$post = $_POST;





	$log = fopen( $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 'webhoook.txt', 'w+');

	fwrite($log, $data . PHP_EOL);

	fclose($log);




	$postLog = fopen( $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 'post.txt', 'w+');

	fwrite($postLog, $post . PHP_EOL);

	fclose($postLog);


	/*$products = Product::listAll();

	$page = new Page();

	$page->setTpl(
		
		"index", 

		[
			'products'=>Product::checkList($products)
			
		]
	
	);//end setTpl*/

});//END route








/*$app->get( "/categories/:idcategory", function( $idcategory )
{

	$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;

	$category = new Category();

	$category->get((int)$idcategory);

	$pagination = $category->getProductsPage($page);

	$pages = [];

	for( $i=1; $i <= $pagination['pages']; $i++ )
	{

		array_push(
			
			$pages, 
		
			[
				'link'=>'/categories/'.$category->getidcategory().'?page='.$i,
				'page'=>$i

			]
		
		);//end array_push

	}//end if

	
	$page = new Page();

	$page->setTpl(
		
		"category",

		[
			'category'=>$category->getValues(),
			'products'=>$pagination["data"],
			'pages'=>$pages

		]
	
	);//end setTpl

});//END route





$app->get( "/products/:desurl", function( $desurl )
{

	$product = new Product();

	$product->getFromURL($desurl);

	$page = new Page();

	$page->setTpl(
		
		"product-detail",

		[
			'product'=>$product->getValues(),
			'categories'=>$product->getCategories()

		]
	
	);//end setTpl

});//END route*/







?>