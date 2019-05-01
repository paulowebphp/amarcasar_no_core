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





	
	/**public function checkPhoto(
		
		$iduser, 
		$upload_code_entity, 
		$id_entity, 
		$extension
		
	)
	{
		$basename = $iduser . 
		$upload_code_entity . 
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

	}//END getPhoto */








	public function setEntityPhoto( 
		
		$file, 
		$iduser,
		$upload_code_entity,
		$id_entity

	)
	{
		
		$extension = explode('.', $file['name']);

		$extension = end($extension);

		$extension = strtolower($extension);

		//$mimeTypeAllowed = Rule::MIME_TYPE_UPLOAD;

		$basename = $iduser .
		$upload_code_entity .
		$id_entity .
		"." .
		$extension;

		if( !in_array($file['type'], Rule::MIME_TYPE_UPLOAD) )
		{

			$basename = Rule::DEFAULT_ENTITY_PHOTO;

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
		
			$basename = $this->setPhotoSquare(
				
				$basename, 
				$iduser, 
				$upload_code_entity, 
				$id_entity, 
				$extension
			
			);//end setPhotoSquare

		}//end else if
		else
		{
			Upload::setError("Falha no upload da imagem | Tente novamente");
			header('Location: /dashboard/padrinhos-madrinhas/adicionar');
			exit;
			
		}//end else

		return $basename;

	}//END setEntityPhoto









	public function setPhotoSquare( 
		
		$basename, 
		$iduser, 
		$upload_code_entity, 
		$id_entity, 
		$extension 
		
	)
	{

		try 
		{

			//code...
			header("Content-type: image/".$extension);
			

			$filename = $_SERVER['DOCUMENT_ROOT'] . 
			DIRECTORY_SEPARATOR . "uploads" . 
			DIRECTORY_SEPARATOR . "images".
			DIRECTORY_SEPARATOR .
			$basename;

			//$canvasFilename = $filename;

			list($uploadedWidth, $uploadedHeight) = getimagesize($filename);

			//$dataUploaded = getimagesize($filename);

			if( $uploadedWidth > 1500 )
			{
				$uploadedWidth = $uploadedWidth * 0.6;
				$uploadedHeight = $uploadedHeight * 0.6;
			}//end if
			else if( $uploadedWidth > 2000 )
			{
				$uploadedWidth = $uploadedWidth * 0.5;
				$uploadedHeight = $uploadedHeight * 0.5;

			}//end else if
			
			else if( $uploadedWidth > 3000 )
			{
				$uploadedWidth = $uploadedWidth * 0.34;
				$uploadedHeight = $uploadedHeight * 0.34;

			}//end else if
			
			else if( $uploadedWidth > 4000 )
			{
				$uploadedWidth = $uploadedWidth * 0.25;
				$uploadedHeight = $uploadedHeight * 0.25;

			}//end else if
			
			else if( $uploadedWidth > 5000 )
			{
				$uploadedWidth = $uploadedWidth * 0.2;
				$uploadedHeight = $uploadedHeight * 0.2;

			}//end else if
			
			else if( $uploadedWidth > 6000 )
			{
				$uploadedWidth = $uploadedWidth * 0.17;
				$uploadedHeight = $uploadedHeight * 0.17;

			}//end else if
			
			else if( $uploadedWidth > 7000 )
			{
				$uploadedWidth = $uploadedWidth * 0.12;
				$uploadedHeight = $uploadedHeight * 0.12;

			}//end else if

			if( $uploadedWidth === $uploadedHeight )
			{
				$basename = $this->setThumbnail(

					$basename, 
					$iduser, 
					$upload_code_entity, 
					$id_entity, 
					$extension

				);//end setThumbnail

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

			}//end else if

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
						$filename,					
						Rule::ENTITY_SQUARE_PHOTO_QUALITY
					
					);//end imagejpeg

					imagedestroy($uploadedImage);
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
						$filename,					
						Rule::ENTITY_SQUARE_PHOTO_QUALITY_PNG
					
					);//end imagejpeg

					imagedestroy($uploadedImage);
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
							$filename,					
							Rule::ENTITY_SQUARE_PHOTO_QUALITY
						
						);//end imagejpeg

						imagedestroy($uploadedImage);
						break;

			}//end switch

			imagedestroy($canvas);

			$basename = $this->setThumbnail(

				$basename, 
				$iduser, 
				$upload_code_entity, 
				$id_entity, 
				$extension

			);//end setThumbnail

			return $basename;

		}//end try
		catch( \Throwable $error ) 
		{
			//throw $th;
			return false;

		}//end catch

	}//END setPhotoSquare





	public function setThumbnail( 

		$basename, 
		$iduser, 
		$upload_code_entity, 
		$id_entity, 
		$extension
	
	)
	{

		try 
		{
			//code...
			header("Content-type: image/".$extension);

			$filename = $_SERVER['DOCUMENT_ROOT'] . 
			DIRECTORY_SEPARATOR . "uploads" . 
			DIRECTORY_SEPARATOR . "images".
			DIRECTORY_SEPARATOR .
			$basename;

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

						$filename
					
					);//end imagejpeg
					imagedestroy($entityPhoto);
					break;



				case "gif":
					$entityPhoto = imagecreatefromgif($filename);

					imagecopyresampled($canvas, $entityPhoto, 0, 0, 0, 0, $canvasWidth, $canvasHeight, $entityPhotoWidth, $entityPhotoHeight);

					imagegif(
						
						$canvas,

						$filename
					
					);//end imagejpeg
					imagedestroy($entityPhoto);
					break;



				case "png":
					$entityPhoto = imagecreatefrompng($filename);
					
					imagecopyresampled($canvas, $entityPhoto, 0, 0, 0, 0, $canvasWidth, $canvasHeight, $entityPhotoWidth, $entityPhotoHeight);

					imagepng(
						
						$canvas,

						$filename
					
					);//end imagejpeg
					imagedestroy($entityPhoto);
					break;

			}//end switch
			
			imagedestroy($canvas);

			return $basename;

		}//end try
		catch( \Throwable $th )
		{
			//throw $th;
			return false;

		}//end catch

	}//END setThumbnail







	/**public function setPhoto( $file )
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

	}//END setPhoto */












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