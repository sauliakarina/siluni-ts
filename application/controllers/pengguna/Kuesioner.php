<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_master');
		$this->load->model('m_kuesioner');
		$this->load->model('m_pengguna');
 
	}

	//kuesioner untuk pengguna sudah terdaftar
	public function kuesionerInstansi($customID)
	{
		$penggunaID = $this->m_pengguna->getPenggunaByCustomID($customID)->id;
		$prodiID = $this->m_pengguna->getPenggunaByID($penggunaID)->prodiID;
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'kuesioner' => $this->m_kuesioner->getKuesionerPenggunaByProdi($prodiID),
			'penggunaID' => $penggunaID,
			'prodiID' => $prodiID
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar_pengguna', $data);
		$this->load->view('pengguna/v_kuesionerPengguna', $data);
		$this->load->view('element/footer');
	}

	public function kuesionerSukses()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID')
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar_pengguna', $data);
		$this->load->view('pengguna/v_kuesionerSelesai', $data);
		$this->load->view('element/footer');
	}

	//kuesioner untuk pengguna blm terdaftar
	public function kuesionerPenggunaAlumni($prodiID)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'kuesioner' => $this->m_kuesioner->getKuesionerPenggunaByProdi($prodiID),
			'penggunaID' => Null,
			'prodiID' => $prodiID,
			'instansi' => $this->m_master->getInstansi($prodiID),
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
			'jenis_instansi' => $this->input->post('jenis_instansi')
		);	
		$this->m_master->inputData($data,'instansi');

		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'kuesioner' => $this->m_kuesioner->getKuesionerPengguna($prodiID),
			'penggunaID' => Null,
			'prodiID' => $prodiID,
			'instansi' => $this->m_master->getInstansi($prodiID),
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
		$customPenggunaID = $this->m_pengguna->getPenggunaByID($penggunaID)->penggunaID;
		$prodiID = $this->m_pengguna->getPenggunaByID($penggunaID)->prodiID;
		$kuesionerID = $this->m_kuesioner->getKuesionerByResponden('pengguna', $prodiID);

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
			'respondenID' => $penggunaID,
			'jenis_kuesioner' => 'pengguna',
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
					foreach ($jawaban as $j) {       						
				        $data = array(	            
				        	'pertanyaanID' => $p->id,
				        	'jawaban' => $j,
				        	'penggunaID' => $penggunaID,
				        	'notifID' => $notifID
				        );				        
				        $this->m_master->inputData($data,'jawaban_pengguna');
				    } // foreach jawaban ganda
				} // if ganda 
				elseif ($p->jenis == 'isian') {
					if ($this->input->post("isian_".$p->id) != "") {
						$data = array(
						'pertanyaanID' => $p->id,
			            'jawaban' => $this->input->post("isian_".$p->id),
			            'penggunaID' => $penggunaID,
			            'notifID' => $notifID
			          	);
						$this->m_master->inputData($data, 'jawaban_pengguna');
					} //if not null
				} // if isian 
				elseif ($p->jenis == 'pilihan') {
					if ($this->input->post("pilihan_".$p->id) != Null) {
						$data = array(
						'pertanyaanID' => $p->id,
			            'jawaban' => $this->input->post("pilihan_".$p->id),
			            'penggunaID' => $penggunaID,
			            'notifID' => $notifID
			          	);
						$this->m_master->inputData($data, 'jawaban_pengguna');
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
					        	'penggunaID' => $penggunaID,
					        	'notifID' => $notifID
					        );				        
					        $this->m_master->inputData($data,'jawaban_pengguna');
				    	} // if not null
					}
				}
			}//foreach pertanyaan
		} //foreach kuesionerID

		$data = array(
			'tandai' => 'checked'
		);
		$where = array('id' => $penggunaID);
		$this->m_master->updateData($where,$data,'pengguna');

		$this->session->set_flashdata("pesan", '<div><div class="alert alert-success" id="alert" align="center">Pengisian Kuesioner Sukses! Terimakasih atas partisipasi anda</div></div>');
		redirect('pengguna/Kuesioner/kuesionerInstansi/'.$customPenggunaID);
		/*redirect('pengguna/Kuesioner/kuesionerSukses/');*/
	}

public function addJawabanVer2()
	{	
		$prodiID = $this->input->post('prodiID');

		//tabel instansi
		if ($this->input->post('id_instansi') == "") {
			$newInstansi = array(
				'nama_instansi' => $this->input->post('instansiBaru'),
				'prodiID' => $prodiID,
			);
			$this->m_master->inputData($newInstansi,'instansi');
			$instansiID = $this->m_master->getInstansiByName($this->input->post('instansiBaru'))->id;
		} elseif ($this->input->post('id_instansi') == "Null") {
			$instansiID = Null;
		} else {
			$instansiID = $this->input->post('id_instansi');
		}

		//data tabel pengguna
		//generate penggunaID
		$id_length = 36;
		$id_found = false;
		$possible_chars = "23456789BCDFGHJKMNPQRSTVWXYZbcdefghijklmnopqrstvwxyz-"; 
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
			'divisi' => $this->input->post('divisi'),
			'prodiID' => $this->input->post('prodiID'),
			'penggunaID' => $penggunaID,
			'id_instansi' => $instansiID,
			'tandai' => 'checked',
			'seen' => '1'
		);
		$this->m_master->inputData($data,'pengguna');
		$id_pengguna = $this->m_pengguna->getPenggunaByPenggunaID($penggunaID)->id;

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
			'respondenID' => $id_pengguna,
			'jenis_kuesioner' => 'pengguna',
			'timestamp' => date("d-m-Y"),
			'prodiID' => $prodiID,
			'customID' => $customID
		);
		$this->m_master->inputData($data,'notif_kuesioner');
		$notifID = $this->m_master->getNotifKuesionerByCustomID($customID)->id;


		$kuesionerID = $this->m_kuesioner->getKuesionerByResponden('pengguna', $prodiID);
		foreach ($kuesionerID as $k ) {
			$pertanyaan = $this->m_kuesioner->getPertanyaanByKuesionerID($k->id);
			foreach ($pertanyaan as $p) {
				if ($p->jenis == 'ganda') {
					$jawaban = $this->input->post("ganda_".$p->id);
					foreach ($jawaban as $j) {       						
				        $data = array(	            
				        	'pertanyaanID' => $p->id,
				        	'jawaban' => $j,
				        	'penggunaID' => $id_pengguna,
				        	'notifID' => $notifID
				        );				        
				        $this->m_master->inputData($data,'jawaban_pengguna');
				    } // foreach jawaban ganda
				} // if ganda 
				elseif ($p->jenis == 'isian') {
					if ($this->input->post("isian_".$p->id) != Null) {
						$data = array(
						'pertanyaanID' => $p->id,
			            'jawaban' => $this->input->post("isian_".$p->id),
			            'penggunaID' => $id_pengguna,
			            'notifID' => $notifID
			          	);
						$this->m_master->inputData($data, 'jawaban_pengguna');
					} //if not null
				} // if isian 
				elseif ($p->jenis == 'pilihan') {
					if ($this->input->post("pilihan_".$p->id) != Null) {
						$data = array(
						'pertanyaanID' => $p->id,
			            'jawaban' => $this->input->post("pilihan_".$p->id),
			            'penggunaID' => $id_pengguna,
			            'notifID' => $notifID
			          	);
						$this->m_master->inputData($data, 'jawaban_pengguna');
					} //if not null
				}//pilihan
				elseif ($p->jenis == 'skala') {
					$pertanyaanSkala = $this->m_kuesioner->getPertanyaanSkalaByPertanyaanID($p->id);
					foreach ($pertanyaanSkala as $ps) {
						if ($this->input->post("skala_".$ps->id) != Null) {
							$data = array(	            
					        	'pertanyaanID' => $p->id,
					        	'pertanyaanSkalaID' => $ps->id,
					        	'jawaban' => $this->input->post("skala_".$ps->id),
					        	'penggunaID' => $id_pengguna,
					        	'notifID' => $notifID
					        );				        
					        $this->m_master->inputData($data,'jawaban_pengguna');
				    	} // if not null
					}
				}
			}//foreach pertanyaan
		} //foreach kuesionerID

		
		$this->session->set_flashdata("pesan", '<div><div class="alert alert-success" id="alert" align="center">Pengisian Kuesioner Sukses!</div></div>');
		/*redirect('pengguna/Kuesioner/kuesionerInstansi/'.$penggunaID);*/
		redirect('pengguna/Kuesioner/kuesionerSukses/');
	}
}
