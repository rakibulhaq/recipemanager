<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipes extends CI_Controller {

	public function index()
	{
		$this->load->view('recipes');
	}

	public function add(){
		$this->load->view('add');
	}

	public function create(){
		$id = $this->recipe->create($this->input->post());
		redirect("/recipes/".$id);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */