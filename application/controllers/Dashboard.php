<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
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

	public function profile() {
		$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
		$id = $this->session->userdata('userid');
		$data['result'] = $this->Dashboard_model->get_data($id);
		$data['title'] = 'Profile - TechBlog';
		$data['blog'] = $this->Dashboard_model->get_pblog($id);
		$data['category'] = $this->Dashboard_model->get_category();
		$this->load->view('header',$data);
		$this->load->view('profile',$data);
		$this->load->view('footer');
	}

	public function blog() {
		$data['title'] = 'Add blog - TechBlog';
		$data['result'] = $this->Dashboard_model->get_category();
		$data['userid'] = $this->session->userdata('userid');
		$data['category'] = $this->Dashboard_model->get_category();
		$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
		$this->load->view('header',$data);
		$this->load->view('addblog');
		$this->load->view('footer');
	}

	public function Addblog() {
		$config['upload_path'] = './uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $_FILES['image']['name'];

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $uploadData = $this->upload->data();
        $profile_img = $uploadData['file_name'];

		$data = array(
			'categoryid' => $this->input->post('category'),
			'heading' => $this->input->post('subject'),
			'description' => $this->input->post('description'),
			'userid' => $this->input->post('username'),
			'img' => $profile_img,
			'created_date' => date("F j, Y l")
		);
		$result = $this->Dashboard_model->add_blog($data);
		redirect('/Dashboard/profile');
	}

	public function blogs() {
		$data['result'] = $this->Dashboard_model->get_blog();
		$data['title'] = 'Blog - TechBlog';
		$data['userid'] = $this->session->userdata('userid');
		$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
		$data['user'] = $this->Dashboard_model->get_user();
		$data['category'] = $this->Dashboard_model->get_category();
		$this->load->view('header',$data);
		$this->load->view('blog');
		$this->load->view('footer');
	}

	public function bloggers() {
		$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
		$data['user'] = $this->Dashboard_model->get_user();
		$data['category'] = $this->Dashboard_model->get_category();
		$data['title'] = 'Bloggers - TechBlog';
		$this->load->view('header',$data);
		$this->load->view('bloggers');
		$this->load->view('footer');
	}

	public function blogdetails($id) {
		$data['blog'] = $this->Dashboard_model->get_blog_byid($id);
		$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
		$data['title'] = 'Blog - TechBlog';
		$data['user'] = $this->Dashboard_model->get_user();
		$data['category'] = $this->Dashboard_model->get_category();
		$data['comment'] = $this->Dashboard_model->get_bcomment($id);
		$data['recent'] = $this->Dashboard_model->recent_posts();
		$this->load->view('header',$data);
		$this->load->view('blog_detail');
		$this->load->view('footer');
	}

	public function Category_blogs($id) {
		$data['blog'] = $this->Dashboard_model->get_blog_bycid($id);
		$data['user'] = $this->Dashboard_model->get_user();
		$data['category'] = $this->Dashboard_model->get_category();
		$data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
		$data['title'] = 'Blog - TechBlog';
		$this->load->view('header',$data);
		$this->load->view('blogbycategory');
		$this->load->view('footer');
	}

	public function Addcomment() {
		$id = $this->input->post('blogid');
		$data = array(
			'comment' => $this->input->post('comment'),
			'blogid' => $this->input->post('blogid'),
			'userid' => $this->session->userdata('userid'),
			'created_date' => date("F j, Y l")
		);
		$result = $this->Dashboard_model->add_comment($data);
		redirect('/Dashboard/blogdetails/'.$id); 
	}
}