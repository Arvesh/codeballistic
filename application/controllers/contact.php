<?php

class Contact extends CI_Controller {

	function index(){
		
		
			$data = array();//declared here if ever nothing is returned in the query then data will still be an array.
			
			$data['main_content'] = 'contact';
			
			$this->load->model('site_model');
			
			
			if($query = $this->site_model->getContent($data['main_content'])){
				$data['records'] = $query;
			}
			
			$this->load->view('includes/template',$data);
	}
	
	function submit(){
		
	
		//capturing data posted from contact form
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$message = $this->input->post('message');
		$subject = $this->input->post('subject');
		
		
		
			//Loading form validation library
			
		$this->load->library('form_validation');
		
		
		//field name, error , rules
		//performing checks
		
		$this->form_validation->set_rules('name','Name','trim|required');
		$this->form_validation->set_rules('subject','Subject','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('message','Message','trim|required');
		
		if($this->form_validation->run()==FALSE){
		
			//redirect to contact form if error in data posted.
			
			$this->index();
			
		}else{
		
		//Sending mail to codeballistic's admins.
		
			$this->email->from($email,$name);
			$this->email->to('arvesh9@gmail.com');
			$this->email->subject($subject);
			$this->email->message($message);
			$this->email->send();
			
			//redirect to 'thanks you' page.
			
			$data['main_content'] = 'contact_submitted';
			$this->load->view('includes/template',$data);
		}
		
	}
	
}

