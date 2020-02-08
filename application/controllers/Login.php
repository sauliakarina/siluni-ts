<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_user');
		$this->load->model('m_master');
 
	}

	public function index()
	{
		$this->load->view('element/head');
		$data = array(
			'admin' => $this->m_master->getAdminFromUser()
		);
		$this->load->view('v_login', $data);
	}

	public function exeLogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_user->cekData("user",$where)->num_rows();
		$cek2 = $this->m_user->cekData("user",$where);
		if($cek > 0){
			foreach ($cek2->result() as $sess ) {
                    $sess_data['id'] = $sess->id;
                    $sess_data['userID'] = $sess->userID;
                    $sess_data['username'] = $sess->username;
                    $sess_data['role'] = $sess->role;
                    $sess_data['firstLogin'] = $sess->firstLogin;
                    $sess_data['prodiID'] = $sess->prodiID;
                    $sess_data['logged_in'] = 'login';
                }
			$this->session->set_userdata($sess_data);
 
			//redirect(base_url("admin/Beranda"));
			if ($this->session->userdata('firstLogin') != 'tidak') {
				redirect(base_url("GantiPassword"), 'refresh');
			} else {

				if($this->session->userdata('role')=='admin') 
				{
                    redirect(base_url("admin/Beranda"), 'refresh');
                }
                elseif($this->session->userdata('role')=='alumni') {
                   redirect(base_url("alumni/Beranda"), 'refresh');
                }elseif($this->session->userdata('role')=='pengguna') {
                   redirect(base_url("pengguna/Beranda"), 'refresh');
                }elseif($this->session->userdata('role')=='koorprodi') {
                   redirect(base_url("koorprodi/Beranda"), 'refresh');
                }elseif($this->session->userdata('role')=='superadmin') {
                   redirect(base_url("superadmin/Master/kelolaFakultas"), 'refresh');
                }elseif($this->session->userdata('role')=='dosen') {
                   redirect(base_url("dosen/Profil"), 'refresh');
                }

			}
 
		}else{
			echo " <script>
                         alert('Gagal Masuk: Username atau Password anda salah!');
                         history.go(-1);
                        </script>";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Beranda'));
		//redirect('http://localhost/siluni/Beranda');
	}
}
