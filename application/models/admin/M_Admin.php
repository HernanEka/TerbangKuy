<?php

Class M_Admin extends CI_Model{
   public function get_count_table($table){
       return $this->db->count_all($table);
   }
}