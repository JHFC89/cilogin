<?php 
    class Login_model extends CI_Model{

        public function __construct(){
            $this->load->database();
        }

        public function validation_data(){

        $this->db->select('username, password'); // select those fields of the database
        $query = $this->db->get('users'); // load the fields above from the table 'users' into this variable
        return $query->result_array(); // return the fields as an array with assossiative arrays that contains: 'username' => data, 'password' => data; this will be loaded in a variable by the controller

        }
    }

?>