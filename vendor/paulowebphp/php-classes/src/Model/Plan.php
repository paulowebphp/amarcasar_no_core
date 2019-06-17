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
				':desplan'=>utf8_decode($this->getdesplan()),
				':vlregularprice'=>$this->getvlregularprice(),
				':vlsaleprice'=>$this->getvlsaleprice(),
				':dtbegin'=>$this->getdtbegin(),
				':dtend'=>$this->getdtend()

			]
		
		);//end select



		$results[0]['desplan'] = utf8_encode($results[0]['desplan']);

		
	


		if( count($results[0]) > 0 )
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
		    INNER JOIN tb_cartsitems b ON a.idplan = b.iditem
		    INNER JOIN tb_carts c ON b.idcart = c.idcart
		    INNER JOIN tb_orders d ON c.idcart = d.idcart
            INNER JOIN tb_payments e ON d.idpayment = e.idpayment
            INNER JOIN tb_customers f ON d.idcustomer = f.idcustomer
		    INNER JOIN tb_users g ON d.iduser = g.iduser
		    WHERE a.iduser = :iduser
            ORDER BY a.dtregister DESC;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select





		foreach( $results as &$row )
		{
			# code...		
			$row['desplan'] = utf8_encode($row['desplan']);

		}//end foreach


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










	public function getRegularPlan( $iduser )
	{

		

		$sql = new Sql();

		$results = $sql->select("

            SELECT SQL_CALC_FOUND_ROWS * 
		    FROM tb_plans a
		    INNER JOIN tb_cartsitems b ON a.idplan = b.iditem
		    INNER JOIN tb_carts c ON b.idcart = c.idcart
		    INNER JOIN tb_orders d ON c.idcart = d.idcart
            INNER JOIN tb_payments e ON d.idpayment = e.idpayment
            INNER JOIN tb_customers f ON d.idcustomer = f.idcustomer
		    INNER JOIN tb_users g ON d.iduser = g.iduser
		    WHERE a.iduser = :iduser
		    AND a.inplancode <> 0
            ORDER BY a.dtregister DESC;



			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select





		foreach( $results as &$row )
		{
			# code...		
			$row['desplan'] = utf8_encode($row['desplan']);
			$row['desname'] = utf8_encode($row['desname']);
			$row['desaddress'] = utf8_encode($row['desaddress']);
			$row['descomplement'] = utf8_encode($row['descomplement']);
			$row['descity'] = utf8_encode($row['descity']);
			$row['desdistrict'] = utf8_encode($row['desdistrict']);
			$row['desholdername'] = utf8_encode($row['desholdername']);
			$row['desholderaddress'] = utf8_encode($row['desholderaddress']);
			$row['desholdercomplement'] = utf8_encode($row['desholdercomplement']);
			$row['desholdercity'] = utf8_encode($row['desholdercity']);
			$row['desholderdistrict'] = utf8_encode($row['desholderdistrict']);

		}//end foreach


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














public function getFreePlan( $iduser )
{

	

	$sql = new Sql();

	$results = $sql->select("

		SELECT SQL_CALC_FOUND_ROWS * 
	    FROM tb_plans a
	    INNER JOIN tb_users g ON a.iduser = g.iduser
	    WHERE a.iduser = :iduser
	    AND a.inplancode = 0
        ORDER BY a.dtregister DESC;

		", 
		
		[

			':iduser'=>$iduser

		]
	
	);//end select





	foreach( $results as &$row )
	{
		# code...		
		$row['desplan'] = utf8_encode($row['desplan']);

	}//end foreach



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











	/*public function get( $iduser )
	{

		

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS * 
		    FROM tb_plans a
		    INNER JOIN tb_cartsitems b ON a.idplan = b.iditem
		    INNER JOIN tb_carts c ON b.idcart = c.idcart
		    INNER JOIN tb_orders d ON c.idcart = d.idcart
            INNER JOIN tb_payments e ON d.idpayment = e.idpayment
            INNER JOIN tb_customers f ON d.idcustomer = f.idcustomer
		    INNER JOIN tb_users g ON d.iduser = g.iduser
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

	}//END get*/









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

		$results[0]['desplan'] = utf8_encode($results[0]['desplan']);


				

		//$results[0]['desplan'] = utf8_encode($results[0]['desplan']);


		if(count($results) > 0)
		{

			return $results[0];

		}//end if


	}//END getLastPlanPurchased













	public static function updateLastPlanDtEnd( $idplan, $iduser, $dt_newest_plan_begin )
	{



		$sql = new Sql();

		$results = $sql->query("

			UPDATE tb_plans
			SET dtend = :dt_newest_plan_begin
			WHERE idplan = :idplan
			AND iduser = :iduser

			", 
			
			[

				'idplan'=>$idplan,
				'iduser'=>$iduser,
				':dt_newest_plan_begin'=>$dt_newest_plan_begin

			]
		
		);//end query


	}//END updateLastPlanDtEnd













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









	public static function getPlanArrayRenewal( $inplancontext )
	{

		$inplan = Plan::getPlansFullArray();


		return [

			'0'=>$inplan[$inplancontext.'01'],
			'1'=>$inplan[$inplancontext.'03'],
			'2'=>$inplan[$inplancontext.'04'],
			'3'=>$inplan[$inplancontext.'06'],
			'4'=>$inplan[$inplancontext.'09'],
			'5'=>$inplan[$inplancontext.'12']

		];




	}//END getPlanArrayRenewal











	/*public static function getPlanArrayRenewal( $inplan )
	{

		

		switch ($inplan) 
		{
			
			case '103':
			case '104':
			case '106':
			case '109':
			case '112':
				return 
				[

					'0'=>'101',
					'1'=>'103',
					'2'=>'104',
					'3'=>'106',
					'4'=>'109',
					'5'=>'112'
				];
				break;


			case '203':
			case '204':
			case '206':
			case '209':
			case '212':
				return 
				[

					'0'=>'201',
					'1'=>'203',
					'2'=>'204',
					'3'=>'206',
					'4'=>'209',
					'5'=>'212'
				];
				break;


			case '303':
			case '304':
			case '306':
			case '309':
			case '312':
				return 
				[

					'0'=>'301',
					'1'=>'303',
					'2'=>'304',
					'3'=>'306',
					'4'=>'309',
					'5'=>'312'
				];
				break;

		}//end switch

	}//END getPlanArrayRenewal
*/







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













	/*public static function getPlanArrayUpgrade( $inplancontext, $sufix )
	{


		switch ( $inplancontext ) 
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


			case '2':
				return 
				[

					'0'=>'3'.$sufix
				];


			case '3':
				return false;

		}//end switch


	}//END getPlanArrayUpgrade*/














	public static function getPlansFullArray()
	{

		
		$plans = [

			'0'=>  
				
				[

					'vlregularprice'=>'0.00', 
					'vlsaleprice'=>'0.00', 
					'inperiod'=>'10', 
					'desperiod'=>'dias', 
					'inplancontext'=>'0', 
					'inplancode'=>'0',
					'desplan'=>Rule::PLAN_NAME_FREE
				],
				


			'101'=>
				[

					'vlregularprice'=>'22.99', 
					'vlsaleprice'=>'22.99',  
					'inperiod'=>'1', 
					'desperiod'=>'mês', 
					'inplancontext'=>'1', 
					'inplancode'=>'101',
					'desplan'=>Rule::PLAN_NAME_BASIC
				],
				


			'103'=>
				 [
					'vlregularprice'=>'50.99', 
					'vlsaleprice'=>'50.99',
					'inperiod'=>'3',
					'desperiod'=>'meses',
					'inplancontext'=>'1',  
					'inplancode'=>'103',
					'desplan'=>Rule::PLAN_NAME_BASIC
				],
				


			'104'=>
				[
					'vlregularprice'=>'62.99', 
					'vlsaleprice'=>'62.99',
					'inperiod'=>'4',
					'desperiod'=>'meses', 
					'inplancontext'=>'1', 
					'inplancode'=>'104',
					'desplan'=>Rule::PLAN_NAME_BASIC
				],
				


			'106'=>
				[
					'vlregularprice'=>'85.99', 
					'vlsaleprice'=>'85.99',
					'inperiod'=>'6',
					'desperiod'=>'meses', 
					'inplancontext'=>'1', 
					'inplancode'=>'106',
					'desplan'=>Rule::PLAN_NAME_BASIC
				],
				


			'109'=>
				[
					'vlregularprice'=>'108.99', 
					'vlsaleprice'=>'108.99',
					'inperiod'=>'9',
					'desperiod'=>'meses',
					'inplancontext'=>'1', 
					'inplancode'=>'109',
					'desplan'=>Rule::PLAN_NAME_BASIC
				],
				


			'112'=>
				# code...
				[
					'vlregularprice'=>'132.99', 
					'vlsaleprice'=>'132.99',
					'inperiod'=>'12', 
					'desperiod'=>'meses',
					'inplancontext'=>'1', 
					'inplancode'=>'112',
					'desplan'=>Rule::PLAN_NAME_BASIC
				],
				


			'201'=>
				[
					'vlregularprice'=>'79.99', 
					'vlsaleprice'=>'79.99',
					'inperiod'=>'1',
					'desperiod'=>'mês', 
					'inplancontext'=>'2', 
					'inplancode'=>'201',
					'desplan'=>Rule::PLAN_NAME_INTERMEDIATE
				],
				


			'203'=>
				[
					'vlregularprice'=>'94.99', 
					'vlsaleprice'=>'94.99',
					'inperiod'=>'3',
					'desperiod'=>'meses', 
					'inplancontext'=>'2',
					'inplancode'=>'203',
					'desplan'=>Rule::PLAN_NAME_INTERMEDIATE
				],
				


			'204'=>
				[
					'vlregularprice'=>'105.99', 
					'vlsaleprice'=>'105.99',
					'inperiod'=>'4',
					'desperiod'=>'meses', 
					'inplancontext'=>'2',
					'inplancode'=>'204',
					'desplan'=>Rule::PLAN_NAME_INTERMEDIATE
				],
				


			'206'=>

				[
					'vlregularprice'=>'129.99', 
					'vlsaleprice'=>'129.99',
					'inperiod'=>'6',
					'desperiod'=>'meses', 
					'inplancontext'=>'2',
					'inplancode'=>'206',
					'desplan'=>Rule::PLAN_NAME_INTERMEDIATE
				],
				


			'209'=>
				[
					'vlregularprice'=>'152.99', 
					'vlsaleprice'=>'152.99',
					'inperiod'=>'9',
					'desperiod'=>'meses', 
					'inplancontext'=>'2',
					'inplancode'=>'209',
					'desplan'=>Rule::PLAN_NAME_INTERMEDIATE
				],
				


			'212'=>
				[
					'vlregularprice'=>'187.99', 
					'vlsaleprice'=>'187.99',
					'inperiod'=>'12',
					'desperiod'=>'meses', 
					'inplancontext'=>'2',
					'inplancode'=>'212',
					'desplan'=>Rule::PLAN_NAME_INTERMEDIATE
				],
				


			'301'=>
				[
					'vlregularprice'=>'149.99', 
					'vlsaleprice'=>'149.99',
					'inperiod'=>'1',
					'desperiod'=>'mês', 
					'inplancontext'=>'3',
					'inplancode'=>'301',
					'desplan'=>Rule::PLAN_NAME_ADVANCED
				],
				


			'303'=>
				[
					'vlregularprice'=>'170.99', 
					'vlsaleprice'=>'170.99',
					'inperiod'=>'3',
					'desperiod'=>'meses', 
					'inplancontext'=>'3',
					'inplancode'=>'303',
					'desplan'=>Rule::PLAN_NAME_ADVANCED
				],
				


			'304'=>
				[
					'vlregularprice'=>'193.99', 
					'vlsaleprice'=>'193.99',
					'inperiod'=>'4',
					'desperiod'=>'meses', 
					'inplancontext'=>'3',
					'inplancode'=>'304',
					'desplan'=>Rule::PLAN_NAME_ADVANCED
				],
				


			'306'=>
				[
					'vlregularprice'=>'217.99', 
					'vlsaleprice'=>'217.99',
					'inperiod'=>'6',
					'desperiod'=>'meses', 
					'inplancontext'=>'3',
					'inplancode'=>'306',
					'desplan'=>Rule::PLAN_NAME_ADVANCED

				],
				


			'309'=>
				[
					'vlregularprice'=>'240.99', 
					'vlsaleprice'=>'240.99',
					'inperiod'=>'9',
					'desperiod'=>'meses', 
					'inplancontext'=>'3',
					'inplancode'=>'309',
					'desplan'=>Rule::PLAN_NAME_ADVANCED
				],
				


			'312'=>
				[
					'vlregularprice'=>'264.99', 
					'vlsaleprice'=>'264.99',
					'inperiod'=>'12', 
					'desperiod'=>'meses',
					'inplancontext'=>'3',
					'inplancode'=>'312',
					'desplan'=>Rule::PLAN_NAME_ADVANCED
				]
				
				

		];//end array
		
			

		return $plans;



	}//END getPlansFullArray













	public static function getPlanArray( $inplan )
	{

		$plans = Plan::getPlansFullArray();


		switch( $inplan )
		{

			case '0':
				# code...
				return $plans['0'];
				break;


			case '101':
				return $plans['101'];
				break;


			case '103':
				return $plans['103'];
				break;


			case '104':
				return $plans['104'];
				break;


			case '106':
				return $plans['106'];
				break;


			case '109':
				return $plans['109'];
				break;


			case '112':
				# code...
				return $plans['112'];
				break;


			case '201':
				return $plans['201'];
				break;


			case '203':
				return $plans['203'];
				break;


			case '204':
				return $plans['204'];
				break;


			case '206':

				return $plans['206'];
				break;


			case '209':
				return $plans['209'];
				break;


			case '212':
				return $plans['212'];
				break;


			case '301':
				return $plans['301'];
				break;


			case '303':
				return $plans['303'];
				break;


			case '304':
				return $plans['304'];
				break;


			case '306':
				return $plans['306'];


			case '309':
				return $plans['309'];
				break;


			case '312':
				return $plans['312'];
				
			

		}//end switch





	}//END getPlanArray













	/*public static function getPlanArray( $inplan )
	{


		switch( $inplan )
		{

			case '0':
				# code...
				return [

					'vlregularprice'=>'0.00', 
					'vlsaleprice'=>'0.00', 
					'inperiod'=>'10', 
					'desperiod'=>'dias', 
					'inplancontext'=>'0', 
					'desplan'=>Rule::PLAN_NAME_FREE
				];
				break;


			case '101':
				return [

					'vlregularprice'=>'22.99', 
					'vlsaleprice'=>'22.99',  
					'inperiod'=>'1', 
					'desperiod'=>'mês', 
					'inplancontext'=>'1', 
					'desplan'=>Rule::PLAN_NAME_BASIC
				];
				break;


			case '103':
				return  [
					'vlregularprice'=>'50.99', 
					'vlsaleprice'=>'50.99',
					'inperiod'=>'3',
					'desperiod'=>'meses',
					'inplancontext'=>'1',  
					'desplan'=>Rule::PLAN_NAME_BASIC
				];
				break;


			case '104':
				return [
					'vlregularprice'=>'62.99', 
					'vlsaleprice'=>'62.99',
					'inperiod'=>'4',
					'desperiod'=>'meses', 
					'inplancontext'=>'1', 
					'desplan'=>Rule::PLAN_NAME_BASIC
				];
				break;


			case '106':
				return [
					'vlregularprice'=>'85.99', 
					'vlsaleprice'=>'85.99',
					'inperiod'=>'6',
					'desperiod'=>'meses', 
					'inplancontext'=>'1', 
					'desplan'=>Rule::PLAN_NAME_BASIC
				];
				break;


			case '109':
				return [
					'vlregularprice'=>'108.99', 
					'vlsaleprice'=>'108.99',
					'inperiod'=>'9',
					'desperiod'=>'meses',
					'inplancontext'=>'1', 
					'desplan'=>Rule::PLAN_NAME_BASIC
				];
				break;


			case '112':
				# code...
				return [
					'vlregularprice'=>'132.99', 
					'vlsaleprice'=>'132.99',
					'inperiod'=>'12', 
					'desperiod'=>'meses',
					'inplancontext'=>'1', 
					'desplan'=>Rule::PLAN_NAME_BASIC
				];
				break;


			case '201':
				return [
					'vlregularprice'=>'79.99', 
					'vlsaleprice'=>'79.99',
					'inperiod'=>'1',
					'desperiod'=>'mês', 
					'inplancontext'=>'2', 
					'desplan'=>Rule::PLAN_NAME_INTERMEDIATE
				];
				break;


			case '203':
				return [
					'vlregularprice'=>'94.99', 
					'vlsaleprice'=>'94.99',
					'inperiod'=>'3',
					'desperiod'=>'meses', 
					'inplancontext'=>'2',
					'desplan'=>Rule::PLAN_NAME_INTERMEDIATE
				];
				break;


			case '204':
				return [
					'vlregularprice'=>'105.99', 
					'vlsaleprice'=>'105.99',
					'inperiod'=>'4',
					'desperiod'=>'meses', 
					'inplancontext'=>'2',
					'desplan'=>Rule::PLAN_NAME_INTERMEDIATE
				];
				break;


			case '206':

				return [
					'vlregularprice'=>'129.99', 
					'vlsaleprice'=>'129.99',
					'inperiod'=>'6',
					'desperiod'=>'meses', 
					'inplancontext'=>'2',
					'desplan'=>Rule::PLAN_NAME_INTERMEDIATE
				];
				break;


			case '209':
				return [
					'vlregularprice'=>'152.99', 
					'vlsaleprice'=>'152.99',
					'inperiod'=>'9',
					'desperiod'=>'meses', 
					'inplancontext'=>'2',
					'desplan'=>Rule::PLAN_NAME_INTERMEDIATE
				];
				break;


			case '212':
				return [
					'vlregularprice'=>'187.99', 
					'vlsaleprice'=>'187.99',
					'inperiod'=>'12',
					'desperiod'=>'meses', 
					'inplancontext'=>'2',
					'desplan'=>Rule::PLAN_NAME_INTERMEDIATE
				];
				break;


			case '301':
				return [
					'vlregularprice'=>'149.99', 
					'vlsaleprice'=>'149.99',
					'inperiod'=>'1',
					'desperiod'=>'mês', 
					'inplancontext'=>'3',
					'desplan'=>Rule::PLAN_NAME_ADVANCED
				];
				break;


			case '303':
				return [
					'vlregularprice'=>'170.99', 
					'vlsaleprice'=>'170.99',
					'inperiod'=>'3',
					'desperiod'=>'meses', 
					'inplancontext'=>'3',
					'desplan'=>Rule::PLAN_NAME_ADVANCED
				];
				break;


			case '304':
				return [
					'vlregularprice'=>'193.99', 
					'vlsaleprice'=>'193.99',
					'inperiod'=>'4',
					'desperiod'=>'meses', 
					'inplancontext'=>'3',
					'desplan'=>Rule::PLAN_NAME_ADVANCED
				];
				break;


			case '306':
				return [
					'vlregularprice'=>'217.99', 
					'vlsaleprice'=>'217.99',
					'inperiod'=>'6',
					'desperiod'=>'meses', 
					'inplancontext'=>'3',
					'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;


			case '309':
				return [
					'vlregularprice'=>'240.99', 
					'vlsaleprice'=>'240.99',
					'inperiod'=>'9',
					'desperiod'=>'meses', 
					'inplancontext'=>'3',
					'desplan'=>Rule::PLAN_NAME_ADVANCED
				];
				break;


			case '312':
				return [
					'vlregularprice'=>'264.99', 
					'vlsaleprice'=>'264.99',
					'inperiod'=>'12', 
					'desperiod'=>'meses',
					'inplancontext'=>'3',
					'desplan'=>Rule::PLAN_NAME_ADVANCED
				];
				break;
				
			

		}//end switch



	}//END getPlanArray*/







	



	

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