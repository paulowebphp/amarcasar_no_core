<?php 

namespace Core;


use \Core\Model;




class Validate extends Model
{



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






	public static function validateString( $string, $may_be_empty = false )
	{

		$string = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"), $string);
		

		$string = preg_replace('/[^A-Za-z0-9çÇ\s_-]/', '', $string);

		$string = trim($string);

		



		if( !$may_be_empty )
		{


			if( $string != '')
			{
				return $string;

			}//end if
			else
			{
				return false;

			}//end else



		}//end
		else
		{

			return $string;

		}//end else


		


	}//end validateString













	public static function validateDomain( $string )
	{

		$string = trim($string);

		if( 

			strlen($string) > 2
			&&
			preg_match('/^[a-z0-9-_]+$/', $string) 

		)
		{
			return $string;

		}//end if
		else
		{

			return false;


		}//end else

		

		



	}//end validateString
















	public static function validateNumber( $desnumber )
	{
		


		$number = preg_replace('/[^0-9]/', '', $desnumber);

			

		if( $number != '')
		{

			return $number;

		}//end if
		else
		{
			return false;

		}//end else


	}//END formatNumber











	public static function validateStatus( $status )
	{

		

		

		if( preg_match('/^([0-1]{1})$/', $status) )
		{

			return true;


		}//end if
		else
		{
			return false;
		}


	}//END validateStatus


















	public static function validateDate( $date, $halo )
	{


		if( (bool)preg_match('/^([0-9]{4})[-.\/]([0-9]{2})[-.\/]([0-9]{2})$/', $date) == true )
		{

			$dt_input = new \DateTime($date);

			$dt_150_year = new \DateTime(date('Y-m-d') . ' - 150 year');
			




			if( $dt_input >= $dt_150_year )
			{



				switch ( $halo ) 
				{



					case 0:
						// de 150 anos para cá até a data atual
						$now = new \DateTime(date('Y-m-d'));

						
						if( $dt_input <= $now )
						{
							return $date;
						}//end if
						else
						{
							return false;
						}//end else




					case 1:
						// da data atual até inifinito dentro do formato de 4 digitos
						$now = new \DateTime(date('Y-m-d'));


						if( $dt_input >= $now )
						{
							return $date;
						}//end if
						else
						{
							return false;
						}//end else


					case 2:
						// desde 150 anos para cá até inifinito dentro do formato de 4 digitos
						return $date;

					
					
				}//end switch






			}//end if
			else
			{
				//-150 anos
				return false;

			}//end else




		}//end if 
		else
		{	

			//wrong format date
			return false;


		}//end else
		




	}//END validateDate












	public static function validateTime( $time )
	{


		if( 

			(bool)preg_match('/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]:[0-5][0-9]$/', $time)
			||
			(bool)preg_match('/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/', $time)

		 )
		{

			return $time;

			
		}//end if 
		else
		{	

			//wrong format date
			return false;


		}//end else
		


	}//END validateTime












	public static function validateUserMajority( $date )
	{


		if( (bool)preg_match('/^([0-9]{4})[-.\/]([0-9]{2})[-.\/]([0-9]{2})$/', $date) == true )
		{

			$dt_input = new \DateTime($date);

			$dt_150_year = new \DateTime(date('Y-m-d') . ' - 150 year');
			




			if( $dt_input >= $dt_150_year )
			{



				$dt_majority = new \DateTime(date('Y-m-d') . ' - 18 year');



				if( $dt_input <= $dt_majority )
				{
					return $date;

				}//end if
				else
				{
					return false;

				}//end else




			}//end if
			else
			{
				//-150 anos
				return false;

			}//end else




		}//end if 
		else
		{	

			//wrong format date
			return false;


		}//end else
		




	}//END validateUserMajority













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











	public static function validatePlanEnd( $dtplanend )
	{


		if( $dtplanend != null )
		{

			//$timezone = new DateTimeZone('America/Sao_Paulo');

			$dt_now = new \DateTime('now');

			//$dt_now->setTimezone($timezone);

			$dt_plan_end = new \DateTime($dtplanend);

			//$dtplanend->setTimezone($timezone);

			


			if( $dt_plan_end > $dt_now )
			{
				return true;
			}//end if
			else
			{
				return false;
			}

			
			
		}//end if
		else
		{


			return false;

		}//end else


		


	}//validatePlanEnd












	public static function validatePlanFree( $inplancontext )
	{


		if( (int)$inplancontext != 0 )
		{
			
			return false;
							
			
		}//end if
		else
		{
			
			return true;

		}//end else


	}//validatePlanEnd











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