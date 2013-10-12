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

	public function users(){

		$crud = new grocery_CRUD();

        $crud->set_table('user');
        $crud->set_theme('datatables');
        $crud->set_subject('User');

        $crud->unset_columns('password');
        $crud->unset_fields('password','username','email','date_created','user_type_id');
        $crud->unset_add();

        $crud->set_relation('user_type_id','user_type','name');
        $crud->display_as('user_type_id','User type');


        $crud->set_relation('course_id','course','title');
        $crud->display_as('course_id','Course');

        $crud->set_relation('status_id','status','name');
		$crud->display_as('status_id','status');

        $output = $crud->render();

        $this->load->view('admin_user_control',$output);

    }

    public function course(){

    	$crud = new grocery_CRUD();

    	$crud->set_table('course');
    	$crud->set_theme('datatables');
    	$crud->set_subject('Course');

    	$output = $crud->render();
    	$this->load->view('admin_user_control',$output);



    }



}