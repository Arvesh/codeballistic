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
		
		

			/*custom mail configs respective to server*/
			$config['protocol'] = 'sendmail';
			$config['mailpath'] = '/usr/sbin/sendmail';
			$config['charset'] = 'utf-8';
			$config['wordwrap'] = TRUE;


			/*switch case to values caught from the dropdown list and reformating */

			switch ($subject) {
				case 'mobileapp':
					$subject = 'Mobile App Development';
					break;

				case 'webapp':
					$subject = 'Web App Development';
					break;

				case 'ecommerce':
					$subject = 'E-commerce Website';
					break;

				case 'webdesignCMS':
					$subject = 'Web Design / CMS';
					break;

				case 'others':
					$subject = 'Others';
					break;

				default:
					break;
			}

			/*initialize mail with custom configs*/
			$this->email->initialize($config);
		
			$this->email->from($email,$name);
			$this->email->to(CONTACT_EMAIL);
			$this->email->subject($subject);
				$this->email->message($message);

			//Sending mail to codeballistic's admins.
			$this->email->send();
			
			
			/*set confirmation msg*/
			$this->session->set_flashdata(
				'success', 
				"<h1>Thank You for contacting us.</h1><h4>We will get back to you as soon as possible.</h4>"
			);
			/*redirect with confirmation msg.*/
			redirect('contact');
		}
		
	}
	
}

