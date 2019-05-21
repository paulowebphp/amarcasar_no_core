<?php 

namespace Core\Model;

use \Core\DB\Sql;
use \Core\Model;



class UserAddress extends Model
{


	const ERROR = "UserAddressError";

	const SUCCESS = "UserAddressSuccess";

	






	

	public function update()
	{

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_usersaddresses_update(

				:iduseraddress,
				:iduser,
	            :deszipcode, 
				:desaddress,
	            :desnumber,
	            :descomplement,
	            :desdistrict,
	            :descity,
	            :desstate,
	            :descountry
	            


			);", 
			
			[

				':iduseraddress'=>$this->getiduseraddress(),
				':iduser'=>$this->getiduser(),
				':deszipcode'=>$this->getdeszipcode(),
				':desaddress'=>utf8_decode($this->getdesaddress()),
				':desnumber'=>$this->getdesnumber(),
				':descomplement'=>utf8_decode($this->getdescomplement()),
				':desdistrict'=>utf8_decode($this->getdesdistrict()),
				':descity'=>utf8_decode($this->getdescity()),
				':desstate'=>utf8_decode($this->getdesstate()),
				':descountry'=>utf8_decode($this->getdescountry())

			]
		
		);//end select



		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if
		



	}//END update








	public static function setError( $msg )
	{

		$_SESSION[UserAddress::ERROR] = $msg;

	}//END setError








	public static function getError()
	{

		$msg = (isset($_SESSION[UserAddress::ERROR]) && $_SESSION[UserAddress::ERROR]) ? $_SESSION[UserAddress::ERROR] : '';

		UserAddress::clearError();

		return $msg;

	}//END getError








	public static function clearError()
	{
		$_SESSION[UserAddress::ERROR] = NULL;

	}//END clearError
	







	public static function setSuccess( $msg )
	{

		$_SESSION[UserAddress::SUCCESS] = $msg;

	}//END setSuccess










	public static function getSuccess()
	{

		$msg = (isset($_SESSION[UserAddress::SUCCESS]) && $_SESSION[UserAddress::SUCCESS]) ? $_SESSION[UserAddress::SUCCESS] : '';

		UserAddress::clearSuccess();

		return $msg;

	}//END getSuccess








	public static function clearSuccess()
	{
		$_SESSION[UserAddress::SUCCESS] = NULL;

	}//END clearSuccess










}//END class UserAddress


 ?>