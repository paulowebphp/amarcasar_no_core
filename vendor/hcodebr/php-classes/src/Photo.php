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
		$photo_code_entity, 
		$id_entity, 
		$extension
		
	)
	{
		$basename = $iduser . 
		$photo_code_entity . 
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






	public function getDirectoryName( $entity_code )
	{

		switch ($entity_code) 
		{

			case ($entity_code === Rule::CODE_BESTFRIENDS):
				# code...
				return 'images';
				break;
			
			case ($entity_code === Rule::CODE_PRODUCTS):
				# code...
				return 'products';
				break;
			
			case ($entity_code === Rule::CODE_GIFTS):
				# code...
				return 'gifts';
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
		$entity_code,
		$id_entity,
		$is_square = 1

	)
	{
	
		$extension = explode('.', $file['name']);

		$extension = end($extension);

		$extension = strtolower($extension);


		//$mimeTypeAllowed = Rule::UPLOAD_MIME_TYPE;

		$basename = $iduser .
		$entity_code .
		$id_entity .
		"." .
		$extension;

		$entity_directory = $this->getDirectoryName($entity_code);


		if( !in_array($file['type'], Rule::UPLOAD_MIME_TYPE) )
		{

			$basename = false;

		}//end else if 
		else if(
			
			move_uploaded_file(
				
				$file["tmp_name"], 
				$_SERVER['DOCUMENT_ROOT'] . 
				DIRECTORY_SEPARATOR . "uploads" . 
				DIRECTORY_SEPARATOR . $entity_directory .
				DIRECTORY_SEPARATOR .
				$basename
				
			)//end move_uploaded_file
			
		)
		{

			if( $is_square === 1 )
			{
				$basename = $this->setPhotoSquare(
				
					$basename, 
					$iduser, 
					$entity_code, 
					$id_entity, 
					$extension
				
				);//end setPhotoSquare

			}//end if
			else
			{
				$basename = $this->setThumbnail(
				
					$basename, 
					$iduser, 
					$entity_code, 
					$id_entity, 
					$extension
				
				);//end setPhotoSquare


			}//end else

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
		$entity_code, 
		$id_entity, 
		$extension 
		
	)
	{

		try 
		{
			

			//code...
			header("Content-type: image/".$extension);
			
			$entity_directory = $this->getDirectoryName($entity_code);
			

			$filename = $_SERVER['DOCUMENT_ROOT'] . 
			DIRECTORY_SEPARATOR . "uploads" . 
			DIRECTORY_SEPARATOR . $entity_directory.
			DIRECTORY_SEPARATOR .
			$basename;


			list($sourceWidth, $sourceHeight) = getimagesize($filename);
			

			if( $sourceWidth === $sourceHeight )
			{
				$basename = $this->setThumbnail(

					$basename, 
					$iduser, 
					$entity_code, 
					$id_entity, 
					$extension

				);//end setThumbnail

			}//end if
			else if( $sourceWidth > $sourceHeight )
			{

				$canvasWidth = $sourceHeight;
				$canvasHeight = $sourceHeight;

				$canvasAxisX = ($sourceWidth-$sourceHeight)/2;
				$canvasAxisY = 0;

			}//end if
			else if( $sourceWidth < $sourceHeight )
			{
				$canvasWidth = $sourceWidth;
				$canvasHeight = $sourceWidth;

				$canvasAxisX = 0;
				$canvasAxisY = ($sourceHeight-$sourceWidth)/2;

			}//end else if




			$canvas = imagecreatetruecolor($canvasWidth, $canvasHeight);

			switch($extension)
			{

				case "jpg":
				case "jpeg":
					$sourcePhoto = imagecreatefromjpeg($filename);

					imagecopy(

						$canvas, 
						$sourcePhoto, 
						0, 
						0, 
						$canvasAxisX, 
						$canvasAxisY, 
						$sourceWidth, 
						$sourceHeight
					
					);//imagecopy

					imagejpeg(
						
						$canvas,
						$filename,					
						Rule::PHOTO_QUALITY
					
					);//end imagejpeg

					imagedestroy($sourcePhoto);
					break;




				case "png":
					$sourcePhoto = imagecreatefrompng($filename);

					imagecopy(
						
						$canvas, 
						$sourcePhoto, 
						0, 
						0, 
						$canvasAxisX, 
						$canvasAxisY, 
						$sourceWidth, 
						$sourceHeight
					
					);//end imagecopy

					imagepng(
						
						$canvas,
						$filename,					
						Rule::PHOTO_QUALITY_PNG
					
					);//end imagejpeg

					imagedestroy($sourcePhoto);
					break;


					case "gif":
						$sourcePhoto = imagecreatefromgif($filename);
		
						imagecopy(
							
							$canvas, 
							$sourcePhoto, 
							0, 
							0, 
							$canvasAxisX, 
							$canvasAxisY, 
							$sourceWidth, 
							$sourceHeight
						
						);//end imagecopy
		
						imagegif(
							
							$canvas,
							$filename,					
							Rule::PHOTO_QUALITY
						
						);//end imagejpeg

						imagedestroy($sourcePhoto);
						break;

			}//end switch

			imagedestroy($canvas);

			$basename = $this->setThumbnail(

				$basename, 
				$iduser, 
				$entity_code, 
				$id_entity, 
				$extension

			);//end setThumbnail

			return $basename;

		}//end try
		catch( \Throwable $error ) 
		{
			//throw $th;
			$this->deletePhoto( $basename, $entity_code );

			return false;

		}//end catch

	}//END setPhotoSquare





	public function setThumbnail( 

		$basename, 
		$iduser, 
		$entity_code, 
		$id_entity, 
		$extension
	
	)
	{

		try 
		{
			//code...
			header("Content-type: image/".$extension);
			
			$entity_directory = $this->getDirectoryName($entity_code);

			$filename = $_SERVER['DOCUMENT_ROOT'] . 
			DIRECTORY_SEPARATOR . "uploads" . 
			DIRECTORY_SEPARATOR . $entity_directory.
			DIRECTORY_SEPARATOR .
			$basename;

			list($sourceWidth, $sourceHeight) = getimagesize($filename);

			$canvasWidth = $sourceWidth;
			$canvasHeight = $sourceHeight;

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
					$sourcePhoto = imagecreatefromjpeg($filename);

					imagecopyresampled($canvas, $sourcePhoto, 0, 0, 0, 0, $canvasWidth, $canvasHeight, $sourceWidth, $sourceHeight);

					imagejpeg(
						
						$canvas,

						$filename
					
					);//end imagejpeg
					imagedestroy($sourcePhoto);
					break;



				case "gif":
					$sourcePhoto = imagecreatefromgif($filename);

					imagecopyresampled($canvas, $sourcePhoto, 0, 0, 0, 0, $canvasWidth, $canvasHeight, $sourceWidth, $sourceHeight);

					imagegif(
						
						$canvas,

						$filename
					
					);//end imagejpeg
					imagedestroy($sourcePhoto);
					break;



				case "png":
					$sourcePhoto = imagecreatefrompng($filename);
					
					imagecopyresampled($canvas, $sourcePhoto, 0, 0, 0, 0, $canvasWidth, $canvasHeight, $sourceWidth, $sourceHeight);

					imagepng(
						
						$canvas,

						$filename
					
					);//end imagejpeg
					imagedestroy($sourcePhoto);
					break;

			}//end switch
			
			imagedestroy($canvas);

			return $basename;

		}//end try
		catch( \Throwable $th )
		{
			//throw $th;
			$this->deletePhoto($basename, $entity_code);

			return false;

		}//end catch

	}//END setThumbnail







	public function copyPhoto( 
		
		$basenameSource, 
		$iduser, 
		$entity_source, 
		$id_entity, 
		$extension,
		$entity_destination
		
	)
	{

		try 
		{
			
			
			
			//code...
			//header("Content-type: image/".$extension);
			
			$source_directory = $this->getDirectoryName($entity_source);
			$destination_directory = $this->getDirectoryName($entity_destination);

				

			$sourceFilename = $_SERVER['DOCUMENT_ROOT'] . 
			DIRECTORY_SEPARATOR . "uploads" . 
			DIRECTORY_SEPARATOR . $source_directory.
			DIRECTORY_SEPARATOR .
			$basenameSource;

			$destinationFilename = $_SERVER['DOCUMENT_ROOT'] . 
			DIRECTORY_SEPARATOR . "uploads" . 
			DIRECTORY_SEPARATOR . $destination_directory.
			DIRECTORY_SEPARATOR .
			$iduser . 
			$entity_destination .
			$id_entity .
			"." .
			$extension;

			$basenameDestination = $iduser . 
			$entity_destination .
			$id_entity .
			"." .
			$extension;

		
			list($sourceWidth, $sourceHeight) = getimagesize($sourceFilename);

			$canvasWidth = $sourceWidth;
			$canvasHeight = $sourceHeight;

			$canvas = imagecreatetruecolor($canvasWidth, $canvasHeight);

			switch($extension)
			{

				case "jpg":
				case "jpeg":
					$sourcePhoto = imagecreatefromjpeg($sourceFilename);

					imagecopy(

						$canvas, 
						$sourcePhoto, 
						0, 
						0, 
						0, 
						0, 
						$sourceWidth, 
						$sourceHeight
					
					);//imagecopy

					imagejpeg(
						
						$canvas,
						$destinationFilename
					
					);//end imagejpeg

					imagedestroy($sourcePhoto);
					break;




				case "png":
					$sourcePhoto = imagecreatefrompng($sourceFilename);

					imagecopy(
						
						$canvas, 
						$sourcePhoto, 
						0, 
						0, 
						0, 
						0, 
						$sourceWidth, 
						$sourceHeight
					
					);//end imagecopy

					imagepng(
						
						$canvas,
						$destinationFilename
					
					);//end imagejpeg

					imagedestroy($sourcePhoto);
					break;


					case "gif":
						$sourcePhoto = imagecreatefromgif($sourceFilename);
		
						imagecopy(
							
							$canvas, 
							$sourcePhoto, 
							0, 
							0, 
							0, 
							0, 
							$sourceWidth, 
							$sourceHeight
						
						);//end imagecopy
		
						imagegif(
							
							$canvas,
							$destinationFilename
						
						);//end imagejpeg

						imagedestroy($sourcePhoto);
						break;

			}//end switch

			imagedestroy($canvas);

			return $basenameDestination;

		}//end try
		catch( \Throwable $error ) 
		{
			//throw $th;
			$this->deletePhoto( $basenameDestination, $entity_destination );

			return false;

		}//end catch

	}//END copyPhoto









	public function deletePhoto( $basename, $entity_code )
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
				$entity_directory = $this->getDirectoryName($entity_code);
			
	
				$filename = $_SERVER['DOCUMENT_ROOT'] . 
				DIRECTORY_SEPARATOR . "uploads" . 
				DIRECTORY_SEPARATOR . $entity_directory . 
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