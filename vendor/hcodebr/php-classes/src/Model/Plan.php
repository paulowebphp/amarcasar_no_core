<?php 

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Rule;
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
				':vlprice'=>$this->getvlprice()

			]
		
		);//end select



		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if



	}//END save








	







	







	public function get( $idplan )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT * 
		    FROM tb_plans a
		    INNER JOIN tb_ordersstatus b USING(idstatus)
		    INNER JOIN tb_users d ON c.iduser = d.iduser
		   	INNER JOIN tb_addresses e ON c.idcart = e.idcart
		    WHERE idplan = pidplan;

			", 
			
			[

				':idplan'=>$idplan

			]
		
		);//end select

		//$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		//$results[0]['descity'] = utf8_encode($results[0]['descity']);
		//$results[0]['desdistrict'] = utf8_encode($results[0]['desdistrict']);


		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

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

	



	

	public static function setMsgError( $msg )
	{

		$_SESSION[Plan::SESSION_ERROR] = $msg;


	}//END setMsgErro





	public static function getMsgError()
	{

		$msg = (isset($_SESSION[Plan::SESSION_ERROR])) ? $_SESSION[Plan::SESSION_ERROR] : "";

		Plan::clearMsgError();

		return $msg;

	}//END getMsgErro





	public static function clearMsgError()
	{

		$_SESSION[Plan::SESSION_ERROR] = NULL;

	}//END clearMsgError





}//END class Plan





 ?>