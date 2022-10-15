<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthCtrl extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('CommonModel','cm');
		$this->load->helper('form');
	}

	public function register(){
		$data['role']=$this->cm->common_select('tbl_role');
		$this->load->view('auth/register',$data);
	}

	public function store(){
		/* load helper and library */
		$this->load->library('form_validation');

		/* set validatin */
		$this->form_validation->set_rules('role', 'Role', 'required');
		$this->form_validation->set_rules('name', 'Full Name', 'required');
		$this->form_validation->set_rules('contact', 'Contact No', 'required|is_unique[tbl_auth.contact_no]');
		$this->form_validation->set_rules('uname', 'User Name', 'required|is_unique[tbl_auth.username]');
		$this->form_validation->set_rules('email', 'Email Address', 'required|valid_email|is_unique[tbl_auth.email_address]');
		$this->form_validation->set_rules('pswd', 'Password', 'required|min_length[6]|max_length[20]');
		$this->form_validation->set_rules('cpswd', 'Confirm Password', 'required|matches[pswd]');

		if ($this->form_validation->run() == FALSE){
            $data['role']=$this->cm->common_select('tbl_role');
			$this->load->view('auth/register',$data);
        }else{

			$ud['role_id']=$this->input->post('role');
			$ud['name']=$this->input->post('name');
			$ud['username']=$this->input->post('uname');
			$ud['contact_no']=$this->input->post('contact');
			$ud['email_address']=$this->input->post('email');
			$ud['password']=sha1(md5($this->input->post('pswd')));
			$ud['status']=1;
			$ud['created_at']=date('Y-m-d H:i:s');

			if($this->cm->common_insert('tbl_auth',$ud)){
				$this->session->set_flashdata('msg','<b class="text-success">Data saved</b>');
				redirect('login');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
				redirect('register');
			}
            
        }
	}

	function login(){
		$this->load->view('auth/login');
	}

	function login_check(){
		/* load helper and library */
		$this->load->library('form_validation');

		/* set validatin */
		$this->form_validation->set_rules('euc', 'Email/Username/Contact No', 'required');
		$this->form_validation->set_rules('pswd', 'Confirm Password', 'required');

		if ($this->form_validation->run() == FALSE){
            $this->load->view('auth/login');
        }else{
			$euc=$this->input->post('euc');
			$password=sha1(md5($this->input->post('pswd')));

			$this->db->where('password',$password);
			/* group all where condition */

			$this->db->group_start();
			$this->db->where('username',$euc)
			->or_where('email_address',$euc)
			->or_where('contact_no',$euc);
        	$this->db->group_end();

			
			$d=$this->db->get('tbl_auth')->row();


			if($d){
				$this->session->set_userdata('ud',$d);
				redirect('dashboard');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">User name or password is not correct</b>');
				redirect('login');
			}
            
        }
	}
	
	
	public function logout(){
		session_destroy();
		redirect('login');
	}
	
	public function lock(){
		session_destroy();
		redirect('login');
	}
// authentication
	public function auth_retrive()
	{
		$data['auth_user']=$this->cm->common_select('tbl_auth');
		//$data['auth_user']= $this->um->get_LoggedIn_user();
		// $data['page']="users/index";
		$this->load->view('auth/auth_index',$data);
	}


	// Admission
	public function index(){
		$data['student']=$this->cm->common_select('student_form');
		$this->load->view('student/index',$data);
	}

	public function admission_create(){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Full Name','required');
		$this->form_validation->set_rules('father_name','Father Name','required');
		$this->form_validation->set_rules('mother_name','Mother Name','required');
		$this->form_validation->set_rules('contact','Contact','required');
		$this->form_validation->set_rules('ad_class','Class','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('blood_group','Blood Group','required');
		$this->form_validation->set_rules('section','Section','required');
		$this->form_validation->set_rules('shift','Shift','required');
		$this->form_validation->set_rules('birthday','Birthday','required');
		$this->form_validation->set_rules('religion','Religion','required');
		if($this->form_validation->run() == FALSE){
			$this->load->view('student/create_stu');
		}else{
			$st['name']=$this->input->post('name');
			$st['father_name']=$this->input->post('father_name');
			$st['mother_name']=$this->input->post('mother_name');
			$st['contact']=$this->input->post('contact');
			$st['ad_class']=$this->input->post('ad_class');
			$st['address']=$this->input->post('address');
			$st['gender']=$this->input->post('gender');
			$st['blood_group']=$this->input->post('blood_group');
			$st['section']=$this->input->post('section');
			$st['shift']=$this->input->post('shift');
			$st['birthday']=$this->input->post('birthday');
			$st['religion']=$this->input->post('religion');
			if($this->cm->common_insert('student_form',$st)){
				$this->session->set_flashdata('msg','<b class="text-success">Data saved</b>');
				redirect('admission');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try Again</b>');
				$this->load->view('student/create_stu');
			}
		}
	}
	public function update($id){
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name','Full Name','required');
		$this->form_validation->set_rules('father_name','Father Name','required');
		$this->form_validation->set_rules('mother_name','Mother Name','required');
		$this->form_validation->set_rules('contact','Contact','required');
		$this->form_validation->set_rules('ad_class','Class','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('blood_group','Blood Group','required');
		$this->form_validation->set_rules('section','Section','required');
		$this->form_validation->set_rules('shift','Shift','required');
		$this->form_validation->set_rules('birthday','Birthday','required');
		$this->form_validation->set_rules('religion','Religion','required');
		if($this->form_validation->run() == FALSE){
			$data['students']=$this->cm->single_retrive('student_form',$id);
			// $data['page']="student/edit";
			$this->load->view('student/edit',$data);
		}else{
			$st['name']=$this->input->post('name');
			$st['father_name']=$this->input->post('father_name');
			$st['mother_name']=$this->input->post('mother_name');
			$st['contact']=$this->input->post('contact');
			$st['ad_class']=$this->input->post('ad_class');
			$st['address']=$this->input->post('address');
			$st['gender']=$this->input->post('gender');
			$st['blood_group']=$this->input->post('blood_group');
			$st['section']=$this->input->post('section');
			$st['shift']=$this->input->post('shift');
			$st['birthday']=$this->input->post('birthday');
			$st['religion']=$this->input->post('religion');
			$con['id']=$this->input->post('id');

			if($this->cm->common_update('student_form',$st,$con)){
				$this->session->set_flashdata('msg','<b class="text-success">Data updated</b>');
				redirect('admission');
			}else{
				$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
				$this->load->view('student/edit/'.$id);
			}
		}
	}
	public function destroy($id){
		$condition['id']=$id;
		if($this->cm->common_delete('student_form',$condition)){
			$this->session->set_flashdata('msg','<b class="text-success">Data deleted</b>');
		}else{
			$this->session->set_flashdata('msg','<b class="text-danger">Please Try again</b>');
		}
		redirect('admission');	
	}
	
}
