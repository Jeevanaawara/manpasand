<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class CategoryModel extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAll(){
		$query = $this->db->get("category");
		return $query->result();
	}

	public function up($username, $password){
		$query = $this->db->insert("user", array(
			'username'=>$username,
			'password'=>$password,
			'role'=>'USER'));
		return $query;
	}
}
?>