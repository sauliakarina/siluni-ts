<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statistik extends CI_Controller {
  function __construct(){
    parent::__construct();    
    $this->load->model('m_alumni');
    $this->load->model('m_master');
    $this->load->model('m_hasil');

 
  }

  public function alumni($prodiID)
  {
    $data=array(
            'title'=>'Beranda - SiLuni',
            'active_beranda'=>'active',
            'status' => $this->session->userdata('role'),
            'nama' => $this->session->userdata('nama'),
            'prodi' => $this->m_master->getProdi(),
            'prodiID' => $prodiID
        );
    $this->load->view('element/header_guest',$data);
    $this->load->view('guest/v_statistik', $data);
    $this->load->view('element/footer_siluni');
  }
}