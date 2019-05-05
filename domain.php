<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Wedding;


$app->get( "/:desurl", function( $desurl )
{

    $user = new User();
 
	$user->getFromUrl($desurl);
	

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