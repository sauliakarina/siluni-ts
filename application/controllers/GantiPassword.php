<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GantiPassword extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_dosen');
 
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
		$this->load->view('v_gantiPassword', $data);
		$this->load->view('element/footer');
	}

	public function exeEditPass(){
		//set form validation
		$this->form_validation->set_rules('oldpass','Password Lama','callback_passwordCheck');
		$this->form_validation->set_rules('newpass','Password Baru', 'required');
		$this->form_validation->set_rules('confirm','Konfirmasi Password','required|matches[newpass]');

		$this->form_validation->set_error_delimiters('<div class="error" style="color: red">', '</div>');
		if ($this->form_validation->run() == false) {
			$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
		);
			$this->load->view('element/head');
			$this->load->view('element/header');
			$this->load->view('element/navbar', $data);
			$this->load->view('v_gantiPassword', $data);
			$this->load->view('element/footer');
		} else {
			$id = $this->session->userdata('id');
			$newpass = $this->input->post('newpass');
			$where = array(
				'id' => $id
			);
			$data = array(
				'password' => $newpass,
				'firstLogin' => 'tidak'
			);
			$this->m_master->updateData($where, $data, 'user');

			/*echo " <script>
                     alert('Ganti password sukses!');
                     history.go(-1);
                    </script>";*/
            $this->session->set_flashdata("edit_pass", '<div><div class="alert alert-success" id="alert" align="center">Password Anda berhasil disunting</div></div>');

            if ($this->session->userdata('role')=='admin') {
            	 redirect('admin/Beranda');
            }  elseif($this->session->userdata('role')=='alumni') {
                redirect(base_url("alumni/Beranda"));
            } elseif($this->session->userdata('role')=='koorprodi') {
                   redirect(base_url("koorprodi/Beranda"));
            }
           
		}
	}

	public function passwordCheck($oldpass){
		$id = $this->session->userdata('id');
		$userpass = $this->m_master->getUserByID($id)->password;

		if ($userpass !== $oldpass) {
			$this->form_validation->set_message('passwordCheck', 'Password yang anda masukan salah.');
			return false;
		}

		return true;

	}
}