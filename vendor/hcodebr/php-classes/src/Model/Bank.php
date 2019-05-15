<?php 

namespace Hcode\Model;


use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Cart;
use \Hcode\Model\Address;
use \Hcode\Model\Payment;
use \Moip\Moip;
use \Moip\Auth\BasicAuth;



class Bank extends Model
{

	# Session
	const SESSION = "BankSession";

	# Error - Success
	const SUCCESS = "Bank-Success";
	const ERROR = "Bank-Error";





	public function update()
	{
			

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_banks_update(

				:idbank,
				:iduser,
				:desbankcode,
				:desbanknumber,
				:desagencynumber,
				:desagencycheck,
				:desaccounttype,
				:desaccountnumber,
				:desaccountcheck


				

			)", 
			
			[

				':idbank'=>$this->getidbank(),
				':iduser'=>$this->getiduser(),
				':desbankcode'=>$this->getdesbankcode(),
				':desbanknumber'=>$this->getdesbanknumber(),
				':desagencynumber'=>$this->getdesagencynumber(),
				':desagencycheck'=>$this->getdesagencycheck(),
				':desaccounttype'=>$this->getdesaccounttype(),
				':desaccountnumber'=>$this->getdesaccountnumber(),
				':desaccountcheck'=>$this->getdesaccountcheck()

			]
		
		);//end select





		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if


	}//END update












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

			SELECT * 
		    FROM tb_banks a
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    WHERE a.iduser = :iduser;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select

		if(count($results) > 0)
		{

			$this->setData($results[0]);
		}//end if


	}//END get









	public function getOrder( $idorder )
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

	}//END getOrder









	public static function checkBankCodeExists( $iduser )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT * 
		    FROM tb_banks a
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    WHERE a.iduser = :iduser;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select



		if( count($results) === 0 )
		{

			return false;
			
		}//end if
		else
		{

			return $results[0];

		}



	}//END checkBankCodeExists








	public static function getBanksValues()
	{

		return [

			['value'=>'001','name'=>'001 - Banco do Brasil S.A.'],
            ['value'=>'003','name'=>'003 - Banco da Amazônia S.A.'],
            ['value'=>'004','name'=>'004 - Banco do Nordeste do Brasil S.A. (BNB)'],
            ['value'=>'021','name'=>'021 - Banco do Estado do Espírito Santo S.A. (BANESTES)'],
            ['value'=>'025','name'=>'025 - Banco Alfa S.A.'],
            ['value'=>'027','name'=>'027 - Banco do Estado de Santa Catarina S.A.'],
            ['value'=>'033','name'=>'033 - Banco Santander S.A. (Santander Banespa)'],
            ['value'=>'037','name'=>'037 - Banco do Estado do Pará S.A. (BANPARA)'],
            ['value'=>'041','name'=>'041 - Banco do Estado do Rio Grande do Sul S.A. (BANRISUL)'],
            ['value'=>'047','name'=>'047 - Banco do Estado de Sergipe S.A. (BANESE)'],
            ['value'=>'063','name'=>'063 - Banco Ibi Banco Múltiplo S.A. (Banco Ibi)'],
            ['value'=>'065','name'=>'065 - Lemon Bank Banco Múltiplo S.A.'],
            ['value'=>'069','name'=>'069 - BPN Brasil Banco Múltiplo S.A. (BPN)'],
            ['value'=>'070','name'=>'070 - Banco de Brasília S.A. (BRB)'],
            ['value'=>'077','name'=>'077 - Banco Intermedium S.A.'],
            ['value'=>'085','name'=>'085 - Cooperativa Central de Crédito Urbano (CECRED)'],
            ['value'=>'104','name'=>'104 - Caixa Econômica Federal'],
            ['value'=>'107','name'=>'107 - Banco BBM S.A.'],
            ['value'=>'136','name'=>'136 - Confederação Nacional das Cooperativas Centrais (UNICRED)'],
            ['value'=>'151','name'=>'151 - Banco Nossa Caixa S.A.'],
            ['value'=>'208','name'=>'208 - Banco BTG Pactual S.A.'],
            ['value'=>'212','name'=>'212 - Banco Original S.A.'],
            ['value'=>'215','name'=>'215 - Banco Acomercial e de Investimento Sudameris S.A. (SUDAMERIS)'],
            ['value'=>'229','name'=>'229 - Banco Cruzeiro do Sul S.A.'],
            ['value'=>'237','name'=>'237 - Banco Bradesco S.A.'],
            ['value'=>'252','name'=>'252 - Banco Fininvest S.A.'],
            ['value'=>'263','name'=>'263 - Banco Cacique S.A.'],
            ['value'=>'318','name'=>'318 - Banco BMG S.A.'],
            ['value'=>'341','name'=>'341 - Banco Itaú S.A.'],
            ['value'=>'356','name'=>'356 - Banco ABN AMRO Real S.A.'],
            ['value'=>'389','name'=>'389 - Banco Mercantil do Brasil S.A.'],
            ['value'=>'399','name'=>'399 - HSBC Bank Brasil Banco Múltiplo S.A. '],
            ['value'=>'409','name'=>'409 - União de Bancos Brasileiros S.A. (UNIBANCO)'],
            ['value'=>'422','name'=>'422 - Banco Safra S.A.'],
            ['value'=>'479','name'=>'479 - Banco Itaubank S.A.'],
            ['value'=>'623','name'=>'623 - Banco Panamericano S.A.'],
            ['value'=>'633','name'=>'633 - Banco Rendimento S.A.'],
            ['value'=>'655','name'=>'655 - Banco Votorantim S.A.'],
            ['value'=>'719','name'=>'719 - Banco Internacional do Funchal S.A. (BANIF)'],
            ['value'=>'745','name'=>'745 - Banco Citibank S.A.'],
            ['value'=>'748','name'=>'748 - Banco Cooperativo Sicredi S.A.'],
            ['value'=>'749','name'=>'749 - Banco Simples S.A.'],
            ['value'=>'756','name'=>'756 - Banco Cooperativo do Brasil S.A. (BANCOOB)']

		];

	}//END getBanksValues










	public static function setError( $msg )
	{

		$_SESSION[Bank::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Bank::ERROR]) && $_SESSION[Bank::ERROR]) ? $_SESSION[Bank::ERROR] : '';

		Bank::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Bank::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Bank::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Bank::SUCCESS]) && $_SESSION[Bank::SUCCESS]) ? $_SESSION[Bank::SUCCESS] : '';

		Bank::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Bank::SUCCESS] = NULL;

	}//END clearSuccess 





	








}//END class Bank




 ?>