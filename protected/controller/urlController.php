<?php 

class urlController {
	
	public function readURL() {
		if (!array_key_exists('d', $_GET))
		{
			return 0;
        }
		return $_GET['d'];
	}
}

?>