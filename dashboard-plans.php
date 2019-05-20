<?php

use Core\PageDashboard;
use Core\Photo;
use Core\Rule;
use Core\Wirecard;
use Core\Model\User;
use Core\Model\Plan;
use Core\Model\Payment;










$app->get( "/dashboard/meu-plano/renovar/checkout", function()
{



	if ( isset($_GET['plano']) )
	{

		$plan['inplan'] = $_GET['plano'];

	}//end if
	else if( !isset($_GET['plano']) )
	{

		header('Location: /dashaboard/meu-plano/renovar');
		exit;

	}//end else if


	$payment = new Payment();

	if( !$payment->getdesholdername() ) $payment->setdesholdername('');
	if( !$payment->getdesholderdocument() ) $payment->setdesholderdocument('');
	if( !$payment->getdescardcode_number() ) $payment->setdescardcode_number('');
	if( !$payment->getdesholdername() ) $payment->setdesholdername('');
	if( !$payment->getdescardcode_month() ) $payment->setdescardcode_month('');
	if( !$payment->getdescardcode_year() ) $payment->setdescardcode_year('');
	if( !$payment->getdescardcode_cvv() ) $payment->setdescardcode_cvv('');

	$inplan = Wirecard::getPlan($plan['inplan']);

	$address = new Address();

	$lastAddressPlan = Address::getLastAddressPlan($user->getiduser());

	$address->setData([

		'iduser'=>$user->getiduser(),
		'desaddress'=>$lastAddressPlan['desaddress'],
		'desholderaddress'=>$lastAddressPlan['desholderaddress'],
		'desnumber'=>$lastAddressPlan['desnumber'],
		'desholdernumber'=>$lastAddressPlan['desholdernumber'],
		'descomplement'=>$lastAddressPlan['descomplement'],
		'desholdercomplement'=>$lastAddressPlan['desholdercomplement'],
		'descity'=>$lastAddressPlan['descity'],
		'desholdercity'=>$lastAddressPlan['desholdercity'],
		'desstate'=>$lastAddressPlan['desstate'],
		'desholderstate'=>$lastAddressPlan['desholderstate'],
		'descountry'=>$lastAddressPlan['descountry'],
		'desholdercountry'=>$lastAddressPlan['desholdercountry'],
		'desaddress'=>$lastAddressPlan['desaddress'],
		'desaddress'=>$lastAddressPlan['desaddress'],
		'desaddress'=>$lastAddressPlan['desaddress'],
		'desaddress'=>$lastAddressPlan['desaddress'],

	]);

	$address->savePlanAddress();

	$wirecard = new Wirecard();

	$wirecard->payPlan(

		$inplan,
		$id_entity,
		$customerId,
		$desperson,
		$dtbirth,
		$desdocument,
		$nrphone,
		$desaddress,
		$desnumber, 
	  	$desdistrict, 
	  	$descity, 
	  	$desstate, 
	  	$deszipcode, 
	  	$descomplement,
	  	$descardcode_month,
	  	$descardcode_year,
	  	$descardcode_number,
	  	$descardcode_cvv

	);




	$page = new PageDashboard();

	$page->setTpl(
		
		"plans-checkout",

		[
			'payment'=>$payment->getValues(),
			'inplan'=>$inplan,
			'planError'=>Plan::getError()

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