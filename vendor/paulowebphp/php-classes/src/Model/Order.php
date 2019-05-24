<?php 

namespace Core\Model;


use \Core\DB\Sql;
use \Core\Model;
use \Core\Model\Cart;
use \Core\Model\Address;
use \Core\Model\Payment;
use \Moip\Moip;
use \Moip\Auth\BasicAuth;



class Order extends Model
{

	# Session
	const SESSION = "OrderSession";

	# Error - Success
	const SUCCESS = "Order-Success";
	const ERROR = "Order-Error";





	public function save()
	{
			

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_orders_save(

				:idorder,
				:iduser,
				:idcart,
				:idcustomer,
				:idpayment,
				:desordercode,
				:vltotal

			)", 
			
			[

				':idorder'=>$this->getidorder(),
				':iduser'=>$this->getiduser(),
				':idcart'=>$this->getidcart(),
				':idcustomer'=>$this->getidcustomer(),
				':idpayment'=>$this->getidpayment(),
				':desordercode'=>$this->getdesordercode(),
				':vltotal'=>$this->getvltotal()

			]
		
		);//end select





		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if


	}//END save






	public function getProducts()
	{

		$sql = new Sql();

		$results = $sql->select("

		    SELECT b.idproduct,b.iduser, b.inbought, b.incategory, b.desproduct,b.vlprice,b.desphoto,b.desextension,
			COUNT(*) AS nrqtd,
			SUM(b.vlprice) as vltotal
			FROM tb_cartsproducts a 
			INNER JOIN tb_products b USING (idproduct)
			INNER JOIN tb_carts c ON a.idcart = c.idcart
			WHERE a.idcart = :idcart
			GROUP BY b.idproduct,b.iduser, b.inbought, b.incategory, b.desproduct,b.vlprice,b.desphoto,b.desextension
			ORDER BY b.desproduct

			", 
			
			[

				':idcart'=>$this->getidcart()

			]
		
		);//end select



		//$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		if( count($results) > 0 )
		{
			

			return $results;

			
		}//end if



	}//END getProducts














	public function get( $iduser )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b ON a.idstatus = b.idstatus
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    INNER JOIN tb_addresses e ON a.idaddress = e.idaddress
		    INNER JOIN tb_payments f ON a.idorder = f.idorder
		    WHERE a.iduser = :iduser;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select

		//$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		//$results[0]['descity'] = utf8_encode($results[0]['descity']);
		//$results[0]['desdistrict'] = utf8_encode($results[0]['desdistrict']);



		$numOrders = $sql->select("
			
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$numOrders[0]["nrtotal"]

		];//end return


	}//END get









	public function getOrder( $idorder )
	{

		$sql = new Sql();

		$results = $sql->select("

		    SELECT * 
		    FROM tb_orders a
		    INNER JOIN tb_users b ON a.iduser = b.iduser
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_customers d ON a.idcustomer = d.idcustomer
		    INNER JOIN tb_payments e ON a.idpayment = e.idpayment
		    WHERE a.idorder = :idorder;

			", 
			
			[

				':idorder'=>$idorder

			]
		
		);//end select

		//$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		//$results[0]['descity'] = utf8_encode($results[0]['descity']);
		//$results[0]['desdistrict'] = utf8_encode($results[0]['desdistrict']);


		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END getOrder








	/*public function getOrder( $idorder )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT * 
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b ON a.idstatus = b.idstatus
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    INNER JOIN tb_addresses e ON a.idaddress = e.idaddress
		    INNER JOIN tb_payments f ON a.idorder = f.idorder
		    WHERE a.idorder = :idorder;

			", 
			
			[

				':idorder'=>$idorder

			]
		
		);//end select

		//$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		//$results[0]['descity'] = utf8_encode($results[0]['descity']);
		//$results[0]['desdistrict'] = utf8_encode($results[0]['desdistrict']);


		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END getOrder*/










	public function sendOrderToPayment(

		$desname,
		$desdocument,
		$desemail,
		$dtbirth,
		$nrphone,
		$descardcode_number,
		$desholdername,
		$descardcode_month,
		$descardcode_year,
		$descardcode_cvv

	)
	{

		try 
		{

			
				

			$token = '6PAOYPC0B4AUCM3VFALVQX3ZLOKALJTV';

			$key = 'BSF67OFMNPGC8TKKULSCBZ3LNPZWH3205RJN59VT';

			$moip = new Moip(new BasicAuth($token, $key), Moip::ENDPOINT_SANDBOX);	
			

			

			/* CRIANDO COMPRADOR */

			$ddd = substr($nrphone, 0, 2);
			$phone = substr($nrphone, 2, strlen($nrphone));
			//$birth = date('d/m/Y', strtotime($this->getdtbirth()));

			


			$customer = $moip->customers()->setOwnId( uniqid() )
			    ->setFullname( $desname )
			    ->setEmail( $desemail )
			    ->setBirthDate( $dtbirth )
			    ->setTaxDocument( $desdocument )
			    ->setPhone($ddd, $phone)
			    ->addAddress( 'BILLING',
			        $this->getdesaddress(), 
			        $this->getdesnumber(),
			        $this->getdesdistrict(), 
			        $this->getdescity(), 
			        $this->getdesstate(),
			        $this->getdeszipcode(), 
			        $this->getdesnumber() )
			    ->addAddress( 'SHIPPING',
			        $this->getdesaddress(), 
			        $this->getdesnumber(),
			        $this->getdesdistrict(),
			        $this->getdescity(), 
			        $this->getdesstate(),
			        $this->getdeszipcode(), 
			        $this->getdesnumber() )
			    ->create();



			$customerId = $customer->getid();




				
			/* ADICIONANDO CARTÃO DE CRÉDITO */

			$customerCreditCard = $moip->customers()->creditCard()
			    ->setExpirationMonth( $descardcode_month )
			    ->setExpirationYear( (int)$descardcode_year )
			    ->setNumber( $descardcode_number )
			    ->setCVC( $descardcode_cvv )
			    ->setFullName( $desname )
			    ->setBirthDate( $dtbirth )
			    ->setTaxDocument( 'CPF', $desdocument )
			    ->setPhone( '55', $ddd, $phone )
			    ->create( $customerId );



			/* CRIANDO UM PEDIDO */

			$orderProducts = $this->getProducts();

					


		

			$order = $moip->orders()->setOwnId( uniqid() );

		    foreach($orderProducts as $product)
		    {


		        $order = $order->addItem( 

		        	$product['desproduct'],
		            (int)$product['nrqtd'],
		            $this->getidorder(),
		            (int)str_replace(".", "", $product['vlprice'])

		        );//end addItem

		    }//end foreach

		    $order = $order
		        ->setShippingAmount(0)
		        ->setCustomer($customer)
		        ->create();



			/* SETANDO O HOLDER */
			

			$holder = $moip->holders()->setFullname( $desname )
			    ->setBirthDate( $dtbirth )
			    ->setTaxDocument( $desdocument, 'CPF')
			    ->setPhone($ddd, $phone, 55)
			    ->setAddress('BILLING', 
			    	$this->getdesaddress(), 
			    	$this->getdesnumber(), 
			    	$this->getdesdistrict(), 
			    	$this->getdescity(), 
			    	$this->getdesstate(), 
			    	$this->getdeszipcode(), 
			    	$this->getdescomplement()
			);//end holder




			
			$payment = $order->payments()->setCreditCard( $descardcode_month, 
				substr($descardcode_year, 2, strlen($descardcode_year)), 
				$descardcode_number, 
				$descardcode_cvv, 
				$holder )
	    		->execute();


			

	    	
	    	return [

	    		'iduser'=>$this->getiduser(),
	    		'idorder'=>$this->getidorder(),
	    		'descustomercode'=>$customerId,
	    		'descardcode'=>$customerCreditCard->getid(),
	    		'desordercode'=>$order->getid(),
	    		'despaymentcode'=>$payment->getid(),
	    		'desname'=>$desname,
	    		'desholdername'=>$desname,
	    		'desemail'=>$desemail,
	    		'intypedocument'=>0,
	    		'desdocument'=>$desdocument,
	    		'desholderdocument'=>$desdocument,
	    		'nrphone'=>$nrphone,
	    		'nrholderphone'=>$nrphone,
	    		'dtbirth'=>$dtbirth,
	    		'dtholderbirth'=>$dtbirth

	    	];//end return


		}//end try
		catch (Exception $e)
		{
			$uri = explode('/', $_SERVER["REQUEST_URI"]);

			Order::getError("Falha no pagamento: ".$e);
			header('Location: /'.$uri[1].'/checkout');
			exit;
			
		}//end catch




			/*$payment = $orderId->payments()->setCreditCardSaved('CRC-UEGHF7G47FG47', '123')
->setDelayCapture(false)
->setInstallmentCount(2)
->execute();

Shipping é o valor do frete
Addition é se quiser repassar mais algum valor, como por exemplo se quiser repassar as taxas Wirecard
E Discount é um desconto, que pode ser um cupom desconto do seu lado por exemplo
Se não for usar, é só deixar como 0
Posso ajudar em algo mais?



*/


	}//END sendOrderToPayment










public static function getPage( $iduser, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS * 
		    FROM tb_orders a
		    INNER JOIN tb_users b ON a.iduser = b.iduser
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_customers d ON a.idcustomer = d.idcustomer
		    INNER JOIN tb_payments e ON a.idpayment = e.idpayment
		    WHERE a.iduser = :iduser
		    ORDER BY a.dtregister DESC
			LIMIT $start, $itensPerPage;

		", 
			
			[

				':iduser'=>$iduser

			]

		);//end selec


		$resultTotal = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		


		return [

			'results'=>$results,
			'nrtotal'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itensPerPage)

		];//end return


	}//END getPage








	public static function getPageSearch( $iduser, $search, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
		    FROM tb_orders a
		    INNER JOIN tb_users b ON a.iduser = b.iduser
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_customers d ON a.idcustomer = d.idcustomer
		    INNER JOIN tb_payments e ON a.idpayment = e.idpayment
		    WHERE a.iduser = :iduser
			OR d.desname LIKE :search 
			ORDER BY a.dtregister DESC
			LIMIT $start, $itensPerPage;

			", 
			
			[

				':iduser'=>$iduser,
				':search'=>'%'.$search.'%',
				':id'=>$search

			]
		
		);//end select

		$resultTotal = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itensPerPage)

		];//end return


	}//END getPageSearch










	/*public static function getPage( $iduser, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS * 
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b ON a.idstatus = b.idstatus
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    INNER JOIN tb_addresses e ON a.idaddress = e.idaddress
		    INNER JOIN tb_payments f ON a.idorder = f.idorder
		    WHERE a.iduser = :iduser
			ORDER BY a.dtregister DESC
			LIMIT $start, $itensPerPage;

		", 
			
			[

				':iduser'=>$iduser

			]

		);//end selec


		$resultTotal = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		echo '<pre>';
		    var_dump($results);
		    exit;


		return [

			'results'=>$results,
			'nrtotal'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itensPerPage)

		];//end return


	}//END getPage








	public static function getPageSearch( $iduser, $search, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b ON a.idstatus = b.idstatus
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    INNER JOIN tb_addresses e ON a.idaddress = e.idaddress
		    INNER JOIN tb_payments f ON a.idorder = f.idorder
		    WHERE a.iduser = :iduser
			OR f.desperson LIKE :search 
			ORDER BY a.dtregister DESC
			LIMIT $start, $itensPerPage;

			", 
			
			[

				':iduser'=>$iduser,
				':search'=>'%'.$search.'%',
				':id'=>$search

			]
		
		);//end select

		$resultTotal = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'results'=>$results,
			'nrtotal'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itensPerPage)

		];//end return


	}//END getPageSearch*/








	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * 
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b ON a.idstatus = b.idstatus
		    INNER JOIN tb_carts c ON a.idcart = c.idcart
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    INNER JOIN tb_addresses e ON a.idaddress = e.idaddress
		    WHERE a.idorder = pidorder
			ORDER BY a.dtregister DESC

		");//end select

	}//END listAll






	public function delete()
	{

		$sql = new Sql();

		$sql->query("

			DELETE FROM tb_orders
			WHERE idorder = :idorder

			", 
			
			[

				'idorder'=>$this->getidorder()

			]
		
		);//end query

	}//END delete







		







	public function getCart()
	{

		$cart = new Cart();

		$cart->get((int)$this->getidcart());

		return $cart;
		
	}//END getCart








	public static function setError( $msg )
	{

		$_SESSION[Order::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Order::ERROR]) && $_SESSION[Order::ERROR]) ? $_SESSION[Order::ERROR] : '';

		Order::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Order::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Order::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Order::SUCCESS]) && $_SESSION[Order::SUCCESS]) ? $_SESSION[Order::SUCCESS] : '';

		Order::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Order::SUCCESS] = NULL;

	}//END clearSuccess 








	






	public function toSession()
	{
		$_SESSION[Order::SESSION] = $this->getValues();

	}//END toSession







	public function getFromSession()
	{

		$this->setData($_SESSION[Order::SESSION]);

	}//END getFromSession







	public function getAddress()
	{

		$address = new Address();

		$address->setData($this->getValues());

		return $address;

	}//END getAddress







	/*public function createOrderInWirecard()
	{

		$results = $this->getProducts();


		$token = '6PAOYPC0B4AUCM3VFALVQX3ZLOKALJTV';

		$key = 'BSF67OFMNPGC8TKKULSCBZ3LNPZWH3205RJN59VT';

		$keysInBase64 = base64_encode($token.':'.$key);

		$header = [

			'Authorization: Basic '. $keysInBase64,
        	'Content-Type: application/json'

		];//end header

		$items = [];

		foreach ($results as $row)
		{
			# code...
			$array = [

				"product"=>$row['desproduct'],
				"quantity"=>$row['nrqtd'],
				"detail"=>$row['desproduct'],
				"price"=>$row['vlprice']

			];

			array_push($items, $array);

		}//end foreach



		$postFields = json_encode([

			"ownId"=>$this->getidorder(),
			"items"=>$items,
			"customer"=>
			[

				"ownId"=>$this->getidorder(),
				"fullname"=>"Josenilton Carvalho",
				"email"=>"joesenitlon@joseniltn.com.br"

			]

		]);//end data

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://sandbox.moip.com.br/v2/orders");

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

		curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);


		# TRUE É PARA SERIALIZAR, PARA VIR COMO ARRAY E NÃO COMO OBJETO
		$data = json_decode( curl_exec($ch), true );

		curl_close($ch);



		return $data;

	}//END createOrderInWirecard






	public function sendPayment( $id )
	{

		$token = '6PAOYPC0B4AUCM3VFALVQX3ZLOKALJTV';

		$key = 'BSF67OFMNPGC8TKKULSCBZ3LNPZWH3205RJN59VT';

		$keysInBase64 = base64_encode($token.':'.$key);

		$header = [

			'Authorization: Basic '. $keysInBase64,
        	'Content-Type: application/json'

		];//end header



		$taxDocument = [

			"type"=>"CPF",
	        "number"=>"012124202686"

		];//end taxDocument

		$phone = [

			"countryCode"=>"55",
	        "areaCode"=>"11",
	        "number"=>"66778899"

		];//end phone

		$holder = [

			"fullname"=>"João Portador da Silva",
            "birthdate"=>"1988-12-30",
            "taxDocument"=>$taxDocument,
            "phone"=>$phone

		];//end holder

		$creditCard = [

			"expirationMonth"=>12,
            "expirationYear"=> 25,
            "number"=> "5555666677778884",
            "cvc"=> "123",
            "holder"=>$holder

		];//end creditCard

		$fundingInstrument = [

			"method"=>"CREDIT_CARD",
	        "creditCard"=>$creditCard

		];

		$postFields = json_encode([

			"installmentCount"=>1,
			"fundingInstrument"=>$fundingInstrument

		]);//end data

		
		$path = "https://sandbox.moip.com.br/v2/orders/".$id."/payment";


		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $path);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		//curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

		//curl_setopt($curl, CURLOPT_POST, true); 

		# POST. This POST is the normal application/x-www-form-urlencoded kind, most commonly used by HTML forms.
		//curl_setopt ($ch, CURLOPT_POST, 1); 

		//curl_setopt($curl, CURLOPT_AUTOREFERER, true); 

		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

		curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);


		# TRUE É PARA SERIALIZAR, PARA VIR COMO ARRAY E NÃO COMO OBJETO
		$data = json_decode( curl_exec($ch), true );

		curl_close($ch);

		
		
		return $data;

	

	}//END sendPayment*/






}//END class Order




 ?>