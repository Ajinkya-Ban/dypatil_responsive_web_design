<?php

    class EditUser extends CI_Controller{

        public function edit($id) {
            $this->load->model('LoginModel');
            $data['users'] = $this->LoginModel->getUserById($id);
            $this->load->view('editUser', $data);
        }

        public function update($id) {
            $data = [
                'name' => $this->input->post('name'),
                'city' => $this->input->post('city')
            ];
            $this->load->model('LoginModel');
            $this->LoginModel->updateUser($id, $data);
            redirect('UserListController/getUserList');

        }
        public function delete($id) {
            $this->load->model('LoginModel');
            $this->LoginModel->deleteUser($id);
            redirect('UserListController/getUserList');
        }
    }

?>