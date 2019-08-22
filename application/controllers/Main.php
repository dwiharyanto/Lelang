<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
				$data['bidder'] = $this->db->get_where('tbidder', ['idbidder' => 
			$this->session->userdata('idbidder')])->row_array();
		$this->load->view('Main/main_bidder', $data);
	}
}