<?php

include_once "protected/modell/startModell.php";
include_once "protected/modell/menuModell.php";

class startController {
	
	public $modell;
	public $menus;
	
	public function __construct() {
       	$this -> modell = new startModell();
		$this -> menus = new menuModell();		
	}
	
	public function handle() {
		logger::log("start");
		$hello = $this -> modell -> getHello();
		$menu = $this -> menus -> menu();
		$this -> render($hello, $menu);
	}
	
	public function render($hello, $menu) {
		logger::log("megjelent az start");
		include_once "protected/view/head.php";
		include_once "protected/view/menuview.php";
		include_once "protected/view/startview.php";
		include_once "protected/view/footer.php";
	}
}