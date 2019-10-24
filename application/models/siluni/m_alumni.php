<?php 
 
class M_alumni extends CI_Model{


	private $table = "alumni";
	
	public function get_data_ilkom($limit=0)
	{
		$this->db->select('*');
		$this->db->from('alumni');
		$this->db->where('prodi','Ilmu Komputer');
		$this->db->order_by('nama', 'ASC');

		$this->db->limit($limit);
		$this->db->offset($this->uri->segment(3));
		return $this->db->get();

	}

	//datatables
	//var $table = "alumni";  
    var $select_column = array("nrm", "nama", "tahun_masuk", "tahun_lulus");  
    var $order_column = array("nrm", "nama",  null, null);  
      
      function make_query()  
      {  
           $this->db->select($this->select_column);  
           $this->db->from('alumni');  
           $this->db->where('prodi','Pendidikan Matematika');
	
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("nama", $_POST["search"]["value"]);  
                $this->db->or_like("nrm", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('nama', 'ASC');  
           }  
      }

      function make_datatables(){  
           $this->make_query();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }  

       function get_filtered_data(){  
           $this->make_query();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }    
      //untuk dapetin jumlah data pendmat   
      function get_all_data()  
      {  
           $this->db->select("*");  
           $this->db->from('alumni'); 
           $this->db->where('c_prodi','Pendidikan Matematika'); 
           return $this->db->count_all_results();  
      }   

      
	public function get_data_pendmat()
	{
		$this->db->select('*');
		$this->db->from('alumni');
		$this->db->where('c_prodi','Pendidikan Matematika');
		$this->db->order_by('nama', 'ASC');

		$query = $this->db->get();
		return $query;
	}
	


	public function get_data_mat()
	{
		$this->db->select('*');
		$this->db->from('alumni');
		$this->db->where('c_prodi','Matematika');
		$this->db->order_by('nama', 'ASC');

		$query = $this->db->get();
		return $query;
	}

	
	
		public function count()
		{
			return $this->db->count_all_results('alumni');		
		}


	public function count_alumni()
	{
		$this->db->where('status','alumni');
		$this->db->from("user");
		return $this->db->count_all_results();
	}

	public function fetch_alumni_ilkom($limit,$offset)
	{
		$this->db->limit($limit,$offset);

		$this->db->select('*');
		$this->db->where('c_prodi','Ilmu Komputer');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	public function fetch_alumni()
	{
		
		$this->db->select('*');
		$this->db->where('status','aktif');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	public function search_ilkom($nama)
	{
		$this->db->select('*');
		$this->db->where('c_prodi','Ilmu Komputer');
		$this->db->like('nama',$nama);
		$this->db->or_like('nrm', $nama);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}	
	
	public function fetch_alumni_pendmat($limit,$offset)
	{
		$this->db->limit($limit,$offset);

		$this->db->select('*');
		$this->db->where('c_prodi','Pendidikan Matematika');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	public function search_pendmat($nama)
	{
		$this->db->select('*');
		$this->db->where('c_prodi','Pendidikan Matematika');
		$this->db->like('nama',$nama);
		$this->db->or_like('nrm', $nama);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	public function fetch_alumni_mat($limit,$offset)
	{
		$this->db->limit($limit,$offset);

		$this->db->select('*');
		$this->db->where('c_prodi','Matematika');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	public function search_mat($nama)
	{
		$this->db->select('*');
		$this->db->where('prodi','Matematika');
		$this->db->like('nama',$nama);
		$this->db->or_like('nrm', $nama);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	//pencarian alumni
	public function get_prodi()
	{
		$this->db->distinct();
		$this->db->select('*');
		$query = $this->db->get('prodi');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}

	public function cari_alumni($nama,$prodi)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$prodi);
		$this->db->where('status','aktif');
		$this->db->like('nama',$nama);
		//$this->db->or_like('nrm', $nama);
		//$this->db->like('c_prodi',$prodi);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}	
	
	public function cari_alumni_prodi($prodi)
	{
		$this->db->select('*');
		$this->db->where('prodiID',$prodi);
		$this->db->where('status','aktif');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}	

	public function cari_alumni_all_prodi($nama)
	{
		$this->db->select('*');
		$this->db->where('status','aktif');
		$this->db->like('nama',$nama);
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get('alumni');
		if($query->num_rows()>0)
		{
			return $query->result();
		} else{
			return $query->result();
		}
	}	
	
}
