<?php 
    class Login extends CI_Controller{

        // load login page
        public function view(){
            $this->load->view('login');
        }

        //validation
        public function validation(){
            $this->load->model('login_model');

            $username = $this->input->post('username'); //load the data inside the form in the login page with name 'username'
            $password = $this->input->post('password'); //load the data inside the form in the login page with name 'password'

            $query = $this->login_model->validation_data($username); //load the model with the username parameter to be get from the db 

            if($password == $query['password'] && $password !=''){ //check if a password was inserted and if the inserted password matches the data from the model 
                $data['username'] = $username;
                $data['password'] = $password;
                $data['username_validation'] = $query['username'];
    
                $this->load->view('logged', $data);

            } else{
            redirect('login');
            
            }

        // this code only works if theres only one user in the database, because it checks only the index[0] (line 18) of the $query, which contains only the data of the first user from the database    
        }
    }
    
?>