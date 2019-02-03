<?php

class menuModell{

	public $dbl;
	public function __construct()
	{
		$this->dbl = new db();
	}
	
	
	public function menu()
	{
		return $this -> dbl -> query1("select * from menutable");
		logger::log("menü lekérdezése az adatázisból");
	}
}
?>
