<?php 

class Admin_model extends CI_Model {  

function ambil_jml_penjual(){
    $query = $this->db->get('tpenjual');
    $total = $query->num_rows();

    return $total;
  }
function ambil_jml_bidder(){
    $query = $this->db->get('tbidder');
    $total = $query->num_rows();

    return $total;
  }
function ambil_jml_lelang(){
    $query = $this->db->get('tlelang');
    $total = $query->num_rows();

    return $total;
  }
function ambil_jml_saldo(){
    $query = $this->db->get('tsaldo');
    $total = $query->num_rows();

    return $total;
  }




	
	public function getAllPenjual(){
	return $this->db->get('tpenjual');
	}

	public function hapus_penjual($idpenjual){
        $this->db->where('idpenjual', $idpenjual);
        $this->db->delete('tpenjual');
      }
//////////////////////////////////////////////////
      public function getAllBidder(){
      	return $this->db->get('tbidder');
      }

	public function hapus_bidder($idbidder){
        $this->db->where('idbidder', $idbidder);
        $this->db->delete('tbidder');
      }
	////////////////////////////////////////////////
	public function getAllBarang(){
      	return $this->db->get('tlelang');
      }

	public function hapus_barang($idlelang){
        $this->db->where('idlelang', $idlelang);
        $this->db->delete('tlelang');
      }
//////////////////////////////////////////////////////////
  public function getAllSaldo(){
        return $this->db->query('SELECT s.*,b.namabidder,b.saldo FROM tsaldo s, tbidder b WHERE s.status= "Belum Terkonfirmasi" AND s.idbidder= b.idbidder ');
      }
  public function tambah_saldo($idsaldo){
        $this->db->where('idlelang', $idlelang);
        $this->db->delete('tlelang');
      }

    public function belisaldo($bidder){
        $this->db->insert('tsaldo', $bidder);
    }
    public function delete_saldo($idsaldo){
        $hasil=$this->db->query("DELETE FROM tsaldo WHERE idsaldo='".$idsaldo."'");
        return $hasil;
    }





}





?>		