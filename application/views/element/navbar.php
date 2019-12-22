
    <!-- main header -->
           <div class="page-content d-flex align-items-stretch"> 
 
<!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <!-- <div class="avatar"><img src="<?php //echo base_url(); ?>assets/template/img/user_black.png" alt="..." class="img-fluid rounded-circle"></div> -->
            <div class="title">
              <?php if ($role == 'admin') { 
                 ?>
                <h1 class="h4">Halo, Admin</h1>
                <p><?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi?></p>
              <?php  } elseif ($role == 'alumni') { ?>
                <h1 class="h4"><?php echo $this->m_alumni->getAlumniByUserID($userID)->nama?></h1>
                <p>Alumni</p>
              <?php  } elseif ($role == 'koorprodi') { ?>
                <h1 class="h4">Koorprodi</h1>
               <p><?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi?></p>
              <?php } elseif ($role == 'pengguna') { ?>
                <h1 class="h4">Nama Pengguna</h1>
                <p>Pengguna Alumni</p>
              <?php } elseif ($role == 'superadmin') {?>
                <h1 class="h4">Halo, Superadmin</h1>
              <?php } elseif ($role == 'dosen') { ?>
                 <h1 class="h4"><?php echo $this->m_dosen->getDosenByUserID($userID)->nama?></h1>
                <p>Dosen</p>
              <?php } ?>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Menu</span>
          <ul class="list-unstyled">
            <!-- menu admin -->
            <?php if ($role == 'admin') { ?>
              <li class="<?php if($this->uri->segment(2)=="Beranda" && ($this->uri->segment(3)!="kelolaBerandaAlumni" && $this->uri->segment(3)!="kelolaBerandaPengguna")){echo "active";} ?>"><a href="<?php echo site_url('admin/Beranda') ?>"> <i class="icon-home"></i>Beranda </a></li>              
              <li class="<?php if($this->uri->segment(2)=="Dosen"){echo "active";} ?>"><a href="#dropdownKelolaData" aria-expanded="false" data-toggle="collapse"><i class="icon-grid"></i>Kelola Data</a>
              <ul id="dropdownKelolaData" class="collapse list-unstyled ">
                <!-- <li><a href="<?php //echo site_url('admin/Alumni') ?>">Alumni</a></li> -->
                <li><a href="<?php echo site_url('admin/Dosen') ?>">Dosen</a></li>
                <li><a href="<?php echo site_url('admin/Dosen/kelolaKoorprodi') ?>">Koorprodi</a></li>
              </ul>
            </li>
             <li class="<?php if($this->uri->segment(2)=="GantiPassword"){echo "active";} ?>"><a href="<?php echo site_url('GantiPassword') ?>"> <i class="fas fa-unlock-alt"></i>Ganti Password </a></li>
          </ul><span class="heading">Tracer Study</span>
           <ul class="list-unstyled"> 
             <li class="<?php if($this->uri->segment(2)=="Alumni" ){echo "active";} ?>"><a href="<?php echo site_url('admin/Alumni') ?>"><i class="fas fa-user-graduate"></i>Alumni</a></li>
            <li class="<?php if($this->uri->segment(2)=="Pengguna" ){echo "active";} ?>"><a href="<?php echo site_url('admin/Pengguna') ?>"><i class="icon-user"></i>Pengguna Alumni</a></li>
            <li class="<?php if($this->uri->segment(2)=="Kuesioner"){echo "active";} ?>"><a href="#dropdownKuesioner" aria-expanded="false" data-toggle="collapse"> <i class="icon-padnote"></i>Kuesioner </a>
              <ul id="dropdownKuesioner" class="collapse list-unstyled ">
                <li><a href="<?php echo site_url('admin/Kuesioner/kuesionerAlumni') ?>">Kuesioner Alumni</a></li>
                <li><a href="<?php echo site_url('admin/Kuesioner/kuesionerPengguna') ?>">Kuesioner Pengguna</a></li>
              </ul>
            </li>
            <li class="<?php if($this->uri->segment(2)=="Beranda" && ($this->uri->segment(3)=="kelolaBerandaAlumni" || $this->uri->segment(3)=="kelolaBerandaPengguna")){echo "active";} ?>"><a href="#dropdownKelolaBeranda" aria-expanded="false" data-toggle="collapse"> <i class="icon-bars"></i>Kelola Beranda</a>
              <ul id="dropdownKelolaBeranda" class="collapse list-unstyled ">
                <li><a href="<?php echo site_url('admin/Beranda/kelolaBerandaAlumni') ?>">Beranda Alumni</a></li>
                <li><a href="<?php echo site_url('admin/Beranda/kelolaBerandaPengguna') ?>">Beranda Pengguna</a></li>
              </ul>
            </li>
             <li class="<?php if($this->uri->segment(1)=="Laporan" && ($this->uri->segment(2)=="kuesionerAlumni" || $this->uri->segment(2)=="laporanAlumni") ){echo "active";} ?>"><a href="#dropdownLaporanAlumni" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-bar-chart"></i>Laporan Alumni</a>
              <ul id="dropdownLaporanAlumni" class="collapse list-unstyled ">
                <?php $kuesioner = $this->m_master->getKuesionerByResponden('alumni', $prodiID);
                  foreach ($kuesioner as $k) {
                 ?>
                <li><a href="<?php echo site_url('Laporan/kuesionerAlumni/'.$k->id) ?>"><?php echo $k->nama_kuesioner ?></a></li>
               <?php } ?>
               <li><a href="<?php echo site_url('Laporan/laporanSkala/') ?>">Pertanyaan Skala</a></li>
              </ul>
            </li>
            <li class="<?php if($this->uri->segment(1)=="Laporan" && ($this->uri->segment(2)=="kuesionerPengguna" || $this->uri->segment(2)=="laporanPengguna" || $this->uri->segment(2)=="laporanPenggunaSkala")){echo "active";} ?>"><a href="#dropdownLaporanPengguna" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-bar-chart"></i>Pengguna Alumni</a>
              <ul id="dropdownLaporanPengguna" class="collapse list-unstyled ">
                <?php $kuesioner = $this->m_master->getKuesionerByResponden('pengguna', $prodiID);
                  foreach ($kuesioner as $k) {
                 ?>
                <li><a href="<?php echo site_url('Laporan/kuesionerPengguna/'.$k->id) ?>"><?php echo $k->nama_kuesioner ?></a></li>
               <?php } ?>
              </ul>
            </li>
          </ul>
            <?php } ?>
            <!-- menu alumni -->
            <?php if ($role == 'alumni') { ?>
              <li class="<?php if($this->uri->segment(2)=="Beranda"){echo "active";} ?>"><a href="<?php echo site_url('alumni/Beranda') ?>"> <i class="icon-home"></i>Beranda </a></li>
               <li class="<?php if($this->uri->segment(2)=="Profil"){echo "active";} ?>"><a href="#dropdownKelolaData" aria-expanded="false" data-toggle="collapse"><i class="icon-user"></i>Profil</a>
              <ul id="dropdownKelolaData" class="collapse list-unstyled ">
                <li><a href="<?php echo site_url('alumni/Profil/biodata') ?>">Data Diri</a></li>
                <li><a href="<?php echo site_url('alumni/Profil/riwayatPekerjaan') ?>">Data Pekerjaan</a></li>
              </ul>
            </li>
              <li class="<?php if($this->uri->segment(2)=="Berita"){echo "active";} ?>"><a href="<?php echo site_url('alumni/Berita') ?>"> <i class="far fa-newspaper"></i>Berita Saya </a></li>
              <li class="<?php if($this->uri->segment(2)=="GantiPassword"){echo "active";} ?>"><a href="<?php echo site_url('GantiPassword') ?>"> <i class="fas fa-unlock-alt"></i>Ganti Password </a></li>
              <span class="heading">Tracer Study</span>
               <ul class="list-unstyled">
              <li class="<?php if($this->uri->segment(2)=="Kuesioner" ){echo "active";} ?>"><a href="<?php echo site_url('alumni/Kuesioner') ?>"> <i class="icon-padnote"></i>Kuesioner </a></li>
              <li class="<?php if($this->uri->segment(2)=="Pengguna"){echo "active";} ?>"><a href="<?php echo site_url('alumni/Pengguna') ?>"> <i class="fas fa-briefcase"></i>Pengguna Alumni</a></li>
              </ul>

            <?php } ?>

            <!-- menu pengguna -->
            <?php if ($role == 'pengguna') { ?>
              <li class="<?php if($this->uri->segment(2)=="Beranda"){echo "active";} ?>"><a href="<?php echo site_url('pengguna/Beranda') ?>"> <i class="icon-home"></i>Beranda </a></li>
              <li class="<?php if($this->uri->segment(2)=="Profil" && $this->uri->segment(3)!="gantiPassword"){echo "active";} ?>"><a href="<?php echo site_url('pengguna/Profil') ?>"> <i class="icon-user"></i>Biodata </a></li>
              <li class="<?php if($this->uri->segment(2)=="Kuesioner"){echo "active";} ?>"><a href="<?php echo site_url('pengguna/Kuesioner') ?>"> <i class="icon-padnote"></i>Kuesioner </a></li>
              <li class="<?php if($this->uri->segment(2)=="Profil" && $this->uri->segment(3)=="gantiPassword"){echo "active";} ?>"><a href="<?php echo site_url('alumni/Profil/gantiPassword') ?>"> <i class="fas fa-unlock-alt"></i>Ganti Password </a></li>
            <?php } ?>

             <!-- menu koorprodi -->
            <?php if ($role == 'koorprodi') { ?>
              <li class="<?php if($this->uri->segment(2)=="Beranda"){echo "active";} ?>"><a href="<?php echo site_url('admin/Beranda') ?>"> <i class="icon-home"></i>Beranda </a></li>
            <li class="<?php if($this->uri->segment(2)=="Alumni" ){echo "active";} ?>"><a href="<?php echo site_url('koorprodi/Alumni') ?>"><i class="fas fa-user-graduate"></i>Alumni</a></li>
             <li class="<?php if($this->uri->segment(2)=="Pengguna" ){echo "active";} ?>"><a href="<?php echo site_url('koorprodi/Pengguna') ?>"><i class="fas fa-briefcase"></i>Pengguna Alumni</a></li>
              <li class="<?php if($this->uri->segment(1)=="Laporan" && ($this->uri->segment(2)=="kuesionerAlumni" || $this->uri->segment(2)=="laporanAlumni") ){echo "active";} ?>"><a href="#dropdownLaporanAlumni" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-bar-chart"></i>Laporan Alumni</a>
              <ul id="dropdownLaporanAlumni" class="collapse list-unstyled ">
                <?php $kuesioner = $this->m_master->getKuesionerByResponden('alumni', $prodiID);
                  foreach ($kuesioner as $k) {
                 ?>
                <li><a href="<?php echo site_url('Laporan/kuesionerAlumni/'.$k->id) ?>"><?php echo $k->nama_kuesioner ?></a></li>
               <?php } ?>
               <li><a href="<?php echo site_url('Laporan/laporanSkala/') ?>">Pertanyaan Skala</a></li>
              </ul>
            </li>
            <li class="<?php if($this->uri->segment(1)=="Laporan" && ($this->uri->segment(2)=="kuesionerPengguna" || $this->uri->segment(2)=="laporanPengguna" || $this->uri->segment(2)=="laporanPenggunaSkala")){echo "active";} ?>"><a href="#dropdownLaporanPengguna" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-bar-chart"></i>Pengguna Alumni</a>
              <ul id="dropdownLaporanPengguna" class="collapse list-unstyled ">
                <?php $kuesioner = $this->m_master->getKuesionerByResponden('pengguna', $prodiID);
                  foreach ($kuesioner as $k) {
                 ?>
                <li><a href="<?php echo site_url('Laporan/kuesionerPengguna/'.$k->id) ?>"><?php echo $k->nama_kuesioner ?></a></li>
               <?php } ?>
              </ul>
            </li>
            <li class="<?php if($this->uri->segment(2)=="GantiPassword"){echo "active";} ?>"><a href="<?php echo site_url('GantiPassword') ?>"> <i class="fas fa-unlock-alt"></i>Ganti Password </a></li>
          </ul>
            <?php } ?>
            <!-- menu dosen -->
            <?php if ($role == 'dosen') { ?>
              <li class="<?php if($this->uri->segment(2)=="Profil"  && $this->uri->segment(3)!="gantiPassword"){echo "active";} ?>"><a href="<?php echo site_url('dosen/Profil') ?>"> <i class="icon-user"></i>Biodata </a></li> 
             <li class="<?php if($this->uri->segment(2)=="Alumni" ){echo "active";} ?>"><a href="<?php echo site_url('koorprodi/Alumni') ?>"><i class="fas fa-user-graduate"></i>Alumni</a></li>
             <li class="<?php if($this->uri->segment(2)=="Pengguna" ){echo "active";} ?>"><a href="<?php echo site_url('koorprodi/Pengguna') ?>"><i class="fas fa-briefcase"></i>Pengguna Alumni</a></li>
             <li class="<?php if($this->uri->segment(2)=="Profil" && $this->uri->segment(3)=="gantiPassword"){echo "active";} ?>"><a href="<?php echo site_url('dosen/Profil/gantiPassword') ?>"> <i class="fas fa-unlock-alt"></i>Ganti Password </a></li>
          </ul>
            <?php } ?>
            <!-- menu superadmin -->
            <?php if ($role == 'superadmin') { ?>
              <li class="<?php if($this->uri->segment(2)=="Master" && $this->uri->segment(3)=="kelolaFakultas"){echo "active";} ?>"><a href="<?php echo site_url('superadmin/Master/kelolaFakultas') ?>"> <i class="fas fa-university"></i>Fakultas</a></li> 
              <li class="<?php if($this->uri->segment(2)=="Master" && $this->uri->segment(3)=="kelolaProdi"){echo "active";} ?>"><a href="<?php echo site_url('superadmin/Master/kelolaProdi') ?>"> <i class="icon-grid"></i>Program Studi</a></li> 
             <li class="<?php if($this->uri->segment(2)=="Master" && $this->uri->segment(3)=="kelolaAkunProdi" ){echo "active";} ?>"><a href="<?php echo site_url('superadmin/Master/kelolaAkunProdi') ?>"><i class="fas fa-user-alt"></i>Akun Prodi</a></li>
             <li class="<?php if($this->uri->segment(2)=="Berita" ){echo "active";} ?>"><a href="<?php echo site_url('admin/Berita') ?>"><i class="fa fa-tasks"></i>Kelola Berita</a></li>
             <li class="<?php if($this->uri->segment(2)=="Profil" && $this->uri->segment(3)=="gantiPassword"){echo "active";} ?>"><a href="<?php echo site_url('dosen/Profil/gantiPassword') ?>"> <i class="fas fa-unlock-alt"></i>Ganti Password </a></li>
          </ul>
            <?php } ?>

        </nav>