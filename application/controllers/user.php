<?php if(!defined('BASEPATH')) exit("No direct script access allowed");

class User extends CI_Controller {

    private $header_data = array();
    private $body_data = array();
    private $footer_data = array();

    public function __construct() {

        parent::__construct();

        $this->header_data['title'] = "Sign Up - Inventory Management System";
        $this->header_data['css_link'] = array("signup.css");
        $this->footer_data['js'] = "";
        $this->footer_data['js_link'][] = "";

        $this->load->model('model_user');
    }

    public function login() {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $sessionData = array(
          'username' => $username
        );

        $this->session->set_userdata($sessionData);

        $result = $this->model_user->login($username,$password);

        if($result) {
            $this->body_data['username'] = $this->session->userdata('username');
            $this->load_view('profile');
        }
        else {
            $this->body_data['message'] = "Either Username or Password is INCORRECT ! Please try again";
            $this->body_data['role'] = "danger";
            $this->load_view('details');
        }
    }

    public function registration() {

        $this->load_view('registration');
    }

    public function add_user() {

        $username = $this->input->post('username');
        $password = $this->input->password('password');

        $result = $this->model_user->addUser($username, $password);

        if($result == 0) {
            $this->body_data['message'] = "User Already Exists ! Please choose a different username";
            $this->body_data['role'] = 'info';
            $this->load_view('details');
        }
        else if($result == 1) {

            $this->body_data['message'] = "Congrats ! User is Registered";
            $this->body->data['role'] = 'success';
            $this->load_view('details');
        }
        else {

            $this->body_data['message'] = "There is some server error. Please try again";
            $this->body_data['role'] = "warning";
            $this->load_view('details');
        }
    }

    public function load_view($view) {

        $this->load->view('/templates/header',$this->header_data);
        $this->load->view($view, $this->body_data);
        $this->load->view('/templates/footer',$this->footer_data);
    }
}