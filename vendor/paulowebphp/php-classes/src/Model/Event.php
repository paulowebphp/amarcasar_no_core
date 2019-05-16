<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;




class Event extends Model
{

	# Session
	const SESSION = "EventSession";

	# Error - Success
	const SUCCESS = "Event-Success";
	const ERROR = "Event-Error";





    
    public function update()
	{

		$sql = new Sql();

		

		$results = $sql->select("

			CALL sp_events_update(
							
				:idevent,
				:iduser,
				:instatus,
				:desevent,
				:desdescription,
				:deslocation,
				:nrphone,
				:desphoto,
				:dtevent	

			)", 
			
			[

				':idevent'=>$this->getidevent(),
				':iduser'=>$this->getiduser(),
				':instatus'=>$this->getinstatus(),
				':desevent'=>utf8_decode($this->getdesevent()),
				':desdescription'=>utf8_decode($this->getdesdescription()),
				':deslocation'=>utf8_decode($this->getdeslocation()),
				':nrphone'=>$this->getnrphone(),
				':desphoto'=>$this->getdesphoto(),
				':dtevent'=>$this->getdtevent()
				
			]
        
            
		);//end select

		
		
						
			$results[0]['desevent'] = utf8_encode($results[0]['desevent']);
			$results[0]['desdescription'] = utf8_encode($results[0]['desdescription']);
			$results[0]['deslocation'] = utf8_encode($results[0]['deslocation']);

		

		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if

        

	}//END save




	public function getEvent( $idevent )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_events
			WHERE idevent = :idevent

			", 
			
			[

				':idevent'=>$idevent

			]
		
		);//end select

		foreach( $results as &$row )
		{
			# code...		
			$row['desevent'] = utf8_encode($row['desevent']);
			$row['desdescription'] = utf8_encode($row['desdescription']);
			$row['deslocation'] = utf8_encode($row['deslocation']);

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
			FROM tb_events
			WHERE iduser = :iduser
			ORDER BY dtevent ASC

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desevent'] = utf8_encode($row['desevent']);
			$row['desdescription'] = utf8_encode($row['desdescription']);
			$row['deslocation'] = utf8_encode($row['deslocation']);

		}//end foreach


		 /**SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X  */

		$numEvents = $sql->select("
			
			SELECT FOUND_ROWS() AS numevents;
			
		");//end select

		return [

			'results'=>$results,
			'numevents'=>(int)$numEvents[0]["numevents"]

		];//end return


		

		if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if 

	}//END get






	public function getPage( $iduser, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_events
			WHERE iduser = :iduser
			ORDER BY dtevent ASC
			LIMIT $start, $itensPerPage;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desevent'] = utf8_encode($row['desevent']);
			$row['desdescription'] = utf8_encode($row['desdescription']);
			$row['deslocation'] = utf8_encode($row['deslocation']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numEvents = $sql->select("
		
			SELECT FOUND_ROWS() AS numevents;
			
		");//end select

		return [

			'results'=>$results,
			'numevents'=>(int)$numEvents[0]["numevents"],
			'pages'=>ceil($numEvents[0]["numevents"] / $itensPerPage)

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
			FROM tb_events
			WHERE iduser = :iduser AND desevent LIKE :search
			ORDER BY dtevent ASC
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
			$row['desevent'] = utf8_encode($row['desevent']);
			$row['desdescription'] = utf8_encode($row['desdescription']);
			$row['deslocation'] = utf8_encode($row['deslocation']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numEvents = $sql->select("
		
			SELECT FOUND_ROWS() AS numevents;
			
		");//end select

		return [

			'results'=>$results,
			'numevents'=>(int)$numEvents[0]["numevents"],
			'pages'=>ceil($numEvents[0]["numevents"] / $itensPerPage)

		];//end return


		

		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if */

    }//END getSearch







    public function maxEvents( $inplan )
	{

		switch( $inplan )
		{
			case '001':
				# code...
				return Rule::MAX_EVENTS_FREE;
				break;

			case '101':
			case '103':
			case '104':
			case '106':
			case '109':
			case '112':
				# code...
				return Rule::MAX_EVENTS_BASIC;
				break;

			case '203':
			case '204':
			case '206':
			case '209':
			case '212':
				# code...
				return Rule::MAX_EVENTS_INTERMEDIATE;
				break;

			case '303':
			case '304':
			case '306':
			case '309':
			case '312':
				# code...
				return Rule::MAX_EVENTS_ADVANCED;
				break;
			
			default:
				# code...
				return Rule::MAX_EVENTS_FREE;
				break;

		}//end switch



	}//END maxEvents



	

	




	public function delete()
	{
		$sql = new Sql();

		$sql->query("
		
			DELETE FROM tb_events
			WHERE idevent = :idevent
			
			",
			
			[

				':idevent'=>$this->getidevent()

			]
		
		);//end query

	}//END delete







	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_events

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[Event::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Event::ERROR]) && $_SESSION[Event::ERROR]) ? $_SESSION[Event::ERROR] : '';

		Event::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Event::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Event::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Event::SUCCESS]) && $_SESSION[Event::SUCCESS]) ? $_SESSION[Event::SUCCESS] : '';

		Event::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Event::SUCCESS] = NULL;

	}//END clearSuccess 









	public function toSession()
	{
		$_SESSION[Event::SESSION] = $this->getValues();

	}//END toSession







	public function getFromSession()
	{

		$this->setData($_SESSION[Event::SESSION]);

	}//END getFromSession






	/**public function get( $iduser )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_events
			WHERE iduser = :iduser

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desevent'] = utf8_encode($row['desevent']);
			$row['desdescription'] = utf8_encode($row['desdescription']);
			$row['deslocation'] = utf8_encode($row['deslocation']);

		}//end foreach

		 SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X 
		$numEvents = $sql->select("
		
		SELECT FOUND_ROWS() AS numevents;
		
	");//end select

	return [

		'results'=>$results,
		'numevents'=>(int)$numEvents[0]["numevents"]

	];//end return


	

	if( count($results) > 0 )
	{

		$this->setData($results);
		
	}//end if 

}//END get */








}//END class Event




 ?>