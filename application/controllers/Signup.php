<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Signup_model');
        $this->load->model('Dashboard_model');
	}
	public function index() {

		$data['title'] = 'Signup - TechBlog';
        $data['is_user_loggedin'] = $this->session->userdata('is_user_loggedin');
        $data['category'] = $this->Dashboard_model->get_category();
		$this->load->view('header' , $data);
		$this->load->view('signup');
		$this->load->view('footer');
	}

	public function Register() {

        $config['upload_path'] = './uploads/images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $_FILES['image']['name'];

        $this->load->library('upload', $config);
        $this->upload->do_upload('image');
        $uploadData = $this->upload->data();
        $profile_img = $uploadData['file_name'];

        $data = array(
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('pass')),
            'twitter' => $this->input->post('twitter'),
            'facebook' => $this->input->post('facebook'),
            'linkedin' => $this->input->post('linkedin'),
            'instagram' => $this->input->post('instagram'),
            'img' => $profile_img,
            'created_date' =>date("Y-m-d")
        );
        $email=$this->input->post('email');
        $result = $this->Signup_model->get_data($email);
        if($result) {
            $data['error'] = "<h3 style='color:red'>User already exist.</h3>";
            $data['title'] = 'Signup - TechBlog';
            $data['category'] = $this->Dashboard_model->get_category();
            $this->load->view('header' , $data);
            $this->load->view('signup');
            $this->load->view('footer');


        } else {
            $this->Signup_model->set_data($data);
            redirect('/Login');
        }
	}

}
?>