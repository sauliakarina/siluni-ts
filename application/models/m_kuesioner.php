<?php 
 
class M_kuesioner extends CI_Model{	
	public function __construct()
	 {
	  parent::__construct();
	 }

	function getKuesionerByCustomID($customID)
	{
		$this->db->select('*');
		$this->db->where('customID',$customID);
		$query = $this->db->get('kuesioner');
		return $query->row();

	}

	function getKuesionerByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('kuesioner');
		return $query->row();

	}

	
}