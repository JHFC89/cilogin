<?php 
    class Login extends CI_Controller{

        // load login page
        public function view(){
            $this->load->view('login');
        }

        //validation
        public function validation(){

            $this->load->model('login_model');
            $query = $this->login_model->validation_data(); // load validation_data which contains users data for validation

            $username = $this->input->post('username'); //load the data inside the form in the login page with name 'username'
            $password = $this->input->post('password'); //load the data inside the form in the login page with name 'password'

            if($username == $query[0]['username'] && $password == $query[0]['password']){ //check if the inserted username and password matches the data from the model

                $data['username'] = $username;
                $data['password'] = $password;
                $data['username_validation'] = $query[0]['username'];
    
                $this->load->view('logged', $data);
            } else{
                
            redirect('login');
            
            }

        // this code only works if theres only one user in the database, because it checks only the index[0] (line 18) of the $query, which contains only the data of the first user from the database    
        }
    }
    
?>