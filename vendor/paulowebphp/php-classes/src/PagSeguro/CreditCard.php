<?php 

namespace Core\PagSeguro;

use DOMDocument;
use DOMElement;
use \Core\PagSeguro\Address;	
use \Core\PagSeguro\CreditCard\Installment;
use \Core\PagSeguro\CreditCard\Holder;



class CreditCard
{

	private $token;
	private $installment;
	private $holder;
	private $billingAddress;



	public function __construct(

		string $token, 
		Installment $installment,
		Holder $holder,
		Address $billingAddress

	)

	{

		# Validando token
		if( !$token )

		{
			throw new \Exception("Informe o token do cartão");
			
		}#end if


		$this->token = $token;
		$this->installment = $installment;
		$this->holder = $holder;
		$this->billingAddress = $billingAddress;

	}#END __construct


	public function getDOMElement():DOMElement
	{

		$dom = new DOMDocument();

		$creditCard = $dom->createElement("creditCard");
		$creditCard = $dom->appendChild($creditCard);

		$token = $dom->createElement("token", $this->token);
		$token = $creditCard->appendChild($token);

		$installment = $this->installment->getDOMElement();
		$installment = $dom->importNode($installment, true);
		$installment = $creditCard->appendChild($installment);
		
		$holder = $this->holder->getDOMElement();
		$holder = $dom->importNode($holder, true);
		$holder = $creditCard->appendChild($holder);

		$billingAddress = $this->billingAddress->getDOMElement("billingAddress");
		$billingAddress = $dom->importNode($billingAddress, true);
		$billingAddress = $creditCard->appendChild($billingAddress);

		return $creditCard;

	}#END getDOMElement





}#END class CreditCard


 ?>