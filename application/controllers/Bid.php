<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Class controller untuk memproses logika bidding
class Bid extends CI_Controller 
{

	public function __construct()
	    {
	        parent::__construct();

	        // memanggil model "Bid_model.php"
	        $this->load->model("Bid_model");
	        $this->load->library('form_validation');
    		$this->load->helper('form');

	    }

	// fungsi menghubungkan bid_model dengan bid_view
	public function index()
		{

			// Menampung seluruh data tabel tlelang ke dalam object 'list_lelang'
			$data['list_lelang'] = $this->Bid_model->View();

			// Menampilkan array $data ke dalam view dari "bid_view.php"
			$this->load->view("bid/bid_view", $data);
		}


	// fungsi memproses logika bidding 
	public function add($id)

		{

			// mengambil data tabel tlelang berdasarkan $id
			$data['default'] = $this->Bid_model->getRow($id);

			// mengambil data bidder berdasarkan id
        	$user = $this->Bid_model->get($this->session->userdata('idbidder')); 

			// validasi form inputan
			$this->form_validation->set_rules('crt_update', 'Bidding Amount', 'required|callback_crt_min|callback_crt_max|callback_crt_step', 
				array('required'=>'Bidding Amount required'));
			
			// jika inputan tidak sesuai ketentuan
			if ($this->form_validation->run() == FALSE)
	        {
				// Menampilkan view dari file "bid_edit.php"
				$this->load->view("bid/bid_add",$data);
	        }

	        // jika inputan sesuai ketentuan
	        else{ 
						// mengambil idlelang
						$id = $this->input->post('idlelang');
						
						// Simpan data current (crt) ke dalam array $edit
						$edit = array(
								"crt" => $this->input->post('crt_new')
						);

						// Simpan data bidding ke dalam array $edit2
						$edit2 = array(
								"idlelang" => $this->input->post('idlelang'),
								"idbidder" => $this->session->userdata('idbidder'),
								"tawaran" => $this->input->post('crt_new'),
								"waktu" => date("Y-m-d h:i:sa")
						);

						// saldo dikurang 3
						$saldo = $user->saldo-3;

						// Simpan saldo ke array $edit3
						$edit3 = array(
								"saldo" => $saldo
						);
					

				//proses update data tabel tlelang dengan data edit berdasarkan idlelang
				$this->Bid_model->update($id,$edit);

				//proses insert data bidding dengan array edit2
				$this->Bid_model->saveBid($edit2);

				//proses update data saldo dengan array edit3 berdasarkan 
				$this->Bid_model->minSaldo($user->idbidder,$edit3);

				// Buat session flashdata pesan sukses
            	$this->session->set_flashdata('success', 'Bidding dengan nominal '.$this->input->post('crt_new').' berhasil diajukan'); 

				// alihkan ke halaman view dari file "bid_view.php"
				redirect("bid");
			}

		}

	//callback untuk verifikasi bidding > OB+inc | bidding > Crt + inc
	public function crt_min()
        {		

        	$crt = $this->input->post('crt_update');
			$ob = $this->input->post('ob_update');
			$inc = $this->input->post('inc_update');
			$crt_new = $this->input->post('crt_new');
			$totalOB = $ob + $inc;
			$totalCRT = $crt + $inc;

	        		if ($crt ==0){
		        			if ($crt_new < $totalOB)
				                {
				                        $this->form_validation->set_message('crt_min', 'Bidding harus sama dengan atau lebih besar dari Next Minimum Bidding');
				                        return FALSE;
				                }
				                else
				                {
				                        return TRUE;
				                }
		            }
		            else {
		        			if ($crt_new < $totalCRT)
				                {
				                        $this->form_validation->set_message('crt_min', 'Bidding harus sama dengan atau lebih besar dari Next Minimum Bidding');
				                        return FALSE;
				                }
				                else
				                {
				                        return TRUE;
				                }
		            }
                
        }

        //callback untuk verifikasi bidding tidak boleh melebihi saldo yang dimiliki
        public function crt_max()
        {			
        			$user = $this->Bid_model->get($this->session->userdata('idbidder')); 
        			$saldo = ($user->saldo);
		        			if ($saldo < 3)
				                {
				                        $this->form_validation->set_message('crt_max', 'Saldo anda tidak cukup. Silahkan isi saldo terlebih dahulu');
				                        return FALSE;
				                }
				                else
				                {
				                        return TRUE;
				                }       
        }

        //callback untuk verifikasi bidding harus kelipatan dari inc
		public function crt_step()
        {		

        	$crt = $this->input->post('crt_update');
			$ob = $this->input->post('ob_update');
			$inc = $this->input->post('inc_update');
			$crt_new = $this->input->post('crt_new');

	        		if ($crt ==0){
	        				$output = $crt_new-$ob; 
		        			if (($output % $inc)!=0)
				                {
				                        $this->form_validation->set_message('crt_step', 'Bidding harus kelipatan Inc');
				                        return FALSE;
				                }
				                else
				                {
				                        return TRUE;
				                }
		            }
		            else {
		            		$output = $crt_new-$crt; 
		        			if (($output % $inc)!=0)
				                {
				                        $this->form_validation->set_message('crt_step', 'Bidding harus kelipatan Inc');
				                        return FALSE;
				                }
				                else
				                {
				                        return TRUE;
				                }
		            }
                
        }

}
