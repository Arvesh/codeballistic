<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* @author CodeBallistic Admin
*/
class Customer extends CI_Controller{
	
	function index(){
		$data = array();
		$data['main_content'] = 'customer';
		$this->load->view('includes/template',$data);
	}

	function login($data){
		
	}

	function logout(){
		
	}

	function project($id = ""){
		
	}

	function update_project($id,$data){
		
	}

	function update($data){
		
	}



}
