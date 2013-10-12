<?php


class course_model extends CI_Model{



	function getCourse(){	
		$query = $this->db->get('course');
		return $query->result();
	}
}