<?php 

/**
* 
*/

include_once 'Model.php';
class Berita extends model
{
	
	public function ambilBerita()
	{
		$query = $this->db->prepare("SELECT * FROM berita");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}


 ?>