<?php 

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Rule;
use \Moip\Moip;
use \Moip\Auth\OAuth;




class Plan extends Model
{

	const SESSION_ERROR = "PlanError";

	


	

	public function update()
	{

		

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_payments_update(

				:idpayment,
				:iduser,
				:idorder,
	            :descustomercode,
	            :descardcode,
	            :desordercode,
	            :despaymentcode,
	            :desname,
	            :desholdername,
	            :desemail,
	            :intypedocument,
	            :desdocument,
	            :desholderdocument,
	            :nrphone,
	            :nrholderphone,
	            :dtbirth,
	            :dtholderbirth

			);", 
			
			[

				':idpayment'=>$this->getidpayment(),
				':iduser'=>$this->getiduser(),
				':idorder'=>$this->getidorder(),
				':descustomercode'=>$this->getdescustomercode(),
				':descardcode'=>$this->getdescardcode(),
				':desordercode'=>$this->getdesordercode(),
				':despaymentcode'=>$this->getdespaymentcode(),
				':desname'=>utf8_decode($this->getdesname()),
				':desholdername'=>utf8_decode($this->getdesholdername()),
				':desemail'=>$this->getdesemail(),
				':intypedocument'=>$this->getintypedocument(),
				':desdocument'=>$this->getdesdocument(),
				':desholderdocument'=>$this->getdesholderdocument(),
				':nrphone'=>$this->getnrphone(),
				':nrholderphone'=>$this->getnrholderphone(),
				':dtbirth'=>$this->getdtbirth(),
				':dtholderbirth'=>$this->getdtholderbirth()

			]
		
		);//end select

	

		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if



	}//END update








	public function getPlan( $inplan )
	{

		switch( $inplan )
		{
			case '001':
				# code...
				return '0';
				break;

			case '101':
				return ['vlprice'=>'19.99' , 'inperiod'=>'1', 'desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '103':
				return  ['vlprice'=>'39.99' , 'inperiod'=>'3','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '104':
				return ['vlprice'=>'49.99' , 'inperiod'=>'4','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '106':
				return ['vlprice'=>'69.99' , 'inperiod'=>'6','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '109':
				return ['vlprice'=>'99.99' , 'inperiod'=>'9','desperiod'=>'1 mês','desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '112':
				# code...
				return ['vlprice'=>'129.99' , 'inperiod'=>'12', 'desperiod'=>'1 mês','desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '201':
				return ['vlprice'=>'39.99' , 'inperiod'=>'1','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '203':
				return ['vlprice'=>'239.99' , 'inperiod'=>'3','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '204':
				return ['vlprice'=>'39.99' , 'inperiod'=>'4','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '206':

				return ['vlprice'=>'39.99' , 'inperiod'=>'6','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '209':
				return ['vlprice'=>'299.99' , 'inperiod'=>'9','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '212':
				return ['vlprice'=>'312.99' , 'inperiod'=>'12','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '301':
				return ['vlprice'=>'39.99' , 'inperiod'=>'1','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '303':
				return ['vlprice'=>'39.99' , 'inperiod'=>'3','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '304':
				return ['vlprice'=>'39.99' , 'inperiod'=>'4','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '306':
				return ['vlprice'=>'39.99' , 'inperiod'=>'6','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '309':
				return ['vlprice'=>'39.99' , 'inperiod'=>'9','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '312':
				return ['vlprice'=>'39.99' , 'inperiod'=>'12', 'desperiod'=>'1 mês','desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;
				
			
			default:
				# code...
				return ['vlprice'=>'39.99' , 'inperiod'=>'3','desperiod'=>'1 mês', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

		}//end switch



	}//END getPlan







	public function sendPlanToPayment(

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
		            $this->getidplan(),
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
	    		'idorder'=>$this->getidplan(),
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


	}//END sendPlanToPayment








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








	public function getOAuth()
	{


		$moip->accounts()->checkExistence("123.456.789-10");




		$account = $moip->accounts()
			->setName('Fulano')
		  ->setLastName('De Tal')
		  ->setEmail('fulano@email2.com')
		  ->setIdentityDocument('4737283560', 'SSP', '2015-06-23')
		  ->setBirthDate('1988-12-30')
		  ->setTaxDocument('16262131000')
		  ->setType('MERCHANT')
		  ->setTransparentAccount(true)
		  ->setPhone(11, 66778899, 55)
		  ->addAlternativePhone(11, 66448899, 55)
		  ->addAddress('Rua de teste', 123, 'Bairro', 'Sao Paulo', 'SP', '01234567', 'Apt. 23', 'BRA')
		  ->setCompanyName('Empresa Teste', 'Teste Empresa ME')
		  ->setCompanyOpeningDate('2011-01-01')
		  ->setCompanyPhone(11, 66558899, 55)
		  ->setCompanyTaxDocument('69086878000198')
		  ->setCompanyAddress('Rua de teste 2', 123, 'Bairro Teste', 'Sao Paulo', 'SP', '01234567', 'Apt. 23', 'BRA')
		  ->setCompanyMainActivity('82.91-1/00', 'Atividades de cobranças e informações cadastrais')
		  ->create();






	}//END getOAuth









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

	



	

	public static function setMsgError( $msg )
	{

		$_SESSION[Address::SESSION_ERROR] = $msg;


	}//END setMsgErro





	public static function getMsgError()
	{

		$msg = (isset($_SESSION[Address::SESSION_ERROR])) ? $_SESSION[Address::SESSION_ERROR] : "";

		Address::clearMsgError();

		return $msg;

	}//END getMsgErro





	public static function clearMsgError()
	{

		$_SESSION[Address::SESSION_ERROR] = NULL;

	}//END clearMsgError





}//END class Payment





 ?>