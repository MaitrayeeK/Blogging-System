<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index() {
		$data['title'] = 'Home - TechBlog';
		$this->load->view('header' , $data);
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function blog() {
		$data['title'] = 'Blogs - TechBlog';
		$this->load->view('header' , $data);
		$this->load->view('blog');
		$this->load->view('footer');
	}

	public function blogger() {
		$data['title'] = 'Bloggers - TechBlog';
		$this->load->view('header' , $data);
		$this->load->view('bloggers');
		$this->load->view('footer');
	}

	public function contact() {
		$data['title'] = 'Contact - TechBlog';
		$this->load->view('header' , $data);
		$this->load->view('contact');
		$this->load->view('footer');
	}
}
?>