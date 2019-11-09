<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	function __construct(){
		parent::__construct();		
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
			'pengguna'=> $this->m_pengguna->getPengguna($prodiID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_dataPengguna', $data);
		$this->load->view('element/footer');
	}

	/*function deletePengguna($id){
		$data = array(
		'isDelete' => 'yes'
		);
		$where = array(
		'id' => $id
		);
		$this->m_master->updateData($where,$data,'pengguna');
		redirect('admin/Pengguna');
	}*/

	function deletePengguna($id){
		$where = array('id' => $id);
		$this->m_master->deleteData($where,'pengguna');
		redirect('admin/Pengguna');
	}

	public function getPengguna($id)
	{
		$data = $this->m_pengguna->getPenggunaByID($id);
		echo json_encode($data);
	}

}