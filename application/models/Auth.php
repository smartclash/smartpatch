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
        if( $this->db->insert('users', $data) ) {

            $_SESSION['username'] = $data['username'];
            $_SESSION['email']    = $data['email'];
            $_SESSION['acctype']  = $data['acctype'];
            $_SESSION['ip']       = $data['ip'];
            $_SESSION['country']  = $data['country'];
            $_SESSION['city']     = $data['city'];
            $_SESSION['state']    = $data['state'];
            $_SESSION['loggedIn'] = true;

            $this->load->model('PageManager', 'director');
            $this->director->pageDirector();
        } else {
            $this->load->view('auth/register', array('error' => 'Oops, something wrong has happened'));
        }
    }

    public function checkUser($un, $em, $json)
    {
        $sql = "SELECT password, ip FROM users WHERE username='" . $un . "' OR email='" . $em . "'";
        $query = $this->db->query($sql);
        $rows = $query->num_rows();

        if($rows === 1){
            $data = array(
                'error' => 'Oops, the username or email is already in use'
            );
            $this->load->view('auth/register', $data);
        } else {
            $this->registerUser($json);
        }
    }
}