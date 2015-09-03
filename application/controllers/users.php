<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		// $this->session->sess_destroy();
		if($this->session->userdata('id')){
			redirect("/recipes");
		}
		$this->load->view('index');
	}

	public function login(){
		$this->user->login($this->input->post());
		if($this->session->userdata('id')){
			redirect("/recipes");
		}
		redirect("/");
	}

	public function register(){
		$this->user->register($this->input->post());
		if($this->session->userdata('id')){
			redirect("/recipes");
		}
		redirect("/");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */