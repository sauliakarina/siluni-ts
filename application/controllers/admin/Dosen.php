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
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'dosen' => $this->m_dosen->getDosenByProdiID($prodiID),
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
			'userID' => $userID
		);
		$this->m_master->inputData($dataUser,'user');
		$dataDosen = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'nidn' => $this->input->post('nidn'),
			'prodiID' => $this->session->userdata('prodiID'),
			'email' => $this->input->post('email'),
			'no_telepon' => $this->input->post('no_telepon'),
			'userID' => $userID
		);
		$this->m_master->inputData($dataDosen,'dosen');
		redirect(base_url('admin/Dosen'));
	}


	public function kelolaKoorprodi()
	{
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'koor' => $this->m_dosen->getKoorByProdiID($prodiID),
			'dosen' => $this->m_dosen->getDosenByProdiID($prodiID),
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_kelolaKoor', $data);
		$this->load->view('element/footer');
	}

	public function exeChangeKoor(){
		//update koorbaru
		$data = array(
			'role' => 'koorprodi'
		);
		$where = array('userID' => $this->input->post('koorbaru'));
		$this->m_master->updateData($where,$data,'user');
		$data = array(
			'jabatan' => 'koorprodi'
		);
		$this->m_master->updateData($where,$data,'dosen');
		//update koorlama
		$data = array(
			'role' => 'dosen'
		);
		$where = array('userID' => $this->input->post('koorlama'));
		$this->m_master->updateData($where,$data,'user');
		$data = array(
			'jabatan' => 'dosen'
		);
		$this->m_master->updateData($where,$data,'dosen');
		redirect(base_url('admin/Dosen/kelolaKoorprodi'));
	}

	public function deleteDosen($userID){

		$id = $this->m_master->getUserByUserID($userID)->id;
		$where = array('id' => $id);
		$this->m_master->deleteData($where,'user');

		$id = $this->m_dosen->getDosenByUserID($userID)->id;
		$where = array('id' => $id);
		$this->m_master->deleteData($where,'dosen');
		redirect('admin/Dosen');
	}
}