<?php

use Hcode\Page;
use Hcode\Photo;
use Hcode\Model\Rule;
use Hcode\Model\User;
use Hcode\Model\Order;
use Hcode\Model\OrderStatus;
use Hcode\Model\Product;
use Hcode\Model\Gift;
use Hcode\Model\Wirecard;
use Hcode\Model\BAnk;









$app->get( "/dashboard/painel-financeiro/conta-bancaria", function() 
{
	User::verifyLogin(false);

	$user = User::getFromSession();


	$page = new page();

	$bank = new Bank();

	$bank->setdesagencynumber('');
	$bank->setdesagencycheck('');
	$bank->setdesaccountnumber('');
	$bank->setdesagencynumber('');
	$bank->setdesaccountcheck('');
	$bank->setdesbanknumber('');
	$bank->setdesaccounttype('');


	$values = Bank::getBanksValues();

	$page->setTpl(
		
		"dashboard" . 
		DIRECTORY_SEPARATOR . 
		"banks-create", 
		
		[
			'values'=>$values,
			'bank'=>$bank->getValues(),
			'bankSuccess'=>Bank::getSuccess(),
			'bankError'=>Bank::getError()

		]
	
	);//end setTpl
	
});//END route








?>