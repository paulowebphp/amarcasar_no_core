<?php 

namespace Core\Model;

use \Core\DB\Sql;
use \Core\Model;


class OrderStatus extends Model
{


	/**const EM_ABERTO = 1;
	const AGUARDANDO_PAGAMENTO = 2;
	const PAGO = 3;
	const ENTREGUE = 4; 

	const AGUARDANDO_PAGAMENTO = 1;
	const EM_ANALISE = 2;
	const PAGA = 3;
	const DISPONIVEL = 4;
	const EM_DISPUTA = 5;
	const DEVOLVIDA = 6;
	const CANCELADA = 7;
	*/

	const CREATED = 1;
	const WAITING = 2;
	const IN_ANALYSIS = 3;
	const PRE_AUTHORIZED = 4;
	const AUTHORIZED = 5;
	const CANCELLED = 6;
	const REFUNDED = 7;
	const REVERSED = 8;
	const SETTLED = 9;







	public static function listAll()
	{

		$sql = new Sql();

		$results = $sql->select("

			SELECT * FROM tb_ordersstatus
			ORDER BY idstatus

		");//end select

		foreach( $results as &$row )
		{
			# code...		
			$row['desstatus'] = utf8_encode($row['desstatus']);
			
		}//end foreach

		return $results;
		
		
	}//END listAll





}//END class Order




 ?>