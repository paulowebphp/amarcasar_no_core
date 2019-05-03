<?php 

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Rule;



class Gift extends Model
{

	# Session
	const SESSION = "GiftSession";

	# Error - Success
	const SUCCESS = "Gift-Success";
	const ERROR = "Gift-Error";






    public static function listAll()
	{
		$sql = new Sql();

		return $sql->select("
		
			SELECT * FROM tb_gifts 
            ORDER BY incategory ASC
            LIMIT 15
			
		");//end select
		
	}//END listAll








    public function getGift( $idgift )
	{
        

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_gifts
			WHERE idgift = :idgift
			

			", 
			
			[

				':idgift'=>$idgift

			]
		
		);//end select

		foreach( $results as &$row )
		{
			# code...		
			$row['desgift'] = utf8_encode($row['desgift']);
	
        }//end foreach
        
        
        
		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END getGift









	public static function setError( $msg )
	{

		$_SESSION[Gift::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Gift::ERROR]) && $_SESSION[Gift::ERROR]) ? $_SESSION[Gift::ERROR] : '';

		Gift::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Gift::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Gift::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Gift::SUCCESS]) && $_SESSION[Gift::SUCCESS]) ? $_SESSION[Gift::SUCCESS] : '';

		Gift::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Gift::SUCCESS] = NULL;

	}//END clearSuccess 









}//END class Gift





 ?>