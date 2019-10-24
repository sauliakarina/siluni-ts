<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencarian_alumni extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('siluni/m_alumni');
		$this->load->model('siluni/m_data');
		$this->load->model('m_master');
	}

public function index() 
{
		$data=array(
            'title'=>'Pencarian Alumni - SiLuni',
            'status' => $this->session->userdata('status'),
        	'nama' => $this->session->userdata('nama'),
        	'username' => $this->session->userdata('username'),
        	'prodi' => $this->m_alumni->get_prodi(),
        	'alumni' => $this->m_alumni->fetch_alumni()
        );
        $this->load->view('element/header_siluni',$data);
		$this->load->view('guest/v_pencarian_alumni',$data);
		 $this->load->view('element/footer_siluni');
	}

	public function cari_alumni() 
	{
      	$this->load->model('m_alumni');
		$nama = $this->input->post('search');
		$prodi = $this->input->post('prodi');
		
		if(isset($nama,$prodi))
		{
			if ($nama=='') {
				$user_alumni = $this->m_alumni->cari_alumni_prodi($prodi);
			} elseif ($prodi == '') {
				$user_alumni = $this->m_alumni->cari_alumni_all_prodi($nama);
			}
			else {
				$user_alumni = $this->m_alumni->cari_alumni($nama,$prodi);
			}
			$data=array(
            'title'=>'Pencarian Alumni - SiLuni',
            'status' => $this->session->userdata('status'),
        	'nama' => $this->session->userdata('nama'),
        	'user_alumni' => $user_alumni
        	);
        	$this->load->view('element/header_siluni', $data);
			$this->load->view('guest/v_hasil_pencarian', $data);
			$this->load->view('element/footer_siluni');
		} 	else {
			redirect($this->index());
			}
	}

	  function tampil($nrm){
		  $where = array('id' => $nrm);
		  //$username = array('username' => $nrm);
		  	$data=array(
		            'title'=>'Profil Alumni - SiLuni',
		            'active_beranda'=>'active',
		            'status' => $this->session->userdata('status'),
		          'nama' => $this->session->userdata('nama'),
		          'username' => $this->session->userdata('username'),
		          'alumni' => $this->m_data->tampil_user($where,'alumni')->result(),
		        );
		        $this->load->view('element/header_siluni',$data);
		        $this->load->view('guest/v_profil_user',$data);
		        $this->load->view('element/footer_siluni');
			}
}