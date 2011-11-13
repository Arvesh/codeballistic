<?php

class Site_model extends CI_Model{

	function getContent($page_name){
	
		$this->db->select('id,name,content1,content2,content3,status');
		$this->db->where('name',$page_name);
		$this->db->where('status','available');
		$query = $this->db->get('tbl_pages');
		if($query->result()){
			return $query->result();
		}
	}
}