<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;
use \Core\Model\Cart;
use \Core\Model\Address;
use \Core\Model\Payment;
use \Moip\Moip;
use \Moip\Auth\BasicAuth;



class Order extends Model
{




	# Session
	const SESSION = "OrderSession";

	# Error - Success
	const SUCCESS = "Order-Success";
	const ERROR = "Order-Error";
	








	public function update()
	{
			

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_orders_update(

				:idorder,
				:iduser,
				:idcart,
				:idcustomer,
				:idpayment,
				:desordercode,
				:vltotal

			)", 
			
			[

				':idorder'=>$this->getidorder(),
				':iduser'=>$this->getiduser(),
				':idcart'=>$this->getidcart(),
				':idcustomer'=>$this->getidcustomer(),
				':idpayment'=>$this->getidpayment(),
				':desordercode'=>$this->getdesordercode(),
				':vltotal'=>$this->getvltotal()

			]
		
		);//end select


		$results[0]['desname'] = utf8_encode($results[0]['desname']);
		$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		$results[0]['descomplement'] = utf8_encode($results[0]['descomplement']);
		$results[0]['descity'] = utf8_encode($results[0]['descity']);
		$results[0]['desdistrict'] = utf8_encode($results[0]['desdistrict']);




		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if


	}//END update














	public function getProducts()
	{

		$sql = new Sql();

		$results = $sql->select("

		    SELECT b.idproduct,b.iduser, b.inbought, b.incategory, b.desproduct,b.vlprice,b.desphoto,b.desextension,
			COUNT(*) AS nrqtd,
			SUM(b.vlprice) as vltotal
			FROM tb_cartsitems a 
			INNER JOIN tb_products b ON a.iditem = b.idproduct
			INNER JOIN tb_carts c ON a.idcart = c.idcart
			WHERE a.initem = 1
			AND a.idcart = :idcart
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

		$results[0]['desname'] = utf8_encode($results[0]['desname']);
		$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		$results[0]['descomplement'] = utf8_encode($results[0]['descomplement']);
		$results[0]['descity'] = utf8_encode($results[0]['descity']);
		$results[0]['desdistrict'] = utf8_encode($results[0]['desdistrict']);



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
		    INNER JOIN tb_users b ON a.iduser = b.iduser
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_customers d ON a.idcustomer = d.idcustomer
		    INNER JOIN tb_payments e ON a.idpayment = e.idpayment
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












	public static function getPage( $iduser, $initem, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS * 
		    FROM tb_orders a
		    INNER JOIN tb_users b ON a.iduser = b.iduser
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
            INNER JOIN tb_cartsitems h ON a.idcart = h.idcart
		    INNER JOIN tb_customers d ON a.idcustomer = d.idcustomer
		    INNER JOIN tb_payments e ON a.idpayment = e.idpayment
		    WHERE a.iduser = :iduser
            AND h.initem = :initem
		    ORDER BY a.dtregister DESC;
			LIMIT $start, $itensPerPage;




		", 
			
			[

				':iduser'=>$iduser,
				':initem'=>$initem

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








	public static function getPageSearch( $iduser, $initem, $search, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
		    FROM tb_orders a
		    INNER JOIN tb_users b ON a.iduser = b.iduser
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_cartsitems h ON a.idcart = h.idcart
		    INNER JOIN tb_customers d ON a.idcustomer = d.idcustomer
		    INNER JOIN tb_payments e ON a.idpayment = e.idpayment
		    WHERE a.iduser = :iduser
		    AND h.initem = :initem
			AND d.desname LIKE :search 
			ORDER BY a.dtregister DESC
			LIMIT $start, $itensPerPage;


			", 
			
			[

				':iduser'=>$iduser,
				':initem'=>$initem,
				':search'=>'%'.$search.'%'

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




























	/*public static function getPage( $iduser, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS * 
		    FROM tb_orders a
		    INNER JOIN tb_users b ON a.iduser = b.iduser
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_customers d ON a.idcustomer = d.idcustomer
		    INNER JOIN tb_payments e ON a.idpayment = e.idpayment
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
		    INNER JOIN tb_users b ON a.iduser = b.iduser
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_customers d ON a.idcustomer = d.idcustomer
		    INNER JOIN tb_payments e ON a.idpayment = e.idpayment
		    WHERE a.iduser = :iduser
			OR d.desname LIKE :search 
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

*/





































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









		







	public function getCart()
	{

		$cart = new Cart();

		$cart->get((int)$this->getidcart());

		return $cart;
		
	}//END getCart











		public function toSession()
	{
		$_SESSION[Order::SESSION] = $this->getValues();

	}//END toSession













	public function getFromSession()
	{

		$this->setData($_SESSION[Order::SESSION]);

	}//END getFromSession












	public function getAddress()
	{

		$address = new Address();

		$address->setData($this->getValues());

		return $address;

	}//END getAddress





































	public static function setError( $msg )
	{

		$_SESSION[Order::ERROR] = $msg;

	}//END setError











	public static function getError()
	{

		$msg = (isset($_SESSION[Order::ERROR]) && $_SESSION[Order::ERROR]) ? $_SESSION[Order::ERROR] : '';

		Order::clearError();

		return $msg;

	}//END getError












	public static function clearError()
	{
		$_SESSION[Order::ERROR] = NULL;

	}//END clearError











	public static function setSuccess($msg)
	{

		$_SESSION[Order::SUCCESS] = $msg;

	}//END setSuccess









	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Order::SUCCESS]) && $_SESSION[Order::SUCCESS]) ? $_SESSION[Order::SUCCESS] : '';

		Order::clearSuccess();

		return $msg;

	}//END getSuccess










	public static function clearSuccess()
	{
		$_SESSION[Order::SUCCESS] = NULL;

	}//END clearSuccess 














}//END class Order




 ?>