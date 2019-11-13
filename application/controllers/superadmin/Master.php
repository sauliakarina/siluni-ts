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
			'prodiID' => $this->session->userdata('prodiID')
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

	function deleteProdi($id){
		$where = array('id' => $id);
		$this->m_master->deleteData($where,'prodi');
		redirect('superadmin/Master/kelolaProdi');
	}

	public function getProdi($id)
	{
		$data = $this->m_master->getProdiByID($id);
		echo json_encode($data);
	}

}
