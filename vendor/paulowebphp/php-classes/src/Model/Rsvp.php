<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;
use \Core\Rule;




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

			CALL sp_rsvp_update(
			               
                :idrsvp,
                :iduser,
                :desguest,
                :desemail,
                :nrphone,
                :inconfirmed,
                :inmaxadults,
                :inadultsconfirmed,
                :inmaxchildren,
                :inchildrenconfirmed,
                :desguestaccompanies,
                :dtconfirmed




			)", 
			
			[

				':idrsvp'=>$this->getidrsvp(),
				':iduser'=>$this->getiduser(),
				':desguest'=>utf8_decode($this->getdesguest()),
				':desemail'=>$this->getdesemail(),
				':nrphone'=>$this->getnrphone(),
				':inconfirmed'=>$this->getinconfirmed(),
				':inmaxadults'=>$this->getinmaxadults(),
				':inadultsconfirmed'=>$this->getinadultsconfirmed(),
				':inmaxchildren'=>$this->getinmaxchildren(),
				':inchildrenconfirmed'=>$this->getinchildrenconfirmed(),
				':desguestaccompanies'=>$this->getdesguestaccompanies(),
				':dtconfirmed'=>$this->getdtconfirmed()
				
			]
        
            
        );//end select

		

		$results[0]['desguest'] = utf8_encode($results[0]['desguest']);
	  


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


		$results[0]['desguest'] = utf8_encode($results[0]['desguest']);


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
            ORDER BY desguest ASC

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
            $row['desguest'] = utf8_encode($row['desguest']);

		}//end foreach


		 /**SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X  */

		$numRsvp = $sql->select("
			
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$numRsvp[0]["nrtotal"]

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
            ORDER BY desguest ASC
			LIMIT $start, $itensPerPage;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
            $row['desguest'] = utf8_encode($row['desguest']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numRsvp = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$numRsvp[0]["nrtotal"],
			'pages'=>ceil($numRsvp[0]["nrtotal"] / $itensPerPage)

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
            ORDER BY desguest ASC
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
			$row['desguest'] = utf8_encode($row['desguest']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numRsvp = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$numRsvp[0]["nrtotal"],
			'pages'=>ceil($numRsvp[0]["nrtotal"] / $itensPerPage)

		];//end return


		

		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if */

    }//END getSearch








    public static function checkDesguestExists( $iduser, $desguest )
	{
		$sql = new Sql();

		$results = $sql->select("

			SELECT * FROM tb_rsvp
            WHERE iduser = :iduser 
            AND desguest LIKE :search
            LIMIT 1;

			", 
			
			[

				':iduser'=>$iduser,
				':search'=>'%'.$desguest.'%'

			]
		
		);//end select

		# Colocar o 'count' entre parênteses equivale a um if.
		# If count count($results) > 0 , retorna TRUE
		# If count count($results) = 0 , retorna FALSE


		if( count($results) > 0 )
		{

			return $results[0];

		}//end if
		else
		{
			return false;

		}//end else
		

	}//END checkDesguestExists






	public function getFromHash( $hash )
	{

		$idrsvp = base64_decode($hash);



		$sql = new Sql();

		$results = $sql->select("

			SELECT * FROM tb_rsvp 
			WHERE idrsvp = :idrsvp

			",  
			
			[

				":idrsvp"=>$idrsvp

			]

		);//end select

		

		

		if( count($results[0]) > 0 )
		{

			$this->setData($results[0]);


		}//end if


	}//END getFromHash









	public static function generateCsv( $iduser )
    {
        
        header("Content-type: application/csv");   
        header("Content-Disposition: attachment; filename=Confirmados.csv");
        header("Pragma: no-cache"); 




        $sql = new Sql();

        $results = $sql->select("


        	SELECT a.desguest, a.desemail, a.nrphone, a.inadultsconfirmed, a.inchildrenconfirmed, a.desguestaccompanies, a.dtconfirmed 

        	FROM tb_rsvp a
        	INNER JOIN tb_users b ON a.iduser = b.iduser
        	WHERE a.inconfirmed = 1
        	AND a.iduser = :iduser
        	ORDER BY a.desguest ASC


	    	",

    		[

    			'iduser'=>$iduser
    		]

    	);//end select


 
        $out = fopen( 'php://output', 'w' );

        if( $out )
        {

            foreach ( $results as $row ) 
            {
                fputcsv( $out, $row, ';' );

            }//end foreach

            fclose( $out );

        }//end if

    }//end generateCsv












    public function getConfirmedPage( $iduser, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_rsvp
            WHERE inconfirmed = 1
            AND iduser = :iduser
            ORDER BY desguest ASC
			LIMIT $start, $itensPerPage;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
            $row['desguest'] = utf8_encode($row['desguest']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numRsvp = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$numRsvp[0]["nrtotal"],
			'pages'=>ceil($numRsvp[0]["nrtotal"] / $itensPerPage)

		];//end return


		

		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if */

    }//END getConfirmedPage
    




    public function getConfirmedSearch( $iduser, $search, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_rsvp
            WHERE inconfirmed = 1
            AND iduser = :iduser
            AND desname LIKE :search
            ORDER BY desguest ASC
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
			$row['desguest'] = utf8_encode($row['desguest']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numRsvp = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$numRsvp[0]["nrtotal"],
			'pages'=>ceil($numRsvp[0]["nrtotal"] / $itensPerPage)

		];//end return


		

		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if */

    }//END getConfirmedSearch











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