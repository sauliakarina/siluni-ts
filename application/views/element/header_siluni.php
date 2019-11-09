<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <title><?php //echo $title ;?></title> -->
    <title>Siluni</title>
    <link rel="icon" href="<?php echo base_url('assets/siluni//images/unj.png')?>" type="image/x-icon">
   <!--  <link rel="stylesheet" type="text/css" href="https://fonts.googlelapis.com/icons?family=Material+Icons"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">  --> 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/siluni//datatables/jquery.dataTables.min.css" type="text/css" > <!-- datatables -->
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/siluni//mdb/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/siluni//mdb/css/mdb.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/siluni//mdb/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/siluni//mdb/css/mdb.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/siluni//mdb/css/style.css" rel="stylesheet">
    <!-- <link href="<?php //echo base_url();?>/assets/siluni//mdb/css/custom.css" rel="stylesheet"> -->       
    <script src="<?php echo base_url();?>assets/siluni//mdb/js/jquery-3.1.1.js" type="text/javascript"></script>
     <script src="<?php echo base_url();?>assets/siluni//mdb/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/siluni//mdb/js/jquery-2.2.3.js" type="text/javascript"></script>
      <script src="<?php echo base_url();?>assets/siluni//mdb/js/jquery-2.2.3.min.js" type="text/javascript"></script>
    
    <!-- datatables -->
   <!--  <script type="text/javascript" src="https://ajax.googlelapis.com/ajax/libs.jquery/2.2.2/jquery.min.js"></script> -->
    <script src="<?php echo base_url();?>/assets/siluni//datatables/jquery.dataTables.min.js" type="text/javascript"></script>
    <!-- <script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->



    
   <style type="text/css">
       @media(max-width:767px){
            .image1 {
                display: none!important; 
            }
            .font1{
                font-size: 20px;
            }
            .font2{
                font-size: 18px;
            }
        }

         @media(min-width:768px) and (max-width: 770px) {
            .image1 {
                display: block!important; 
            }
            .font1{
                font-size: 20px;
            }
            .font2{
                font-size: 18px;
            }
        }

        .footer{
            position: relative;
            right: 0;
            bottom: 0;
            left: 0;
           

        }

                    /* Dropdown Button */
            .dropbtn {
                color: grey !important;
                font-size: 16px;
                border: none;
                cursor: pointer;
            }

            /* The container <div> - needed to position the dropdown content */
            .dropdown {
                position: relative;
                display: inline-block;
            }

            /* Dropdown Content (Hidden by Default) */
            .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 160px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index: 1;
            }

            /* Links inside the dropdown */
            .dropdown-content a {
                color: black;
                padding: 12px 16px;
                text-decoration: none;
                display: block;
            }

            /* Change color of dropdown links on hover */
            .dropdown-content a:hover {background-color: #f1f1f1}

            /* Show the dropdown menu on hover */
            .dropdown:hover .dropdown-content {
                display: block;
            }

            .greytxt {
                color: grey!important;

            }
            .unjcolor-txt {
                color: #006F45 !important;
            }

            .form-simple .font-small {
          font-size: 0.8rem; }

        .form-simple .header {
          border-top-left-radius: .3rem;
          border-top-right-radius: .3rem; }

        .form-simple input[type=text]:focus:not([readonly]) {
          border-bottom: 1px solid #ff3547;
          -webkit-box-shadow: 0 1px 0 0 #ff3547;
          box-shadow: 0 1px 0 0 #ff3547; }

        .form-simple input[type=text]:focus:not([readonly]) + label {
          color: #4f4f4f; }

        .form-simple input[type=password]:focus:not([readonly]) {
          border-bottom: 1px solid #ff3547;
          -webkit-box-shadow: 0 1px 0 0 #ff3547;
          box-shadow: 0 1px 0 0 #ff3547; }

        .form-simple input[type=password]:focus:not([readonly]) + label {
          color: #4f4f4f; }
                        
            
    </style>

  </head>
<!-- Uses a transparent header that draws on top of the layout's background -->

<header>

    <!--Jumbotron-->
        <div style="margin-bottom: 0px;margin-top: 0 !important;background-color:#006F45;height: 120px;padding-top: 10px !important;padding-right: 40px !important" class="jumbotron jumbotron-fluid">
           
            <div style="margin-left: 0px" class="container mt-2 mb-2">
                <div class="row">
                    <div class="col-sm-1 mr-3">
                    <img style="height: 70px;width: 70px" src="<?php echo base_url();?>/assets/siluni//images/unj.png" width="1350px" class="image1 mt-2">
                    </div>
                    <div  class="col-sm-5 mt-1">
                    <span class="inline-block"><h4 style="margin-bottom: 0px" class="h4-reponsive mb-2 mt-2 white-text font-italic font1">Sistem Informasi Alumni</h4><h4 class="h4-reponsive mb-4 mt-1 white-text font-bold font2">Universitas Negeri Jakarta</h4></span>
                    </div>
                </div>
            </div>

        </div>
        <!--Jumbotron-->                   
    <div>
    <nav style="background-color: #EFE037" class="navbar navbar-expand-lg navbar-dark">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span style="color:white" class="navbar-toggler-icon"></span>
            </button>
            <div style="float: left;margin-left: 30px"  class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a style="color: grey" class="nav-link" href="<?php echo base_url('beranda'); ?>"><b>Beranda</b><span class="sr-only">(current)</span></a>
                    </li>
                    <!--Menu Admin-->
                    <?php if($status=='admin') {
                      echo " <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle dropbtn' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <b>Kelola Data</b>
                        </a>
                        <div class=' dropdown-content' >
                            <a class='dropdown-item' href=".base_url('crud/index').">User</a>
                              <a class='dropdown-item' href=".base_url('crud_alumni/index')."> Alumni </a>
                            <a class='dropdown-item' href=".base_url('crud_dosen/index')."> Dosen </a>
                        </div>
                    </li>
                    <li class='nav-item'>
                        <a style='color: grey' class='nav-link' href=".base_url('crud_berita/index')."><b>Kelola Berita</b></a>
                    </li>
                   
                    ";
                    } else { ?>
                    <li class='nav-item'>
                        <a style='color: grey' class='nav-link' href="<?php echo base_url('pencarian_alumni') ?>"><b>Pencarian Alumni</b></a>
                    </li>
                    <li class='nav-item'>
                        <a style='color: grey' class='nav-link' href="<?php echo base_url('pencarian_dosen') ?>"><b>Daftar Dosen</b></a>
                    </li>
                     <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle dropbtn' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <b>Pengguna Alumni</b>
                        </a>
                        <div class='dropdown-content' >
                            <?php foreach ($prodi as $p ) { ?>
                            <a class='dropdown-item' href="<?php echo base_url('pengguna/Pengguna/daftarPengguna/'.$p->id) ?>"><?php echo $p->nama_prodi ?></a>
                            <?php } ?>
                        </div>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle dropbtn' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <b>Statistik Alumni</b>
                        </a>
                        <div class=' dropdown-content' >
                            <a class='dropdown-item dropdown-submenu' href="<?php echo base_url('Statistik') ?>">Ilmu Komputer</a>
                        </div>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle dropbtn' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <b>Berita Alumni</b>
                        </a>
                        <div class=' dropdown-content' >
                            <a class='dropdown-item' href="<?php echo base_url('berita_alumni') ?>">Info Alumni</a>
                              <a class='dropdown-item' href="<?php echo base_url('berita_alumni/tampil_karir') ?>"> Tips Karir </a>
                            <a class='dropdown-item' href="<?php echo base_url('berita_alumni/tampil_lowongan') ?>"> Lowongan Kerja</a>
                        </div>
                    </li>
                    <li class='nav-item dropdown'>
                        <a class='nav-link dropdown-toggle dropbtn' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                        <b>Berita Prodi</b>
                        </a>
                        <div class=' dropdown-content' >
                            <a class='dropdown-item' href='http://fmipa.unj.ac.id/siskom/'>Ilmu Komputer</a>
                              <a class='dropdown-item' href='http://fmipa.unj.ac.id/pmtk/'> Pendidikan Matematika </a>
                            <a class='dropdown-item' href='http://fmipa.unj.ac.id/mtk/'> Matematika Murni</a>
                        </div>
                    </li>
                    <?php  
                    if ($status=='alumni') {
                      echo "<li class='nav-item'>
                        <a style='color: grey' class='nav-link' href='".base_url('tracer_study')."'><b>Tracer Study</b></a>
                    </li>";
                    }
                } ?>
                     
                </ul>
                <ul class="navbar-nav nav-flex-icons">
                  <?php if ($status=='alumni') {
                    echo "<li class='nav-item'>
                        <a class='nav-link unjcolor-txt' href='".site_url('profil_saya/index')."''><b>Profil</b><i class='fa fa-user-o unjcolor-txt' data-toggle='tooltip' data-placement='bottom' title='Profil Saya'></i></a>
                    </li>"; //hapus tanda ";
                    /*
                    <li class='nav-item'>
                        <a class='nav-link unjcolor-txt'><b>Forum</b><i class='fa fa-users unjcolor-txt' data-toggle='tooltip' data-placement='bottom' title='Forum Diskusi'></i></a>
                    </li>";*/
                  } elseif ($status=='dosen') {
                    echo "<li class='nav-item'>
                        <a class='nav-link unjcolor-txt' href='".site_url('profil_dosen/index')."''><b>Profil</b><i class='fa fa-user-o unjcolor-txt' data-toggle='tooltip' data-placement='bottom' title='Profil Saya'></i></a>
                    </li>";
                     /*
                     <li class='nav-item'>
                        <a class='nav-link unjcolor-txt'><b>Forum</b><i class='fa fa-users unjcolor-txt' data-toggle='tooltip' data-placement='bottom' title='Forum Diskusi'></i></a>
                    </li>"; //hapus tanda ";
                    */
                
                  }
                   ?>

                   <?php 

                     if(!isset($_SESSION['username'])) {
                    ?>
                        <li class='nav-item'>
                        <a class='nav-link unjcolor-txt' href="<?php echo  site_url('Login') ?>"><b>Masuk</b><i class='fa fa-arrow-circle-o-right unjcolor-txt' data-toggle='tooltip' data-placement='bottom' title=''></i></a>
                    </li>
                <?php } else { ?>
                    <li class='nav-item'>
                        <a class='nav-link unjcolor-txt' href="<?php echo site_url('Beranda/logout') ?>"><b>Keluar</b><i class='fa fa-arrow-circle-o-right unjcolor-txt' data-toggle='tooltip' data-placement='bottom' title=''></i></a>
                    </li>
                <?php } ?>
                   
                </ul>
            </div>
    </nav>
    </div>
</header>
<body>
   <script > 
                // Tooltips Initialization
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
