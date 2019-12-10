<?php 
 
class M_hasil extends CI_Model{	

	public function __construct()
	 {
	  parent::__construct();
	 }

	 function getHorizontal($jawaban) {
		$this->db->select('*');
		$this->db->where('pertanyaanID', '60');
		$this->db->where('jawaban', $jawaban);
		$query = $this->db->get('jawaban_alumni');
		return $query->num_rows();

	}

	function get_where($table,$where){		
		return $this->db->get_where($table,$where);
	}

	 function getCountKuesioner($jenis_kuesioner) {
		$this->db->select('*');
		$this->db->where('jenis_kuesioner', $jenis_kuesioner);
		$this->db->where('new', '0');
		$query = $this->db->get('notif_kuesioner');
		return $query->num_rows();

	}	

}