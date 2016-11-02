<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Model
{
    public function checkUser($userName, $userEmail, $userPass, $totalPatches, $type)
    {
        /*$sql = "SELECT userEmail FROM users WHERE userEmail='" . $userEmail . "'";
        $result = $this->db->query($sql);
        $rows = $result->num_rows();

        if($rows === 1){
            $this->userExist();
        } else {
            $this->registerUser();
        }*/
        $clientId = $this->config->item("clientid");
        $clientsec = $this->config->item("clientsec");
        $serverkey = $this->config->item("serverkey");

        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'){
            $protocol = 'https://';
        } else {
            $protocol = 'http://';
        }

        $Gclient = new Google_Client();
        $Gclient->setApplicationName($this->config->item("title"));
        $Gclient->setClientId($clientId);
        $Gclient->setClientSecret($clientsec);
        $Gclient->setRedirectUri($protocol . $this->config->item("domain") . '/OAuth');
        $Gclient->setDeveloperKey($serverkey);
        $Gclient->addScope("https://www.googleapis.com/auth/userinfo.email");
    }

    public function userExist()
    {

    }

    public function registerUser()
    {
        
    }
}