<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Database extends CI_Model
{
    public function checkUser($userName, $userEmail, $userPass, $totalPatches, $type)
    {
        $sql = "SELECT userEmail FROM users WHERE userEmail='" . $userEmail . "'";
        $result = $this->db->query($sql);
        $rows = $result->num_rows();
        
        if($rows === 1){
            $this->userExist();
        } else {
            
        }
    }

    public function userExist()
    {

    }

    public function registerUser()
    {
        
    }
}