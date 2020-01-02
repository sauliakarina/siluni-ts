<!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Beranda</h2>
            </div>
          </header>

  <?php echo $this->session->flashdata('isi_kuesioner'); ?>
  <?php echo $this->session->flashdata('edit_profil'); ?>
  <?php echo $this->session->flashdata('edit_pekerjaan'); ?>

           <!-- Updates Section                                                -->
          <section class="updates padding-top no-padding-bottom">
            <div class="container-fluid">
              <div class="row">
                <!-- Recent Updates-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header"><h5 class="card-title">Tracer Study <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?> UNJ</h5>
                    </div>
                    <div class="card-body">
                      <div class="row" style="margin: 8px">
                         <!--  <div class="col-sm-12">
                          <center><img class="img-fluid rounded" src="<?php echo base_url();?>/assets/siluni/images/beranda/<?php echo $beranda->foto ?> ?>" alt="Card image cap" style="height: :350px;width:600px;margin-bottom: 30px"></center>
                          </div> -->
                          <p class="card-text" align="justify"><?php echo $beranda->isi ?></p>
                      </div> <!-- row -->
                    </div> <!-- card body -->
                  </div>
                </div>
                </div>
              </div>
          </section>
         
<!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <p></p>
                      <!-- tabs -->
                      <div class="nav-wrapper">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-single-copy-04 mr-2"></i>Data Diri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-building mr-2"></i>Riwayat Pekerjaan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-map-big mr-2"></i>Kuesioner</a>
                            </li>
                        </ul>
                    </div>

<!-- tab content -->
<div class="card" >
<div class="card-body">

<div class="tab-content" id="myTabContent" style="overflow: hidden;">

<!-- tab data diri -->
<div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
      <p></p>
        <form class="form-horizontal" action="<?php echo base_url();?>alumni/Data/exeEditProfil" method="post">
          <div class="form-group row row">
            <label class="col-sm-3 form-control-label">Nama Lengkap</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="nama" value="<?php echo $profil->nama ?>">
              <input type="hidden" class="form-control" name="id" value="<?php echo $profil->id ?>">
            </div>
          </div>
          <div class="line"></div>
          <div class="form-group row row">
            <label class="col-sm-3 form-control-label">Nomor Mahasiswa</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" value="<?php echo $profil->nim ?>" disabled>
            </div>
          </div>
          <div class="line"></div>
          <div class="form-group row row">
            <label class="col-sm-3 form-control-label">Tempat/Tanggal Lahir</label>
            <div class="col-sm-9">
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $profil->tempat_lahir ?>">
                </div>
                <div class="col-md-6">
                  <input type="date" name="tanggal_lahir" value="<?php echo $profil->tanggal_lahir ?>" class="form-control">
                </div>
              </div>
            </div>
          </div>
          <div class="line"></div>
          <div class="form-group row row">
            <label class="col-sm-3 form-control-label">Jenis Kelamin</label>
            <div class="col-sm-9">
              <select name="jenis_kelamin" class="form-control mb-3">
                <option><b><?php echo $profil->jenis_kelamin ?></b></option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
            </div>
          </div>

          <div class="line"></div>
          <div class="form-group row row">
            <label class="col-sm-3 form-control-label">Alamat Rumah</label>
            <div class="col-sm-9">
              <textarea class="form-control" name="alamat" rows="5"><?php echo $profil->alamat ?></textarea>
            </div>
        </div>
        <div class="line"></div>
          <div class="form-group row row">
            <label class="col-sm-3 form-control-label">Tahun Masuk</label>
            <div class="col-sm-3">
              <input type="text" name="tahun_masuk" class="form-control" value="<?php echo $profil->tahun_masuk ?>">
            </div>
          </div>
          <div class="line"></div>
          <div class="form-group row row">
            <label class="col-sm-3 form-control-label">Tahun Lulus</label>
            <div class="col-sm-3">
              <input type="text" name="tahun_lulus" class="form-control" value="<?php echo $profil->tahun_lulus ?>">
            </div>
          </div>
          <div class="line"></div>
          <div class="form-group row row">
            <label class="col-sm-3 form-control-label">IPK</label>
            <div class="col-sm-3">
              <input type="text" name="ipk" class="form-control" value="<?php echo $profil->ipk ?>">
            </div>
          </div>
           <div class="line"></div>
          <div class="form-group row row">
            <label class="col-sm-3 form-control-label">TOEFL</label>
            <div class="col-sm-3">
              <input type="text" name="toefl" class="form-control" value="<?php echo $profil->toefl ?>">
            </div>
          </div>
          <div class="line"></div>
          <div class="form-group row row">
            <label class="col-sm-3 form-control-label">Email</label>
            <div class="col-sm-4">
              <input type="text" name="email" class="form-control" value="<?php echo $profil->email ?>">
            </div>
          </div>
          <div class="line"></div>
          <div class="form-group row row">
            <label class="col-sm-3 form-control-label">No Telepon</label>
            <div class="col-sm-3">
              <input type="text" name="no_telepon" class="form-control" value="<?php echo $profil->no_telepon ?>">
            </div>
          </div>

           <div class="line"></div>
          <div class="form-group row">
              <button type="submit" style="float: right;" class="btn btn-primary">Simpan</button>
          </div>
        </form>
</div> <!-- tab data diri -->

<!-- tab pekerjaan -->
<div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
  <?php 
  $where = array('id_alumni' => $alumniID);
  $cek = $this->m_master->cekData("pekerjaan",$where)->num_rows();
  $pekerjaan = $this->m_pengguna->getPekerjaanByAlumniIDWhereNotSudah($alumniID);  
  if ($cek>0) {
    $j = 0;
    foreach ($pekerjaan as $k ) {
    $j++;
  ?>
  <h4><?php echo $this->m_master->getInstansiByID($k->id_instansi)->nama_instansi ?></h4>
  <button type="button" class="btn btn-outline-primary btn-sm" data-toggle="collapse" data-target="#form_pekerjaan<?php echo $j ?>">Lengkapi Data</button>
  <div style="padding-top: 10px" id="form_pekerjaan<?php echo $j ?>" class="collapse">
    <form class="form-horizontal" method="post" action="<?php echo base_url();?>alumni/Data/exeUpdatePekerjaan"> 
     <div class="form-group row">
      <label class="col-sm-3 form-control-label">Pilih Instansi</label>
      <div class="col-sm-9">
        <select name="instansiID" id="instansiID" class="form-control mb-3">
        <option value="<?php echo $k->id_instansi; ?>"><?php echo $this->m_master->getInstansiByID($k->id_instansi)->nama_instansi ?></option>
        <option value=""></option>
        <?php foreach($instansi as $i){ ?>
            <option value="<?php echo $i->id ?>"><?php echo $i->nama_instansi ?></option>
        <?php } //end foreach  ?>
        </select>
        <small class="form-text">Lainnya :</small>
        <input type="text" class="form-control" name="instansiBaru">
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Skala Instansi</label>
      <div class="col-sm-9">
        <select name="skalaInstansi" class="form-control mb-3" required>
          <option></option>
          <option value="Lokal"> Lokal </option>
          <option value="Nasional"> Nasional </option>
          <option value="Internasional"> Internasional </option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Profesi</label>
       <div class="col-sm-9">
          <input type="text" class="form-control" value="<?php echo $k->posisi ?>" name="posisi" required>
          <input type="hidden" class="form-control" name="pekerjaanID" value="<?php echo $k->id ?>">
       </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Profil Pekerjaan</label>
      <div class="col-sm-9">
        <select name="profil" class="form-control mb-3" required>
          <option></option>
          <option value="Programmer"> Programmer </option>
          <option value="Penanggung Jawab Jaringan"> Penanggung Jawab Jaringan </option>
          <option value="Wirausahawan"> Wirausahawan </option>
          <option value="Praktisi"> Praktisi </option>
          <option value="Konsultan"> Konsultan </option>
          <option value="Perencana SI"> Perencana SI </option>
          <option value="Peneliti"> Peneliti </option>
        </select>
      </div>
    </div>

    <div class="form-group row">
      <label  class="col-sm-3 form-control-label">Pendapatan Tiap Bulan</label>
      <div class="col-sm-9">
        <select name="gaji" class="form-control mb-3" required>
          <option value="<?php echo $k->gaji ?>"><?php echo $k->gaji ?></option>
          <option value="1-5 juta"> Rp 1-5 juta </option>
          <option value="6-10 juta"> Rp 6-10juta </option>
          <option value="11-15juta"> Rp 11-15juta </option>
          <option value="> 15juta"> > Rp 15juta </option>
        </select>
      </div>
    </div>

    <div class="form-group row">       
    <label class="col-sm-3 form-control-label">Periode Kerja</label>
     <div class="col-sm-9">
      <div class="row">
        <div class="col-md-5">
          <input type="text" class="form-control" name="p1">
        </div>
        <div class="col-md-2"><p style="text-align: center;font-size: 15px">Sampai</p></div>
        <div class="col-md-5">
          <input type="text" name="p2" class="form-control">
        </div>
        </div>
      </div>
    </div>

    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Pilih Pengguna Alumni</label>
      <div class="col-sm-9">
        <select name="penggunaID" id="penggunaID" class="form-control mb-3">

        <?php 
          $penggunaInstansi = $this->m_pengguna->getPenggunaByInstansiID($k->id_instansi);
         foreach ($penggunaInstansi as $p ) { ?>
          <option value=""></option>
          <option value="<?php echo $p->id ?>"><?php echo $p->pengguna_nama ?></option>
         <?php } ?>

        </select>
        <small class="form-text">Pilih pengguna alumni jika data di atas merupakan pekerjaan saat ini. Jika pilihan pengguna alumni tidak ada <a data-toggle="collapse" href="#collapseExample_<?php echo $j ?>" aria-expanded="false" aria-controls="collapseExample">klik disini</a></small>
      </div>
    </div>

     <div class="collapse" id="collapseExample_<?php echo $j ?>">
      <div class="card card-body">
        <div class="form-group row">
        <label class="col-sm-3 form-control-label">Nama Pengguna</label>
        <div class="col-sm-9">
          <input type="text" placeholder="" class="form-control form-control-sm" name="pengguna_nama">
        </div>
      </div>

      <div class="form-group row">       
        <label class="col-sm-3 form-control-label">Divisi</label>
        <div class="col-sm-9">
          <input type="text" placeholder="" class="form-control form-control-sm" name="divisi">
        </div>
      </div>
      <div class="form-group row">       
        <label class="col-sm-3 form-control-label">Email</label>
        <div class="col-sm-9">
          <input type="text" placeholder="" class="form-control" name="pengguna_email">
        </div>
      </div>
      <div class="form-group row">       
        <label class="col-sm-3 form-control-label">No HP/Telepon</label>
        <div class="col-sm-9">
          <input type="text" placeholder="" class="form-control" name="pengguna_telepon">
        </div>
      </div>
      </div>
    </div> <!-- collapse pengguna baru -->

   <button type="submit" class="btn btn-info">Simpan</button>

  </form>

  </div> <!-- collapse form -->
   <div class="line"></div>
<?php 
    } //foreach pekerjaan
  } //if cek ?>
<button type="button" class="btn btn-info ml-auto btn-sm" style="margin-bottom: 20px"  data-toggle="modal" data-target="#ModalTambah"><i class="fas fa-plus-circle"></i> Pekerjaan</button>

<!-- table riwayat pekerjaan -->
<?php 
  $pekerjaanSudah = $this->m_pengguna->getPekerjaanByAlumniIDWhereSudah($alumniID);
  $cek = count($pekerjaanSudah);
  if ($cek > 0) { ?>
    <center><h4 class="h4">Riwayat Pekerjaan Anda</h4></center>
    <table id="myTable" class="table table-striped table-hover" style="margin-top: 20px">
      <thead>
        <tr>
          <th>No</th>
          <th>Instansi</th>
          <th>Profesi</th>
          <th>Pendapatan per Bulan</th>
          <th>Periode</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php 
          $no = 1;
          foreach($pekerjaanSudah as $r){ 
          ?>
        <tr>
          <th scope="row"><?php echo $no++ ?></th>
          <td><?php echo $this->m_master->getInstansiByID($r->id_instansi)->nama_instansi ?></td>
          <td><?php echo $r->posisi ?></td>
          <td><?php echo $r->gaji ?></td>
          <td><?php echo $r->periode_kerja ?></td>
          <td>
            <div class="btn-group btn-group-toggle">
             <form method='' action="<?php echo base_url('alumni/Profil/editPekerjaan/'.$r->id) ?>">
                <button type="submit" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Sunting"><i class="far fa-edit"></i></button>
              </form>
              <label class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus" onclick="set_id(<?php echo $r->id ?>)">
                  <input type="radio" name="options"><i class="fas fa-trash-alt"></i>
              </label>
            </div>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
<?php } //if pekerjaan sudah ?>

</div> <!-- tab pekerjaan -->

<!-- tab kuesioner -->
  <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
    <form action="<?php echo site_url('alumni/Kuesioner/addJawaban'); ?>" method="post">
    <p></p>
    <?php foreach ($kuesioner as $k) { ?>
    <table class="table table-striped mb-4">
    <h4><?php echo $k->nama_kuesioner ?></h4>
    <?php $pertanyaan = $this->m_kuesioner->getPertanyaanByKuesionerID($k->id);
    foreach ($pertanyaan as $p) {
    ?>
    <tr>
    <td><?php echo $p->pertanyaan ?></td>
    <td>:</td>
    <td width="600px">
    <!-- jika pertanyaan isian -->
    <?php if ($p->jenis == 'isian') { ?>
    <div class="form-group row">
    <?php if ($p->textarea == 'ya') { ?>
    <textarea class="form-control" name="<?php echo $p->id ?>" rows="5" placeholder="masukkan jawaban"></textarea>
    <?php } else { ?>
    <input type="text" placeholder="masukkan jawaban" name="<?php echo $p->id ?>" class="form-control">
    <?php } 
    if ($p->keterangan != Null) {
    ?>
    <small class="form-text"><?php echo $p->keterangan; ?></small>
    <?php } ?>
    </div>
    <!-- jika pertanyaan pilihan -->
    <?php } elseif ($p->jenis == 'pilihan') { 
    $pilihanJawaban = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($p->id);
    $jumlahPilihan = count($pilihanJawaban);
    if ($jumlahPilihan > 5) { ?>
    <select name="<?php echo $p->id ?>" class="form-control mb-3">
    <option></option>
    <?php 
    foreach ($pilihanJawaban as $pj) {  ?>
    <option value="<?php echo $pj->pilihan ?>"><?php echo $pj->pilihan ?></option>
    <?php } ?>
    </select>
    <?php }  else {?>
    <?php foreach ($pilihanJawaban as $pj) {  ?> 
    <div class="i-checks">
    <input id="option1" type="radio" value="<?php echo $pj->pilihan ?>" name="<?php echo $p->id ?>" class="radio-template">
    <label for="option1"><?php echo $pj->pilihan ?></label>
    </div> 
    <?php } //loop pilihanJawaban
    } //else select
    if ($p->inputBox == 'ya') { ?>
    <div class="form-group row">
    <textarea placeholder="" name="inputBox<?php echo $p->id ?>" class="form-control" rows="3"></textarea>
    </div>
    <?php } if ($p->keterangan != Null) {
    ?>
    <small class="form-text"><?php echo $p->keterangan; ?></small>
    <?php } ?>

    <!-- jika pertanyaan ganda -->
    <?php } elseif ($p->jenis == 'ganda') { 
    $pilihanJawaban = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($p->id);
    foreach ($pilihanJawaban as $pj) {?>
    <div class="i-checks">
    <input id="checkbox1" type="checkbox" value="<?php echo $pj->pilihan ?>" name="<?php echo $p->id; ?>[]" class="checkbox-template">
    <label for="checkbox1"><?php echo $pj->pilihan ?></label>
    </div>
    <?php } //loop jawaban ganda 
    if ($p->inputBox == 'ya') {?>
    <div class="form-group row">
    <textarea placeholder="" name="inputBox<?php echo $p->id ?>" class="form-control" rows="3"></textarea>
    </div>
    <?php }  if ($p->keterangan != Null) {
    ?>
    <small class="form-text"><?php echo $p->keterangan; ?></small>
    <?php } ?>
    <!-- jika pertanyaan skala -->
    <?php } //if jenis ganda 
    if ($p->jenis == 'skala') { 
    if ($p->keterangan != Null) { ?>
    <small class="form-text"><?php echo $p->keterangan; ?></small>
    <?php } ?>

    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th></th>
            <?php 
            $skalaNilai = $this->m_kuesioner->getSkalaByPertanyaanID($p->id);
            foreach ($skalaNilai as $sn) { ?>
            <th><?php echo $sn->nilai ?></th>
            <?php } //foreach skala nilai ?>
          </tr>
          </thead>
        <tbody>
        <?php
        $pertanyaanSkala = $this->m_kuesioner->getPertanyaanSkalaByPertanyaanID($p->id);
        foreach ($pertanyaanSkala as $ps) {
        ?>
        <tr>
          <th><?php echo $ps->pertanyaan ?></th>
          <?php 
          $skalaNilai = $this->m_kuesioner->getSkalaByPertanyaanID($p->id);
          foreach ($skalaNilai as $sn) { ?>
          <th><input type="radio" value="<?php echo $sn->nilai ?>" name="<?php echo $ps->id ?>" class="radio-template"></th>
          <?php } //foreach skala nilai ?>
        </tr>
        <?php } //foreach pertanyaan skala ?>
        </tbody>
    </table>
    <?php } //jenis skala ?>
    </td>
    </tr>
    <?php } //loop pertanyaan ?>
    </table>
    <?php }//loop kuesioner ?>
    <div class="form-group row">
      <div class="col-sm-4 offset-sm-5 mb-3">
        <button type="submit" class="btn btn-primary">Simpan Jawaban</button>
      </div>
    </div>
    </form>
  </div> <!-- tab kuesioner -->

</div> <!-- tab content -->

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

  </body>

<!-- Modal Tambah-->
      <div id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="exampleModalLabel" class="modal-title">Tambah Pekerjaan</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <p></p>
              <form action="<?php echo base_url();?>alumni/Data/exeAddPekerjaan_new" method="post">

               <div class="form-group row">
                <label class="col-sm-3 form-control-label">Pilih Instansi</label>
                <div class="col-sm-9">
                  <select name="instansiID" id="instansiID_m" class="form-control mb-3">
                   <option value=""></option>
                  <?php foreach($instansi as $i){ ?>
                      <option value="<?php echo $i->id ?>"><?php echo $i->nama_instansi ?></option>
                  <?php } //end foreach  ?>
                  </select>
                  <small class="form-text">Lainnya :</small>
                  <input type="text" class="form-control" name="instansiBaru">
                </div>
              </div>

              <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Skala Instansi</label>
                  <div class="col-sm-9">
                    <select name="skalaInstansi" class="form-control mb-3" required>
                      <option></option>
                      <option value="Lokal"> Lokal </option>
                      <option value="Nasional"> Nasional </option>
                      <option value="Internasional"> Internasional </option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Profesi</label>
                   <div class="col-sm-9">
                      <input type="text" class="form-control" value="" name="posisi" required>
                   </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Profil Pekerjaan</label>
                  <div class="col-sm-9">
                    <select name="profil" class="form-control mb-3" required>
                      <option></option>
                      <option value="Programmer"> Programmer </option>
                      <option value="Penanggung Jawab Jaringan"> Penanggung Jawab Jaringan </option>
                      <option value="Wirausahawan"> Wirausahawan </option>
                      <option value="Praktisi"> Praktisi </option>
                      <option value="Konsultan"> Konsultan </option>
                      <option value="Perencana SI"> Perencana SI </option>
                      <option value="Peneliti"> Peneliti </option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label  class="col-sm-3 form-control-label">Pendapatan Tiap Bulan</label>
                  <div class="col-sm-9">
                    <select name="gaji" class="form-control mb-3" required>
                      <option value=""></option>
                      <option value="1-5 juta"> Rp 1-5 juta </option>
                      <option value="6-10 juta"> Rp 6-10juta </option>
                      <option value="11-15juta"> Rp 11-15juta </option>
                      <option value="> 15juta"> > Rp 15juta </option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">       
                <label class="col-sm-3 form-control-label">Periode Kerja</label>
                 <div class="col-sm-9">
                  <div class="row">
                    <div class="col-md-5">
                      <input type="text" class="form-control" name="p1">
                    </div>
                    <div class="col-md-2"><p style="text-align: center;font-size: 15px">Sampai</p></div>
                    <div class="col-md-5">
                      <input type="text" name="p2" class="form-control">
                    </div>
                    </div>
                  </div>
                </div>

               <div class="form-group row">
                <label class="col-sm-3 form-control-label">Pengguna Alumni</label>
                <div class="col-sm-9">
                  <select name="penggunaID" id="penggunaID_m" class="form-control mb-3">
                    <option value=""></option>
                  </select>
                  <small class="form-text">Pilih pengguna alumni jika data di atas merupakan pekerjaan saat ini. Jika pilihan pengguna alumni tidak ada <a data-toggle="collapse" href="#collapseExample_m" aria-expanded="false" aria-controls="collapseExample"> Klik Disini</a></small>
                </div>
              </div>

              <div class="collapse" id="collapseExample_m">
              <div class="card card-body">
                <div class="form-group row">
                <label class="col-sm-3 form-control-label">Nama Pengguna</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="" class="form-control form-control-sm" name="pengguna_nama">
                </div>
              </div>

              <div class="form-group row">       
                <label class="col-sm-3 form-control-label">Divisi</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="" class="form-control form-control-sm" name="divisi">
                </div>
              </div>
              <div class="form-group row">       
                <label class="col-sm-3 form-control-label">Email</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="" class="form-control" name="pengguna_email">
                </div>
              </div>
              <div class="form-group row">       
                <label class="col-sm-3 form-control-label">No HP/Telepon</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="" class="form-control" name="pengguna_telepon">
                </div>
              </div>
              </div>
            </div> <!-- collapse pengguna baru -->

            </div>
            <div class="modal-footer">
              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
            </div>
          </div>
        </div>
      </div>
<!-- modal tambah -->

 <!-- Modal Hapus-->
    <div id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="exampleModalLabel" class="modal-title">Hapus Data</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <p>Apakah anda yakin ingin menghapus data ini?</p>
            <div class="text-center">
            <i class="far fa-times-circle fa-4x mb-3 animated bounce" style="color: #D60C0C"></i>
          </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
            <button type="button" class="btn btn-danger" onclick='deletep()'>Hapus</button>
          </div>
        </div>
      </div>
    </div>

</html>

<script type="text/javascript">
   $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    //$("#loading").hide();
    
    $("#instansiID").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#penggunaID").hide(); // Sembunyikan dulu combobox kota nya
      //$("#loading").show(); // Tampilkan loadingnya
    
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("alumni/Profil/getPenggunaID"); ?>", // Isi dengan url/path file php yang dituju
        data: {instansiID : $("#instansiID").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          //$("#loading").hide(); // Sembunyikan loadingnya
          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
          $("#penggunaID").html(response.list_penggunaID).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
      });
    });
  });
</script>

<script type="text/javascript">
   $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    //$("#loading").hide();
    
    $("#instansiID_m").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#penggunaID_m").hide(); // Sembunyikan dulu combobox kota nya
      //$("#loading").show(); // Tampilkan loadingnya
    
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("alumni/Profil/getPenggunaID"); ?>", // Isi dengan url/path file php yang dituju
        data: {instansiID : $("#instansiID_m").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          //$("#loading").hide(); // Sembunyikan loadingnya
          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
          $("#penggunaID_m").html(response.list_penggunaID).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
      });
    });
  });
</script>

<script type="text/javascript">
   var p_id;
  function set_id(id) {
    p_id = id;
  }

  function deletep(){
    window.location.href =  "<?php echo base_url();?>alumni/Profil/hapusRiwayat/"+p_id;
  }

   $(document).ready( function () {
    $('#myTable').DataTable(
        {
        "ordering": false,
    }
      );
} );
</script>