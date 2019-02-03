


<?php
		error_reporting(0); 

include_once "protected/core/autoload.php";

$autolad = new autoload();
$url = new urlController();
$index = new indexController($url -> readURL($_GET));

?>