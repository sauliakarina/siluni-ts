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

	function cekSkalaLikert($id)
	{
		$this->db->select('*');
		$this->db->where('pertanyaanID',$id);
		$this->db->order_by('id','ASC');
		$query = $this->db->get('skala_nilai');
		return $query->row();

	}

	function getPertanyaanByCustomID($customID)
	{
		$this->db->select('*');
		$this->db->where('customID',$customID);
		$this->db->where('isDelete','no');
		$query = $this->db->get('pertanyaan');
		return $query->row();

	}

	function getJawabanAlumni($pertanyaanID, $alumniID)
	{
		$this->db->select('*');
		$this->db->where('pertanyaanID',$pertanyaanID);
		$this->db->where('notifID',$alumniID);
		$query = $this->db->get('jawaban_alumni');
		return $query->row();

	}

	function getJawabanSkalaAlumni($pertanyaanSkalaID, $alumniID)
	{
		$this->db->select('*');
		$this->db->where('pertanyaanSkalaID',$pertanyaanSkalaID);
		$this->db->where('notifID',$alumniID);
		$query = $this->db->get('jawaban_alumni');
		return $query->row();

	}

	function getJawabanGandaAlumni($pertanyaanID, $alumniID)
	{
		$this->db->select('*');
		$this->db->where('pertanyaanID',$pertanyaanID);
		$this->db->where('notifID',$alumniID);
		$query = $this->db->get('jawaban_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}


	function getKuesionerAlumni($prodiID)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$prodiID);
		$this->db->where('responden','alumni');
		$this->db->where('status','aktif');
		$this->db->where('isDelete','no');
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get('kuesioner');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	//tampilin kuesioner aktif dan non aktif
	function getKuesionerAlumniAdmin($prodiID)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$prodiID);
		$this->db->where('responden','alumni');;
		$this->db->where('isDelete','no');
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get('kuesioner');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	function getJawabanPengguna($pertanyaanID, $penggunaID)
	{
		$this->db->select('*');
		$this->db->where('pertanyaanID',$pertanyaanID);
		$this->db->where('notifID',$penggunaID);
		$query = $this->db->get('jawaban_pengguna');
		return $query->row();

	}

	function getJawabanSkalaPengguna($pertanyaanSkalaID, $penggunaID)
	{
		$this->db->select('*');
		$this->db->where('pertanyaanSkalaID',$pertanyaanSkalaID);
		$this->db->where('notifID',$penggunaID);
		$query = $this->db->get('jawaban_pengguna');
		return $query->row();

	}

	function getJawabanGandaPengguna($pertanyaanID, $penggunaID)
	{
		$this->db->select('*');
		$this->db->where('pertanyaanID',$pertanyaanID);
		$this->db->where('notifID',$penggunaID);
		$query = $this->db->get('jawaban_pengguna');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}


	function getKuesionerPenggunaByProdi($prodiID)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$prodiID);
		$this->db->where('responden','pengguna');
		$this->db->where('status','aktif');
		$this->db->where('isDelete','no');
		$query = $this->db->get('kuesioner');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	//tampilin kuesioner aktif dan non aktif
	function getKuesionerPenggunaAdmin($prodiID)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$prodiID);
		$this->db->where('responden','pengguna');
		$this->db->where('isDelete','no');
		$query = $this->db->get('kuesioner');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	function getKuesionerPengguna($prodiID)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$prodiID);
		$this->db->where('responden','Pengguna');
		$this->db->where('isDelete','no');
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get('kuesioner');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	function getKuesionerByResponden($responden, $prodiID)
	{
		$this->db->select('*');
		$this->db->where('responden',$responden);
		$this->db->where('status','aktif');
		$this->db->where('isDelete','no');
		$this->db->where('prodiID', $prodiID);
		$query = $this->db->get('kuesioner');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	function getPertanyaanByKuesionerID($id)
	{
		$this->db->select('*');
		$this->db->where('kuesionerID',$id);
		$this->db->where('isDelete','no');
		$query = $this->db->get('pertanyaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	function getPertanyaanNonSkalaByKuesionerID($id)
	{
		$this->db->select('*');
		$this->db->where('kuesionerID',$id);
		$this->db->where('isDelete','no');
		$this->db->where('jenis !=','skala');
		$query = $this->db->get('pertanyaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}


	function getPertanyaanAlumniByJenis($jenis)
	{
		$this->db->select('*');
		$this->db->where('jenis',$jenis);
		$this->db->where('isDelete','no');
		$query = $this->db->get('pertanyaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	function getPertanyaanByKuesionerIDNonSkala($id)
	{
		$this->db->select('*');
		$this->db->where('kuesionerID',$id);
		$this->db->where('isDelete','no');
		$this->db->where('jenis !=','skala');
		$query = $this->db->get('pertanyaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	function getPertanyaanByKuesionerIDSkala($id)
	{
		$this->db->select('*');
		$this->db->where('kuesionerID',$id);
		$this->db->where('isDelete','no');
		$this->db->where('jenis','skala');
		$query = $this->db->get('pertanyaan');
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
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	function getSkalaByPertanyaanID($id)
	{
		$this->db->select('*');
		$this->db->where('pertanyaanID',$id);
		$query = $this->db->get('skala_nilai');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	function getPertanyaanSkalaByPertanyaanID($id)
	{
		$this->db->select('*');
		$this->db->where('pertanyaanID',$id);
		$query = $this->db->get('pertanyaan_skala');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}



	function getPertanyaanSkalaByPertanyaan($pertanyaan)
	{
		$this->db->select('*');
		$this->db->where('pertanyaan',$pertanyaan);
		$query = $this->db->get('pertanyaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	function getPertanyaanSkalaByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('pertanyaan_skala');
		return $query->row();
	}


	function deletePilihan($id)
	{
		return $this->db->delete('pilihan_jawaban', array('pertanyaanID' => $id));
	}

	function deletePilihanByID($id)
	{
		return $this->db->delete('pilihan_jawaban', array('id' => $id));
	}

	function getPertanyaanByID($id)
	{
		return $this->db->get_where('pertanyaan', array('id' => $id))->row();
	}


	function getPertanyaanByPertanyaanID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('pertanyaan');
		return $query->row();

	}

	function getKuesionerIDFromPertanyaanID($id)
	{
		$this->db->select('kuesionerID');
		$this->db->where('id',$id);
		$query = $this->db->get('pertanyaan');
		return $query->row();

	}
	
}