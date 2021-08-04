<?php

class LoginModel extends CI_Model {

    public function checkLogin($email, $password) {
        //query the table 'users' and get the result count
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('users');

        return $query->num_rows();
    }

    public function checkAdmin($email) {
        $this->db->where('email', $email);
        $this->db->where('role', "Admin");
        $query = $this->db->get('users');
        return $query->num_rows();
    }
}
