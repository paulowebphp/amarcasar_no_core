<?php 

use \Core\Wirecard;
use \Core\Model\User;
use \Core\Model\Cart;






function roundValue( $value )
{

	return number_format($value, 2, ".","");


}// end ceil










function formatText( $text )
{

	$text = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $text);
	

	$text = preg_replace('/[^A-Za-z0-9çÇ\s_-]/', '', $text);

	$text = trim($text);

	return $text;

}//end formatText









function formatNumberCEP( $nrcep )
	{

		$nrcep = preg_replace('/[^0-9]/', '', (string)$nrcep);

		if( strlen($nrcep) != 8 )
		{
			return false;
		}//end if
		else
		{	
			return $nrcep;

		}//end else

		

	}//END formatNumberCEP









function formatNumber( $number )
{

	return preg_replace('/[^0-9]/', '', (string)$number);


}//END formatNumber









function formatDDD( $nrddd )
{

	$nrddd = preg_replace('/[^0-9]/', '', (string)$nrddd);

	if( strlen($nrddd) != 2 )
	{
		return false;
	}//end if
	else
	{	
		return $nrddd;

	}//end else

	

}//END formatNumberCEP











function formatPhone( $nrphone )
{

	$nrphone = preg_replace('/[^0-9]/', '', (string)$nrphone);

	if( !in_array((int)strlen($nrphone), [8,9])  )
	{
		return false;
	}//end if
	else
	{	
		return $nrphone;

	}//end else

	

}//END formatNumberCEP











	function validateDocument( $type, $desdocument )
	{

		if( !$desdocument )
		{
			return false;
			
		}#end if

		$desdocument = preg_replace('/[^0-9]/', '', (string)$desdocument);
		//$desdocument = trim($desdocument);

		//$desdocument = str_replace(" ", "", $desdocument);
		//$desdocument = str_replace(".", "", $desdocument);



		switch ($type) 
		{
			case 0:
				# code...
				//$desdocument = str_replace("-", "", $desdocument);
				

				if( !validateCPF($desdocument) )
				{
					return false;
					
				}#end if
				else
				{
					return $desdocument;

				}//end else

			case 1:

				return false;

		}#end switch

	}#END validate






	function validateCPF($number):bool
	{


	    if (strlen($number) != 11) return false;
	       

	    for ($i = 0, $j = 10, $sum = 0; $i < 9; $i++, $j--)
	        $sum += $number{$i} * $j;
	    $rest = $sum % 11;
	    if ($number{9} != ($rest < 2 ? 0 : 11 - $rest))
	        return false;

	    for ($i = 0, $j = 11, $sum = 0; $i < 10; $i++, $j--)
	        $sum += $number{$i} * $j;
	    $rest = $sum % 11;

	    return ($number{10} == ($rest < 2 ? 0 : 11 - $rest));

	}#END isValidCPF







function getStateCode( $idstate )
{

	switch( (int)$idstate ) 
	{

		case 1:
			# code...
			return 'AC';

		case 2:
			# code...
			return 'AL';

		case 3:
			# code...
			return 'AM';


		case 4:
			# code...
			return 'AP';

		case 5:
			# code...
			return 'BA';

		case 6:
			# code...
			return 'CE';

		
		case 7:
			# code...
			return 'DF';

		case 8:
			# code...
			return 'ES';

		case 9:
			# code...
			return 'GO';

		
		case 10:
			# code...
			return 'MA';

		case 11:
			# code...
			return 'MG';

		case 12:
			# code...
			return 'MS';

		case 13:
			# code...
			return 'MT';

		case 14:
			# code...
			return 'PA';

		case 15:
			# code...
			return 'PB';

		case 16:
			# code...
			return 'PE';

		case 17:
			# code...
			return 'PI';

		case 18:
			# code...
			return 'PR';

		
		case 19:
			# code...
			return 'RJ';

		case 20:
			# code...
			return 'RN';

		case 21:
			# code...
			return 'RO';

		case 22:
			# code...
			return 'RR';

		case 23:
			# code...
			return 'RS';

		case 24:
			# code...
			return 'SC';

		case 25:
			# code...
			return 'SE';

		case 26:
			# code...
			return 'SP';

		case 27:
			# code...
			return 'TO';

		
		
	}//end switch


}//END getStateCode








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