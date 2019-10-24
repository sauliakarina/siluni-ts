<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
 
	}

	public function index()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'beranda' => $this->m_master->getBeranda()
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_berandaAlumni', $data);
		$this->load->view('element/footer');
	}
}