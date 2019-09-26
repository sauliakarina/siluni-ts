<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
 
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

}