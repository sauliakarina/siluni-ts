<?php 
 
class M_dosen extends CI_Model{	

	public function __construct()
	 {
	  parent::__construct();
	       //$this->db2 = $this->load->database('db_dua', TRUE);
	 }

	function getDosen()
	{
		$this->db->select('*');
		//$this->db->where('status_dosen', 'aktif');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('dosen');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getDosenByUserID($userid)
	{
		$this->db->select('*');
		$this->db->where('userID',$userid);
		$query = $this->db->get('dosen');
		return $query->row();

	}


	
}