<?php 

namespace Hcode\Model;


use \Hcode\DB\Sql;
use \Hcode\Model;




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

			CALL sp_bestfriendsupdate_save(
			               
                :idbestfriend,
                :iduser,
                :instatus,
                :inposition,
                :desname,
                :desdescription,
                :desphoto,
                :desthumbnail

			)", 
			
			[

				':idbestfriend'=>$this->getidbestfriend(),
				':iduser'=>$this->getiduser(),
				':instatus'=>$this->getinstatus(),
				':inposition'=>$this->getinposition(),
				':desname'=>utf8_decode($this->getdesname()),
				':desdescription'=>utf8_decode($this->getdesdescription()),
				':desphoto'=>$this->getdesphoto(),
				':desthumbnail'=>$this->getdesthumbnail()
				
			]
        
            
        );//end select
        


		if( count($results) > 0 )
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
			$row['desname'] = utf8_encode($row['desname']);
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

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desname'] = utf8_encode($row['desname']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

		}//end foreach


		$numBestFriends = $sql->select("
		
			SELECT FOUND_ROWS() AS nrbestfriends;
			
		");//end select

		return [

			'results'=>$results,
			'numBestFriends'=>(int)$numBestFriends[0]["nrbestfriends"]

		];//end return


		

		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if */

	}//END get




	

	




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