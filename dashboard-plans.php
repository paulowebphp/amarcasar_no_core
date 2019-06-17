<?php

use Core\PageDashboard;
use Core\Photo;
use Core\Rule;
use Core\Wirecard;
use Core\Model\User;
use Core\Model\Plan;
use Core\Model\Payment;
use Core\Model\Address;
use Core\Model\Customer;
use Core\Model\OrderPlan;







$app->get( "/dashboard/meu-plano", function()
{
	
	User::verifyLogin(false);

	$user = User::getFromSession();

	$plan = new Plan();
	   
	$regular_plan = $plan->getRegularPlan((int)$user->getiduser());
	

	//$results = $plan->getWithLimit((int)$user->getiduser(),(int)$user->getinplan());
	
	$free_plan = $plan->getFreePlan((int)$user->getiduser());
	
	//$numplans = $results['nrtotal'];


	$page = new PageDashboard();

	$page->setTpl(
		
		"plans", 
		
		[
			'user'=>$user->getValues(),
			'regular_plan'=>$regular_plan,
			'free_plan'=>$free_plan,
			'error'=>Payment::getError(),
			'success'=>Payment::getSuccess()
			

		]
	
	);//end setTpl

});//END route





?>