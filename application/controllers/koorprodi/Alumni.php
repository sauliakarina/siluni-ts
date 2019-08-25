<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_dosen');
 
	}

	public function index()
	{
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'alumni' => $this->m_alumni->getAlumniByProdi($prodiID),
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('koorprodi/v_dataAlumni', $data);
		$this->load->view('element/footer');
	}
}