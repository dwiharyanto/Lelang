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

	public function mainpenjual()
	{
		$data['penjual'] = $this->db->get_where('tpenjual', ['idpenjual' => 
			$this->session->userdata('idpenjual')])->row_array();
		$this->load->view('Penjual/main_penjual', $data);
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
		$idpenjual=$this->session->userdata('idpenjual');
		$this->load->model('Penjual_model');
		$data['penjual'] = $this->Penjual_model->getAllBarang($idpenjual);
		$this->load->view('Penjual/post_produk', $data);
	}
	
	public function addbarang(){
        $namabrg=$this->input->post('namabrg');
        $ob=$this->input->post('ob');
        $inc=$this->input->post('inc');
        $waktu=date('Y/m/d');
        $waktu_akhir=$this->input->post('waktu_akhir');
        $idkategori=$this->input->post('idkategori');
        $deskripsi=$this->input->post('deskripsi');
        $idpenjual=$this->session->userdata('idpenjual');
 		if($this->Penjual_model->produkupload()){
 			  $foto1= $this->upload->data('file_name');
 			  $this->Penjual_model->add_barang($idpenjual,$namabrg,$deskripsi,$ob,$inc,$waktu,$waktu_akhir,$idkategori,$foto1);
        redirect('Penjual/postproduk');

 		}
      else {
      	echo "Gagal Upload Foto Produk";
      }
    }


	public function detailpost()
	{
		$idlelang=$this->uri->segment(3);
		$this->load->model('Penjual_model');
		$data['detailpost'] = $this->Penjual_model->getAllDetailpost($idlelang);
		$this->load->view('Penjual/detail_post', $data);
	}

	public function hapuspost()
	{
		$idlelang=$this->uri->segment(3);
		 $this->Penjual_model->hapuspost($idlelang);
		 $this->session->set_flashdata('hapuspost', 'Anda Berhasil Menghapus Data Produk');
	 	redirect('Penjual/postproduk');
	}



	public function pesan()
	{
		$this->session->set_flashdata('pesan', 'Tidak Ada History Pesan');
		$idpenjual=$this->session->userdata('idpenjual');
		$data['pesan'] =$this->Penjual_model->pesan($idpenjual);
		$this->load->view('Penjual/pesan_penjual',$data);

	}

	public function detailpesan()
	{
		$idlelang = $this->uri->segment(3);
		$data['detailpesan'] =$this->Penjual_model->detailpesan($idlelang);
		$this->load->view('Penjual/detail_pesan', $data);
	}
////////////////////////////////////////////////////////////////////////






////////////////////////////////////////////
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
			$this->db->query('update tpenjual set fotopenjual="'.$foto.'" where idpenjual="'.$idpenjual.'"'); 
			$this->session->set_userdata('fotoprofil', $foto);
			redirect(base_url(). 'Penjual');
		}
	}

}

/* End of file penjual.php */
/* Location: ./application/controllers/penjual.php */