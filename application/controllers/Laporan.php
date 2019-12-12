<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_kuesioner');
		$this->load->model('m_hasil');

 
	}

	public function kuesionerAlumni($kuesionerID)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'pertanyaan' => $this->m_kuesioner->getPertanyaanByKuesionerID($kuesionerID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('v_laporanAlumni', $data);
		$this->load->view('element/footer');
	}

	public function laporanPengguna()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID')
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('v_laporanPengguna', $data);
		$this->load->view('element/footer');
	}

	public function laporanAlumni()
	{
		$pertanyaanID = $this->input->post('pertanyaanID');
		$tahun_lulus = $this->input->post('tahun_lulus');
		$prodiID = $this->session->userdata('prodiID');
		if ($tahun_lulus == "") {
			$tabel = $this->m_hasil->getJawabanByPertanyaanID($pertanyaanID);
		} else {
			$tabel = $this->m_hasil->getJawabanByPertanyaanTahun($pertanyaanID, $tahun_lulus);
		}
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'grafik' => $this->m_hasil->getHasilAlumni($pertanyaanID, $prodiID),
			'label' => $this->m_hasil->getPilihanJawabanByPertanyaanID($pertanyaanID),
			'pertanyaan' => $this->m_kuesioner->getPertanyaanByPertanyaanID($pertanyaanID),
			'tabel' => $tabel
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('v_hasilLaporan', $data);
		$this->load->view('element/footer');
	}
}