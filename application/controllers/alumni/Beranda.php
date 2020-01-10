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
 		$this->load->model('m_kuesioner');
 		$this->load->model('m_pengguna');
 
	}

	public function index()
	{
		$userID = $this->session->userdata('userID'); 
		$prodiID = $this->session->userdata('prodiID');
		$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'kuesioner' => $this->m_kuesioner->getKuesionerAlumni($this->session->userdata('prodiID')),
			'profil' => $this->m_alumni->getAlumniByUserID($userID),
			'instansi' => $this->m_master->getInstansi($prodiID),
			'nama_instansi' => '',
			'riwayat' => $this->m_pengguna->joinPekerjaanByPenggunaID($id_alumni),
			'beranda' => $this->m_master->getBerandaAlumniByProdi($this->session->userdata('prodiID')),
			'alumniID' => $id_alumni
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_berandaAlumni_new', $data);
		$this->load->view('element/footer');
	}
}