<?php 

namespace Hcode;


use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Rule;




class Upload extends Model
{

	# Session
	const SESSION = "UploadSession";

	# Error - Success
	const SUCCESS = "Upload-Success";
	const ERROR = "Upload-Error";







	public static function checkPhoto($iduser, $id_entity_photo, $extension)
	{
		if( file_exists(

			$_SERVER['DOCUMENT_ROOT'] . 
			DIRECTORY_SEPARATOR. "uploads" . 
			DIRECTORY_SEPARATOR. "images" . 
			DIRECTORY_SEPARATOR. $iduser . $id_entity_photo .
			".".
			$extension

		))
		{

			$url = "/uploads/images/" . $iduser . $id_entity_photo . "." . $extension;


		}//end if
		else
		{
			$url = "/uploads/default.jpg"; 

		}//end else

		return 'default.jpg';

	}//END getPhoto






	/**public function getValues()
	{
		$this->checkPhoto();

		$values = parent::getValues();

		return $values;

	}//END getValues */





	public function setSquarePhoto( $file, $iduser, $id_entity_photo )
	{


		$extension = explode('.', $file['name']);

		$extension = end($extension);

		$extension = strtolower($extension);

		$basename = $iduser .
		$id_entity_photo .
		"." .
		$extension;

		if( empty($file['name']) )
		{
			$basename = Upload::checkPhoto($iduser, $id_entity_photo, $extension);
			
		}//end if

	
		if(
			
			move_uploaded_file(
				
				$file["tmp_name"], 
				$_SERVER['DOCUMENT_ROOT'] . 
				DIRECTORY_SEPARATOR. "uploads" . 
				DIRECTORY_SEPARATOR. "images".
				DIRECTORY_SEPARATOR.
				$basename
				
			)
			
		)
		{

			Upload::setSuccess("Upload realizado");

		} 
		else
		{
			Upload::setError("Falha no Upload. Tente novamente.");
			header('Location: /dashboard/padrinhos-madrinhas/adicionar');
			exit;
			
		}

		return $basename;

	}//END setSquarePhoto







	public function setPhoto( $file )
	{

		if( empty($file['name']) )
		{
			$this->checkPhoto();
			
		}//end if
		else
		{
			$extension = explode('.', $file['name']);

			$extension = end($extension);

			switch($extension)
			{
				case "jpg":
				case "jpeg":

					$image = imagecreatefromjpeg($file["tmp_name"]);
					break;

				case "gif":

					$image = imagecreatefromgif($file["tmp_name"]);
					break;

				case "png":

					$image = imagecreatefrompng($file["tmp_name"]);
					break;

			}//end switch

			$dist = $_SERVER['DOCUMENT_ROOT'].
			DIRECTORY_SEPARATOR. "res" . 
			DIRECTORY_SEPARATOR. "site" . 
			DIRECTORY_SEPARATOR. "img" . 
			DIRECTORY_SEPARATOR. "products" .
			DIRECTORY_SEPARATOR. $this->getidproduct() . ".jpg";

			imagejpeg($image, $dist);

			imagedestroy($image);

			$this->checkPhoto();

		}//end else

	}//END setPhoto












	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_bestfriends

		");//end select

	}//END listAll







	public static function setError( $msg )
	{

		$_SESSION[Upload::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Upload::ERROR]) && $_SESSION[Upload::ERROR]) ? $_SESSION[Upload::ERROR] : '';

		Upload::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Upload::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Upload::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Upload::SUCCESS]) && $_SESSION[Upload::SUCCESS]) ? $_SESSION[Upload::SUCCESS] : '';

		Upload::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Upload::SUCCESS] = NULL;

	}//END clearSuccess 















}//END class Upload




 ?>