<?php 

namespace Core\Model;

use \Core\DB\Sql;
use \Core\Model;
use \Core\Rule;




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
			//$this->setdescountry('Brasil');
			//$this->setdesholdercountry('Brasil');
			$this->setdeszipcode($nrcep);
			//$this->setdesholderzipcode($nrcep);
			$this->setdesdistrict($data['bairro']);
			//$this->setdesholderdistrict($data['bairro']);



		}//end if

	}//END loadFromCEP










	public function update()
	{

		

		$sql = new Sql();

		$results = $sql->select("

			CALL sp_addresses_update(

				:idaddress,
				:iduser,
	            :deszipcode, 
				:desaddress,
	            :desnumber,
	            :descomplement,
	            :desdistrict,
	            :descity,
	            :desstate,
	            :descountry


			);", 
			
			[

				':idaddress'=>$this->getidaddress(),
				':iduser'=>$this->getiduser(),
				':deszipcode'=>$this->getdeszipcode(),
				':desaddress'=>utf8_decode($this->getdesaddress()),
				':desnumber'=>$this->getdesnumber(),
				':descomplement'=>utf8_decode($this->getdescomplement()),
				':desdistrict'=>$this->getdesdistrict(),
				':descity'=>utf8_decode($this->getdescity()),
				':desstate'=>utf8_decode($this->getdesstate()),
				':descountry'=>Rule::DESCOUNTRY

			]
		
		);//end select


		if( count($results) > 0 )
		{

			$this->setData($results[0]);

		}//end if

	}//END save











	public function get( $iduser )
	{

		

		$sql = new Sql();

		$results = $sql->select("

			SELECT * 
		    FROM tb_addresses a
		    INNER JOIN tb_users d ON a.iduser = d.iduser
		    WHERE a.iduser = :iduser
		    ORDER BY a.dtregister DESC
		    LIMIT 1;

			", 
			
			[

				':iduser'=>$iduser

			]
		
		);//end select



		$results[0]['desaddress'] = utf8_encode($results[0]['desaddress']);
		$results[0]['descity'] = utf8_encode($results[0]['descity']);
		$results[0]['desdistrict'] = utf8_encode($results[0]['desdistrict']);
		$results[0]['descomplement'] = utf8_encode($results[0]['descomplement']);

				
		if(count($results[0]) > 0)
		{

			$this->setData($results[0]);
		
		}//end if


	}//END get



	










	

	public static function setError( $msg )
	{

		$_SESSION[Address::SESSION_ERROR] = $msg;


	}//END setMsgErro





	public static function getError()
	{

		$msg = (isset($_SESSION[Address::SESSION_ERROR])) ? $_SESSION[Address::SESSION_ERROR] : "";

		Address::clearError();

		return $msg;

	}//END getMsgErro





	public static function clearError()
	{

		$_SESSION[Address::SESSION_ERROR] = NULL;

	}//END clearMsgError






}//END class Address





 ?>