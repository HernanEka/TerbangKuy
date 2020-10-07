<?php

Class M_User_Admin extends CI_Model{
    public function get_user(){
        $this->db->select('user.id,user.username,user.password,level.name');
        $this->db->from('user');
        $this->db->join('level','user.level_id=level.id');
        return $this->db->get()->result_array();
    }

    public function get_level(){
        return $this->db->get('level')->result_array();
    }
    public function get_user_id($id){
        $this->db->where(['id' => $id]);
        return $this->db->get('user')->row_array();
    }

    public function add($data){
        $this->db->insert('user',$data);
    }

    public function update($data,$id){
        $this->db->set($data);
        $this->db->where('id',$id);
        $this->db->update('user');
    }
    public function delete($id){
        $this->db->delete('user', ['id' => $id]);
    }

}