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
				:iddiscount,
				:idcupom,
				:incupom,
				:indiscount,
				:insellercategory,
				:inplancode,
				:inmigration,
				:inperiod,
				:desplan,
				:vlregularprice,
				:vlsaleprice,
				:dtbegin,
				:dtend

			)", 
			
			[

				':idplan'=>$this->getidplan(),
				':iduser'=>$this->getiduser(),
				':iddiscount'=>$this->getiddiscount(),
				':idcupom'=>$this->getidcupom(),
				':incupom'=>$this->getincupom(),
				':indiscount'=>$this->getindiscount(),
				':insellercategory'=>$this->getinsellercategory(),
				':inplancode'=>$this->getinplancode(),
				':inmigration'=>$this->getinmigration(),
				':inperiod'=>$this->getinperiod(),
				':desplan'=>$this->getdesplan(),
				':vlregularprice'=>$this->getvlregularprice(),
				':vlsaleprice'=>$this->getvlsaleprice(),
				':dtbegin'=>$this->getdtbegin(),
				':dtend'=>$this->getdtend()

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
		    INNER JOIN tb_users b ON a.iduser = b.iduser
            INNER JOIN tb_ordersplans c ON a.idplan = c.idplan
            INNER JOIN tb_payments d ON c.idpayment = d.idpayment
		    WHERE a.iduser = :iduser
            ORDER BY a.dtregister DESC;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select

		//$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		//$results[0]['descity'] = utf8_encode($results[0]['descity']);
		//$results[0]['desdistrict'] = utf8_encode($results[0]['desdistrict']);


			

		$nrtotal = $sql->select("
			
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$nrtotal[0]["nrtotal"]

		];//end return

	}//END get









	public static function getLastPlanPurchased( $iduser )
	{

		

		$sql = new Sql();

		$results = $sql->select("

			SELECT * 
		    FROM tb_plans a
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    WHERE a.iduser = :iduser
		    ORDER BY a.dtregister DESC
		    LIMIT 1;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		

		//$results[0]['desplan'] = utf8_encode($results[0]['desplan']);


		if(count($results) > 0)
		{

			return $results[0];

		}//end if


	}//END getLastPlanPurchased













	public static function getPlan( $idplan )
	{

		

		$sql = new Sql();

		$results = $sql->select("

			SELECT * 
		    FROM tb_plans a
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    WHERE a.idplan = :idplan;

			", 
			
			[

				':idplan'=>$idplan

			]
		
		);//end select


		//$results[0]['desplan'] = utf8_encode($results[0]['desplan']);


		if(count($results) > 0)
		{

			return $results[0];

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