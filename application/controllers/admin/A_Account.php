<?php
defined('BASEPATH') or exit('No direct script access allowed');

class A_Account extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/M_Account_Admin');
    }

    public function index()
    {
        // $this->load->view('V_Home');
    }

    public function login()
    {
        if($this->session->userdata('user_admin')){
            redirect(base_url() . 'admin');                            
        }

        $this->load->view('admin/A_Login');
    }

    public function login_process()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');


        $user_data = $this->M_Account_Admin->get_password_users($username);

        if (count($user_data) == 0) {
            redirect(base_url() . 'admin/A_Account/login?alert=failed');
        }

        $password_get = $user_data[0]['password'];
        $user_id = $user_data[0]['id'];
        $user_level = $user_data[0]['level_id'];

        if (password_verify($password, $password_get) == true) {
            if ($user_level == 2) {
                $value = [
                    'username' => $username,
                    'id' => $id,
                ];

                $this->session->set_userdata('user_admin', $value);

                redirect(base_url() . 'admin');
            }
            else{
                redirect(base_url() . 'admin/A_Account/login?alert=failed');
            }
        }
        else{
            redirect(base_url() . 'admin/A_Account/login?alert=failed');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user_admin');
        redirect(base_url() . 'admin/A_Account/login');
    }
}