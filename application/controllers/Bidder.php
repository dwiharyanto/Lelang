<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidder extends CI_Controller {
		function __construct() { 
        parent::__construct();
     }



	public function index()
	{
		$data['bidder'] = $this->db->get_where('tbidder', ['idbidder' => 
			$this->session->userdata('idbidder')])->row_array();
		$this->load->view('Bidder/index_bidder', $data);
	}

	public function editprofil(){
		
		$data = array(
			'username' => $this->input->post('username'),
			'pw' => $this->input->post('pw'),
			'namabidder' => $this->input->post('namabidder'),
			'alamat' => $this->input->post('alamat'),
			'email' => $this->input->post('email'),
			'telp' => $this->input->post('telp')
		);
		$idbidder = $this->input->post('idbidder');

		$this->db->set($data);
		$this->db->where('idbidder', $idbidder);
		$this->db->update('tbidder');
		$this->session->set_userdata('namabidder', $data['namabidder']);
		redirect(base_url() . 'Bidder');
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
			$idbidder = $this->session->userdata('idbidder');
			$this->db->query('update tbidder set fotoprofil="'.$foto.'" where idbidder="'.$idbidder.'"'); 
			$this->session->set_userdata('fotoprofil', $foto);
			redirect(base_url(). 'Bidder');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
        // $this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('auth');
	}

}