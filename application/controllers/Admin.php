<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Dashboard_model');
	}
	public function index() {
		$data['title'] = 'Dashboard - TechBlog';
		$data['name'] = $this->session->userdata('username');
		$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
		$data['is_admin'] = $this->session->userdata('is_admin');
		$data['category'] = $this->Dashboard_model->get_category();
		$this->load->view('header',$data);
		$this->load->view('home',$data);
		$this->load->view('footer');
	}
	public function Manage() {
		$data['title'] = 'Dashboard - TechBlog';
		$data['name'] = $this->session->userdata('username');
		$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
		$data['category'] = $this->Dashboard_model->get_category();
		$this->load->view('header',$data);
		$this->load->view('adashboard',$data);
		// $this->load->view('afooter');
	}
	public function Manageblog() {
		$data['result'] = $this->Dashboard_model->get_blog();
		$data['title'] = 'Blog - TechBlog';
		$data['userid'] = $this->session->userdata('userid');
		$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
		$data['user'] = $this->Dashboard_model->get_user();
		$data['category'] = $this->Dashboard_model->get_category();
		$this->load->view('header',$data);
		$this->load->view('manageblogs');
		$this->load->view('footer');
	}
	public function deleteblog($id) {
		$result = $this->Dashboard_model->delete_blog($id);
		if ($result) {
				$data['error'] = "<h3 style='color:red'>Blog deleted</h3>";
				$data['result'] = $this->Dashboard_model->get_blog();
				$data['title'] = 'Blog - TechBlog';
				$data['userid'] = $this->session->userdata('userid');
				$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
				$data['user'] = $this->Dashboard_model->get_user();
				$data['category'] = $this->Dashboard_model->get_category();
				$this->load->view('header',$data);
				$this->load->view('manageblogs');
				$this->load->view('footer');
			}
	}
	public function deletecomment($id) {
		$result = $this->Dashboard_model->delete_comment($id);
		if ($result) {
			$data['error'] = "<h3 style='color:red'>Comment deleted</h3>";
			$data['comment'] = $this->Dashboard_model->get_acomment();
			$data['user'] = $this->Dashboard_model->get_user();
			$data['category'] = $this->Dashboard_model->get_category();
			$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
			$data['title'] = 'Categories - TechBlog';
			$this->load->view('header',$data);
			$this->load->view('managecomments',$data);
			$this->load->view('footer');
		}
	}
	public function Users() {
		$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
		$data['title'] = 'Users - TechBlog';
		$data['user'] = $this->Dashboard_model->get_user();
		$data['category'] = $this->Dashboard_model->get_category();
		$this->load->view('header',$data);
		$this->load->view('users',$data);
		$this->load->view('footer');
	}
	public function Categories() {
		$data['result'] = $this->Dashboard_model->get_category();
		$data['category'] = $this->Dashboard_model->get_category();
		$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
		$data['title'] = 'Categories - TechBlog';
		$this->load->view('header',$data);
		$this->load->view('categories',$data);
		//$this->load->view('footer');
	}
	public function Comments() {
		$data['comment'] = $this->Dashboard_model->get_acomment();
		$data['user'] = $this->Dashboard_model->get_user();
		$data['category'] = $this->Dashboard_model->get_category();
		$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
		$data['title'] = 'Categories - TechBlog';
		$this->load->view('header',$data);
		$this->load->view('managecomments',$data);
		$this->load->view('footer');
	}
	public function addcat() {
		$data = array(
			'name' => $this->input->post('cate'));
		$result = $this->Dashboard_model->add_cat($data);
		if($result) {
			$this->Categories();
		}
	}
}