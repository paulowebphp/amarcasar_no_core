<?php 

namespace Core\Model;

use \Core\DB\Sql;
use \Core\Model;


class PaymentStatus extends Model
{


	const WAITING = 1;
	const AUTHORIZED = 2;
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
    			return PaymentStatus::AUTHORIZED;
    		

    		case 'CANCELLED':
    			# code...
    			return PaymentStatus::CANCELLED;


    		case 'WAITING':
    			# code...
    			return PaymentStatus::WAITING;


    		case 'REVERSED':
				# code...
				return PaymentStatus::REVERSED;


			case 'SETTLED':
				# code...
				return PaymentStatus::SETTLED;

    	
    	}//end switch



	}//end getStatus






}//END class PaymentStatus




 ?>