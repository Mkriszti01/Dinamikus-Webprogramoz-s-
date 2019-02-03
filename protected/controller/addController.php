<?php

include_once "protected/modell/menuModell.php";
include_once "protected/modell/addModell.php";

class addController {
	
  	private $modell;
  	private $menus;
	
	public function __construct() {
	  $this->modell = new addModell();
	  $this->menus = new menuModell();
	}
	public function handle() {	
		$add = $this->modell->add();
		$menu = $this -> menus -> menu();
		$this->render($add, $menu);
	}
	
	function render($add, $menu) {
		include_once "protected/view/head.php";
		include_once "protected/view/menuview.php";
        include_once "protected/view/addview.php";
		include_once "protected/view/footer.php";
		
	}
}

?>