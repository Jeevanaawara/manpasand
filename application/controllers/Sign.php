<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('signModel');
	}

	public function in(){
		$this->load->view('in');
	}

	public function up(){
		$this->load->view('up');
	}
}
