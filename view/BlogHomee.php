<?php 

require_once 'View.php';
/**
* 
*/
class BlogHomee extends View
{
	

	public function tampilPost()
	{
		include_once 'pages/bloghome.php';
		$this->end();
	}
}

 ?>