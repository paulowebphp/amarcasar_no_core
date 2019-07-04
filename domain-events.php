<?php

use Core\PageDomain;
use Core\Mailer;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\Message;
use Core\Model\Event;
use Core\Model\CustomStyle;


















$app->get( "/:desdomain/eventos", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);

	$events = new Event();

	$results = $events->get((int)$user->getiduser());

	$numevents = $results['nrtotal'];



	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());






	
	
	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "events",
		
		[
			'customstyle'=>$customstyle->getValues(),

			'numevents'=>$numevents,
			'user'=>$user->getValues(),
			'event'=>$results['results'],
			'error'=>Event::getError()

		]
	
	);//end setTpl

});//END route





?>