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
		$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'riwayat' => $this->m_alumni->getRiwayatByAlumniID($id_alumni),
			'alumni_pengguna' => $this->m_alumni->getAlumniPengguna($id_alumni)
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
			'divisi' => $this->m_master->getDivisi(),
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
			'pengguna' => $this->m_pengguna->getPenggunaByInstansiID($id_instansi),
			'divisi' => $this->m_master->getDivisi()
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_tambahPengguna', $data);
		$this->load->view('element/footer');
	}

	public function addNewPengguna()
	{
		$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$data = array(
			'email' => $this->input->post('email'),
			'telepon' => $this->input->post('telepon'),
			'nama' => $this->input->post('nama')
		);	
		$this->m_master->inputData($data,'pengguna');
		$id_pengguna = $this->m_pengguna->getPenggunaByEmail($this->input->post('email'))->id;
		$data = array(
			'id_alumni' => $id_alumni,
			'id_pengguna' => $id_pengguna,
			'id_divisi' => $this->input->post('id_divisi')
		);
		$this->m_master->inputData($data,'alumni_pengguna');
		redirect('alumni/Profil/riwayatPekerjaan');
	}

	public function addPengguna()
	{
		$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$id_pengguna = $this->input->post('id_pengguna');
		$data = array(
			'id_alumni' => $id_alumni,
			'id_pengguna' => $id_pengguna,
			'id_divisi' => $this->input->post('id_divisi')
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
			'divisi' => $this->m_master->getDivisi(),
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
		if ($this->input->post('divisi_select') == "") {
			$data = array(
				'nama_divisi' => $this->input->post('divisi_input')
			);
			$this->m_master->inputData($data,'divisi');
			$id_divisi = $this->m_master->getDivisiByName($this->input->post('divisi_input'))->id;
		}else{
			$id_divisi =  $this->m_master->getDivisiByName($this->input->post('divisi_select'))->id;
		}
		$data = array(
			'id_instansi' => $id_instansi,
			'posisi' => $this->input->post('posisi'),
			'id_divisi' =>$id_divisi,
			'gaji' => $this->input->post('gaji'),
			'periode_kerja' => $periode,
			'id_alumni' => $id_alumni
		);	
		$this->m_master->inputData($data,'pekerjaan');
		redirect('alumni/Profil/tambahPenggunaAlumni/'.$id_instansi);
	}

	public function getPengguna($id)
	{
		$data = $this->m_pengguna->getPenggunaByID($id);
		echo json_encode($data);
	}

	function hapusRiwayat($id){
		$where = array('id' => $id,);
		$this->m_master->hapusData($where,'pekerjaan');
/*		$id_pengguna = $id;
		$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$this->m_alumni->hapusAlumniPengguna($id_alumni, $id_pengguna);*/
		redirect('alumni/Profil/riwayatPekerjaan');
	}

}