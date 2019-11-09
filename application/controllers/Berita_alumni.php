<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_alumni extends CI_Controller {


  function __construct(){
    parent::__construct();    
    $this->load->model('siluni/m_berita');
    $this->load->model('m_master');
  }
 
  //info alumni
  public function index()
  {
    
    $this->load->library('pagination');
    $this->load->model('m_berita');
    $config =  array();
    $config['base_url'] = base_url().'berita_alumni/index'; //(?)
    $config['total_rows'] = $this->m_berita->count_berita();
    $config['per_page'] = 2;
    $config['num_links'] = 4;

    $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = "</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tagl_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";


    $this->pagination->initialize($config);
    $page = $this->uri->segment(3);
        $data=array (
          'status' => $this->session->userdata('status'),
          'user_id' => $this->session->userdata('user_id'),
          'berita' => $this->m_berita->tampil_berita_info($config['per_page'], $page),
          'links' => $this->pagination->create_links(),
          'title'=>'Info Alumni- SiLuni',
          'prodi' => $this->m_master->getProdi()
          );

        $this->load->view('element/header_siluni',$data);
        $this->load->view('guest/v_berita_info',$data);
        $this->load->view('element/footer_siluni');

  }

//lowongan kerja
  public function tampil_lowongan()
  {
    
    $this->load->library('pagination');
    $this->load->model('m_berita');
    $config =  array();
    $config['base_url'] = base_url().'berita_alumni/tampil_lowongan'; //(?)
    $config['total_rows'] = $this->m_berita->count_berita_lowongan();
    $config['per_page'] = 12;
    $config['num_links'] = 4;

    $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = "</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tagl_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";


    $this->pagination->initialize($config);
    $page = $this->uri->segment(3);
        $data=array (
          'status' => $this->session->userdata('status'),
          'nama' => $this->session->userdata('nama'),
          'berita' => $this->m_berita->tampil_berita_lowongan($config['per_page'], $page),
          'links' => $this->pagination->create_links(),
          'title'=>'Lowongan Kerja- SiLuni',
          'prodi' => $this->m_master->getProdi()
          );

        $this->load->view('element/header_siluni',$data);
        $this->load->view('guest/v_berita_lowongan',$data);
        $this->load->view('element/footer_siluni');

  }
//tips karir
  public function tampil_karir()
  {
    
    $this->load->library('pagination');
    $this->load->model('m_berita');
    $config =  array();
    $config['base_url'] = base_url().'berita_alumni/tampil_karir'; //(?)
    $config['total_rows'] = $this->m_berita->count_berita_karir();
    $config['per_page'] = 12;
    $config['num_links'] = 4;

    $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = "</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tagl_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";


    $this->pagination->initialize($config);
    $page = $this->uri->segment(3);
        $data=array (
          'status' => $this->session->userdata('status'),
          'nama' => $this->session->userdata('nama'),
          'berita' => $this->m_berita->tampil_berita_karir($config['per_page'], $page),
          'links' => $this->pagination->create_links(),
          'title'=>'Tips Karir - SiLuni',
          'prodi' => $this->m_master->getProdi()
          );

        $this->load->view('element/header_siluni',$data);
        $this->load->view('guest/v_berita_karir',$data);
        $this->load->view('element/footer_siluni');

  }


  function berita_saya() {


  if (!isset($_SESSION["username"])) {
            redirect('login');
        } else {
        $nrm = $this->session->userdata('user_id');
          $this->load->library('pagination');
          $this->load->model('m_berita');
          $config =  array();
          $config['base_url'] = base_url().'berita_alumni/berita_saya'; //(?)
          $config['total_rows'] = $this->m_berita->count_berita_saya($nrm);
          $config['per_page'] = 6;
          $config['num_links'] = 4;

          $config['full_tag_open'] = "<ul class='pagination'>";
          $config['full_tag_close'] = "</ul>";
          $config['num_tag_open'] = '<li>';
          $config['num_tag_close'] = '</li>';
          $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
          $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
          $config['next_tag_open'] = "<li>";
          $config['next_tagl_close'] = "</li>";
          $config['prev_tag_open'] = "<li>";
          $config['prev_tagl_close'] = "</li>";
          $config['first_tag_open'] = "<li>";
          $config['first_tagl_close'] = "</li>";
          $config['last_tag_open'] = "<li>";
          $config['last_tagl_close'] = "</li>";


    $this->pagination->initialize($config);
    $page = $this->uri->segment(3);
    
        $data=array (
          'status' => $this->session->userdata('status'),
          'nama' => $this->session->userdata('nama'),
          'berita' => $this->m_berita->tampil_berita_saya($config['per_page'], $page,$nrm),
          'links' => $this->pagination->create_links(),
          'title'=>'Berita Saya - SiLuni',
          'error_upload' => '',
          'prodi' => $this->m_master->getProdi()
          );

        $this->load->view('element/header_siluni',$data);
        $this->load->view('berita/v_berita_saya',$data);
        $this->load->view('element/footer_siluni');

        }
  
  
  }

  function edit($id){
  $where = array('id_berita' => $id);
  $data=array (
          'status' => $this->session->userdata('status'),
          'nama' => $this->session->userdata('nama'),
          'berita' => $this->m_berita->edit_berita_saya($where,'berita_alumni')->result(),
          'title'=>'Berita Saya  - SiLuni',
            'active_beranda'=>'active'
          );
  $this->load->view('element/header_siluni',$data);
  $this->load->view('berita/v_edit_berita',$data);
  $this->load->view('element/footer_siluni');
  }

  function update_berita(){
    //fungsi uplod
  $id_berita = $this->input->post('id_berita');
  $judul = $this->input->post('judul');
  $kategori = $this->input->post('kategori');
  $tanggal_dibuat = $this->input->post('tanggal_dibuat');
  //$gambar_berita = $this->input->post('gambar_berita');
  $isi = $this->input->post('isi');
 

  $data = array(
    'judul' => $judul,
    'kategori' => $kategori,
    //'gambar_berita' => $gambar_berita,
    'isi' => $isi,
    'tanggal_dibuat' => $tanggal_dibuat
  );

  $where = array(
    'id_berita' => $id_berita
  );

  $this->m_berita->update_data($where,$data,'berita_alumni');
  redirect('berita_alumni/berita_saya');
}

  function tampil_berita($id) {
    $where = array('id' => $id);
    $data = array(
       'title'=>'Berita Alumni - SiLuni',
        'active_beranda'=>'active',
        'status' => $this->session->userdata('status'),
        'user_id' => $this->session->userdata('user_id'),
        'username' => $this->session->userdata('username'),
        'berita' => $this->m_berita->tampil_berita($where,'berita_alumni')->result(),
        'prodi' => $this->m_master->getProdi()
    );
        $this->load->view('element/header_siluni',$data);
        $this->load->view('guest/v_tampil_berita',$data);
        $this->load->view('element/footer_siluni');
  }

  function tambah(){
    if ($_SESSION["status"] == 'alumni' or $_SESSION["status"] == 'admin') {
         $data=array(
            'title'=>'Berita Alumni - SiLuni',
            'active_beranda'=>'active',
            'status' => $this->session->userdata('status'),
            'user_id' => $this->session->userdata('user_id'),
            'username' => $this->session->userdata('username'),
            'sukses' => '',
            'warning' => '',
            'prodi' => $this->m_master->getProdi()
        );
      $this->load->view('element/header_siluni',$data);
      $this->load->view('berita/v_tambah_berita',$data);
      $this->load->view('element/footer_siluni');

           
        } else {
          redirect('login');  
        }
   
  }

  

 /*function tambah_aksi(){
  $this->form_validation->set_rules('judul','Judul','required');
  $this->form_validation->set_rules('kategori','Kategori','required');

  if ($this->form_validation->run()) {

      $user_id = $this->input->post('user_id');
      $judul = $this->input->post('judul');
      $kategori = $this->input->post('kategori');
      $isi = $this->input->post('isi');

      $config = array(
      'upload_path' => "assets/images/berita/",
      'allowed_types' => "gif|jpg|png|jpeg",
      'max_size' => "2048", //tanya ukuran
      'max_height' => "1200",
      'max_width' => "1800"
      );
      $this->load->library('upload',$config);

     $error = $this->upload->display_errors();
      if ($this->upload->do_upload('gambar_berita')) {
          $file_info = $this->upload->data();
          $gambar_berita = $file_info['file_name'];       
      } else {
        // error do upload
          $gambar_berita = $this->input->post('no_image');
      } //error do upload

       $data = array(
        'user_id' => $user_id,
        'judul' => $judul,
        'kategori' => $kategori,
        'isi' => $isi,
        'gambar_berita' => $gambar_berita
        );
         $this->m_berita->input_data($data,'berita_alumni');
         $data=array(
            'title'=>'Tambah Berita - SiLuni',
            'active_beranda'=>'active',
            'sukses' =>   '<div class="alert alert-success alert-dismissable" style="margin-top: 10px">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                          <strong>Sukes! Berita alumni sukses ditambahkan.</strong> 
                          </div>',
            'status' => $this->session->userdata('status'),
            'user_id' => $this->session->userdata('user_id'),
            'username' => $this->session->userdata('username'),
            'error' => '',
            'warning'=>''
          );
          $this->load->view('element/header_siluni',$data);
          $this->load->view('berita/v_tambah_berita',$data);
          $this->load->view('element/footer_siluni');

  } //if form validation run
    else {
      //error form validation
      if ($_SESSION["status"] == 'alumni' or $_SESSION["status"] == 'admin') {
            
             $data=array(
            'title'=>'Berita Alumni - SiLuni',
            'active_beranda'=>'active',
            'status' => $this->session->userdata('status'),
            'user_id' => $this->session->userdata('user_id'),
            'username' => $this->session->userdata('username'),
            'sukses' => '',
            'warning' => '<div class="alert alert-danger alert-dismissable" style="margin-top: 10px">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                          <strong>Berita alumni gagal di tambah! pastikan mengisi anda mengisi judul dan kategori</strong> 
                          </div>',
            'error_validation' => validation_errors()
        );
    $this->load->view('element/header_siluni',$data);
    $this->load->view('berita/v_tambah_berita',$data);
    $this->load->view('element/footer_siluni');
        } else {
          redirect('login');
        }
    }

}*/


function tambah_aksi(){
  $this->form_validation->set_rules('judul','Judul','required');
  $this->form_validation->set_rules('kategori','Kategori','required');

  if ($this->form_validation->run()) {

      $user_id = $this->input->post('user_id');
      $judul = $this->input->post('judul');
      $kategori = $this->input->post('kategori');
      $isi = $this->input->post('isi');
      $waktu = date("Y-m-d H:i:s");

      $data = array(
        'user_id' => $user_id,
        'judul' => $judul,
        'kategori' => $kategori,
        'isi' => $isi,
        'tanggal_dibuat' =>$waktu
       );
      $this->m_berita->input_data($data,'berita_alumni');
      $id_berita = $this->m_berita->get_id_berita($judul,$waktu)->id_berita;

      $config = array(
      'upload_path' => "assets/images/berita/",
      'allowed_types' => "gif|jpg|png|jpeg",
      'overwrite' => TRUE,
      'max_size' => "2048", //tanya ukuran
      'max_height' => "1200",
      'max_width' => "1800",
      'file_name' => "$id_berita"
      );
      $this->load->library('upload',$config);

     $error = $this->upload->display_errors();
      if ($this->upload->do_upload('gambar_berita')) {
          $file_info = $this->upload->data();
          $gambar_berita = $file_info['file_name'];       
      } else {
        // error do upload
          $gambar_berita = $this->input->post('no_image');
      }

      $data = array(
      'gambar_berita' => $gambar_berita
      );
      $where = array(
        'id_berita' => $id_berita
      );

    $this->m_berita->input_gambar($where,$data,'berita_alumni'); 

         $data=array(
            'title'=>'Tambah Berita - SiLuni',
            'active_beranda'=>'active',
            'sukses' =>   '<div class="alert alert-success alert-dismissable" style="margin-top: 10px">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                          <strong>Sukes! Berita alumni sukses ditambahkan.</strong> 
                          </div>',
            'status' => $this->session->userdata('status'),
            'user_id' => $this->session->userdata('user_id'),
            'username' => $this->session->userdata('username'),
            'error' => '',
            'warning'=>'',
            'prodi' => $this->m_master->getProdi()
          );
          $this->load->view('element/header_siluni',$data);
          $this->load->view('berita/v_tambah_berita',$data);
          $this->load->view('element/footer_siluni');

  } //if form validation run
    else {
      //error form validation
      if ($_SESSION["status"] == 'alumni' or $_SESSION["status"] == 'admin') {
            
             $data=array(
            'title'=>'Berita Alumni - SiLuni',
            'active_beranda'=>'active',
            'status' => $this->session->userdata('status'),
            'user_id' => $this->session->userdata('user_id'),
            'username' => $this->session->userdata('username'),
            'sukses' => '',
            'warning' => '<div class="alert alert-danger alert-dismissable" style="margin-top: 10px">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                          <strong>Berita alumni gagal di tambah! pastikan anda mengisi judul dan kategori</strong> 
                          </div>',
            'error_validation' => validation_errors(),
            'prodi' => $this->m_master->getProdi()
        );
    $this->load->view('element/header_siluni',$data);
    $this->load->view('berita/v_tambah_berita',$data);
    $this->load->view('element/footer_siluni');
        } else {
          redirect('login');
        }
    }

}

 function tambah_berita_admin(){
    $data=array(
            'title'=>'Berita Alumni - SiLuni',
            'active_beranda'=>'active',
            'status' => $this->session->userdata('status'),
            'nama' => $this->session->userdata('nama'),
            'username' => $this->session->userdata('username'),
            'sukses' => '',
            'warning' => '',
            'prodi' => $this->m_master->getProdi()
        );
    $this->load->view('element/header_siluni',$data);
    $this->load->view('berita/v_tambah_berita_admin',$data);
    $this->load->view('element/footer_siluni');
  }
      

  function hapus($id){
    $where = array('id_berita' => $id);
    $this->m_berita->hapus_data($where,'berita_alumni');
    redirect('berita_alumni/berita_saya');
  }

public function do_upload(){
  $id_berita= $this->input->post('id_berita');
  $tanggal_dibuat= $this->input->post('tanggal_dibuat');
    $config = array(
    //'upload_path' => "./uploads/",
    'upload_path' => "./assets/images/berita/",
    'allowed_types' => "gif|jpg|png|jpeg",
    'overwrite' => TRUE,
    'max_size' => "2048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
    'max_height' => "900", //900
    'max_width' => "1500", //1500
    'file_name' => "$id_berita"
    );
  $this->load->library('upload', $config);
  $error = $this->upload->display_errors();
  if($this->upload->do_upload('userfile'))
  {
    $file_info = $this->upload->data();
    $gambar_berita = $file_info['file_name'];

    $data = array(
      'gambar_berita' => $gambar_berita,
      'tanggal_dibuat' => $tanggal_dibuat
    );
    $where = array(
      'id_berita' => $id_berita
    );
    $this->m_berita->update_data($where,$data,'berita_alumni');
    redirect('berita_alumni/berita_saya');
  }
  else
  {
    $this->load->library('pagination');
    $this->load->model('m_berita');
    $config =  array();
    $config['base_url'] = base_url().'berita_alumni/berita_saya'; //(?)
    $config['total_rows'] = $this->m_berita->count_berita_lowongan();
    $config['per_page'] = 6;
    $config['num_links'] = 4;

    $config['full_tag_open'] = "<ul class='pagination'>";
    $config['full_tag_close'] = "</ul>";
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
    $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
    $config['next_tag_open'] = "<li>";
    $config['next_tagl_close'] = "</li>";
    $config['prev_tag_open'] = "<li>";
    $config['prev_tagl_close'] = "</li>";
    $config['first_tag_open'] = "<li>";
    $config['first_tagl_close'] = "</li>";
    $config['last_tag_open'] = "<li>";
    $config['last_tagl_close'] = "</li>";


    $this->pagination->initialize($config);
    $page = $this->uri->segment(3);
    $nrm = $this->session->userdata('username');
        $data=array (
          'status' => $this->session->userdata('status'),
          'nama' => $this->session->userdata('nama'),
          'berita' => $this->m_berita->tampil_berita_saya($config['per_page'], $page,$nrm),
          'links' => $this->pagination->create_links(),
          'title'=>'Berita Saya - SiLuni',
          'error_upload' => '<div class="alert alert-danger alert-dismissable" style="margin-top: 10px">
                       <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                         <strong>Foto berita gagal diganti! cek ukuran dan dimensi foto berita.</strong> 
                      </div>',
          'prodi' => $this->m_master->getProdi()
          );

        $this->load->view('element/header_siluni',$data);
        $this->load->view('berita/v_berita_saya',$data);
        $this->load->view('element/footer_siluni');

   
  }
  }


}