<?php 

namespace Core\Model;

use \Core\DB\Sql;
use \Core\Model;


class PaymentStatus extends Model
{


	const AUTHORIZED = 1;
	const WAITING = 2;
	const CANCELLED = 3;
	const REVERSED = 4;
	const SETTLED = 5;


	/*const CREATED = 1;
	const WAITING = 2;
	const IN_ANALYSIS = 3;
	const PRE_AUTHORIZED = 4;
	const AUTHORIZED = 5;
	const CANCELLED = 6;
	const REFUNDED = 7;
	const REVERSED = 8;
	const SETTLED = 9;*/




	public static function getStatus( $status )
	{

		switch ( $status ) 
    	{
    		case 'IN_ANALYSIS':
    		case 'PRE_AUTHORIZED':
    		case 'AUTHORIZED':
    		case 'CREATED':
    			# code...
    			$inpaymentstatus = PaymentStatus::AUTHORIZED;
    			break;
    		

    		case 'CANCELLED':
    			# code...
    			$inpaymentstatus = PaymentStatus::CANCELLED;
    			break;


    		case 'WAITING':
    			# code...
    			$inpaymentstatus = PaymentStatus::WAITING;
    			break;


    		case 'REVERSED':
				# code...
				$inpaymentstatus = PaymentStatus::REVERSED;
				break;


			case 'SETTLED':
				# code...
				$inpaymentstatus = PaymentStatus::SETTLED;
				break;	

    	
    	}//end switch



		return $inpaymentstatus;


	}//end getStatus






}//END class PaymentStatus




 ?>