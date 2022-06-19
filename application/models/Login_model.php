<?php
class Login_model extends CI_Model {

	public function check_data($email, $pass) {
		$data = array('email' => $email, 'password' => $pass);
		$this->db->where($data);
		$query = $this->db->get('user_tb');
		log_message('error',"user data".$query->row_array());
		return $query->row_array();
	}
	public function get_data() {
		$query=$this->db->get('user_tb');
        return $query;
	}
}
?>