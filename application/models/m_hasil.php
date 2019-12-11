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

	public function getHasilAlumni($pertanyaanID, $prodiID)
	{
		$this->db->select('jawaban_alumni.*, alumni.*, pilihan_jawaban.*,  COUNT(*) AS "num"');
		$this->db->where('jawaban_alumni.pertanyaanID', $pertanyaanID);
		$this->db->where('alumni.prodiID', $prodiID);
		$this->db->join('pilihan_jawaban', 'jawaban_alumni.jawaban = pilihan_jawaban.id', 'left');
		$this->db->join('alumni', 'jawaban_alumni.alumniID = alumni.id', 'left');
		$this->db->group_by('jawaban');
		$query = $this->db->get('jawaban_alumni');
		return $query->result();
	}

	public function getJawabanByPertanyaanID($pertanyaanID){
      $this->db->select('
          jawaban_alumni.id AS id, jawaban_alumni.*, alumni.id AS alumniID, alumni.*
      ');
      $this->db->join('alumni', 'jawaban_alumni.alumniID = alumni.id');
      $this->db->from('jawaban_alumni');
      $this->db->where('jawaban_alumni.pertanyaanID',$pertanyaanID);
      $query = $this->db->get();
      return $query->result();
  	}

}