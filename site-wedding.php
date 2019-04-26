<?php

use Hcode\Page;
use Hcode\Model\User;
use Hcode\Model\Wedding;


$app->get( "/:desurl", function( $desurl )
{
    User::verifyLogin(false);

    $user = new User();
 
	$user->getFromUrl($desurl);

	$page = new Page();
	
	$page->setTpl(
		
		$user->getTemplate(), 
		
		[
		
			'user'=>$user->getValues()

		]
	
	);//end setTpl

});//END route


?>