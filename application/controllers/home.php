<?php



class home extends CI_Controller{

	public function index(){
		$data['title'] = "Welcome ".$this->input->post('username');
		$data['main_content'] = "home";
		$this->load->view('includes/template',$data);
	}

}