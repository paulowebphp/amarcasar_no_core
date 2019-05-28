<?php 

namespace Core\Model;

use \Core\DB\Sql;
use \Core\Model;
use \Core\Model\Payment;
use \Moip\Moip;
use \Moip\Auth\OAuth;




class Payment extends Model
{

	const SESSION_ERROR = "PaymentError";
	const SUCCESS = "PaymentSuccess";

	


	

	public function update()
	{

		

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_payments_update(

				:idpayment,
				:iduser,
	            :despaymentcode,
	            :inpaymentstatus,
	            :desholdername,
	            :nrholdercountryarea,
	            :nrholderddd,
	            :nrholderphone,
	            :inholdertypedoc,
	            :desholderdocument,
	            :desholderzipcode,
	            :desholderaddress,
	            :desholdernumber,
	            :desholdercomplement,
	            :desholderdistrict,
	            :desholdercity,
	            :desholderstate,
	            :dtholderbirth

			);", 
			
			[

				':idpayment'=>$this->getidpayment(),
				':iduser'=>$this->getiduser(),
				':despaymentcode'=>$this->getdespaymentcode(),
				':inpaymentstatus'=>$this->getinpaymentstatus(),
				':desholdername'=>utf8_decode($this->getdesholdername()),
				':nrholdercountryarea'=>$this->getnrholdercountryarea(),
				':nrholderddd'=>$this->getnrholderddd(),
				':nrholderphone'=>$this->getnrholderphone(),
				':inholdertypedoc'=>$this->getinholdertypedoc(),
				':desholderdocument'=>$this->getdesholderdocument(),
				':desholderzipcode'=>$this->getdesholderzipcode(),
				':desholderaddress'=>$this->getdesholderaddress(),
				':desholdernumber'=>$this->getdesholdernumber(),
				':desholdercomplement'=>$this->getdesholdercomplement(),
				':desholderdistrict'=>$this->getdesholderdistrict(),
				':desholdercity'=>$this->getdesholdercity(),
				':desholderstate'=>$this->getdesholderstate(),
				':dtholderbirth'=>$this->getdtholderbirth()

			]
		
		);//end select



		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if



	}//END save








	public function get( $ipdayment )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT * 
		    FROM tb_payments a
		    INNER JOIN tb_users d ON c.iduser = d.iduser
		    WHERE ipdayment = :ipdayment;

			", 
			
			[

				':ipdayment'=>$ipdayment

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






	public static function getFromDespaymentcode( $despaymentcode )
	{


		$sql = new Sql();

		$results = $sql->select("

			SELECT * 
		    FROM tb_payments
		    WHERE despaymentcode = :despaymentcode
		    ORDER BY dtregister DESC
		    LIMIT 1;

			", 
			
			[

				':despaymentcode'=>$despaymentcode

			]
		
		);//end select



		if( count($results) > 0 )
		{

			return $results[0];
			
		}//end if
		else
		{

			return false;

		}



	}//END getFromDespaymentcode








	public static function updateFromNotification( $idpayment, $inpaymentstatus )
	{


		$sql = new Sql();

		$sql->query("

			UPDATE tb_payments 
			SET inpaymentstatus = :inpaymentstatus
		    WHERE idpayment = :idpayment;

			", 
			
			[

				':idpayment'=>$idpayment,
				':inpaymentstatus'=>$inpaymentstatus

			]
		
		);//end query

		return true;


	}//END getFromDespaymentcode





	

	public static function setError( $msg )
	{

		$_SESSION[Payment::SESSION_ERROR] = $msg;


	}//END setMsgErro





	public static function getError()
	{

		$msg = (isset($_SESSION[Payment::SESSION_ERROR])) ? $_SESSION[Payment::SESSION_ERROR] : "";

		Payment::clearError();

		return $msg;

	}//END getMsgErro





	public static function clearError()
	{

		$_SESSION[Payment::SESSION_ERROR] = NULL;

	}//END clearMsgError








	public static function setSuccess( $msg )
	{

		$_SESSION[Payment::SUCCESS] = $msg;

	}//END setSuccess










	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Payment::SUCCESS]) && $_SESSION[Payment::SUCCESS]) ? $_SESSION[Payment::SUCCESS] : '';

		Payment::clearSuccess();

		return $msg;

	}//END getSuccess








	public static function clearSuccess()
	{
		$_SESSION[Payment::SUCCESS] = NULL;

	}//END clearSuccess







}//END class Payment





 ?>