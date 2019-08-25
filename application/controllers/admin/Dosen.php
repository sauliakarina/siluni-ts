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

		$username = $this->input->post('username');
		$dataUser = array(
			'username' => $username,
			'password' => $this->input->post('password'),
			'prodiID' => $this->input->post('prodi'),
			'role' => 'dosen',
		);
		$this->m_master->inputData($dataUser,'user');
		$userID = $this->m_master->getUserByUsername($username)->id;
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