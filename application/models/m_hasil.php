<?php 
 
class M_hasil extends CI_Model{	

	public function __construct()
	 {
	  parent::__construct();
	 }

	 function getHorizontal($jawaban) {
		$this->db->select('*');
		$this->db->where('pertanyaanID', '2');
		$this->db->where('jawaban', $jawaban);
		$query = $this->db->get('jawaban_alumni');
		return $query->num_rows();

	}

	function getJumlahLulusanTahun($tahun_lulus, $prodiID) {
		$this->db->select('*');
		$this->db->where('tahun_lulus', $tahun_lulus);
		$this->db->where('prodiID', $prodiID);
		$query = $this->db->get('alumni');
		return $query->num_rows();

	}

	function getJumlahLulusan($tahun_lulus) {
		$this->db->select('*');
		$this->db->where('tahun_lulus', $tahun_lulus);
		/*$this->db->where('prodiID', $prodiID);*/
		$query = $this->db->get('alumni');
		return $query->num_rows();

	}

	

	function getFirstGaji($gaji, $prodiID) {
		$this->db->select('pekerjaan.id AS id_pekerjaan, pekerjaan.*, alumni.id AS id_alumni, alumni.*');
		$this->db->join('alumni', 'pekerjaan.id_alumni = alumni.id');
		$this->db->from('pekerjaan');
		$this->db->where('alumni.prodiID',$prodiID);
		$this->db->where('pekerjaan.firstPekerjaan','yes');
   		$this->db->where('pekerjaan.gaji', $gaji);
   		$query = $this->db->get();
		return $query->num_rows();
	}

	function getFirstGajiTahun($gaji, $prodiID, $tahun_lulus) {
		$this->db->select('pekerjaan.id AS id_pekerjaan, pekerjaan.*, alumni.id AS id_alumni, alumni.*');
		$this->db->join('alumni', 'pekerjaan.id_alumni = alumni.id');
		$this->db->from('pekerjaan');
		$this->db->where('alumni.prodiID',$prodiID);
		$this->db->where('alumni.tahun_lulus',$tahun_lulus);
		$this->db->where('pekerjaan.firstPekerjaan','yes');
   		$this->db->where('pekerjaan.gaji', $gaji);
   		$query = $this->db->get();
		return $query->num_rows();
	}


	function getFirstPekerjaan($alumniID) {
		$this->db->select('*');
		$this->db->where('id_alumni', $alumniID);
		$this->db->where('gaji !=', '0');
		$this->db->where('firstPekerjaan', 'yes');
		$query = $this->db->get('pekerjaan');
		return $query->row();

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
		$this->db->where('pilihan_jawaban.pertanyaanID', $pertanyaanID);
		$this->db->where('jawaban_alumni.jawaban !=', "");
		$this->db->where('jawaban_alumni.tambahanJawaban', "tidak");
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
		$this->db->where('pilihan_jawaban.pertanyaanID', $pertanyaanID);
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
		$this->db->where('pilihan_jawaban.pertanyaanID', $pertanyaanID);
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

	public function getHasilAlumniSkalaTahun($pertanyaanSkalaID, $prodiID, $tahun_lulus, $pertanyaanID)
	{
		$this->db->select('jawaban, nilai, COUNT(*) AS "num"');
		$this->db->where('jawaban_alumni.pertanyaanSkalaID', $pertanyaanSkalaID);
		$this->db->where('alumni.prodiID', $prodiID);
		$this->db->where('jawaban_alumni.jawaban !=', "");
		$this->db->where('skala_nilai.pertanyaanID', $pertanyaanID);
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

	public function getHasilAlumniSkala($pertanyaanSkalaID, $prodiID, $pertanyaanID)
	{
		$this->db->select('jawaban, nilai, COUNT(*) AS "num"');
		$this->db->where('jawaban_alumni.pertanyaanSkalaID', $pertanyaanSkalaID);
		$this->db->where('alumni.prodiID', $prodiID);
		$this->db->where('jawaban_alumni.jawaban !=', "");
		$this->db->where('skala_nilai.pertanyaanID', $pertanyaanID);
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

	public function getHasilPenggunaSkala($pertanyaanSkalaID, $prodiID, $pertanyaanID)
	{
		$this->db->select('jawaban, nilai, jawaban_pengguna.penggunaID AS idpengguna, pertanyaanSkalaID, COUNT(*) AS "num"');
		$this->db->where('jawaban_pengguna.pertanyaanSkalaID', $pertanyaanSkalaID);
		$this->db->where('pengguna.prodiID', $prodiID);
		$this->db->where('jawaban_pengguna.jawaban !=', "");
		$this->db->where('skala_nilai.pertanyaanID', $pertanyaanID);
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
		$this->db->select('pilihan');
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

	public function getDataDiri($prodiID){
  		$this->db->select('*');
		$this->db->where('prodiID',$prodiID);
		/*$this->db->where('toefl', "");
		$this->db->or_where('ipk', ""); */ 
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
  	}

  	//untuk get data gaji pertama not null
  	public function joinPekerjaanAlumni($prodiID){
  	$this->db->select('
          pekerjaan.id AS id_pekerjaan, pekerjaan.*, alumni.id AS id_alumni, alumni.*
      ');
      $this->db->join('alumni', 'pekerjaan.id_alumni = alumni.id');
      $this->db->from('pekerjaan');
      $this->db->where('alumni.prodiID',$prodiID);
      $this->db->where('pekerjaan.firstPekerjaan','yes');
       $this->db->where('pekerjaan.gaji !=', '');
      $query = $this->db->get();
      return $query->result();
  	}

  	//untuk get gaji pertama not null
  	public function joinPekerjaanAlumniTahun($prodiID, $tahun_lulus){
  	$this->db->select('
          pekerjaan.id AS id_pekerjaan, pekerjaan.*, alumni.id AS id_alumni, alumni.*
      ');
      $this->db->join('alumni', 'pekerjaan.id_alumni = alumni.id');
      $this->db->from('pekerjaan');
      $this->db->where('alumni.prodiID',$prodiID);
      $this->db->where('alumni.tahun_lulus',$tahun_lulus);
      $this->db->where('pekerjaan.firstPekerjaan','yes');
      $this->db->where('pekerjaan.gaji !=', '');
      $query = $this->db->get();
      return $query->result();
  	}

 public function getDataDiriTahun($prodiID, $tahun_lulus){
  		$this->db->select('*');
		$this->db->where('prodiID',$prodiID);
		$this->db->where('tahun_lulus',$tahun_lulus);
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
  	}

function getJawabanSkala($pertanyaanID, $prodiID, $pertanyaanSkalaID)
	{
		$this->db->select('jawaban_alumni.*, alumni.id AS id_alumni, alumni.*');
		$this->db->where('jawaban_alumni.pertanyaanID', $pertanyaanID);
		$this->db->where('jawaban_alumni.pertanyaanSkalaID', $pertanyaanSkalaID);
		$this->db->where('alumni.prodiID', $prodiID);
		$this->db->where('jawaban_alumni.jawaban !=', "");
		$this->db->join('alumni', 'jawaban_alumni.alumniID = alumni.id', 'left');
		$query = $this->db->get('jawaban_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	function getJawabanSkalaTahun($pertanyaanID, $prodiID, $tahun_lulus)
	{
		$this->db->select('jawaban_alumni.*, alumni.id AS id_alumni, alumni.*');
		$this->db->where('jawaban_alumni.pertanyaanID', $pertanyaanID);
		$this->db->where('jawaban_alumni.pertanyaanSkalaID', $pertanyaanSkalaID);
		$this->db->where('alumni.prodiID', $prodiID);
		$this->db->where('alumni.tahun_lulus', $tahun_lulus);
		$this->db->where('jawaban_alumni.jawaban !=', "");
		$this->db->join('alumni', 'jawaban_alumni.alumniID = alumni.id', 'left');
		$query = $this->db->get('jawaban_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	public function getNotifKuesionerAlumni($jenis_responden, $prodiID) {
		$this->db->select('notif_kuesioner.id AS notifID, notif_kuesioner.*, alumni.id AS id_alumni, alumni.*');
		$this->db->where('notif_kuesioner.jenis_kuesioner', $jenis_responden);
		$this->db->where('notif_kuesioner.prodiID', $prodiID);
		$this->db->join('alumni', 'notif_kuesioner.respondenID = alumni.id', 'left');
		//$this->db->group_by('notif_kuesioner.respondenID');
		$query = $this->db->get('notif_kuesioner');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	public function getNotifKuesionerPengguna($jenis_responden, $prodiID) {
		$this->db->select('notif_kuesioner.id AS notifID, notif_kuesioner.*, pengguna.id AS id_pengguna, pengguna.*');
		$this->db->where('notif_kuesioner.jenis_kuesioner', $jenis_responden);
		$this->db->where('notif_kuesioner.prodiID', $prodiID);
		$this->db->join('pengguna', 'notif_kuesioner.respondenID = pengguna.id', 'left');
		//$this->db->group_by('notif_kuesioner.respondenID');
		$query = $this->db->get('notif_kuesioner');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

}