<?php

use Core\PageDomain;
use Core\Mailer;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\Message;
use Core\Model\Event;


















$app->get( "/:desdomain/eventos", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);

	$events = new Event();

	$results = $events->get((int)$user->getiduser());

	$numevents = $results['nrtotal'];


	if ( $results['nrtotal'] === 0 )
	{

		$results['results'] = [

			'desdescription'=>'',
			'desevent'=>'',
			'dtregister'=>''

		];

	}//end if





	
	
	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "events",
		
		[
			'numevents'=>$numevents,
			'user'=>$user->getValues(),
			'event'=>$results['results'],
			'error'=>Event::getError()

		]
	
	);//end setTpl

});//END route





?>