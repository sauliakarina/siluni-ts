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

	
}