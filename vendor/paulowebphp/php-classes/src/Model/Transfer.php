<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;
use \Core\Model\Cart;
use \Core\Model\Address;
use \Core\Model\Payment;
use \Moip\Moip;
use \Moip\Auth\BasicAuth;



class Transfer extends Model
{

	# Session
	const SESSION = "TransferSession";

	# Error - Success
	const SUCCESS = "Transfer-Success";
	const ERROR = "Transfer-Error";





	public function save()
	{
			

		$sql = new Sql();

		$results = $sql->select("


			CALL sp_transfers_save(

				:idtransfer,
				:iduser,
				:idstatus,
				:destransfercode,
				:destransferholdername	,
				:desbanknumber,
				:desagencynumber,
				:desagencycheck,
				:desaccounttype,
				:desaccountnumber,
				:desaccountcheck,
				:vlamount
		

			)", 
			
			[

				
				':idtransfer'=>$this->getidtransfer(),
				':iduser'=>$this->getiduser(),
				':idstatus'=>$this->getidstatus(),
				':destransfercode'=>$this->getdestransfercode(),
				':destransferholdername'=>utf8_decode($this->getdestransferholdername()),
				':desbanknumber'=>$this->getdesbanknumber(),
				':desagencynumber'=>$this->getdesagencynumber(),
				':desagencycheck'=>$this->getdesagencycheck(),
				':desaccounttype'=>$this->getdesaccounttype(),
				':desaccountnumber'=>$this->getdesaccountnumber(),
				':desaccountcheck'=>$this->getdesaccountcheck(),
				':vlamount'=>$this->getvlamount()

			]
		
		);//end select


		//$results[0]['destransferholdername'] = utf8_encode($results[0]['destransferholdername']);


		



		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if


	}//END save















	public function get( $iduser )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT * 
		    FROM tb_transfers a
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    WHERE a.iduser = :iduser;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select




		if(count($results) > 0)
		{

			return $results;
		}//end if


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















	public static function setError( $msg )
	{

		$_SESSION[Transfer::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Transfer::ERROR]) && $_SESSION[Transfer::ERROR]) ? $_SESSION[Transfer::ERROR] : '';

		Transfer::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Transfer::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Transfer::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Transfer::SUCCESS]) && $_SESSION[Transfer::SUCCESS]) ? $_SESSION[Transfer::SUCCESS] : '';

		Transfer::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Transfer::SUCCESS] = NULL;

	}//END clearSuccess 





	








}//END class Transfer




 ?>