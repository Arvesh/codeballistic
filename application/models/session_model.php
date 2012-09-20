<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* @author CodeBallistic Admin
*/
class Session_model extends CI_Model
{
	/*====================SETTING THE SESSION ONCE USER LOGS IN====================*/
	function set_session($data)
	{
		$newdata = array(
						'customer_id' => $data['customer_id'],
						'username' => $data['customer_username'], 
						'email'=> $data['customer_email'],
						'logged_in' = $data['logged_in']
						);

		$this->session->set_userdata($newdata);
	}


	
/*========================CHECKING IF USER IS LOGGED IN========================*/

	function is_logged_in(){

		if(!empty($this->session->userdata('logged_in'))){

			return $this->session->userdata('logged_in');
			
		}else{
			return false;
		}
	}


/*==============================RETRIEVING SESSION DATA====================*/
	function get_session($key=''){

		if ($key!=null) {

			return $this->session->userdata($key);

		} else {

			return $this->session->all_userdata();

		}

	}

/*=============================UNSETTING THE SESSION UPON LOGOUT======================*/

	function unset_session(){

		$item = array('customer_id' => '','username'=>'','email'=>'','logged_in'=>'' );

		if ($this->session->unset_userdata($item)) {
			return true;
		} else {
			return false;
		}
		
	}
}
?>