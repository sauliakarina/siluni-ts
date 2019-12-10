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
			'pengguna'=> $this->m_pengguna->getPenggunaVer2($prodiID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_dataPengguna', $data);
		$this->load->view('element/footer');
	}

	public function getNewPengguna($num) {
		
		//update data seen
		$prodiID = $this->session->userdata('prodiID');
		$pengguna = $this->m_pengguna->getPenggunaBySeen('0',$prodiID);
		foreach ($pengguna as $p) {
			$data = array('seen' => '1');
			$where = array('id' => $p->id);
			$this->m_master->updateData($where,$data,'pengguna');
		}

		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'num' => $num,
			'pengguna' => $this->m_pengguna->getPenggunaVer2($prodiID)
		);

		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_newPengguna', $data);
		$this->load->view('element/footer');

	}

	public function editPengguna($id)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'pr'=> $this->m_pengguna->getPenggunaByID($id)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_editPenggunaAlumni', $data);
		$this->load->view('element/footer');
	}

	function deletePengguna($id){
		$data = array(
		'isDelete' => 'yes',
		'penggunaID' => Null,
		);
		$where = array(
		'id' => $id
		);
		$this->m_master->updateData($where,$data,'pengguna');
		redirect('admin/Pengguna');
	}

	/*function deletePengguna($id){
		$data = array('isDelete');
		$where = array('id' => $id);
		$this->m_master->deleteData($where,'pengguna');
		redirect('admin/Pengguna');
	}*/

	public function getPengguna($id)
	{
		$data = $this->m_pengguna->getPenggunaByID($id);
		echo json_encode($data);
	}

	function exeEdit()
	{

		$data = array(
			'pengguna_nama' => $this->input->post('pengguna_nama'),
			'divisi' => $this->input->post('divisi'),
			'id_instansi' => $this->input->post('id_instansi'),
			'pengguna_email' => $this->input->post('pengguna_email'),
			'pengguna_telepon' => $this->input->post('pengguna_telepon'),
		);
		
		$where = array('id' => $this->input->post('penggunaID'));
		$this->m_master->updateData($where,$data,'pengguna');
		redirect('admin/Pengguna');
	}

	function updateTandai()
	{
		$penggunaID = $this->input->post('penggunaID');
		foreach ($penggunaID as $p) {
			$data = array(
			'tandai' => $this->input->post('tandai'.$p)
			);
			$where = array('id' => $p);
			$this->m_master->updateData($where,$data,'pengguna');
		}
		redirect('admin/Pengguna');
	}

}