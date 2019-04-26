<?php 

namespace Hcode\Model;


use \Hcode\DB\Sql;
use \Hcode\Model;




class Story extends Model
{

	# Session
	const SESSION = "StorySession";

	# Error - Success
	const SUCCESS = "Story-Success";
	const ERROR = "Story-Error";





    
    public function update()
	{

		$sql = new Sql();


		$results = $sql->select("

			CALL sp_storiesupdate_save(
			
				:idstory,
				:iduser,
				:instatus,
				:inposition,
				:desstory,
				:desdescription,
				:desphoto,
				:desthumbnail,
				:desphoto2,
				:desthumbnail2,
				:desphoto3,
				:desthumbnail3,
				:desphoto4,
				:desthumbnail4,
				:desphoto5,
				:desthumbnail5

			)", 
			
			[

				':idstory'=>$this->getidstory(),
				':iduser'=>$this->getiduser(),
				':instatus'=>$this->getinstatus(),
				':inposition'=>$this->getinposition(),
				':desstory'=>utf8_decode($this->getdesstory()),
				':desdescription'=>utf8_decode($this->getdesdescription()),
				':desphoto'=>$this->getdesphoto(),
				':desthumbnail'=>$this->getdesthumbnail(),
				':desphoto2'=>$this->getdesphoto2(),
				':desthumbnail2'=>$this->getdesthumbnail2(),
				':desphoto3'=>$this->getdesphoto3(),
				':desthumbnail3'=>$this->getdesthumbnail3(),
				':desphoto4'=>$this->getdesphoto4(),
				':desthumbnail4'=>$this->getdesthumbnail4(),
				':desphoto5'=>$this->getdesphoto5(),
				':desthumbnail5'=>$this->getdesthumbnail5()
				
			]
		
		);//end select

		

        foreach( $results as &$row )
		{
			# code...		
			$row['desstory'] = utf8_encode($row['desstory']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

		}//end foreach

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
			FROM tb_stories
			WHERE iduser = :iduser

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select

		$results[0]['desstory'] = utf8_encode($results[0]['desstory']);
		$results[0]['desdescription'] = utf8_encode($results[0]['desdescription']);
		
		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END get







	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_stories

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[Story::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Story::ERROR]) && $_SESSION[Story::ERROR]) ? $_SESSION[Story::ERROR] : '';

		Story::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Story::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Story::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Story::SUCCESS]) && $_SESSION[Story::SUCCESS]) ? $_SESSION[Story::SUCCESS] : '';

		Story::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Story::SUCCESS] = NULL;

	}//END clearSuccess 









	public function toSession()
	{
		$_SESSION[Story::SESSION] = $this->getValues();

	}//END toSession







	public function getFromSession()
	{

		$this->setData($_SESSION[Story::SESSION]);

	}//END getFromSession









}//END class Story




 ?>