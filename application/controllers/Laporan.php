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
			'pertanyaan' => $this->m_kuesioner->getPertanyaanByKuesionerIDNonSkala($kuesionerID),
			'kuesionerID' => $kuesionerID
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('v_laporanAlumni', $data);
		$this->load->view('element/footer');
	}

	public function kuesionerPengguna($kuesionerID)
	{
		if ($this->m_kuesioner->getKuesionerByID($kuesionerID)->jenisKuesionerPengguna == 'skala') {
			$view = 'v_laporanSkalaPengguna';
		} else {
			$view = 'v_laporanPengguna';
		}
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'pertanyaan' => $this->m_kuesioner->getPertanyaanByKuesionerID($kuesionerID),
			'kuesionerID' => $kuesionerID,
			'kuesioner' =>  $this->m_kuesioner->getKuesionerByResponden('pengguna', $prodiID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view($view, $data);
		$this->load->view('element/footer');
	}

	public function laporanSkala()
	{
		$prodiID = $this->session->userdata('prodiID');
		$kuesioner = $this->m_kuesioner->getKuesionerByResponden('alumni', $prodiID);
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'kuesioner' => $kuesioner
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('v_laporanSkala', $data);
		$this->load->view('element/footer');
	}

	public function laporanPengguna()
	{
		$pertanyaanID = $this->input->post('pertanyaanID');
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'grafik' => $this->m_hasil->getHasilPengguna($pertanyaanID, $prodiID),
			'label' => $this->m_hasil->getPilihanJawabanByPertanyaanID($pertanyaanID),
			'pertanyaan' => $this->m_kuesioner->getPertanyaanByPertanyaanID($pertanyaanID),
			'tabel' => $this->m_hasil->getJawabanPenggunaByPertanyaanID($pertanyaanID),
			//'getPertanyaan' => $this->m_kuesioner->getPertanyaanByKuesionerID($this->input->post('kuesionerID'))
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('v_hasilLaporanPengguna', $data);
		$this->load->view('element/footer');
	}

	public function laporanAlumni()
	{
		$pertanyaanID = $this->input->post('pertanyaanID');
		$tahun_lulus = $this->input->post('tahun_lulus');
		$prodiID = $this->session->userdata('prodiID');
		if ($tahun_lulus == "") {
			$tabel = $this->m_hasil->getJawabanByPertanyaanID($pertanyaanID);
			$grafik = $this->m_hasil->getHasilAlumni($pertanyaanID, $prodiID);
		} else {
			$tabel = $this->m_hasil->getJawabanByPertanyaanTahun($pertanyaanID, $tahun_lulus);
			$grafik = $this->m_hasil->getHasilAlumniTahun($pertanyaanID, $prodiID, $tahun_lulus);
		}
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'grafik' => $grafik,
			'label' => $this->m_hasil->getPilihanJawabanByPertanyaanID($pertanyaanID),
			'pertanyaan' => $this->m_kuesioner->getPertanyaanByPertanyaanID($pertanyaanID),
			'tabel' => $tabel,
			'getPertanyaan' => $this->m_kuesioner->getPertanyaanByKuesionerID($this->input->post('kuesionerID'))
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('v_hasilLaporanAlumni', $data);
		$this->load->view('element/footer');
	}

	public function laporanAlumniSkala()
	{
		$pertanyaanID = $this->input->post('pertanyaanID');
		$pertanyaanSkalaID = $this->input->post('pertanyaanSkalaID');
		$tahun_lulus = $this->input->post('tahun_lulus');
		$prodiID = $this->session->userdata('prodiID');
		if ($tahun_lulus == "") {
			$tabel = $this->m_hasil->getJawabanByPertanyaanSkalaID($pertanyaanSkalaID);
			$grafik = $this->m_hasil->getHasilAlumniSkala($pertanyaanSkalaID, $prodiID);
		} else {
			$tabel = $this->m_hasil->getJawabanByPertanyaanSkalaTahun($pertanyaanSkalaID, $tahun_lulus);
			$grafik = $this->m_hasil->getHasilAlumniSkalaTahun($pertanyaanSkalaID, $prodiID, $tahun_lulus);
		}
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'grafik' => $grafik,
			'label' => $this->m_hasil->getSkalaByPertanyaanID($pertanyaanID),
			'pertanyaan' => $this->m_kuesioner->getPertanyaanByPertanyaanID($pertanyaanID),
			'pertanyaanSkala' => $this->m_kuesioner->getPertanyaanSkalaByID($pertanyaanSkalaID),
			'tabel' => $tabel,
			//'getPertanyaan' => $this->m_kuesioner->getPertanyaanByKuesionerID($this->input->post('kuesionerID'))
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('v_hasilLaporanAlumniSkala', $data);
		$this->load->view('element/footer');
	}

public function laporanPenggunaSkala()
	{
		$pertanyaanID = $this->input->post('pertanyaanID');
		$pertanyaanSkalaID = $this->input->post('pertanyaanSkalaID');
		$prodiID = $this->session->userdata('prodiID');

		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'grafik' => $this->m_hasil->getHasilPenggunaSkala($pertanyaanSkalaID, $prodiID),
			'label' => $this->m_hasil->getSkalaByPertanyaanID($pertanyaanID),
			'pertanyaan' => $this->m_kuesioner->getPertanyaanByPertanyaanID($pertanyaanID),
			'pertanyaanSkala' => $this->m_kuesioner->getPertanyaanSkalaByID($pertanyaanSkalaID),
			'tabel' => $this->m_hasil->getJawabanPenggunaByPertanyaanSkalaID($pertanyaanSkalaID),
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('v_hasilLaporanPenggunaSkala', $data);
		$this->load->view('element/footer');
	}	



	public function getPertanyaanSkala(){
	    // Ambil data ID Provinsi yang dikirim via ajax post
	    $pertanyaanID = $this->input->post('pertanyaanID');
	    
	    $pertanyaanSkala = $this->m_kuesioner->getPertanyaanSkalaByPertanyaanID($pertanyaanID);
	    
	    // Buat variabel untuk menampung tag-tag option nya
	    // Set defaultnya dengan tag option Pilih
	    $lists = "<option value=''>Pilih Pertanyaan</option>";
	    
	    foreach($pertanyaanSkala as $data){
	      $lists .= "<option value='".$data->id."'>".$data->pertanyaan."</option>"; // Tambahkan tag option ke variabel $lists
	    }
	    //list_kota = list_pertanyaanSkala
	    $callback = array('list_pertanyaanSkala'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
	    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
}