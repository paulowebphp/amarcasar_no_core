<?php

use Core\PageDashboard;
use Core\Model\User;
use Core\Model\Tag;









$app->get( "/dashboard/tags-papelaria", function() 
{
	User::verifyLogin(false);

	$user = User::getFromSession();

	$tag = new Tag();

	$tag->getTags();

	$page = new PageDashboard();
	
	$page->setTpl(
		

		"tags", 
		
		[
			'user'=>$user->getValues(),
			'tag'=>$tag->getValues(),
			'tagSuccess'=>Tag::getSuccess(),
			'tagError'=>Tag::getError()

		]
	
	);//end setTpl
	
});//END route












?>