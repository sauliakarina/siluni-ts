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
		$this->db->select('jawaban, pilihan, COUNT(*) AS "num"');
		$this->db->where('jawaban_alumni.pertanyaanID', $pertanyaanID);
		$this->db->where('alumni.prodiID', $prodiID);
		$this->db->where('jawaban_alumni.jawaban !=', "");
		$this->db->join('pilihan_jawaban', 'jawaban_alumni.jawaban = pilihan_jawaban.pilihan', 'left');
		$this->db->join('alumni', 'jawaban_alumni.alumniID = alumni.id', 'left');
		$this->db->group_by('jawaban');
		$query = $this->db->get('jawaban_alumni');
		if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        };
	}

	public function get_info($id, $prodi=FALSE)
	{
		$this->db->select('jawaban, pilihan_jawaban, COUNT(*) AS "num" ');
		$this->db->where('hasil.id_pertanyaan', $id);
		$this->db->where('alumni.prodi', $prodi);
		$this->db->join('pilihan', 'hasil.jawaban = pilihan.id', 'left');
		$this->db->join('alumni', 'hasil.id_alumni = alumni.id_user', 'left');
		$this->db->group_by('jawaban');
		$query = $this->db->get('hasil');
		return $query->result();
	}

	public function getJawabanByPertanyaanTahun($pertanyaanID, $tahun_lulus){
      $this->db->select('
          jawaban_alumni.id AS id, jawaban_alumni.*, alumni.id AS alumniID, alumni.*
      ');
      $this->db->join('alumni', 'jawaban_alumni.alumniID = alumni.id');
      $this->db->from('jawaban_alumni');
      $this->db->where('jawaban_alumni.pertanyaanID',$pertanyaanID);
      $this->db->where('alumni.tahun_lulus',$tahun_lulus);
      $this->db->group_by('jawaban_alumni.alumniID');
      $query = $this->db->get();
      return $query->result();
  	}


	public function getJawabanByPertanyaanID($pertanyaanID){
      $this->db->select('
          jawaban_alumni.id AS id, jawaban_alumni.*, alumni.id AS alumniID, alumni.*
      ');
      $this->db->join('alumni', 'jawaban_alumni.alumniID = alumni.id');
      $this->db->from('jawaban_alumni');
      $this->db->where('jawaban_alumni.pertanyaanID',$pertanyaanID);
      $this->db->group_by('jawaban_alumni.alumniID');
      $query = $this->db->get();
      return $query->result();
  	}

  	public function getJawabanByAlumniPertanyaan($alumniID, $pertanyaanID){
  		$this->db->select('*');
		$this->db->where('alumniID',$alumniID);
		$this->db->where('pertanyaanID',$pertanyaanID);
		$this->db->where('jawaban !=',"");
		$query = $this->db->get('jawaban_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
  	}

  	function getPilihanJawabanByPertanyaanID($id)
	{
		$this->db->select('*');
		$this->db->where('pertanyaanID',$id);
		$query = $this->db->get('pilihan_jawaban');
		if($query->num_rows() > 0){
           foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
	}


}