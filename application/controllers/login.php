<?php


class login extends CI_Controller{

	public function index(){
		$data['title'] = "Welcome to Online Course Portal";
		$data['main_content'] = "login";
		$this->load->view('includes/template',$data);
	}


	public function validate_credentials(){

		$this->load->model('user_model');
		$query = $this->user_model->validate();

		if($query){

			$data = array(

				"username" => $this->input->post('username'),
				"is_logged_ind" => true

				);

			$this->session->set_userdata($data);
			redirect('home');

		}else{
			redirect('login');
		}

 
	}


	public function signup(){

		$this->load->model('course_model');
		$courses = $this->course_model->getCourse();

		$data['title'] = "Registration";
		$data['main_content'] = "signup";
		$data['courses'] = $courses;
		$this->load->view('includes/template',$data);

	}

	public function create_member(){

		$this->load->library('form_validation');


		$this->form_validation->set_rules('first_name','First Name','trim|required');
		$this->form_validation->set_rules('last_name','Last Name','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[4]|min_length[32]');
		$this->form_validation->set_rules('password2','Password validate','trim|matches[password]');

		if($this->form_validation->run() == FALSE){

			$this->signup();

		}


	}





}