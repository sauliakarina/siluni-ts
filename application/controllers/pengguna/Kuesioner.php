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
			'prodiID' => $prodiID
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
			'timestamp' => date("d-m-Y")
		);
		$this->m_master->inputData($data,'notif_kuesioner');

		$this->session->set_flashdata("pesan", '<div><div class="alert alert-success" id="alert" align="center">Pengisian Kuesioner Sukses! Terimakasih atas partisipasi anda</div></div>');
		redirect('pengguna/Kuesioner/kuesionerInstansi/'.$penggunaID);
	}

public function addJawabanVer2()
	{
		$prodiID = $this->input->post('prodiID');
		$kuesionerID = $this->m_kuesioner->getKuesionerByResponden('pengguna', $prodiID);
		foreach ($kuesionerID as $k ) {
			$pertanyaan = $this->m_kuesioner->getPertanyaanByKuesionerID($k->id);
			foreach ($pertanyaan as $p) {
				if ($p->jenis == 'ganda') {
					$jawaban = $this->input->post($p->id);
					foreach ($jawaban as $j) {       						
				        $data = array(	            
				        	'pertanyaanID' => $p->id,
				        	'jawaban' => $j
				        );				        
				        $this->m_master->inputData($data,'jawaban_pengguna');
				    } // foreach jawaban ganda
				} // if ganda 
				elseif ($p->jenis == 'isian' || $p->jenis == 'pilihan') {
					if ($this->input->post($p->id) != Null) {
						$data = array(
						'pertanyaanID' => $p->id,
			            'jawaban' => $this->input->post($p->id)
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
					        	'jawaban' => $this->input->post($ps->id)
					        );				        
					        $this->m_master->inputData($data,'jawaban_pengguna');
				    	} // if not null
					}
				}
			}//foreach pertanyaan
		} //foreach kuesionerID
		$this->session->set_flashdata("pesan", '<div><div class="alert alert-success" id="alert" align="center">Pengisian Kuesioner Sukses! Terimakasih atas partisipasi anda</div></div>');
		redirect('pengguna/Kuesioner/kuesionerPenggunaAlumni/'.$prodiID);
	}
}
