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



		if( $string != '')
		{
			return $string;

		}//end if
		else
		{
			return false;

		}//end else


	}//end formatText











	public static function validateNumber( $desnumber )
	{

		$number = preg_replace('/[^0-9]/', '', (string)$desnumber);

		if( $number != '')
		{
			return $number;

		}//end if
		else
		{
			return false;

		}//end else


	}//END formatNumber












	public static function validateDate( $date )
	{


		$now = new \DateTime(date('Y-m-d'));

		$dt = new \DateTime($date);

		$dt_init = new\DateTime(date('Y-m-d') . ' - 120 year');



		if( (bool)preg_match('/^([0-9]{4})[-.\/]([0-9]{2})[-.\/]([0-9]{2})$/', $date) == true )
		{

			$array = explode('-', $date);

			if( (int)$array[0] < $dt_init->format('Y-m-d') || $dt->format('Y-m-d') > $now->format('Y-m-d') )
			{
				return false;
			}//end if
			else
			{
				return $date;

			}//end else


		}//end if
		else
		{
			return false;
		}
		


	}//END validateDate










	public static function validateYear( $year )
	{

		

		if( preg_match('/^([0-9]{4})$/', (string)$year) )
		{

			return $year;


		}//end if
		else
		{
			return false;
		}
		


	}//END validateYear









	public static function validateMonth( $month )
	{


	

		if( preg_match('/^([0-9]{2})$/', (string)$month) )
		{

			return $month;


		}//end if
		else
		{
			return false;
		}
		
		


	}//END validateMonth







	public static function validateCvc( $desnumber )
	{

		$number = preg_replace('/[^0-9]/', '', (string)$desnumber);

		$number = trim($number);

		$lenght = strlen($number);

		if( in_array((int)$lenght, [3,4]))
		{
			return $number;

		}//end if
		else
		{
			return false;

		}//end else


	}//END formatNumber







	public static function validateCardNumber( $desnumber )
	{

		$number = preg_replace('/[^0-9]/', '', (string)$desnumber);

		$number = trim($number);
	

		if( preg_match('/^([0-9]{16})$/', (string)$number) )
		{

			return $number;


		}//end if
		else
		{
			return false;
		}
		
		


	}//END validateMonth







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
				# code...
				//$desdocument = str_replace("-", "", $desdocument);
				

				if( !Validate::validateCNPJ($desdocument) )
				{
					return false;
					
				}#end if
				else
				{
					return $desdocument;

				}//end else

		}#end switch

	}#END validate








	public static function validateCNPJ( $desdocument )
	{
		$desdocument = preg_replace('/[^0-9]/', '', (string) $desdocument);

		
		// Valida tamanho
		if (strlen($desdocument) != 14)
			return false;
		// Valida primeiro dígito verificador
		for ($i = 0, $j = 5, $sum = 0; $i < 12; $i++)
		{
			$sum += $desdocument{$i} * $j;
			$j = ($j == 2) ? 9 : $j - 1;
		}

		$rest = $sum % 11;
		if ($desdocument{12} != ($rest < 2 ? 0 : 11 - $rest))
			return false;
		// Valida segundo dígito verificador

		for ($i = 0, $j = 6, $sum = 0; $i < 13; $i++)
		{
			$sum += $desdocument{$i} * $j;
			$j = ($j == 2) ? 9 : $j - 1;
		}

		$rest = $sum % 11;

		return $desdocument{13} == ($rest < 2 ? 0 : 11 - $rest);
	}










	public static function validateCPF($desdocument):bool
	{


	    if (strlen($desdocument) != 11) return false;
	       

	    for ($i = 0, $j = 10, $sum = 0; $i < 9; $i++, $j--)
	        $sum += $desdocument{$i} * $j;
	    $rest = $sum % 11;
	    if ($desdocument{9} != ($rest < 2 ? 0 : 11 - $rest))
	        return false;

	    for ($i = 0, $j = 11, $sum = 0; $i < 10; $i++, $j--)
	        $sum += $desdocument{$i} * $j;
	    $rest = $sum % 11;

	    return ($desdocument{10} == ($rest < 2 ? 0 : 11 - $rest));

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