<?php

include_once "protected/modell/listModell.php";
include_once "protected/modell/menuModell.php";

class listController {
	
    public $modell;
	public $menus;
	
	public function __construct() {
	    $this -> modell = new listModell();
		 $this -> menus = new menuModell();
	}
	
	public function handle()
	{	
		
		$lista = $this -> modell -> lista();
		$menu = $this -> menus -> menu();
		$this -> render($lista, $menu);
		
logger::log("rendel($lista)");
	}
	
	function render($lista, $menu) {
		
		include_once "protected/view/head.php";
		include_once "protected/view/menuview.php";
        include_once "protected/view/listview.php";
		include_once "protected/view/footer.php";
logger::log("mejelenik a lista tartalma");
      	}
}


?>