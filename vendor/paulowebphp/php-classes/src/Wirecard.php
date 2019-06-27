<?php 

namespace Core;

use \Core\Model;
use \Core\Rule;
use \Core\DB\Sql;
use \Core\Model\Payment;
use \Core\Model\PaymentStatus;
use \Core\Model\Order;
use \Core\Model\Plan;
use \Moip\Moip;
use \Moip\Auth\OAuth;




class Wirecard extends Model
{

	const SESSION_ERROR = "WirecardError";

	



	public function createAccount(

		$desname,
		$desemail,
		$dtbirth,
		$desdocument,
		$nrcountryarea,
		$nrddd,
		$nrphone,
	  	$deszipcode, 
		$desaddress,
		$desnumber, 
	  	$descomplement,
	  	$desdistrict, 
	  	$descity, 
	  	$desstate, 
	  	$descountry

	)
	{


		try 
		{


			$moip = new Moip(new OAuth(Rule::WIRECARD_ACCESS_TOKEN), Moip::ENDPOINT_SANDBOX);

			$nameArray = explode(' ', $desname, 2);

			$firstName = $nameArray[0];
			$lastName = $nameArray[1];

			//$ddd = substr($nrphone, 0, 2);
			//$phone = substr($nrphone, 2, strlen($nrphone));


			
			  
		
			$account = $moip->accounts()
				->setName($firstName)
			  ->setLastName($lastName)
			  ->setEmail($desemail)
			  ->setBirthDate($dtbirth)
			  ->setTaxDocument($desdocument)
			  ->setType('MERCHANT')
			  ->setTransparentAccount(true)
			  ->setPhone($nrddd, $nrphone, $nrcountryarea)
			  ->addAlternativePhone($nrddd, $nrphone, $nrcountryarea)
			  ->addAddress($desaddress, 
			  	(int)$desnumber, 
			  	$desdistrict, 
			  	$descity, 
			  	$desstate, 
			  	$deszipcode, 
			  	$descomplement, 
			  	$descountry)
			  ->create();




			return [

				'desaccountcode'=>$account->getid(),
				'desaccesstoken'=>$account->getaccessToken(),
				'deschannelid'=>$account->getchannelId()

			];


			
		}//end try
		catch( \Moip\Exceptions\UnautorizedException $e )
		{

		    //StatusCode 401
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha de autenticação na abertura da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else
		    {

		    	Payment::setError("Houve uma falha de autenticação na abertura da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /checkout');
				exit;

		    }//end else

			



		}//end catch
		catch( \Moip\Exceptions\ValidationException $e )
		{



		    //StatusCode entre 400 e 499 (exceto 401)
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha de validação na abertura da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else
		    {

		    	Payment::setError("Houve uma falha de validação na abertura da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /checkout');
				exit;

		    }//end else




		}//end catch
		catch( \Moip\Exceptions\UnexpectedException $e )
		{



		    //StatusCode >= 500
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha inesperada na abertura da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else
		    {

		    	Payment::setError("Houve uma falha inesperada na abertura da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /checkout');
				exit;

		    }//end else



		}//end catch




		


		/*if( !empty($account->getid()) )
		{

			return [

			'desaccountcode'=>$account->getid(),
			'desaccesstoken'=>$account->getaccessToken(),
			'deschannelid'=>$account->getchannelId()

		];


		}//end if
		else
		{
			return false;

		}//end else*/

		

	}//END createAccount












	public function createCustomer(
 	
	  	$desname,
		$desemail,
		$dtbirth,
		$intypedoc,
		$desdocument,
		$inpaymentmethod,
		$nrcountryarea,
		$nrddd,
		$nrphone,
	  	$deszipcode, 
		$desaddress,
		$desnumber, 
	  	$descomplement,
	  	$desdistrict, 
	  	$descity, 
	  	$desstate, 
	  	$descardcode_month,
	  	$descardcode_year,
	  	$descardcode_number,
	  	$descardcode_cvc

	)
	{





		
		try 
		{


			$moip = new Moip(new OAuth(Rule::WIRECARD_ACCESS_TOKEN), Moip::ENDPOINT_SANDBOX);




			$customer = $moip->customers()->setOwnId( uniqid() )
				    ->setFullname( $desname )
				    ->setEmail( $desemail )
				    ->setBirthDate( $dtbirth )
				    ->setTaxDocument( $desdocument )
				    ->setPhone($nrddd, $nrphone)
				    ->addAddress( 'BILLING',
				        $desaddress, 
				        $desnumber,
				        $desdistrict, 
				        $descity, 
				        $desstate,
				        $deszipcode, 
				        $descomplement)
				    ->addAddress( 'SHIPPING',
				        $desaddress, 
				        $desnumber,
				        $desdistrict,
				        $descity, 
				        $desstate,
				        $deszipcode, 
				        $descomplement)
				    ->create();

			

			if( in_array($inpaymentmethod, ['1','2']) )
			{
				# code...
				$customerid = $customer->getid();


				$intypedoc = ((int)$intypedoc === 0)? 'CPF' : 'CNPJ';


				$customerCreditCard = $moip->customers()->creditCard()
				    ->setExpirationMonth( $descardcode_month )
				    ->setExpirationYear( (int)$descardcode_year )
				    ->setNumber( $descardcode_number )
				    ->setCVC( $descardcode_cvc )
				    ->setFullName( $desname )
				    ->setBirthDate( $dtbirth )
				    ->setTaxDocument( $intypedoc, $desdocument )
				    ->setPhone( $nrcountryarea, $nrddd, $nrphone )
				    ->create( $customerid );


				return [

					'descustomercode'=>$customerid,
					'descardcode'=>$customerCreditCard->getid(),
					'desbrand'=>$customerCreditCard->getbrand(),
					'infirst6'=>$customerCreditCard->getfirst6(),
					'inlast4'=>$customerCreditCard->getlast4()

				];


			}//end if
			else
			{	

				return [

					'descustomercode'=>$customer->getid(),
					'descardcode'=> null, 
					'desbrand'=> null,
					'infirst6'=> null, 
					'inlast4'=> null

				];


			}//end else
			

		

			
		}//end try
		catch( \Moip\Exceptions\UnautorizedException $e )
		{

		    //StatusCode 401
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha de autenticação na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else if( $uri[1] == 'checkout' )
		    {

		    	Payment::setError("Houve uma falha de autenticação na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /404');
				exit;

		    }//end else
		    else
		    {

		    	Payment::setError("Houve uma falha de autenticação na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /'.$uri[1].'/checkout');
				exit;

		    }//end else

			



		}//end catch
		catch( \Moip\Exceptions\ValidationException $e )
		{



		    //StatusCode entre 400 e 499 (exceto 401)
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha de validação na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else if( $uri[1] == 'checkout' )
		    {

		    	Payment::setError("Houve uma falha de validação na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /404');
				exit;

		    }//end else
		    else
		    {

		    	Payment::setError("Houve uma falha de validação na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /'.$uri[1].'/checkout');
				exit;

		    }//end else




		}//end catch
		catch( \Moip\Exceptions\UnexpectedException $e )
		{



		    //StatusCode >= 500
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha inesperada na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else if( $uri[1] == 'checkout' )
		    {

		    	Payment::setError("Houve uma falha inesperada na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /404');
				exit;

		    }//end else
		    else
		    {

		    	Payment::setError("Houve uma falha inesperada na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /'.$uri[1].'/checkout');
				exit;

		    }//end else



		}//end catch



	}//END createCustomer







	/*public function createCustomer(
 	
	  	$desname,
		$desemail,
		$dtbirth,
		$intypedoc,
		$desdocument,
		$nrcountryarea,
		$nrddd,
		$nrphone,
	  	$deszipcode, 
		$desaddress,
		$desnumber, 
	  	$descomplement,
	  	$desdistrict, 
	  	$descity, 
	  	$desstate, 
	  	$descardcode_month,
	  	$descardcode_year,
	  	$descardcode_number,
	  	$descardcode_cvc

	)
	{

		
		try 
		{


			$moip = new Moip(new OAuth(Rule::WIRECARD_ACCESS_TOKEN), Moip::ENDPOINT_SANDBOX);




			$customer = $moip->customers()->setOwnId( uniqid() )
				    ->setFullname( $desname )
				    ->setEmail( $desemail )
				    ->setBirthDate( $dtbirth )
				    ->setTaxDocument( $desdocument )
				    ->setPhone($nrddd, $nrphone)
				    ->addAddress( 'BILLING',
				        $desaddress, 
				        $desnumber,
				        $desdistrict, 
				        $descity, 
				        $desstate,
				        $deszipcode, 
				        $descomplement)
				    ->addAddress( 'SHIPPING',
				        $desaddress, 
				        $desnumber,
				        $desdistrict,
				        $descity, 
				        $desstate,
				        $deszipcode, 
				        $descomplement)
				    ->create();

			


			$customerid = $customer->getid();


			$intypedoc = ((int)$intypedoc === 0)? 'CPF' : 'CNPJ';


			$customerCreditCard = $moip->customers()->creditCard()
			    ->setExpirationMonth( $descardcode_month )
			    ->setExpirationYear( (int)$descardcode_year )
			    ->setNumber( $descardcode_number )
			    ->setCVC( $descardcode_cvc )
			    ->setFullName( $desname )
			    ->setBirthDate( $dtbirth )
			    ->setTaxDocument( $intypedoc, $desdocument )
			    ->setPhone( $nrcountryarea, $nrddd, $nrphone )
			    ->create( $customerid );


			return [

				'descustomercode'=>$customerid,
				'descardcode'=>$customerCreditCard->getid(),
				'desbrand'=>$customerCreditCard->getbrand(),
				'infirst6'=>$customerCreditCard->getfirst6(),
				'inlast4'=>$customerCreditCard->getlast4()

			];

			
		}//end try
		catch( \Moip\Exceptions\UnautorizedException $e )
		{

		    //StatusCode 401
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha de autenticação na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else if( $uri[1] == 'checkout' )
		    {

		    	Payment::setError("Houve uma falha de autenticação na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /404');
				exit;

		    }//end else
		    else
		    {

		    	Payment::setError("Houve uma falha de autenticação na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /'.$uri[1].'/checkout');
				exit;

		    }//end else

			



		}//end catch
		catch( \Moip\Exceptions\ValidationException $e )
		{



		    //StatusCode entre 400 e 499 (exceto 401)
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha de validação na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else if( $uri[1] == 'checkout' )
		    {

		    	Payment::setError("Houve uma falha de validação na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /404');
				exit;

		    }//end else
		    else
		    {

		    	Payment::setError("Houve uma falha de validação na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /'.$uri[1].'/checkout');
				exit;

		    }//end else




		}//end catch
		catch( \Moip\Exceptions\UnexpectedException $e )
		{



		    //StatusCode >= 500
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha inesperada na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else if( $uri[1] == 'checkout' )
		    {

		    	Payment::setError("Houve uma falha inesperada na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /404');
				exit;

		    }//end else
		    else
		    {

		    	Payment::setError("Houve uma falha inesperada na geração do perfil da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /'.$uri[1].'/checkout');
				exit;

		    }//end else



		}//end catch



	}//END createCustomer*/









public function getPlan( $idcart )
	{

		$sql = new Sql();

		$results = $sql->select("

		    SELECT b.idplan,b.iduser, b.iddiscount, b.idcupom, b.incupom,b.indiscount,b.inplancode,b.inmigration,b.inperiod,b.desplan,b.vlregularprice,b.vlsaleprice,b.dtbegin,b.dtend
			FROM tb_cartsitems a 
			INNER JOIN tb_plans b ON a.iditem = b.idplan
			INNER JOIN tb_carts c ON a.idcart = c.idcart
            WHERE a.initem = 0
			AND a.idcart = :idcart
			ORDER BY a.dtregister DESC
            LIMIT 1

			", 
			
			[

				':idcart'=>$idcart

			]
		
		);//end select


		$results[0]['desplan'] = utf8_encode($results[0]['desplan']);



		if( count($results) > 0 )
		{
			

			return $results[0];

			
		}//end if



	}//END getProducts



















	public function payOrderPlan(

		$descustomercode,
		$idcart,
		$nrholdercountryarea,
		$nrholderddd,
		$nrholderphone,
		$desholdername,
		$dtholderbirth,
		$inholdertypedoc,
		$desholderdocument,
		$desholderzipcode, 
		$desholderaddress,
		$desholdernumber, 
	  	$desholdercomplement,
	  	$desholderdistrict, 
	  	$desholdercity, 
	  	$desholderstate,
	  	$inpaymentmethod,
	  	$nrinstallment,
	  	$descardcode_month,
	  	$descardcode_year,
	  	$descardcode_number,
	  	$descardcode_cvc


	)
	{

		try
		{


			$moip = new Moip(new OAuth(Rule::WIRECARD_ACCESS_TOKEN), Moip::ENDPOINT_SANDBOX);

			$customer = $moip->customers()->get($descustomercode);

			//$nrholderddd = (int)substr($nrholderphone, 0, 2);
			//$nrholderphone = (int)substr($nrholderphone, 2, strlen($nrholderphone));

			$item = Wirecard::getPlan($idcart);

			


			$inholdertypedoc = ((int)$inholdertypedoc === 0) ? 'CPF' : 'CNPJ';

			$order = $moip->orders()->setOwnId( uniqid() );

			$order = $order->addItem( 

	        	$item['desplan'],
	            1,
	            Rule::SKU_PREFIX_PLAN.$item['idplan'],
	            (int)str_replace(".", "", $item['vlsaleprice'])

	        );//end addItem


		    $order = $order
		        ->setShippingAmount(0)
		        ->setCustomer($customer)
		        ->create();





			if( in_array($inpaymentmethod, ['1','2']) )
			{	

				$holder = $moip->holders()->setFullname( $desholdername )
				    ->setBirthDate( $dtholderbirth )
				    ->setTaxDocument( $desholderdocument, $inholdertypedoc)
				    ->setPhone($nrholderddd, $nrholderddd, $nrholdercountryarea)
				    ->setAddress('BILLING', 
				    	$desholderaddress, 
				    	$desholdernumber, 
				    	$desholderdistrict, 
				    	$desholdercity, 
				    	$desholderstate, 
				    	$desholderzipcode, 
				    	$desholdercomplement
				);//end holder

				
				$payment = $order->payments()->setCreditCard( $descardcode_month, 
					substr($descardcode_year, 2, strlen($descardcode_year)), 
					$descardcode_number, 
					$descardcode_cvc, 
					$holder )
					->setInstallmentCount($nrinstallment)
		    		->execute();



				$inpaymentstatus = PaymentStatus::getStatus($payment->getstatus());
		    	

		    	return [
						
						
					'desordercode'=>$order->getid(),
					'despaymentcode'=>$payment->getid(),
					'inpaymentstatus'=>$inpaymentstatus,
					'deslinecode'=>null,
					'desprinthref'=>null
			
				];
		    	

			}//end if
			else
			{

				$logo_uri = 'https://cdn.moip.com.br/wp-content/uploads/2016/05/02163352/logo-moip.png';

				$expiration_date = new \DateTime('now + 5 day');

				$instruction_lines = ['INSTRUÇÃO 1', 'INSTRUÇÃO 2', 'INSTRUÇÃO 3'];

				$payment = $order->payments()  
				    ->setBoleto($expiration_date, $logo_uri, $instruction_lines)
				    ->execute();


				$inpaymentstatus = PaymentStatus::getStatus($payment->getstatus());


		    	return [
						
						
					'desordercode'=>$order->getid(),
					'despaymentcode'=>$payment->getid(),
					'inpaymentstatus'=>$inpaymentstatus,
					'deslinecode'=>$payment->getLineCodeBoleto(),
					'desprinthref'=>$payment->getHrefPrintBoleto()
			
				];


			}//end else


			
	    	


		}//end try
		catch( \Moip\Exceptions\UnautorizedException $e )
		{

		    //StatusCode 401
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha de autenticação na geração do plano da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else
		    {

		    	Payment::setError("Houve uma falha de autenticação na geração do plano da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /checkout');
				exit;

		    }//end else

			



		}//end catch
		catch( \Moip\Exceptions\ValidationException $e )
		{



		    //StatusCode entre 400 e 499 (exceto 401)
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha de validação na geração do plano da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else
		    {

		    	Payment::setError("Houve uma falha de validação na geração do plano da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /checkout');
				exit;

		    }//end else




		}//end catch
		catch( \Moip\Exceptions\UnexpectedException $e )
		{



		    //StatusCode >= 500
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha inesperada na geração do plano da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else
		    {

		    	Payment::setError("Houve uma falha inesperada na geração do plano da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /checkout');
				exit;

		    }//end else



		}//end catch



	}//END payOrderPlan















	/*


	public function payOrderPlan(

		$descustomercode,
		$idcart,
		$nrholdercountryarea,
		$nrholderddd,
		$nrholderphone,
		$desholdername,
		$dtholderbirth,
		$inholdertypedoc,
		$desholderdocument,
		$desholderzipcode, 
		$desholderaddress,
		$desholdernumber, 
	  	$desholdercomplement,
	  	$desholderdistrict, 
	  	$desholdercity, 
	  	$desholderstate, 
	  	$descardcode_month,
	  	$descardcode_year,
	  	$descardcode_number,
	  	$descardcode_cvc


	)
	{

		try
		{


			$moip = new Moip(new OAuth(Rule::WIRECARD_ACCESS_TOKEN), Moip::ENDPOINT_SANDBOX);

			$customer = $moip->customers()->get($descustomercode);

			//$nrholderddd = (int)substr($nrholderphone, 0, 2);
			//$nrholderphone = (int)substr($nrholderphone, 2, strlen($nrholderphone));

			$item = Wirecard::getPlan($idcart);

			


			$inholdertypedoc = ((int)$inholdertypedoc === 0) ? 'CPF' : 'CNPJ';

			$order = $moip->orders()->setOwnId( uniqid() );

			$order = $order->addItem( 

	        	$item['desplan'],
	            1,
	            Rule::SKU_PREFIX_PLAN.$item['idplan'],
	            (int)str_replace(".", "", $item['vlsaleprice'])

	        );//end addItem


		    $order = $order
		        ->setShippingAmount(0)
		        ->setCustomer($customer)
		        ->create();

			
			$holder = $moip->holders()->setFullname( $desholdername )
			    ->setBirthDate( $dtholderbirth )
			    ->setTaxDocument( $desholderdocument, $inholdertypedoc)
			    ->setPhone($nrholderddd, $nrholderddd, $nrholdercountryarea)
			    ->setAddress('BILLING', 
			    	$desholderaddress, 
			    	$desholdernumber, 
			    	$desholderdistrict, 
			    	$desholdercity, 
			    	$desholderstate, 
			    	$desholderzipcode, 
			    	$desholdercomplement
			);//end holder

			
			$payment = $order->payments()->setCreditCard( $descardcode_month, 
				substr($descardcode_year, 2, strlen($descardcode_year)), 
				$descardcode_number, 
				$descardcode_cvc, 
				$holder )
	    		->execute();



	    	switch ( $payment->getstatus() ) 
	    	{
	    		case 'IN_ANALYSIS':
	    		case 'PRE_AUTHORIZED':
	    		case 'AUTHORIZED':
	    		case 'WAITING':
	    		case 'CREATED':
	    			# code...
	    			$inpaymentstatus = PaymentStatus::AUTHORIZED;
	    			break;
	    		

	    		case 'CANCELLED':
	    			# code...
	    			$inpaymentstatus = PaymentStatus::CANCELLED;
	    			break;

	    	
	    	}//end switch




	    	return [
					
					
				'desordercode'=>$order->getid(),
				'despaymentcode'=>$payment->getid(),
				'inpaymentstatus'=>$inpaymentstatus
		
			];


		}//end try
		catch( \Moip\Exceptions\UnautorizedException $e )
		{

		    //StatusCode 401
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha de autenticação na geração do plano da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else
		    {

		    	Payment::setError("Houve uma falha de autenticação na geração do plano da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /checkout');
				exit;

		    }//end else

			



		}//end catch
		catch( \Moip\Exceptions\ValidationException $e )
		{



		    //StatusCode entre 400 e 499 (exceto 401)
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha de validação na geração do plano da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else
		    {

		    	Payment::setError("Houve uma falha de validação na geração do plano da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /checkout');
				exit;

		    }//end else




		}//end catch
		catch( \Moip\Exceptions\UnexpectedException $e )
		{



		    //StatusCode >= 500
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

		    if( $uri[1] == 'dashboard' )
		    {

		    	Payment::setError("Houve uma falha inesperada na geração do plano da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /dashboard/meu-plano');
				exit;

		    }//end if
		    else
		    {

		    	Payment::setError("Houve uma falha inesperada na geração do plano da conta | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
				header('Location: /checkout');
				exit;

		    }//end else



		}//end catch



	}//END payOrderPlan



*/





	









	public static function getProducts( $idcart )
	{

		$sql = new Sql();

		$results = $sql->select("

		    SELECT b.idproduct,b.iduser, b.inbought, b.incategory, b.desproduct,b.vlprice,b.desphoto,b.desextension,
			COUNT(*) AS nrqtd,
			SUM(b.vlprice) as vltotal
			FROM tb_cartsitems a 
			INNER JOIN tb_products b ON a.iditem = b.idproduct
			INNER JOIN tb_carts c ON a.idcart = c.idcart
			WHERE a.initem = 1
			AND a.idcart = :idcart
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








	/*public function getProducts( $idcart )
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



	}//END getProducts*/


















	public static function getInterest( $vlOrder, $inpaymentmethod, $nrinstallment )
	{


		if((int)$inpaymentmethod == 1)
		{


			switch ($nrinstallment) 
			{
				case '1':
					# code...
					return $vlOrder;


				case '2':
					# code...
					$vlOrder = ($vlOrder*0.9501)/0.9223;
					return $vlOrder;


				case '3':
					# code...
					$vlOrder = ($vlOrder*0.9501)/0.9089;
					return $vlOrder;


				case '4':
					# code...
					$vlOrder = ($vlOrder*0.9501)/0.8954;
					return $vlOrder;


				case '5':
					# code...
					$vlOrder = ($vlOrder*0.9501)/0.882;
					return $vlOrder;


				case '6':
					# code...
					$vlOrder = ($vlOrder*0.9501)/0.8685;
					return $vlOrder;
				
				
			}//end switch


		}//end if
		else
		{

			//boleto


		}//end else



	}//END getInterest









	






	public function payOrderProducts(

		$desaccountcode,
		$descustomercode,
		$idcart,
		$nrholdercountryarea,
		$nrholderddd,
		$nrholderphone,
		$desholdername,
		$dtholderbirth,
		$inholdertypedoc,
		$desholderdocument,
	  	$desholderzipcode, 
		$desholderaddress,
		$desholdernumber, 
	  	$desholdercomplement,
	  	$desholderdistrict, 
	  	$desholdercity, 
	  	$desholderstate,
	  	$inpaymentmethod,
	  	$nrinstallment,
	  	$descardcode_month,
	  	$descardcode_year,
	  	$descardcode_number,
	  	$descardcode_cvc


	)
	{

		try 
		{	
				
			$moip = new Moip(new OAuth(Rule::WIRECARD_ACCESS_TOKEN), Moip::ENDPOINT_SANDBOX);


			
			//$ddd = substr($nrphone, 0, 2);
			//$phone = substr($nrphone, 2, strlen($nrphone));

			$customer = $moip->customers()->get($descustomercode);



	
			//$sku = Rule::PLAN_SKU_PREFIX.$plan['insellercategory'].$idplan;

			$inholdertypedoc = ((int)$inholdertypedoc === 0) ? 'CPF' : 'CNPJ';
				

			$items = Wirecard::getProducts($idcart);

			 
		 

			$order = $moip->orders()->setOwnId( uniqid() );


			$vlOrder = 0;

		    foreach($items as $item)
		    {
		    	

		        $order = $order->addItem( 

		        	$item['desproduct'],
		            (int)$item['nrqtd'],
		            Rule::SKU_PREFIX_PRODUCT.$item['idproduct'],
		            (int)str_replace(".", "", $item['vlprice'])

		        );//end addItem
		        

		        $vlOrder += (int)str_replace(".", "", $item['vltotal']);

		    }//end foreach



		    $interest = Wirecard::getInterest($vlOrder, $inpaymentmethod, $nrinstallment);




			//$primary = (($vlOrder*0.007)-69);
			//$secondary = (($vlOrder*0.993)+69);





		    $order = $order
		        ->setShippingAmount(0)
		        ->setCustomer($customer)
		        ->addReceiver(Rule::WIRECARD_PRIMARY_RECEIVER, 'PRIMARY', $primary, 0, false)
		        ->addReceiver($desaccountcode, 'SECONDARY', $secondary, 0, true)
		        ->create();

	    

		     if( (int)$inpaymentmethod == 1 )
			{	

				$holder = $moip->holders()->setFullname( $desholdername )
				    ->setBirthDate( $dtholderbirth )
				    ->setTaxDocument( $desholderdocument, $inholdertypedoc)
				    ->setPhone($nrholderddd, $nrholderddd, $nrholdercountryarea)
				    ->setAddress('BILLING', 
				    	$desholderaddress, 
				    	$desholdernumber, 
				    	$desholderdistrict, 
				    	$desholdercity, 
				    	$desholderstate, 
				    	$desholderzipcode, 
				    	$desholdercomplement
				);//end holder

				
				$payment = $order->payments()->setCreditCard( $descardcode_month, 
					substr($descardcode_year, 2, strlen($descardcode_year)), 
					$descardcode_number, 
					$descardcode_cvc, 
					$holder )
					->setInstallmentCount($nrinstallment)
		    		->execute();



				$inpaymentstatus = PaymentStatus::getStatus($payment->getstatus());
		    	

		    	return [
						
						
					'desordercode'=>$order->getid(),
					'despaymentcode'=>$payment->getid(),
					'inpaymentstatus'=>$inpaymentstatus,
					'deslinecode'=>null,
					'desprinthref'=>null
			
				];
		    	

			}//end if
			else
			{

				$logo_uri = 'https://cdn.moip.com.br/wp-content/uploads/2016/05/02163352/logo-moip.png';

				$expiration_date = new \DateTime('now + 5 day');

				$instruction_lines = ['INSTRUÇÃO 1', 'INSTRUÇÃO 2', 'INSTRUÇÃO 3'];

				$payment = $order->payments()  
				    ->setBoleto($expiration_date, $logo_uri, $instruction_lines)
				    ->execute();


				$inpaymentstatus = PaymentStatus::getStatus($payment->getstatus());


		    	return [
						
						
					'desordercode'=>$order->getid(),
					'despaymentcode'=>$payment->getid(),
					'inpaymentstatus'=>$inpaymentstatus,
					'deslinecode'=>$payment->getLineCodeBoleto(),
					'desprinthref'=>$payment->getHrefPrintBoleto()
			
				];


			}//end else




	




		}//end try
		catch( \Moip\Exceptions\UnautorizedException $e )
		{


		    //StatusCode 401
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

			Payment::setError("Houve uma falha de autenticação da conta do casal no pagamento do pedido | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
			header('Location: /'.$uri[1].'/checkout');
			exit;



		}//end catch
		catch( \Moip\Exceptions\ValidationException $e )
		{



		    //StatusCode entre 400 e 499 (exceto 401)
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

			Payment::setError("Houve uma falha de validação da conta do casal no pagamento do pedido | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
			header('Location: /'.$uri[1].'/checkout');
			exit;



		}//end catch
		catch( \Moip\Exceptions\UnexpectedException $e )
		{



		    //StatusCode >= 500
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

			Payment::setError("Houve uma falha inesperada no pagamento do pedido | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
			header('Location: /'.$uri[1].'/checkout');
			exit;



		}//end catch


		


#catch (Exception $e)
#{
#	$uri = explode('/', $_SERVER["REQUEST_URI"]);
#
#	Payment::setError("Falha no pagamento: ".$e);
#	header('Location: /'.$uri[1].'/checkout');
#	exit;
#}//end catch




#Shipping é o valor do frete
#Addition é se quiser repassar mais algum valor, como por exemplo se quiser repassar as taxas Wirecard
#E Discount é um desconto, que pode ser um cupom desconto do seu lado por exemplo
#Se não for usar, é só deixar como 0
#Posso ajudar em algo mais?





	}//END payOrderProducts




	





	/*public function payOrder(

		$descustomercode,
		$desaccountcode,
		$idcart,
		$nrholdercountryarea,
		$nrholderddd,
		$nrholderphone,
		$desholdername,
		$dtholderbirth,
		$inholdertypedoc,
		$desholderdocument,
	  	$desholderzipcode, 
		$desholderaddress,
		$desholdernumber, 
	  	$desholderdistrict, 
	  	$desholdercity, 
	  	$desholderstate, 
	  	$desholdercomplement,
	  	$descardcode_month,
	  	$descardcode_year,
	  	$descardcode_number,
	  	$descardcode_cvc


	)
	{

		try 
		{	
				
			$moip = new Moip(new OAuth(Rule::WIRECARD_ACCESS_TOKEN), Moip::ENDPOINT_SANDBOX);


			
			//$ddd = substr($nrphone, 0, 2);
			//$phone = substr($nrphone, 2, strlen($nrphone));

			$customer = $moip->customers()->get($descustomercode);



	
			//$sku = Rule::PLAN_SKU_PREFIX.$plan['insellercategory'].$idplan;

			$inholdertypedoc = ((int)$inholdertypedoc === 0) ? 'CPF' : 'CNPJ';
				

			$items = Wirecard::getProducts($idcart);

			
		 

			$order = $moip->orders()->setOwnId( uniqid() );


			$vlOrder = 0;

		    foreach($items as $item)
		    {
		    	

		        $order = $order->addItem( 

		        	$item['desproduct'],
		            (int)$item['nrqtd'],
		            Rule::SKU_PREFIX_PRODUCT.$item['idproduct'],
		            (int)str_replace(".", "", $item['vlprice'])

		        );//end addItem
		        

		        $vlOrder += (int)str_replace(".", "", $item['vltotal']);

		    }//end foreach

			$primary = (($vlOrder*0.007)-36);
			$secondary = (($vlOrder*0.993)+36);


		    $order = $order
		        ->setShippingAmount(0)
		        ->setCustomer($customer)
		        ->addReceiver(Rule::WIRECARD_PRIMARY_RECEIVER, 'PRIMARY', $primary, 0, false)
		        ->addReceiver($desaccountcode, 'SECONDARY', $secondary, 0, true)
		        ->create();

	    

			

			$holder = $moip->holders()->setFullname( $desholdername )
			    ->setBirthDate( $dtholderbirth )
			    ->setTaxDocument( $desholderdocument, $inholdertypedoc)
			    ->setPhone($nrholderddd, $nrholderphone, $nrholdercountryarea)
			    ->setAddress('BILLING', 
			    	$desholderaddress, 
			    	$desholdernumber, 
			    	$desholderdistrict, 
			    	$desholdercity, 
			    	$desholderstate, 
			    	$desholderzipcode, 
			    	$desholdercomplement
			);//end holder


			
			$payment = $order->payments()->setCreditCard( $descardcode_month, 
				substr($descardcode_year, 2, strlen($descardcode_year)), 
				$descardcode_number, 
				$descardcode_cvc, 
				$holder )
	    		->execute();


	    	
	    	return [

	    		'desordercode'=>$order->getid(),
	    		'despaymentcode'=>$payment->getid(),
				'desstatus'=>$payment->getstatus()


	    	];//end return


		}//end try
		catch (Exception $e)
		{
			$uri = explode('/', $_SERVER["REQUEST_URI"]);

			Wirecard::getError("Falha no pagamento: ".$e);
			header('Location: /'.$uri[1].'/checkout');
			exit;
			
		}//end catch




			$payment = $orderId->payments()->setCreditCardSaved('CRC-UEGHF7G47FG47', '123')
->setDelayCapture(false)
->setInstallmentCount(2)
->execute();

Shipping é o valor do frete
Addition é se quiser repassar mais algum valor, como por exemplo se quiser repassar as taxas Wirecard
E Discount é um desconto, que pode ser um cupom desconto do seu lado por exemplo
Se não for usar, é só deixar como 0
Posso ajudar em algo mais?






	}//END payOrder*/










	public function getBalances( $desaccesstoken )
	{


		try 
		{


			$moip = new Moip(new OAuth($desaccesstoken), Moip::ENDPOINT_SANDBOX);


	 		$balances = $moip->balances()->get();	

			

			$current = $balances->getcurrent()[0]->amount;
			$future = $balances->getfuture()[0]->amount;	
			$unavailable = $balances->getunavailable()[0]->amount;





			if( !$balances->getcurrent()[0]->amount == 0)
			{
			
				$lenghtCurrent = strlen($balances->getcurrent()[0]->amount);


				if ($lenghtCurrent >= 3)
				{
				 
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


			
		}//end try
		catch( \Moip\Exceptions\UnautorizedException $e )
		{



		    //StatusCode 401
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

			Order::getError("Falha no pagamento: ".$e->getMessage());
			header('Location: /dashboard/painel-financeiro');
			exit;



		}//end catch
		catch( \Moip\Exceptions\ValidationException $e )
		{



		    //StatusCode entre 400 e 499 (exceto 401)
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

			Order::getError("Falha no pagamento: ".$e->__toString());
			header('Location: /dashboard/painel-financeiro');
			exit;



		}//end catch
		catch( \Moip\Exceptions\UnexpectedException $e )
		{



		    //StatusCode >= 500
		    $uri = explode('/', $_SERVER["REQUEST_URI"]);

			Order::getError("Falha no pagamento: ".$e->getMessage());
			header('Location: /dashboard/painel-financeiro');
			exit;



		}//end catch



	}//END getBalances







	public function createBank(


		$desbanknumber,
		$desagencynumber,
		$desagencycheck,
		$desaccountnumber,
		$desaccountcheck,
		$desaccounttype,
		$desname,
		$desdocument,
		$intypedoc,
		$desaccesstoken,
		$desaccountcode


	)
	{

		try 
		{

			$moip = new Moip(new OAuth($desaccesstoken), Moip::ENDPOINT_SANDBOX);

			$firstTerm = substr($desdocument, 0, 3);
			$secondTerm = substr($desdocument, 3, 3);
			$thirdTerm = substr($desdocument, 6, 3);
			$fourthTerm = substr($desdocument, 9, 2);


			$wirecardDesdocumentFormat = $firstTerm . '.' . 
			$secondTerm . '.' . 
			$thirdTerm . '-' . 
			$fourthTerm;

			$intypedoc = ((int)$intypedoc === 0)? 'CPF' : 'CNPJ';


				
			$bank_account = $moip->bankaccount()
	        ->setBankNumber($desbanknumber)
	        ->setAgencyNumber($desagencynumber)
	        ->setAgencyCheckNumber($desagencycheck)
	        ->setAccountNumber($desaccountnumber)
	        ->setAccountCheckNumber($desaccountcheck)
	        ->setType($desaccounttype)
	        ->setHolder($desname, $wirecardDesdocumentFormat, $intypedoc)
	        ->create($desaccountcode);


	        return $bank_account->getid();




			
		}//end try
		catch( \Moip\Exceptions\UnautorizedException $e )
		{



		    //StatusCode 401
		   	Bank::setError("Houve uma falha de autenticação da conta do casal na configuração da conta bancária | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
			header('Location: /dashboard/conta-bancaria');
			exit;



		}//end catch
		catch( \Moip\Exceptions\ValidationException $e )
		{



		    //StatusCode entre 400 e 499 (exceto 401)
		   	Bank::setError("Houve uma falha de validação da conta do casal na configuração da conta bancária | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
			header('Location: /dashboard/conta-bancaria');
			exit;



		}//end catch
		catch( \Moip\Exceptions\UnexpectedException $e )
		{



		    //StatusCode >= 500
		   	Bank::setError("Houve uma falha inesperada na configuração da conta bancária | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
			header('Location: /dashboard/conta-bancaria');
			exit;



		}//end catch



        /*if( !empty($bank_account->getid()) )
		{

			return $bank_account->getid();

		}//end if
		else
		{
			return false;

		}//end else*/



      

	}//END createBank











	public function updateBank(


		$desbanknumber,
		$desagencynumber,
		$desagencycheck,
		$desaccountnumber,
		$desaccountcheck,
		$desaccounttype,
		$desname,
		$desdocument,
		$intypedoc,
		$desaccesstoken,
		$desbankcode


	)
	{


		try 
		{

			$moip = new Moip(new OAuth($desaccesstoken), Moip::ENDPOINT_SANDBOX);

			$firstTerm = substr($desdocument, 0, 3);
			$secondTerm = substr($desdocument, 3, 3);
			$thirdTerm = substr($desdocument, 6, 3);
			$fourthTerm = substr($desdocument, 9, 2);


			$wirecardDesdocumentFormat = $firstTerm . '.' . 
			$secondTerm . '.' . 
			$thirdTerm . '-' . 
			$fourthTerm;

			$intypedoc = ((int)$intypedoc === 0)? 'CPF' : 'CNPJ';

			
			$bank_account = $moip->bankaccount()
	        ->setBankNumber($desbanknumber)
	        ->setAgencyNumber($desagencynumber)
	        ->setAgencyCheckNumber($desagencycheck)
	        ->setAccountNumber($desaccountnumber)
	        ->setAccountCheckNumber($desaccountcheck)
	        ->setType($desaccounttype)
	        ->setHolder($desname, $wirecardDesdocumentFormat, $intypedoc)
	        ->update($desbankcode);


	        

	        return [

				'desbankcode'=>$bank_account->getid(),
				'desbanknumber'=>$bank_account->getbankNumber(),
			    'desagencynumber'=>$bank_account->getagencyNumber(),
			    'desagencycheck'=>$bank_account->getagencyCheckNumber(),
			    'desaccounttype'=>$bank_account->gettype(),
			    'desaccountnumber'=>$bank_account->getaccountNumber(),
			    'desaccountcheck'=>$bank_account->getaccountCheckNumber()
			    
			];


			
		}//end try
		catch( \Moip\Exceptions\UnautorizedException $e )
		{



		    //StatusCode 401
		   	Bank::setError("Houve uma falha de autenticação da conta do casal na configuração da conta bancária | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
			header('Location: /dashboard/conta-bancaria');
			exit;



		}//end catch
		catch( \Moip\Exceptions\ValidationException $e )
		{



		    //StatusCode entre 400 e 499 (exceto 401)
		   	Bank::setError("Houve uma falha de validação da conta do casal na configuração da conta bancária | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
			header('Location: /dashboard/conta-bancaria');
			exit;



		}//end catch
		catch( \Moip\Exceptions\UnexpectedException $e )
		{



		    //StatusCode >= 500
		   	Bank::setError("Houve uma falha inesperada na configuração da conta bancária | Por favor, tente novamente, se a falha persistir entre em contato com o suporte");
			header('Location: /dashboard/conta-bancaria');
			exit;



		}//end catch

        

        /*if( !empty($bank_account->getid()) )
		{

			return [

				'desbankcode'=>$bank_account->getid(),
				'desbanknumber'=>$bank_account->getbankNumber(),
			    'desagencynumber'=>$bank_account->getagencyNumber(),
			    'desagencycheck'=>$bank_account->getagencyCheckNumber(),
			    'desaccounttype'=>$bank_account->gettype(),
			    'desaccountnumber'=>$bank_account->getaccountNumber(),
			    'desaccountcheck'=>$bank_account->getaccountCheckNumber()
			    
			];

		}//end if
		else
		{
			return false;

		}//end else*/



      

	}//END updateBank











	public function wirecardTestBasic()
	{

		//$moip = new Moip(new OAuth(Rule::WIRECARD_ACCESS_TOKEN), Moip::ENDPOINT_SANDBOX);

		//$account = $moip->accounts()->checkExistence("012.242.026-86");


		$token = 'TTMRNZSMP3DN61DLF6TNDQ6LTE9YO6AR';

		$key = 'TGOAWSHZ6013ZU2PPJWHOCGM9E9BLCR5UHDLNB94';

		$keysInBase64 = base64_encode($token.':'.$key);

		
	}//EBD wirecardTest










	public function wirecardTestOAuth()
	{

		$moip = new Moip(new OAuth(Rule::WIRECARD_ACCESS_TOKEN), Moip::ENDPOINT_SANDBOX);

		//$customer = $moip->customers()->get('CUS-4O8NG02Y64XK');


		$customer = $moip->customers()->getOwnId('CUSTOM007')
		    ->setPhone(19, 99999999)
		    ->addAddress('BILLING',
		        'Rua de teste999', 1239999,
		        'Bairro999', 'Sao Paulo', 'SP',
		        '01234567', 99999999)
		    ->create();

				echo '<pre>';
				//var_dump($customer->getfundingInstrument()->creditCard->id);
		//var_dump($customer->getfundingInstrument()->creditCard->brand);
		//var_dump($customer->getfundingInstrument()->creditCard->first6);
		//var_dump($customer->getfundingInstrument()->creditCard->last4);
		//var_dump($customer->getshippingAddress()->zipCode);
		//var_dump($customer->getshippingAddress()->street);
		//var_dump($customer->getshippingAddress()->streetNumber);
		//var_dump($customer->getshippingAddress()->complement);
		//var_dump($customer->getshippingAddress()->city);
		//var_dump($customer->getshippingAddress()->district);
		//var_dump($customer->getshippingAddress()->state);
		var_dump($customer->getshippingAddress()->country);
		echo '<br><br><br><br>';
		var_dump($customer);
		exit;

	}//END wirecardTestOAuth







	

	public static function setError( $msg )
	{

		$_SESSION[Wirecard::SESSION_ERROR] = $msg;


	}//END setMsgErro





	public static function getError()
	{

		$msg = (isset($_SESSION[Wirecard::SESSION_ERROR])) ? $_SESSION[Wirecard::SESSION_ERROR] : "";

		Wirecard::clearError();

		return $msg;

	}//END getMsgErro





	public static function clearError()
	{

		$_SESSION[Wirecard::SESSION_ERROR] = NULL;

	}//END clearMsgError





}//END class Wirecard





 ?>