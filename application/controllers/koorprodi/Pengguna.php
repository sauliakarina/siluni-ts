<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_master');
		$this->load->model('m_alumni');
		$this->load->model('m_pengguna');
 
	}

	public function index()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'pengguna' => $this->m_pengguna->getAllPengguna()
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('koorprodi/v_dataPengguna', $data);
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

}