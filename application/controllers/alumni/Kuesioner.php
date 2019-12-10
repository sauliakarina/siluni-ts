<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_kuesioner');
 
	}


	public function index()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'kuesioner' => $this->m_kuesioner->getKuesionerAlumni($this->session->userdata('prodiID'))
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_isiKuesioner', $data);
		$this->load->view('element/footer');
	}

	public function isiKuesionerBackup()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID')
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_isiKuesionerBackup', $data);
		$this->load->view('element/footer');
	}

	public function addJawaban()
	{
		$alumniID = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$prodiID = $this->session->userdata('prodiID');
		$kuesionerID = $this->m_kuesioner->getKuesionerByResponden('alumni', $prodiID);
		foreach ($kuesionerID as $k ) {
			$pertanyaan = $this->m_kuesioner->getPertanyaanByKuesionerID($k->id);
			foreach ($pertanyaan as $p) {
				if ($p->jenis == 'ganda') {
					$jawaban = $this->input->post($p->id);
					foreach ($jawaban as $j) {       						
				        $data = array(	            
				        	'pertanyaanID' => $p->id,
				        	'jawaban' => $j,
				        	'alumniID' => $alumniID
				        );				        
				        $this->m_master->inputData($data,'jawaban_alumni');
				    } // foreach jawaban ganda
				    if ($p->inputBox == 'ya' && $this->input->post('inputBox'.$p->id) != Null) {
				    	$data = array(
				    		'pertanyaanID' => $p->id,
				        	'jawaban' => $this->input->post('inputBox'.$p->id),
				        	'alumniID' => $alumniID
				    	);
				    	$this->m_master->inputData($data,'jawaban_alumni');
				    } // if inputBox
				} // if ganda 
				elseif ($p->jenis == 'isian' || $p->jenis == 'pilihan') {
					if ($this->input->post($p->id) != Null) {
						$data = array(
						'pertanyaanID' => $p->id,
			            'jawaban' => $this->input->post($p->id),
			            'alumniID' => $alumniID
			          	);
						$this->m_master->inputData($data, 'jawaban_alumni');

						if ($p->inputBox == 'ya' && $this->input->post('inputBox'.$p->id) != Null) {
					    	$data = array(
					    		'pertanyaanID' => $p->id,
					        	'jawaban' => $this->input->post('inputBox'.$p->id),
					        	'alumniID' => $alumniID
					    	);
					    	$this->m_master->inputData($data,'jawaban_alumni');
					    } // if inputBox
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
					        	'alumniID' => $alumniID
					        );				        
					        $this->m_master->inputData($data,'jawaban_alumni');
				    	} // if not null
					}
				}
			}//foreach pertanyaan
		} //foreach kuesionerID

		$data = array(
			'respondenID' => $alumniID,
			'jenis_kuesioner' => 'alumni',
			'timestamp' => date("d-m-Y")
		);
		$this->m_master->inputData($data,'notif_kuesioner');

		$this->session->set_flashdata("pesan", '<div><div class="alert alert-success" id="alert" align="center">Pengisian Kuesioner Sukses! Terimakasih atas partisipasi anda</div></div>');
		redirect('alumni/Kuesioner');
	}
}