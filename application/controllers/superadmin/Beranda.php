<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($_SESSION["logged_in"] != 'login') {
			redirect(base_url("login"));
		}		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_hasil');
 
	}

	public function index()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID')
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_beranda', $data);
		$this->load->view('element/footer');
	}


}