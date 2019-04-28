<?php 

use \Hcode\Model\User;
use \Hcode\Model\Cart;




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