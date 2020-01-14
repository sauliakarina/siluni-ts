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
		$userID = $this->m_alumni->getAlumniByID($this->input->post("alumniID"))->userID;
		if ($this->session->userdata('userID') == $userID) {

			$alumniID = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
			$prodiID = $this->session->userdata('prodiID');
			$kuesionerID = $this->m_kuesioner->getKuesionerByResponden('alumni', $prodiID);

			//tabel notif kuesioner
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
				$cek = $this->m_master->cekData("notif_kuesioner",$where)->num_rows();
				if ($cek == 0) {
				   	$id_found = true;
				}
			} 
			$data = array(
				'respondenID' => $alumniID,
				'jenis_kuesioner' => 'alumni',
				'timestamp' => date("d-m-Y"),
				'prodiID' => $prodiID,
				'customID' => $customID
			);
			$this->m_master->inputData($data,'notif_kuesioner');
			$notifID = $this->m_master->getNotifKuesionerByCustomID($customID)->id;

			foreach ($kuesionerID as $k ) {
				$pertanyaan = $this->m_kuesioner->getPertanyaanByKuesionerID($k->id);
				foreach ($pertanyaan as $p) {
					if ($p->jenis == 'ganda') {
						$jawaban = $this->input->post("ganda_".$p->id);
						if ($jawaban != Null) {  
							foreach ($jawaban as $j) {					
							        $data = array(	            
							        	'pertanyaanID' => $p->id,
							        	'jawaban' => $j,
							        	'alumniID' => $alumniID,
							        	'notifID' => $notifID
							        );				        
							        $this->m_master->inputData($data,'jawaban_alumni');
						    } // foreach jawaban ganda
						}
					    if ($p->inputBox == 'ya' && $this->input->post('inputBoxGanda_'.$p->id) != '') {
					    	$data = array(
					    		'pertanyaanID' => $p->id,
					        	'jawaban' => $this->input->post('inputBoxGanda_'.$p->id),
					        	'alumniID' => $alumniID,
					        	'tambahanJawaban' => 'ya',
					        	'notifID' => $notifID
					    	);
					    	$this->m_master->inputData($data,'jawaban_alumni');
					    } // if inputBox
					} // if ganda 
					elseif ($p->jenis == 'isian') {
						if ($this->input->post("isian_".$p->id) != "") {
							$data = array(
							'pertanyaanID' => $p->id,
				            'jawaban' => $this->input->post("isian_".$p->id),
				            'alumniID' => $alumniID,
				            'notifID' => $notifID
				          	);
							$this->m_master->inputData($data, 'jawaban_alumni');
						} //if not null
					} // if isian 
					elseif ($p->jenis == 'pilihan') {
						if ($this->input->post("pilihan_".$p->id) != Null) {
							$data = array(
							'pertanyaanID' => $p->id,
				            'jawaban' => $this->input->post("pilihan_".$p->id),
				            'alumniID' => $alumniID,
				            'notifID' => $notifID
				          	);
							$this->m_master->inputData($data, 'jawaban_alumni');

							if ($p->inputBox == 'ya' && $this->input->post('inputBoxPilihan_'.$p->id) != '') {
						    	$data = array(
						    		'pertanyaanID' => $p->id,
						        	'jawaban' => $this->input->post('inputBoxPilihan_'.$p->id),
						        	'alumniID' => $alumniID,
						        	'tambahanJawaban' => 'ya',
						        	'notifID' => $notifID
						    	);
						    	$this->m_master->inputData($data,'jawaban_alumni');
						    } // if inputBox
						} //if not null
					}
					elseif ($p->jenis == 'skala') {
						$pertanyaanSkala = $this->m_kuesioner->getPertanyaanSkalaByPertanyaanID($p->id);
						foreach ($pertanyaanSkala as $ps) {
							if ($this->input->post("skala_".$ps->id) != Null) {
								$data = array(	            
						        	'pertanyaanID' => $p->id,
						        	'pertanyaanSkalaID' => $ps->id,
						        	'jawaban' => $this->input->post("skala_".$ps->id),
						        	'alumniID' => $alumniID,
						        	'notifID' => $notifID
						        );				        
						        $this->m_master->inputData($data,'jawaban_alumni');
					    	} // if not null
						}
					}
				}//foreach pertanyaan
			} //foreach kuesionerID

			$this->session->set_flashdata("isi_kuesioner", '<div><div class="alert alert-success" id="alert" align="center">Pengisian Kuesioner Sukses! Terimakasih atas partisipasi anda</div></div>');
		}// session user id
		redirect('alumni/Beranda');
	}
}