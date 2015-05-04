<?php

class Complaint extends CI_Controller {

    private $header_data = array();
    private $body_data = array();
    private $footer_data = array();

    public function __construct() {

        parent::__construct();

        $this->header_data['css_link'] = array("");
        $this->footer_data['js'] = "";
        $this->footer_data['js_link'][] = "";

        $this->load->helper('form');
        $this->load->model('model_complaint');
    }

    public function getAllComplaints() {

        $username = $this->input->post('username');

        $sessionData = array(
            'username' => $username
        );

        $this->session->set_userdata($sessionData);

        $arrayOfComplaints = $this->model_inventory->getAllComplaints();

        $this->header_data['title'] = "Complaint List";
        $this->body_data['username'] = $username;
        $this->body_data['complaints'] = $arrayOfComplaints;
        $this->load_view('complaint');
    }
}