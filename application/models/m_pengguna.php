<?php 
 
class M_pengguna extends CI_Model{	

	public function __construct()
	 {
	  parent::__construct();
	 }

	 //group by instansi
	/* function getPengguna($prodiID)
	{
		$this->db->select('*');
		$this->db->where('isDelete', 'no');
		$this->db->where('prodiID', $prodiID);
		$this->db->where('pengguna_nama !=', NULL);
		$this->db->where('id_instansi !=', '0');
		$this->db->group_by('id_instansi');
		$query = $this->db->get('pengguna');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}*/

	 function getPenggunaAdmin($prodiID)
	{
		$this->db->select('*');
		$this->db->where('isDelete', 'no');
		$this->db->where('prodiID', $prodiID);
		$this->db->group_by('id_instansi');
		$query = $this->db->get('pengguna');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	//pengguna non instansi tidak ditampilkan di data pengguna alumni
	function getPengguna($prodiID)
	{
		$this->db->select('*');
		$this->db->where('isDelete', 'no');
		$this->db->where('prodiID', $prodiID);
		$this->db->where('id_instansi !=', Null);
		$this->db->order_by('id','DESC');
		$query = $this->db->get('pengguna');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}


	 function getCountNewAlumniPengguna($penggunaID) {
		$this->db->select('*');
		$this->db->where('id_pengguna', $penggunaID);
		$this->db->where('seenPengguna', '0');
		$query = $this->db->get('pekerjaan');
		return $query->num_rows();

	}

	function getPenggunaInstansi($prodiID)
	{
		$this->db->select('*');
		$this->db->where('isDelete', 'no');
		$this->db->where('id_instansi !=', Null);
		$this->db->where('prodiID', $prodiID);
		$this->db->order_by('id','DESC');
		$query = $this->db->get('pengguna');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}


	function getAlumniInstansi($alumniID)
	{
		$this->db->select('*');
		$this->db->order_by('id','ASC');
		$this->db->where('alumniID', $alumniID);
		$query = $this->db->get('alumni_instansi');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getFirstInstansi($alumniID)
	{
		$this->db->select('*');
		$this->db->where('id_alumni', $alumniID);
		$this->db->where('firstPekerjaan', 'yes');
		$query = $this->db->get('pekerjaan');
		return $query->row();

	}


	 function getInstansiGuest($prodiID)
	{
		$this->db->select('*');
		$this->db->where('prodiID', $prodiID);
		$this->db->group_by('nama_instansi');
		$this->db->order_by('nama_instansi', 'ASC');
		$query = $this->db->get('instansi');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	 function getPenggunaByProdiID($prodiID)
	{
		$this->db->select('*');
		$this->db->where('isDelete', 'no');
		$this->db->where('prodiID', $prodiID);
		$query = $this->db->get('pengguna');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	 function getPenggunaBySeen($seen, $prodiID)
	{
		$this->db->select('*');
		$this->db->where('seen',$seen);
		$this->db->where('prodiID', $prodiID);
		$this->db->where('id_instansi !=', Null);
		$this->db->where('isDelete', 'no');
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get('pengguna');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getPenggunaByInstansiIDKoor($id_instansi)
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

	function getPenggunaByInstansiID($id_instansi)
	{
		$this->db->select('*');
		$this->db->where('id_instansi', $id_instansi);
		$this->db->where('isDelete', 'no');
		$this->db->where('id_instansi !=', '0');
		$query = $this->db->get('pengguna');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getPenggunaByCustomID($customID)
	{
		$this->db->select('*');
		$this->db->where('penggunaID', $customID);
		$this->db->where('isDelete', 'no');
		$query = $this->db->get('pengguna');
		return $query->row();

	}


	function getIDPenggunaFromPekerjaan($id_instansi)
	{
		$this->db->distinct();
		$this->db->select('id_pengguna');
		$this->db->where('id_instansi', $id_instansi);
		$query = $this->db->get('pekerjaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getPenggunaByPenggunaID($id)
	{
		$this->db->select('*');
		$this->db->where('penggunaID',$id);
		$query = $this->db->get('pengguna');
		return $query->row();

	}

	function getInstansiIDByPengguna($id)
	{
		$this->db->select('id_instansi');
		$this->db->where('id',$id);
		$query = $this->db->get('pengguna');
		return $query->row();

	}

	function getPenggunaByAlumniDivisi($id_alumni, $id_divisi)
	{
		$this->db->select('*');
		$this->db->where('id_alumni',$id_alumni);
		$this->db->where('id_divisi',$id_divisi);
		$query = $this->db->get('alumni_pengguna');
		return $query->row();
	}


	function getPenggunaByID($id)
	{
		return $this->db->get_where('pengguna', array('id' => $id))->row();
	}


	 function getAlumniByPengguna($id) {

	    $this->db->select ( '*' ); 
	    $this->db->from ( 'alumni_pengguna' );
	    $this->db->join ( 'alumni', 'alumni.id = alumni_pengguna.id_alumni');
	    $this->db->group_by('alumni_pengguna.id_pengguna');
	    $this->db->where('id_pengguna',$id);
	    $query = $this->db->get();
	    return $query->result ();
	 }

	public function joinPekerjaanByPenggunaID($id_alumni){
      $this->db->select('
          pekerjaan.id AS id_pekerjaan, pekerjaan.*, pengguna.id AS id_pengguna, pengguna.*
      ');
      $this->db->join('pengguna', 'pekerjaan.id_pengguna = pengguna.id');
      $this->db->from('pekerjaan');
      $this->db->where('pekerjaan.id_alumni',$id_alumni);
      $query = $this->db->get();
      return $query->result();
  	}


public function joinPekerjaanAlumniByPenggunaID($penggunaID){
      $this->db->select('
          pekerjaan.id AS id_pekerjaan, pekerjaan.*, alumni.id AS id_alumni, alumni.*
      ');
      $this->db->join('alumni', 'pekerjaan.id_alumni = alumni.id');
      $this->db->from('pekerjaan');
      $this->db->where('pekerjaan.id_pengguna',$penggunaID);
      $this->db->order_by('pekerjaan.id','DESC');
      $query = $this->db->get();
      return $query->result();
 }  	

public function getPekerjaanSeenPengguna($id_pengguna, $seen){
		$this->db->select('*');
		$this->db->where('id_pengguna', $id_pengguna);
		$this->db->where('seenPengguna', $seen);
		$query = $this->db->get('pekerjaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
  	}

  	public function getPekerjaanByPenggunaID($id_pengguna){
		$this->db->select('*');
		$this->db->where('id_pengguna', $id_pengguna);
		$query = $this->db->get('pekerjaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
  	}

  	public function getPekerjaanByAlumniID($id_alumni){
		$this->db->select('*');
		$this->db->where('id_alumni', $id_alumni);
		$query = $this->db->get('pekerjaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
  	}

  	public function getPekerjaanByAlumniIDWhereNotSudah($id_alumni){
		$this->db->select('*');
		$this->db->where('id_alumni', $id_alumni);
		$this->db->where('isiPekerjaan', Null);
		$query = $this->db->get('pekerjaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
  	}

  	public function getPekerjaanByAlumniIDWhereSudah($id_alumni){
		$this->db->select('*');
		$this->db->where('id_alumni', $id_alumni);
		$this->db->where('isiPekerjaan', 'sudah');
		$query = $this->db->get('pekerjaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
  	}

  	//untuk halaman guest grup by
  	public function getPekerjaanByInstansiID($id_instansi){
		$this->db->select('*');
		$this->db->where('id_instansi', $id_instansi);
		$this->db->group_by('posisi');
		$query = $this->db->get('pekerjaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
  	}

  	//untuk halaman alumni 
  	public function getPekerjaanByInstansiIDVer2($id_instansi){
		$this->db->select('*');
		$this->db->where('id_instansi', $id_instansi);
		$query = $this->db->get('pekerjaan');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
  	}

  	public function joinPenggunaPekerjaanByInstansiID($id_instansi){
      $this->db->select('
          pekerjaan.id AS id_pekerjaan, pekerjaan.*, pengguna.id AS id_pengguna, pengguna.*
      ');
      $this->db->join('pengguna', 'pekerjaan.id_pengguna = pengguna.id');
      $this->db->from('pekerjaan');
      $this->db->where('pengguna.id_instansi',$id_instansi);
      $query = $this->db->get();
      return $query->result();
  	}

  	public function joinPenggunaPekerjaanByPekerjaanID($id_pekerjaan){
      $this->db->select('
          pekerjaan.id AS id, pekerjaan.*, pengguna.id AS id_pengguna, pengguna.*
      ');
      $this->db->join('pengguna', 'pekerjaan.id_pengguna = pengguna.id');
      $this->db->from('pekerjaan');
      $this->db->where('pekerjaan.id',$id_pekerjaan);
      $query = $this->db->get();
      return $query->row();
  	}
	


	
}