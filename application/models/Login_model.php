<?php 
    class Login_model extends CI_Model{

        public function __construct(){
            $this->load->database();
        }

        public function validation_data($username){

        $query = $this->db->get_where('users', array('username' => $username)); //search on the db for the 'username' sent by the Login/validation()
        return $query->row_array(); // return the fields as an array with assossiative arrays that contains: 'username' => data, 'password' => data; this will be loaded in a variable by the controller
        }
    }

?>