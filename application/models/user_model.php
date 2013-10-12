<?php


class user_model extends CI_Model{



	function validate(){
		
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('user');

		$res = $query->result();

		if($query->num_rows == 1 && $res[0]->status == 1 ){
			return true;
		}else{
			return false;
		}	


	}

	function create_member(){


		$status = 0;

		if($this->input->post('user_type') == 1){
			$status =1;
		}


		$user_data = array(

				"username"=>$this->input->post('username'),
				"password"=>md5($this->input->post('password')),
				"email"=>$this->input->post('email'),
				"user_type_id"=>$this->input->post('user_type'),
				"course_id"=>$this->input->post('course'),
				"status"=>$status

			);	

		$insert = $this->db->insert('user',$user_data);
		
		$query = $this->db->get_where('user', array('username' => $this->input->post('username')));
		$id = $query->result();


		$personal_info = array(

			"gender"=>$this->input->post("gender"),
			"contact_number"=>$this->input->post("contact_number"),
			"first_name"=>$this->input->post("first_name"),
			"last_name"=>$this->input->post("last_name"),
			"user_id"=>$id[0]->id
		);

		$insert_personal_info = $this->db->insert('personal_info',$personal_info);

		return TRUE;


	}






}