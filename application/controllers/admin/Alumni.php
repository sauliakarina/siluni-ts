<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {
	function __construct(){
		parent::__construct();		
		$this->load->model('m_alumni');
		$this->load->model('m_master');
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
 
	}

	public function index()
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'alumni' => $this->m_alumni->getAlumni(),
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_dataAlumni', $data);
		$this->load->view('element/footer');
	}

	function exeAddAlumni()
	{

			$d=strtotime($this->input->post('tanggal_lulus')); 
			$tanggal_lulus = date("d M", $d);
			$tahun_lulus = date("Y", $d);
			$userID = 'ALU'.$this->input->post('nim');

			$data_user = array(
				'id' => $userID,
				'username' => $this->input->post('nim'),
				'password' => $this->input->post('nim'),
				'prodiID' => $this->session->userdata('prodiID'),
				'role' => 'alumni'
			);
			$this->m_master->inputData($data_user,'user');
				
			$data_alumni = array(
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
			'userID' => $userID,
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'tahun_masuk' => $this->input->post('tahun_masuk'),
			'tahun_lulus' => $tahun_lulus,
			'tanggal_lulus' => $tanggal_lulus
			);
			
			$this->m_master->inputData($data_alumni,'alumni');
			redirect('admin/Alumni');
		}

	public function editProfil($id)
	{
		$data = array(
			'role' => $this->session->userdata('role'),
			'userID' => $this->session->userdata('userID'),
			'prodiID' => $this->session->userdata('prodiID'),
			'profil' => $this->m_alumni->getAlumniByID($id)
		);
		$this->load->view('element/head');
		$this->load->view('element/header');
		$this->load->view('element/navbar', $data);
		$this->load->view('admin/v_editProfilAlumni', $data);
		$this->load->view('element/footer');
	}

	function exeEditProfil()
	{

		$data_user = array(
			'username' => $this->input->post('nim')
		);
		$id = $this->input->post('id');
		$where = array('id' => $this->input->post('userID'));
		$this->m_master->updateData($where,$data_user,'user');

		$data_alumni = array(
			'nama' => $this->input->post('nama'),
			'nim' => $this->input->post('nim'),
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
		redirect('admin/Alumni/editProfil/'.$id);
	}

	function exeImport()
	{
		if ($_FILES['file']['name']) {
			$fileName = time().$_FILES['file']['name'];

			$config['upload_path'] = './assets/upload/';
			$config['file_name'] = $fileName;
			$config['allowed_types'] = 'xls|xlsx|csv';
			$config['max_size'] = 10000;

			$this->load->library('upload');
			$this->upload->initialize($config);

			if(! $this->upload->do_upload('file') )
			$this->upload->display_errors();

			$media = $this->upload->data('file');
			$inputFileName = $this->upload->data('full_path');

			try {
				$inputFileType = IOFactory::identify($inputFileName);
				$objReader = IOFactory::createReader($inputFileType);
				$objPHPExcel = $objReader->load($inputFileName);
			} catch(Exception $e) {
				die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
			}

			$sheet = $objPHPExcel->getSheet(0);
			$highestRow = $sheet->getHighestRow();
			$highestColumn = $sheet->getHighestColumn();

			for ($row = 2; $row <= $highestRow; $row++){                  //  Read a row of data into an array
				$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row, NULL, TRUE, FALSE);

				$nim = $rowData[0][1];
				$cek = $this->m_alumni->cekAlumni($nim);
				if($cek->num_rows() < 1){
					//Sesuaikan sama nama kolom tabel di database
					$insert = $this->db->insert("alumni",$data);
					$d=strtotime($rowData[0][4]); 
					$tanggal_lulus = date("d M", $d);
					$data = array(
						"nim"=> $rowData[0][1],
						"nama"=> $rowData[0][0],
						"userID"=> "ALU".$rowData[0][1],
						"jenis_kelamin"=> $rowData[0][2],
						"tahun_masuk"=> $rowData[0][3],
						"tanggal_lulus"=> $tanggal_lulus
					);

					//sesuaikan nama dengan nama tabel
					$data = array(
						"id"=> "ALU".$rowData[0][1],
						"username"=> $rowData[0][1],
						"password"=> md5($rowData[0][1]),
						"role"=> 'alumni',
						'prodiID' => $this->session->userdata('prodiID')
					);

					$insert = $this->db->insert("user",$data);
				}
				
				//delete_files($media['file_path']);
				unlink($inputFileName);
			}
			$this->session->set_flashdata("pesan", '<div><div class="alert alert-info" id="alert" align="center">Date telah diimpor</div></div>');
			redirect('admin/Alumni');
		} else {
			$this->session->set_flashdata("pesan", '<div><div class="alert alert-danger" id="alert" align="center">File belum dimasukkan</div></div>');
			redirect('admin/Alumni');
		}
	}

	
}