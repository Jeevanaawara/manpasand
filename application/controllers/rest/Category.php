<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Jeevan
 */
class Category extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('categoryModel');
        $this->load->model('itemModel');

        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        // $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key
        // $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        // $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
    }

    public function getAll_get(){
    	$this->response($this->categoryModel->getAll(), REST_Controller::HTTP_OK);
    }

    public function get_get(){
    	$id = $this->get('id');
    	if($id){
    		$data = $this->categoryModel->get($id);
    		$data->items = $this->itemModel->getAll($id);
    		$this->response($data, REST_Controller::HTTP_OK);
    	}    		
    	else{
    		$this->response(['status'=>'ERROR','message'=>'category id is missing'], REST_Controller::HTTP_NOT_FOUND);
    	}
    }
}
?>
