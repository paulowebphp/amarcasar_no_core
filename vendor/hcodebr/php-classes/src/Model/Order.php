<?php 

namespace Hcode\Model;


use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Cart;
use \Hcode\Model\Address;
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
				:idcart,
				:iduser,
				:idstatus,
				:idaddress,
				:vltotal

			)", 
			
			[

				':idorder'=>$this->getidorder(),
				':idcart'=>$this->getidcart(),
				':iduser'=>$this->getiduser(),
				':idstatus'=>$this->getidstatus(),
				':idaddress'=>$this->getidaddress(),
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
			WHERE a.idcart = :idcart AND c.incartstatus = 1
			GROUP BY b.idproduct,b.iduser, b.inbought, b.incategory, b.desproduct,b.vlprice,b.desphoto,b.desextension
			ORDER BY b.desproduct

			", 
			
			[

				':idcart'=>$this->getidcart()

			]
		
		);//end select

		

		//$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		if( count($results[0]) > 0 )
		{
			

			return $results;

			
		}//end if



	}//END getProducts














	public function get( $idorder )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT * 
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b USING(idstatus)
		    INNER JOIN tb_carts c USING(idcart)
		    INNER JOIN tb_users d ON c.iduser = d.iduser
		    INNER JOIN tb_addresses e ON c.idcart = e.idcart
		    WHERE idorder = pidorder;

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

	}//END get







	public function sendOrderToPayment()
	{

		$token = '6PAOYPC0B4AUCM3VFALVQX3ZLOKALJTV';

		$key = 'BSF67OFMNPGC8TKKULSCBZ3LNPZWH3205RJN59VT';

		$moip = new Moip(new BasicAuth($token, $key), Moip::ENDPOINT_SANDBOX);

		
		


		/* CRIANDO COMPRADOR */

		$ddd = substr($this->getnrphone(), 0, 2);
		$phone = substr($this->getnrphone(), 2, strlen($this->getnrphone()));
		//$birth = date('d/m/Y', strtotime($this->getdtbirth()));

		
		

		$customer = $moip->customers()->setOwnId(uniqid())
		    ->setFullname($this->getdesname())
		    ->setEmail($this->getdesemail())
		    ->setBirthDate($this->getdtbirth())
		    ->setTaxDocument($this->getdescpf())
		    ->setPhone($ddd, $phone)
		    ->addAddress('BILLING',
		        $this->getdesaddress(), $this->getdesnumber(),
		        $this->getdesdistrict(), $this->getdescity(), $this->getdesstate(),
		        $this->getdeszipcode(), $this->getdesnumber())
		    ->addAddress('SHIPPING',
		                $this->getdesaddress(), $this->getdesnumber(),
		        $this->getdesdistrict(), $this->getdescity(), $this->getdesstate(),
		        $this->getdeszipcode(), $this->getdesnumber())
		    ->create();
		
		$customerId = $customer->getid();

		


		echo '<pre>';
		var_dump($customer);
		exit;


		/*$customer = $moip->customers()->setOwnId(uniqid())
		    ->setFullname('Fulano de Tal')
		    ->setEmail('fulano@email.com')
		    ->setBirthDate('1988-12-30')
		    ->setTaxDocument('22222222222')
		    ->setPhone(11, 66778899)
		    ->addAddress('BILLING',
		        'Rua de teste', 123,
		        'Bairro', 'Sao Paulo', 'SP',
		        '01234567', 8)
		    ->addAddress('SHIPPING',
		                'Rua de teste do SHIPPING', 123,
		                'Bairro do SHIPPING', 'Sao Paulo', 'SP',
		                '01234567', 8)
		    ->create();
		
		$customerId = $customer->getid();*/



		
		/* ADICIONANDO CARTÃO DE CRÉDITO */

		$customerCreditCard = $moip->customers()->creditCard()
		    ->setExpirationMonth('03')
		    ->setExpirationYear(2021)
		    ->setNumber('5260205479981051')
		    ->setCVC('872')
		    ->setFullName('Jose Portador da Silva')
		    ->setBirthDate('1988-12-30')
		    ->setTaxDocument('CPF', '01224202686')
		    ->setPhone('55','11','66778899')
		    ->create($customerId);



		    
		/* CRIANDO UM PEDIDO */

		$order = $moip->orders()->setOwnId(uniqid())
		    ->addItem("bicicleta 1",1, "sku1", 10000)
		    ->addItem("bicicleta 2",1, "sku2", 11000)
		    ->addItem("bicicleta 3",1, "sku3", 12000)
		    ->addItem("bicicleta 4",1, "sku4", 13000)
		    ->addItem("bicicleta 5",1, "sku5", 14000)
		    ->addItem("bicicleta 6",1, "sku6", 15000)
		    ->addItem("bicicleta 7",1, "sku7", 16000)
		    ->addItem("bicicleta 8",1, "sku8", 17000)
		    ->addItem("bicicleta 9",1, "sku9", 18000)
		    ->addItem("bicicleta 10",1, "sku10", 19000)
		    ->setShippingAmount(0)->setAddition(0)->setDiscount(0)
		    ->setCustomer($customer)
		    ->create();
		

		 $holder = $moip->holders()->setFullname('Jose Silva')
		    ->setBirthDate("1990-10-10")
		    ->setTaxDocument('01224202686', 'CPF')
		    ->setPhone(11, 66778899, 55)
		    ->setAddress('BILLING', 'Avenida Faria Lima', '2927', 'Itaim', 'Sao Paulo', 'SP', '01234000', 'Apt 101');

		
		$payment = $order->payments()->setCreditCard(03, 21, '5260205479981051', '872', $holder)
    		->execute();


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







	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * 
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b USING(idstatus)
		    INNER JOIN tb_carts c USING(idcart)
		    INNER JOIN tb_users d ON c.iduser = d.iduser
		    INNER JOIN tb_addresses e ON c.idcart = e.idcart
		    WHERE idorder = pidorder
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







		public function createOrderInWirecard()
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

	

	}//END sendPayment







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








	public static function getPage( $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b USING(idstatus)
		    INNER JOIN tb_carts c USING(idcart)
		    INNER JOIN tb_users d ON c.iduser = d.iduser
		    INNER JOIN tb_addresses e ON c.idcart = e.idcart
		    WHERE idorder = pidorder
			ORDER BY a.dtregister DESC
			LIMIT $start, $itensPerPage;

		");//end select

		$resultTotal = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'data'=>$results,
			'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itensPerPage)

		];//end return


	}//END getPage








	public static function getPageSearch( $search, $page = 1, $itensPerPage = 10 )
	{

		$start = ($page - 1) * $itensPerPage;

		$sql = new Sql();

		$results = $sql->select("

			SELECT SQL_CALC_FOUND_ROWS *
		    FROM tb_orders a
		    INNER JOIN tb_ordersstatus b USING(idstatus)
		    INNER JOIN tb_carts c USING(idcart)
		    INNER JOIN tb_users d ON c.iduser = d.iduser
		    INNER JOIN tb_addresses e ON c.idcart = e.idcart
		    WHERE idorder = pidorder
			OR f.desperson LIKE :search 
			ORDER BY a.dtregister DESC
			LIMIT $start, $itensPerPage;

			", 
			
			[

				':search'=>'%'.$search.'%',
				':id'=>$search

			]
		
		);//end select

		$resultTotal = $sql->select("
		
			SELECT FOUND_ROWS() AS nrtotal;
			
		");//end select

		return [

			'data'=>$results,
			'total'=>(int)$resultTotal[0]["nrtotal"],
			'pages'=>ceil($resultTotal[0]["nrtotal"] / $itensPerPage)

		];//end return


	}//END getPageSearch






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







}//END class Order




 ?>