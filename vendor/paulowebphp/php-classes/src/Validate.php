<?php 

namespace Core;


use \Core\Model;




class Validate extends Model
{

	# Session
	const SESSION = "ValidateSession";

	# Error - Success
	const SUCCESS = "Validate-Success";
	const ERROR = "Validate-Error";







	public static function validateFullName( $desname )
	{

		$desname = trim($desname);

		if ( !preg_match('/\\s/', $desname) )
		{

			return false;

		}//end if
		else
		{
			return true;

		}//end else


	}//end validateFullName






	public static function validateString( $string )
	{

		$string = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $string);
		

		$string = preg_replace('/[^A-Za-z0-9çÇ\s_-]/', '', $string);

		$string = trim($string);

		return $string;

	}//end formatText











	public static function validateNumber( $desnumber )
	{

		return preg_replace('/[^0-9]/', '', (string)$desnumber);


	}//END formatNumber











	public static function validateDate( $date )
	{

		if( (bool)preg_match('/^([0-9]{4})[-.\/]([0-9]{2})[-.\/]([0-9]{2})$/', $date) == true )
		{

			return $date;


		}//end if
		else
		{
			return false;
		}
		


	}//END validateDate







	public static function validateCEP( $nrcep )
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

			

		}//END validateCEP







	public static function validateDDD( $nrddd )
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

		

	}//END validateDDD











	public static function validatePhone( $nrphone )
	{

		$nrphone = preg_replace('/[^0-9]/', '', (string)$nrphone);

		if( !in_array((int)strlen($nrphone), [8,9])  )
		{
			return false;
		}//end if
		else
		{	
			return $nrphone;

		}//end validatePhone

		

	}//END formatNumberCEP











	public static function validateDocument( $type, $desdocument )
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
				

				if( !Validate::validateCPF($desdocument) )
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






	public static function validateCPF($number):bool
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










	public static function setError( $msg )
	{

		$_SESSION[Validate::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Validate::ERROR]) && $_SESSION[Validate::ERROR]) ? $_SESSION[Validate::ERROR] : '';

		Validate::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Validate::ERROR] = NULL;

	}//END clearError



















}//END class Validate




 ?>