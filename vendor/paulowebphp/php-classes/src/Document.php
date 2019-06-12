<?php 

namespace Core;

use \Core\Model;





class Document extends Model
{


	const SESSION_ERROR = "DocumentError";




	public static function validate( $type, $desdocument )
	{

		if( !$desdocument )
		{
			return false;
			
		}#end if

		$desdocument = trim($desdocument);
		$desdocument = str_replace(" ", "", $desdocument);
		$desdocument = str_replace(".", "", $desdocument);



		switch ($type) 
		{
			case 0:
				# code...
				$desdocument = str_replace("-", "", $desdocument);


				if( !Document::validateCPF($desdocument) )
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

		$number = preg_replace('/[^0-9]/', '', (string) $number);

	    if (strlen($number) != 11)
	        return false;

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

		$_SESSION[Document::SESSION_ERROR] = $msg;


	}//END setMsgErro





	public static function getError()
	{

		$msg = (isset($_SESSION[Document::SESSION_ERROR])) ? $_SESSION[Document::SESSION_ERROR] : "";

		Document::clearError();

		return $msg;

	}//END getMsgErro





	public static function clearError()
	{

		$_SESSION[Document::SESSION_ERROR] = NULL;

	}//END clearMsgError





}//END class Document





 ?>