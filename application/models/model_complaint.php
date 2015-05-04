<?php if(!defined('BASEPATH')) exit("No Direct Script access allowed");

class Model_Complaint extends CI_Model {

    public function __construct() {

        parent::__construct();

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
}