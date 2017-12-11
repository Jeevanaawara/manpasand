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

	public function get($id){
		$query = $this->db->get_where("category", array('id' => $id));
		return $query->row();
	}

	public function add($title){
		$query = $this->db->insert("category", array('title'=>$title));
		return $query;
	}
}
?>