<?php 
include 'View.php';
include 'model/Berita.php';
/**
* 
*/
class BlogHomee extends View
{
	

	public function tampilPost()
	{
		include_once 'model/Berita.php';
        $brt = new Berita();
        $isi_berita = $brt->ambilBerita();		

		include_once 'pages/bloghome.php';
		$this->end();
	}
}

 ?>