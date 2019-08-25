<?php 
 
class M_alumni extends CI_Model{	

	public function __construct()
	 {
	  parent::__construct();
	  //$this->db2 = $this->load->database('db_dua', TRUE);
	 }

	function getAlumniByUserID($userid)
	{
		$this->db->select('*');
		$this->db->where('userID',$userid);
		$query = $this->db->get('alumni');
		return $query->row();

	}

	function getAlumni()
	{
		$this->db->select('*');
		$this->db->where('status', 'aktif');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}


	function getAlumniByProdi($prodiID)
	{
		$this->db->select('*');
		$this->db->where('status', 'aktif');
		$this->db->where('prodiID', $prodiID);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	
}