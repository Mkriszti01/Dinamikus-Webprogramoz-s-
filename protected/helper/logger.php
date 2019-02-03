<?php 
	define ("LOGFILE", "log/".date('Y-M-D-M').".log");
	class logger{
	
	
		public function log($Str) 		
		{
			if(!file_exists(LOGFILE)) 
			{
				if($f=fopen(LOGFILE,'w')) 
				{
					fprintf($f, "%s\n", date('Y-M-D').":".time()."log:".$Str);
				}
			}	
			else{
				if($f=fopen(LOGFILE,'at'))
				{
					fprintf($f, "%s\n", date('Y-M-D').":".time()." log:".$Str);
				}
			}
			fclose($f);
		}
		
		
	
	}



?>