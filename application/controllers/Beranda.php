<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

    function __construct(){
        parent::__construct();
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
		$this->load->view('guest/v_beranda', $data);
		$this->load->view('element/footer_siluni');

	}

	function logout(){
        unset($_SESSION["username"]);
        $this->session->sess_destroy();
        redirect('login');
    }
    /*test*/
}