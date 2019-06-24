<?php

use Core\PageDomain;
use Core\Model\User;
use Core\Model\CustomStyle;
use Core\Model\Consort;
use Core\Model\Wedding;


$app->get( "/:desdomain", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);


	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());
	

	$consort = new Consort();

	$consort->get((int)$user->getiduser());


	$wedding = new Wedding();

	$wedding->get((int)$user->getiduser());
	
	


	$page = new PageDomain();

	
	
	$page->setTpl(

			
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "index",
		
		[
			'wedding'=>$wedding->getValues(),
			'consort'=>$consort->getValues(),
			'customstyle'=>$customstyle->getValues(),
			'user'=>$user->getValues()

		]
	
	);//end setTpl

});//END route





?>