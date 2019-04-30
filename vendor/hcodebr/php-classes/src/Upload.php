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

		$mimeTypeAllowed = Rule::MIME_TYPE_UPLOAD;

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
		else if( !in_array($file['type'], $mimeTypeAllowed) )
		{

			$squarePhoto = Rule::DEFAULT_ENTITY_PHOTO;

		}//end else if
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

			$thumbnail = $this->setThumbnail(

				$basename, 
				$iduser, 
				$code_upload_entity, 
				$id_entity, 
				$extension

			);//end setThumbnail

		}//end else if
		else
		{
			Upload::setError("Falha no Upload. Tente novamente.");
			header('Location: /dashboard/padrinhos-madrinhas/adicionar');
			exit;
			
		}//end else

		return [

			'squarePhoto'=>$squarePhoto,
			'extension'=>$extension,
			'thumbnail'=>$thumbnail

		];//end return

	}//END setEntityPhoto







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






	public function setSquarePhoto( 
		
		$basename, 
		$iduser, 
		$code_upload_entity, 
		$id_entity, 
		$extension 
		
	)
	{

		header("Content-type: image/".$extension);
		

		$filename = $_SERVER['DOCUMENT_ROOT'] . 
		DIRECTORY_SEPARATOR . "uploads" . 
		DIRECTORY_SEPARATOR . "images".
		DIRECTORY_SEPARATOR .
		$basename;

		$canvasFilename = $filename;

		list($uploadedWidth, $uploadedHeight) = getimagesize($filename);

		//$dataUploaded = getimagesize($filename);



		if( $uploadedWidth === $uploadedHeight )
		{
			return $basename;

		}//end if
		else if( $uploadedWidth > $uploadedHeight )
		{

			$canvasWidth = $uploadedHeight;
			$canvasHeight = $uploadedHeight;

			$canvasAxisX = ($uploadedWidth-$uploadedHeight)/2;
			$canvasAxisY = 0;

		}//end if
		else if( $uploadedWidth < $uploadedHeight )
		{
			$canvasWidth = $uploadedWidth;
			$canvasHeight = $uploadedWidth;

			$canvasAxisX = 0;
			$canvasAxisY = ($uploadedHeight-$uploadedWidth)/2;

		}//end else

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
					$canvasAxisY, 
					$uploadedWidth, 
					$uploadedHeight
				
				);//imagecopy

				imagejpeg(
					
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
					$canvasAxisY, 
					$uploadedWidth, 
					$uploadedHeight
				
				);//end imagecopy

				imagepng(
					
					$canvas,
					$canvasFilename,					
					Rule::ENTITY_SQUARE_PHOTO_QUALITY_PNG
				
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
						$canvasAxisY, 
						$uploadedWidth, 
						$uploadedHeight
					
					);//end imagecopy
	
					imagegif(
						
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





	public function setThumbnail( $basename, $iduser, $code_upload_entity, $id_entity, $extension )
	{

		header("Content-type: image/".$extension);

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

		list($entityPhotoWidth, $entityPhotoHeight) = getimagesize($filename);

		$canvasWidth = $entityPhotoWidth;
		$canvasHeight = $entityPhotoHeight;

		$canvas = imagecreatetruecolor($canvasWidth, $canvasHeight);

		switch($extension)
		{


			case "jpg":
			case "jpeg":
				$entityPhoto = imagecreatefromjpeg($filename);

				imagecopyresampled($canvas, $entityPhoto, 0, 0, 0, 0, $canvasWidth, $canvasHeight, $entityPhotoWidth, $entityPhotoHeight);

				imagejpeg(
					
					$canvas,

					$canvasFilename
				
				);//end imagejpeg
				break;



			case "gif":
				$entityPhoto = imagecreatefromgif($filename);

				imagecopyresampled($canvas, $entityPhoto, 0, 0, 0, 0, $canvasWidth, $canvasHeight, $entityPhotoWidth, $entityPhotoHeight);

				imagegif(
					
					$canvas,

					$canvasFilename
				
				);//end imagejpeg
				break;



			case "png":
				$entityPhoto = imagecreatefrompng($filename);
				
				imagecopyresampled($canvas, $entityPhoto, 0, 0, 0, 0, $canvasWidth, $canvasHeight, $entityPhotoWidth, $entityPhotoHeight);

				imagepng(
					
					$canvas,

					$canvasFilename
				
				);//end imagejpeg
				break;

		}//end switch
		
		imagedestroy($entityPhoto);

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