<?php if(!defined('BASEPATH')) exit("No Direct Script Access Allowed");

class Model_Sign_In extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    // Here I need to call the function getUserById
    function logInUser($username, $password) {

        $users = curl_init(""); // URL to get all the list of Users in the database

        curl_setopt($users, CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($users, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($users, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($users, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $json_string = curl_exec($users);

        $res_array = json_decode($json_string);

        // Searching for username in the decoded JSON string into array
        if(array_key_exists($username,$res_array))
            return true;
        else
            return false;
    }
}
