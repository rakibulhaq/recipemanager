<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipe extends CI_Model {

	public function create($post){
		$query = "INSERT INTO recipes (name, content, user_id, created_at, updated_at) VALUES (?,?,?, NOW(), NOW())";
		$values = array($post["name"], $post["content"], $this->session->userdata('id'));
		$this->db->query($query,$values);
		return $this->db->insert_id();
	}

	public function get_recipe($id){
		$query = "SELECT * FROM recipes WHERE id = ?";
		$values = $id;
		return $this->db->query($query,$values)->row_array();
	}

	public function get_all(){
		$query = "SELECT recipes.id, recipes.user_id, recipes.name, users.first_name FROM recipes JOIN users ON recipes.user_id = users.id";
		return $this->db->query($query)->result_array();
	}

	public function update($post){
		$query = "UPDATE recipes SET name = ?, content = ? WHERE id = ?";
		$values = array($post["name"], $post["content"], $post["id"]);
		$this->db->query($query,$values);
	}

	public function get_recipes_by_user($id){
		$query = "SELECT * FROM recipes WHERE user_id = ?";
		$values = $id;
		return $this->db->query($query,$values)->result_array();
	}

	public function save($recipe_id){
		$query = "INSERT INTO saved_recipes (user_id, recipe_id, created_at, updated_at) VALUES (?,?,NOW(),NOW())";
		$values = array($this->session->userdata('id'), $recipe_id);
		$this->db->query($query,$values);
	}

	public function saved_recipes_by_user($id){
		$query = "SELECT * FROM saved_recipes JOIN recipes ON saved_recipes.recipe_id = recipes.id WHERE saved_recipes.user_id= ?";
		$values = $id;
		return $this->db->query($query,$values)->result_array();
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */