<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Dashboard_model');
	}

	public function index() {
		$data['title'] = 'Login - TechBlog';
		$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
		$data['category'] = $this->Dashboard_model->get_category();
		$this->load->view('header' , $data);
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function login() {	
			$email=$this->input->post('email');
			$pass=md5($this->input->post('pass'));
			$data = $this->Login_model->check_data($email,$pass);
			
			if($data) {
				if($data['role'] == 0) {
					$this->session->set_userdata('userid', $data['id']);
					$this->session->set_userdata('username', $data['name']);
					$this->session->set_userdata('is_user_loggedin', TRUE);
					redirect('/Dashboard');
				} else if ($data['role'] == 1) {
					$this->session->set_userdata('userid', $data['id']);
					$this->session->set_userdata('username', $data['name']);
					$this->session->set_userdata('is_user_loggedin', TRUE);
					$this->session->set_userdata('is_admin', TRUE);
					redirect('/Admin');
				}
			} else {
				$data['error'] = "<h3 style='color:red'>Invalid login details</h3>";
				$data['title'] = 'Login - TechBlog';
				$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
				$data['category'] = $this->Dashboard_model->get_category();
				$this->load->view('header' , $data);
				$this->load->view('login',@$data);
				$this->load->view('footer');
			}	
	}

}
?>