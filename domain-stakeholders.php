<?php

use Core\PageDomain;
use Core\Mailer;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\Stakeholder;
use Core\Model\CustomStyle;


















$app->get( "/:desdomain/fornecedores", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);

	


	$stakeholder = new Stakeholder();

	$results = $stakeholder->get((int)$user->getiduser());

	$nrtotal = $results['nrtotal'];



	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());







	
	
	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "stakeholders",
		
		[
			'customstyle'=>$customstyle->getValues(),

			'nrtotal'=>$results['nrtotal'],
			'user'=>$user->getValues(),
			'stakeholder'=>$results['results'],
			'error'=>Stakeholder::getError()

		]
	
	);//end setTpl

});//END route





?>