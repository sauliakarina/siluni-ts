<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($_SESSION["logged_in"] != 'login') {
			redirect(base_url("login"));
		}

		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_hasil');
 
	}

	public function index()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'selarasHorizontal' => $this->m_hasil->getHorizontal('ya'),
			'tidakSelarasHorizontal' => $this->m_hasil->getHorizontal('tidak')
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_beranda', $data);
		$this->load->view('element/footer');
	}

	public function kelolaBerandaAlumni()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'beranda' => $this->m_master->getBerandaAlumniByProdi($this->session->userdata('prodiID'))
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_kelolaBerandaAlumni', $data);
		$this->load->view('element/footer');
	}

	public function kelolaBerandaPengguna()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'beranda' => $this->m_master->getBerandaPenggunaByProdi($this->session->userdata('prodiID'))
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_kelolaBerandaPengguna', $data);
		$this->load->view('element/footer');
	}

	function exeUpdateBerandaPengguna(){
		$isi = $this->input->post('isi');
		$data = array(
		    'isi' => $isi
		  );
	  	$where = array(
	    'id' => $this->input->post('berandaID')
	  	);
	  $this->m_master->updateData($where, $data,'beranda');
	  $this->session->set_flashdata("pesan", '<div><div class="alert alert-success" id="alert" align="center">Kata Pengantar Telah Sukses disunting</div></div>');
	  redirect(base_url('admin/Beranda/kelolaBerandaPengguna'));

	}

	 function exeUpdateBeranda(){

	  	$isi = $this->input->post('isi');
	 
	 //Update Data selain foto
		  $data = array(
		    'isi' => $isi
		  );

	  $where = array(
	    'id' => $this->input->post('berandaID')
	  );
	  $this->m_master->updateData($where, $data,'beranda');

	/*//Upload File gambar jika gambar ingin di Ubah	
	  	  $time = time();
		  $config = array(
		      'upload_path' => "assets/siluni/images/beranda/",
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
					'foto' => $upload_data['file_name']
				);
				$this->m_master->updateData($where,$foto,'beranda');
			} 
		 	else {
				echo "Terjadi kesalahan";
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			}	*/
	$this->session->set_flashdata("pesan", '<div><div class="alert alert-success" id="alert" align="center">Kata Pengantar Telah Sukses disunting</div></div>');
	  redirect(base_url('admin/Beranda/kelolaBerandaAlumni'));
	}
}