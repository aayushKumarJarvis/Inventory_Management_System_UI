<?php if(!defined('BASEPATH')) exit("No direct script access allowed");

class User extends CI_Controller {

    private $header_data = array();
    private $body_data = array();
    private $footer_data = array();

    public function __construct() {

        parent::__construct();

        $this->header_data['title'] = "Sign Up - Inventory Management System";
        $this->header_data['css_link'] = array("");
        $this->footer_data['js'] = "";
        $this->footer_data['js_link'][] = "";

        $this->load->model('model_user');
    }

    public function login() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $result = $this->model_user->login($username,$password);

        if($result)
            $this->load_view('profile');
        else
            $this->load_view('wrong_details');
    }

    public function load_view($view) {

        $this->load->view('/templates/header',$this->header_data);
        $this->load->view($view, $this->body_data);
        $this->load->view('/templates/footer',$this->footer_data);
    }
}