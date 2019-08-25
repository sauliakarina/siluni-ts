<?php 
 
class M_master extends CI_Model{	

	public function __construct()
	 {
	  parent::__construct();
	  //$this->db2 = $this->load->database('db_dua', TRUE);
	 }

	function getProdi()
	{
		$this->db->select('*');
		$query = $this->db->get('prodi');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getProdiByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('prodi');
		return $query->row();

	}

	function getUserByUsername($username)
	{
		$this->db->select('*');
		$this->db->where('username',$username);
		$query = $this->db->get('user');
		return $query->row();

	}

	function inputData($data,$table){
		$this->db->insert($table,$data);
	}

	
}