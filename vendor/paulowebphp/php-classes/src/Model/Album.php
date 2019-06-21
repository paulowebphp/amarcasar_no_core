<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;
use \Core\Rule;




class Album extends Model
{

	# Session
	const SESSION = "AlbumSession";

	# Error - Success
	const SUCCESS = "Album-Success";
	const ERROR = "Album-Error";





    
    public function update()
	{

		$sql = new Sql();

		

		$results = $sql->select("

			CALL sp_albuns_update(
			               
                :idalbum,
                :iduser,
                :instatus,
                :inposition,
                :inphotosize,
                :desalbum,
                :desdescription,
                :descategory,
                :desphoto,
                :desextension

                

			)", 
			
			[

				':idalbum'=>$this->getidalbum(),
				':iduser'=>$this->getiduser(),
				':instatus'=>$this->getinstatus(),
				':inposition'=>$this->getinposition(),
				':inphotosize'=>$this->getinphotosize(),
				':desalbum'=>utf8_decode($this->getdesalbum()),
				':desdescription'=>utf8_decode($this->getdesdescription()),
				':descategory'=>utf8_decode($this->getdescategory()),
				':desphoto'=>$this->getdesphoto(),
				':desextension'=>$this->getdesextension()
				
			]
        
            
        );//end select


		$results[0]['desalbum'] = utf8_encode($results[0]['desalbum']);
		$results[0]['desdescription'] = utf8_encode($results[0]['desdescription']);
		$results[0]['descategory'] = utf8_encode($results[0]['descategory']);

	

		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if

        

	}//END save




	public function getAlbum( $idalbum )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_albuns
			WHERE idalbum = :idalbum

			", 
			
			[

				':idalbum'=>$idalbum

			]
		
		);//end select

		foreach( $results as &$row )
		{
			# code...		
			$row['desalbum'] = utf8_encode($row['desalbum']);
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
			FROM tb_albuns
			WHERE iduser = :iduser

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desalbum'] = utf8_encode($row['desalbum']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

		}//end foreach


		 /**SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X  */

		$nrtotal = $sql->select("
			
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$nrtotal[0]["nrtotal"]

		];//end return


		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if  */

	}//END get






	public function getPage( $iduser, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_albuns
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
			$row['desalbum'] = utf8_encode($row['desalbum']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

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
			FROM tb_albuns
			WHERE iduser = :iduser AND desalbum LIKE :search
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
			$row['desalbum'] = utf8_encode($row['desalbum']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

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







    public function maxAlbuns( $inplan )
	{

		switch( $inplan )
		{
			case '001':
				# code...
				return Rule::MAX_IMAGES_FREE;
				break;

			case '101':
			case '103':
			case '104':
			case '106':
			case '109':
			case '112':
				# code...
				return Rule::MAX_IMAGES_BASIC;
				break;

			case '203':
			case '204':
			case '206':
			case '209':
			case '212':
				# code...
				return Rule::MAX_IMAGES_INTERMEDIATE;
				break;

			case '303':
			case '304':
			case '306':
			case '309':
			case '312':
				# code...
				return Rule::MAX_IMAGES_ADVANCED;
				break;
			
			default:
				# code...
				return Rule::MAX_IMAGES_FREE;
				break;

		}//end switch



	}//END maxEvents



	

	




	public function delete()
	{
		$sql = new Sql();

		$sql->query("
		
			DELETE FROM tb_albuns
			WHERE idalbum = :idalbum
			
			",
			
			[

				':idalbum'=>$this->getidalbum()

			]
		
		);//end query

	}//END delete







	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_albuns

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[Album::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Album::ERROR]) && $_SESSION[Album::ERROR]) ? $_SESSION[Album::ERROR] : '';

		Album::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Album::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Album::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Album::SUCCESS]) && $_SESSION[Album::SUCCESS]) ? $_SESSION[Album::SUCCESS] : '';

		Album::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Album::SUCCESS] = NULL;

	}//END clearSuccess 











}//END class Album




 ?>