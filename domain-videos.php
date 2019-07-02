<?php

use Core\PageDomain;
use Core\Mailer;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\CustomStyle;
use Core\Model\Video;












$app->get( "/:desdomain/videos", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);


	
	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());




	$video = new Video();

	$results = $video->get((int)$user->getiduser());

	

	




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
		DIRECTORY_SEPARATOR . "videos",
		
		[
			'video'=>$results['results'],
			'nrtotal'=>$results['nrtotal'],
			'customstyle'=>$customstyle->getValues(),
			'user'=>$user->getValues(),
			'success'=>Video::getSuccess(),
			'error'=>Video::getError()

		]
	
	);//end setTpl

});//END route





?>