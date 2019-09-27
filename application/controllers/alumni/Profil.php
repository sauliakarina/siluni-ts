<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_pengguna');
 
	}

	public function biodata()
	{
		$userID = $this->session->userdata('userID');   
		$data = array(
			'role' => $this->session->userdata('role'),
			'prodiID' => $this->session->userdata('prodiID'),
			'userID' => $userID,
			'profil' => $this->m_alumni->getAlumniByUserID($userID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_profilAlumni', $data);
		$this->load->view('element/footer');
	}

	public function riwayatPekerjaan()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_riwayatPekerjaan', $data);
		$this->load->view('element/footer');
	}

	public function tambahRiwayat()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'instansi' => $this->m_master->getInstansi(),
			'nama_instansi' => ''
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_tambahRiwayat', $data);
		$this->load->view('element/footer');
	}

	public function tambahPenggunaAlumni($id_instansi)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'id_instansi' => $id_instansi,
			'pengguna' => $this->m_pengguna->getPenggunaByInstansiID($id_instansi)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_tambahPengguna', $data);
		$this->load->view('element/footer');
	}

	public function exeAddPengguna()
	{
		$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$data = array(
			'id_instansi' => $this->input->post('id_instansi'),
			'divisi' => $this->input->post('divisi'),
			'email' => $this->input->post('email'),
			'telepon' => $this->input->post('telepon'),
			'nama' => $this->input->post('nama')
		);	
		$this->m_master->inputData($data,'pengguna');
		$id_pengguna = $this->m_pengguna->getPenggunaByEmail($this->input->post('email'))->id;
		$data = array(
			'id_alumni' => $id_alumni,
			'id_pengguna' => $id_pengguna
		);
		$this->m_master->inputData($data,'alumni_pengguna');
		redirect('alumni/Profil/riwayatPekerjaan');
	}

	public function gantiPassword()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('v_gantiPassword', $data);
		$this->load->view('element/footer');
	}

	function exeAddInstansi()
	{
		$data = array(
			'nama_instansi' => $this->input->post('nama_instansi'),
			'jenis_instansi' => $this->input->post('jenis_instansi'),
			'alamat' => $this->input->post('alamat'),
		);	
		$this->m_master->inputData($data,'instansi');

		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'instansi' => $this->m_master->getInstansi(),
			'nama_instansi' => $this->input->post('nama_instansi'),
		);

		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_tambahRiwayat', $data);
		$this->load->view('element/footer');
		/*redirect('alumni/Profil/tambahRiwayat');*/
	}

	function exeAddRiwayat()
	{
		$periode = $this->input->post('p1')."-".$this->input->post('p2');
		$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$id_instansi = $this->input->post('id_instansi');
		$data = array(
			'id_instansi' => $id_instansi,
			'posisi' => $this->input->post('posisi'),
			'divisi' => $this->input->post('divisi'),
			'gaji' => $this->input->post('gaji'),
			'periode_kerja' => $periode,
			'id_alumni' => $id_alumni
		);	
		$this->m_master->inputData($data,'pekerjaan');
		redirect('alumni/Profil/tambahPenggunaAlumni/'.$id_instansi);
	}

}