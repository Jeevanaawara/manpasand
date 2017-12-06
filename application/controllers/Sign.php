<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('signModel');
	}

	public function in(){
		$result = $this->signModel->in("admin", "admin");
		echo json_encode($result, 4);
		// $this->load->view('in',$data);
	}

	public function up(){
		$this->load->view('up');
	}
}
