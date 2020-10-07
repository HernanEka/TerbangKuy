<?php

Class M_Account_Admin extends CI_Model{
    public function get_password_users($username){
        $this->db->where('username', $username);
        $this->db->limit(1);
        return $this->db->get("user")->result_array();
    }
}