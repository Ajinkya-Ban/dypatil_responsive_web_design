<?php
class Login extends CI_Controller{

    public function login(){
        $this->load->view('login');
    }

    public function insert_data()
    {
       $data['name'] = $this->input->post('name');
       $data['city'] = $this->input->post('city');
       $this->load->model('LoginModel');
       $this->LoginModel->insert_data($data);

       redirect('Login/login');

    }
}

?>