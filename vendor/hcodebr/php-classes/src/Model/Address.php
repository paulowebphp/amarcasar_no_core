<?php 

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;




class Address extends Model
{

	const SESSION_ERROR = "AddressError";




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






	public function loadFromCEP( $nrcep )
	{

		$data = Address::getCEP($nrcep);

			
		if( 

			isset($data['logradouro']) 
			&&
			$data['logradouro']

		)
		{
			$this->setdesaddress($data['logradouro']);
			//$this->setdesholderaddress($data['logradouro']);
			$this->setdescomplement($data['complemento']);
			//$this->setdesholdercomplement($data['complemento']);
			$this->setdescity($data['localidade']);
			//$this->setdesholdercity($data['localidade']);
			$this->setdesstate($data['uf']);
			//$this->setdesholderstate($data['uf']);
			$this->setdescountry('Brasil');
			//$this->setdesholdercountry('Brasil');
			$this->setdeszipcode($nrcep);
			//$this->setdesholderzipcode($nrcep);
			$this->setdesdistrict($data['bairro']);
			//$this->setdesholderdistrict($data['bairro']);



		}//end if

	}//END loadFromCEP






	public function save()
	{

		

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_addresses_save(

				:idaddress,
				:iduser,
				:idcart,
				:desaddress,
	            :desholderaddress,
	            :desnumber,
	            :desholdernumber,
	            :descomplement,
	            :desholdercomplement,
	            :descity,
	            :desholdercity,
	            :desstate,
	            :desholderstate,
	            :descountry,
	            :desholdercountry,
	            :deszipcode, 
	            :desholderzipcode


			);", 
			
			[

				':idaddress'=>$this->getidaddress(),
				':iduser'=>$this->getiduser(),
				':idcart'=>$this->getidcart(),
				':desaddress'=>utf8_decode($this->getdesaddress()),
				':desholderaddress'=>utf8_decode($this->getdesholderaddress()),
				':desnumber'=>$this->getdesnumber(),
				':desholdernumber'=>$this->getdesholdernumber(),
				':descomplement'=>utf8_decode($this->getdescomplement()),
				':desholdercomplement'=>utf8_decode($this->getdesholdercomplement()),
				':descity'=>utf8_decode($this->getdescity()),
				':desholdercity'=>utf8_decode($this->getdesholdercity()),
				':desstate'=>utf8_decode($this->getdesstate()),
				':desholderstate'=>utf8_decode($this->getdesholderstate()),
				':descountry'=>utf8_decode($this->getdescountry()),
				':desholdercountry'=>utf8_decode($this->getdesholdercountry()),
				':deszipcode'=>$this->getdeszipcode(),
				':desholderzipcode'=>$this->getdesholderzipcode()

			]
		
		);//end select

echo '<pre>';
	var_dump($results);
	exit;

		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if

	}//END save
	



	

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






}//END class Address





 ?>