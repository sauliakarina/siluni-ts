<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($_SESSION["logged_in"] != 'login') {
			redirect(base_url("login"));
		}
				
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
			'password' => md5($this->input->post('nidn')),
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

	public function deleteDosen($id){

		$id_user = $this->m_master->getUserByUserID($this->m_dosen->getDosenByID($id)->userID)->id;
		$where = array('id' => $id_user);
		$this->m_master->deleteData($where,'user');

		$where = array('id' => $id);
		$this->m_master->deleteData($where,'dosen');

		redirect('admin/Dosen');
	}

	public function getDosen($id)
	{
		$data = $this->m_dosen->getDosenByID($id);
		echo json_encode($data);
	}

	function exeEditDosen()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'nidn' => $this->input->post('nidn'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'email' => $this->input->post('email'),
			'no_telepon' => $this->input->post('no_telepon')
		);
		
		$where = array('id' => $this->input->post('id'));
		$this->m_master->updateData($where,$data,'dosen');

		$this->session->set_flashdata("sukses_edit", '<div><div class="alert alert-success" id="alert" align="center">Data Dosen berhasil disunting</div></div>');
		redirect('admin/Dosen');
	}
}