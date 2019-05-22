<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;
use \Core\Model\Cart;
use \Core\Model\Address;
use \Core\Model\Payment;
use \Moip\Moip;
use \Moip\Auth\BasicAuth;



class OrderPlan extends Model
{

	# Session
	const SESSION = "OrderPlanSession";

	# Error - Success
	const SUCCESS = "OrderPlan-Success";
	const ERROR = "OrderPlan-Error";





	public function save()
	{
			

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_ordersplans_save(

				:idorderplan,
				:iduser,
				:idplan,
				:idcustomer,
				:idpayment,
				:desordercode,
				:vltotal

			)", 
			
			[

				':idorderplan'=>$this->getidorderplan(),
				':iduser'=>$this->getiduser(),
				':idplan'=>$this->getidplan(),
				':idcustomer'=>$this->getidcustomer(),
				':idpayment'=>$this->getidpayment(),
				':desordercode'=>$this->getdesordercode(),
				':vltotal'=>$this->getvltotal()

			]
		
		);//end select



		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if


	}//END save






	public function getProducts()
	{

		$sql = new Sql();

		$results = $sql->select("

		    SELECT b.idproduct,b.iduser, b.inbought, b.incategory, b.desproduct,b.vlprice,b.desphoto,b.desextension,
			COUNT(*) AS nrqtd,
			SUM(b.vlprice) as vltotal
			FROM tb_cartsproducts a 
			INNER JOIN tb_products b USING (idproduct)
			INNER JOIN tb_carts c ON a.idcart = c.idcart
			WHERE a.idcart = :idcart
			GROUP BY b.idproduct,b.iduser, b.inbought, b.incategory, b.desproduct,b.vlprice,b.desphoto,b.desextension
			ORDER BY b.desproduct

			", 
			
			[

				':idcart'=>$this->getidcart()

			]
		
		);//end select



		//$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		if( count($results) > 0 )
		{
			

			return $results;

			
		}//end if



	}//END getProducts














	public function get( $iduser )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b ON a.idstatus = b.idstatus
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    INNER JOIN tb_addresses e ON a.idaddress = e.idaddress
		    INNER JOIN tb_payments f ON a.idorder = f.idorder
		    WHERE a.iduser = :iduser;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select

		//$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		//$results[0]['descity'] = utf8_encode($results[0]['descity']);
		//$results[0]['desdistrict'] = utf8_encode($results[0]['desdistrict']);



		$numOrders = $sql->select("
			
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$numOrders[0]["nrtotal"]

		];//end return


	}//END get









	public function getOrder( $idorder )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT * 
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b ON a.idstatus = b.idstatus
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    INNER JOIN tb_addresses e ON a.idaddress = e.idaddress
		    INNER JOIN tb_payments f ON a.idorder = f.idorder
		    WHERE a.idorder = :idorder;

			", 
			
			[

				':idorder'=>$idorder

			]
		
		);//end select

		//$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		//$results[0]['descity'] = utf8_encode($results[0]['descity']);
		//$results[0]['desdistrict'] = utf8_encode($results[0]['desdistrict']);


		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END getOrder













public static function getPage( $iduser, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS * 
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b ON a.idstatus = b.idstatus
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    INNER JOIN tb_addresses e ON a.idaddress = e.idaddress
		    INNER JOIN tb_payments f ON a.idorder = f.idorder
		    WHERE a.iduser = :iduser
			ORDER BY a.dtregister DESC
			LIMIT $start, $itensPerPage;

		", 
			
			[

				':iduser'=>$iduser

			]

		);//end selec


		$resultTotal = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		

		return [

			'results'=>$results,
			'nrtotal'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itensPerPage)

		];//end return


	}//END getPage








	public static function getPageSearch( $iduser, $search, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b ON a.idstatus = b.idstatus
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    INNER JOIN tb_addresses e ON a.idaddress = e.idaddress
		    INNER JOIN tb_payments f ON a.idorder = f.idorder
		    WHERE a.iduser = :iduser
			OR f.desperson LIKE :search 
			ORDER BY a.dtregister DESC
			LIMIT $start, $itensPerPage;

			", 
			
			[

				':iduser'=>$iduser,
				':search'=>'%'.$search.'%',
				':id'=>$search

			]
		
		);//end select

		$resultTotal = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itensPerPage)

		];//end return


	}//END getPageSearch











	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * 
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b ON a.idstatus = b.idstatus
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    INNER JOIN tb_addresses e ON a.idaddress = e.idaddress
		    WHERE a.idorder = pidorder
			ORDER BY a.dtregister DESC

		");//end select

	}//END listAll






	public function delete()
	{

		$sql = new Sql();

		$sql->query("

			DELETE FROM tb_orders
			WHERE idorder = :idorder

			", 
			
			[

				'idorder'=>$this->getidorder()

			]
		
		);//end query

	}//END delete








	public static function setError( $msg )
	{

		$_SESSION[OrderPlan::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[OrderPlan::ERROR]) && $_SESSION[OrderPlan::ERROR]) ? $_SESSION[OrderPlan::ERROR] : '';

		OrderPlan::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[OrderPlan::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[OrderPlan::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[OrderPlan::SUCCESS]) && $_SESSION[OrderPlan::SUCCESS]) ? $_SESSION[OrderPlan::SUCCESS] : '';

		OrderPlan::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[OrderPlan::SUCCESS] = NULL;

	}//END clearSuccess 









}//END class OrderPlan




 ?>