<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	function __construct(){
		parent::__construct();	
		if($_SESSION["logged_in"] != 'login') {
			redirect(base_url("login"));
		}	
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_pengguna');
 
	}

	public function biodata()
	{
		$userID = $this->session->userdata('userID');   
		$data = array(
			'role' => $this->session->userdata('role'),
			'prodiID' => $this->session->userdata('prodiID'),
			'userID' => $userID,
			'profil' => $this->m_alumni->getAlumniByUserID($userID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_profilAlumni', $data);
		$this->load->view('element/footer');
	}

	public function riwayatPekerjaan()
	{
		$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			/*'riwayat' => $this->m_alumni->getRiwayatByAlumniID($id_alumni),*/
			'riwayat' => $this->m_pengguna->joinPekerjaanByPenggunaID($id_alumni),
			'alumni_pengguna' => $this->m_alumni->getAlumniPengguna($id_alumni),
			'instansi' => $this->m_master->getInstansi($prodiID),
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_riwayatPekerjaan', $data);
		$this->load->view('element/footer');
	}

	public function tambahRiwayat()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'instansi' => $this->m_master->getInstansi($this->session->userdata('prodiID')),
			'divisi' => $this->m_master->getDivisi(),
			'nama_instansi' => ''
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_tambahRiwayat', $data);
		$this->load->view('element/footer');
	}

	public function editPekerjaan($id)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'instansi' => $this->m_master->getInstansi($this->session->userdata('prodiID')),
			'divisi' => $this->m_master->getDivisi(),
			'p' => $this->m_pengguna->joinPenggunaPekerjaanByPekerjaanID($id)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_editPekerjaan', $data);
		$this->load->view('element/footer');
	}

	/*public function tambahPenggunaAlumni($id_instansi)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'id_instansi' => $id_instansi,
			'pengguna' => $this->m_pengguna->getPenggunaByInstansiID($id_instansi),
			'divisi' => $this->m_master->getDivisi()
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_tambahPengguna', $data);
		$this->load->view('element/footer');
	}*/

	

	public function gantiPassword()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_gantiPassAlumni', $data);
		$this->load->view('element/footer');
	}

	function exeAddInstansi()
	{
		$data = array(
			'nama_instansi' => $this->input->post('nama_instansi'),
			'jenis_instansi' => $this->input->post('jenis_instansi'),
			'alamat' => $this->input->post('alamat'),
		);	
		$this->m_master->inputData($data,'instansi');

		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'instansi' => $this->m_master->getInstansi(),
			'nama_instansi' => $this->input->post('nama_instansi'),
			'divisi' => $this->m_master->getDivisi(),
		);

		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_tambahRiwayat', $data);
		$this->load->view('element/footer');
		/*redirect('alumni/Profil/tambahRiwayat');*/
	}

	/*function exeAddRiwayat()
	{
		$periode = $this->input->post('p1')."-".$this->input->post('p2');
		$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$id_instansi = $this->input->post('id_instansi');
		if ($this->input->post('divisi_select') == "") {
			$data = array(
				'nama_divisi' => $this->input->post('divisi_input')
			);
			$this->m_master->inputData($data,'divisi');
			$id_divisi = $this->m_master->getDivisiByName($this->input->post('divisi_input'))->id;
		}else{
			$id_divisi =  $this->m_master->getDivisiByName($this->input->post('divisi_select'))->id;
		}
		$data = array(
			'id_instansi' => $id_instansi,
			'posisi' => $this->input->post('posisi'),
			'id_divisi' =>$id_divisi,
			'gaji' => $this->input->post('gaji'),
			'periode_kerja' => $periode,
			'id_alumni' => $id_alumni
		);	
		$this->m_master->inputData($data,'pekerjaan');
		redirect('alumni/Profil/tambahPenggunaAlumni/'.$id_instansi);
	}*/


	public function tambahPenggunaAlumni()
	{
		
		//input tabel riwayat pekerjaan
		$periode = $this->input->post('p1')."-".$this->input->post('p2');
		$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$id_instansi = $this->input->post('id_instansi');
		//generate id pekerjaan

		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'id_instansi' => $id_instansi,
			'pengguna' => $this->m_pengguna->getPenggunaByInstansiID($id_instansi),
			//data riwayat pekerjaan
			'posisi' => $this->input->post('posisi'),
			'gaji' => $this->input->post('gaji'),
			'profil' => $this->input->post('profil'),
			'periode_kerja' => $periode,
			'id_alumni' => $id_alumni
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('alumni/v_tambahPengguna', $data);
		$this->load->view('element/footer');
	}

	public function addPengguna()
	{
		$data_pekerjaan = array(
			'posisi' => $this->input->post('posisi'),
			'gaji' => $this->input->post('gaji'),
			'periode_kerja' => $this->input->post('periode'),
			'id_alumni' => $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id,
			'id_pengguna' => $this->input->post('id_pengguna'),
			'pekerjaanID' => $this->input->post('id_pekerjaan')
		);

		$this->m_master->inputData($data_pekerjaan,'pekerjaan');
		redirect('alumni/Profil/riwayatPekerjaan');
	}

	public function exeAddPengguna()
	{
		$alumniID = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$where = array( 'id_alumni' => $alumniID);
		$cek = $this->m_master->cekData("pekerjaan",$where)->num_rows();
		if ($cek == 0) {
			$firstPekerjaan = 'yes';
		} else {
			$firstPekerjaan = 'no';
		}

		if ($this->input->post('nama') == "") {
			//data pengguna lama
			$data_pekerjaan = array(
				'posisi' => $this->input->post('posisi'),
				'profil' => $this->input->post('profil'),
				'gaji' => $this->input->post('gaji'),
				'periode_kerja' => $this->input->post('periode'),
				'id_alumni' => $alumniID,
				'id_pengguna' => $this->input->post('id_pengguna'),
				'firstPekerjaan' => $firstPekerjaan
			);
			$this->m_master->inputData($data_pekerjaan,'pekerjaan');
		} else{
			//generate penggunaID
			$id_length = 8;
			$id_found = false;
			$possible_chars = "23456789BCDFGHJKMNPQRSTVWXYZ"; 
			while (!$id_found) {  
			    $penggunaID = "";  
			    $i = 0;  
			    while ($i < $id_length) {  
			        $char = substr($possible_chars, mt_rand(0, strlen($possible_chars)-1), 1);  
			        $penggunaID .= $char;   
			        $i++;   
			    }  
			    $where = array( 'penggunaID' => $penggunaID);
			    $cek = $this->m_master->cekData("pengguna",$where)->num_rows();
			    if ($cek == 0) {
			    	$id_found = true;
			    }
			}  //tutup while

			//data pengguna baru
			$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
			$data = array(
				'pengguna_email' => $this->input->post('email'),
				'pengguna_telepon' => $this->input->post('telepon'),
				'pengguna_nama' => $this->input->post('nama'),
				'id_instansi' => $this->input->post('id_instansi'),
				'divisi' => $this->input->post('divisi'),
				'prodiID' => $this->session->userdata('prodiID'),
				'penggunaID'=> $penggunaID
			);	
			$this->m_master->inputData($data,'pengguna');
			//data tabel pekerjaan
			$data_pekerjaan = array(
				'posisi' => $this->input->post('posisi'),
				'profil' => $this->input->post('profil'),
				'gaji' => $this->input->post('gaji'),
				'periode_kerja' => $this->input->post('periode'),
				'id_alumni' => $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id,
				'id_pengguna' => $this->m_pengguna->getPenggunaByPenggunaID($penggunaID)->id,
				'firstPekerjaan' => $firstPekerjaan
			);
			$this->m_master->inputData($data_pekerjaan,'pekerjaan');
		}
		redirect('alumni/Profil/riwayatPekerjaan');
	}

	public function addNewPengguna()
	{
		$id_alumni = $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id;
		$data = array(
			'pengguna_email' => $this->input->post('email'),
			'pengguna_telepon' => $this->input->post('telepon'),
			'pengguna_nama' => $this->input->post('nama'),
			'id_instansi' => $this->input->post('id_instansi'),
			'id_divisi' => $this->input->post('id_divisi')
		);	
		$this->m_master->inputData($data,'pengguna');
		//data tabel pekerjaan
		$data_pekerjaan = array(
			'posisi' => $this->input->post('posisi'),
			'gaji' => $this->input->post('gaji'),
			'periode_kerja' => $this->input->post('periode'),
			'id_alumni' => $this->m_alumni->getAlumniByUserID($this->session->userdata('userID'))->id,
			'id_pengguna' => $this->m_pengguna->getPenggunaByEmail($this->input->post('email'))->id,
			'pekerjaanID' => $this->input->post('id_pekerjaan')
		);
		$this->m_master->inputData($data_pekerjaan,'pekerjaan');
		redirect('alumni/Profil/riwayatPekerjaan');
	}



	public function getPengguna($id)
	{
		$data = $this->m_pengguna->getPenggunaByID($id);
		echo json_encode($data);
	}

	public function getPenggunaID(){
	    // Ambil data ID Provinsi yang dikirim via ajax post
	    $instansiID = $this->input->post('instansiID');
	    
	    $penggunaID = $this->m_pengguna->getPenggunaByInstansiID($instansiID);
	    
	    // Buat variabel untuk menampung tag-tag option nya
	    // Set defaultnya dengan tag option Pilih
	    $lists = "<option value=''>Pilih</option>";
	    
	    foreach($penggunaID as $data){
	      $lists .= "<option value='".$data->id."'>".$data->pengguna_nama."</option>"; // Tambahkan tag option ke variabel $lists
	    }
	    //list_kota = list_pertanyaanSkala
	    $callback = array('list_penggunaID'=>$lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_kota
	    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }

	public function hapusRiwayat($id){
		$where = array('id' => $id);
		$this->m_master->deleteData($where,'pekerjaan');
		redirect('alumni/Beranda');
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
			$this->load->view('alumni/v_gantiPassAlumni', $data);
			$this->load->view('element/footer');
		} else {
			$id = $this->session->userdata('id');
			$newpass = $this->input->post('newpass');
			$where = array(
				'id' => $id
			);
			$data = array(
				'password' => md5($newpass)
			);
			$this->m_master->updateData($where, $data, 'user');
			echo " <script>
                     alert('Ganti password sukses!');
                     history.go(-1);
                    </script>";

		}
	}

	public function passwordCheck($oldpass){
		$userID = $this->session->userdata('userID');
		$userpass = $this->m_master->getUserByuserID($userID)->password;

		if ($userpass !== md5($oldpass)) {
			$this->form_validation->set_message('passwordCheck', 'Password yang anda masukan salah.');
			return false;
		}

		return true;

	}

	function exeEditProfil()
	{

		$data_alumni = array(
			'nama' => $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tahun_masuk' => $this->input->post('tahun_masuk'),
			'tahun_lulus' => $this->input->post('tahun_lulus'),
			'tanggal_lulus' => $this->input->post('tanggal_lulus'),
			'ipk' => $this->input->post('ipk'),
			'toefl' => $this->input->post('toefl'),
			'alamat' => $this->input->post('alamat'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'email' => $this->input->post('email'),
			'no_telepon' => $this->input->post('no_telepon'),
		);
		
		$where = array('id' => $this->input->post('id'));
		$this->m_master->updateData($where,$data_alumni,'alumni');
		redirect('alumni/Profil/biodata/');
	}

	function exeEditPekerjaan()
	{
		//data tabel instansi
		$data = array(
			'jenis_instansi' => $this->input->post('jenis_instansi'),
		);
		$where = array('id' => $this->input->post('id_instansi'));
		$this->m_master->updateData($where,$data,'instansi');
		//data tabel pekerjaan
		$data = array(
			'gaji' => $this->input->post('gaji'),
			'posisi' => $this->input->post('posisi'),
			'profil' => $this->input->post('profil'),
			'periode_kerja' => $this->input->post('p1')."-".$this->input->post('p2')
		);
		$where = array('id' => $this->input->post('id_pekerjaan'));
		$this->m_master->updateData($where,$data,'pekerjaan');
		//data pengguna
		if ($this->input->post('radioPenggunaID') == "") {
			$data = array(
				'pengguna_nama' => $this->input->post('pengguna_nama'),
				'pengguna_email' => $this->input->post('pengguna_email'),
				'pengguna_telepon' => $this->input->post('pengguna_telepon'),
				'divisi' => $this->input->post('divisi')
			);
			$where = array('id' => $this->input->post('id_pengguna'));
			$this->m_master->updateData($where,$data,'pengguna');
		} else {
			//update id pengguna di tabel pekerjaan
			$data = array(
				'id_pengguna' => $this->input->post('radioPenggunaID')
			);
			$where = array('id' => $this->input->post('id_pekerjaan'));
			$this->m_master->updateData($where,$data,'pekerjaan');
			//hapus pengguna sebelumnya
			$where = array('id' => $this->input->post('id_pengguna'));
			$this->m_master->deleteData($where,'pengguna');
		}

		redirect('alumni/Profil/riwayatPekerjaan/');
	}


}