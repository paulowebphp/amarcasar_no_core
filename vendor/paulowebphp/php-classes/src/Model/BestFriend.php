<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;
use \Core\Rule;




class BestFriend extends Model
{

	# Session
	const SESSION = "BestFriendSession";

	# Error - Success
	const SUCCESS = "BestFriend-Success";
	const ERROR = "BestFriend-Error";





    
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
		
		$results[0]['desbestfriend'] = utf8_encode($results[0]['desbestfriend']);
		$results[0]['desdescription'] = utf8_encode($results[0]['desdescription']);
		

		
		


		if( count($results[0]) > 0 )
		{

			$this->setData($results[0]);

		}//end if

		

	}//END save




	public function getBestFriend( $idbestfriend )
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

	}//END getBestFriend







	public function get( $iduser )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_bestfriends
			WHERE iduser = :iduser
			ORDER BY dtregister DESC

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
		$nrtotal = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$nrtotal[0]["nrtotal"]

		];//end return


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









	public function maxBestFriends( $inplan )
	{

		switch( $inplan )
		{
			case '001':
				# code...
				return Rule::MAX_BESTFRIENDS_FREE;
				break;

			case '101':
			case '103':
			case '104':
			case '106':
			case '109':
			case '112':
				# code...
				return Rule::MAX_BESTFRIENDS_BASIC;
				break;

			case '203':
			case '204':
			case '206':
			case '209':
			case '212':
				# code...
				return Rule::MAX_BESTFRIENDS_INTERMEDIATE;
				break;

			case '303':
			case '304':
			case '306':
			case '309':
			case '312':
				# code...
				return Rule::MAX_BESTFRIENDS_ADVANCED;
				break;
			
			default:
				# code...
				return Rule::MAX_BESTFRIENDS_FREE;
				break;

		}//end switch



	}//END maxBestFriends







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

		$_SESSION[BestFriend::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[BestFriend::ERROR]) && $_SESSION[BestFriend::ERROR]) ? $_SESSION[BestFriend::ERROR] : '';

		BestFriend::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[BestFriend::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[BestFriend::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[BestFriend::SUCCESS]) && $_SESSION[BestFriend::SUCCESS]) ? $_SESSION[BestFriend::SUCCESS] : '';

		BestFriend::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[BestFriend::SUCCESS] = NULL;

	}//END clearSuccess 









	public function toSession()
	{
		$_SESSION[BestFriend::SESSION] = $this->getValues();

	}//END toSession







	public function getFromSession()
	{

		$this->setData($_SESSION[BestFriend::SESSION]);

	}//END getFromSession









}//END class BestFriend




 ?>