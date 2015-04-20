<?php if(!defined('BASEPATH')) exit("No direct script access allowed");

class Sign_Up extends CI_Controller {

    private $header_data = array();
    private $body_data = array();
    private $footer_data = array();

    public function __construct() {

        parent::__construct();

        $this->header_data['title'] = "Sign Up - Inventory Management System";
        $this->header_data['css_link'] = "";
        $this->footer_data['js'] = "";
        $this->footer_data['js_link'][] = "";

    }

    public function index() {

        $this->load_view('sign_up');
    }

    public function load_view($view) {

        $this->load->view('/templates/header',$this->header_data);
        $this->load->view($view, $this->body_data);
        $this->load->view('/templates/footer',$this->footer_data);
    }


}