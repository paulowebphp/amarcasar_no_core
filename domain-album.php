<?php

use Core\PageDomain;
use Core\Mailer;
use Core\Model\User;
use Core\Model\Consort;
use Core\Model\CustomStyle;
use Core\Model\Album;












$app->get( "/:desdomain/album", function( $desdomain )
{

    $user = new User();
 
	$user->getFromUrl($desdomain);


	
	$customstyle = new CustomStyle();

	$customstyle->get((int)$user->getiduser());




	$album = new Album();

	$results = $album->get((int)$user->getiduser());

	

	




	if ( $results['nrtotal'] === 0 )
	{

		$results['results'] = [

			'instatus'=>'',
			'inposition'=>'',
			'desalbum'=>'',
			'descategory'=>'',
			'desdescription'=>'',

		];

	}//end if





	
	
	$page = new PageDomain();
	
	$page->setTpl(
		
		$user->getidtemplate() . 
		DIRECTORY_SEPARATOR . "album",
		
		[
			'album'=>$results['results'],
			'nrtotal'=>$results['nrtotal'],
			'customstyle'=>$customstyle->getValues(),
			'user'=>$user->getValues(),
			'success'=>Album::getSuccess(),
			'error'=>Album::getError()

		]
	
	);//end setTpl

});//END route





?>