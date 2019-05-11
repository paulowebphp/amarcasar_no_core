<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Wedding;


$app->get( "/:desdomain", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);
	

	$page = new Page();
	
	$page->setTpl(
		
		"templates" . 
		DIRECTORY_SEPARATOR . $user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "index",
		
		[
		
			'user'=>$user->getValues()

		]
	
	);//end setTpl

});//END route


?>