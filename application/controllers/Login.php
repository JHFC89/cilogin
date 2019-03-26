<?php 
    class Login extends CI_Controller{

        public function view(){
            $this->load->view('login');
        }

        public function validation(){

            $this->load->model('login_model');
            $query = $this->login_model->validation_data();

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if($username == $query[0]['username'] && $password == $query[0]['password']){

                $data['username'] = $username;
                $data['password'] = $password;
                $data['username_validation'] = $query[0]['username'];
    
                $this->load->view('logged', $data);
            } else{
                
            redirect('login');
            
            }


        }
    }
    
?>