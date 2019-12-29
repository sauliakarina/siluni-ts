<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	function __construct(){
		parent::__construct();	
		if($_SESSION["logged_in"] != 'login') {
			redirect(base_url("login"));
		}
			
		$this->load->model('m_berita');
		$this->load->model('m_master');
 
	}

	public function index()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'berita' => $this->m_berita->getBerita()
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_kelolaBerita', $data);
		$this->load->view('element/footer');
	}
}