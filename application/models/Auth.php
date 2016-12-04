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
            $this->registerSession($data);
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

    public function loginUser($js)
    {

        $sql = "SELECT * FROM users WHERE username='" . $js['username'] . "'";
        $query = $this->db->query($sql);
        $rows = $query->num_rows();
        $res = $query->result();

        if($rows === 1){
            if(password_verify($js['password'], $res->password)) {
                $this->registerSession($js);
            } else {
                $this->load->view('auth/login', array('error' => 'Oops, the password is wrong'));
            }
        } else {
            $this->load->view('auth/login', array('error' => 'Oops, the username is not available with our records'));
        }

    }

    public function registerSession($data)
    {
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
    }
}