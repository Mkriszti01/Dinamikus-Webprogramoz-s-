<?php

include_once "protected/controller/listController.php";
include_once "protected/controller/impressumController.php";
include_once "protected/controller/errorController.php";
include_once "protected/controller/addController.php";
include_once "protected/controller/startController.php";

class indexController {
	
	public function __construct($menupont) {
		switch($menupont) {
			 case 0: $controller = new startController();
                     $controller -> handle();
				  	 break;
			 case 1: $controller = new listController();
                     $controller -> handle();
				  	 break;	
			 case 2: $controller = new addController();
                     $controller -> handle();
				  	 break;	
			 case 3: $controller = new impressumController();
                     $controller -> handle();
				  	 break;		
		    default: $controller = new errorController();
                     $controller -> handle();
				  	 break;	 
		}
	}
}
?>