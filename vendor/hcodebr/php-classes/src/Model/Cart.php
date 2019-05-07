<?php 

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Mailer;
use \Hcode\Model\User;




class Cart extends Model
{

	const SESSION = "Cart";

	const SESSION_ERROR = "Error-Cart";

	
	

	public static function getFromSession()
	{
		
		$user = new User();
		
		$uri = explode('/', $_SERVER["REQUEST_URI"]);
		
		$user->getFromUrl($uri[1]);
		
		$cart = new Cart();
		

		if(

			isset($_SESSION[Cart::SESSION]) 
			&& 
			(int)$_SESSION[Cart::SESSION]["idcart"] > 0
			&&
			(int)$_SESSION[Cart::SESSION]["iduser"] === (int)$user->getiduser()
			
		)
		{
		

			# Recupera o carrinho que já existe
			//$cart->get((int)$_SESSION[Cart::SESSION]["idcart"]);
			$cart->getUserCart((int)$_SESSION[Cart::SESSION]["idcart"],(int)$_SESSION[Cart::SESSION]["iduser"]);

		}//end if
		else
		{

			# Tenta carregar o carrinho a partir do session_id(), se conseguir, pula o if
			$cart->getFromSessionID((int)$user->getiduser());

			# Verifica se conseguiu carregar o carrinho
			if( !(int)$cart->getidcart() > 0 )
			{
				$data = [

					'dessessionid'=>session_id()

				];//end $data

				$data['iduser'] = $user->getiduser();

				$cart->setData($data);

				$cart->save();

				$cart->setToSession();

			}//end if

		}//end else

		

		return $cart;

	}//END getFromSession






	/**public static function getFromSession()
	{
		


		$cart = new Cart();


		if(

			isset($_SESSION[Cart::SESSION]) 
			&& 
			(int)$_SESSION[Cart::SESSION]["idcart"] > 0
			
		)
		{
			

			# Recupera o carrinho que já existe
			$cart->get((int)$_SESSION[Cart::SESSION]["idcart"]);



		}//end if
		else
		{

			# Tenta carregar o carrinho a partir do session_id(), se conseguir, pula o if
			$cart->getFromSessionID();

			# Verifica se conseguiu carregar o carrinho
			if( !(int)$cart->getidcart() > 0 )
			{
				$data = [

					'dessessionid'=>session_id()

				];//end $data
				
				$user = new User();

				$uri = explode('/', $_SERVER["REQUEST_URI"]);

				$user->getFromUrl($uri[1]);

				$data['iduser'] = $user->getiduser();

				$cart->setData($data);

				$cart->save();

				$cart->setToSession();

			}//end if

		}//end else

		return $cart;

	}//END getFromSession */


	




	public function save()
	{
		$sql = new Sql();

		$results = $sql->select("

			CALL sp_carts_save(

				:idcart, 
				:dessessionid, 
				:iduser,
				:deszipcode

			)", 
			
			[

				':idcart'=>$this->getidcart(), 
				':dessessionid'=>$this->getdessessionid(), 
				':iduser'=>$this->getiduser(),
				':deszipcode'=>$this->getdeszipcode()

			]
		
		);//end select

		
		$this->setData($results[0]);

		
	}//END save






	public function setToSession()
	{

		$_SESSION[Cart::SESSION] = $this->getValues();

	}//END setToSession





	/**public static function getFromSession()
	{
		$cart = new Cart();



		if(

			!isset($_SESSION[Cart::SESSION])
			
		)
		{

			$cart->getFromSessionID();

			# Verifica se conseguiu carregar o carrinho
			if( !(int)$cart->getidcart() > 0 )
			{
				$data = [

					'dessessionid'=>session_id()

				];//end $data
				
				$user = new User();

				$uri = explode('/', $_SERVER["REQUEST_URI"]);

				$user->getFromUrl($uri[1]);

				$data['iduser'] = $user->getiduser();

				$cart->setData($data);

				$cart->save();

				$cart->setToSession();

			}//end if

		}//end if
		else
		{

			# Tenta carregar o carrinho a partir do session_id(), se conseguir, pula o if
			

		}//end else

		return $cart;

	}//END getFromSession
 */







	public function getFromSessionID( $iduser )
	{


		$sql = new Sql();

		$results = $sql->select("

			SELECT * FROM tb_carts 
			WHERE dessessionid = :dessessionid
			AND iduser = :iduser;

			", 
			[

				':dessessionid'=>session_id(),
				':iduser'=>$iduser

			]
		
		);//end select

		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END getFromSessionID






	public function getUserCart( $idcart, $iduser )
	{
		$sql = new Sql();

		$results = $sql->select("

			SELECT * FROM tb_carts 
			WHERE idcart = :idcart
			AND iduser = :iduser;

			", 
			
			[

				':idcart'=>$idcart,
				':iduser'=>$iduser

			]
		
		);//end select

		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if

	}//END getUserCart






	/**public function get( $idcart )
	{
		$sql = new Sql();

		$results = $sql->select("

			SELECT * FROM tb_carts 
			WHERE idcart = :idcart;

			", 
			
			[

				':idcart'=>$idcart

			]
		
		);//end select

		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if

	}//END get */






	public function addProduct( Product $product )
	{
		

		$sql = new Sql();

		$sql->query("

			INSERT INTO tb_cartsproducts (idcart, idproduct) 
			VALUES(:idcart, :idproduct)

			", 
			
			[

				':idcart'=>$this->getidcart(),
				':idproduct'=>$product->getidproduct()

			]
		
		);//end query

		$this->getCalculateTotal();

		

	}//END addProduct







	public function removeProduct( Product $product, $all = false )
	{

		$sql = new Sql();

		if( $all )
		{
			$sql->query("

				UPDATE tb_cartsproducts 
				SET dtremoved = NOW() 
				WHERE idcart = :idcart 
				AND idproduct = :idproduct 
				AND dtremoved IS NULL

				", 
				
				[

					':idcart'=>$this->getidcart(),
					':idproduct'=>$product->getidproduct()

				]
			
			);//end query

		}//end if
		else
		{
			$sql->query("

				UPDATE tb_cartsproducts 
				SET dtremoved = NOW() 
				WHERE idcart = :idcart 
				AND idproduct = :idproduct 
				AND dtremoved IS NULL 
				LIMIT 1;

				", 
				
				[

					':idcart'=>$this->getidcart(),
					':idproduct'=>$product->getidproduct()

				]
			
			);//end query

		}//end else

		$this->getCalculateTotal();

	}//END removeProduct








	public function getProducts()
	{
		$sql = new Sql();

		$results = $sql->select("

			SELECT b.idproduct,b.iduser, b.inbought, b.incategory, b.desproduct,b.vlprice,b.desphoto,b.desextension,
			COUNT(*) AS nrqtd,
			SUM(b.vlprice) as vltotal
			FROM tb_cartsproducts a 
			INNER JOIN tb_products b USING (idproduct) 
			WHERE a.idcart = :idcart AND a.dtremoved IS NULL
			GROUP BY b.idproduct,b.iduser, b.inbought, b.incategory, b.desproduct,b.vlprice,b.desphoto,b.desextension
			ORDER BY b.desproduct

			", 
			
			[

				':idcart'=>$this->getidcart()

			]
		
		);//end select

		# Verifica o desphoto (gambiarra)
		//return Product::checkList($rows);

		return $results;



	}//END getProducts







	public function getProductsTotals()
	{
		$sql = new Sql();

		$results = $sql->select("

				SELECT 
				SUM(vlprice) AS vlprice,
				COUNT(*) AS nrqtd
				FROM tb_products a
				INNER JOIN tb_cartsproducts b
				ON a.idproduct = b.idproduct
				WHERE b.idcart = :idcart
				AND dtremoved IS NULL;

			", 
			
			[

				':idcart'=>$this->getidcart()

			]
		
		);//end select

		

		if( count($results) > 0 )
		{

			return $results[0];

		}//end if
		else
		{

			return [];

		}//end else

	}//END getProductsTotal





	






	public function getCalculateTotal()
	{

		//$this->updateFreight();

		$totals = $this->getProductsTotals();


		# Soma dos produtos
		$this->setvlsubtotal($totals['vlprice']);

		# Soma dos produtos + valor do frete
		$this->setvltotal($totals['vlprice']);

		

	}//END getCalculateTotal









	public static function formatValueToDecimal( $value )
	{

		$value = str_replace('.', '', $value);

		return str_replace(',', '.', $value);

	}//END formatValueToDecimal






	public static function setMsgError( $msg )
	{

		$_SESSION[Cart::SESSION_ERROR] = $msg;


	}//END setMsgErro






	
	public static function getMsgError()
	{

		$msg = (isset($_SESSION[Cart::SESSION_ERROR])) ? $_SESSION[Cart::SESSION_ERROR] : "";

		Cart::clearMsgError();

		return $msg;

	}//END getMsgErro






	public static function clearMsgError()
	{

		$_SESSION[Cart::SESSION_ERROR] = NULL;

	}//END clearMsgError









	public function getValues()
	{

		$this->getCalculateTotal();

		return parent::getValues();

	}//END getValues







	

	public static function removeFromSession()
	{

    	$_SESSION[Cart::SESSION] = NULL;
    	
	}//END removeFromSession







}//END class Cart




 ?>