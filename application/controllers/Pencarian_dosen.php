<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencarian_dosen extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('siluni/m_data');
	}

public function index() 
{
		$data=array(
            'title'=>'Pencarian Dosen - SiLuni',
            'status' => $this->session->userdata('status'),
        	'username' => $this->session->userdata('username'),
        	'prodi' => $this->m_data->get_prodi(),
        	'dosen' => $this->m_data->tampil_data_dosen()
        );
        $this->load->view('element/header_siluni',$data);
		$this->load->view('guest/v_pencarian_dosen',$data);
		 $this->load->view('element/footer_siluni');
	}

	public function cari_dosen() 
	{
      	$this->load->model('m_data');
		$nama = $this->input->post('search');
		$prodi = $this->input->post('prodi');
		
		if(isset($nama,$prodi))
		{
			if ($nama=='') {
				$user_dosen = $this->m_data->cari_dosen_prodi($prodi);
			} elseif ($prodi=='') {
				$user_dosen = $this->m_data->cari_dosen_all_prodi($nama);
			} 
			else {
				$user_dosen = $this->m_data->cari_dosen($nama,$prodi);
			}
			$data=array(
            'title'=>'Pencarian Dosen - SiLuni',
            'status' => $this->session->userdata('status'),
        	'nama' => $this->session->userdata('nama'),
        	'user_dosen' => $user_dosen
        	);
        	$this->load->view('element/header_siluni', $data);
			$this->load->view('guest/v_hasil_pencarian_dosen', $data);
			$this->load->view('element/footer_siluni');
		} 	else {
			redirect($this->index());
			}
	}
}