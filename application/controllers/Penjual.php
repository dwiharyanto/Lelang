<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller {
		function __construct() { 
        parent::__construct();
        $this->load->model('Penjual_model');
     }



	public function index()
	{
		$data['penjual'] = $this->db->get_where('tpenjual', ['idpenjual' => 
			$this->session->userdata('idpenjual')])->row_array();
		$this->load->view('Penjual/index_penjual', $data);
	}

	public function editprofil(){
		
		$data = array(
			'username' => $this->input->post('username'),
			'pw' => $this->input->post('pw'),
			'namapenjual' => $this->input->post('namapenjual'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'telp' => $this->input->post('telp')
		);
		$idpenjual = $this->input->post('idpenjual');

		$this->db->set($data);
		$this->db->where('idpenjual', $idpenjual);
		$this->db->update('tpenjual');
		$this->session->set_userdata('namapenjual', $data['namapenjual']);
		redirect(base_url() . 'Penjual');
	}






	public function postproduk()
	{
		$this->load->model('Penjual_model');
		$data['penjual'] = $this->Penjual_model->getAllBarang();
		$this->load->view('Penjual/post_produk', $data);
	}
	
	public function add_barang(){
        $namabrg=$this->input->post('namabrg');
        $ob=$this->input->post('ob');
        $inc=$this->input->post('inc');
        $waktu=$this->input->post('waktu_awal');
        $kategori=$this->input->post('kategori');
   //      $foto1=$this->input->post('foto1');
 		// $foto2=$this->input->post('foto2');
 		// $foto3=$this->input->post('foto3');
 		// $foto4=$this->input->post('foto4');
        $this->Penjual_model->add_barang($namabrg,$ob,$inc,$waktu,$kategori,$deskripsi);
        redirect('Penjual/postproduk');
    }


	public function pesan()
	{
		$this->load->view('Penjual/post_produk', $data);
	}









	public function logout()
	{
		$this->session->unset_userdata('username');
        // $this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('auth');
	}

	public function doupload()
	{
		$config['upload_path'] = "./assets/foto/";
		$config['allowed_types'] = "*";

        // $this->upload->initialize($config);
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('userfile')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data = array('upload_data' => $this->upload->data());
			$foto = $this->upload->data('file_name'); 
			$idpenjual = $this->session->userdata('idpenjual');
			$this->db->query('update tpenjual set fotoprofil="'.$foto.'" where idpenjual="'.$idpenjual.'"'); 
			$this->session->set_userdata('fotoprofil', $foto);
			redirect(base_url(). 'Penjual');
		}
	}

}

/* End of file penjual.php */
/* Location: ./application/controllers/penjual.php */