<?php 

use \Core\Wirecard;
use \Core\Validate;
use \Core\Model\User;
use \Core\Model\Cart;





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
		return $array[0];

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
			$despaymentstatus = 'Autorizado';
			break;
		

		case '2':
			# code...
			$despaymentstatus = 'Cancelado';
			break;


		case '3':
			# code...
			$despaymentstatus = 'Estornado';
			break;


		case '4':
			# code...
			$despaymentstatus = 'Pago';
			break;	

	}//end switch	


	return $despaymentstatus;


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

	$onlyDate = explode(' ', $date);

	$finalDate = new DateTime( $onlyDate[0] );

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








function getCartNrQtd()
{

	$cart = Cart::getFromSession();

	$totals = $cart->getProductsTotals();

	return $totals['nrqtd'];

}//END getCartNrQtd









function getCartVlSubTotal()
{

	$cart = Cart::getFromSession();

	$totals = $cart->getProductsTotals();

	return formatPrice($totals['vlprice']);
	
}//END getCartVlSubTotal








 ?>