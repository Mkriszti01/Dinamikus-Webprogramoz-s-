<?php

include_once "protected/modell/impressumModell.php";
include_once "protected/modell/menuModell.php";

class impressumController {
	
	public $modell;
	public $menus;
	
	public function __construct() {
       	$this -> modell = new impressumModell();
		$this -> menus = new menuModell();		
	}
	
	public function handle() {
		logger::log("impressum");
		$nev = $this -> modell -> getName();
		$mail = $this -> modell -> getMailAdress();
		$menu = $this -> menus -> menu();
		$this -> render($nev, $mail, $menu);
	}
	
	public function render($nev, $mail, $menu) {
		logger::log("megjelent az impressum");
		include_once "protected/view/head.php";
		include_once "protected/view/menuview.php";
		include_once "protected/view/impressumview.php";
		include_once "protected/view/footer.php";
	}
}