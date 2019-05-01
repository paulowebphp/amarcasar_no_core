<?php 

namespace Hcode\Model;


use \Hcode\DB\Sql;
use \Hcode\Model;




class Wedding extends Model
{

	# Session
	const SESSION = "WeddingSession";

	# Error - Success
	const SUCCESS = "Wedding-Success";
	const ERROR = "Wedding-Error";





    
    public function update()
	{

		$sql = new Sql();
		
       
		$results = $sql->select("

			CALL sp_weddings_update(

				:idwedding,
				:iduser,
                :desweddingdescription,
                :desweddinglocation,
				:desweddingphoto,
				:dtwedding


			)", 
			
			[

				':idwedding'=>$this->getidwedding(),
				':iduser'=>$this->getiduser(),
				':desweddingdescription'=>utf8_decode($this->getdesweddingdescription()),
				':desweddinglocation'=>utf8_decode($this->getdesweddinglocation()),
				':desweddingphoto'=>$this->getdesweddingphoto(),
				':dtwedding'=>$this->getdtwedding()

			]
		
		);//end select

        foreach( $results as &$row )
		{
			# code...		
			$row['desweddingdescription'] = utf8_encode($row['desweddingdescription']);
			$row['desweddinglocation'] = utf8_encode($row['desweddinglocation']);

		}//end foreach

		

		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if

        

	}//END save







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

		foreach( $results as &$row )
		{
			# code...		
			$row['desweddingdescription'] = utf8_encode($row['desweddingdescription']);
			$row['desweddinglocation'] = utf8_encode($row['desweddinglocation']);

		}//end foreach

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