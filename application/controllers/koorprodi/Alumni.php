<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($_SESSION["logged_in"] != 'login') {
			redirect(base_url("login"));
		}		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_dosen');
		$this->load->model('m_pengguna');
 
	}

	public function index()
	{
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'alumni' => $this->m_alumni->getAlumni($prodiID),
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('koorprodi/v_dataAlumni', $data);
		$this->load->view('element/footer');
	}

	public function pekerjaan($id_alumni)
	{
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'profil' => $this->m_alumni->getAlumniByID($id_alumni),
			'pekerjaan' => $this->m_pengguna->getPekerjaanByAlumniID($id_alumni),
			//'pekerjaan' => $this->m_pengguna->joinPekerjaanByPenggunaID($id_alumni),
			'id_alumni' => $id_alumni
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('koorprodi/v_riwayatPekerjaan', $data);
		$this->load->view('element/footer');
	}
}