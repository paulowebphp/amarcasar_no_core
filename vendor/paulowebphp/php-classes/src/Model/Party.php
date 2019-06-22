<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;
use \Core\Rule;




class Party extends Model
{

	# Session
	const SESSION = "PartySession";

	# Error - Success
	const SUCCESS = "Party-Success";
	const ERROR = "Party-Error";





    
    public function update()
	{

		$sql = new Sql();

		

		$results = $sql->select("

			CALL sp_parties_update(
			               
                :idparty,
                :iduser,
                :inpartystatus,
                :desdescription,
                :tmparty,
                :dtparty,
                :desaddress,
				:desnumber,
				:descomplement,
				:desdistrict,
				:descity,
				:desstate,
				:descountry,
				:desphoto,
				:desextension

			)", 
			
			[

				':idparty'=>$this->getidparty(),
				':iduser'=>$this->getiduser(),
				':inpartystatus'=>$this->getinpartystatus(),
				':desdescription'=>utf8_decode($this->getdesdescription()),
				':tmparty'=>$this->gettmparty(),
				':dtparty'=>$this->getdtparty(),
				':desaddress'=>utf8_decode($this->getdesaddress()),
				':desnumber'=>$this->getdesnumber(),
				':descomplement'=>utf8_decode($this->getdescomplement()),
				':desdistrict'=>utf8_decode($this->getdesdistrict()),
				':descity'=>utf8_decode($this->getdescity()),
				':desstate'=>utf8_decode($this->getdesstate()),
				':descountry'=>utf8_decode($this->getdescountry()),
				':desphoto'=>$this->getdesphoto(),
				':desextension'=>$this->getdesextension()
				
			]
        
            
        );//end select
		

		$results[0]['desdescription'] = utf8_encode($results[0]['desdescription']);
		$results[0]['deslocation'] = utf8_encode($results[0]['deslocation']);


		
		

		if( count($results[0]) > 0 )
		{

			$this->setData($results[0]);

		}//end if

		

	}//END save








	public function get( $iduser )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_parties
			WHERE iduser = :iduser

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		$results[0]['desdescription'] = utf8_encode($results[0]['desdescription']);
		$results[0]['deslocation'] = utf8_encode($results[0]['deslocation']);
		

		if( count($results) > 0 )
		{	

			$this->setData($results[0]);
			
		}//end if


	}//END get












	
	public function delete()
	{

		$sql = new Sql();

		$sql->query("
		
			DELETE FROM tb_parties
			WHERE idparty = :idparty
			
			",
			
			[

				':idparty'=>$this->getidparty()

			]
		
		);//end query


	}//END delete











	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_parties

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[Party::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Party::ERROR]) && $_SESSION[Party::ERROR]) ? $_SESSION[Party::ERROR] : '';

		Party::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Party::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Party::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Party::SUCCESS]) && $_SESSION[Party::SUCCESS]) ? $_SESSION[Party::SUCCESS] : '';

		Party::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Party::SUCCESS] = NULL;

	}//END clearSuccess 









}//END class Party




 ?>