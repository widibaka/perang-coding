<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public $website = '';

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Model");
	}

	public function index()
	{
		if ( isset($_GET['balik']) ) { //<-- simpen dulu di session
			$_SESSION['balik'] = $_GET['balik'];
		}
		if ( !empty($this->session->userdata('email')) ) {
			$this->session->set_flashdata("msg", "none#Selamat datang kembali.");
			redirect( base_url() . "admin/dashboard" );
			die;
		}

		//**
	    // Login with Google
	    //**

		    //include the google OAuth configuration
		    require("assets/google_api/vendor/autoload.php");
		    //Step 1: Enter you google account credentials

				$jwt = new \Firebase\JWT\JWT;
				$jwt::$leeway = 5*60; // adjust this value

				// we explicitly pass jwt object whose leeway is set to 60
				$g_client = new \Google_Client(['jwt' => $jwt]);


				$g_client->setClientId( perang_coding_setClientId );
				$g_client->setClientSecret( perang_coding_setClientSecret );
				$g_client->setRedirectUri( base_url('login') );
				$g_client->addScope("email");
				$g_client->addScope("profile");


		    //Step 2 : Create the url
		    $auth_url = $g_client->createAuthUrl();
		    $data['auth_url'] = $auth_url;

		    //Step 3 : Get the authorization  code
		    $code = isset($_GET['code']) ? $_GET['code'] : NULL;

		    //Step 4: Get access token
		    if (isset($code)) {

		      try {

		        $token = $g_client->fetchAccessTokenWithAuthCode($code);
		        $g_client->setAccessToken($token);
		      } catch (Exception $e) {
		        $e->getMessage();
		      }

		      try {
		        $pay_load = $g_client->verifyIdToken(); // ini kalo berhasil

		      } catch (Exception $e) {
		        $e->getMessage();
		        $this->session->set_flashdata('msg', 'error#Silakan coba lagi.' . $e->getMessage() ); // <-- untuk testing
		        redirect( base_url() . $this->uri->uri_string() );
		      }
		    } else {
		      $pay_load = null;
		    }

		//**
		// /.Login with Google
		//**

        if ( !empty($pay_load) ) {
        	$user = $this->Model->get_user($pay_load["email"]);
        	if ( $user == null ) //<-- kalau bukan anggota organisasi
        	{
        		$this->register_user($pay_load);
        	}
        	else
        	{
        		$this->session->set_flashdata('msg', 'success#Selamat datang, '. $pay_load['name'] .'.');

						// tambahkan user id ke payload
						$pay_load['user_id'] = $user->id;
						
        		$this->session->set_userdata($pay_load);
        		if ( isset($_SESSION['balik']) ) { // <-- balik ke halaman sebleum login
        			redirect( base64_decode($_SESSION['balik']) );
        		}
        		else{
        			redirect( base_url() );
        		}
        		
        	}
        }

		$this->load->view('login', $data);
	}

	public function register_user($pay_load)
	{
		$user_id = $this->Model->add_user($pay_load['name'], $pay_load['email']);

		// tambahkan user id ke payload
		$pay_load['user_id'] = $user_id;

		$this->session->set_userdata($pay_load);
		$this->session->set_flashdata('msg', 'success#Selamat datang, '. $pay_load['name'] .'. Selamat mengerjakan soal, raihlah nilai tertinggi!');
		if ( isset($_SESSION['balik']) ) {
			redirect( base64_decode($_SESSION['balik']) );
		}
		else{
			redirect( base_url() );
		}
	}
}
