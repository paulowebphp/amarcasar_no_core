<?php 

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Payment;
use \Hcode\Model\Rule;
use \Moip\Moip;
use \Moip\Auth\OAuth;




class Wirecard extends Model
{

	const SESSION_ERROR = "WirecardError";

	


	

	


	public function createTransparentAccount(

		$desperson,
		$desemail,
		$dtbirth,
		$desdocument,
		$nrphone,
		$desaddress,
		$desnumber, 
	  	$desdistrict, 
	  	$descity, 
	  	$desstate, 
	  	$deszipcode, 
	  	$descomplement,
	  	$descardcode_month,
	  	$descardcode_year,
	  	$descardcode_number,
	  	$descardcode_cvv


	)
	{

		

		$moip = new Moip(new OAuth(Rule::WIRECARD_ACCESS_TOKEN), Moip::ENDPOINT_SANDBOX);

		$name = explode(' ', $desperson, 2);

		$firstName = $name[0];
		$lastName = $name[1];

		$ddd = substr($nrphone, 0, 2);
		$phone = substr($nrphone, 2, strlen($nrphone));


	
		$account = $moip->accounts()
			->setName($firstName)
		  ->setLastName($lastName)
		  ->setEmail($desemail)
		  ->setBirthDate($dtbirth)
		  ->setTaxDocument($desdocument)
		  ->setType('MERCHANT')
		  ->setTransparentAccount(true)
		  ->setPhone($ddd, $phone, 55)
		  ->addAlternativePhone($ddd, $phone, 55)
		  ->addAddress($desaddress, 
		  	$desnumber, 
		  	$desdistrict, 
		  	$descity, 
		  	$desstate, 
		  	$deszipcode, 
		  	$descomplement, 
		  	'BRA')
		  ->create();




		$customer = $moip->customers()->setOwnId( uniqid() )
			    ->setFullname( $desperson )
			    ->setEmail( $desemail )
			    ->setBirthDate( $dtbirth )
			    ->setTaxDocument( $desdocument )
			    ->setPhone($ddd, $phone)
			    ->addAddress( 'BILLING',
			        $desaddress, 
			        $desnumber,
			        $desdistrict, 
			        $descity, 
			        $desstate,
			        $deszipcode, 
			        $desnumber )
			    ->addAddress( 'SHIPPING',
			        $desaddress, 
			        $desnumber,
			        $desdistrict,
			        $descity, 
			        $desstate,
			        $deszipcode, 
			        $desnumber)
			    ->create();


		$customerId = $customer->getid();


			/* ADICIONANDO CARTÃO DE CRÉDITO */

			$customerCreditCard = $moip->customers()->creditCard()
			    ->setExpirationMonth( $descardcode_month )
			    ->setExpirationYear( (int)$descardcode_year )
			    ->setNumber( $descardcode_number )
			    ->setCVC( $descardcode_cvv )
			    ->setFullName( $desperson )
			    ->setBirthDate( $dtbirth )
			    ->setTaxDocument( 'CPF', $desdocument )
			    ->setPhone( '55', $ddd, $phone )
			    ->create( $customerId );

	

		if( !empty($account->getid()) )
		{

			return [

			'account'=>$account->getid(),
			'accessToken'=>$account->getaccessToken(),
			'channelId'=>$account->getchannelId(),
			'customerid'=>$customerId,
			'descardcode'=>$customerCreditCard->getid()

		];


		}//end if
		else
		{
			return false;

		}//end else

		

	}//END createTransparentAccount









	public function payPlan(

		$inplan,
		$id_entity,
		$customerId,
		$desperson,
		$dtbirth,
		$desdocument,
		$nrphone,
		$desaddress,
		$desnumber, 
	  	$desdistrict, 
	  	$descity, 
	  	$desstate, 
	  	$deszipcode, 
	  	$descomplement,
	  	$descardcode_month,
	  	$descardcode_year,
	  	$descardcode_number,
	  	$descardcode_cvv

	)
	{

		$moip = new Moip(new OAuth(Rule::WIRECARD_ACCESS_TOKEN), Moip::ENDPOINT_SANDBOX);

		$customer = $moip->customers()->get($customerId);

		$ddd = substr($nrphone, 0, 2);
		$phone = substr($nrphone, 2, strlen($nrphone));

		$inplanData = $this->getPlan($inplan);

		$order = $moip->orders()->setOwnId( uniqid() );

		$order = $order->addItem( 

        	$inplanData['desplan'],
            1,
            $id_entity,
            (int)str_replace(".", "", $inplanData['vlprice'])

        );//end addItem


	    $order = $order
	        ->setShippingAmount(0)
	        ->setCustomer($customer)
	        ->create();

		/* SETANDO O HOLDER */
		
		$holder = $moip->holders()->setFullname( $desperson )
		    ->setBirthDate( $dtbirth )
		    ->setTaxDocument( $desdocument, 'CPF')
		    ->setPhone($ddd, $phone, 55)
		    ->setAddress('BILLING', 
		    	$desaddress, 
		    	$desnumber, 
		    	$desdistrict, 
		    	$descity, 
		    	$desstate, 
		    	$deszipcode, 
		    	$descomplement
		);//end holder

		
		$payment = $order->payments()->setCreditCard( $descardcode_month, 
			substr($descardcode_year, 2, strlen($descardcode_year)), 
			$descardcode_number, 
			$descardcode_cvv, 
			$holder )
    		->execute();




    	if( !empty($order->getid()) )
		{

			return [
				
				
			'desordercode'=>$order->getid(),
			'despaymentcode'=>$payment->getid()
		
			];

		}//end if
		else
		{
			return false;

		}//end else




	}//END payPlan










	public function payOrder(

		$desaccountcode,
		$idcart,
		$desname,
		$dtbirth,
		$desdocument,
		$desemail,
		$nrphone,
		$desaddress,
		$desnumber, 
	  	$desdistrict, 
	  	$descity, 
	  	$desstate, 
	  	$deszipcode, 
	  	$descomplement,
	  	$descardcode_month,
	  	$descardcode_year,
	  	$descardcode_number,
	  	$descardcode_cvv


	)
	{

		try 
		{

			
				
			$moip = new Moip(new OAuth(Rule::WIRECARD_ACCESS_TOKEN), Moip::ENDPOINT_SANDBOX);


			$ddd = substr($nrphone, 0, 2);
			$phone = substr($nrphone, 2, strlen($nrphone));
			

			/* CRIANDO COMPRADOR */	


			$customer = $moip->customers()->setOwnId( uniqid() )
			    ->setFullname( $desname )
			    ->setEmail( $desemail )
			    ->setBirthDate( $dtbirth )
			    ->setTaxDocument( $desdocument )
			    ->setPhone($ddd, $phone)
			    ->addAddress( 'BILLING',
			        $desaddress, 
			        $desnumber,
			        $desdistrict, 
			        $descity, 
			        $desstate,
			        $deszipcode, 
			        $desnumber)
			    ->addAddress( 'SHIPPING',
			        $desaddress, 
			        $desnumber,
			        $desdistrict,
			        $descity, 
			        $desstate,
			        $deszipcode, 
			        $desnumber)
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

			$orderProducts = $this->getProducts($idcart);
		 

			$order = $moip->orders()->setOwnId( uniqid() );


			$vlOrder = 0;

		    foreach($orderProducts as $product)
		    {
		    	

		        $order = $order->addItem( 

		        	$product['desproduct'],
		            (int)$product['nrqtd'],
		            'PROD-'.$product['idproduct'],
		            (int)str_replace(".", "", $product['vlprice'])

		        );//end addItem

		        $vlOrder += (int)str_replace(".", "", $product['vltotal']);

		    }//end foreach

			$primary = (($vlOrder*0.007)-36);
			$secondary = (($vlOrder*0.993)+36);


		    $order = $order
		        ->setShippingAmount(0)
		        ->setCustomer($customer)
		        ->addReceiver(Rule::WIRECARD_PRIMARY_RECEIVER, 'PRIMARY', $primary, 0, false)
		        ->addReceiver($desaccountcode, 'SECONDARY', $secondary, 0, true)
		        ->create();

	    

			/* SETANDO O HOLDER */
			

			$holder = $moip->holders()->setFullname( $desname )
			    ->setBirthDate( $dtbirth )
			    ->setTaxDocument( $desdocument, 'CPF')
			    ->setPhone($ddd, $phone, 55)
			    ->setAddress('BILLING', 
			    	$desaddress, 
			    	$desnumber, 
			    	$desdistrict, 
			    	$descity, 
			    	$desstate, 
			    	$deszipcode, 
			    	$descomplement
			);//end holder


			
			$payment = $order->payments()->setCreditCard( $descardcode_month, 
				substr($descardcode_year, 2, strlen($descardcode_year)), 
				$descardcode_number, 
				$descardcode_cvv, 
				$holder )
	    		->execute();


	    	
	    	return [

	    		'descustomercode'=>$customerId,
	    		'descardcode'=>$customerCreditCard->getid(),
	    		'desordercode'=>$order->getid(),
	    		'despaymentcode'=>$payment->getid(),

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


	}//END payOrder









	public function getBalances( $desaccountcode )
	{
		

		$moip = new Moip(new OAuth(Rule::WIRECARD_ACCESS_TOKEN), Moip::ENDPOINT_SANDBOX);

		$balances = $moip->balances()->get($desaccountcode);
		$account = $moip->accounts()->get($desaccountcode);


		
		$current = $balances->getcurrent()[0]->amount;
		$future = $balances->getfuture()[0]->amount;
		$unavailable = $balances->getunavailable()[0]->amount;


		if( !$balances->getcurrent()[0]->amount == 0)
		{
		

			$lenghtCurrent = strlen($balances->getcurrent()[0]->amount);


			if ($lenghtCurrent >= 3)
			{
			 
			//montando a string com o ponto
			//$final = substr_replace($teste, ".", $lenght-2).substr($teste, $lenght-2);

				$current = substr_replace($current, ".", $lenghtCurrent-2).substr($current, $lenghtCurrent-2);
			}//end if
			else
			{
				$current = '0'. substr_replace($current, ".", $lenghtCurrent-2) . substr($current, $lenghtCurrent-2);
			}//end else
				

		}//ennd if
		






		if( !$balances->getfuture()[0]->amount == 0)
		{
			
			$lenghtFuture = strlen($balances->getfuture()[0]->amount);
			

			if ($lenghtFuture >= 3)
			{
			 
			//montando a string com o ponto
			//$final = substr_replace($teste, ".", $lenght-2).substr($teste, $lenght-2);

				$future = substr_replace($future, ".", $lenghtFuture-2).substr($future, $lenghtFuture-2);
			}//end if
			else
			{
				$future = '0'. substr_replace($future, ".", $lenghtFuture-2) . substr($future, $lenghtFuture-2);
			}//end else



		}//ennd if
		





		if( !$balances->getunavailable()[0]->amount == 0)
		{
			
			$lenghtUnavailable = strlen($balances->getunavailable()[0]->amount);
			

			if ($lenghtUnavailable >= 3)
			{
			 
			//montando a string com o ponto
			//$final = substr_replace($teste, ".", $lenght-2).substr($teste, $lenght-2);

				$unavailable = substr_replace($unavailable, ".", $lenghtUnavailable-2).substr($unavailable, $lenghtUnavailable-2);
			}//end if
			else
			{
				$unavailable = '0'. substr_replace($unavailable, ".", $lenghtUnavailable-2) . substr($unavailable, $lenghtUnavailable-2);
			}//end else

		}//ennd if
		

		
	
		

		return [

			'current'=>$current,
			'future'=>$future,
			'unavailable'=>$unavailable

		];//end return




	}//END getBalances














	public function getProducts( $idcart )
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

				':idcart'=>$idcart

			]
		
		);//end select



		//$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		if( count($results) > 0 )
		{
			

			return $results;

			
		}//end if



	}//END getProducts











	public function getPlan( $inplan )
	{

		switch( $inplan )
		{
			case '001':
				# code...
				return '0';
				break;

			case '101':
				return ['vlprice'=>'19.99' , 'inperiod'=>'1', 'desperiod'=>'mês', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '103':
				return  ['vlprice'=>'39.99' , 'inperiod'=>'3','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '104':
				return ['vlprice'=>'49.99' , 'inperiod'=>'4','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '106':
				return ['vlprice'=>'69.99' , 'inperiod'=>'6','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '109':
				return ['vlprice'=>'99.99' , 'inperiod'=>'9','desperiod'=>'meses','desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '112':
				# code...
				return ['vlprice'=>'129.99' , 'inperiod'=>'12', 'desperiod'=>'meses','desplan'=>Rule::PLAN_NAME_BASIC];
				break;

			case '201':
				return ['vlprice'=>'39.99' , 'inperiod'=>'1','desperiod'=>'mês', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '203':
				return ['vlprice'=>'239.99' , 'inperiod'=>'3','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '204':
				return ['vlprice'=>'39.99' , 'inperiod'=>'4','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '206':

				return ['vlprice'=>'39.99' , 'inperiod'=>'6','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '209':
				return ['vlprice'=>'299.99' , 'inperiod'=>'9','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '212':
				return ['vlprice'=>'312.99' , 'inperiod'=>'12','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_INTERMEDIATE];
				break;

			case '301':
				return ['vlprice'=>'39.99' , 'inperiod'=>'1','desperiod'=>'mês', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '303':
				return ['vlprice'=>'39.99' , 'inperiod'=>'3','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '304':
				return ['vlprice'=>'39.99' , 'inperiod'=>'4','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '306':
				return ['vlprice'=>'39.99' , 'inperiod'=>'6','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '309':
				return ['vlprice'=>'39.99' , 'inperiod'=>'9','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;

			case '312':
				return ['vlprice'=>'39.99' , 'inperiod'=>'12', 'desperiod'=>'meses','desplan'=>Rule::PLAN_NAME_ADVANCED];
				break;
				
			
			default:
				# code...
				return ['vlprice'=>'39.99' , 'inperiod'=>'3','desperiod'=>'meses', 'desplan'=>Rule::PLAN_NAME_BASIC];
				break;

		}//end switch



	}//END getPlan


	

	



	

	public static function setMsgError( $msg )
	{

		$_SESSION[Wirecard::SESSION_ERROR] = $msg;


	}//END setMsgErro





	public static function getMsgError()
	{

		$msg = (isset($_SESSION[Wirecard::SESSION_ERROR])) ? $_SESSION[Wirecard::SESSION_ERROR] : "";

		Wirecard::clearMsgError();

		return $msg;

	}//END getMsgErro





	public static function clearMsgError()
	{

		$_SESSION[Wirecard::SESSION_ERROR] = NULL;

	}//END clearMsgError





}//END class Wirecard





 ?>