<?php if(!defined('BASEPATH')) exit("No Direct Script access allowed");

class Model_Sign_Up extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    public function addUser($username, $password) {

        if($this->checkForExistingUsers($username))
            return 0;
        else {
            $arrayForJSONObject = array(

                "username" => $username,
                "password" => $password
            );

            $dataString = json_encode($arrayForJSONObject);
            $curlSession = curl_init(""); // URL to be updated for Adding Users into Database

            curl_setopt($curlSession, CURLOPT_CUSTOMREQUEST,"POST");
            curl_setopt($curlSession, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
            curl_setopt($curlSession, CURLOPT_POSTFIELDS, $dataString);
            curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($curlSession, CURLOPT_HTTPHEADER, array(
                    'Content-Type: application/json',
                    'Content-Length: ' . strlen($dataString))
            );

            $json_string = curl_exec($curlSession);
            $resultCode = curl_getinfo($curlSession, CURLINFO_HTTP_CODE);

            if($resultCode == '200')
                return 1;
            else
                return 2;
        }
    }

    public function checkForExistingUsers($username) {

        $existingUsers = curl_init(""); // URL to get all the list of Users in the database

        curl_setopt($existingUsers, CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($existingUsers, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($existingUsers, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($existingUsers, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $json_string = curl_exec($existingUsers);

        $res_array = json_decode($json_string);

        // Searching for username in the decoded JSON string into array
        if(array_key_exists($username,$res_array))
            return true;
        else
            return false;
    }
}
