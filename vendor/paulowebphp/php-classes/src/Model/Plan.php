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













	public static function getPlanArrayUpgrade( $plan, $sufix )
	{


		switch ( $plan ) 
		{

			//case '0':
				//header('Location: /dashboard/planos');
				//exit;
				//break;
			
			case '1':
				return 
				[

					'0'=>'2'.$sufix,
					'1'=>'3'.$sufix
				];
				break;


			case '2':
				return 
				[

					'0'=>'3'.$sufix
				];
				break;


			case '3':
				return false;
				break;

		}//end switch


	}//END getPlanArrayUpgrade













	public static function getPlanArray( $inplan )
	{

		switch( $inplan )
		{
			case '001':
				# code...
				return '0';
				break;

			case '101':
				return ['vlprice'=>'22.99' , 'inperiod'=>'1', 'desperiod'=>'mês', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '103':
				return  ['vlprice'=>'50.99' , 'inperiod'=>'3','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '104':
				return ['vlprice'=>'62.99' , 'inperiod'=>'4','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '106':
				return ['vlprice'=>'85.99' , 'inperiod'=>'6','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '109':
				return ['vlprice'=>'108.99' , 'inperiod'=>'9','desperiod'=>'meses','desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '112':
				# code...
				return ['vlprice'=>'132.99' , 'inperiod'=>'12', 'desperiod'=>'meses','desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '201':
				return ['vlprice'=>'79.99' , 'inperiod'=>'1','desperiod'=>'mês', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '203':
				return ['vlprice'=>'94.99' , 'inperiod'=>'3','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '204':
				return ['vlprice'=>'105.99' , 'inperiod'=>'4','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '206':

				return ['vlprice'=>'129.99' , 'inperiod'=>'6','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '209':
				return ['vlprice'=>'152.99' , 'inperiod'=>'9','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '212':
				return ['vlprice'=>'187.99' , 'inperiod'=>'12','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '301':
				return ['vlprice'=>'149.99' , 'inperiod'=>'1','desperiod'=>'mês', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '303':
				return ['vlprice'=>'170.99' , 'inperiod'=>'3','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '304':
				return ['vlprice'=>'193.99' , 'inperiod'=>'4','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '306':
				return ['vlprice'=>'217.99' , 'inperiod'=>'6','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '309':
				return ['vlprice'=>'240.99' , 'inperiod'=>'9','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '312':
				return ['vlprice'=>'264.99' , 'inperiod'=>'12', 'desperiod'=>'meses','desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;
				
			
			default:
				# code...
				return ['vlprice'=>'50.99' , 'inperiod'=>'3','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

		}//end switch



	}//END getPlanArray











	



	

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