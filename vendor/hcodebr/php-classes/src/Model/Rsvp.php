<?php 

namespace Hcode\Model;


use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Rule;




class Rsvp extends Model
{

	# Session
	const SESSION = "RsvpSession";

	# Error - Success
	const SUCCESS = "Rsvp-Success";
	const ERROR = "Rsvp-Error";





    
    public function update()
	{

		$sql = new Sql();

		
		$results = $sql->select("

			CALL sp_rsvpupdate_save(
			               
                :idrsvp,
                :iduser,
                :desname,
                :desemail,
                :nrphone,
                :instatus,
                :inconfirmed,
                :inmaxadults,
                :inadultsconfirmed,
                :inmaxchildren,
                :inchildrenconfirmed,
                :dtconfirmed

			)", 
			
			[

				':idrsvp'=>$this->getidrsvp(),
				':iduser'=>$this->getiduser(),
				':desname'=>utf8_decode($this->getdesname()),
				':desemail'=>$this->getdesemail(),
				':nrphone'=>$this->getnrphone(),
				':instatus'=>$this->getinstatus(),
				':inconfirmed'=>$this->getinconfirmed(),
				':inmaxadults'=>$this->getinmaxadults(),
				':inadultsconfirmed'=>$this->getinadultsconfirmed(),
				':inmaxchildren'=>$this->getinmaxchildren(),
				':inchildrenconfirmed'=>$this->getinchildrenconfirmed(),
				':dtconfirmed'=>$this->getdtconfirmed()
				
			]
        
            
        );//end select


		if( count($results) > 0 )
		{

			$this->setData($results[0]);

        }//end if
        
       

	}//END save




	public function getRsvp( $idrsvp )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_rsvp
			WHERE idrsvp = :idrsvp

			", 
			
			[

				':idrsvp'=>$idrsvp

			]
		
		);//end select

		foreach( $results as &$row )
		{
			# code...		
			$row['desname'] = utf8_encode($row['desname']);
			

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
			FROM tb_rsvp
            WHERE iduser = :iduser
            ORDER BY desname ASC

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
            $row['desname'] = utf8_encode($row['desname']);

		}//end foreach


		 /**SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X  */

		$numRsvp = $sql->select("
			
			SELECT FOUND_ROWS() AS numrsvp;
			
		");//end select

		return [

			'results'=>$results,
			'numrsvp'=>(int)$numRsvp[0]["numrsvp"]

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
			FROM tb_rsvp
            WHERE iduser = :iduser
            ORDER BY desname ASC
			LIMIT $start, $itensPerPage;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
            $row['desname'] = utf8_encode($row['desname']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numRsvp = $sql->select("
		
			SELECT FOUND_ROWS() AS numrsvp;
			
		");//end select

		return [

			'results'=>$results,
			'numrsvp'=>(int)$numRsvp[0]["numrsvp"],
			'pages'=>ceil($numRsvp[0]["numrsvp"] / $itensPerPage)

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
			FROM tb_rsvp
            WHERE iduser = :iduser AND desname LIKE :search
            ORDER BY desname ASC
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
		$numRsvp = $sql->select("
		
			SELECT FOUND_ROWS() AS numrsvp;
			
		");//end select

		return [

			'results'=>$results,
			'numrsvp'=>(int)$numRsvp[0]["numrsvp"],
			'pages'=>ceil($numRsvp[0]["numrsvp"] / $itensPerPage)

		];//end return


		

		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if */

    }//END getSearch







    public function maxRsvp( $inplan )
	{

		switch( $inplan )
		{
			case '001':
				# code...
				return Rule::MAX_RSVP_FREE;
				break;

			case '101':
			case '103':
			case '104':
			case '106':
			case '109':
			case '112':
				# code...
				return Rule::MAX_RSVP_BASIC;
				break;

			case '203':
			case '204':
			case '206':
			case '209':
			case '212':
				# code...
				return Rule::MAX_RSVP_INTERMEDIATE;
				break;

			case '303':
			case '304':
			case '306':
			case '309':
			case '312':
				# code...
				return Rule::MAX_RSVP_ADVANCED;
				break;
			
			default:
				# code...
				return Rule::MAX_RSVP_FREE;
				break;

		}//end switch



	}//END maxEvents



	

	




	public function delete()
	{
		$sql = new Sql();

		$sql->query("
		
			DELETE FROM tb_rsvp
			WHERE idrsvp = :idrsvp
			
			",
			
			[

				':idrsvp'=>$this->getidrsvp()

			]
		
		);//end query

	}//END delete







	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_rsvp

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[Rsvp::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Rsvp::ERROR]) && $_SESSION[Rsvp::ERROR]) ? $_SESSION[Rsvp::ERROR] : '';

		Rsvp::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Rsvp::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Rsvp::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Rsvp::SUCCESS]) && $_SESSION[Rsvp::SUCCESS]) ? $_SESSION[Rsvp::SUCCESS] : '';

		Rsvp::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Rsvp::SUCCESS] = NULL;

	}//END clearSuccess 









	public function toSession()
	{
		$_SESSION[Rsvp::SESSION] = $this->getValues();

	}//END toSession







	public function getFromSession()
	{

		$this->setData($_SESSION[Rsvp::SESSION]);

	}//END getFromSession











}//END class Rsvp




 ?>