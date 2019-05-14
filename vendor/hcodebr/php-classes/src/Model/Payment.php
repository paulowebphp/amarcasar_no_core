<?php 

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Payment;
use \Moip\Moip;
use \Moip\Auth\OAuth;




class Payment extends Model
{

	const SESSION_ERROR = "PaymentError";

	


	

	public function save()
	{

		

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_payments_save(

				:idpayment,
				:iduser,
				:idorder,
	            :descustomercode,
	            :descardcode,
	            :desordercode,
	            :despaymentcode,
	            :desname,
	            :desholdername,
	            :desemail,
	            :intypedocument,
	            :desdocument,
	            :desholderdocument,
	            :nrphone,
	            :nrholderphone,
	            :dtbirth,
	            :dtholderbirth

			);", 
			
			[

				':idpayment'=>$this->getidpayment(),
				':iduser'=>$this->getiduser(),
				':idorder'=>$this->getidorder(),
				':descustomercode'=>$this->getdescustomercode(),
				':descardcode'=>$this->getdescardcode(),
				':desordercode'=>$this->getdesordercode(),
				':despaymentcode'=>$this->getdespaymentcode(),
				':desname'=>utf8_decode($this->getdesname()),
				':desholdername'=>utf8_decode($this->getdesholdername()),
				':desemail'=>$this->getdesemail(),
				':intypedocument'=>$this->getintypedocument(),
				':desdocument'=>$this->getdesdocument(),
				':desholderdocument'=>$this->getdesholderdocument(),
				':nrphone'=>$this->getnrphone(),
				':nrholderphone'=>$this->getnrholderphone(),
				':dtbirth'=>$this->getdtbirth(),
				':dtholderbirth'=>$this->getdtholderbirth()

			]
		
		);//end select

	

		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if



	}//END save






public function savePlan()
	{

		

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_paymentsplans_save(

				:idpaymentplan,
				:iduser,
	            :descustomercode,
	            :descardcode,
	            :desordercode,
	            :despaymentcode,
	            :deschannelidcode,
	            :desname,
	            :desholdername,
	            :desemail,
	            :intypedocument,
	            :desdocument,
	            :desholderdocument,
	            :nrphone,
	            :nrholderphone,
	            :dtbirth,
	            :dtholderbirth

			);", 
			
			[

				':idpaymentplan'=>$this->getidpaymentplan(),
				':iduser'=>$this->getiduser(),
				':descustomercode'=>$this->getdescustomercode(),
				':descardcode'=>$this->getdescardcode(),
				':desordercode'=>$this->getdesordercode(),
				':despaymentcode'=>$this->getdespaymentcode(),
				':deschannelidcode'=>$this->getdeschannelidcode(),
				':desname'=>utf8_decode($this->getdesname()),
				':desholdername'=>utf8_decode($this->getdesholdername()),
				':desemail'=>$this->getdesemail(),
				':intypedocument'=>$this->getintypedocument(),
				':desdocument'=>$this->getdesdocument(),
				':desholderdocument'=>$this->getdesholderdocument(),
				':nrphone'=>$this->getnrphone(),
				':nrholderphone'=>$this->getnrholderphone(),
				':dtbirth'=>$this->getdtbirth(),
				':dtholderbirth'=>$this->getdtholderbirth()

			]
		
		);//end select






	

		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if



	}//END savePlan










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





	

	public static function setMsgError( $msg )
	{

		$_SESSION[Payment::SESSION_ERROR] = $msg;


	}//END setMsgErro





	public static function getMsgError()
	{

		$msg = (isset($_SESSION[Payment::SESSION_ERROR])) ? $_SESSION[Payment::SESSION_ERROR] : "";

		Payment::clearMsgError();

		return $msg;

	}//END getMsgErro





	public static function clearMsgError()
	{

		$_SESSION[Payment::SESSION_ERROR] = NULL;

	}//END clearMsgError





}//END class Payment





 ?>