<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SignModel extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function in($username, $password){
		$query = $this->db->get_where("user", array('username'=>$username, 'password'=>$password));
		return $query->row();
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