<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_master');
		$this->load->model('m_kuesioner');
		$this->load->model('m_pengguna');
 
	}

	public function kuesionerInstansi($penggunaID)
	{
		$prodiID = $this->m_pengguna->getPenggunaByID($penggunaID)->prodiID;
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'kuesioner' => $this->m_kuesioner->getKuesionerPengguna($prodiID),
			'penggunaID' => $penggunaID,
			'prodiID' => $prodiID
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar_pengguna', $data);
		$this->load->view('pengguna/v_kuesionerPengguna', $data);
		$this->load->view('element/footer');
	}

	public function kuesionerPenggunaAlumni($prodiID)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'kuesioner' => $this->m_kuesioner->getKuesionerPengguna($prodiID),
			'penggunaID' => Null,
			'prodiID' => $prodiID,
			'instansi' => $this->m_master->getInstansi(),
			'nama_instansi' => ''
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar_pengguna', $data);
		$this->load->view('pengguna/v_kuesionerPenggunaVer2', $data);
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
			'kuesioner' => $this->m_kuesioner->getKuesionerPengguna($prodiID),
			'penggunaID' => Null,
			'prodiID' => $prodiID,
			'instansi' => $this->m_master->getInstansi(),
			'nama_instansi' => $this->input->post('nama_instansi'),
		);

		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar_pengguna', $data);
		$this->load->view('pengguna/v_kuesionerPenggunaVer2', $data);
		$this->load->view('element/footer');
	}

	public function addJawaban()
	{
		$penggunaID = $this->input->post('penggunaID');
		$prodiID = $this->m_pengguna->getPenggunaByID($penggunaID)->prodiID;
		$kuesionerID = $this->m_kuesioner->getKuesionerByResponden('pengguna', $prodiID);
		foreach ($kuesionerID as $k ) {
			$pertanyaan = $this->m_kuesioner->getPertanyaanByKuesionerID($k->id);
			foreach ($pertanyaan as $p) {
				if ($p->jenis == 'ganda') {
					$jawaban = $this->input->post($p->id);
					foreach ($jawaban as $j) {       						
				        $data = array(	            
				        	'pertanyaanID' => $p->id,
				        	'jawaban' => $j,
				        	'penggunaID' => $penggunaID
				        );				        
				        $this->m_master->inputData($data,'jawaban_pengguna');
				    } // foreach jawaban ganda
				} // if ganda 
				elseif ($p->jenis == 'isian' || $p->jenis == 'pilihan') {
					if ($this->input->post($p->id) != Null) {
						$data = array(
						'pertanyaanID' => $p->id,
			            'jawaban' => $this->input->post($p->id),
			            'penggunaID' => $penggunaID
			          	);
						$this->m_master->inputData($data, 'jawaban_pengguna');
					} //if not null
				} // if isian dan pilihan
				elseif ($p->jenis == 'skala') {
					$pertanyaanSkala = $this->m_kuesioner->getPertanyaanSkalaByPertanyaanID($p->id);
					foreach ($pertanyaanSkala as $ps) {
						if ($this->input->post($ps->id) != Null) {
							$data = array(	            
					        	'pertanyaanID' => $p->id,
					        	'pertanyaanSkalaID' => $ps->id,
					        	'jawaban' => $this->input->post($ps->id),
					        	'penggunaID' => $penggunaID
					        );				        
					        $this->m_master->inputData($data,'jawaban_pengguna');
				    	} // if not null
					}
				}
			}//foreach pertanyaan
		} //foreach kuesionerID

		$data = array(
			'respondenID' => $penggunaID,
			'jenis_kuesioner' => 'pengguna',
			'timestamp' => date("d-m-Y"),
			'prodiID' => $prodiID
		);
		$this->m_master->inputData($data,'notif_kuesioner');

		$this->session->set_flashdata("pesan", '<div><div class="alert alert-success" id="alert" align="center">Pengisian Kuesioner Sukses! Terimakasih atas partisipasi anda</div></div>');
		redirect('pengguna/Kuesioner/kuesionerInstansi/'.$penggunaID);
	}

public function addJawabanVer2()
	{
		$prodiID = $this->input->post('prodiID');
		//data tabel pengguna
		//generate penggunaID
		$id_length = 8;
		$id_found = false;
		$possible_chars = "23456789BCDFGHJKMNPQRSTVWXYZ"; 
		while (!$id_found) {  
			$penggunaID = "";  
			$i = 0;  
			while ($i < $id_length) {  
			    $char = substr($possible_chars, mt_rand(0, strlen($possible_chars)-1), 1);  
			    $penggunaID .= $char;   
			    $i++;   
			    }  
			$where = array( 'penggunaID' => $penggunaID);
			$cek = $this->m_master->cekData("pengguna",$where)->num_rows();
			if ($cek == 0) {
			   	$id_found = true;
			}
		} 
		$data = array(
			'pengguna_nama' => $this->input->post('pengguna_nama'),
			'pengguna_email' => $this->input->post('pengguna_email'),
			'pengguna_telepon' => $this->input->post('pengguna_telepon'),
			'id_instansi' => $this->input->post('id_instansi'),
			'divisi' => $this->input->post('divisi'),
			'prodiID' => $this->input->post('prodiID'),
			'penggunaID' => $penggunaID
		);
		$this->m_master->inputData($data,'pengguna');
		$id_pengguna = $this->m_pengguna->getPenggunaByPenggunaID($penggunaID)->id;

		$kuesionerID = $this->m_kuesioner->getKuesionerByResponden('pengguna', $prodiID);
		foreach ($kuesionerID as $k ) {
			$pertanyaan = $this->m_kuesioner->getPertanyaanByKuesionerID($k->id);
			foreach ($pertanyaan as $p) {
				if ($p->jenis == 'ganda') {
					$jawaban = $this->input->post($p->id);
					foreach ($jawaban as $j) {       						
				        $data = array(	            
				        	'pertanyaanID' => $p->id,
				        	'jawaban' => $j,
				        	'penggunaID' => $id_pengguna
				        );				        
				        $this->m_master->inputData($data,'jawaban_pengguna');
				    } // foreach jawaban ganda
				} // if ganda 
				elseif ($p->jenis == 'isian' || $p->jenis == 'pilihan') {
					if ($this->input->post($p->id) != Null) {
						$data = array(
						'pertanyaanID' => $p->id,
			            'jawaban' => $this->input->post($p->id),
			            'penggunaID' => $id_pengguna
			          	);
						$this->m_master->inputData($data, 'jawaban_pengguna');
					} //if not null
				} // if isian dan pilihan
				elseif ($p->jenis == 'skala') {
					$pertanyaanSkala = $this->m_kuesioner->getPertanyaanSkalaByPertanyaanID($p->id);
					foreach ($pertanyaanSkala as $ps) {
						if ($this->input->post($ps->id) != Null) {
							$data = array(	            
					        	'pertanyaanID' => $p->id,
					        	'pertanyaanSkalaID' => $ps->id,
					        	'jawaban' => $this->input->post($ps->id),
					        	'penggunaID' => $id_pengguna
					        );				        
					        $this->m_master->inputData($data,'jawaban_pengguna');
				    	} // if not null
					}
				}
			}//foreach pertanyaan
		} //foreach kuesionerID

		$data = array(
			'jenis_kuesioner' => 'pengguna',
			'timestamp' => date("d-m-Y"),
			'prodiID' => $prodiID
		);
		$this->m_master->inputData($data,'notif_kuesioner');
		
		$this->session->set_flashdata("pesan", '<div><div class="alert alert-success" id="alert" align="center">Pengisian Kuesioner Sukses! Terimakasih atas partisipasi anda</div></div>');
		redirect('pengguna/Kuesioner/kuesionerPenggunaAlumni/'.$prodiID);
	}
}
