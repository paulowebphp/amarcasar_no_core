<?php 

namespace Core;

use Rain\Tpl;

class PageDashboard
{

	private $tpl;

	private $options = [];

	private $defaults = [

		"header"=>true,
		"footer"=>true,
		"data"=>[]

	];//end $defaults





	public function __construct( $opts = array(), $tpl_dir = "/views/dashboard/" )
	{
		# O ÚLTIMO ARRAY SEMPRE VAI SOBRESCREVER OS ANTERIORES

		$this->options = array_merge($this->defaults, $opts);

		// config
		$config = array(

			"tpl_dir"       => $_SERVER["DOCUMENT_ROOT"].$tpl_dir,
			"cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/views-cache/",
			"debug"         => false // set to false to improve the speed

		);//end array

		Tpl::configure( $config );

		$this->tpl = new Tpl;

		$this->setData($this->options["data"]);

		if($this->options["header"] === true) $this->tpl->draw("header");

	}//END __construct()





	private function setData( $data = array() )
	{
		foreach ($data as $key => $value) 
		{

			$this->tpl->assign($key, $value);
		
		}//END foreach

	}//END setDAta





	public function setTpl( $name, $data = array(), $returnHTML = false )
	{
		$this->setData($data);

		return $this->tpl->draw($name, $returnHTML);

	}//END setTpl






	public function __destruct()
	{
		if($this->options["footer"] === true) $this->tpl->draw("footer");
		
	}//END __destruct





}#END class PageDashboard

 ?>