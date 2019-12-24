<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_kuesioner');
 
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

		public function kelolaAkunProdi()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'prodi' => $this->m_master->getProdi(),
			'fakultas' => $this->m_master->getFakultas(),
			'admin' => $this->m_master->getAdminFromUser()
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('superadmin/v_kelolaAkun', $data);
		$this->load->view('element/footerVer2');
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

	function exeEditAkunProdi()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'prodiID' => $this->input->post('prodiID'),
		);

		$where = array('id' => $this->input->post('id'));
		$this->m_master->updateData($where,$data,'user');

		if ($this->input->post('password') != "") {
			$data = array('password' => md5($this->input->post('password')));
			$where = array('id' => $this->input->post('id'));
			$this->m_master->updateData($where,$data,'user');
		}
		
		redirect('superadmin/Master/kelolaAkunProdi');
	}

	function exeAddAkunProdi()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'prodiID' => $this->input->post('prodiID'),
			'role' => 'admin',
			);
			$this->m_master->inputData($data,'user');

		$berandaAlumni = array(
			'jenis' => 'alumni',
			'prodiID' => $this->input->post('prodiID')
			);
		$this->m_master->inputData($berandaAlumni,'beranda');

		$berandaPengguna = array(
			'jenis' => 'pengguna',
			'prodiID' => $this->input->post('prodiID')
			);
		$this->m_master->inputData($berandaPengguna,'beranda');

		//untuk laporan data diri (ipk toefl gaji)
		$kuesioner = array(
			'nama_kuesioner' => 'pekerjaan',
			 'responden' => 'alumni',
			 'prodiID' => $this->input->post('prodiID')
		);
		$this->m_master->inputData($kuesioner,'kuesioner');
		$kuesioner = array(
			'nama_kuesioner' => 'pendidikan',
			 'responden' => 'alumni',
			 'prodiID' => $this->input->post('prodiID')
		);
		$this->m_master->inputData($kuesioner,'kuesioner');

		//untuk kuesiooner pengguna (kompetensi dan saran)
		//generate customID kuesioner
		$id_length = 8;
		$id_found = false;
		$possible_chars = "23456789BCDFGHJKMNPQRSTVWXYZ"; 
		while (!$id_found) {  
		    $customID = "";  
		    $i = 0;  
		    while ($i < $id_length) {  
		        $char = substr($possible_chars, mt_rand(0, strlen($possible_chars)-1), 1);  
		        $customID .= $char;   
		        $i++;   
		    }  
		    $where = array( 'customID' => $customID);
		    $cek = $this->m_master->cekData("kuesioner",$where)->num_rows();
		    if ($cek == 0) {
		    	$id_found = true;
		    }
		}  //tutup while
		$kuesioner = array(
			'nama_kuesioner' => 'kompetensi',
			'responden' => 'pengguna',
			'prodiID' => $this->input->post('prodiID'),
			'customID' => $customID
		);
		$this->m_master->inputData($kuesioner,'kuesioner');

		$kuesionerID = $this->m_kuesioner->getKuesionerByCustomID($customID)->id;
		//generate customID kuesioner
		$id_length = 8;
		$id_found = false;
		$possible_chars = "23456789BCDFGHJKMNPQRSTVWXYZ"; 
		while (!$id_found) {  
		    $customID = "";  
		    $i = 0;  
		    while ($i < $id_length) {  
		        $char = substr($possible_chars, mt_rand(0, strlen($possible_chars)-1), 1);  
		        $customID .= $char;   
		        $i++;   
		    }  
		    $where = array( 'customID' => $customID);
		    $cek = $this->m_master->cekData("kuesioner",$where)->num_rows();
		    if ($cek == 0) {
		    	$id_found = true;
		    }
		}  //tutup while
		$pertanyaan = array(
			'pertanyaan' => 'Jenis Kemampuan',
			'jenis' => 'skala',
			'kuesionerID' => $kuesionerID,
			'customID' => $customID
		);
		$this->m_master->inputData($pertanyaan,'pertanyaan');
		$pertanyaanID = $this->m_kuesioner->getPertanyaanByCustomID($customID)->id;

		$pertanyaanKompetensi = $this->m_kuesioner->getPertanyaanSkalaByPertanyaanID('101');
		foreach ($pertanyaanKompetensi as $p) {
			$pertanyaanSkala = array(
				'pertanyaan' => $p->pertanyaan,
				'pertanyaanID' => $pertanyaanID
			);
			$this->m_master->inputData($pertanyaanSkala,'pertanyaan_skala');
		}
		$skalaNilai = $this->m_kuesioner->getSkalaByPertanyaanID('101');
		foreach ($skalaNilai as $p) {
			$skala_nilai = array(
				'nilai' => $p->nilai,
				'pertanyaanID' => $pertanyaanID
			);
		$this->m_master->inputData($skala_nilai,'skala_nilai');
		}

	redirect('superadmin/Master/kelolaAkunProdi');
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

	function deleteAkunProdi($id){
		$prodiID = $this->m_master->getUserByID($id)->prodiID;
		$where = array('prodiID' => $prodiID);
		$data = array(
			'isDelete' => 'yes',
		);
		$this->m_master->updateData($where,$data,'kuesioner');

		$where = array('id' => $id);
		$this->m_master->deleteData($where,'user');
		redirect('superadmin/Master/kelolaAkunProdi');
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

	public function getAkunProdi($id)
	{
		$data = $this->m_master->getUserByID($id);
		echo json_encode($data);
	}

	public function getFakultas($id)
	{
		$data = $this->m_master->getFakultasByID($id);
		echo json_encode($data);
	}

}
