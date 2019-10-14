<?php 
 
class M_berita extends CI_Model{	

	public function __construct()
	 {
	  parent::__construct();
	 }

	function getBerita()
	{
		$this->db->select('*');
		$this->db->order_by('tanggal_dibuat', 'ASC');
		$query = $this->db->get('berita_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getBeritaSaya($userID)
	{
		$this->db->select('*');
		$this->db->order_by('id', 'ASC');
		$this->db->where('userID', $userID);
		$query = $this->db->get('berita_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getBeritaByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('berita_alumni');
		return $query->row();

	}

	
}