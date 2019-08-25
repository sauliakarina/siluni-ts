<?php
class M_berita extends CI_Model{	

function input_data($data,$table){
		$this->db->insert($table,$data);
	}

public function count_berita()
	{
		$this->db->where('kategori','Info Alumni');
		$this->db->from("berita_alumni");
		return $this->db->count_all_results();
	}

function tampil_berita_info($limit,$offset){
		$this->db->limit($limit,$offset);
		$this->db->select('*');
		$this->db->where('kategori','Info Alumni');
		$this->db->order_by('tanggal_dibuat', 'DESC');
		$query = $this->db->get('berita_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			//return $query->result();
			return false;
		}
	}

	public function count_berita_lowongan()
	{
		$this->db->where('kategori','Lowongan Kerja');
		$this->db->from("berita_alumni");
		return $this->db->count_all_results();
	}

	public function count_berita_saya($user_id)
	{
		$this->db->where('user_id',$user_id);
		$this->db->from("berita_alumni");
		return $this->db->count_all_results();
	}

	public function count_berita_karir()
	{
		$this->db->where('kategori','Tips Karir');
		$this->db->from("berita_alumni");
		return $this->db->count_all_results();
	}

function tampil_berita_lowongan($limit,$offset){
		$this->db->limit($limit,$offset);
		$this->db->select('*');
		$this->db->where('kategori','Lowongan Kerja');
		$this->db->order_by('tanggal_dibuat', 'DESC');
		$query = $this->db->get('berita_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			//return $query->result();
			return false;
		}
	}

	function tampil_berita_karir($limit,$offset){
		$this->db->limit($limit,$offset);
		$this->db->select('*');
		$this->db->where('kategori','Tips Karir');
		$this->db->order_by('tanggal_dibuat', 'DESC');
		$query = $this->db->get('berita_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			//return $query->result();
			return false;
		}
	}

	function tampil_berita_saya($limit,$offset,$nrm) {
		$this->db->limit($limit,$offset);
		$this->db->select('*');
		$this->db->where('user_id',$nrm);
		$this->db->order_by('tanggal_dibuat', 'DESC');
		$query = $this->db->get('berita_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			//return $query->result();
			return false;
		}
	}

	/*function cek_berita_saya($nrm) {
		$this->db->select('*');
		$this->db->where('alumni_nrm',$nrm);
		$this->db->order_by('tanggal_dibuat', 'DESC');
		$query = $this->db->get('berita_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}*/

	function tampil_berita($where,$table)
	{		
	return $this->db->get_where($table,$where);
	}

	function edit_berita_saya($where,$table)
	{		
	return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}

	public function count_berita_admin()
	{
		return $this->db->count_all('berita_alumni');
	}

	public function tampil_berita_admin(){
		$this->db->select('*');
		$this->db->order_by('tanggal_dibuat', 'ASC');
		$query = $this->db->get('berita_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

public function search_berita($nama)
	{
		$this->db->select('*');
		$this->db->like('judul',$nama);
		//$this->db->or_like('penulis',$nama);
		$this->db->order_by('tanggal_dibuat', 'DESC');
		$query = $this->db->get('berita_alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

/*public function get_alumni($nrm)
{
	$this->db->select('*');
	$this->db->where('alumni_nrm',$nrm);
	$query = $this->db->get('berita_alumni');
	return $query->row();
}*/

public function get_penulis($nrm)
{
	$this->db->select('*');
	$this->db->where('nrm',$nrm);
	$query = $this->db->get('alumni');
	return $query->row();
}

public function get_alumni($user_id)
	{
		$this->db->select('*');
		$this->db->where('userID',$user_id);
		$query = $this->db->get('alumni');
		return $query->row();
	}

	   public function get_id_berita($judul,$waktu)
	{
		$this->db->select('*');
		$this->db->where('judul',$judul);
		$this->db->where('tanggal_dibuat',$waktu);
		$query = $this->db->get('berita_alumni');
		return $query->row();
	}

	function input_gambar($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}