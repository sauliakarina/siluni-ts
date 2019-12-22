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
		redirect('alumni/Data');
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
	    $lists = "<option value=''>Pilih</option>";
	    
	    foreach($pengguna as $data){
	      $lists .= "<option value='".$data->id."'>".$data->pengguna_nama."</option>"; // Tambahkan tag option ke variabel $lists
	    }
	    //list_kota = list_pertanyaanSkala
	    $callback = array('list_penggunaID'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
	    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }

  public function getInstansi(){
	    // Ambil data ID Provinsi yang dikirim via ajax post
	    $id_instansi = $this->input->post('id_instansi');
	    
	    $instansi = $this->m_master->getInstansiByID($id_instansi);
	    
	    // Buat variabel untuk menampung tag-tag option nya
	    // Set defaultnya dengan tag option Pilih
	    $lists = "<option value=''>Pilih</option>";
	    $lists .= "<option value='".$instansi->jenis_instansi."'>".$instansi->jenis_instansi."</option>";
	    
	    /*foreach($pengguna as $data){
	      $lists .= "<option value='".$data->id."'>".$data->pengguna_nama."</option>"; // Tambahkan tag option ke variabel $lists
	    }*/
	    //list_kota = list_pertanyaanSkala
	    $callback = array('list_skala_instansi'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
	    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }

}