<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$client_id = $this->config->item("clientid");
        $client_sec = $this->config->item("clientsec");
        $server_key = $this->config->item("serverkey");

        $this->checkStats($client_id, $client_sec, $server_key);
	}

	public function logout()
	{
		// Code ...
	}

	private function checkStats($id, $sec, $key)
    {
        $Gclient = new Google_Client();
        $Gclient->setClientId($id);
        $Gclient->setClientSecret($sec);
        $Gclient->setDeveloperKey($key);
        $Gclient->setScopes(Google_Service_Plus::PLUS_ME);
        if ($_SESSION['access_token'] && isset($_SESSION['access_token'])) {
            $Gclient->setAccessToken($_SESSION['access_token']);
            $this->userLoggedIn();
        } else {
            $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback';
            header("Location :" . " " . filter_var($redirect_uri, FILTER_SANITIZE_URL));
        }
    }

    private function userLoggedIn()
    {
        $_SESSION['userName'] = $this->SomeKindOfCodeHere; // UserName
        $_SEssion['email'] = $this->SomeKindOfCodeHere; // UserEmail
        $_SESSION['picture'] = $this->SomeKindOfCodeHere; //User Profile Picture
    }

    public function oauth2callback()
    {
        $client_id = $this->config->item("clientid");
        $client_sec = $this->config->item("clientsec");
        $server_key = $this->config->item("serverkey");

        $Gclient = new Google_Client();
        $Gclient->setClientId($id);
        $Gclient->setClientSecret($sec);
        $Gclient->setDeveloperKey($key);
        $Gclient->setScopes(Google_Service_Plus::PLUS_ME);

        if (! isset($_GET['code'])) {
            $url = $Gclient->createAuthUrl();
            header('Location: ' . filter_var($url, FILTER_SANITIZE_URL));
        } else {
            $Gclient->authenticate($_GET['code']);
            $_SESSION['access_token'] = $Gclient->getAccessToken();
            $redirect = 'https://mywebsite.com/myarea';
            header('Location: ' . $redirect);
        }
    }
}
