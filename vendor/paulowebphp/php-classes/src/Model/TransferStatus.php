<?php 

namespace Core\Model;

use \Core\DB\Sql;
use \Core\Model;


class TransferStatus extends Model
{


	const AUTHORIZED = 1;
	const CANCELLED = 2;
	const REVERSED = 3;
	const SETTLED = 4;




	/*const CREATED = 1;
	const WAITING = 2;
	const IN_ANALYSIS = 3;
	const PRE_AUTHORIZED = 4;
	const AUTHORIZED = 5;
	const CANCELLED = 6;
	const REFUNDED = 7;
	const REVERSED = 8;
	const SETTLED = 9;*/


}//END class TransferStatus




 ?>