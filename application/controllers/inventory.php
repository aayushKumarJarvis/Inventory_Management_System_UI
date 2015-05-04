<?php

class Inventory extends CI_Controller {

    private $header_data = array();
    private $body_data = array();
    private $footer_data = array();

    public function __construct() {

        parent::__construct();

        $this->header_data['css_link'] = array("");
        $this->footer_data['js'] = "";
        $this->footer_data['js_link'][] = "";

        $this->load->model('model_inventory');
    }

    public function availableItems() {

        $username = $this->input->post('username');

        $sessionData = array(
            'username' => $username
        );

        $this->session->set_userdata($sessionData);

        $arrayOfItems = $this->model_inventory->getAllInventoryItem();

        $this->header_data['title'] = "Available Inventory";
        $this->body_data['username'] = $username;
        $this->body_data['items'] = $arrayOfItems;
        $this->load_view('availableItems');
    }

    public function orderInventory() {

        $username = $this->input->post('username');

        $sessionData = array(
            'username' => $username
        );

        $this->session->set_userdata($sessionData);

        $this->header_data['title'] = "Order Inventory";
        $this->body_data['username'] = $username;
        $this->footer_data['js_link'][] = "order_script.js";
        $this->load_view('orderInventory');
    }

    public function storeInventoryData() {

    }

    public function load_view($view) {

        $this->load->view('/templates/header',$this->header_data);
        $this->load->view($view, $this->body_data);
        $this->load->view('/templates/footer',$this->footer_data);
    }
}