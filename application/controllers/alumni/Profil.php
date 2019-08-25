<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
 
	}

	public function biodata()
	{
		$userID = $this->session->userdata('userID');   
		$data = array(
			'role' => $this->session->userdata('role'),
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
			'userID' => $this->session->userdata('userID')
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
			'userID' => $this->session->userdata('userID')
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_tambahRiwayat', $data);
		$this->load->view('element/footer');
	}

	public function tambahPenggunaAlumni()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID')
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_tambahPengguna', $data);
		$this->load->view('element/footer');
	}

	public function gantiPassword()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID')
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('v_gantiPassword', $data);
		$this->load->view('element/footer');
	}
}