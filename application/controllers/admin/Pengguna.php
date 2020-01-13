<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($_SESSION["logged_in"] != 'login') {
			redirect(base_url("login"));
		}
				
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->model('m_pengguna');
	}

	public function index()
	{
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'pengguna'=> $this->m_pengguna->getPengguna($prodiID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_dataPengguna', $data);
		$this->load->view('element/footer');
	}

	public function daftarInstansi()
	{
		$prodiID = $this->session->userdata('prodiID');
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'instansi'=> $this->m_pengguna->getInstansiGuest($prodiID)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('v_dataInstansi', $data);
		$this->load->view('element/footer');
	}

	public function getInstansi($id)
	{
		$data = $this->m_master->getInstansiByID($id);
		echo json_encode($data);
	}

	public function lihatAlumni($penggunaID)
	{
		$newAlumni = $this->m_pengguna->getCountNewAlumniPengguna($penggunaID);
		$unseenAlumni = $this->m_pengguna->getPekerjaanSeenPengguna($penggunaID, '0');
		foreach ($unseenAlumni as $a) {
			$data = array(
				'seenPengguna' => '1'
			);
			$where = array('id' => $a->id);
			$this->m_master->updateData($where,$data,'pekerjaan');
		}
		$prodiID = $this->session->userdata('prodiID');
		//update seen di table pengguna
		$data = array(
			'seen' => '1'
		);
		$where = array('id' => $penggunaID);
		$this->m_master->updateData($where,$data,'pengguna');
		
		
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'alumni'=> $this->m_pengguna->joinPekerjaanAlumniByPenggunaID($penggunaID),
			'newAlumni' => $newAlumni,
			'penggunaID' => $penggunaID
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_lihatAlumniPengguna', $data);
		$this->load->view('element/footer');
	}


	public function getNewPengguna() {
		
		//update data seen
		$prodiID = $this->session->userdata('prodiID');
		$pengguna = $this->m_pengguna->getPenggunaBySeen('0',$prodiID);
		/*foreach ($pengguna as $p) {
			$data = array('seen' => '1');
			$where = array('id' => $p->id);
			$this->m_master->updateData($where,$data,'pengguna');
		}
		*/
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $prodiID,
			'penggunaBaru' => $this->m_pengguna->getPenggunaBySeen('0', $prodiID),
			'penggunaLama' => $this->m_pengguna->getPenggunaBySeen('1', $prodiID)
		);

		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_newPengguna', $data);
		$this->load->view('element/footerVer2');

	}

	public function editPengguna($id)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'pr'=> $this->m_pengguna->getPenggunaByID($id)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_editPenggunaAlumni', $data);
		$this->load->view('element/footer');
	}

	function deletePengguna($id){
		$data = array(
		'isDelete' => 'yes',
		/*'penggunaID' => Null,*/
		);
		$where = array(
		'id' => $id
		);
		$this->m_master->updateData($where,$data,'pengguna');
		$where = array(
		'respondenID' => $id
		);
		$this->m_master->deleteData($where,'notif_kuesioner');
		redirect('admin/Pengguna');
	}

	public function deleteInstansi($id){

		$where = array('id' => $id);
		$this->m_master->deleteData($where,'instansi');

		redirect('admin/Pengguna/daftarInstansi');
	}

	public function getPengguna($id)
	{
		$data = $this->m_pengguna->getPenggunaByID($id);
		echo json_encode($data);
	}

	function exeEdit()
	{

		$data = array(
			'pengguna_nama' => $this->input->post('pengguna_nama'),
			'divisi' => $this->input->post('divisi'),
			'id_instansi' => $this->input->post('id_instansi'),
			'pengguna_email' => $this->input->post('pengguna_email'),
			'pengguna_telepon' => $this->input->post('pengguna_telepon'),
		);
		
		$where = array('id' => $this->input->post('penggunaID'));
		$this->m_master->updateData($where,$data,'pengguna');
		redirect('admin/Pengguna');
	}

	public function exeEditInstansi()
	{

		$data = array(
			'nama_instansi' => $this->input->post('nama_instansi'),
			'jenis_instansi' => $this->input->post('jenis_instansi'),
			'alamat' => $this->input->post('alamat')
		);
		
		$where = array('id' => $this->input->post('id'));
		$this->m_master->updateData($where,$data,'instansi');
		redirect('admin/Pengguna/daftarInstansi');
	}

	function updateTandai()
	{
		$penggunaID = $this->input->post('penggunaID');
		foreach ($penggunaID as $p) {
			$data = array(
			'tandai' => $this->input->post('tandai'.$p)
			);
			$where = array('id' => $p);
			$this->m_master->updateData($where,$data,'pengguna');
		}
		redirect('admin/Pengguna/getNewPengguna');
	}

}