<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	function __construct(){
		parent::__construct();	
		if($_SESSION["logged_in"] != 'login') {
			redirect(base_url("login"));
		}	
		$this->load->model('m_master');
		$this->load->model('m_alumni');
		$this->load->model('m_pengguna');
		$this->load->model('m_dosen');
 
	}

	public function index()
	{
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'pengguna' => $this->m_pengguna->getPenggunaInstansi($prodiID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('koorprodi/v_dataPengguna', $data);
		$this->load->view('element/footer');
	}

		public function daftarInstansi()
	{
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'instansi'=> $this->m_pengguna->getInstansiGuest($prodiID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('koorprodi/v_dataInstansi', $data);
		$this->load->view('element/footer');
	}

	public function daftarAlumni($id_pengguna)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'pekerjaan' => $this->m_pengguna->getPekerjaanByPenggunaID($id_pengguna),
			'id_pengguna' => $id_pengguna
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('koorprodi/v_dataAlumniPengguna', $data);
		$this->load->view('element/footer');
	}

	public function daftarAlumniInstansi($id_instansi)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'pekerjaan' => $this->m_pengguna->getPekerjaanByInstansiID($id_instansi),
			'id_instansi' => $id_instansi
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('koorprodi/v_dataAlumniPengguna2', $data);
		$this->load->view('element/footer');
	}


}