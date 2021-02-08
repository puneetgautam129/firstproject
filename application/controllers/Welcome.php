<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  function __construct(){
    parent::__construct();
    // $this->load->model('login_model');
  }

public function index(){
 	$this->load->view('home');
 }

public function contact(){
	$this->load->view('contact');
}

public function generic(){
	$this->load->view('generic');
}

public function addindb(){
	$this->load->model('Model_welcome');
	$this->Model_welcome->addindb();

}


	

}

?>