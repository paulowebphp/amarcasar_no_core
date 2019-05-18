<?php 

namespace Core\Model;

use \Core\DB\Sql;
use \Core\Model;
use \Core\Rule;
use \Moip\Moip;
use \Moip\Auth\OAuth;




class Plan extends Model
{

	const SESSION_ERROR = "PlanError";

	


	

	public function save()
	{

		

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_plans_save(

				:idplan,
				:iduser,
				:idaddressplan,
				:idstatus,
				:inplanbought,
				:inmigration,
				:inperiod,
				:incupom,
				:vlprice

			)", 
			
			[

				':idplan'=>$this->getidplan(),
				':iduser'=>$this->getiduser(),
				':idaddressplan'=>$this->getidaddressplan(),
				':idstatus'=>$this->getidstatus(),
				':inplanbought'=>$this->getinplanbought(),
				':inmigration'=>$this->getinmigration(),
				':inperiod'=>$this->getinperiod(),
				':incupom'=>$this->getincupom(),
				':vlprice'=>$this->getvlprice()

			]
		
		);//end select



		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if



	}//END save








	







	







	public function get( $iduser )
	{

		

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS * 
		    FROM tb_plans a
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    WHERE a.iduser = :iduser;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select

		//$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		//$results[0]['descity'] = utf8_encode($results[0]['descity']);
		//$results[0]['desdistrict'] = utf8_encode($results[0]['desdistrict']);


			

		$numPlans = $sql->select("
			
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$numPlans[0]["nrtotal"]

		];//end return

	}//END get












	public function delete()
	{

		$sql = new Sql();

		$sql->query("

			DELETE FROM tb_plans
			WHERE idplan = :idplan

			", 
			
			[

				'idplan'=>$this->getidplan()

			]
		
		);//end query

	}//END delete

	



	

	public static function setError( $msg )
	{

		$_SESSION[Plan::SESSION_ERROR] = $msg;


	}//END setMsgErro





	public static function getError()
	{

		$msg = (isset($_SESSION[Plan::SESSION_ERROR])) ? $_SESSION[Plan::SESSION_ERROR] : "";

		Plan::clearError();

		return $msg;

	}//END getMsgErro





	public static function clearError()
	{

		$_SESSION[Plan::SESSION_ERROR] = NULL;

	}//END clearMsgError





}//END class Plan





 ?>