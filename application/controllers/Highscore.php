<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Highscore extends CI_Controller {

  public $jumlah_soal = 0;

  public function __construct()
  {
    parent::__construct();
    $this->load->model("Model");
  }

  public function index()
  {

    if ( empty($this->session->userdata('email')) ) {
      redirect( base_url('login') . '?balik=' . base64_encode( base_url(uri_string()) ) );
      die;
    }
    $data = [];

    
    $files_in_root = scandir( APPPATH . '/..' );
    foreach ($files_in_root as $key => $val) {
      if ( strpos($val, 'soal') !== false ) {
        $this->jumlah_soal++;
      }
    }

    $data['jumlah_soal'] = $this->jumlah_soal;




    $data_users = $this->Model->get_all_users();
    foreach ($data_users as $key => $row) {
      $data['highscores'][$row['username']] = $this->Model->get_all_jawaban_benar( $row['id'], $this->jumlah_soal );
    }
		
		$this->load->view('highscore', $data);
	}

}
