<?php 

namespace Core\Model;

use \Core\DB\Sql;
use \Core\Model;
use \Core\Model\Rule;



class Gift extends Model
{

	# Session
	const SESSION = "GiftSession";

	# Error - Success
	const SUCCESS = "Gift-Success";
	const ERROR = "Gift-Error";







	public function getPage( $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_gifts
			ORDER BY incategory ASC
			LIMIT $start, $itensPerPage;

		");//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desgift'] = utf8_encode($row['desgift']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numGifts = $sql->select("
		
			SELECT FOUND_ROWS() AS numgifts;
			
		");//end select
	

		if( count($results[0]) > 0 )
		{

			return [

				'results'=>$results,
				'numgifts'=>(int)$numGifts[0]["numgifts"],
				'pages'=>ceil($numGifts[0]["numgifts"] / $itensPerPage)
	
			];//end return
			
		}//end if
		else
		{
			return false;

		}//end else

    }//END getPage




	




    public function getSearch($search, $page = 1, $itensPerPage = 10 )
		{

			$start = ($page - 1) * $itensPerPage;

			$sql = new Sql();

			$results = $sql->select("

				SELECT SQL_CALC_FOUND_ROWS *
				FROM tb_gifts
				WHERE desgift LIKE :search
				ORDER BY incategory DESC
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
				$row['desgift'] = utf8_encode($row['desgift']);

			}//end foreach

			/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
			$numGifts = $sql->select("
			
				SELECT FOUND_ROWS() AS numgifts;
				
			");//end select

			return [

				'results'=>$results,
				'numgifts'=>(int)$numGifts[0]["numgifts"],
				'pages'=>ceil($numGifts[0]["numgifts"] / $itensPerPage)

			];//end return


			

			if( count($results[0]) > 0 )
		{

			return [

				'results'=>$results,
				'numgifts'=>(int)$numGifts[0]["numgifts"],
				'pages'=>ceil($numGifts[0]["numgifts"] / $itensPerPage)
	
			];//end return
			
		}//end if
		else
		{
			return false;

		}//end else



		}//END getSearch





		public static function getNumGifts()
		{

			$sql = new Sql();

			$results = $sql->select("

				SELECT COUNT(*)
				FROM tb_gifts;

			");//end select


			if( count($results[0]) > 0 )
			{

				return $results[0];

			}//end if
			else
			{
				return false;
				
			}//end else



		}//END getNumGifts






    public static function listAll()
	{
		$sql = new Sql();

		return $sql->select("
		
			SELECT * FROM tb_gifts 
            ORDER BY incategory ASC
            LIMIT 15
			
		");//end select
		
	}//END listAll








    public function getGift( $idgift )
	{
        

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_gifts
			WHERE idgift = :idgift
			

			", 
			
			[

				':idgift'=>$idgift

			]
		
        );//end select
        

		foreach( $results as &$row )
		{
			# code...		
			$row['desgift'] = utf8_encode($row['desgift']);
	
        }//end foreach
        
        
        
		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

    }//END getGift
    









	public static function setError( $msg )
	{

		$_SESSION[Gift::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Gift::ERROR]) && $_SESSION[Gift::ERROR]) ? $_SESSION[Gift::ERROR] : '';

		Gift::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Gift::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Gift::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Gift::SUCCESS]) && $_SESSION[Gift::SUCCESS]) ? $_SESSION[Gift::SUCCESS] : '';

		Gift::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Gift::SUCCESS] = NULL;

	}//END clearSuccess 









}//END class Gift





 ?>