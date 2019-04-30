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






	public function setEntityPhoto( 
		
		$file, 
		$iduser, 
		$id_entity, 
		$code_upload_entity 
	
	)
	{
		
		$extension = explode('.', $file['name']);

		$extension = end($extension);

		$extension = strtolower($extension);

		$basename = $iduser .
		$code_upload_entity .
		$id_entity .
		"." .
		$extension;


		if( empty($file['name']) )
		{
			$basename = $this->checkPhoto(
				
				$iduser, 
				$code_upload_entity, 
				$id_entity, 
				$extension
			
			);//end checkPhoto
			
		}//end if
		else if(
			
			move_uploaded_file(
				
				$file["tmp_name"], 
				$_SERVER['DOCUMENT_ROOT'] . 
				DIRECTORY_SEPARATOR . "uploads" . 
				DIRECTORY_SEPARATOR . "images".
				DIRECTORY_SEPARATOR .
				$basename
				
			)//end move_uploaded_file
			
		)
		{

			$squarePhoto = $this->setSquarePhoto(
				
				$basename, 
				$iduser, 
				$code_upload_entity, 
				$id_entity, 
				$extension
			
			);//end setSquarePhoto

		}//end else if
		else
		{
			Upload::setError("Falha no Upload. Tente novamente.");
			header('Location: /dashboard/padrinhos-madrinhas/adicionar');
			exit;
			
		}//end else

		return [

			'squarePhoto'=>$squarePhoto,
			'extension'=>$extension

		];//end return

	}//END setEntityPhoto



	

	public function setSquarePhoto( 
		
		$basename, 
		$iduser, 
		$code_upload_entity, 
		$id_entity, 
		$extension 
		
	)
	{

		//header("Content-type: image/".$basename['extension']);

		$filename = $_SERVER['DOCUMENT_ROOT'] . 
		DIRECTORY_SEPARATOR . "uploads" . 
		DIRECTORY_SEPARATOR . "images".
		DIRECTORY_SEPARATOR .
		$basename;

		$canvasFilename = $filename;

		list($uploadedWidth, $uploadedHeight) = getimagesize($filename);

		$dataUploaded = getimagesize($filename);


		$canvasWidth = $dataUploaded[1];
		$canvasHeight = $dataUploaded[1];

		$canvasAxisX = ($dataUploaded[0]-$dataUploaded[1])/2;

		$canvas = imagecreatetruecolor($canvasWidth, $canvasHeight);

		switch($extension)
		{

			case "jpg":
			case "jpeg":
				$uploadedImage = imagecreatefromjpeg($filename);

				imagecopy(

					$canvas, 
					$uploadedImage, 
					0, 
					0, 
					$canvasAxisX, 
					0, 
					$uploadedWidth, 
					$uploadedHeight
				
				);//imagecopy

				imagejpeg(
					
					$canvas,
					$canvasFilename,					
					Rule::ENTITY_SQUARE_PHOTO_QUALITY
				
				);//end imagejpeg
				break;



			case "gif":
				$uploadedImage = imagecreatefromgif($filename);

				imagecopy(
					
					$canvas, 
					$uploadedImage, 
					0, 
					0, 
					$canvasAxisX, 
					0, 
					$uploadedWidth, 
					$uploadedHeight
				
				);//end imagecopy

				imagegif(
					
					$canvas,
					$canvasFilename,					
					Rule::ENTITY_SQUARE_PHOTO_QUALITY
				
				);//end imagejpeg
				break;



			case "png":
				$uploadedImage = imagecreatefrompng($filename);

				imagecopy(
					
					$canvas, 
					$uploadedImage, 
					0, 
					0, 
					$canvasAxisX, 
					0, 
					$uploadedWidth, 
					$uploadedHeight
				
				);//end imagecopy

				imagepng(
					
					$canvas,
					$canvasFilename,					
					Rule::ENTITY_SQUARE_PHOTO_QUALITY
				
				);//end imagejpeg
				break;

		}//end switch
		
		imagedestroy($uploadedImage);

		imagedestroy($canvas);

		return $basename;

	}//END setSquarePhoto






	public function checkPhoto(
		
		$iduser, 
		$code_upload_entity, 
		$id_entity, 
		$extension
		
	)
	{
		$basename = $iduser . 
		$code_upload_entity . 
		$id_entity . 
		"." . 
		$extension;


		if( file_exists(

			$_SERVER['DOCUMENT_ROOT'] . 
			DIRECTORY_SEPARATOR. "uploads" . 
			DIRECTORY_SEPARATOR. "images" . 
			DIRECTORY_SEPARATOR. 
			$basename

		))
		{

			return $basename;


		}//end if
		else
		{
			$basename = Rule::DEFAULT_ENTITY_PHOTO; 

		}//end else


		return $basename;

	}//END getPhoto








	public function setThumbnail( $basename, $iduser, $code_upload_entity, $id_entity, $extension )
	{

		//header("Content-type: image/".$basename['extension']);

		$filename = $_SERVER['DOCUMENT_ROOT'] . 
		DIRECTORY_SEPARATOR . "uploads" . 
		DIRECTORY_SEPARATOR . "images".
		DIRECTORY_SEPARATOR .
		$basename;

		$thumbnail = $iduser . 
		$code_upload_entity . 
		$id_entity .
		Rule::THUMBNAIL_SUFIX .
		'.' .
		$extension;

		$canvasFilename = $_SERVER['DOCUMENT_ROOT'] . 
		DIRECTORY_SEPARATOR . "uploads" . 
		DIRECTORY_SEPARATOR . "images".
		DIRECTORY_SEPARATOR . 
		$thumbnail;

		list($uploadedWidth, $uploadedHeight) = getimagesize($filename);

		$dataUploaded = getimagesize($filename);


		$canvasWidth = $dataUploaded[1];
		$canvasHeight = $dataUploaded[1];

		$canvasAxisX = ($dataUploaded[0]-$dataUploaded[1])/2;

		$canvas = imagecreatetruecolor($canvasWidth, $canvasHeight);

		switch($extension)
		{


			case "jpg":
			case "jpeg":
				$uploadedImage = imagecreatefromjpeg($filename);

				imagecopy($canvas, $uploadedImage, 0, 0, $canvasAxisX, 0, $uploadedWidth, $uploadedHeight);

				//imagecopyresampled($canvas, $uploadedImage, 0, 0, 0, 0, $canvasWidth, $canvasHeight, $uploadedWidth, $uploadedHeight);

				imagejpeg(
					
					$canvas,

					$canvasFilename,
					
					Rule::ENTITY_SQUARE_PHOTO_QUALITY
				
				);//end imagejpeg
				break;



			case "gif":
				$uploadedImage = imagecreatefromgif($filename);

				imagecopy($canvas, $uploadedImage, 0, 0, $canvasAxisX, 0, $uploadedWidth, $uploadedHeight);

				imagegif(
					
					$canvas,

					$canvasFilename,
					
					Rule::ENTITY_SQUARE_PHOTO_QUALITY
				
				);//end imagejpeg
				break;



			case "png":
				$uploadedImage = imagecreatefrompng($filename);

				imagecopy($canvas, $uploadedImage, 0, 0, $canvasAxisX, 0, $uploadedWidth, $uploadedHeight);

				imagepng(
					
					$canvas,

					$canvasFilename,
					
					Rule::ENTITY_SQUARE_PHOTO_QUALITY
				
				);//end imagejpeg
				break;

		}//end switch
		
		imagedestroy($uploadedImage);

		imagedestroy($canvas);

		return $thumbnail;

	}//END setThumbnail







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