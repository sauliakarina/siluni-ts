<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($_SESSION["logged_in"] != 'login') {
			redirect(base_url("login"));
		}
				
		$this->load->model('m_master');
		$this->load->model('m_alumni');
		$this->load->model('m_berita');
 
	}

	public function index()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'berita' => $this->m_berita->getBeritaSaya($this->session->userdata('userID'))
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_beritaSaya', $data);
		$this->load->view('element/footer');
	}
	function hapusBeritaSaya($id){
		$where = array('id' => $id,);
		$this->m_master->deleteData($where,'berita_alumni');
		redirect('alumni/Berita');
	}

	public function updateBerita($id)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'berita' => $this->m_berita->getBeritaByID($id)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_editBeritaSaya', $data);
		$this->load->view('element/footer');
	}

	public function addBerita()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID')
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('v_buatBerita', $data);
		$this->load->view('element/footer');
	}

	 function exeAddBerita(){

		 $time = time();
		  $config = array(
		      'upload_path' => "assets/siluni/images/berita/",
		      'allowed_types' => "gif|jpg|png|jpeg",
		      'overwrite' => TRUE,
		      'max_size' => "10000", 
		      'file_name' => $time
		      );
			$this->load->library('upload', $config); 
			$this->upload->initialize($config);
		
		if ($this->upload->do_upload('userfile')) {
				$data['error'] = false;
				$upload_data = $this->upload->data();
				$data['data'] = $upload_data;
				$data['msg'] = 'Image Successfully Uploaded.';
				$foto = $upload_data['file_name'];

				 $data = array(
				    'judul' => $this->input->post('judul'),
				    'kategori' => $this->input->post('kategori'),
				    'isi' => $this->input->post('isi'),
				    'gambar_berita' => $foto,
				    'userID' => $this->session->userdata('userID')
				 );
				 $this->m_master->inputData($data,'berita_alumni');
		} else {
			echo "Terjadi kesalahan";
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
		}  
					
	  redirect(base_url('alumni/Berita'));
	}

	 function exeUpdateBerita(){

	 	$id = $this->input->post('id');
	  	$judul = $this->input->post('judul');
	  	$kategori = $this->input->post('kategori');	
	  	$isi = $this->input->post('isi');
	  	$tanggal_dibuat = $this->input->post('tanggal_dibuat');
	 
	 //Update Data selain foto
		  $data = array(
		    'judul' => $judul,
		    'kategori' => $kategori,
		    'isi' => $isi,
		    'tanggal_dibuat' => $tanggal_dibuat
		  );

	  $where = array(
	    'id' => $id
	  );
	  $this->m_master->updateData($where, $data,'berita_alumni');

	//Upload File gambar jika gambar ingin di Ubah	
	  	$time = time();
		  $config = array(
		      'upload_path' => "assets/siluni/images/berita/",
		      'allowed_types' => "gif|jpg|png|jpeg",
		      'overwrite' => TRUE,
		      'max_size' => "10000", 
		      'file_name' => $time
		      );
			$this->load->library('upload', $config); 
			$this->upload->initialize($config);
		
			if ($this->upload->do_upload('userfile')) {
				$data['error'] = false;
				$upload_data = $this->upload->data();
				$data['data'] = $upload_data;
				$data['msg'] = 'Image Successfully Uploaded.';
				$foto = array(
					'gambar_berita' => $upload_data['file_name']
				);
				$this->m_master->updateData($where,$foto,'berita_alumni');
			} 
		 	else {
				echo "Terjadi kesalahan";
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}	
		
	  redirect(base_url('alumni/Berita'));
	}
}