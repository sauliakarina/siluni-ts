<!DOCTYPE html>
<html lang="en">
<head>
  <title>Siluni</title>
  <link rel="icon" href="<?php echo base_url('assets/siluni//images/unj.png')?>" type="image/x-icon">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/vendor/bootstrap/css/bootstrap.min.css">
  <script src="<?php echo base_url('assets/template/vendor') ?>/jquery/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/vendor/font-awesome/css/font-awesome.min.css">
 <link rel="stylesheet" href="<?php echo base_url(); ?>assets/template/vendor/fontawesome-free-5.9.0-web/css/all.css">

  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>

<body>

  <div class="jumbotron text-center" style="margin-bottom:0; background-color: #006F45;height: 190px">
    <img style="height: 60px;width: 60px" src="<?php echo base_url();?>/assets/siluni//images/unj.png" width="1350px" class="image1 mt-2">
    <h4 style="margin-bottom: 0px" class="h4-reponsive mb-2 mt-2 white-text font-italic font1">Sistem Informasi Alumni</h4><h4 class="h4-reponsive mb-4 mt-1 white-text font-bold font2">Universitas Negeri Jakarta</h4>
  </div>

  <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #EFE037">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a style="color: grey" class="nav-link"  href="<?php echo base_url('beranda'); ?>">Beranda</a>
        </li>
        <li class="nav-item">
          <a style="color: grey" class="nav-link" href="<?php echo base_url('pencarian_alumni') ?>">Pencarian Alumni</a>
        </li>
        <li class="nav-item">
          <a style="color: grey"  class="nav-link" href="<?php echo base_url('pencarian_dosen') ?>">Daftar Dosen</a>
        </li>
         <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a style="color: grey" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Pengguna Alumni
          </a>
          <div class="dropdown-menu">
            <?php foreach ($prodi as $p ) { ?>
            <a class='dropdown-item' href="<?php echo base_url('pengguna/Pengguna/daftarPengguna/'.$p->id) ?>"><?php echo $p->nama_prodi ?></a>
            <?php } ?>

          </div>
        </li>

         <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a style="color: grey" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Statistik Alumni
          </a>
          <div class="dropdown-menu">
            <?php foreach ($prodi as $p ) { ?>
            <a class='dropdown-item' href="<?php echo base_url('Statistik/alumni/'.$p->id) ?>"><?php echo $p->nama_prodi ?></a> 
            <?php } ?>
          </div>
        </li>

         <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a style="color: grey" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Berita Alumni
          </a>
          <div class="dropdown-menu">
            <a class='dropdown-item' href="<?php echo base_url('berita_alumni') ?>">Info Alumni</a>
            <a class='dropdown-item' href="<?php echo base_url('berita_alumni/tampil_karir') ?>"> Tips Karir </a>
            <a class='dropdown-item' href="<?php echo base_url('berita_alumni/tampil_lowongan') ?>"> Lowongan Kerja</a>
          </div>
        </li>

         <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a style="color: grey" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            Berita Prodi
          </a>
          <div class="dropdown-menu">
            <a class='dropdown-item' href='http://fmipa.unj.ac.id/siskom/'>Ilmu Komputer</a>
            <a class='dropdown-item' href='http://fmipa.unj.ac.id/pmtk/'> Pendidikan Matematika </a>
            <a class='dropdown-item' href='http://fmipa.unj.ac.id/mtk/'> Matematika Murni</a>
          </div>
        </li>

        <li class="nav-item">
          <a style="color: grey;background-color:"  class="nav-link" href="<?php echo  site_url('Login') ?>"><b><i>Masuk ke Sistem</i></b></a>
        </li>
        
      </ul>
    </div>  
  </nav>