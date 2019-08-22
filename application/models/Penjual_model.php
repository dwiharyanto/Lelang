<?php 

class Penjual_model extends CI_Model {  

	public function getAllBarang(){
	return $this->db->query('SELECT l.*,k.* FROM tlelang l,tkategori k WHERE k.idkategori=l.idkategori');
	}

	public function add_barang($namabrg,$ob,$inc,$waktu_awal,$kategori){
        $hasil=$this->db->query("INSERT INTO tlelang (namabrg,ob,inc,waktu_awal,kategori) VALUES ('$namabrg','$ob','$inc','$waktu_awal','$kategori')");
        return $hasil;
    }





}
