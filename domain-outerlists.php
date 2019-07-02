<?php

use Core\PageDomain;
use Core\Mailer;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\OuterList;
use Core\Model\CustomStyle;


















$app->get( "/:desdomain/listas-de-fora", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);

	


	$outerlist = new OuterList();

	$results = $outerlist->get((int)$user->getiduser());

	$nrtotal = $results['nrtotal'];



	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());







	
	
	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "outerlists",
		
		[
			'customstyle'=>$customstyle->getValues(),

			'nrtotal'=>$results['nrtotal'],
			'user'=>$user->getValues(),
			'outerlist'=>$results['results'],
			'error'=>OuterList::getError()

		]
	
	);//end setTpl

});//END route





?>