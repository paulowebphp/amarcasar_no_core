<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;
use \Core\Rule;




class Consort extends Model
{

	# Session
	const SESSION = "ConsortSession";

	# Error - Success
	const SUCCESS = "Consort-Success";
	const ERROR = "Consort-Error";





    
    public function update()
	{

		$sql = new Sql();

		

		$results = $sql->select("

			CALL sp_bestfriends_update(
			               
                :idbestfriend,
                :iduser,
                :instatus,
                :inposition,
                :desbestfriend,
                :desdescription,
                :desphoto,
                :desextension

			)", 
			
			[

				':idbestfriend'=>$this->getidbestfriend(),
				':iduser'=>$this->getiduser(),
				':instatus'=>$this->getinstatus(),
				':inposition'=>$this->getinposition(),
				':desbestfriend'=>utf8_decode($this->getdesbestfriend()),
				':desdescription'=>utf8_decode($this->getdesdescription()),
				':desphoto'=>$this->getdesphoto(),
				':desextension'=>$this->getdesextension()
				
			]
        
            
        );//end select
		
		
		

		if( count($results[0]) > 0 )
		{

			$this->setData($results[0]);

		}//end if

		

	}//END save




	public function getConsort( $idbestfriend )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_bestfriends
			WHERE idbestfriend = :idbestfriend
			

			", 
			
			[

				':idbestfriend'=>$idbestfriend

			]
		
		);//end select

		foreach( $results as &$row )
		{
			# code...		
			$row['desbestfriend'] = utf8_encode($row['desbestfriend']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

		}//end foreach

		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END getConsort







	public function getUserConsort( $iduser )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_consorts a
			WHERE iduser = :iduser
			

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select

		foreach( $results as &$row )
		{
			# code...		
			$row['desconsort'] = utf8_encode($row['desconsort']);

		}//end foreach

		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END getUserConsort







	public function get( $iduser )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_consorts
			WHERE iduser = :iduser

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		$results[0]['desconsort'] = utf8_encode($results[0]['desconsort']);

		

		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if


	}//END get













	public function getWithLimit( $iduser, $inplan )
	{

		$limit = $this->maxBestFriends($inplan);

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_bestfriends
			WHERE iduser = :iduser
			ORDER BY dtregister DESC
			LIMIT $limit

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desbestfriend'] = utf8_encode($row['desbestfriend']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numBestFriends = $sql->select("
		
			SELECT FOUND_ROWS() AS numbestfriends;
			
		");//end select

		return [

			'results'=>$results,
			'numbestfriends'=>(int)$numBestFriends[0]["numbestfriends"]

		];//end return


	}//END getWithLimit









	



	/**public function deleteWithId( $idbestfriend )
	{

		
		$sql = new Sql();

		$sql->query("
		
			DELETE FROM tb_bestfriends
			WHERE idbestfriend = :idbestfriend
			
			",
			
			[

				':idbestfriend'=>$idbestfriend

			]
		
		);//end query

	}//END delete */

	

	




	public function delete()
	{

		$sql = new Sql();

		$sql->query("
		
			DELETE FROM tb_bestfriends
			WHERE idbestfriend = :idbestfriend
			
			",
			
			[

				':idbestfriend'=>$this->getidbestfriend()

			]
		
		);//end query


	}//END delete





	


	public function deletePhoto( $basename )
	{
		try 
		{
			//code...
			if( 
			
				$basename != '0.jpg'
				||
				$basename != ''
				||
				!is_null($basename)
			
			)
			{
		
	
				$filename = $_SERVER['DOCUMENT_ROOT'] . 
				DIRECTORY_SEPARATOR . "uploads" . 
				DIRECTORY_SEPARATOR . "images" . 
				DIRECTORY_SEPARATOR . 
				$basename;
				
				unlink( $filename );
	
				return true;
	
			}//end if

		}//end try
		catch (\Throwable $th) 
		{
			//throw $th;
			return false;

		}//end catch

	}//END delete








	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_bestfriends

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[Consort::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Consort::ERROR]) && $_SESSION[Consort::ERROR]) ? $_SESSION[Consort::ERROR] : '';

		Consort::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Consort::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Consort::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Consort::SUCCESS]) && $_SESSION[Consort::SUCCESS]) ? $_SESSION[Consort::SUCCESS] : '';

		Consort::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Consort::SUCCESS] = NULL;

	}//END clearSuccess 









	public function toSession()
	{
		$_SESSION[Consort::SESSION] = $this->getValues();

	}//END toSession







	public function getFromSession()
	{

		$this->setData($_SESSION[Consort::SESSION]);

	}//END getFromSession









}//END class Consort




 ?>