<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class testing extends CI_Controller {

	function __construct(){
		parent::__construct();	
	/*	$this->load->model('m_testing');*/

              
	}

	public function index()
	{
		
		$this->load->view('element/head');
		$this->load->view('testing');
		$this->load->view('element/footer');
	}

	public function tampilKuesioner()
	{
		
		$this->load->view('element/head');
		$this->load->view('backup/v_tampilKuesioner');
		$this->load->view('element/footer');
	}
}
