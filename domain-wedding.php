<?php

use Core\PageDomain;
use Core\Mailer;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\Message;
use Core\Model\Wedding;
use Core\Model\CustomStyle;


















$app->get( "/:desdomain/cerimonia", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);




	$wedding = new Wedding();

	$wedding->get((int)$user->getiduser());




	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());





	


	
	
	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "wedding",
		
		[
			'customstyle'=>$customstyle->getValues(),
			'user'=>$user->getValues(),
			'wedding'=>$wedding->getValues(),
			'error'=>Wedding::getError()

		]
	
	);//end setTpl

});//END route





?>