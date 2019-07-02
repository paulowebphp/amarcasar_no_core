<?php

use Core\PageDomain;
use Core\Mailer;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\Message;
use Core\Model\Party;
use Core\Model\CustomStyle;


















$app->get( "/:desdomain/festa", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);




	$party = new party();

	$party->get((int)$user->getiduser());




	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());





	


	
	
	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "party",
		
		[
			'customstyle'=>$customstyle->getValues(),
			'user'=>$user->getValues(),
			'party'=>$party->getValues(),
			'error'=>Party::getError()

		]
	
	);//end setTpl

});//END route





?>