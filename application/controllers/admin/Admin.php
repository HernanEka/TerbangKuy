<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Admin extends CI_Controller{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_Admin');
	}

	public function index()
	{
		if ($this->session->userdata('user_admin') == false) {
			redirect(base_url() . 'admin/A_Account/login');
		}

		$data['reservation'] = $this->M_Admin->get_count_table('reservation');
		$data['customer'] = $this->M_Admin->get_count_table('customer');
		$data['rute'] = $this->M_Admin->get_count_table('rute');
		$data['transportation'] = $this->M_Admin->get_count_table('transportation');
		$data['user'] = $this->M_Admin->get_count_table('user');


		$data['nav'] = 'dashboard';
		$this->load->view('admin/template/A_Header',$data);
		$this->load->view('admin/A_Home',$data);

		$data['script'] = '';
		$this->load->view('admin/template/A_Footer',$data);
	}
}