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

	public function cekDosen($nidn){
		$this->db->where('nidn', $nidn);
		return $this->db->get('dosen');
	}

	function getDosenByUserID($userid)
	{
		$this->db->select('*');
		$this->db->where('userID',$userid);
		$query = $this->db->get('dosen');
		return $query->row();

	}

	function getDosenByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('dosen');
		return $query->row();

	}


	function getKoorByProdiID($prodiID)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$prodiID);
		$this->db->where('jabatan','koorprodi');
		$query = $this->db->get('dosen');
		return $query->row();

	}

	function getDosenByProdiID($prodiID)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$prodiID);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('dosen');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}


	
}