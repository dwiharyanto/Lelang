<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Model untuk memproses dari bidding
Class Bid_model extends CI_Model
{

	// mengambil seluruh data di tabel tlelang
	public function view()
		{   
			
			return $this->db->get('tlelang')->result();
		}


	// mengambil  data di tabel tbidder berdasarkan idbidder
    public function get($idbidder)
	    {	
	        $this->db->where('idbidder', $idbidder);
	        $result = $this->db->get('tbidder')->row(); 

	        return $result;
	    }


	// mengambil jumlah bidding max 3 kali 
	public function getIteration($id, $idbidder)
	    {	
 		   	$this->db->select('count(idlelang) as jumlah');
	        return $this->db->get_where("bid", ["idlelang" => $id, "idbidder" => $idbidder ])->row();
	    }

	// menyimpan data bidding baru di tabel bid
	public function saveBid($data)
		{	
			$this->db->insert('bid', $data); 
		}

	// mengurangi saldo -3 setiap kali klik bid
	public function minSaldo($id,$data)
		{	
			$this->db->where('idbidder', $id);
			$this->db->update('tbidder', $data); 
		}

	// menyimpan nominal bidding pada kolom current (crt)
	public function update($id,$data)
		{
			$this->db->where('idlelang', $id);
			$this->db->update('tlelang', $data); 
		}

	// menampilkan data pada tabel tlelang berdasarkan idlelang
	public function getRow($id)
	    {	
	        return $this->db->get_where("tlelang", ["idlelang" => $id])->row();
	    }

}

