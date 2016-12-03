<?php
/**
 * @owner xXAlphaManXx
 * @editedOn 03/12/16
 * @package Smart Patch
 * @file Auth.php
 *
 * Licensed to Smart Hacks Inc.
 * @link https://smarthacksinc.com
 *
 * @repo https://github.com/smarthacks/
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Model {

    public function loggedIn ()
    {
        if(isset($_SESSION['loggedIn'])
            && $_SESSION['loggedIn'] === true) {
            return true;
        } else {
            return false;
        }
    }

    public function registerUser ($data)
    {
        $this->db->insert('users', $data);
    }
}