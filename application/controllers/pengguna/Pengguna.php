<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
		$this->load->model('m_master');

 
	}

	public function index()
	{
		$data=array(
            'title'=>'Beranda - SiLuni',
            'active_beranda'=>'active',
            'status' => $this->session->userdata('role'),
            'nama' => $this->session->userdata('nama')
        );
		 $this->load->view('element/header_siluni',$data);
		$this->load->view('guest/v_daftarPengguna', $data);
		$this->load->view('element/footer_siluni');
	}
}