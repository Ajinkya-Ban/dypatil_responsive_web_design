<?php
class UserListController extends CI_Controller{

    public function getUserList()
    {
        $this->load->model('LoginModel');
        $data['users'] = $this->LoginModel->getAllUsers();
        $this->load->view('user_list', $data);
        
    }
}
?>