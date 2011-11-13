<?php

class Services extends CI_Controller {

		function index(){
		
			$data = array();
			$data['main_content'] = 'services';
			
			$this->load->model('site_model');
			
			
			if($query = $this->site_model->getContent($data['main_content'])){
				$data['records'] = $query;
				
				
			}
			$this->load->view('includes/template',$data);
			
		}
	
}