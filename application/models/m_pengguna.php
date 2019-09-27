<?php 
 
class M_pengguna extends CI_Model{	

	public function __construct()
	 {
	  parent::__construct();
	 }

	function getPenggunaByInstansiID($id_instansi)
	{
		$this->db->select('*');
		$this->db->where('id_instansi', $id_instansi);
		$query = $this->db->get('pengguna');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getPenggunaByEmail($email)
	{
		$this->db->select('*');
		$this->db->where('email',$email);
		$query = $this->db->get('pengguna');
		return $query->row();

	}

	


	
}