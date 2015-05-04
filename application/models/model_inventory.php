<?php if(!defined('BASEPATH')) exit("No Direct Script access allowed");

class Model_Inventory extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    public function getAllInventoryItem() {

        $inventory = curl_init("http://localhost:8081/ims/inventory/listItems/");

        curl_setopt($inventory, CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($inventory, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($inventory, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($inventory, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $json_string = curl_exec($inventory);
        $res_array = json_decode($json_string);

        return $res_array;
    }

    public function getAllComplaints() {

        $complaint = curl_init("http://localhost:8081/ims/complaint/listAllComplaints/");

        curl_setopt($complaint, CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($complaint, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($complaint, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($complaint, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $json_string = curl_exec($complaint);
        $res_array = json_decode($json_string);

        return $res_array;
    }

    public function orderInventory($username, $itemName, $itemQuantity, $itemRemarks) {

        error_log($username."   ". $itemName."   ". $itemQuantity."  ". $itemRemarks);
        $arrayForJSONObject = array(

            "username" => $username,
            "item_description" => $itemName,
            "item_quantity" => $itemQuantity,
            "item_remarks" => $itemRemarks
        );

        $dataString = json_encode($arrayForJSONObject);
        $curlSession = curl_init("http://localhost:8081/inventory/addItem/"); // URL to be updated for Adding Users into Database

        curl_setopt($curlSession, CURLOPT_CUSTOMREQUEST,"POST");
        curl_setopt($curlSession, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($curlSession, CURLOPT_POSTFIELDS, $dataString);
        curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($curlSession, CURLOPT_HTTPHEADER, array (
                'Content-Type: application/json',
                'Content-Length: ' . strlen($dataString))
        );

        $json_string = curl_exec($curlSession);
        $resultCode = curl_getinfo($curlSession, CURLINFO_HTTP_CODE);

        if($resultCode == '200')
            return true;
        else
            return false;
    }
}