<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sign extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('signModel');
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('form_validation','session'));
	}

	public function in(){
		if($this->session->userdata('user')){
			redirect("/");
		}
		else{
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$data['invalid_auth'] = false;	
			if($this->form_validation->run()==FALSE){
				$this->load->view('in', $data);
			}
			else{
				// print_r($this->session->userdata('user'));
				$user = $this->signModel->in($this->input->post('username'), $this->input->post('password'));
				if($user){
					$this->session->set_userdata(array('user'=>$user));
					redirect('/');
				}else{
					$data['invalid_auth'] = true;
					$this->load->view('in', $data);			
				}
			}
		}


	}

	public function up(){
		if($this->session->userdata('user')){
			redirect("/");
		}
		else{
			$this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirmPassword', 'Confrim Password', 'required|matches[password]');
			$data['invalid_auth'] = false;	
			if($this->form_validation->run()==FALSE){
				$this->load->view('up', $data);
			}
			else{
				// print_r($this->session->userdata('user'));
				$isCreate = $this->signModel->up($this->input->post('username'), $this->input->post('password'));
				if($isCreate){
					$user = $this->signModel->in($this->input->post('username'), $this->input->post('password'));
					if($user){
						$this->session->set_userdata(array('user'=>$user));
						redirect('/');
					}
				}else{
					$data['invalid_auth'] = true;
					$this->load->view('up', $data);
				}
			}
		}
	}

	public function out(){
		$this->session->sess_destroy();
		redirect('/');
	}
}
