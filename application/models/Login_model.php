<?php 
    class Login_model extends CI_Model{

        public function __construct(){
            $this->load->database();
        }

        public function validation_data(){

        $this->db->select('username, password');
        $query = $this->db->get('users');
        return $query->result_array();

        }
    }

?>