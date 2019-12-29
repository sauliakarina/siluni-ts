<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($_SESSION["logged_in"] != 'login') {
			redirect(base_url("login"));
		}		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_pengguna');
 
	}

	public function index()
	{
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'instansi' => $this->m_master->getInstansiByProdiID($prodiID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_dataPengguna', $data);
		$this->load->view('element/footer');
	}

	public function getAlumniByPengguna($id)
	{
		$data = $this->m_pengguna->getAlumniPengguna($id);
		echo(json_encode($data));
	}

	public function daftarAlumni($id_instansi)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'pekerjaan' => $this->m_pengguna->getPekerjaanByInstansiIDVer2($id_instansi),
			'id_instansi' => $id_instansi
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_dataAlumniPengguna', $data);
		$this->load->view('element/footer');
	}
}