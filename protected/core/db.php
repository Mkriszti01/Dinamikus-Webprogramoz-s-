<?php
define("USER", 'root'); 			
define ("PWD", 'root');
define ("HOST", 'localhost');
define ("DB", 'konyvek');
	class db{
		public function connect(){		
			
			$CID=mysql_connect(HOST, USER, PWD);
			mysql_select_db(DB);
			mysql_set_charset('utf8', $CID); 	
			return $CID;
logger::log("csatlakozik az adatbázishoz");
										
		}
		public function query1($P)				 
		{
		
			$id=$this->connect(); 					
			$result=mysql_query($P);			
			$eredmeny=array(); 				
			while 							
			($row=mysql_fetch_array($result))
			{
				$eredmeny[]=$row; 				
			}
			mysql_close($id);
logger::log("a lekérdezés lefut?");
			return $eredmeny;
			
		}
		public function query2($P) 
		{
			$id=$this ->connect(); 
			$e=mysql_query($P);					
			
			mysql_close($id);
			return $e;
		}
		
		
		public function close($P){
			msql_close($P);
		}
	
	}
?>






