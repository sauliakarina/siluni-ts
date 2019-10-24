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

	function getPenggunaByEmail($email)
	{
		$this->db->select('*');
		$this->db->where('pengguna_email',$email);
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

	function getAlumniPengguna() {

	    $this->db->select ( '*' ); 
	    $this->db->from ( 'alumni_pengguna' );
	    $this->db->join ( 'pengguna', 'pengguna.id = alumni_pengguna.id_pengguna');
	    $this->db->group_by('alumni_pengguna.id_pengguna');
	    $query = $this->db->get();
	    return $query->result ();
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
          pekerjaan.*, pengguna.id AS id_pengguna, pengguna.*
      ');
      $this->db->join('pengguna', 'pekerjaan.id_pengguna = pengguna.id');
      $this->db->from('pekerjaan');
      $this->db->where('pekerjaan.id_alumni',$id_alumni);
      $query = $this->db->get();
      return $query->result();
  	}


	
	


	
}