<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
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
		$userID = $this->session->userdata('userID'); 
		$prodiID = $this->session->userdata('prodiID');
		$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'kuesioner' => $this->m_kuesioner->getKuesionerAlumni($this->session->userdata('prodiID')),
			'profil' => $this->m_alumni->getAlumniByUserID($userID),
			'instansi' => $this->m_master->getInstansi($prodiID),
			'nama_instansi' => '',
			'riwayat' => $this->m_pengguna->joinPekerjaanByPenggunaID($id_alumni),
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_isiData', $data);
		$this->load->view('element/footer');
	}


	function exeEditProfil()
	{
		$waktu_lulus = $this->input->post('waktu_lulus');
		$explode = explode(" ", $waktu_lulus);

		$data_alumni = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tahun_masuk' => $this->input->post('tahun_masuk'),
			'tahun_lulus' => $explode[1],
			'bulan_lulus' => $explode[0],
			'ipk' => $this->input->post('ipk'),
			'toefl' => $this->input->post('toefl'),
			'alamat' => $this->input->post('alamat'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'email' => $this->input->post('email'),
			'no_telepon' => $this->input->post('no_telepon'),
		);
		
		$where = array('id' => $this->input->post('id'));
		$this->m_master->updateData($where,$data_alumni,'alumni');
		$this->session->set_flashdata("edit_profil", '<div><div class="alert alert-success" id="alert" align="center">Data diri anda berhasil disunting</div></div>');
		redirect('alumni/Beranda');
	}

	function exeAddInstansi()
	{
		$data = array(
			'nama_instansi' => $this->input->post('nama_instansi'),
			'jenis_instansi' => $this->input->post('jenis_instansi'),
			'alamat' => $this->input->post('alamat'),
		);	
		$this->m_master->inputData($data,'instansi');

		$userID = $this->session->userdata('userID'); 
		$prodiID = $this->session->userdata('prodiID');
		$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'kuesioner' => $this->m_kuesioner->getKuesionerAlumni($this->session->userdata('prodiID')),
			'profil' => $this->m_alumni->getAlumniByUserID($userID),
			'instansi' => $this->m_master->getInstansi($prodiID),
			'nama_instansi' => $this->input->post('nama_instansi'),
			'riwayat' => $this->m_pengguna->joinPekerjaanByPenggunaID($id_alumni),
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_isiData', $data);
		$this->load->view('element/footer');
	}


	public function getPengguna(){
	    // Ambil data ID Provinsi yang dikirim via ajax post
	    $id_instansi = $this->input->post('id_instansi');
	    
	    $pengguna = $this->m_pengguna->getPenggunaByInstansiID($id_instansi);
	    
	    // Buat variabel untuk menampung tag-tag option nya
	    // Set defaultnya dengan tag option Pilih
	    $lists = "<option value=''></option>";
	    
	    foreach($pengguna as $data){
	      $lists .= "<option value='".$data->id."'>".$data->pengguna_nama." - Divisi  ".$data->divisi."</option>"; // Tambahkan tag option ke variabel $lists
	    }
	    //list_kota = list_pertanyaanSkala
	    $callback = array('list_penggunaID'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
	    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }


  public function exeAddPekerjaan() {

  		//pekerjaan pertama
  		//instansi ID pertama
  		if ($this->input->post('instansiID_1') == "") {
			$newInstansi = array(
				'nama_instansi' => $this->input->post('instansiBaru_1'),
				'jenis_instansi' => $this->input->post('skalaInstansi_1'),
				'prodiID' => $this->session->userdata('prodiID'),
			);
			$this->m_master->inputData($newInstansi,'instansi');
			$instansiID = $this->m_master->getInstansiByName($this->input->post('instansiBaru_1'))->id;
		} else {
			$instansiID = $this->input->post('instansiID_1');
			$data = array(
				"jenis_instansi" => $this->input->post('skalaInstansi_1')
			);
			$where = array('id' => $this->input->post('instansiID_1'));
			$this->m_master->updateData($where, $data, 'instansi');
		}
  		//pengguna pekerjaan pertama
		if ($this->input->post('pengguna_nama_1') != "") {
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
				'pengguna_nama' => $this->input->post('pengguna_nama_1'),
				'divisi' => $this->input->post('divisi_1'),
				'pengguna_email' => $this->input->post('pengguna_email_1'),
				'pengguna_telepon' => $this->input->post('pengguna_telepon_1'),
				'prodiID' => $this->session->userdata('prodiID'),
				'id_instansi' => $instansiID,
				'penggunaID' => $customID
			);
			$this->m_master->inputData($data,'pengguna');
			$penggunaID = $this->m_pengguna->getPenggunaByCustomID($customID)->id;
		} elseif ($this->input->post('penggunaID_1') != "") {
			$penggunaID = $this->input->post('penggunaID_1');
			$data = array('seen' => '0');
			$where = array('id' => $penggunaID);
			$this->m_master->updateData($where, $data, 'pengguna');
		}
		//data pekerjaan pertama
		$data = array(
			'id_instansi' => $instansiID,
			'posisi' => $this->input->post('posisi_1'),
			'profil' => $this->input->post('profil_1'),
			'gaji' => $this->input->post('gaji_1'),
			'firstPekerjaan' => 'yes',
			'id_pengguna' => $penggunaID,
			'id_alumni' => $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id,
			'periode_kerja' => $this->input->post('p1_1')."-".$this->input->post('p2_1'),
			'isiPekerjaan' => 'sudah_1'
		);
		//pekerjaan belum ada di db update or add
		if ($this->input->post('cekDB') == 'ada') {
			$where = array('id' => $this->input->post('id_1'));
			$this->m_master->updateData($where, $data, 'pekerjaan');
		} else {
			$this->m_master->inputData($data,'pekerjaan');
		}

		//pekerjaan 2 dst 
		if ($this->input->post('cek_2') == 'ada') {

			for($j=2 ; $j < $this->input->post('jumlah_loop'); $j++) {
				
				$instansiID_2 = $this->input->post('instansiID_'.$j);
				$instansiBaru_2 = $this->input->post('instansiBaru_'.$j);
				$skalaInstansi_2 = $this->input->post('skalaInstansi_'.$j);
				$posisi_2 = $this->input->post('posisi_'.$j);
				$profil_2 = $this->input->post('profil_'.$j);
				$gaji_2 = $this->input->post('gaji_'.$j);
				$penggunaID_2 = $this->input->post('penggunaID_'.$j);
				$pengguna_nama_2 = $this->input->post('pengguna_nama_'.$j);
				$pengguna_email_2 = $this->input->post('pengguna_email_'.$j);
				$pengguna_telepon_2 = $this->input->post('pengguna_telepon_'.$j);
				$divisi_2 = $this->input->post('divisi_$j'.$j);
				$id_2 = $this->input->post('id_'.$j);
				$periode_2 = $this->input->post('p1_'.$j)."-".$this->input->post('p2_'.$j);
 
				//input instansi
				if ($instansiID_2 != "") {
					$instansiID = $instansiID_2;
					$data = array(
						"jenis_instansi" => $skalaInstansi_2
					);
					$where = array('id' => $instansiID_2);
					$this->m_master->updateData($where, $data, 'instansi');
				} elseif ($instansiBaru_2 != "") {
					$newInstansi = array(
						'nama_instansi' => $instansiBaru_2,
						'jenis_instansi' => $skalaInstansi_2,
						'prodiID' => $this->session->userdata('prodiID'),
					);
					$this->m_master->inputData($newInstansi,'instansi');
					$instansiID = $this->m_master->getInstansiByName($instansiBaru_2)->id;
				}
				//input pengguna
				//pengguna pekerjaan kedua
				if ($pengguna_nama_2 != "") {
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
						'pengguna_nama' => $pengguna_nama_2,
						'divisi' => $divisi_2,
						'pengguna_email' => $pengguna_email_2,
						'pengguna_telepon' => $pengguna_telepon_2,
						'prodiID' => $this->session->userdata('prodiID'),
						'id_instansi' => $instansiID,
						'penggunaID' => $customID
					);
					$this->m_master->inputData($data,'pengguna');
					$penggunaID = $this->m_pengguna->getPenggunaByCustomID($customID)->id;
				} elseif ($penggunaID_2 != "") {
					$penggunaID = $penggunaID_2;
					$data = array('seen' => '0');
					$where = array('id' => $penggunaID);
					$this->m_master->updateData($where, $data, 'pengguna');
				}

				//data pekerjaan kedua dst
				$data = array(
					'id_instansi' => $instansiID,
					'posisi' => $posisi_2,
					'profil' => $profil_2,
					'gaji' => $gaji_2,
					'id_pengguna' => $penggunaID,
					'id_alumni' => $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id,
					'periode_kerja' => $periode_2,
					'isiPekerjaan' => 'sudah_2'
				);
				$where = array('id' => $id_2);
				$this->m_master->updateData($where, $data, 'pekerjaan');

			/*	echo "instansiID_2 :".$instansiID_2."<br>";
				echo "instansiBaru_2 :".$instansiBaru_2."<br>";
				echo "skalaInstansi_2 :".$skalaInstansi_2."<br>";
				echo "posisi_2 :".$posisi_2."<br>";
				echo "profil_2 :".$profil_2."<br>";
				echo "gaji_2 :".$gaji_2."<br>";
				echo "penggunaID_2 :".$penggunaID_2."<br>";
				echo "pengguna_nama_2 :".$pengguna_nama_2."<br>";*/
			}
				
		} //if pekerjaan 2 dst


		redirect('alumni/Beranda');
}

 public function exeUpdatePekerjaan() {

	if ($this->input->post('instansiID') == "") {
	$newInstansi = array(
		'nama_instansi' => $this->input->post('instansiBaru'),
		'jenis_instansi' => $this->input->post('skalaInstansi'),
		'prodiID' => $this->session->userdata('prodiID'),
	);
	$this->m_master->inputData($newInstansi,'instansi');
	$instansiID = $this->m_master->getInstansiByName($this->input->post('instansiBaru'))->id;
	} else {
		$instansiID = $this->input->post('instansiID');
		$data = array(
			"jenis_instansi" => $this->input->post('skalaInstansi')
		);
		$where = array('id' => $this->input->post('instansiID'));
		$this->m_master->updateData($where, $data, 'instansi');
	}
		//pengguna pekerjaan pertama
	if ($this->input->post('pengguna_nama') != "") {
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
			'pengguna_nama' => $this->input->post('pengguna_nama'),
			'divisi' => $this->input->post('divisi'),
			'pengguna_email' => $this->input->post('pengguna_email'),
			'pengguna_telepon' => $this->input->post('pengguna_telepon'),
			'prodiID' => $this->session->userdata('prodiID'),
			'id_instansi' => $instansiID,
			'penggunaID' => $customID
		);
		$this->m_master->inputData($data,'pengguna');
		$penggunaID = $this->m_pengguna->getPenggunaByCustomID($customID)->id;
	} elseif ($this->input->post('penggunaID') != "") {
		$penggunaID = $this->input->post('penggunaID');
		$data = array('seen' => '0');
		$where = array('id' => $penggunaID);
		$this->m_master->updateData($where, $data, 'pengguna');
	} else {
		$penggunaID = Null;
	}

	$data = array(
		'id_instansi' => $instansiID,
		'posisi' => $this->input->post('posisi'),
		'profil' => $this->input->post('profil'),
		'gaji' => str_replace(",","",$this->input->post('gaji')),
		'id_pengguna' => $penggunaID,
		'id_alumni' => $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id,
		'periode_kerja' => $this->input->post('p1')."-".$this->input->post('p2'),
		'isiPekerjaan' => 'sudah'
	);
	
	$where = array('id' => $this->input->post('pekerjaanID'));
	$this->m_master->updateData($where, $data, 'pekerjaan');
	$this->session->set_flashdata("edit_pekerjaan", '<div><div class="alert alert-success" id="alert" align="center">Data pekerjaan berhasil ditambahkan. Jika ada silahkan lengkapi data pekerjaan berikutnya</div></div>');
	redirect('alumni/Beranda');
}

public function exeAddPekerjaan_new() {

	if ($this->input->post('instansiID') == "") {
	$newInstansi = array(
		'nama_instansi' => $this->input->post('instansiBaru'),
		'jenis_instansi' => $this->input->post('skalaInstansi'),
		'prodiID' => $this->session->userdata('prodiID'),
	);
	$this->m_master->inputData($newInstansi,'instansi');
	$instansiID = $this->m_master->getInstansiByName($this->input->post('instansiBaru'))->id;
	} else {
		$instansiID = $this->input->post('instansiID');
		$data = array(
			"jenis_instansi" => $this->input->post('skalaInstansi')
		);
		$where = array('id' => $this->input->post('instansiID'));
		$this->m_master->updateData($where, $data, 'instansi');
	}
		//pengguna pekerjaan pertama
	if ($this->input->post('pengguna_nama') != "") {
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
			'pengguna_nama' => $this->input->post('pengguna_nama'),
			'divisi' => $this->input->post('divisi'),
			'pengguna_email' => $this->input->post('pengguna_email'),
			'pengguna_telepon' => $this->input->post('pengguna_telepon'),
			'prodiID' => $this->session->userdata('prodiID'),
			'id_instansi' => $instansiID,
			'penggunaID' => $customID
		);
		$this->m_master->inputData($data,'pengguna');
		$penggunaID = $this->m_pengguna->getPenggunaByCustomID($customID)->id;
	} elseif ($this->input->post('penggunaID') != "") {
		$penggunaID = $this->input->post('penggunaID');
		$data = array('seen' => '0');
		$where = array('id' => $penggunaID);
		$this->m_master->updateData($where, $data, 'pengguna');
	}

	$where = array( 'id_alumni' => $alumniID);
	$cek = $this->m_master->cekData("pekerjaan",$where)->num_rows();
	if ($cek == 0) {
		$firstPekerjaan = 'yes';
	} else {
		$firstPekerjaan = 'no';
	}

	$data = array(
		'id_instansi' => $instansiID,
		'posisi' => $this->input->post('posisi'),
		'profil' => $this->input->post('profil'),
		'gaji' => str_replace(",","",$this->input->post('gaji')),
		'id_pengguna' => $penggunaID,
		'id_alumni' => $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id,
		'periode_kerja' => $this->input->post('p1')."-".$this->input->post('p2'),
		'isiPekerjaan' => 'sudah',
		'firstPekerjaan' => $firstPekerjaan
	);
	
	$this->m_master->inputData($data,'pekerjaan');
	$this->session->set_flashdata("edit_pekerjaan", '<div><div class="alert alert-success" id="alert" align="center">Data pekerjaan berhasil ditambahkan</div></div>');
	redirect('alumni/Beranda');
}

	public function testing (){
		/*$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar');
		$this->load->view('alumni/v_testing');
		$this->load->view('element/footer');
	}

	public function exeTesting (){
		$instansiID_2 = $this->input->post('instansiID_2');

		/*$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar');*/
		$this->load->view('alumni/v_testing', $instansiID_2);
		$this->load->view('element/footer');
	}
}