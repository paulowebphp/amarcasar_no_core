<?php 

namespace Core\Model;

use \Core\DB\Sql;
use \Core\Model;
use \Moip\Moip;
use \Moip\Auth\OAuth;




class Account extends Model
{

	const SESSION_ERROR = "AccountError";

	



	

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

		$_SESSION[Account::SESSION_ERROR] = $msg;


	}//END setMsgErro





	public static function getError()
	{

		$msg = (isset($_SESSION[Account::SESSION_ERROR])) ? $_SESSION[Account::SESSION_ERROR] : "";

		Account::clearError();

		return $msg;

	}//END getMsgErro





	public static function clearError()
	{

		$_SESSION[Account::SESSION_ERROR] = NULL;

	}//END clearMsgError





}//END class Account





 ?>