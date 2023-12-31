<?php
	class User_Model extends CI_Model{
		public function register($encrypt_password){

			$data = array('name' => $this->input->post('name'), 
						  'email' => $this->input->post('email'),
						  'password' => $encrypt_password,
						  'username' => $this->input->post('username'),
						  'notelp' => $this->input->post('notelp')
						  );

			return $this->db->insert('users', $data);
		}

		public function login($username, $encrypt_password){
			//Validate
			$this->db->where('username', $username);
			$this->db->where('password', $encrypt_password);

			$result = $this->db->get('users');

			if ($result->num_rows() == 1) {
				return $result->row(0);
			}else{
				return false;
			}
		}

		// Check Username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('users', array('username' => $username));

			if(empty($query->row_array())){
				return true;
			}else{
				return false;
			}
		}

		// Check email exists
		public function check_email_exists($email){
			$query = $this->db->get_where('users', array('email' => $email));

			if(empty($query->row_array())){
				return true;
			}else{
				return false;
			}
		}
		
		//get user dari id user
		public function get_user_by_id($user_id) {

			$query = $this->db->get_where('users', array('id' => $user_id));
		
			if ($query->num_rows() > 0) {
				return $query->row_array(); // Mengembalikan data sebagai array
			} else {
				return null;
			}

		}

		public function update_profile($user_id, $data) {
			$this->db->where('id', $user_id);
			return $this->db->update('users', $data);
		}

		public function searchProductsByName($searchTerm) {
			$this->db->like('name', $searchTerm); // Melakukan pencocokan sebagian dengan kolom 'name'
			$query = $this->db->get('products');
			return $query->result_array();
		}
}