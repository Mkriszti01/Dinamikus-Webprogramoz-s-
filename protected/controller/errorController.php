<?php
include_once "protected/modell/menuModell.php";

class errorController {
	
	public $menus;
	
	public function __construct() {
	    $this -> menus = new menuModell();
	}
	public function handle() {
	
		$menu = $this -> menus -> menu();
		$this -> render($menu);
	}
	
	
	public function render($menu) {
		include_once "protected/view/head.php";
		include_once "protected/view/menuview.php";
        include_once "protected/view/404.php";
		include_once "protected/view/footer.php";
	}
}