<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommonModel extends CI_Model {
	function __construct(){
		parent::__construct();
	}
	//user table all col id=5 order by id desc
	function common_select($table,$field='*',$condition=false,$order_field=false,$sort="ASC"){
		$this->db->select($field);//"select * "
		$this->db->from($table);//" from user"
		//"select *  from user"
		if($condition)
			$this->db->where($condition); //" where id=5"
		//"select *  from user where id=5"
		if($order_field)
			$this->db->order_by($order_field,$sort); //"order by id desc"
			//"select *  from user where id=5 order by id desc"
		$rs=$this->db->get()->result();
		if($rs)
			return $rs;
		else
			return false;
	}

	function common_insert($table,$data){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	function single_retrive($table,$id){
		return $this->db->where('id',$id)->get($table)->row();
	}
	
	function common_update($table,$data,$con){
		$this->db->where($con)->update($table,$data);
		return $this->db->affected_rows();
	}

	function common_delete($table,$condition){
		$this->db->delete($table,$condition);
		return $this->db->affected_rows();
	}

	// public function student_update($id,$data){
	// 	$this->db->where('id',$id)->update('student_form',$data);
	// 	return $this->db->affected_rows();
	// }

}
