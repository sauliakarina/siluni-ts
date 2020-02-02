<?php 
 
class M_alumni extends CI_Model{	

	public function __construct()
	 {
	  parent::__construct();
	  //$this->db2 = $this->load->database('db_dua', TRUE);
	 }

	function getAlumniByUserID($userid)
	{
		$this->db->select('*');
		$this->db->where('userID',$userid);
		$query = $this->db->get('alumni');
		return $query->row();

	}

	function getAlumniByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('alumni');
		return $query->row();

	}

	function getAlumni($prodiID)
	{
		$this->db->select('*');
		$this->db->where('status', 'aktif');
		$this->db->where('prodiID', $prodiID);
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}


	function getTahunLulus($prodiID)
	{
		$this->db->select('*');
		$this->db->where('prodiID', $prodiID);
		$this->db->group_by('tahun_lulus');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}


	function getAlumniByProdi($prodiID)
	{
		$this->db->select('*');
		$this->db->where('status', 'aktif');
		$this->db->where('prodiID', $prodiID);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	public function cekAlumni($nim){
		$this->db->where('nim', $nim);
		return $this->db->get('alumni');
	}

	function getRiwayatByAlumniID($id)
	{
		$this->db->select('*');
		$this->db->where('id_alumni', $id);
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get('pekerjaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getAlumniPengguna($id)
	{
		$this->db->select('*');
		$this->db->where('id_alumni', $id);
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get('pekerjaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function hapusAlumniPengguna($id_alumni,$id_pengguna){
		$this->db->where($id_alumni);
		$this->db->where($id_pengguna);
		$this->db->delete('alumni_pengguna');
	}

	function getPekerjaanByAlumniID($id)
	{
		$this->db->select('*');
		$this->db->where('id_alumni', $id);
		$query = $this->db->get('pekerjaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getPekerjaanByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('pekerjaan');
		return $query->row();
	}

	public function joinPekerjaanAlumniByProdiID($prodiID){
      $this->db->select('
          pekerjaan.id AS id_pekerjaan, pekerjaan.*, alumni.id AS id_alumni, alumni.*
      ');
      $this->db->join('alumni', 'pekerjaan.id_alumni = alumni.id');
      $this->db->from('pekerjaan');
      $this->db->where('alumni.prodiID',$prodiID);
      $this->db->where('pekerjaan.gaji !=',"");
      $query = $this->db->get();
      return $query->result();
  	}

}