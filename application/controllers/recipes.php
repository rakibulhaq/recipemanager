<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipes extends CI_Controller {

	public function index()
	{
		$recipes = $this->recipe->get_all();
		$this->load->view('recipes', array("recipes" => $recipes));
	}

	public function add(){
		$this->load->view('add');
	}

	public function create(){
		$id = $this->recipe->create($this->input->post());
		redirect("/recipes/".$id);
	}

	public function show($id){
		$recipe = $this->recipe->get_recipe($id);
		$this->load->view("show", array("recipe" => $recipe));
	}

	public function edit($id){
		$recipe = $this->recipe->get_recipe($id);
		$this->load->view("edit", array("recipe" => $recipe));
	}

	public function update(){
		$this->recipe->update($this->input->post());
		redirect("/recipes/".$this->input->post("id"));
	}

	public function save($recipe_id){
		$this->recipe->save($recipe_id);
		redirect("/recipes/".$recipe_id);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */