<?php

class LoginModel extends CI_Model{

    public function insert_data($data){

        $this->db->insert('users',$data);
    }
}

?>