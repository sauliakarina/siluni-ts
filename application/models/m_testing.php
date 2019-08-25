<?php 

class M_testing extends CI_Model{


 public function __construct()
 {
  parent::__construct();
       $this->db2 = $this->load->database('db_dua', TRUE);
 }

	function tampil_data(){
		return $this->db->get('user');
	}

	function tampil_data_dua(){
		return $this->db2->get('tb_user');
	}
}