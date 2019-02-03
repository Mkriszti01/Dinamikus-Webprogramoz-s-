<?php
class addModell {
    
    public $dbl;
    public function __construct() {
        $this -> dbl = new db();
    }
    
    public function add() {
        
        if(isset($_POST["elkuld"])) {
            if(!empty($_POST["cim"]) && !empty($_POST["szerzo"]) 
									&& !empty($_POST["leiras"]) 
									&& !empty($_POST["kep"])) {
                $cim      =   $_POST["cim"];
                $szerzo     =   $_POST["szerzo"];
                $leiras    =   $_POST["leiras"];
                $kep    =   $_POST["kep"];
                $this -> dbl -> query2("INSERT INTO `konyv` (`cim`, `szerzo`, `leiras`, `kep`) 
						VALUES ('$cim','$szerzo', '$leiras', '$kep');");
                logger::log("'".$cim."'"." hozzáadva az könyvekhez");
                header('Location: index.php?d=2');
				} 
			else {
                logger::log("A hozzáadás nem sikerült.");
                return "<p id=hiba>A *-gal jelölt mezőket kötelező kitölteni!</p>";
            }
    	      
    }
}
}
