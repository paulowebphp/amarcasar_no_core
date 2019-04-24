<?php 

namespace Hcode\Model;


use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Cart;
use \Hcode\Model\Address;



class Wedding extends Model
{

	# Session
	const SESSION = "WeddingSession";

	# Error - Success
	const SUCCESS = "Wedding-Success";
	const ERROR = "Wedding-Error";





	public function get( $iduser )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_weddings
			WHERE iduser = :iduser

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select

		$results[0]['desconsortname'] = utf8_encode($results[0]['desconsortname']);
		$results[0]['desweddinglocation'] = utf8_encode($results[0]['desweddinglocation']);
		$results[0]['desweddingdescription'] = utf8_encode($results[0]['desweddingdescription']);
		$results[0]['despartylocation'] = utf8_encode($results[0]['despartylocation']);
		$results[0]['despartydescription'] = utf8_encode($results[0]['despartydescription']);

		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END get







	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_weddings

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[Wedding::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Wedding::ERROR]) && $_SESSION[Wedding::ERROR]) ? $_SESSION[Wedding::ERROR] : '';

		Wedding::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Wedding::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Wedding::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Wedding::SUCCESS]) && $_SESSION[Wedding::SUCCESS]) ? $_SESSION[Wedding::SUCCESS] : '';

		Wedding::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Wedding::SUCCESS] = NULL;

	}//END clearSuccess 









	public function toSession()
	{
		$_SESSION[Wedding::SESSION] = $this->getValues();

	}//END toSession







	public function getFromSession()
	{

		$this->setData($_SESSION[Wedding::SESSION]);

	}//END getFromSession









}//END class Wedding




 ?>