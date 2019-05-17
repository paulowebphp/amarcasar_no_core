<?php

use Core\PageDomain;
use Core\Model\User;


$app->get( "/:desdomain", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);
	

	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "index",
		
		[
		
			'user'=>$user->getValues()

		]
	
	);//end setTpl

});//END route





?>