<?php

use \Core\Model\Address;





$app->get( "/address/state", function()
{
	
	
	if( !isset($_GET['idstate']) )
	{

		header('Location: /');
		exit;			

	}


	Address::getCitiesJson($_GET['idstate']);

	

});//END route










?>