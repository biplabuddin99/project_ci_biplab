<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormModel extends CI_Model {
	function __construct(){
		parent::__construct();
	}

	public function retrive(){
		return $this->db->get('student_form')->result();
	}
	public function create($data){
		return $this->db->insert('student_form',$data);
	}
	public function single_retrive($id){
		return $this->db->where('id',$id)->get('student_form')->row();
	}
	public function update($id,$data){
		$this->db->where('id',$id)->update('student_form',$data);
		return $this->db->affected_rows();
	}
}
