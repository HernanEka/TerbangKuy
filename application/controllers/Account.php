<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller
{
	
	 public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Account');
	}

	public function index()
	{
		$this->load->view('V_Home');
	}

	public function login()
	{
		if ($this->session->userdata('user') == true) {
			redirect(base_url());
		}

		$this->load->view('template/V_Header');
		$this->load->view('v_login');
		$this->load->view('template/V_Footer');
	}

	public function login_process()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user_data = $this->M_Account->get_password($username);

		if (count($user_data) == 0) {
			redirect(base_url() . 'Account/login?alert=failed');
		}

		$password_get = $user_data[0]['password'];
		$user_id = $user_data[0]['id'];

		if (password_verify($password, $password_get) == true) {
			$value = [
				'username' => $username,
				'id' => $user_id,
			];

			$this->session->set_userdata('user', $value);

			if ($this->input->post('url_before') !== '') {

			if ($this->session->userdata($this->input->post('url_before'))) {
				redirect($this->session->userdata($this->input->post('url_before')));
			}

			else{
				redirect(base_url());
			}
		}
		else{
			redirect(base_url());
		}

		}
		else{
			redirect(base_url() . 'Account/login?alert=failed');
		}
	}

	public function signup()
	{
		$this->load->view('template/V_Header');
		$this->load->view('v_signup');
		$this->load->view('template/V_Footer');
	}

	public function signup_process($value='')
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$password = password_hash($password, PASSWORD_DEFAULT);

		$data = [
			'username' => $username,
			'password' => $password,
			'level_id' => 1,
		];

		if ($this->M_Account->signup_insert($data) == true) {
			redirect(base_url() . 'Account/login?alert=success');
		}
		else{
			redirect(base_url() . 'Account/signup?alert=failed');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user');
		redirect(base_url());
	}
}