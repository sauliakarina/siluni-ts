<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_master');
		$this->load->model('m_alumni');
		$this->load->model('m_pengguna');
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
		$data_alumni = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tahun_masuk' => $this->input->post('tahun_masuk'),
			'tahun_lulus' => $this->input->post('tahun_lulus'),
			'tanggal_lulus' => $this->input->post('tanggal_lulus'),
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

	/*public function exeaddPengguna() {
		$data = array(
			'pengguna_nama' => $this->input->post('pengguna_nama'),
			'divisi' => $this->input->post('divisi'),
			'pengguna_email' => $this->input->post('pengguna_email'),
			'pengguna_telepon' => $this->input->post('pengguna_telepon'),
		);
	}*/

	public function getPengguna(){
	    // Ambil data ID Provinsi yang dikirim via ajax post
	    $id_instansi = $this->input->post('id_instansi');
	    
	    $pengguna = $this->m_pengguna->getPenggunaByInstansiID($id_instansi);
	    
	    // Buat variabel untuk menampung tag-tag option nya
	    // Set defaultnya dengan tag option Pilih
	    $lists = "<option value=''>Pilih</option>";
	    
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
			$instansiID_2 = $this->input->post('instansiID_2');
			$instansiBaru_2 = $this->input->post('instansiBaru_2');
			$skalaInstansi_2 = $this->input->post('skalaInstansi_2');
			$posisi_2 = $this->input->post('posisi_2');
			$profil_2 = $this->input->post('profil_2');
			$gaji_2 = $this->input->post('gaji_2');
			$penggunaID_2 = $this->input->post('penggunaID_2');
			$pengguna_nama_2 = $this->input->post('pengguna_nama_2');
			$pengguna_email_2 = $this->input->post('pengguna_email_2');
			$pengguna_telepon_2 = $this->input->post('pengguna_telepon_2');
			$divisi_2 = $this->input->post('divisi_2');
			$id_2 = $this->input->post('id_2');

			foreach ($instansiBaru_2 as $a) {
				foreach ($skalaInstansi_2 as $b) {
					if ($a != "") {
					$newInstansi = array(
						'nama_instansi' => $a,
						'jenis_instansi' => $b,
						'prodiID' => $this->session->userdata('prodiID'),
					);
					$this->m_master->inputData($newInstansi,'instansi');
					}
				}
			}

		} //if pekerjaan 2 dst

		redirect('alumni/Beranda');
	}

	public function testing (){
		$instansiID_2 = $this->input->post('instansiID_2');
		$instansiBaru_2 = $this->input->post('instansiBaru_2');
		$skalaInstansi_2 = $this->input->post('skalaInstansi_2');
		$posisi_2 = $this->input->post('posisi_2');
		$profil_2 = $this->input->post('profil_2');
		$gaji_2 = $this->input->post('gaji_2');
		$penggunaID_2 = $this->input->post('penggunaID_2');
		$pengguna_nama_2 = $this->input->post('pengguna_nama_2');
		$pengguna_email_2 = $this->input->post('pengguna_email_2');
		$pengguna_telepon_2 = $this->input->post('pengguna_telepon_2');
		$divisi_2 = $this->input->post('divisi_2');
		$id_2 = $this->input->post('id_2');

		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'instansiID_2' => $instansiID_2,
			'skalaInstansi_2' => $skalaInstansi_2,
			'posisi_2' => $posisi_2,
			'profil_2' => $profil_2,
			'gaji_2' => $gaji_2,
			'penggunaID_2' => $penggunaID_2,
			'pengguna_nama_2' => $pengguna_nama_2,
			'instansiBaru_2' => $instansiBaru_2
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_testing', $data);
		$this->load->view('element/footer');
	}
}