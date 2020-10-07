<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class A_Reservation extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/M_Reservation_Admin');
	}

	public function index()
	{	
		if($this->session->userdata('user_admin') == false){
			redirect(base_url() . 'admin/account/signin');                            
		}

		$reservation = $this->M_Reservation_Admin->get_reservation();
		$data['reservation'] = $reservation;
		$data['nav'] = 'reservation';
		// var_dump($data);
		// die;
		$this->load->view('admin/template/A_Header',$data);
		$this->load->view('admin/A_Reservation',$data);
		$this->load->view('admin/template/A_Footer',$data);
	}
	public function viewedit($id = null){
		if($this->session->userdata('user_admin') == false){
			redirect(base_url() . 'admin/account/signin');                            
		}

		if($id == null){
			redirect(base_url().'admin/reservation');
		}

		$data['reservation'] = $this->M_Reservation_Admin->get_reservation_id($id);

		$this->load->view('admin/V_Reservation_Viewedit',$data);
		
	}

	public function update(){
		if($this->session->userdata('user_admin') == false){
			redirect(base_url() . 'admin/account/signin');                            
		}

		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$this->M_Reservation_Admin->update($status,$id);
		redirect(base_url().'admin/reservation');
	}

	public function delete($id = null){
		if($this->session->userdata('user_admin') == false){
			redirect(base_url() . 'admin/account/signin');                            
		}

		if($id == null){
			redirect(base_url().'admin/A_reservation');
		}
		$this->M_Reservation_Admin->delete($id);	
		redirect(base_url().'admin/A_reservation');			
	}
}
