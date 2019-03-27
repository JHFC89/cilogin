<?php 
    class Login extends CI_Controller{

        // load login page
        public function view(){
            $this->load->view('login');
        }

        //form validation
        public function form_validation(){
            $this->form_validation->set_rules('username', 'Username', 'required', array('required' => 'O campo {field} é obrigatório.'));
            $this->form_validation->set_rules('password', 'Password', 'required', array('required' =>'O campo {field} é obrigatório.'));

            if ($this->form_validation->run() == FALSE){
                $this->load->view('login'); //send back to login.php if form validation fail
            } else{
                $this->validation(); //call Login/validation() if form validation successed
            }
        }

        //user and password validation
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
        }
    }
    
?>