<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Class controller untuk check bidding max 3 kali untuk 1 produk
class Bid_iteration extends CI_Controller 
{

	public function __construct()
	    {
	        parent::__construct();

	        // memanggil model "Bid_model.php"
	        $this->load->model("Bid_model");
	        $this->load->library('form_validation');
    		$this->load->helper('form');

	    }

	// fungsi check jumlah bid berdasarkan idlelang
	public function check($id)

		{	
			// ambil idbidder 
			$idbidder = $this->session->userdata('idbidder');
			
			// mengambil data jumlah bid yang telah dilakukan berdasarkan idlelang dan idbidder
			$data = $this->Bid_model->getIteration($id, $idbidder);

			// jika sudah nge-bid sebanyak 3 kali
			if ($data->jumlah >= 3){
								$this->session->set_flashdata('message', 'Jatah bid maksimal 3 kali untuk 1 produk');
								
								// alihkan ke halaman bid_view.php
								redirect('bidder/mainbidder');
			}

			//jika bid kurang dari 3
			else 
			{	
				// alihkan ke halaman bid_add.php
				redirect('bidder/detailbid/'.$id);
			}

		}
}
