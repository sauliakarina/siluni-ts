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

	function getFirstGaji($gaji) {
		$this->db->select('gaji');
		$this->db->where('gaji', $gaji);
		$this->db->where('firstPekerjaan', 'yes');
		$query = $this->db->get('pekerjaan');
		return $query->num_rows();

	}

	public function getProfilLulusan($profil, $prodiID)
	{
		$this->db->select('*');
		$this->db->where('pekerjaan.profil', $profil);
		$this->db->where('alumni.prodiID', $prodiID);
		$this->db->join('alumni', 'pekerjaan.id_alumni = alumni.id', 'left');
		$query = $this->db->get('pekerjaan');
		return $query->num_rows();
	}

	 function getSkalaInstansi($jawaban, $prodiID) {
		$this->db->select('*');
		$this->db->where('prodiID', $prodiID);
		$this->db->where('jenis_instansi', $jawaban);
		$query = $this->db->get('instansi');
		return $query->num_rows();
	}

	function get_where($table,$where){		
		return $this->db->get_where($table,$where);
	}

	 function getCountKuesioner($jenis_kuesioner, $prodiID) {
		$this->db->select('*');
		$this->db->where('jenis_kuesioner', $jenis_kuesioner);
		$this->db->where('prodiID', $prodiID);
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

	public function getHasilPengguna($pertanyaanID, $prodiID)
	{
		$this->db->select('jawaban, pilihan, COUNT(*) AS "num"');
		$this->db->where('jawaban_pengguna.pertanyaanID', $pertanyaanID);
		$this->db->where('pengguna.prodiID', $prodiID);
		$this->db->where('jawaban_pengguna.jawaban !=', "");
		$this->db->join('pilihan_jawaban', 'jawaban_pengguna.jawaban = pilihan_jawaban.pilihan', 'left');
		$this->db->join('pengguna', 'jawaban_pengguna.penggunaID = pengguna.id', 'left');
		$this->db->group_by('jawaban');
		$query = $this->db->get('jawaban_pengguna');
		if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        };
	}

	public function getHasilAlumniTahun($pertanyaanID, $prodiID, $tahun_lulus)
	{
		$this->db->select('jawaban, pilihan, COUNT(*) AS "num"');
		$this->db->where('jawaban_alumni.pertanyaanID', $pertanyaanID);
		$this->db->where('alumni.prodiID', $prodiID);
		$this->db->where('jawaban_alumni.jawaban !=', "");
		$this->db->where('alumni.tahun_lulus', $tahun_lulus);
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

	public function getHasilAlumniSkalaTahun($pertanyaanSkalaID, $prodiID, $tahun_lulus)
	{
		$this->db->select('jawaban, nilai, COUNT(*) AS "num"');
		$this->db->where('jawaban_alumni.pertanyaanSkalaID', $pertanyaanSkalaID);
		$this->db->where('alumni.prodiID', $prodiID);
		$this->db->where('jawaban_alumni.jawaban !=', "");
		$this->db->where('alumni.tahun_lulus', $tahun_lulus);
		$this->db->join('skala_nilai', 'jawaban_alumni.jawaban = skala_nilai.nilai', 'left');
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

	public function getHasilAlumniSkala($pertanyaanSkalaID, $prodiID)
	{
		$this->db->select('jawaban, nilai, COUNT(*) AS "num"');
		$this->db->where('jawaban_alumni.pertanyaanSkalaID', $pertanyaanSkalaID);
		$this->db->where('alumni.prodiID', $prodiID);
		$this->db->where('jawaban_alumni.jawaban !=', "");
		$this->db->join('skala_nilai', 'jawaban_alumni.jawaban = skala_nilai.nilai', 'left');
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

	public function getHasilPenggunaSkala($pertanyaanSkalaID, $prodiID)
	{
		$this->db->select('jawaban, nilai, COUNT(*) AS "num"');
		$this->db->where('jawaban_pengguna.pertanyaanSkalaID', $pertanyaanSkalaID);
		$this->db->where('pengguna.prodiID', $prodiID);
		$this->db->where('jawaban_pengguna.jawaban !=', "");
		$this->db->join('skala_nilai', 'jawaban_pengguna.jawaban = skala_nilai.nilai', 'left');
		$this->db->join('pengguna', 'jawaban_pengguna.penggunaID = pengguna.id', 'left');
		$this->db->group_by('jawaban');
		$query = $this->db->get('jawaban_pengguna');
		if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        };
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

  	public function getJawabanByPertanyaanSkalaTahun($pertanyaanSkalaID, $tahun_lulus){
      $this->db->select('
          jawaban_alumni.id AS id, jawaban_alumni.*, alumni.id AS alumniID, alumni.*
      ');
      $this->db->join('alumni', 'jawaban_alumni.alumniID = alumni.id');
      $this->db->from('jawaban_alumni');
      $this->db->where('jawaban_alumni.pertanyaanSkalaID',$pertanyaanSkalaID);
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

  	public function getJawabanPenggunaByPertanyaanID($pertanyaanID){
      $this->db->select('
          jawaban_pengguna.id AS id, jawaban_pengguna.*, pengguna.id AS penggunaID, pengguna.*
      ');
      $this->db->join('pengguna', 'jawaban_pengguna.penggunaID = pengguna.id');
      $this->db->from('jawaban_pengguna');
      $this->db->where('jawaban_pengguna.pertanyaanID',$pertanyaanID);
      $this->db->group_by('jawaban_pengguna.penggunaID');
      $query = $this->db->get();
      return $query->result();
  	}

  	public function getJawabanByPertanyaanSkalaID($pertanyaanSkalaID){
      $this->db->select('
          jawaban_alumni.id AS id, jawaban_alumni.*, alumni.id AS alumniID, alumni.*
      ');
      $this->db->join('alumni', 'jawaban_alumni.alumniID = alumni.id');
      $this->db->from('jawaban_alumni');
      $this->db->where('jawaban_alumni.pertanyaanSkalaID',$pertanyaanSkalaID);
      $this->db->group_by('jawaban_alumni.alumniID');
      $query = $this->db->get();
      return $query->result();
  	}

  	public function getJawabanPenggunaByPertanyaanSkalaID($pertanyaanSkalaID){
      $this->db->select('
          jawaban_pengguna.id AS id, jawaban_pengguna.*, pengguna.id AS penggunaID, pengguna.*
      ');
      $this->db->join('pengguna', 'jawaban_pengguna.penggunaID = pengguna.id');
      $this->db->from('jawaban_pengguna');
      $this->db->where('jawaban_pengguna.pertanyaanSkalaID',$pertanyaanSkalaID);
      $this->db->group_by('jawaban_pengguna.penggunaID');
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

  	public function getJawabanByAlumniPertanyaanSkala($alumniID, $pertanyaanSkalaID){
  		$this->db->select('*');
		$this->db->where('alumniID',$alumniID);
		$this->db->where('pertanyaanSkalaID',$pertanyaanSkalaID);
		$this->db->where('jawaban !=',"");
		$query = $this->db->get('jawaban_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
  	}

  	public function getJawabanByPenggunaPertanyaan($penggunaID, $pertanyaanID){
  		$this->db->select('*');
		$this->db->where('penggunaID',$penggunaID);
		$this->db->where('pertanyaanID',$pertanyaanID);
		$this->db->where('jawaban !=',"");
		$query = $this->db->get('jawaban_pengguna');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
  	}

  	public function getJawabanByPenggunaPertanyaanSkala($penggunaID, $pertanyaanSkalaID){
  		$this->db->select('*');
		$this->db->where('penggunaID',$penggunaID);
		$this->db->where('pertanyaanSkalaID',$pertanyaanSkalaID);
		$this->db->where('jawaban !=',"");
		$query = $this->db->get('jawaban_pengguna');
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

	function getSkalaByPertanyaanID($id)
	{
		$this->db->select('*');
		$this->db->where('pertanyaanID',$id);
		$query = $this->db->get('skala_nilai');
		if($query->num_rows() > 0){
           foreach($query->result() as $data){
                $hasil[] = $data;
            }
            return $hasil;
        }
	}


}