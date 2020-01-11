<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($_SESSION["logged_in"] != 'login') {
			redirect(base_url("login"));
		}
				
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_pengguna');
		$this->load->model('m_hasil');
		$this->load->model('m_kuesioner');
 
	}

	public function kuesionerAlumni()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'kuesioner' => $this->m_kuesioner->getKuesionerAlumniAdmin($this->session->userdata('prodiID'))
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_kuesionerAlumni', $data);
		$this->load->view('element/footerVer2');
	}

	public function kuesionerPengguna()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'kuesioner' => $this->m_kuesioner->getKuesionerPenggunaAdmin($this->session->userdata('prodiID'))
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_kuesionerPenggunaAlumni', $data);
		$this->load->view('element/footerVer2');
	}

	public function buatPertanyaanPengguna($kuesionerID)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'kuesioner' => $this->m_kuesioner->getKuesionerByID($kuesionerID),
			'pertanyaan' => $this->m_kuesioner->getPertanyaanByKuesionerID($kuesionerID),
			'kuesionerID' => $kuesionerID

		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_buatPertanyaanPengguna', $data);
		$this->load->view('element/footer');
	}

	public function kelolaKuesionerAlumni($kuesionerID)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'kuesioner' => $this->m_kuesioner->getKuesionerByID($kuesionerID),
			'pertanyaan' => $this->m_kuesioner->getPertanyaanByKuesionerID($kuesionerID)

		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_kelolaKuesioner', $data);
		$this->load->view('element/footer');
	}

	public function jawabanKuesionerAlumni()
	{
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'alumni' => $this->m_hasil->getNotifKuesionerAlumni('alumni', $prodiID),
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_jawabanKuesionerAlumni', $data);
		$this->load->view('element/footer');
	}

	public function lihatJawabanAlumni($notifID)
	{
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'kuesioner' => $this->m_kuesioner->getKuesionerAlumni($prodiID),
			'notifID' => $notifID
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_lihatJawabanAlumni', $data);
		$this->load->view('element/footer');
	}

	public function jawabanKuesionerPengguna()
	{
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'pengguna' => $this->m_hasil->getNotifKuesionerPengguna('pengguna', $prodiID),
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_jawabanKuesionerPengguna', $data);
		$this->load->view('element/footer');
	}

	public function lihatJawabanPengguna($notifID)
	{
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'kuesioner' => $this->m_kuesioner->getKuesionerPengguna($prodiID),
			'notifID' => $notifID
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_lihatJawabanPengguna', $data);
		$this->load->view('element/footer');
	}

	public function editKuesioner($kuesionerID)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'kuesioner' => $this->m_kuesioner->getKuesionerByID($kuesionerID),
			'pertanyaan' => $this->m_kuesioner->getPertanyaanByKuesionerID($kuesionerID)

		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_editKuesioner', $data);
		$this->load->view('element/footer');
	}

	public function cobaBuatKuesioner()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID')
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('backup/v_Buatkuesioner', $data);
		$this->load->view('element/footer');
	}

	public function editPertanyaan($pertanyaanID)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'pr' => $this->m_kuesioner->getPertanyaanByID($pertanyaanID),
			'pilihan_jawaban' => $this->m_kuesioner->getPilihanJawabanByPertanyaanID($pertanyaanID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_editPertanyaanKuesioner', $data);
		$this->load->view('element/footer');
	}

	public function editPertanyaanKuesioner($pertanyaanID)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'pr' => $this->m_kuesioner->getPertanyaanByID($pertanyaanID),
			'pilihan_jawaban' => $this->m_kuesioner->getPilihanJawabanByPertanyaanID($pertanyaanID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_editPertanyaanKuesioner', $data);
		$this->load->view('element/footer');
	}

	public function addKuesionerAlumni()
	{
		
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

		$data = array(
			'nama_kuesioner' => $this->input->post('nama_kuesioner'),
			'responden' => 'alumni',
			'prodiID' => $this->session->userdata('prodiID'),
			'customID' => $customID
		);	
		$this->m_master->inputData($data,'kuesioner');
		$kuesionerID = $this->m_kuesioner->getKuesionerByCustomID($customID)->id;
		redirect('admin/Kuesioner/kelolaKuesionerAlumni/'.$kuesionerID);
	}

	public function addKuesionerPengguna()
	{
		
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

		$data = array(
			'nama_kuesioner' => $this->input->post('nama_kuesioner'),
			'responden' => 'pengguna',
			'prodiID' => $this->session->userdata('prodiID'),
			'customID' => $customID,
			'jenisKuesionerPengguna' => $this->input->post('jenisKuesionerPengguna'),
		);	
		$this->m_master->inputData($data,'kuesioner');
		$kuesionerID = $this->m_kuesioner->getKuesionerByCustomID($customID)->id;
		redirect('admin/Kuesioner/buatPertanyaanPengguna/'.$kuesionerID);
	}

	public function addIsian() {
		//generate customID pertanyaan
			$id_found = false;
			while (!$id_found) {  
			    $customID = 'PR'.time();
			    $where = array( 'customID' => $customID);
			    $cek = $this->m_master->cekData("pertanyaan",$where)->num_rows();
			    if ($cek == 0) {
			    	$id_found = true;
			    }
			}  //tutup while

		$data = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'kuesionerID' => $this->input->post('kuesionerID'),
			'jenis' => 'isian',
			'customID' => $customID,
			'textarea' => $this->input->post('textarea'),
			'keterangan' => $this->input->post('keterangan')
		);	
		$kuesionerID = $this->input->post('kuesionerID');
		$this->m_master->inputData($data,'pertanyaan');
		redirect('admin/Kuesioner/kelolaKuesionerAlumni/'.$kuesionerID);
	}

	public function addIsianPengguna() {
		//generate customID pertanyaan
			$id_found = false;
			while (!$id_found) {  
			    $customID = 'PR'.time();
			    $where = array( 'customID' => $customID);
			    $cek = $this->m_master->cekData("pertanyaan",$where)->num_rows();
			    if ($cek == 0) {
			    	$id_found = true;
			    }
			}  //tutup while

		$data = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'kuesionerID' => $this->input->post('kuesionerID'),
			'jenis' => 'isian',
			'customID' => $customID,
			'textarea' => $this->input->post('textarea')
		);	
		$kuesionerID = $this->input->post('kuesionerID');
		$this->m_master->inputData($data,'pertanyaan');
		redirect('admin/Kuesioner/buatPertanyaanPengguna/'.$kuesionerID);
	}


	public function addPilihan() {
		//set pertanyaan
		//generate customID pertanyaan
		$id_found = false;
		while (!$id_found) {  
			$customIDPR = 'PR'.time();
			$where = array( 'customID' => $customIDPR);
			$cek = $this->m_master->cekData("pertanyaan",$where)->num_rows();
			if ($cek == 0) {
				$id_found = true;
			 }
		}  //tutup while
		$data = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'kuesionerID' => $this->input->post('kuesionerID'),
			'jenis' => 'pilihan',
			'inputBox' => $this->input->post('inputBox'),
			'customID' => $customIDPR,
			'keterangan' => $this->input->post('keterangan')
		);	
		$this->m_master->inputData($data,'pertanyaan');

		$pertanyaanID = $this->m_kuesioner->getPertanyaanByCustomID($customIDPR)->id;
		//set pilihan jawaban
		$pilihan_jawaban = $this->input->post('jawaban');
		foreach ($pilihan_jawaban as $list_pilihan_jawaban) {
        $data = array(
          'pilihan'=> $list_pilihan_jawaban,
          'pertanyaanID' =>$pertanyaanID,
        );
        $this->m_master->inputData($data,'pilihan_jawaban');
		}
		//href
        $kuesionerID = $this->input->post('kuesionerID');
		redirect('admin/Kuesioner/kelolaKuesionerAlumni/'.$kuesionerID);

	}

	public function addPilihanPengguna() {
		//set pertanyaan
		//generate customID pertanyaan
		$id_found = false;
		while (!$id_found) {  
			$customIDPR = 'PR'.time();
			$where = array( 'customID' => $customIDPR);
			$cek = $this->m_master->cekData("pertanyaan",$where)->num_rows();
			if ($cek == 0) {
				$id_found = true;
			 }
		}  //tutup while
		$data = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'kuesionerID' => $this->input->post('kuesionerID'),
			'jenis' => 'pilihan',
			'customID' => $customIDPR
		);	
		$this->m_master->inputData($data,'pertanyaan');

		$pertanyaanID = $this->m_kuesioner->getPertanyaanByCustomID($customIDPR)->id;
		//set pilihan jawaban
		$pilihan_jawaban = $this->input->post('jawaban');
		foreach ($pilihan_jawaban as $list_pilihan_jawaban) {
        $data = array(
          'pilihan'=> $list_pilihan_jawaban,
          'pertanyaanID' =>$pertanyaanID,
        );
        $this->m_master->inputData($data,'pilihan_jawaban');
		}
		//href
        $kuesionerID = $this->input->post('kuesionerID');
		redirect('admin/Kuesioner/buatPertanyaanPengguna/'.$kuesionerID);

	}

public function addGanda() {
		//set pertanyaan
		//generate customID pertanyaan
		$id_found = false;
		while (!$id_found) {  
			$customIDPR = 'PR'.time();
			$where = array( 'customID' => $customIDPR);
			$cek = $this->m_master->cekData("pertanyaan",$where)->num_rows();
			if ($cek == 0) {
				$id_found = true;
			 }
		}  //tutup while
		$data = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'kuesionerID' => $this->input->post('kuesionerID'),
			'jenis' => 'ganda',
			'inputBox' => $this->input->post('inputBox'),
			'customID' => $customIDPR,
			'keterangan' => $this->input->post('keterangan')
		);	
		$this->m_master->inputData($data,'pertanyaan');

		$pertanyaanID = $this->m_kuesioner->getPertanyaanByCustomID($customIDPR)->id;
		//set pilihan jawaban
		$pilihan_jawaban = $this->input->post('jawaban');
		foreach ($pilihan_jawaban as $list_pilihan_jawaban) {
	        $data = array(
	          'pilihan'=> $list_pilihan_jawaban,
	          'pertanyaanID' =>$pertanyaanID,
	        );
	        $this->m_master->inputData($data,'pilihan_jawaban');
		}
		//href
        $kuesionerID = $this->input->post('kuesionerID');
		redirect('admin/Kuesioner/kelolaKuesionerAlumni/'.$kuesionerID);

	}

	public function addGandaPengguna() {
		//set pertanyaan
		//generate customID pertanyaan
		$id_found = false;
		while (!$id_found) {  
			$customIDPR = 'PR'.time();
			$where = array( 'customID' => $customIDPR);
			$cek = $this->m_master->cekData("pertanyaan",$where)->num_rows();
			if ($cek == 0) {
				$id_found = true;
			 }
		}  //tutup while
		$data = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'kuesionerID' => $this->input->post('kuesionerID'),
			'jenis' => 'ganda',
			'customID' => $customIDPR 
		);	
		$this->m_master->inputData($data,'pertanyaan');

		$pertanyaanID = $this->m_kuesioner->getPertanyaanByCustomID($customIDPR)->id;
		//set pilihan jawaban
		$pilihan_jawaban = $this->input->post('jawaban');
		foreach ($pilihan_jawaban as $list_pilihan_jawaban) {
	        $data = array(
	          'pilihan'=> $list_pilihan_jawaban,
	          'pertanyaanID' =>$pertanyaanID,
	        );
	        $this->m_master->inputData($data,'pilihan_jawaban');
		}
		//href
        $kuesionerID = $this->input->post('kuesionerID');
		redirect('admin/Kuesioner/buatPertanyaanPengguna/'.$kuesionerID);

	}

	public function addSkalaAlumni() {
		//generate customID pertanyaan
		//input pertanyaan
		$id_found = false;
		while (!$id_found) {  
				$customIDPR = 'PR'.time();
				$where = array( 'customID' => $customIDPR);
				$cek = $this->m_master->cekData("pertanyaan",$where)->num_rows();
				if ($cek == 0) {
					$id_found = true;
				 }
		}  //tutup while
		$data = array(
				'pertanyaan' => $this->input->post('pertanyaan_skala'),
				'kuesionerID' => $this->input->post('kuesionerID'),
				'jenis' => 'skala',
				'customID' => $customIDPR,
				'keterangan' => $this->input->post('keterangan')
		);
		$this->m_master->inputData($data,'pertanyaan');
		$pertanyaanID = $this->m_kuesioner->getPertanyaanByCustomID($customIDPR)->id;
		
		//input daftar pertanyaan skala
		$skalaPertanyaan = $this->input->post('skalaPertanyaan');
		foreach ($skalaPertanyaan as $s) {
			$data = array(
				'pertanyaan' => $s,
				'pertanyaanID' => $pertanyaanID
			);
			$this->m_master->inputData($data,'pertanyaan_skala');
		} // foreach pertanyaan skala

		//input daftar pertanyaan skala
		$skalaNilai = $this->input->post('skalaNilai');
		foreach ($skalaNilai as $s) {
			$data = array(
				'nilai' => $s,
				'pertanyaanID' => $pertanyaanID
			);
			$this->m_master->inputData($data,'skala_nilai');
		} // foreach skala penilaian
		//href
	    $kuesionerID = $this->input->post('kuesionerID');
		redirect('admin/Kuesioner/kelolaKuesionerAlumni/'.$kuesionerID);
	}


	public function addSkala() {
		//generate customID pertanyaan
		//input pertanyaan
		$id_found = false;
		while (!$id_found) {  
				$customIDPR = 'PR'.time();
				$where = array( 'customID' => $customIDPR);
				$cek = $this->m_master->cekData("pertanyaan",$where)->num_rows();
				if ($cek == 0) {
					$id_found = true;
				 }
		}  //tutup while
		$data = array(
				'pertanyaan' => $this->input->post('pertanyaan_skala'),
				'kuesionerID' => $this->input->post('kuesionerID'),
				'jenis' => 'skala',
				'customID' => $customIDPR
		);
		$this->m_master->inputData($data,'pertanyaan');
		$pertanyaanID = $this->m_kuesioner->getPertanyaanByCustomID($customIDPR)->id;
		
		//input daftar pertanyaan skala
		$skalaPertanyaan = $this->input->post('skalaPertanyaan');
		foreach ($skalaPertanyaan as $s) {
			$data = array(
				'pertanyaan' => $s,
				'pertanyaanID' => $pertanyaanID
			);
			$this->m_master->inputData($data,'pertanyaan_skala');
		} // foreach pertanyaan skala

		//input daftar pertanyaan skala
		$skalaNilai = $this->input->post('skalaNilai');
		foreach ($skalaNilai as $s) {
			$data = array(
				'nilai' => $s,
				'pertanyaanID' => $pertanyaanID
			);
			$this->m_master->inputData($data,'skala_nilai');
		} // foreach skala penilaian
		//href
	    $kuesionerID = $this->input->post('kuesionerID');
		redirect('admin/Kuesioner/buatPertanyaanPengguna/'.$kuesionerID);
	}

	function deleteKuesioner($id){
		//get id pertanyaan
		$pertanyaan = $this->m_kuesioner->getPertanyaanByKuesionerID($id);
		//delete pilihan jawaban
		foreach ($pertanyaan as $p) {
			$pertanyaanID = $p->id;
			$this->m_kuesioner->deletePilihan($pertanyaanID);
		}
		//delete pertanyaan
		$where = array(
			'kuesionerID' => $id
		);
		$this->m_master->deleteData($where,'pertanyaan');
		//delete kuesioner
		$where = array(
			'id' => $id
		);
		$this->m_master->deleteData($where,'kuesioner');
		redirect('admin/Kuesioner/kuesionerAlumni');
	}

	function deleteKuesionerPengguna($id){
		//get id pertanyaan
		$pertanyaan = $this->m_kuesioner->getPertanyaanByKuesionerID($id);
		//delete pilihan jawaban
		foreach ($pertanyaan as $p) {
			$pertanyaanID = $p->id;
			$this->m_kuesioner->deletePilihan($pertanyaanID);
		}
		//delete pertanyaan
		$where = array(
			'kuesionerID' => $id
		);
		$this->m_master->deleteData($where,'pertanyaan');
		//delete kuesioner
		$where = array(
			'id' => $id
		);
		$this->m_master->deleteData($where,'kuesioner');
		redirect('admin/Kuesioner/kuesionerPengguna');
	}

	function deletePertanyaan($pertanyaanID){
		$kuesionerID = $this->m_kuesioner->getPertanyaanByID($pertanyaanID)->kuesionerID;
		//get id pilihan
		$pilihan = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($pertanyaanID);
		//delete pilihan jawaban
		foreach ($pilihan as $p) {
			$pilihanID = $p->id;
			$this->m_kuesioner->deletePilihanByID($pilihanID);
		}
		//delete pertanyaan
		$where = array(
			'id' => $pertanyaanID
		);
		$data = array(
			'isDelete' => 'yes',
			'customID' => ''
		);
		$this->m_master->updateData($where,$data,'pertanyaan');
		redirect('admin/Kuesioner/kelolaKuesionerAlumni/'.$kuesionerID);
	}

	function deletePertanyaanPengguna($pertanyaanID){
		$kuesionerID = $this->m_kuesioner->getPertanyaanByID($pertanyaanID)->kuesionerID;
		//get id pilihan
		$pilihan = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($pertanyaanID);
		//delete pilihan jawaban
		foreach ($pilihan as $p) {
			$pilihanID = $p->id;
			$this->m_kuesioner->deletePilihanByID($pilihanID);
		}
		//delete pertanyaan
		$where = array(
			'id' => $pertanyaanID
		);
		$data = array(
			'isDelete' => 'yes',
			'customID' => ''
		);
		$this->m_master->updateData($where,$data,'pertanyaan');
		redirect('admin/Kuesioner/buatPertanyaanPengguna/'.$kuesionerID);
	}

	function deletePertanyaanSkala($pertanyaanID){
		$kuesionerID = $this->m_kuesioner->getPertanyaanByID($pertanyaanID)->kuesionerID;
		//get id pilihan
		$skalaNilai = $this->m_kuesioner->getSkalaByPertanyaanID($pertanyaanID);
		//delete skala nilai
		foreach ($skalaNilai as $p) {
			$skalaID = $p->id;
			$where = array(
			'id' => $skalaID
			);
			$this->m_master->deleteData($where,'skala_nilai');
		}
		//delete pertanyaan skala
		$skalaPertanyaan = $this->m_kuesioner->getPertanyaanSkalaByPertanyaanID($pertanyaanID);
		foreach ($skalaPertanyaan as $p) {
			$id = $p->id;
			$where = array(
			'id' => $id
			);
			$this->m_master->deleteData($where,'pertanyaan_skala');
		}
		//delete pertanyaan
		$where = array(
			'id' => $pertanyaanID
		);
		$data = array(
			'isDelete' => 'yes',
			'customID' => ''
		);
		$this->m_master->updateData($where,$data,'pertanyaan');
		redirect('admin/Kuesioner/buatPertanyaanPengguna/'.$kuesionerID);
	}

		function deletePertanyaanSkalaAlumni($pertanyaanID){
		$kuesionerID = $this->m_kuesioner->getPertanyaanByID($pertanyaanID)->kuesionerID;
		//get id pilihan
		$skalaNilai = $this->m_kuesioner->getSkalaByPertanyaanID($pertanyaanID);
		//delete skala nilai
		foreach ($skalaNilai as $p) {
			$skalaID = $p->id;
			$where = array(
			'id' => $skalaID
			);
			$this->m_master->deleteData($where,'skala_nilai');
		}
		//delete pertanyaan skala
		$skalaPertanyaan = $this->m_kuesioner->getPertanyaanSkalaByPertanyaanID($pertanyaanID);
		foreach ($skalaPertanyaan as $p) {
			$id = $p->id;
			$where = array(
			'id' => $id
			);
			$this->m_master->deleteData($where,'pertanyaan_skala');
		}
		//delete pertanyaan
		$where = array(
			'id' => $pertanyaanID
		);
		$data = array(
			'isDelete' => 'yes',
			'customID' => ''
		);
		$this->m_master->updateData($where,$data,'pertanyaan');
		redirect('admin/Kuesioner/kelolaKuesionerAlumni/'.$kuesionerID);
	}

	function nonaktifKuesioner($id)
	{
		$data = array(
			'status' => 'nonaktif'
		);
		
		$where = array('id' => $id);
		$this->m_master->updateData($where,$data,'kuesioner');
		redirect('admin/Kuesioner/kuesionerAlumni');
	}

	function aktifKuesioner($id)
	{
		$data = array(
			'status' => 'aktif'
		);
		
		$where = array('id' => $id);
		$this->m_master->updateData($where,$data,'kuesioner');
		redirect('admin/Kuesioner/kuesionerAlumni');
	}


	function nonaktifKuesionerPengguna($id)
	{
		$data = array(
			'status' => 'nonaktif'
		);
		
		$where = array('id' => $id);
		$this->m_master->updateData($where,$data,'kuesioner');
		redirect('admin/Kuesioner/kuesionerPengguna');
	}

	function aktifKuesionerPengguna($id)
	{
		$data = array(
			'status' => 'aktif'
		);
		
		$where = array('id' => $id);
		$this->m_master->updateData($where,$data,'kuesioner');
		redirect('admin/Kuesioner/kuesionerPengguna');
	}




	function simpanPertanyaan()
	{
		$pertanyaanID = $this->input->post('pertanyaanID');
		foreach ($pertanyaanID as $p) {
			$data = array(
			'inputBox' => $this->input->post('inputBox'.$p)
			);
			$where = array('id' => $p);
			$this->m_master->updateData($where,$data,'pertanyaan');
		}
		redirect('admin/Kuesioner/kuesionerAlumni');
	}

	

	public function getPertanyaan($id)
	{
		$data = $this->m_kuesioner->getPertanyaanByID($id);
		echo json_encode($data);
	}

	function exeEditIsian()
	{
		$data = array(
			'pertanyaan' => $this->input->post('pertanyaanIsian')
		);
		
		$where = array('id' => $this->input->post('id'));
		$this->m_master->updateData($where,$data,'pertanyaan');

		$kuesionerID = $this->input->post('kuesionerID');
		redirect('admin/Kuesioner/kelolaKuesionerAlumni/'.$kuesionerID);
	}

	function exeEditPertanyaan()
	{
		$data = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'inputBox' => $this->input->post('inputBox'),
			'keterangan' => $this->input->post('keterangan')
		);
		$where = array('id' => $this->input->post('pertanyaanID'));
		$this->m_master->updateData($where,$data,'pertanyaan');

		$pilihanID = $this->input->post('pilihanID');

        foreach ($pilihanID as $p) {
			$data = array(
			'pilihan' => $this->input->post('pilihan'.$p)
			);
			$where = array('id' => $p);
			$this->m_master->updateData($where,$data,'pilihan_jawaban');
		}

		$kuesionerID = $this->input->post('kuesionerID');
		redirect('admin/Kuesioner/kelolaKuesionerAlumni/'.$kuesionerID);
	}

	function exeEditPertanyaanKuesioner()
	{
		$data = array(
			'pertanyaan' => $this->input->post('pertanyaan'),
			'inputBox' => $this->input->post('inputBox')
		);
		$where = array('id' => $this->input->post('pertanyaanID'));
		$this->m_master->updateData($where,$data,'pertanyaan');

		$pilihanID = $this->input->post('pilihanID');

        foreach ($pilihanID as $p) {
			$data = array(
			'pilihan' => $this->input->post('pilihan'.$p)
			);
			$where = array('id' => $p);
			$this->m_master->updateData($where,$data,'pilihan_jawaban');
		}

		$kuesionerID = $this->input->post('kuesionerID');
		redirect('admin/Kuesioner/editKuesioner/'.$kuesionerID);
	}
}