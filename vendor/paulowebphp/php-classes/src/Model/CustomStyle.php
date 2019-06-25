<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;




class CustomStyle extends Model
{

	# Session
	const SESSION = "CustomStyleSession";

	# Error - Success
	const SUCCESS = "CustomStyle-Success";
	const ERROR = "CustomStyle-Error";





    
    public function update()
	{

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_customstyle_update(
			               
                :idcustomstyle,
                :iduser,
                :idtemplate,
                :desbanner,
                :desbannerextension,
                :descolorheader,
                :descolorheaderhover,
                :desbgcolorfooter,
                :descolorfooter,
                :descolorfooterhover,
                :descolorh1,
                :desfontfamilyh1,
                :descolorh2,
                :desfontfamilyh2,
                :descolorh3,
                :desfontfamilyh3,
                :descolorh4,
                :desfontfamilyh4,
                :descolortext,
                :descolorlinkhover,
                :desfontfamilytext,
                :desroundbordersize,
                :desbgcolorbutton,
                :desbgcolorbuttonhover,
                :descolorbutton,
                :descolorbuttonhover,
                :desbordercolorbutton,
                :desbordercolorbuttonhover,
                :desborderradiusbutton,
                :desfontfamilybutton


  
			)", 
			
			[

				':idcustomstyle'=>$this->getidcustomstyle(),
				':iduser'=>$this->getiduser(),
				':idtemplate'=>$this->getidtemplate(),
				':desbanner'=>$this->getdesbanner(),
				':desbannerextension'=>$this->getdesbannerextension(),
				':descolorheader'=>$this->getdescolorheader(),
				':descolorheaderhover'=>$this->getdescolorheaderhover(),
				':desbgcolorfooter'=>$this->getdesbgcolorfooter(),
				':descolorfooter'=>$this->getdescolorfooter(),
				':descolorfooterhover'=>$this->getdescolorfooterhover(),
				':descolorh1'=>$this->getdescolorh1(),
				':desfontfamilyh1'=>$this->getdesfontfamilyh1(),
				':descolorh2'=>$this->getdescolorh2(),
				':desfontfamilyh2'=>$this->getdesfontfamilyh2(),
				':descolorh3'=>$this->getdescolorh3(),
				':desfontfamilyh3'=>$this->getdesfontfamilyh3(),
				':descolorh4'=>$this->getdescolorh4(),
				':desfontfamilyh4'=>$this->getdesfontfamilyh4(),
				':descolortext'=>$this->getdescolortext(),
				':descolorlinkhover'=>$this->getdescolorlinkhover(),
				':desfontfamilytext'=>$this->getdesfontfamilytext(),
				':desroundbordersize'=>$this->getdesroundbordersize(),
				':desbgcolorbutton'=>$this->getdesbgcolorbutton(),
				':desbgcolorbuttonhover'=>$this->getdesbgcolorbuttonhover(),
				':descolorbutton'=>$this->getdescolorbutton(),
				':descolorbuttonhover'=>$this->getdescolorbuttonhover(),
				':desbordercolorbutton'=>$this->getdesbordercolorbutton(),
				':desbordercolorbuttonhover'=>$this->getdesbordercolorbuttonhover(),
				':desborderradiusbutton'=>$this->getdesborderradiusbutton(),
				':desfontfamilybutton'=>$this->getdesfontfamilybutton()
				
			]
        
            
        );//end select

	
		

		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if

        

	}//END save








	public static function updateTemplate( $iduser, $idcustomstyle, $idtemplate )
	{

		$sql = new Sql();

		$sql->query("

			UPDATE tb_customstyle
			SET idtemplate = :idtemplate
			WHERE iduser = :iduser
			AND idcustomstyle = :idcustomstyle

			", 
			
			[

				':iduser'=>$iduser,
				':idcustomstyle'=>$idcustomstyle,
				':idtemplate'=>$idtemplate

			]
		
		);//end select


	}//END updateTemplate









	public function get( $iduser )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_customstyle
			WHERE iduser = :iduser

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select

		
		

		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END get









	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_customstyle

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[CustomStyle::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[CustomStyle::ERROR]) && $_SESSION[CustomStyle::ERROR]) ? $_SESSION[CustomStyle::ERROR] : '';

		CustomStyle::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[CustomStyle::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[CustomStyle::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[CustomStyle::SUCCESS]) && $_SESSION[CustomStyle::SUCCESS]) ? $_SESSION[CustomStyle::SUCCESS] : '';

		CustomStyle::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[CustomStyle::SUCCESS] = NULL;

	}//END clearSuccess 









	public function toSession()
	{
		$_SESSION[CustomStyle::SESSION] = $this->getValues();

	}//END toSession







	public function getFromSession()
	{

		$this->setData($_SESSION[CustomStyle::SESSION]);

	}//END getFromSession









}//END class CustomStyle




 ?>