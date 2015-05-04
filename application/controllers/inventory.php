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

        $this->load->helper('form');
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

    public function placeOrder() {

        $arrayForUsername = array();
        $arrayForItemName = array();
        $arrayForItemQuantity = array();
        $arrayForItemRemarks = array();

        for($i = 0; $i < count($this->input->post('username')); $i++)
            $arrayForUsername[$i] = $this->input->post('username')[$i];

        for($i = 0; $i < count($this->input->post('item_name')); $i++)
            $arrayForItemName[$i] = $this->input->post('item_name')[$i];

        for($i = 0; $i < count($this->input->post('quantity')); $i++)
            $arrayForItemQuantity[$i] = $this->input->post('quantity')[$i];

        for($i = 0; $i < count($this->input->post('remarks')); $i++)
            $arrayForItemRemarks[$i] = $this->input->post('remarks')[$i];

        // Preparing the JSON Data for the entry into database
        $count = max(count($arrayForUsername),count($arrayForItemName),count($arrayForItemQuantity), count($arrayForItemRemarks));
        $countForStatus = 0;
        for($i = 0; $i < $count; $i++) {

            $result = $this->model_inventory->orderInventory($arrayForUsername[$i],
                $arrayForItemName[$i],
                $arrayForItemQuantity[$i],
                $arrayForItemRemarks[$i]);
            if($result)
                $countForStatus++;
        }

        if($countForStatus == $count) {
            $this->body_data['message'] = "Your Inventory Orders have been placed";

            $this->body->data['role'] = 'success';
            $this->load_view('details');
        }
        else {
            $this->body_data['message'] = "There is some server error. Please try again count = ".$count." countfot stst = ".$countForStatus;
            $this->body_data['role'] = "warning";
            $this->load_view('details');
        }
    }

    public function myOrders() {

        $username = $this->input->post('username');

        $sessionData = array(
            'username' => $username
        );

        $this->session->set_userdata($sessionData);

        $this->header_data['title'] = "My Orders";;
        $this->body_data['username'] = $username;
        $this->load_view('myOrders');
    }

    public function getAllOrdersByUsername() {

        $user = $this->input->post('username');
        $arrayOfItems = $this->model_inventory->getAllInventoryItem();
        $arrayOfUserItems = array();

        foreach($arrayOfItems as $key => $value) {
            if($value->username == $user)
                array_push($arrayOfUserItems, $value);
        }

        $this->header_data['title'] = "My Orders";
        $this->body_data['username'] = $user;
        $this->body_data['items'] = $arrayOfUserItems;
        $this->load_view('myOrderItems');
    }

    public function load_view($view) {

        $this->load->view('/templates/header',$this->header_data);
        $this->load->view($view, $this->body_data);
        $this->load->view('/templates/footer',$this->footer_data);
    }
}