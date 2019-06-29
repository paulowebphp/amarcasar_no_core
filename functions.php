<?php 

use \Core\Wirecard;
use \Core\Validate;
use \Core\Model\User;
use \Core\Model\Cart;
use \Core\Model\Bank;
use \Core\Model\Product;
use \Core\Model\ProductConfig;







function getInterestTotal( $inpaymentmethod, $nrinstallment, $incharge )
{


	$cart = Cart::getFromSession();
 	
	return $cart->getInterestTotal( $inpaymentmethod, $nrinstallment, $incharge);


}//end getInterest






function getInterest( $value, $inpaymentmethod, $nrinstallment, $incharge )
{


	return Wirecard::getInterest($value, $inpaymentmethod, $nrinstallment, $incharge);



}//end getInterest








function getCartVlSubTotal()
{

	$cart = Cart::getFromSession();

	//$totals = $cart->getProductsTotals();


	$uri = explode('/', $_SERVER["REQUEST_URI"]);


	$user = new User();

	$user->getFromUrl($uri[1]);




	$productconfig = new ProductConfig();

	$productconfig->get((int)$user->getiduser());



	return formatPrice($cart->getInterestTotal('1','1',$productconfig->getincharge()));
	


}//END getCartVlSubTotal








/*function getCartVlSubTotal()
{

	$cart = Cart::getFromSession();

	$totals = $cart->getProductsTotals();

	return formatPrice($totals['vlprice']);
	
}//END getCartVlSubTotal*/





/*function getCartVlSubTotal()
{

	$cart = Cart::getFromSession();

	//$totals = $cart->getProductsTotals();


	$uri = explode('/', $_SERVER["REQUEST_URI"]);


	$user = new User();

	$user->getFromUrl($uri[1]);




	$productconfig = new ProductConfig();

	$productconfig->get((int)$user->getiduser());



	return formatPrice(Wirecard::getInterest($totals['vlprice'],'1','1',$productconfig->getincharge()));
	


}//END getCartVlSubTotal*/





function getCartNrQtd()
{

	$cart = Cart::getFromSession();

	$totals = $cart->getProductsTotals();

	return $totals['nrqtd'];

}//END getCartNrQtd




















function getCategoryName( $value )
{

	if($value != '')
	{
		return Product::getCategory($value);

	}//end if
	else
	{
		return $value;

	}//endelse


}//end getProductCategory











function getDesdomain()
{

	$uri = explode('/', $_SERVER["REQUEST_URI"]);

	return $uri[1];

}//end getDesdomain









function setTemplateMenu( $page )
{

	$uri = explode('/', $_SERVER["REQUEST_URI"]);


	$user = new User();

	$user->getFromUrl($uri[1]);

	switch ($page) 
	{
		case 'wedding':
			# code...
			if( $user->getinwedding() == 1 )
			{
				return true;

			}//end if
			else
			{
				return false;

			}//end else




		case 'party':
			# code...
			if( $user->getinparty() == 1 )
			{
				return true;

			}//end if
			else
			{
				return false;

			}//end else







			case 'bestfriend':
			# code...
			if( $user->getinbestfriend() == 1 )
			{
				return true;

			}//end if
			else
			{
				return false;

			}//end else








			case 'rsvp':
			# code...
			if( $user->getinrsvp() == 1 )
			{
				return true;

			}//end if
			else
			{
				return false;

			}//end else








			case 'message':
			# code...
			if( $user->getinmessage() == 1 )
			{
				return true;

			}//end if
			else
			{
				return false;

			}//end else







			case 'store':
			# code...
			if( $user->getinstore() == 1 )
			{
				return true;

			}//end if
			else
			{
				return false;

			}//end else





			case 'event':
			# code...
			if( $user->getinevent() == 1 )
			{
				return true;

			}//end if
			else
			{
				return false;

			}//end else





			case 'album':
			# code...
			if( $user->getinalbum() == 1 )
			{
				return true;

			}//end if
			else
			{
				return false;

			}//end else





			case 'video':
			# code...
			if( $user->getinvideo() == 1 )
			{
				return true;

			}//end if
			else
			{
				return false;

			}//end else





			case 'stakeholder':
			# code...
			if( $user->getinstakeholder() == 1 )
			{
				return true;

			}//end if
			else
			{
				return false;

			}//end else





			case 'outerlist':
			# code...
			if( $user->getinouterlist() == 1 )
			{
				return true;

			}//end if
			else
			{
				return false;

			}//end else


		
		
	}//end switch



	

}//end getDesdomain











function getBankName( $bankNumber )
{

	
	$banks = Bank::getBanksValues();



	foreach ($banks as $bank)
	{
		# code...
		if( (int)$bank['value'] == (int)$bankNumber ) 
		{

			return $bank['name'];
		
		}//end if
		 

	}//end foreach


	return $bankNumber;


}//end getBankName








function getUri($uri)
{	


	$array = explode('/', $uri);

	if( isset($array[2]) )
	{
		return $array[2];

	}//end if

}//end getUri
















function validatePlanEnd( $dtplanend )
{

	return Validate::validatePlanEnd($dtplanend);

}//end validatePlanEnd














function validatePlanFree( $inplancontext )
{
	return Validate::validatePlanFree( $inplancontext);

}//end validatePlanFree














function roundValue( $value )
{

	

	return number_format($value, 2, ".","");


}// end ceil












function getValuePartial( $value, $integer = 1 )
{

	$roundValue = roundValue($value);

	$array = explode('.', $roundValue);
	

	if( $integer == 1 )
	{
		//return $array[0];

		return number_format($array[0], 0, ",",".");

	}//end if
	else
	{

		return $array[1];

	}//end else



}//endgetValuePartial






	








function setQueryString(
	
	$desaddress,
	$desnumber,
	$descomplement,
	$desdistrict,
	$descity,
	$desstate,
	$travelmode

)
{

	$data = [

		'destination'=>$desaddress." ".$desnumber." ".$descomplement." ".$desdistrict." ".$descity." ".$desstate,
		'travelmode'=>$travelmode

	];


	return 'https://www.google.com/maps/dir/?api=1&'.http_build_query($data);

	
}//end setQueryString








function getPaymentStatus($inpaymentstatus)
{


	switch ( $inpaymentstatus ) 
	{
		case '1':
			# code...
			return 'Aguardando';
			
		

		case '2':
			# code...
			return 'Autorizado';
			


		case '3':
			# code...
			return 'Cancelado';
			


		case '4':
			# code...
			return 'Estornado';


		case '5':
			# code...
			return 'Concluído';
				

	}//end switch	



}//end getDtPlanEnd










function getDtPlanEnd($dtplanbegin, $inperiod)
{

	$planEnd = new DateTime($dtplanbegin . ' +'.$inperiod.' month');

	return $planEnd->format('d/m/Y');


}//end getDtPlanEnd







function getDesplan( $inplan )
{
	$plan = Wirecard::getPlan($inplan);

	return $plan['desplan'];

}//end getPlanName





function getDesperiod( $inplan )
{

	$plan = Wirecard::getPlan($inplan);

	return $plan['inperiod'] . " " . $plan['desperiod'];

}// end getDespériod







function getDateDiff( $date )
{

	//$onlyDate = explode(' ', $date);

	$finalDate = new DateTime( $date );

	$today = new DateTime(date('Y-m-d'));

	$diff = $today->diff($finalDate);

	$interval = $diff->days;


	if( $finalDate > $today )
	{
		switch( $interval > 1 )
		{
			case true;
			return 'Faltam '.$interval.' dias';

			case false;
			return 'Falta '.$interval. ' dia';

		}//end switch

	}//end switch

	else if( $finalDate < $today )
	{
		return 'O casamento aconteceu dia '.$finalDate->format('d/m/Y');

	}//end else if

	else if( $finalDate == $today )
	{
		return 'É hoje! Chegou o grande dia!';

	}//end else if


}//END getDateDiff














function formatPrice( $vlprice )
{

	if( !$vlprice > 0 ) $vlprice = 0;

	return number_format($vlprice, 2, ",",".");
	
}//END formatPrice











function formatDate( $date )
{

	return date( 'd/m/Y', strtotime($date) );
	
}//END formatDate









function formatTime($time)
{

	$dt = new \DateTime($time);

	return $dt->format('H:i');

}//end formatTime







function getYear()
{

	return date('Y');
	
}//END getYear






function formatUtf8( $name )
{

	return utf8_encode($name);
	
}//END formatUtf8







function checkLogin( $inadmin = true )
{

	return User::checkLogin($inadmin);

}//END checkLogin








function getUserName()
{
	$user = User::getFromSession();

	return $user->getdesperson();

}//END getUserName






function checkDesdomain()
{
	$user = User::getFromSession();

	if ( 

		$user->getdesdomain() != '' 
		&& 
		!is_null( $user->getdesdomain() )

	)
	{
	 	# code...
	 	return true;

	}//end if
	else
	{
		return false;

	}//end else


}//END getUserName







function view()
{
	$user = User::getFromSession();

	return $user->getdesdomain();

}//END getUserName



















 ?>