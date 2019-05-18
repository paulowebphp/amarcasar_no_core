<?php

use Core\PageDashboard;
use Core\Photo;
use Core\Rule;
use Core\Wirecard;
use Core\Model\User;
use Core\Model\Plan;










$app->get( "/meu-plano/renovar/checkout", function()
{



	if ( isset($_GET['plano']) )
	{

		$plan['inplan'] = $_GET['plano'];

	}//end if
	else if( !isset($_GET['plano']) )
	{

		header('Location: /planos');
		exit;

	}//end else if
	

	$page = new Page();

	$page->setTpl(
		
		"plans-checkout",

		[
			'plan'=>$plan,
			'errorRegister'=>User::getErrorRegister(),
			'registerValues'=>['name'=>'', 'email'=>'']

		]
	
	);//end setTpl

});//END route









$app->get( "/dashboard/meu-plano/renovar", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$plan = new Plan();
	   
	$results = Wirecard::getPlanRenewal( $user->getinplan() );

	$page = new PageDashboard();

	$page->setTpl(
		
 		"plans-renewal", 
		
		[
			//'user'=>$user->getValues(),
			'wirecard'=>$results,
			'planError'=>Plan::getError()
			

		]
	
	);//end setTpl

});//END route

















$app->get( "/dashboard/meu-plano", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$plan = new Plan();
	   
	$results = $plan->get((int)$user->getiduser());



	
	
	//$results = $plan->getWithLimit((int)$user->getiduser(),(int)$user->getinplan());
	
	$plan->setData($results['results']);
	
	$numPlans = $results['nrtotal'];


	

	$page = new PageDashboard();

	$page->setTpl(
		
 

		"plans", 
		
		[
			'user'=>$user->getValues(),

			'plan'=>$plan->getValues(),
			'planError'=>plan::getError()
			

		]
	
	);//end setTpl

});//END route





?>