<?php if(!defined('BASEPATH')) exit("No Direct Script access allowed");

class Model_User extends CI_Model {

    public function __construct() {

        parent::__construct();

    }

    function login($username, $password) {

        $users = curl_init("http://localhost:8081/ims/adminUsers/listAdminUsers/"); // URL to get all the list of Users in the database

        curl_setopt($users, CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($users, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($users, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($users, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $json_string = curl_exec($users);

        $res_array = json_decode($json_string);
        $status = 0;
        // Searching for username in the decoded JSON string into array
        foreach($res_array as $key => $object) {
            if($object->username == $username && $object->password = $password)
                $status = 1;
        }

        if($status == 1)
            return true;
        else
            return false;
    }

    public function addUser($username, $password) {

            $arrayForJSONObject = array (

                "username" => $username,
                "password" => $password
            );

            $dataString = json_encode($arrayForJSONObject);
            $curlSession = curl_init("http://localhost:8081/users/addUser/"); // URL to be updated for Adding Users into Database

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
                return $json_string;
            else
                return $json_string;
        }


    public function checkForExistingUsers($username) {

        $existingUsers = curl_init("http://localhost:8081/users/listUsers/"); // URL to get all the list of Users in the database

        curl_setopt($existingUsers, CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($existingUsers, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($existingUsers, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($existingUsers, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

        $json_string = curl_exec($existingUsers);

        $res_array = json_decode($json_string);
        $status = 0;
        // Searching for username in the decoded JSON string into array
        foreach($res_array as $key => $object) {
            if($object->username == $username)
                $status = 1;
        }
        if($status == 1)
            return true;
        else
            return false;
    }
}
