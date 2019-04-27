<?php 

namespace Hcode\Model;


use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Rule;




class Image extends Model
{

	# Session
	const SESSION = "ImageSession";

	# Error - Success
	const SUCCESS = "Image-Success";
	const ERROR = "Image-Error";





    
    public function update()
	{

		$sql = new Sql();

		

		$results = $sql->select("

			CALL sp_imagesupdate_save(
			               
                :idimage,
                :iduser,
                :instatus,
                :inposition,
                :desimage,
                :desdescription,
                :desphoto,
                :desthumbnail

                

			)", 
			
			[

				':idimage'=>$this->getidimage(),
				':iduser'=>$this->getiduser(),
				':instatus'=>$this->getinstatus(),
				':inposition'=>$this->getinposition(),
				':desimage'=>utf8_decode($this->getdesimage()),
				':desdescription'=>utf8_decode($this->getdesdescription()),
				':desphoto'=>$this->getdesphoto(),
				':desthumbnail'=>$this->getdesthumbnail()
				
			]
        
            
        );//end select
        


		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if

        

	}//END save




	public function getImage( $idimage )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_images
			WHERE idimage = :idimage

			", 
			
			[

				':idimage'=>$idimage

			]
		
		);//end select

		foreach( $results as &$row )
		{
			# code...		
			$row['desimage'] = utf8_encode($row['desimage']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

		}//end foreach

		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END getEvent





	public function get( $iduser )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_images
			WHERE iduser = :iduser

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desimage'] = utf8_encode($row['desimage']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

		}//end foreach


		 /**SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X  */

		$numImages = $sql->select("
			
			SELECT FOUND_ROWS() AS numimages;
			
		");//end select

		return [

			'results'=>$results,
			'numimages'=>(int)$numImages[0]["numimages"]

		];//end return


		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if  */

	}//END get






	public function getPage( $iduser, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_images
			WHERE iduser = :iduser
			LIMIT $start, $itensPerPage;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desimage'] = utf8_encode($row['desimage']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numImages = $sql->select("
		
			SELECT FOUND_ROWS() AS numimages;
			
		");//end select

		return [

			'results'=>$results,
			'numimages'=>(int)$numImages[0]["numimages"],
			'pages'=>ceil($numImages[0]["numimages"] / $itensPerPage)

		];//end return


		

		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if */

    }//END getPage
    




    public function getSearch( $iduser, $search, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
			FROM tb_images
			WHERE iduser = :iduser AND desimage LIKE :search
			LIMIT $start, $itensPerPage;

			", 
			
			[

				':iduser'=>$iduser,
				':search'=>'%'.$search.'%'

			]
		
		);//end select


		foreach( $results as &$row )
		{
			# code...		
			$row['desimage'] = utf8_encode($row['desimage']);
			$row['desdescription'] = utf8_encode($row['desdescription']);

		}//end foreach

		/** SELECT FOUND_ROWS() NÃO FUNCIONA PARA MYSQL 5.X */
		$numImages = $sql->select("
		
			SELECT FOUND_ROWS() AS numimages;
			
		");//end select

		return [

			'results'=>$results,
			'numimages'=>(int)$numImages[0]["numimages"],
			'pages'=>ceil($numImages[0]["numimages"] / $itensPerPage)

		];//end return


		

		/**if( count($results) > 0 )
		{

			$this->setData($results);
			
		}//end if */

    }//END getSearch







    public function maxImages( $inplan )
	{

		switch( $inplan )
		{
			case '001':
				# code...
				return Rule::MAX_IMAGES_FREE;
				break;

			case '101':
			case '103':
			case '104':
			case '106':
			case '109':
			case '112':
				# code...
				return Rule::MAX_IMAGES_BASIC;
				break;

			case '203':
			case '204':
			case '206':
			case '209':
			case '212':
				# code...
				return Rule::MAX_IMAGES_INTERMEDIATE;
				break;

			case '303':
			case '304':
			case '306':
			case '309':
			case '312':
				# code...
				return Rule::MAX_IMAGES_ADVANCED;
				break;
			
			default:
				# code...
				return Rule::MAX_IMAGES_FREE;
				break;

		}//end switch



	}//END maxEvents



	

	




	public function delete()
	{
		$sql = new Sql();

		$sql->query("
		
			DELETE FROM tb_images
			WHERE idimage = :idimage
			
			",
			
			[

				':idimage'=>$this->getidimage()

			]
		
		);//end query

	}//END delete







	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_images

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[Image::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Image::ERROR]) && $_SESSION[Image::ERROR]) ? $_SESSION[Image::ERROR] : '';

		Image::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Image::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Image::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Image::SUCCESS]) && $_SESSION[Image::SUCCESS]) ? $_SESSION[Image::SUCCESS] : '';

		Image::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Image::SUCCESS] = NULL;

	}//END clearSuccess 









	public function toSession()
	{
		$_SESSION[Image::SESSION] = $this->getValues();

	}//END toSession







	public function getFromSession()
	{

		$this->setData($_SESSION[Image::SESSION]);

	}//END getFromSession











}//END class Image




 ?>