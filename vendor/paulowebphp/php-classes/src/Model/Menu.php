<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;




class Menu extends Model
{

	# Session
	const SESSION = "MenuSession";

	# Error - Success
	const SUCCESS = "Menu-Success";
	const ERROR = "Menu-Error";





    
    public function update()
	{

		$sql = new Sql();
		
       
		$results = $sql->select("

			CALL sp_menus_update(

				:idmenu,
				:iduser,
                :inwedding,
                :inparty,
                :inbestfriend,
				:inrsvp,
				:inmessage,
				:instore,
				:inevent,
				:inalbum,
				:invideo,
				:instakeholder


			)", 
			
			[

				':idmenu'=>$this->getidmenu(),
				':iduser'=>$this->getiduser(),
				':inwedding'=>$this->getinwedding(),
				':inparty'=>$this->getinparty(),
				':inbestfriend'=>$this->getinbestfriend(),
				':inrsvp'=>$this->getinrsvp(),
				':inmessage'=>$this->getinmessage(),
				':instore'=>$this->getinstore(),
				':inevent'=>$this->getinevent(),
				':inalbum'=>$this->getinalbum(),
				':invideo'=>$this->getinvideo(),
				':instakeholder'=>$this->getinstakeholder()

			]
		
		);//end select




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
			FROM tb_weddings
			WHERE iduser = :iduser

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select

		foreach( $results as &$row )
		{
			# code...		
			$row['desweddingdescription'] = utf8_encode($row['desweddingdescription']);
			$row['desweddinglocation'] = utf8_encode($row['desweddinglocation']);

		}//end foreach

		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END get







	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_weddings

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[Menu::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Menu::ERROR]) && $_SESSION[Menu::ERROR]) ? $_SESSION[Menu::ERROR] : '';

		Menu::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Menu::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Menu::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Menu::SUCCESS]) && $_SESSION[Menu::SUCCESS]) ? $_SESSION[Menu::SUCCESS] : '';

		Menu::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Menu::SUCCESS] = NULL;

	}//END clearSuccess 









	public function toSession()
	{
		$_SESSION[Menu::SESSION] = $this->getValues();

	}//END toSession







	public function getFromSession()
	{

		$this->setData($_SESSION[Menu::SESSION]);

	}//END getFromSession









}//END class Menu




 ?>