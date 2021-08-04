<?php

class Userrole extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UserModel', 'user');
        
    }
    public function index() {
        //check if the user is already logged in 
        $user_list = $this->user->userListing(0, 10);

        $logged_in = $this->session->userdata('logged_in');
        $is_admin = $this->session->userdata('is_admin');

        $payload["userList"] = json_encode($user_list);
        $payload["isLogined"] = $logged_in;
        $payload["isAdmin"] = $is_admin;

        $this->load->view('header');
        $this->load->view('userrole', $payload);
        $this->load->view('footer');
    }

    public function getUserListAjax() {
        $from = $this->input->post("from");
        $count = $this->input->post("count");
        $user_list = $this->user->userListing($from, $count);
        echo json_encode($user_list);
    }

    public function changeRole() {
        $user_id = $this->input->post("userId");
        $this->user->changeRole($user_id);
    }
}
