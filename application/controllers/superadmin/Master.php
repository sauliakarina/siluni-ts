<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
 
	}

	public function kelolaFakultas()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'fakultas' => $this->m_master->getFakultas()
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('superadmin/v_kelolaFakultas', $data);
		$this->load->view('element/footer');
	}

	public function kelolaProdi()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'prodi' => $this->m_master->getProdi(),
			'fakultas' => $this->m_master->getFakultas()
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('superadmin/v_kelolaProdi', $data);
		$this->load->view('element/footer');
	}

	function exeAddProdi()
	{
		$data = array(
			'kode_prodi' => $this->input->post('kode_prodi'),
			'nama_prodi' => $this->input->post('nama_prodi'),
			'fakultasID' => $this->input->post('fakultasID')
			);
			$this->m_master->inputData($data,'prodi');
			redirect('superadmin/Master/kelolaProdi');
	}

	function exeAddFakultas()
	{
		$data = array(
			'kode_fakultas' => $this->input->post('kode_fakultas'),
			'nama_fakultas' => $this->input->post('nama_fakultas')
			);
			$this->m_master->inputData($data,'fakultas');
			redirect('superadmin/Master/kelolaFakultas');
	}


	function exeEditProdi()
	{
		$data = array(
			'nama_prodi' => $this->input->post('nama_prodi'),
			'kode_prodi' => $this->input->post('kode_prodi'),
			'fakultasID' => $this->input->post('fakultasID'),
		);
		
		$where = array('id' => $this->input->post('id'));
		$this->m_master->updateData($where,$data,'prodi');
		redirect('superadmin/Master/kelolaProdi');
	}

	function exeEditFakultas()
	{
		$data = array(
			'nama_fakultas' => $this->input->post('nama_fakultas'),
			'kode_fakultas' => $this->input->post('kode_fakultas')
		);
		
		$where = array('id' => $this->input->post('id'));
		$this->m_master->updateData($where,$data,'fakultas');
		redirect('superadmin/Master/kelolaFakultas');
	}


	function deleteProdi($id){
		$where = array('id' => $id);
		$this->m_master->deleteData($where,'prodi');
		redirect('superadmin/Master/kelolaProdi');
	}

	function deleteFakultas($id){
		$where = array('id' => $id);
		$this->m_master->deleteData($where,'prodi');
		redirect('superadmin/Master/kelolaProdi');
	}

	public function getProdi($id)
	{
		$data = $this->m_master->getProdiByID($id);
		echo json_encode($data);
	}

	public function getFakultas($id)
	{
		$data = $this->m_master->getFakultasByID($id);
		echo json_encode($data);
	}

}
