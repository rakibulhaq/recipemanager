<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipe extends CI_Model {

	public function create($post){
		$query = "INSERT INTO recipes (name, content, user_id, created_at, updated_at) VALUES (?,?,?, NOW(), NOW())";
		$values = array($post["name"], $post["content"], $this->session->userdata('id'));
		$this->db->query($query,$values);
		return $this->db->insert_id();
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */