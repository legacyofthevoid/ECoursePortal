<?php



class home extends CI_Controller{


	function __construct(){

		parent::__construct();
		$this->is_logged_in();

	}



	public function index(){
		$data['title'] = "Welcome ".$this->input->post('username');
		$data['main_content'] = "home";
		$this->load->view('includes/template',$data);
	}

	function is_logged_in(){

		$is_logged_in = $this->session->userdata('is_logged_in');

		if(!isset($is_logged_in) || $is_logged_in != true){

			echo "you're not permitted here. please log in";

		}



	}


}