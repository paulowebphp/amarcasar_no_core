<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;
use \Core\Rule;




class OuterList extends Model
{

	# Session
	const SESSION = "OuterListSession";

	# Error - Success
	const SUCCESS = "OuterList-Success";
	const ERROR = "OuterList-Error";





    
    public function update()
	{

		$sql = new Sql();

		

		$results = $sql->select("

			CALL sp_outerlists_update(
			               
                :idouterlist,
                :iduser,
                :instatus,
                :inposition,
                :desouterlist,
                :desdescription,
                :dessite,
                :deslocation,
                :nrcountryarea,
                :nrddd,
                :nrphone

			)", 
			
			[

				':idouterlist'=>$this->getidouterlist(),
				':iduser'=>$this->getiduser(),
				':instatus'=>$this->getinstatus(),
				':inposition'=>$this->getinposition(),
				':desouterlist'=>utf8_decode($this->getdesouterlist()),
				':desdescription'=>utf8_decode($this->getdesdescription()),
				':dessite'=>utf8_decode($this->getdessite()),
				':deslocation'=>utf8_decode($this->getdeslocation()),
				':nrcountryarea'=>$this->getnrcountryarea(),
				':nrddd'=>$this->getnrddd(),
				':nrphone'=>$this->getnrphone()
				
			]
        
            
        );//end select
        
		

		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if

        

	}//END save




	public function getOuterList( $idouterlist )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_outerlists
			WHERE idouterlist = :idouterlist

			", 
			
			[

				':idouterlist'=>$idouterlist

			]
		
		);//end select

		foreach( $results as &$row )
		{
			# code...		
			$row['desouterlist'] = utf8_encode($row['desouterlist']);
			$row['deslocation'] = utf8_encode($row['deslocation']);
			$row['desdescription'] = utf8_encode($row['desdescription']);
			$row['dessite'] = utf8_encode($row['dessite']);

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
			FROM tb_outerlists
			WHERE iduser = :iduser

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desouterlist'] = utf8_encode($row['desouterlist']);
			$row['deslocation'] = utf8_encode($row['deslocation']);
			$row['desdescription'] = utf8_encode($row['desdescription']);
			$row['dessite'] = utf8_encode($row['dessite']);

		}//end foreach


		 /**SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X  */

		$nrtotal = $sql->select("
			
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$nrtotal[0]["nrtotal"]

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
			FROM tb_outerlists
			WHERE iduser = :iduser
			LIMIT $start, $itensPerPage;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desouterlist'] = utf8_encode($row['desouterlist']);
			$row['deslocation'] = utf8_encode($row['deslocation']);
			$row['desdescription'] = utf8_encode($row['desdescription']);
			$row['dessite'] = utf8_encode($row['dessite']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$nrtotal = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$nrtotal[0]["nrtotal"],
			'pages'=>ceil($nrtotal[0]["nrtotal"] / $itensPerPage)

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
			FROM tb_outerlists
			WHERE iduser = :iduser AND desouterlist LIKE :search
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
			$row['desouterlist'] = utf8_encode($row['desouterlist']);
			$row['deslocation'] = utf8_encode($row['deslocation']);
			$row['desdescription'] = utf8_encode($row['desdescription']);
			$row['dessite'] = utf8_encode($row['dessite']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$nrtotal = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$nrtotal[0]["nrtotal"],
			'pages'=>ceil($nrtotal[0]["nrtotal"] / $itensPerPage)

		];//end return


		

		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if */

    }//END getSearch







    public function maxOuterLists( $inplan )
	{

		switch( $inplan )
		{
			case '001':
				# code...
				return Rule::MAX_OUTER_LISTS_FREE;
				break;

			case '101':
			case '103':
			case '104':
			case '106':
			case '109':
			case '112':
				# code...
				return Rule::MAX_OUTER_LISTS_BASIC;
				break;

			case '203':
			case '204':
			case '206':
			case '209':
			case '212':
				# code...
				return Rule::MAX_OUTER_LISTS_INTERMEDIATE;
				break;

			case '303':
			case '304':
			case '306':
			case '309':
			case '312':
				# code...
				return Rule::MAX_OUTER_LISTS_ADVANCED;
				break;
			
			default:
				# code...
				return Rule::MAX_OUTER_LISTS_FREE;
				break;

		}//end switch



	}//END maxEvents



	

	




	public function delete()
	{
		$sql = new Sql();

		$sql->query("
		
			DELETE FROM tb_outerlists
			WHERE idouterlist = :idouterlist
			
			",
			
			[

				':idouterlist'=>$this->getidouterlist()

			]
		
		);//end query

	}//END delete







	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_outerlists

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[OuterList::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[OuterList::ERROR]) && $_SESSION[OuterList::ERROR]) ? $_SESSION[OuterList::ERROR] : '';

		OuterList::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[OuterList::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[OuterList::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[OuterList::SUCCESS]) && $_SESSION[OuterList::SUCCESS]) ? $_SESSION[OuterList::SUCCESS] : '';

		OuterList::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[OuterList::SUCCESS] = NULL;

	}//END clearSuccess 













}//END class OuterList




 ?>