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
			'prodiID' => $this->session->userdata('prodiID'),
			'kuesioner' => $this->m_kuesioner->getKuesioner()
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
			'kuesioner' => $this->m_kuesioner->getKuesionerByID($kuesionerID),
			'pertanyaan' => $this->m_kuesioner->getPertanyaanByKuesionerID($kuesionerID)

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
		$this->load->view('admin/v_editPertanyaan', $data);
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
			'customID' => $customID 
		);	
		$kuesionerID = $this->input->post('kuesionerID');
		$this->m_master->inputData($data,'pertanyaan');
		redirect('admin/Kuesioner/buatPertanyaan/'.$kuesionerID);
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
		redirect('admin/Kuesioner/buatPertanyaan/'.$kuesionerID);

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
		redirect('admin/Kuesioner/buatPertanyaan/'.$kuesionerID);

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
			'pertanyaan' => $this->input->post('pertanyaan')
		);
		
		$where = array('id' => $this->input->post('id'));
		$this->m_master->updateData($where,$data,'pertanyaan');

		$kuesionerID = $this->input->post('kuesionerID');
		redirect('admin/Kuesioner/buatPertanyaan/'.$kuesionerID);
	}

	function exeEditPertanyaan()
	{
		$data = array(
			'pertanyaan' => $this->input->post('pertanyaan')
		);
		$where = array('id' => $this->input->post('pertanyaanID'));
		$this->m_master->updateData($where,$data,'pertanyaan');

		$pilihan = $this->input->post('pilihan');
		$pilihanID = $this->input->post('pilihanID');
		$length = count($pilihan);

		for ($i = 0; $i <= $length; $i++)  {
			$data = array(
			'pilihan' => $pilihan[$i]
			);
			$where = array('id' => $pilihanID[$i]);
			$this->m_master->updateData($where,$data,'pilihan_jawaban');
        }

		$kuesionerID = $this->input->post('kuesionerID');
		redirect('admin/Kuesioner/buatPertanyaan/'.$kuesionerID);
	}
}