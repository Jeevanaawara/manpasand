<?php
class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('categoryModel');
		$this->load->helper(array('url'));
		$this->load->library(array('session'));
	}

	public function index(){
		$data['user'] = $this->session->userdata('user');
		$data['categories'] = $this->categoryModel->getAll();
		$this->load->view('home', $data);	
	}

	public function category($category){
		$data['user'] = $this->session->userdata('user');
		$data['category'] = urldecode($category);
		$this->load->view('category', $data);	
	}

}
?>