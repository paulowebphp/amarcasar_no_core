<?php 

namespace Hcode;


use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Rule;




class Photo extends Model
{

	# Session
	const SESSION = "PhotoSession";

	# Error - Success
	const SUCCESS = "Photo-Success";
	const ERROR = "Photo-Error";





	
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






	public function getDirectoryName( $upload_code_entity )
	{

		switch ($upload_code_entity) 
		{

			case ($upload_code_entity === Rule::UPLOAD_CODE_BESTFRIENDS):
				# code...
				return 'images';
				break;
			
			case ($upload_code_entity === Rule::UPLOAD_CODE_PRODUCTS):
				# code...
				return 'products';
				break;
			
			default:
				# code...
				return 'images';
				break;

		}//end sw
		
	}//END getDirectoryName








	public function setPhoto( 
		
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

		$upload_directory = $this->getDirectoryName($upload_code_entity);


		if( !in_array($file['type'], Rule::MIME_TYPE_UPLOAD) )
		{

			$basename = false;

		}//end else if 
		else if(
			
			move_uploaded_file(
				
				$file["tmp_name"], 
				$_SERVER['DOCUMENT_ROOT'] . 
				DIRECTORY_SEPARATOR . "uploads" . 
				DIRECTORY_SEPARATOR . $upload_directory .
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
			$basename = false;
			
		}//end else

		return [

			'basename'=>$basename,
			'extension'=>$extension

		];//end return

	}//END setPhoto








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
			//header("Content-type: image/".$extension);
			
			$upload_directory = $this->getDirectoryName($upload_code_entity);
			

			$filename = $_SERVER['DOCUMENT_ROOT'] . 
			DIRECTORY_SEPARATOR . "uploads" . 
			DIRECTORY_SEPARATOR . $upload_directory.
			DIRECTORY_SEPARATOR .
			$basename;


			list($uploadedWidth, $uploadedHeight) = getimagesize($filename);
			

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
			$this->deletePhoto( $basename, $upload_code_entity );

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
			//header("Content-type: image/".$extension);
			
			$upload_directory = $this->getDirectoryName($upload_code_entity);

			$filename = $_SERVER['DOCUMENT_ROOT'] . 
			DIRECTORY_SEPARATOR . "uploads" . 
			DIRECTORY_SEPARATOR . $upload_directory.
			DIRECTORY_SEPARATOR .
			$basename;

			list($entityPhotoWidth, $entityPhotoHeight) = getimagesize($filename);

			$canvasWidth = $entityPhotoWidth;
			$canvasHeight = $entityPhotoHeight;

			if( $canvasWidth > 7000 )
			{
				$canvasWidth = $canvasWidth * 0.12;
				$canvasHeight = $canvasHeight * 0.12;

			}//end else if

			else if( $canvasWidth > 6000 )
			{
				$canvasWidth = $canvasWidth * 0.17;
				$canvasHeight = $canvasHeight * 0.17;

			}//end else if

			else if( $canvasWidth > 5000 )
			{
				$canvasWidth = $canvasWidth * 0.2;
				$canvasHeight = $canvasHeight * 0.2;

			}//end else if

			else if( $canvasWidth > 4000 )
			{
				$canvasWidth = $canvasWidth * 0.25;
				$canvasHeight = $canvasHeight * 0.25;

			}//end else if

			else if( $canvasWidth > 3000 )
			{
				$canvasWidth = $canvasWidth * 0.34;
				$canvasHeight = $canvasHeight * 0.34;

			}//end else if

			else if( $canvasWidth > 2000 )
			{
				$canvasWidth = $canvasWidth * 0.5;
				$canvasHeight = $canvasHeight * 0.5;

			}//end else if

			else if( $canvasWidth > 1500 )
			{
				$canvasWidth = $canvasWidth * 0.6;
				$canvasHeight = $canvasHeight * 0.6;
			}//end if */

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
			$this->deletePhoto($basename, $upload_code_entity);

			return false;

		}//end catch

	}//END setThumbnail






	public function deletePhoto( $basename, $upload_code_entity )
	{
		try 
		{
			//code...
			if( 
			
				$basename != '0.jpg'
				||
				$basename != ''
				||
				!is_null($basename)
			
			)
			{
				$upload_directory = $this->getDirectoryName($upload_code_entity);
			
	
				$filename = $_SERVER['DOCUMENT_ROOT'] . 
				DIRECTORY_SEPARATOR . "uploads" . 
				DIRECTORY_SEPARATOR . $upload_directory . 
				DIRECTORY_SEPARATOR . 
				$basename;
				
				unlink( $filename );
	
				return true;
	
			}//end if

		}//end try
		catch (\Throwable $th) 
		{
			//throw $th;
			return false;

		}//end catch

	}//END delete







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














	public static function setError( $msg )
	{

		$_SESSION[Photo::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Photo::ERROR]) && $_SESSION[Photo::ERROR]) ? $_SESSION[Photo::ERROR] : '';

		Photo::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Photo::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Photo::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Photo::SUCCESS]) && $_SESSION[Photo::SUCCESS]) ? $_SESSION[Photo::SUCCESS] : '';

		Photo::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Photo::SUCCESS] = NULL;

	}//END clearSuccess 















}//END class Photo




 ?>