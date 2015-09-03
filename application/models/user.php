<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public function login($post){
		$this->form_validation->set_rules("email", "Email Address", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata('errors', validation_errors());
		}
		else{
			$query = "SELECT id FROM users WHERE email = ? AND password = ?";
			$values = array($post['email'], $post['password']);
			$user = $this->db->query($query,$values)->row_array();
			$this->session->set_userdata('id', $user["id"]);
		}
	}

	public function register($post){
		$this->form_validation->set_rules("first_name", "First Name", "trim|required|alpha");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required|alpha");
		$this->form_validation->set_rules("email", "Email Address", "trim|required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[6]");
		$this->form_validation->set_rules("password_conf", "Password Confirmation", "trim|required|matches[password]");

		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata('errors', validation_errors());
		}
		else{
      $query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES (?,?,?,?, NOW(), NOW())";
      $values = array($post['first_name'],$post['last_name'],$post['email'],$post['password']);
      $this->db->query($query,$values);
      // grabbing the id of what we just inserted into the db
      $id = $this->db->insert_id();
      // saving the new user's id into session = they're logged in!!! yay! :)
      $this->session->set_userdata('id',$id);
		}
	}

	public function show($id){
		$query = "SELECT users.first_name, users.id FROM users WHERE users.id = ?";
		$values = $id;
		return $this->db->query($query,$values)->row_array();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */