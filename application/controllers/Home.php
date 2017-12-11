<?php
class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('categoryModel');
		$this->load->model('itemModel');
		$this->load->helper(array('url'));
		$this->load->library(array('session'));
	}

	public function index(){
		$data['user'] = $this->session->userdata('user');
		$data['categories'] = $this->categoryModel->getAll();
		$this->load->view('home', $data);	
	}

	public function category($id){
		$data['user'] = $this->session->userdata('user');
		$data['selectedCategoryId'] = $id;
		$data['category'] = $this->categoryModel->get($id);
		$data['category']->items = $this->itemModel->getAll($id);
		$this->load->view('category', $data);	
	}

	// public function category($id){
	// 	$data['user'] = $this->session->userdata('user');
	// 	$data['category'] = $this->categoryModel->get($id);
	// 	$this->load->view('category', $data);	
	// }

}
?>