<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormCtrl extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('FormModel','fm');
		$this->load->helper('form');
	}

		// Admission
		public function index(){
			$data['student']=$this->fm->retrive();
			$this->load->view('form/index',$data);
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
				$this->load->view('form/create');
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
				if($this->fm->create($st)){
					$this->session->set_flashdata('msg','<b class="text-success">Data saved</b>');
					redirect('stulist');
				}else{
					$this->session->set_flashdata('msg','<b class="text-danger">Please Try Again</b>');
					$this->load->view('form/create');
				}
			}
		}

		// update
		// public function update($id){
		// 	$this->load->helper('form');
		// 	$this->load->library('form_validation');

		// }
		// public function update($id){
		// 	$this->load->helper('form');
		// 	$this->load->library('form_validation');
		// 	$this->form_validation->set_rules('name','Full Name','required');
		// 	$this->form_validation->set_rules('contact','Contact','required');
		// 	$this->form_validation->set_rules('address','Address','required');
		// 	if($this->form_validation->run() == FALSE){
		// 		$data['practice']=$this->mo->single_retrive($id);
		// 		$this->load->view('student/edit',$data);
		// 	}else{
		// 		$st['name']=$this->input->post('name');
		// 		$st['phone']=$this->input->post('contact');
		// 		$st['user_email']=$this->input->post('email');
		// 		$st['address']=$this->input->post('address');
		// 		if($this->mo->update($id,$st)){
		// 			$this->session->set_flashdata('msg','<b class="text-success">Data Updated</b>');
		// 			redirect('student');
		// 		}else{
		// 			$this->session->set_flashdata('msg','<b class="text-danger">Please Try Again</b>');
		// 			$this->load->view('student/edit'.$id);
		// 		}
		// 	}
		// }
		
}
