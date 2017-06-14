<?php 
/**
* 
*/
include_once 'Model.php';
class Kategori extends Model
{
	public $id_kategori;
	public $nama_kategori;
	
	public function getDaftarKategori()
	{
		$query = $this->db->prepare("SELECT * FROM kategori");
    		$query->execute();
    		$data = $query->fetchAll();
    		return $data;
	}
}
?>