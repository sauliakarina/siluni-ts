<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuesioner extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_dosen');
		$this->load->model('m_kuesioner');
 
	}

	public function kuesionerAlumni()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID')
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_kuesionerAlumni', $data);
		$this->load->view('element/footer');
	}

	public function buatPertanyaan($kuesionerID)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'kuesioner' => $this->m_kuesioner->getKuesionerByID($kuesionerID)

		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_buatPertanyaan', $data);
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
		redirect('admin/Kuesioner/buatPertanyaan/'.$kuesionerID);
	}

	public function addIsian() {
		//generate customID pertanyaan
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
			'customID' => $customID 
		);	
		$kuesionerID = $this->input->post('kuesionerID');
		$this->m_master->inputData($data,'pertanyaan');
		redirect('admin/Kuesioner/buatPertanyaan/'.$kuesionerID);
	}

	public function addPilihan() {
		//set pertanyaan
		//generate customID pertanyaan
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

		//set pilihan jawaban
		$pilihan_jawaban = $this->input->post('pilihan_jawaban');
		foreach ($pilihan_jawaban as $list_pilihan_jawaban) {
        $data = array(
          'pilihan'=>$list_pilihan_jawaban,
          'pertanyaanID' =>$customIDPR,
        );
        $this->m_master->inputData($data,'pilihan_jawaban');
        //href
        $kuesionerID = $this->input->post('kuesionerID');
		redirect('admin/Kuesioner/buatPertanyaan/'.$kuesionerID);
	}
}