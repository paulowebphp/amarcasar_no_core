<?php

use Core\Page;
use Core\Photo;
use Core\Model\Rule;
use Core\Model\User;
use Core\Model\Plan;


















$app->get( "/dashboard/meu-plano", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$plan = new Plan();
	   
	$results = $plan->get((int)$user->getiduser());



	
	
	//$results = $plan->getWithLimit((int)$user->getiduser(),(int)$user->getinplan());
	
	$plan->setData($results['results']);
	
	$numPlans = $results['nrtotal'];


	

	$page = new Page();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"plans", 
		
		[
			'user'=>$user->getValues(),

			'plan'=>$plan->getValues(),
			'planError'=>plan::getError()
			

		]
	
	);//end setTpl

});//END route





?>