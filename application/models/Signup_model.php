<?php
class Signup_model extends CI_Model {

	public function set_data($data) {
		$query = $this->db->insert('user_tb', $data);
        return $query;
	}
	
	public function get_data($email) {
		$data = array('email' => $email);
		$this->db->where($data);
		$query = $this->db->get('user_tb');
		return $query->row_array();
	}
}
?>