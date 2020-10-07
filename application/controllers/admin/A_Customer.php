<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_Customer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_Customer_Admin');
	}

	public function index()
	{	
		if($this->session->userdata('user_admin') == false){
			redirect(base_url() . 'admin/account/login');                            
		}

		$customer = $this->M_Customer_Admin->get_customer();
		$data['customer'] = $customer;
		$data['nav'] = 'customer';
		// var_dump($data);
		// die;
		$this->load->view('admin/template/A_Header',$data);
		$this->load->view('admin/A_Customer',$data);
		$this->load->view('admin/template/A_Footer',$data);
	}
	public function add(){

		if($this->session->userdata('user_admin') == false){
			redirect(base_url() . 'admin/A_account/login');                            
		}

		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$telepon = $this->input->post('telepon');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');

		$data = [
			'name' => $name,
			'address' => $address,
			'telepon' => $telepon,
			'email' => $email,
			'gender' => $gender  
		];

		$this->M_Customer_Admin->add($data);

		redirect(base_url().'admin/A_customer');
	}

	public function viewedit($id = null){
		if($this->session->userdata('user_admin') == false){
			redirect(base_url() . 'admin/A_account/login');                            
		}

		if($id == null){
			redirect(base_url().'admin/A_customer');
		}

		$data['customer'] = $this->M_Customer_Admin->get_customer_id($id);

		$this->load->view('admin/V_Customer_Viewedit',$data);
		
	}

	public function update(){
		if($this->session->userdata('user_admin') == false){
			redirect(base_url() . 'admin/account/login');                            
		}

		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$telepon = $this->input->post('telepon');
		$email = $this->input->post('email');
		$gender = $this->input->post('gender');

		$data = [
			'name' => $name,
			'address' => $address,
			'telepon' => $telepon,
			'email' => $email,
			'gender' => $gender  
		];

		$this->M_Customer_Admin->update($data,$id);
		redirect(base_url().'admin/A_customer');
	}

	public function delete($id = null){
		if($this->session->userdata('user_admin') == false){
			redirect(base_url() . 'admin/account/login');                            
		}

		if($id == null){
			redirect(base_url().'admin/A_customer');
		}
		$this->M_Customer_Admin->delete($id);	
		redirect(base_url().'admin/A_customer');			
	}
}

