<?php 
 
class M_user extends CI_Model{	
	public function __construct()
	 {
	  parent::__construct();
	  //$this->db2 = $this->load->database('db_dua', TRUE);
	 }

	function cekData($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	
}