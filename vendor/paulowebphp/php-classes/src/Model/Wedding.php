<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;




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
                :desdescription,
                :deslocation,
				:desphoto,
				:desextension,
				:tmwedding,
				:dtwedding


			)", 
			
			[

				':idwedding'=>$this->getidwedding(),
				':iduser'=>$this->getiduser(),
				':desdescription'=>utf8_decode($this->getdesdescription()),
				':deslocation'=>utf8_decode($this->getdeslocation()),
				':desphoto'=>$this->getdesphoto(),
				':desextension'=>$this->getdesextension(),
				':tmwedding'=>$this->gettmwedding(),
				':dtwedding'=>$this->getdtwedding()

			]
		
		);//end select


		$results[0]['desdescription'] = utf8_encode($results[0]['desdescription']);
		$results[0]['deslocation'] = utf8_encode($results[0]['deslocation']);

		


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


		$results[0]['desdescription'] = utf8_encode($results[0]['desdescription']);
		$results[0]['deslocation'] = utf8_encode($results[0]['deslocation']);

		

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










}//END class Wedding




?>