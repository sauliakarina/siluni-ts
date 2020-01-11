<?php 
 
class M_master extends CI_Model{	

	public function __construct()
	 {
	  parent::__construct();
	  //$this->db2 = $this->load->database('db_dua', TRUE);
	 }

	function getProdi()
	{
		$this->db->select('*');
		$this->db->where('nama_prodi !=', 'Semua Prodi');
		$query = $this->db->get('prodi');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getFakultas()
	{
		$this->db->select('*');
		$query = $this->db->get('fakultas');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function cekData($table,$where){		
		return $this->db->get_where($table,$where);
	}	

	function getInstansi($prodiID) {
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

/*	function getDivisi() {
		$this->db->distinct();
		$this->db->select('nama_divisi');
		$this->db->order_by('nama_divisi', 'ASC');
		$query = $this->db->get('divisi');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}*/

	function getDivisi() {
		$this->db->select('*');
		$this->db->order_by('nama_divisi', 'ASC');
		$this->db->group_by('nama_divisi');
		$this->db->where('nama_divisi !=', '');
		$query = $this->db->get('divisi');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}


		function getDivisiByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('divisi');
		return $query->row();

	}

	function getFakultasByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('fakultas');
		return $query->row();

	}

	
	function getNotifKuesionerByCustomID($customID)
	{
		$this->db->select('*');
		$this->db->where('customID',$customID);
		$query = $this->db->get('notif_kuesioner');
		return $query->row();

	}

	function getNotifKuesionerByID($ID)
	{
		$this->db->select('*');
		$this->db->where('id',$ID);
		$query = $this->db->get('notif_kuesioner');
		return $query->row();

	}


	function getBeranda()
	{
		$this->db->select('*');
		$this->db->where('id','1');
		$query = $this->db->get('beranda');
		return $query->row();

	}

	function getBerandaAlumniByProdi($prodiID)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$prodiID);
		$this->db->where('jenis','alumni');
		$query = $this->db->get('beranda');
		return $query->row();

	}

	function getAlumniByProdiID($prodiID)
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

	/*function getPenggunaByProdiSeen($prodiID, $seen)
	{
		$this->db->select('*');
		$this->db->where('isDelete', 'no');
		$this->db->where('prodiID', $prodiID);
		$this->db->where('seen', $seen);
		$query = $this->db->get('pengguna');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}*/

	 function getPenggunaByProdiSeen($seen, $prodiID) {
		$this->db->select('*');
		$this->db->where('isDelete', 'no');
		$this->db->where('prodiID', $prodiID);
		$this->db->where('seen', $seen);
		$query = $this->db->get('pengguna');
		return $query->num_rows();

	}

	function countAllPengguna($prodiID) {
		$this->db->select('*');
		$this->db->where('isDelete', 'no');
		$this->db->where('prodiID', $prodiID);
		$query = $this->db->get('pengguna');
		return $query->num_rows();

	}

	function getBerandaPenggunaByProdi($prodiID)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$prodiID);
		$this->db->where('jenis','pengguna');
		$query = $this->db->get('beranda');
		return $query->row();

	}

	function getProdiByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('prodi');
		return $query->row();

	}


	function getDivisiByPenggunaID($id)
	{
		$this->db->select('*');
		$this->db->where('id_pengguna',$id);
		$query = $this->db->get('pekerjaan');
		return $query->row();

	}

	function getDivisiByName($nama)
	{
		$this->db->select('*');
		$this->db->where('nama_divisi',$nama);
		$query = $this->db->get('divisi');
		return $query->row();

	}

	function getUserByUsername($username)
	{
		$this->db->select('*');
		$this->db->where('username',$username);
		$query = $this->db->get('user');
		return $query->row();

	}

	function getAdminFromUser() {
		$this->db->select('*');
		$this->db->where('role', 'admin');
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getUserByUserID($userID)
	{
		$this->db->select('*');
		$this->db->where('userID',$userID);
		$query = $this->db->get('user');
		return $query->row();

	}

	function getUserByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('user');
		return $query->row();

	}

	function inputData($data,$table){
		$this->db->insert($table,$data);
	}

	function updateData($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	function getInstansiByName($nama)
	{
		$this->db->select('*');
		$this->db->where('nama_instansi',$nama);
		$query = $this->db->get('instansi');
		return $query->row();

	}

	function getInstansiByProdiID($id)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$id);
		$query = $this->db->get('instansi');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}

	}

	function getInstansiByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('instansi');
		return $query->row();

	}

	function deleteData($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	function getKuesionerByResponden($responden, $prodiID)
	{
		$this->db->select('*');
		$this->db->where('responden',$responden);
		$this->db->where('status','aktif');
		$this->db->where('prodiID', $prodiID);
		$query = $this->db->get('kuesioner');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	//dinamis yes -> tiap prodi berbeda
	function getKuesionerPenggunaProdi($prodiID)
	{
		$this->db->select('*');
		$this->db->where('responden','pengguna');
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

	//kuesioner pengguna untuk semua prodi tidak bisa diedit
	function getKuesionerPengguna()
	{
		$this->db->select('*');
		$this->db->where('responden','Pengguna');
		$this->db->where('dinamis','no');
		$this->db->order_by('id', 'ASC');
		$query = $this->db->get('kuesioner');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	
}