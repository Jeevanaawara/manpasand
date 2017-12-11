<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ItemModel extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function getAll($id){
		$query = $this->db->get_where("item", array('category_id' => $id));
		return $query->result();
	}

	public function get($id){
		$query = $this->db->get_where("item", array('id' => $id));
		return $query->row();
	}

	public function add($title, $categoryId){
		$query = $this->db->insert("item", array('title'=>$title, 'category_id'=>$categoryId));
		return $query;
	}
}
?>