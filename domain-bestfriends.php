<?php

use Core\PageDomain;
use Core\Mailer;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\CustomStyle;
use Core\Model\BestFriend;












$app->get( "/:desdomain/padrinhos-madrinhas", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);


	
	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());




	$bestfriend = new BestFriend();

	$results = $bestfriend->get((int)$user->getiduser());

	

	
	
	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "bestfriends",
		
		[
			'bestfriend'=>$results['results'],
			'nrtotal'=>$results['nrtotal'],
			'customstyle'=>$customstyle->getValues(),
			'user'=>$user->getValues(),
			'success'=>BestFriend::getSuccess(),
			'error'=>BestFriend::getError()

		]
	
	);//end setTpl

});//END route








?>