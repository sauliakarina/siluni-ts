<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_dosen');
		$this->load->model('m_master');
 
	}

	public function index()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'dosen' => $this->m_dosen->getDosen(),
			'prodi' => $this->m_master->getProdi()
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_dataDosen', $data);
		$this->load->view('element/footer');
	}

	public function exeAdd(){

		$userID = 'DOS'.$this->input->post('nidn');
		$dataUser = array(
			'username' => $this->input->post('nidn'),
			'password' => $this->input->post('nidn'),
			'prodiID' => $this->session->userdata('prodiID'),
			'role' => 'dosen',
			'id' => $userID
		);
		$this->m_master->inputData($dataUser,'user');
		$dataDosen = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'nidn' => $this->input->post('nidn'),
			'userID' => $userID
		);
		$this->m_master->inputData($dataDosen,'dosen');
		redirect(base_url('admin/Dosen'));
	}


	public function kelolaKoorprodi()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'dosen' => $this->m_dosen->getDosen(),
			'prodi' => $this->m_master->getProdi()
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_kelolaKoor', $data);
		$this->load->view('element/footer');
	}
}