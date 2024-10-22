<?php

class LoginModel extends CI_Model{

    public function insert_data($data){

        $this->db->insert('users',$data);
    }
    public function getAllUsers() {
        return $this->db->get('users')->result();
    }
    public function updateUser($id, $data) {
        return $this->db->where('uid', $id)->update('users', $data);
    }
    public function getUserById($id) {
        return $this->db->where('uid', $id)->get('users')->row();
    }
    public function deleteUser($id) {
        return $this->db->where('uid', $id)->delete('users');
    }
}

?>