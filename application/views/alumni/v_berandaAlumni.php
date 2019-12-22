  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Beranda</h2>
            </div>
          </header>

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
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-building mr-2"></i>Data Pekerjaan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="ni ni-map-big mr-2"></i>Kuesioner</a>
                            </li>
                        </ul>
                    </div>
                    <!-- tab content -->
                  <div class="card" >
                    <div class="card-body">
                      <!-- tab data diri -->
                      <div class="tab-content" id="myTabContent" style="overflow: hidden;">
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
                          </div>
                          <!-- tab pekerjaan -->
                          <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                             <!-- alert box -->
                            <!--   <div class="alert alert-info alert-dismissible" role="alert">
                                <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"></button>
                               <p style="font-family: verdana; font-size: 11pt">Mohon isikan data pengguna alumni pada pekerjaan anda saat ini. Data tersebut akan digunakan untuk kuesioner pengguna alumni.</p>
                              </div> -->

                            <h5>Pekerjaan Pertama</h5>
                            <div class="row">
                              <div class="col-md-12">
                              <form class="form-horizontal" method="post" action="<?php echo base_url();?>alumni/Profil/tambahPenggunaAlumni">

                                 <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Pilih Instansi</label>
                                  <div class="col-sm-9">
                                    <select name="id_instansi" id="id_instansi" class="form-control mb-3">
                                    <option></option>
                                    <?php foreach($instansi as $i){ ?>
                                        <option value="<?php echo $i->id ?>"><?php echo $i->nama_instansi ?></option>
                                    <?php } //end foreach  ?>
                                    </select>
                                    <small class="form-text">Lainnya :</small>
                                    <input type="text" class="form-control" name="new_instansi">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Skala Instansi</label>
                                  <div class="col-sm-9">
                                    <select name="skala_instansi" id="skala_instansi" class="form-control mb-3" required>
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
                                      <input type="text" class="form-control" name="posisi" required>
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
                                      <option></option>
                                      <option value="< 1jt"> < Rp 1jt </option>
                                      <option value="1jt - 2jt"> Rp 1jt - 2 jt </option>
                                       <option value="2jt - 3jt"> Rp 2jt - 3 jt </option>
                                      <option value="3jt - 4jt"> Rp 3jt - 4 jt </option>
                                      <option value="> 4jt"> > Rp 4jt </option>
                                    </select>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label class="col-sm-3 form-control-label">Pilih Pengguna Alumni</label>
                                  <div class="col-sm-9">
                                    <select name="penggunaID" id="penggunaID" class="form-control mb-3">
                                      <option></option>
                                    </select>
                                    <small class="form-text">Pilih pengguna alumni jika data di atas merupakan pekerjaan saat ini</small>
                                    <small class="form-text">Jika pilihan pengguna alumni tidak ada <a href="" data-toggle="modal" data-target="#ModalTambahPengguna">klik disini</a></small>
                                  </div>
                                </div>

                                <div class="form-group row">
                                   <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
                                   </div>
                                </div>
                              </form>
                            </div> <!-- col md 6 -->
                            </div> <!-- row -->
                            
                          </div>
                          <!-- tab kuesioner -->
                          <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
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
                                           <?php } ?>
                                          </div>
                                          <!-- jika pertanyaan pilihan -->
                                        <?php } elseif ($p->jenis == 'pilihan' && $p->id !='59') { 
                                            $pilihanJawaban = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($p->id);
                                            foreach ($pilihanJawaban as $pj) { ?> 
                                            <div class="i-checks">
                                              <input id="option1" type="radio" value="<?php echo $pj->pilihan ?>" name="<?php echo $p->id ?>" class="radio-template">
                                              <label for="option1"><?php echo $pj->pilihan ?></label>
                                            </div> 
                                          <?php } //loop pilihanJawaban
                                          if ($p->inputBox == 'ya') { ?>
                                              <div class="form-group row">
                                                <textarea placeholder="" name="inputBox<?php echo $p->id ?>" class="form-control" rows="3"></textarea>
                                              </div>
                                            <?php } //input box ?>
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
                                            <?php } //input box ?>
                                            <!-- jika pertanyaan skala -->
                                        <?php } //if jenis ganda 
                                          if ($p->jenis == 'skala') { ?>
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
                                      <?php } //jenis skala 
                                        if ($p->id == '59') {
                                      ?>
                                      <div class="col-sm-9">
                                      <select name="<?php echo $p->id ?>" class="form-control mb-3">
                                        <option></option>
                                        <?php 
                                        $pilihanJawaban = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($p->id);
                                        foreach ($pilihanJawaban as $pj) {  ?>
                                        <option value="<?php echo $pj->pilihan ?>"><?php echo $pj->pilihan ?></option>
                                      <?php } ?>
                                      </select>
                                    </div>
                                      <?php } ?>
                                      </td>
                                    </tr>
                                <?php } //loop pertanyaan ?>
                                </table>
                              <?php }//loop kuesioner ?>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

  </body>

     <!-- Modal Tambah Instansi-->
    <div id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
         <h4 id="exampleModalLabel" class="modal-title">Tambah Instansi</h4>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <p></p>
          <form class="form-horizontal" action="<?php echo base_url();?>alumni/Data/exeAddInstansi" method="post">
          <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nama Instansi</label>
          <div class="col-sm-9">
            <input type="text" placeholder="" class="form-control" name="nama_instansi">
          </div>
          </div>
          <div class="form-group row">
              <label class="col-sm-3 form-control-label">Alamat</label>
              <div class="col-sm-9">
                 <textarea class="form-control" rows="5" id="" name="alamat"></textarea>
              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 form-control-label">Skala Instansi</label>
            <div class="col-sm-9">
              <select name="jenis_instansi" class="form-control mb-3">
                <option></option>
                <option value="Lokal">Lokal</option>
                <option value="Nasional">Nasional</option>
                <option value="Internasional">Internasional</option>
                </select>
            </div>
            <small class="form-text">
                  <ul>
                    <li>Instansi Lokal          : </li>
                    <li>Instansi Nasional       : </li>
                    <li>Instansi Internasional  : instansi yang memiliki cabang di luar negeri</li>
                  </ul>
            </small>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
    </div>
  </div>

  <!-- Modal Tambah Pengguna-->
    <div id="ModalTambahPengguna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
         <h4 id="exampleModalLabel" class="modal-title">Tambah Pengguna Alumni</h4>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <p></p>
          <form action="<?php echo base_url();?>alumni/Data/exeAddPengguna" class="form-horizontal" method="post">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Nama</label>
                 <div class="col-sm-9">
                    <input type="text" placeholder="" class="form-control" name="nama">
                 </div>
              </div>
              <div class="form-group row">       
                <label class="col-sm-3 form-control-label">Divisi</label>
                <div class="col-sm-9">
                   <input type="text" placeholder="" class="form-control" name="divisi">
                </div>
              </div>
              <div class="form-group row">       
                <label class="col-sm-3 form-control-label">Email</label>
                <div class="col-sm-9">
                   <input type="text" placeholder="" class="form-control" name="email">
                </div>
              </div>
              <div class="form-group row">
              <label class="col-sm-3 form-control-label">No HP/Telepon</label> 
              <div class="col-sm-9">
                <input type="text" placeholder="" class="form-control" name="telepon">
              </div>      
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
      </div>
    </div>
    </div>
</html>

<script>
  $(document).ready(function(){ 
    
    $("#id_instansi").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#penggunaID").hide(); // Sembunyikan dulu combobox kota nya
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("alumni/Data/getPengguna"); ?>", // Isi dengan url/path file php yang dituju
        data: {id_instansi : $("#id_instansi").val()}, // data yang akan dikirim ke file yang dituju
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

  <script>
  $(document).ready(function(){ 
    
    $("#id_instansi").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#skala_instansi").hide(); // Sembunyikan dulu combobox kota nya
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("alumni/Data/getInstansi"); ?>", // Isi dengan url/path file php yang dituju
        data: {id_instansi : $("#id_instansi").val()}, // data yang akan dikirim ke file yang dituju
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
          $("#skala_instansi").html(response.list_penggunaID).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
      });
    });
  });
  </script>