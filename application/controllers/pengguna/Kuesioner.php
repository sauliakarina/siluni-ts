<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_kuesioner');
 
	}

	public function isiKuesioner($kuesionerID)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'pertanyaan' => $this->m_kuesioner->getPertanyaanByKuesionerID($kuesionerID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar_pengguna', $data);
		$this->load->view('pengguna/v_kuesionerPengguna', $data);
		$this->load->view('element/footer');
	}
}