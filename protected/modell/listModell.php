<?php

class listModell {
	public $dbl;
	public function __construct()
	{
		$this->dbl = new db();
	}
	
	public function lista(){
		return $this -> dbl -> query1("select * from konyv");
		logger::log("lekérdezés au adatbázisból");
	}	
}
?>