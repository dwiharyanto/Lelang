<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}


	public function index()
	{
		$this->load->view('Auth/login_bidder');
	}

	public function loginpenjual()
	{
		$this->load->view('Auth/login_penjual');
	}

	public function loginadmin()
	{
		$this->load->view('Auth/login_admin');
	}

	public function logadmin()
	{
		$username = $this->input->post('username');
		$pw = $this->input->post('pw');
			$admin = $this->db->get_where('tadmin', ['username' => $username])->row_array();
	 		// jika usernya ada
			if ($admin) {
				// cek password
				if (password_verify($pw, $admin['pw'])) {
					$data = [
						'idadmin' => $admin['idadmin'],
						'namaadmin' => $admin['namaadmin'],
					];
					$this->session->set_userdata($data);
					redirect('Admin');
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Wrong password</div>');
					redirect('Auth/loginadmin');
				}
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Username is not registered</div>');
				redirect('Auth/loginadmin');
				
			}
	}

	public function login()
	{
		$status = $this->input->post('status');
		$username = $this->input->post('username');
		$pw = $this->input->post('pw');
		if ($status == '0'){
			$penjual = $this->db->get_where('tpenjual', ['username' => $username])->row_array();
	 		// jika usernya ada
			if ($penjual) {
				// cek password
				if (password_verify($pw, $penjual['pw'])) {
					$data = [
						'idpenjual' => $penjual['idpenjual'],
						'namapenjual' => $penjual['namapenjual'],
						'fotoprofil' => $penjual['fotopenjual']
					];
					$this->session->set_userdata($data);
					redirect('Penjual/mainpenjual');
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Wrong password</div>');
					redirect('Auth/loginpenjual');
				}
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Username is not registered</div>');
				redirect('Auth/loginpenjual');
				
			}
		}else if ($status == '1'){ ////hapus///
			$bidder = $this->db->get_where('tbidder', ['username' => $username])->row_array();
	 		// jika usernya ada
			if ($bidder) {
				// cek password
				if (password_verify($pw, $bidder['pw'])) {
					$data = [
						'idbidder' => $bidder['idbidder'],
						'namabidder' => $bidder['namabidder'],
						'fotoprofil' => $bidder['fotoprofil']
					];
					$this->session->set_userdata($data);
					redirect('Bidder/mainbidder');
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Wrong password</div>');
					redirect('Auth');
				}
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Username is not registered</div>');
				redirect('Auth');
				
			}
		}
		
	}
	
	public function logout()
	{
		$this->session->unset_userdata('username');
        // $this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('Auth');
	}

	public function logoutadmin()
	{
		$this->session->unset_userdata('username');
        // $this->session->unset_userdata('role_id');
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
		redirect('Auth/loginadmin');
	}


	public function registerpenjual()
	{
		$this->form_validation->set_rules('namapenjual', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tpenjual.email]', [
			'is_unique' => 'This email has already registered!'
		]);
		$this->form_validation->set_rules('telp', 'No Telp', 'required|regex_match[/^[0-9]{12}$/]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim|min_length[15] ');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[5]|max_length[25]|is_unique[tpenjual.username]', [
			'is_unique' => 'This Username has already registered!'
		]);
		$this->form_validation->set_rules('pw', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[pw]', [  'matches' => 'Password dont match!',
	]);

		if ($this->form_validation->run() == false) {
			$this->load->view('Auth/register_penjual');
		} else {
			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'pw' => password_hash($this->input->post('pw', true), PASSWORD_DEFAULT),
				'namapenjual' => htmlspecialchars($this->input->post('namapenjual', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'telp' => htmlspecialchars($this->input->post('telp', true)),
				'status' => 0,
				'fotopenjual' => 'default.jpg'
			];

			$this->db->insert('tpenjual', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created.</div>');
			redirect('Auth/loginpenjual');
		}	
	}

	public function registerbidder()
	{
		$this->form_validation->set_rules('namabidder', 'Nama Lengkap', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tpenjual.email]', [
			'is_unique' => 'This email has already registered!'
		]);
		$this->form_validation->set_rules('telp', 'No Telp', 'required|regex_match[/^[0-9]{12}$/]');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required|trim|min_length[15] ');
		$this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[5]|max_length[25]|is_unique[tpenjual.username]', [
			'is_unique' => 'This Username has already registered!'
		]);
		$this->form_validation->set_rules('pw', 'Password', 'required|trim|min_length[8]|matches[password2]', [
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[pw]', [  'matches' => 'Password dont match!',
	]);

		if ($this->form_validation->run() == false) {
			$this->load->view('Auth/register_bidder');
		} else {
			$data = [
				'username' => htmlspecialchars($this->input->post('username', true)),
				'pw' => password_hash($this->input->post('pw', true), PASSWORD_DEFAULT),
				'namabidder' => htmlspecialchars($this->input->post('namabidder', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'telp' => htmlspecialchars($this->input->post('telp', true)),
				'status' => 1,
				'saldo' => 8


			];

			$this->db->insert('tbidder', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created.</div>');
			redirect('Auth');
		}	
	}




}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */