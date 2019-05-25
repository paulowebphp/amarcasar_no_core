<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;
use \Core\Rule;




class Message extends Model
{

	# Session
	const SESSION = "MessageSession";

	# Error - Success
	const SUCCESS = "Message-Success";
	const ERROR = "Message-Error";





    
    public function update()
	{

		$sql = new Sql();

		
		$results = $sql->select("

			CALL sp_messages_update(
			               
                :idmessage,
                :iduser,
                :inmessagestatus,
                :desmessage,
                :desemail,
                :desdescription

			)", 
			
			[

				':idmessage'=>$this->getidmessage(),
                ':iduser'=>$this->getiduser(),
                ':inmessagestatus'=>$this->getinmessagestatus(),
                ':desmessage'=>utf8_decode($this->getdesmessage()),
                ':desemail'=>$this->getdesemail(),
				':desdescription'=>utf8_decode($this->getdesdescription())
				
			]
        
            
        );//end select



		if( count($results) > 0 )
		{

			$this->setData($results[0]);

        }//end if
        
       

	}//END save




	public function getMessage( $idmessage )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_messages
			WHERE idmessage = :idmessage

			", 
			
			[

				':idmessage'=>$idmessage

			]
		
		);//end select

		foreach( $results as &$row )
		{
			# code...		
			$row['desmessage'] = utf8_encode($row['desmessage']);
			$row['desdescription'] = utf8_encode($row['desdescription']);
			
		}//end foreach

		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END getEvent





    
	public function get( $iduser )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_messages
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
            $row['desmessage'] = utf8_encode($row['desmessage']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

		}//end foreach


		 /**SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X  */

		$numMessages = $sql->select("
			
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$numMessages[0]["nrtotal"]

		];//end return


	
	}//END get







	public function getFromHash( $hash )
	{

		$idmessage = base64_decode($hash);



		$sql = new Sql();

		$results = $sql->select("

			SELECT * FROM tb_messages 
			WHERE idmessage = :idmessage

			",  
			
			[

				":idmessage"=>$idmessage

			]

		);//end select

		

		

		if( count($results[0]) > 0 )
		{

			$this->setData($results[0]);


		}//end if


	}//END getFromHash

















	public function getPage( $iduser, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_messages
            WHERE iduser = :iduser
            ORDER BY dtregister DESC
			LIMIT $start, $itensPerPage;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		


		foreach( $results as &$row )
		{
			# code...		
            $row['desmessage'] = utf8_encode($row['desmessage']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numMessages = $sql->select("
		
			SELECT FOUND_ROWS() AS nummessages;
			
		");//end select

		return [

			'results'=>$results,
			'nummessages'=>(int)$numMessages[0]["nummessages"],
			'pages'=>ceil($numMessages[0]["nummessages"] / $itensPerPage)

		];//end return


		

		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if */

    }//END getPage
    




    public function getSearch( $iduser, $search, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_messages
            WHERE iduser = :iduser AND desmessage LIKE :search
            ORDER BY dtmessage DESC
			LIMIT $start, $itensPerPage;

			", 
			
			[

				':iduser'=>$iduser,
				':search'=>'%'.$search.'%'

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desmessage'] = utf8_encode($row['desmessage']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numMessages = $sql->select("
		
			SELECT FOUND_ROWS() AS nummessages;
			
		");//end select

		return [

			'results'=>$results,
			'nummessages'=>(int)$numMessages[0]["nummessages"],
			'pages'=>ceil($numMessages[0]["nummessages"] / $itensPerPage)

		];//end return


		

		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if */

    }//END getSearch









    public function aproveMessage()
	{
		    

		$sql = new Sql();

		$sql->query("

			UPDATE tb_messages
			SET inmessagestatus = 1
			WHERE idmessage = :idmessage
			AND iduser =:iduser

			", 
			
			[

				
				':idmessage'=>$this->getidmessage(),
				':iduser'=>$this->getiduser()

			]
		
		);//end query


	}//END aproveMessage







	public function moderateMessage()
	{

			

		$sql = new Sql();

		$sql->query("

			UPDATE tb_messages
			SET inmessagestatus = 0
			WHERE idmessage = :idmessage
			AND iduser =:iduser

			", 
			
			[

				':idmessage'=>$this->getidmessage(),
				':iduser'=>$this->getiduser()


			]
		
		);//end query

	}//END moderateMessage











    public function maxMessages( $inplan )
	{

		switch( $inplan )
		{
			case '001':
				# code...
				return Rule::MAX_MESSAGES_FREE;
				break;

			case '101':
			case '103':
			case '104':
			case '106':
			case '109':
			case '112':
				# code...
				return Rule::MAX_MESSAGES_BASIC;
				break;

			case '203':
			case '204':
			case '206':
			case '209':
			case '212':
				# code...
				return Rule::MAX_MESSAGES_INTERMEDIATE;
				break;

			case '303':
			case '304':
			case '306':
			case '309':
			case '312':
				# code...
				return Rule::MAX_MESSAGES_ADVANCED;
				break;
			
			default:
				# code...
				return Rule::MAX_MESSAGES_FREE;
				break;

		}//end switch



	}//END maxEvents



	

	




	public function delete()
	{
		$sql = new Sql();

		$sql->query("
		
			DELETE FROM tb_messages
			WHERE idmessage = :idmessage
			
			",
			
			[

				':idmessage'=>$this->getidmessage()

			]
		
		);//end query

	}//END delete







	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_messages

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[Message::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Message::ERROR]) && $_SESSION[Message::ERROR]) ? $_SESSION[Message::ERROR] : '';

		Message::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Message::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Message::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Message::SUCCESS]) && $_SESSION[Message::SUCCESS]) ? $_SESSION[Message::SUCCESS] : '';

		Message::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Message::SUCCESS] = NULL;

	}//END clearSuccess 










}//END class Message




 ?>