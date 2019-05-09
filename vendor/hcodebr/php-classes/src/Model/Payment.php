<?php 

namespace Hcode\Model;


use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Model\Cart;
use \Hcode\Model\Address;



class Payment extends Model
{

	# Session
	const SESSION = "PaymentSession";

	# Error - Success
	const SUCCESS = "Payment-Success";
	const ERROR = "Payment-Error";





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







	public function get( $idorder )
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT *
			FROM tb_orders a
			INNER JOIN tb_ordersstatus b USING(idstatus)
			INNER JOIN tb_carts c USING(idcart)
			INNER JOIN tb_users d ON d.iduser = a.iduser
			INNER JOIN tb_addresses e USING(idaddress)
			INNER JOIN tb_persons f ON f.idperson = d.idperson
			WHERE a.idorder = :idorder

			", 
			
			[

				':idorder'=>$idorder

			]
		
		);//end select

		$results[0]['desperson'] = utf8_encode($results[0]['desperson']);
		$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		$results[0]['descity'] = utf8_encode($results[0]['descity']);
		$results[0]['desdistrict'] = utf8_encode($results[0]['desdistrict']);

		if( count($results) > 0 )
		{

			$this->setData($results[0]);
			
		}//end if

	}//END get






	public function createOrderInWirecard()
	{

		$token = '6PAOYPC0B4AUCM3VFALVQX3ZLOKALJTV';

		$key = 'BSF67OFMNPGC8TKKULSCBZ3LNPZWH3205RJN59VT';

		$keysInBase64 = base64($token.':'.$key);

		$header = [

			"Content-Type"=>"application/json", 
			"Authorization"=>"Basic ".$keysInBase64

		];//end header

		$data = [

			"ownId"=>"1",
			"items"=>
			[

				"product"=>"Nome do produto",
				"quantity"=>1,
				"detail"=>"",
				"price"=>7300

			],
			"customer"=>
			[

				"ownId"=>"11",
				"fullname"=>"Maria Ap",
				"email"=>"maria@gmail.sales"

			]

		];//end data

		/*$curlExec = 'curl -v https://sandbox.moip.com.br/v2/orders \
			   -H 'Content-Type: application/json'  \
			   -H 'Authorization: Basic $keysInBase64' \
			   -d '{
			  "ownId": "pedido_xyz",
			  "items": [
			    {
			      "product": "Box de Seriado - Exterminate!",
			      "quantity": 1,
			      "detail": "Box de seriado com 8 dvds",
			      "price": 7300
			    }
			  ],
			  "customer": {
			    "ownId": "cliente_xyz",
			    "fullname": "João Silva",
			    "email": "joaosilva@email.com"
			  }
			}'';*/

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, "https://sandbox.moip.com.br/v2/orders");

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);

		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

		# TRUE É PARA SERIALIZAR, PARA VIR COMO ARRAY E NÃO COMO OBJETO
		$data = json_decode( curl_exec($ch), true );

		curl_close($ch);
		
		

		return $data;

	}//END createOrderInWirecard





	public static function getCEP( $nrcep )
	{

		$nrcep = str_replace("-", "", $nrcep);

		$ch = curl_init();

		# CURLOPT_URL - Define a URL que será requisitada pelo cURL

		# CURLOPT_RETURNTRANSFER - Define o tipo de retorno que ocorrerá da requisição. Se definirmos TRUE ou 1, o retorno será uma string

		# CURLOPT_SSL_VERIFYPEER - Indica se ocorrerá a verificação dos peers durante a requisição. Se informarmos 0 ou FALSE, a verificação não ocorrerá

		curl_setopt($ch, CURLOPT_URL, "https://viacep.com.br/ws/$nrcep/json/");

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		# TRUE É PARA SERIALIZAR, PARA VIR COMO ARRAY E NÃO COMO OBJETO
		$data = json_decode( curl_exec($ch), true );

		# Necessito fechar com curl_close() por se tratar de um ponteiro de memória. Se não fechar, cada vez que der um REFRESH na página, no front ele irá criar mais um ponteiro e vai pesar na memória

		curl_close($ch);

		return $data;

	}//END getCEP





	public function setFreight( $nrzipcode )
	{
		
		$nrzipcode = str_replace('-', '', $nrzipcode);

		$totals = $this->getProductsTotals();

		if( $totals['nrqtd'] > 0 )
		{
			# Regras do Correios
			if($totals['vlheight'] < 2 ) $totals['vlheight'] = 2;
			if($totals['vllength'] < 16 ) $totals['vllength'] = 16;

			$qs = http_build_query([

				'nCdEmpresa'=>'',
				'sDsSenha'=>'',
				'nCdServico'=>'40010',
				'sCepOrigem'=>'09853120',
				'sCepDestino'=>$nrzipcode,
				'nVlPeso'=>$totals['vlweight'],
				'nCdFormato'=>'1',
				'nVlComprimento'=>$totals['vllength'],
				'nVlAltura'=>$totals['vlheight'],
				'nVlLargura'=>$totals['vlwidth'],
				'nVlDiametro'=>'0',
				'sCdMaoPropria'=>'S',
				'nVlValorDeclarado'=>$totals['vlprice'],
				'sCdAvisoRecebimento'=>'S'

			]);//end http_build_query


			$xml = simplexml_load_file("http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx/CalcPrecoPrazo?".$qs);

			
			$result = $xml->Servicos->cServico;

			if( $result->MsgErro != '' )
			{

				Cart::setMsgError($result->MsgErro);

			}//end if
			else
			{

				Cart::clearMsgError();

			}//end else

			$this->setnrdays($result->PrazoEntrega);
			$this->setvlfreight(Cart::formatValueToDecimal($result->Valor));
			$this->setdeszipcode($nrzipcode);

			$this->save();

			return $result;

		}//end if
		else
		{

			echo "Erro Requisição de Frete.......";

		}//end else

	}//END setFreight







	public static function listAll()
	{

		$sql = new Sql();

		return $sql->select("

			SELECT * FROM tb_orders a
			INNER JOIN tb_ordersstatus b USING(idstatus)
			INNER JOIN tb_carts c USING(idcart)
			INNER JOIN tb_users d ON d.iduser = a.iduser
			INNER JOIN tb_addresses e USING(idaddress)
			INNER JOIN tb_persons f ON f.idperson = d.idperson
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

		$_SESSION[Payment::ERROR] = $msg;

	}//END setError









	public static function getError()
	{

		$msg = (isset($_SESSION[Payment::ERROR]) && $_SESSION[Payment::ERROR]) ? $_SESSION[Payment::ERROR] : '';

		Payment::clearError();

		return $msg;

	}//END getError







	public static function clearError()
	{
		$_SESSION[Payment::ERROR] = NULL;

	}//END clearError








	public static function setSuccess($msg)
	{

		$_SESSION[Payment::SUCCESS] = $msg;

	}//END setSuccess






	public static function getSuccess()
	{

		$msg = (isset($_SESSION[Payment::SUCCESS]) && $_SESSION[Payment::SUCCESS]) ? $_SESSION[Payment::SUCCESS] : '';

		Payment::clearSuccess();

		return $msg;

	}//END getSuccess







	public static function clearSuccess()
	{
		$_SESSION[Payment::SUCCESS] = NULL;

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
			INNER JOIN tb_users d ON d.iduser = a.iduser
			INNER JOIN tb_addresses e USING(idaddress)
			INNER JOIN tb_persons f ON f.idperson = d.idperson
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
			INNER JOIN tb_users d ON d.iduser = a.iduser
			INNER JOIN tb_addresses e USING(idaddress)
			INNER JOIN tb_persons f ON f.idperson = d.idperson
			WHERE a.idorder = :id OR f.desperson LIKE :search 
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
		$_SESSION[Payment::SESSION] = $this->getValues();

	}//END toSession







	public function getFromSession()
	{

		$this->setData($_SESSION[Payment::SESSION]);

	}//END getFromSession







	public function getAddress()
	{

		$address = new Address();

		$address->setData($this->getValues());

		return $address;

	}//END getAddress







}//END class Payment




 ?>