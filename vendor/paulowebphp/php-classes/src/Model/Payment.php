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

	


	

	public function update()
	{

		

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_payments_update(

				:idpayment,
				:iduser,
	            :despaymentcode,
	            :desstatus,
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
				':desstatus'=>$this->getdesstatus(),
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
		    WHERE ipdayment = pipdayment;

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





}//END class Payment





 ?>