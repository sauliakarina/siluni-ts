<?php 

class M_data extends CI_Model{

	public function count_user()
	{
		return $this->db->count_all('user');
	}

	//tampil data dengan pagination
	public function tampil_data($limit,$offset){
		$this->db->limit($limit,$offset);
		$this->db->select('*');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	public function tampil_data_user(){
		$this->db->select('*');
		$this->db->where('status_user', 'aktif');
		$this->db->order_by('user_id', 'ASC');
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}


	public function search_user($nama)
	{
		$this->db->select('*');
		$this->db->like('username',$nama);
		$this->db->order_by('username', 'ASC');
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}
	

public function count_alumni()
	{
		return $this->db->count_all('alumni');
	}

	public function count_dosen()
	{
		return $this->db->count_all('dosen');
	}

	function tampil_data_alumni(){
		$this->db->select('*');
		$this->db->where('status_alumni', 'aktif');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	function tampil_data_dosen(){
		$this->db->select('*');
		$this->db->where('status', 'aktif');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('dosen');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}


	public function search_alumni($nama)
	{
		$this->db->select('*');
		$this->db->like('nama',$nama);
		//$this->db->or_like('nrm', $nama);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	public function search_dosen($nama)
	{
		$this->db->select('*');
		$this->db->like('nama',$nama);
		//$this->db->or_like('nidn', $nama);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('dosen');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}
	
	
	function tampil_data_profil_saya($nrm){
		//$nrm = $this->session->userdata('username');
		$this->db->select('*');
		$this->db->where('user_id', $nrm);
		$query = $this->db->get('alumni');
		return $query->row();
	}

	function tampil_edit_profil($nrm){
		//$nrm = $this->session->userdata('username');
		$this->db->select('*');
		$this->db->where('alumni_id', $nrm);
		$query = $this->db->get('alumni');
		return $query->row();
	}

	function tampil_data_profil_dosen($nip){
		//$nrm = $this->session->userdata('username');
		$this->db->select('*');
		$this->db->where('user_id', $nip);
		$query = $this->db->get('dosen');
		return $query->row();
	}

	function tampil_edit_profil_dosen($dosen_id){
		//$nrm = $this->session->userdata('username');
		$this->db->select('*');
		$this->db->where('dosen_id', $dosen_id);
		$query = $this->db->get('dosen');
		return $query->row();
	}


	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function input_alumni($data,$table){
		$this->db->insert($table,$data);
	}
	
	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	function edit_data($where,$table)
	{		
	return $this->db->get_where($table,$where);
	}

	function tampil_user($where,$table)
	{		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function input_avatar($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	//insert foto
	//var $tabel = 'alumni';
	 function get_insert($data)
	 {
       $this->db->insert('alumni', $data);
       return TRUE;
    }

    function get_pass($nrm)
    {
    	$query = $this->db->where(['username'=> $nrm])
    						->get('user');
    	if ($query->num_rows()>0) {
    		return $query->row();
    	}
    }

    function update_pass($pass_baru, $nrm)
    {
    	$data = array(
    		'password' => $pass_baru
    	);

    	$this->db->where('username', $nrm);
    	$this->db->update('user', $data);
    }

    /*function get_prodi() {
    	$this->db->distinct();
		$this->db->select('c_prodi');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else {
			return $query->result();
		}
    }*/

    function tampil_prodi() {
    	$this->db->distinct();
		$this->db->select('*');
		$query = $this->db->get('t_prodi');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else {
			return $query->result();
		}
    }

    function get_prodi() {
    	$this->db->distinct();
		$this->db->select('*');
		$query = $this->db->get('prodi');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else {
			return $query->result();
		}
    }

     function get_prodi_dosen() {
    	$this->db->distinct();
		$this->db->select('prodi');
		$query = $this->db->get('dosen');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else {
			return $query->result();
		}
    }

    public function cari_dosen($nama,$prodi)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$prodi);
		$this->db->like('nama',$nama);
		//$this->db->or_like('nidn', $nama);
		//$this->db->like('c_prodi',$prodi);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('dosen');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}	
	
	public function cari_dosen_prodi($prodi)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$prodi);
		//$this->db->like('c_prodi',$prodi);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('dosen');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}	


	public function cari_dosen_all_prodi($nama)
	{
		$this->db->select('*');
		//$this->db->where('prodi',$prodi);
		$this->db->like('nama',$nama);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('dosen');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}	

	function cek_user($username)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username',$username);
		return $query = $this->db->get()->num_rows();
	}

	function cek_prodi($prodi)
	{
		$this->db->select('*');
		$this->db->from('t_prodi');
		$this->db->where('k_prodi',$prodi);
		return $query = $this->db->get()->num_rows();
	}
	
	function tampil_prodi_byID($id_prodi)
	{
		return $this->db->get_where('t_prodi', array('id_prodi' => $id_prodi))->row();
	}

	/*function get_id($username) {
		$this->db->select('user_id');
		$this->db->where('username',$username);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			return $query->row()->['user_id'];
		} else {
			return $query->row()->['user_id'];
		}
    }*/

    public function get_id($username)
	{
		$this->db->select('*');
		$this->db->where('username',$username);
		$query = $this->db->get('user');
		return $query->row();
	}

	public function get_username($id)
	{
		$this->db->select('*');
		$this->db->where('user_id',$id);
		$query = $this->db->get('user');
		return $query->row();
	}

	public function get_alumni($id)
	{
		$this->db->select('*');
		$this->db->where('user_id',$id);
		$query = $this->db->get('alumni');
		return $query->row();
	}

	public function get_dosen($id)
	{
		$this->db->select('*');
		$this->db->where('user_id',$id);
		$query = $this->db->get('dosen');
		return $query->row();
	}

	public function get_t_prodi($id_prodi)
	{
		$this->db->select('*');
		$this->db->where('id',$id_prodi);
		$query = $this->db->get('prodi');
		return $query->row();
	}

	public function getUserByID($id)
	{
		$this->db->select('*');
		$this->db->where('id',$id);
		$query = $this->db->get('user');
		return $query->row();
	}

}