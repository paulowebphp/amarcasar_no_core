<?php 

namespace Hcode\Model;


use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Rule;




class Stakeholder extends Model
{

	# Session
	const SESSION = "StakeholderSession";

	# Error - Success
	const SUCCESS = "Stakeholder-Success";
	const ERROR = "Stakeholder-Error";





    
    public function update()
	{

		$sql = new Sql();

		

		$results = $sql->select("

			CALL sp_stakeholdersupdate_save(
			               
                :idstakeholder,
                :iduser,
                :instatus,
                :inposition,
                :desstakeholder,
                :descategory,
                :deslocation,
                :dessite,
                :desemail,
                :desdescription,
                :desphoto,
                :desthumbnail,
                :nrphone

			)", 
			
			[

				':idstakeholder'=>$this->getidstakeholder(),
				':iduser'=>$this->getiduser(),
				':instatus'=>$this->getinstatus(),
				':inposition'=>$this->getinposition(),
				':desstakeholder'=>utf8_decode($this->getdesstakeholder()),
				':descategory'=>utf8_decode($this->getdescategory()),
				':deslocation'=>utf8_decode($this->getdeslocation()),
				':dessite'=>$this->getdessite(),
				':desemail'=>$this->getdesemail(),
				':desdescription'=>utf8_decode($this->getdesdescription()),
				':desphoto'=>$this->getdesphoto(),
				':desthumbnail'=>$this->getdesthumbnail(),
				':nrphone'=>$this->getnrphone()
				
			]
        
            
        );//end select
        


		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if

        

	}//END save




	public function getStakeholder( $idstakeholder )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_stakeholders
			WHERE idstakeholder = :idstakeholder

			", 
			
			[

				':idstakeholder'=>$idstakeholder

			]
		
		);//end select

		foreach( $results as &$row )
		{
			# code...		
			$row['desstakeholder'] = utf8_encode($row['desstakeholder']);
			$row['descategory'] = utf8_encode($row['descategory']);
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
			FROM tb_stakeholders
			WHERE iduser = :iduser

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desstakeholder'] = utf8_encode($row['desstakeholder']);
			$row['descategory'] = utf8_encode($row['descategory']);
			$row['deslocation'] = utf8_encode($row['deslocation']);
			$row['desdescription'] = utf8_encode($row['desdescription']);
			$row['dessite'] = utf8_encode($row['dessite']);

		}//end foreach


		 /**SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X  */

		$numStakeholder = $sql->select("
			
			SELECT FOUND_ROWS() AS numstakeholder;
			
		");//end select

		return [

			'results'=>$results,
			'numstakeholder'=>(int)$numStakeholder[0]["numstakeholder"]

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
			FROM tb_stakeholders
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
			$row['desstakeholder'] = utf8_encode($row['desstakeholder']);
			$row['descategory'] = utf8_encode($row['descategory']);
			$row['deslocation'] = utf8_encode($row['deslocation']);
			$row['desdescription'] = utf8_encode($row['desdescription']);
			$row['dessite'] = utf8_encode($row['dessite']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numStakeholder = $sql->select("
		
			SELECT FOUND_ROWS() AS numstakeholders;
			
		");//end select

		return [

			'results'=>$results,
			'numstakeholders'=>(int)$numStakeholder[0]["numstakeholders"],
			'pages'=>ceil($numStakeholder[0]["numstakeholders"] / $itensPerPage)

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
			FROM tb_stakeholders
			WHERE iduser = :iduser AND desstakeholder LIKE :search
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
		$numStakeholders = $sql->select("
		
			SELECT FOUND_ROWS() AS numstakeholders;
			
		");//end select

		return [

			'results'=>$results,
			'numstakeholders'=>(int)$numStakeholders[0]["numstakeholders"],
			'pages'=>ceil($numStakeholders[0]["numstakeholders"] / $itensPerPage)

		];//end return


		

		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if */

    }//END getSearch







    public function maxStakeholders( $inplan )
	{

		switch( $inplan )
		{
			case '001':
				# code...
				return Rule::MAX_STAKEHOLDERS_FREE;
				break;

			case '101':
			case '103':
			case '104':
			case '106':
			case '109':
			case '112':
				# code...
				return Rule::MAX_STAKEHOLDERS_BASIC;
				break;

			case '203':
			case '204':
			case '206':
			case '209':
			case '212':
				# code...
				return Rule::MAX_STAKEHOLDERS_INTERMEDIATE;
				break;

			case '303':
			case '304':
			case '306':
			case '309':
			case '312':
				# code...
				return Rule::MAX_STAKEHOLDERS_ADVANCED;
				break;
			
			default:
				# code...
				return Rule::MAX_STAKEHOLDERS_FREE;
				break;

		}//end switch



	}//END maxEvents



	

	




	public function delete()
	{
		$sql = new Sql();

		$sql->query("
		
			DELETE FROM tb_stakeholders
			WHERE idstakeholder = :idstakeholder
			
			",
			
			[

				':idstakeholder'=>$this->getidstakeholder()

			]
		
		);//end query

	}//END delete







	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_stakeholders

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[Stakeholder::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Stakeholder::ERROR]) && $_SESSION[Stakeholder::ERROR]) ? $_SESSION[Stakeholder::ERROR] : '';

		Stakeholder::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Stakeholder::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Stakeholder::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Stakeholder::SUCCESS]) && $_SESSION[Stakeholder::SUCCESS]) ? $_SESSION[Stakeholder::SUCCESS] : '';

		Stakeholder::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Stakeholder::SUCCESS] = NULL;

	}//END clearSuccess 









	public function toSession()
	{
		$_SESSION[Stakeholder::SESSION] = $this->getValues();

	}//END toSession







	public function getFromSession()
	{

		$this->setData($_SESSION[Stakeholder::SESSION]);

	}//END getFromSession











}//END class Stakeholder




 ?>