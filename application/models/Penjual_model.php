<?php 

class Penjual_model extends CI_Model {  

	public function getAllBarang($idpenjual){
	return $this->db->query('SELECT k.*,l.* FROM tkategori k,tlelang l WHERE k.idkategori=l.idkategori AND l.idpenjual="'.$idpenjual.'" ORDER BY idlelang DESC');
	}

	public function add_barang($idpenjual,$namabrg,$deskripsi,$ob,$inc,$waktu,$waktu_akhir,$idkategori,$foto1){
        $hasil=$this->db->query("INSERT INTO tlelang (idpenjual,namabrg,deskripsi,ob,inc,waktu,waktu_akhir,idkategori,foto1) VALUES ('$idpenjual', '$namabrg','$deskripsi','$ob','$inc','$waktu','$waktu_akhir','$idkategori','$foto1')");
        return $hasil;
    }

	public function getAllDetailpost($idlelang){
	return $this->db->query('SELECT b.*,d.*,l.* FROM tbidder b, bid d, tlelang l WHERE b.idbidder=d.idbidder AND l.idlelang="'.$idlelang.'" AND d.idlelang=l.idlelang ');
	}

	public function hapuspost($idlelang){
        $hasil=$this->db->query("DELETE FROM tlelang WHERE idlelang='".$idlelang."'");
        return $hasil;
    }

	public function pesan($idpenjual){
		return $this->db->query('SELECT b.*,d.*,l.* FROM tbidder b, diskusi_barang d, tlelang l WHERE l.idpenjual="'.$idpenjual.'" AND d.idlelang=l.idlelang AND b.idbidder=d.idbidder');
	}

	public function detailpesan($iddiskusi){
		return $this->db->query('SELECT b.*,d.*,l.*, p.*, e.* FROM tpenjual p, tbidder b, diskusi_barang d, tlelang l, tdetail e WHERE e.iddiskusi="'.$iddiskusi.'" AND d.iddiskusi=e.iddiskusi AND l.idlelang=d.idlelang AND b.idbidder=d.idbidder AND p.idpenjual = d.idpenjual ORDER BY tgldetail ASC');
	}


	public function produkupload()
	{
		$config['upload_path'] = "./assets/foto/";
		$config['allowed_types'] = "*";

        // $this->upload->initialize($config);
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('foto1')){
			$error = array('error' => $this->upload->display_errors());
			return false;
		}else{
			return true;
		}
	}

}
