<?php
class Category extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library(array('session'));
	}

	public function index($category){
		$data['user'] = $this->session->userdata('user');
		$data['category'] = $category;
		$this->load->view('category', $data);	
	}

}
?>