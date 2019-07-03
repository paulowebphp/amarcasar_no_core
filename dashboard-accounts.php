<?php

use Core\PageDashboard;
use Core\Photo;
use Core\Wirecard;
use Core\Rule;
use Core\Validate;
use Core\Model\User;
use Core\Model\Order;
use Core\Model\Product;
use Core\Model\Gift;
use Core\Model\BAnk;
use Core\Model\Transfer;
use Core\Model\TransferStatus;
use Core\Model\Account;










$app->get( "/dashboard/transferencias", function() 
{
	User::verifyLogin(false);

	$user = User::getFromSession();

	
	$transfer = new Transfer();

	$transfer->get((int)$user->getiduser());

	//if(!$transfer->getidtransfer()) $transfer->setidtransfer('');



	$page = new PageDashboard();

	$page->setTpl(
		

 
		"transfers", 
		
		[
			'user'=>$user->getValues(),
			'page'=>[],
			'search'=>'',
			'transfer'=>$transfer->getValues(),
			'success'=>Transfer::getSuccess(),
			'error'=>Transfer::getError()

		]
	
	);//end setTpl
	
});//END route











?>