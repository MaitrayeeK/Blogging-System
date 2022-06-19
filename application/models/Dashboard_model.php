<?php
class Dashboard_model extends CI_Model {

	public function get_data($id) {
		$data = array('id' => $id, 'isdeleted' => 0);
		$this->db->where($data);
		$query = $this->db->get('user_tb');
		return $query->result_array();
	}
	public function get_category() {
		$this->db->where('isdeleted', 0);
		$query = $this->db->get('category_tb');
		return $query->result_array();
	}
	public function add_blog($data) {
		$query = $this->db->insert('blog_tb',$data);
		return $query;
	}
	public function add_cat($data) {
		$query = $this->db->insert('category_tb',$data);
		return $query;
	}
	public function get_blog() {
		$this->db->where('isdeleted', 0);
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('blog_tb');
		return $query->result_array();
	}
	public function get_user() {
		$this->db->where('isdeleted', 0);
		$query = $this->db->get('user_tb');
		return $query->result_array();
	}
	public function get_pblog($id) {
		$data = array('userid' => $id, 'isdeleted' => 0);
		$this->db->where($data);
		$query = $this->db->get('blog_tb');
		return $query->result_array();
	}
	public function delete_blog($id) {
		$data = array('isdeleted' => 1);
		$this->db->where('id', $id);
		$result = $this->db->update('blog_tb', $data);
		return $result;
	}
	public function delete_comment($id) {
		$data = array('isdeleted' => 1);
		$this->db->where('id', $id);
		$result = $this->db->update('comment_tb', $data);
		return $result;
	}
	public function get_blog_byid($id) {
		$data = array('id' => $id, 'isdeleted' => 0);
		$this->db->where($data);
		$query = $this->db->get('blog_tb');
		return $query->result_array();
	}
	public function get_blog_bycid($id) {
		$data = array('categoryid' => $id, 'isdeleted' => 0);
		$this->db->where($data);
		$query = $this->db->get('blog_tb');
		return $query->result_array();
	}
	public function add_comment($data) {
		$query = $this->db->insert('comment_tb',$data);
		return $query;
	}
	public function get_bcomment($id) {
		$this->db->where('isdeleted', 0);
		$data = array('blogid' => $id);
		$this->db->where($data);
		$query = $this->db->get('comment_tb');
		return $query->result_array();
	}
	public function recent_posts() {
		$this->db->where('isdeleted', 0);
		$this->db->order_by('id', 'DESC');
		$this->db->limit('5');
		$query = $this->db->get('blog_tb');
		return $query->result_array();
	}
	public function get_acomment() {
		$this->db->where('isdeleted', 0);
		$query = $this->db->get('comment_tb');
		return $query->result_array();
	}
}
?>