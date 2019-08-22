<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct() { 
         parent::__construct();
         $this->load->model('Admin_model');
     }

	public function index()
	{
		$data['admin'] = $this->db->get_where('tadmin', ['idadmin' => 
			$this->session->userdata('idadmin')])->row_array();
		$data['tpenjual'] = $this->Admin_model->ambil_jml_penjual();
		$data['tbidder'] = $this->Admin_model->ambil_jml_bidder();
		$data['tlelang'] = $this->Admin_model->ambil_jml_lelang();
		$data['tsaldo'] = $this->Admin_model->ambil_jml_saldo();
		$this->load->view('Admin/index_admin', $data);
	}
///////////////////////////////////////////////////////////////////////
	public function datapenjual()
	{
		$this->load->model('Admin_model');
		$data['penjual'] = $this->Admin_model->getAllPenjual();
		$this->load->view('Admin/data_penjual', $data);
	}

	 function hapus_penjual()
	{
		$idpenjual=$this->uri->segment(3);
		$this->Admin_model->hapus_penjual($idpenjual);
		$this->session->set_flashdata('hapuspenjual', 'Anda Berhasil Menghapus Data Penjual');
		redirect(base_url(). 'Admin/datapenjual');
	}
//////////////////////////////////////////////////////////////////
	public function databidder()
	{
		$this->load->model('Admin_model');
		$data['bidder'] = $this->Admin_model->getAllBidder();
		$this->load->view('Admin/data_bidder', $data);
	}
	function hapus_bidder()
	{
		$idbidder=$this->uri->segment(3);
		$this->Admin_model->hapus_bidder($idbidder);
		$this->session->set_flashdata('hapusbidder', 'Anda Berhasil Menghapus Data Bidder');
		redirect(base_url(). 'Admin/databidder');
	}
/////////////////////////////////////////////////////////////////
	public function databarang()
	{
		$this->load->model('Admin_model');
		$data['barang'] = $this->Admin_model->getAllBarang();
		$this->load->view('Admin/data_barang', $data);
	}
	function hapus_barang()
	{
		$idlelang=$this->uri->segment(3);
		$this->Admin_model->hapus_barang($idlelang);
		$this->session->set_flashdata('hapusbarang', 'Anda Berhasil Menghapus Data Barang');
		redirect(base_url(). 'Admin/databarang');
	}
///////////////////////////////////////////////////////////
	public function datasaldo()
	{
		$this->load->model('Admin_model');
		$data['beli'] = $this->Admin_model->getAllSaldo();
		$this->load->view('Admin/data_saldo', $data);
	}
	function tambah_saldo()
	{
		$idsaldo=$this->uri->segment(3);
		$this->Admin_model->tambah_saldo($idsaldo);
		redirect(base_url(). 'Admin/datasaldo');
	}
	function konfirmasi_saldo()
	{
		$idsaldo = $this->uri->segment('3');
		$data['saldo'] = $this->db->query('SELECT * from tsaldo where idsaldo='.$idsaldo);
		$idbidder = $data['saldo']->row()->idbidder;
		$data['bidder'] = $this->db->query('SELECT * from tbidder where idbidder='.$idbidder);
		$saldo = $data['saldo']->row()->beli + $data['bidder']->row()->saldo;
		$this->db->query('update tbidder set saldo = "'.$saldo.'" where idbidder="'.$idbidder.'"');
		$this->db->query('update tsaldo set status = "Terkonfirmasi" where idsaldo="'.$idsaldo.'"');
		redirect(base_url().'Admin/datasaldo');
	}

	function delete_saldo()
	{
        $idsaldo=$this->uri->segment(3);
        $this->Admin_model->delete_saldo($idsaldo);
        $this->session->set_flashdata('deletesaldo', 'Anda Berhasil Menghapus Data Saldo');
        redirect('Admin/datasaldo');
	}
/////////////////////////////////////////////////////////////////////////////
	
		function belisaldo()
	{
		$saldo=$this->input->post('saldo');
		$idbidder = $this->input->post('idbidder');
		//upload photo
		$config['upload_path'] = "./upload/product/";
		$config['allowed_types'] = "*";

        // $this->upload->initialize($config);
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('fototransfer')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data = array('upload_data' => $this->upload->data());
			$foto = $this->upload->data('file_name'); 
		$bidder=array(
			'idbidder' => $idbidder,
			'beli'=>$saldo,
			'fototransfer' => $foto,
			'status' => "Belum Terkonfirmasi"
			);
		//simpan data 
		$this->Admin_model->belisaldo($bidder, $idbidder);
		redirect('Main');
		}

	}

/////////////////////////////////////////////////////


}
