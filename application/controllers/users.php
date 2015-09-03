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
			redirect("/recipes/all");
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

	public function logout(){
		$this->session->sess_destroy();
		redirect("/");
	}

	public function show($id){
		$user = $this->user->show($id);
		$recipes = $this->recipe->get_recipes_by_user($id);
		$saved = $this->recipe->saved_recipes_by_user($id);
		$this->load->view("user", array("user" => $user, "recipes" => $recipes, "saved" => $saved));
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */