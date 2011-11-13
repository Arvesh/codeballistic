<?php

class Register extends CI_Controller {

	function index(){
	
		$data['main_content'] = 'register_view';
		
		$this->load->view('includes/template',$data);
	}
	
	
	function submit(){
	
		/* first_name,last_name,username,password,email,street,town,district */
		
		$first_name = $this->input->post('first_name');
		$last_name = $this->input->post('last_name');
		$gender = $this->input->post('gender');
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
		$email = $this->input->post('email');
		$street = $this->input->post('street');
		$town = $this->input->post('town');
		$district = $this->input->post('district');
		
		//Loading form validation library
			
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('first_name','First name','trim|required');
		$this->form_validation->set_rules('last_name','Last name','trim|required');
		$this->form_validation->set_rules('username','Username','trim|required|min_length[6]|max_length[12]');
		$this->form_validation->set_rules('password','trim|required|min_length[6]|max_length[12]|matches[cpassword]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('street','Street','trim|required');
		$this->form_validation->set_rules('town','Town','trim|required');
		$this->form_validation->set_rules('district','District','trim|required');
		
		if($this->form_validation->run()==FALSE){
			$this->index();
		}else{
		
			/*
			==================================================
			-----------------------------------------------HEADER---------------------------------
			==================================================
			
			
			CODES IN HERE 
			
			
			==================================================
			-----------------------------------------------END---------------------------------
			==================================================
			*/
			
			echo 'registered';
		}
		
	}
}