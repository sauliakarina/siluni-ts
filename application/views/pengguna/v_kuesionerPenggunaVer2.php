  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Form Kuesioner Pengguna</h2>
            </div>
          </header>
           <?php echo $this->session->flashdata('pesan'); ?>

        <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <p align="justify" style="margin: 5px;font-size: 17px">
                  <font face="cambria">
                  Bapak/Ibu yang terhormat, saat ini kami sedang melakukan <i><b>Tracer Study</b></i> (penelusuran alumni) <b>Program Studi <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?></b> FMIPA-UNJ. Adapun tujuan dari kegiatan ini adalah untuk mendapatkan basis data yang diperlukan dalam penyusunan Evaluasi Diri dalam rangka Akreditasi Program Studi. Berkaitan dengan hal tersebut,  kami mohon Bapak/Ibu dapat mengisi kuesioner ini, data yang Bapak/Ibu isi dijamin kerahasiaannya. Untuk kerjasama dan bantuannya, kami mengucapkan banyak terima kasih.  </font>
                   <?php //echo $this->m_master->getBerandaPenggunaByProdi($prodiID)->isi ?>
                </p>
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
                    <form action="<?php echo site_url('pengguna/Kuesioner/addJawabanVer2'); ?>" method="post">
                      <input type="hidden" name="prodiID" value="<?php echo $prodiID ?>" class="form-control">
                    <div class="card-body">
                      <h4>Data Pribadi</h4>
                      <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pilih Instansi</label>
                          <div class="col-sm-9">
                            <select name="id_instansi" class="form-control mb-3" required>
                            <?php if ($nama_instansi != "") { ?>
                              <option value="<?php echo $this->m_master->getInstansiByName($nama_instansi)->id ?>"><?php echo $nama_instansi ?></option>
                              <?php foreach($instansi as $i){ ?> 
                                <option value="<?php echo $i->id ?>"><?php echo $i->nama_instansi ?></option>
                            <?php } //end foreach
                              } else { ?>
                                <option></option>
                                 <option value="Null">Non Instansi</option>
                                <?php foreach($instansi as $i){ ?>
                                  <option value="<?php echo $i->id ?>"><?php echo $i->nama_instansi ?></option>
                            <?php } //end foreach
                                 }  ?>
                            </select>
                          <small class="form-text">Jika pilihan instansi tidak ada <a href="" data-toggle="modal" data-target="#ModalTambah">klik disini</a></small>
                          </div>
                        </div>
                      <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama</label>
                          <div class="col-sm-9">
                            <input id="inputHorizontalSuccess" type="text" name="pengguna_nama" placeholder="" class="form-control form-control-success">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email</label>
                          <div class="col-sm-9">
                            <input id="inputHorizontalSuccess" type="text" name="pengguna_email" placeholder="" class="form-control form-control-success">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">No Hp/Telepon</label>
                          <div class="col-sm-9">
                            <input id="inputHorizontalSuccess" type="text" name="pengguna_telepon" placeholder="" class="form-control form-control-success">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Divisi</label>
                          <div class="col-sm-9">
                            <input id="inputHorizontalSuccess" type="text" name="divisi" placeholder="" class="form-control form-control-success">
                             <!-- <small class="form-text">Jika anda tidak berasal dari suatu instansi tidak perlu mengisi form divisi</small> -->
                          </div>
                        </div>
                        <h4>Daftar Pertanyaan</h4>
                      <?php 
                      foreach ($kuesioner as $k) { 
                        $pertanyaan = $this->m_kuesioner->getPertanyaanByKuesionerID($k->id);
                        foreach ($pertanyaan as $p) { 
                          if ($p->jenis == 'skala') { ?>
                            <table class="table table-striped table-hover table-responsive">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th><?php echo $p->pertanyaan ?></th>
                                  <?php 
                                  $skalaNilai = $this->m_kuesioner->getSkalaByPertanyaanID($p->id);
                                  foreach ($skalaNilai as $sn) { ?>
                                    <th><?php echo $sn->nilai ?></th>
                                  <?php } //foreach skala nilai ?>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $no = 1;
                                  $pertanyaanSkala = $this->m_kuesioner->getPertanyaanSkalaByPertanyaanID($p->id);
                                  foreach ($pertanyaanSkala as $ps) {
                                 ?>
                                <tr>
                                  <th scope="row"><?php echo $no++; ?></th>
                                  <th><?php echo $ps->pertanyaan ?></th>
                                  <?php 
                                  $skalaNilai = $this->m_kuesioner->getSkalaByPertanyaanID($p->id);
                                  foreach ($skalaNilai as $sn) { ?>
                                    <th><input type="radio" value="<?php echo $sn->nilai ?>" <?php if ($ps->required == 'yes') { echo "required"; } ?> name="skala_<?php echo $ps->id ?>" class="radio-template"></th>
                                  <?php } //foreach skala nilai ?>
                                </tr>
                              <?php } //foreach pertanyaan skala ?>
                              </tbody>
                            </table>
                          <?php } // if skala 
                            if ($p->jenis == 'isian' && $p->textarea == 'tidak') {
                          ?>
                          <div class="form-group">
                          <label class="form-control-label"><b><?php echo $p->pertanyaan ?>:</b></label>
                           <input type="text" name="isian_<?php echo $p->id ?>" placeholder="" <?php if ($p->required == 'yes') { echo "required"; } ?> class="form-control">
                        </div>
                      <?php } elseif ($p->jenis == 'isian' && $p->textarea == 'ya') { ?>
                          <div class="form-group">
                          <label class="form-control-label"><b><?php echo $p->pertanyaan ?>:</b></label>
                           <textarea class="form-control" name="isian_<?php echo $p->id ?>" <?php if ($p->required == 'yes') { echo "required"; } ?> rows="5"></textarea>
                        </div>
                        <?php } elseif ($p->jenis == 'pilihan') { ?>
                          <label class="form-control-label"><b><?php echo $p->pertanyaan ?>:</b></label>
                           <?php  
                           $pilihan = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($p->id);
                           foreach ($pilihan as $k) { ?>
                             <div class="i-checks">
                              <input id="radioCustom1" type="radio" name="pilihan_<?php echo $p->id ?>" <?php if ($p->required == 'yes') { echo "required"; } ?> class="radio-template">
                              <label for="radioCustom1"><?php echo $k->pilihan ?></label>
                            </div>
                        <?php } // foreach pilihan ?>
                          <?php } elseif ($p->jenis == 'ganda') { ?>
                            <label class="form-control-label"><b><?php echo $p->pertanyaan ?>:</b></label>
                          <?php  
                           $pilihan = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($p->id);
                           foreach ($pilihan as $k) { ?>
                          <div class="i-checks">
                              <input id="checkboxCustom1" name="ganda_<?php echo $p->id; ?>[]" type="checkbox" value="<?php echo $k->pilihan ?>" class="checkbox-template">
                              <label for="checkboxCustom1"><?php echo $k->pilihan ?></label>
                          </div>
                      <?php }// foreach pilihan
                        } //else ganda
                       } // foreach pertanyaan 
                     } // foreach kuesioner ?>
                    </div>
                      <div class="form-group row">
                          <div class="col-sm-4 offset-sm-5 mb-3">
                            <button type="submit" class="btn btn-primary">Simpan Jawaban</button>
                          </div>
                        </div>
                      </form>
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
                               <form action="<?php echo base_url();?>pengguna/Kuesioner/exeAddInstansi" method="post">
                                <div class="form-group">
                                  <label>Nama Instansi</label>
                                  <input type="text" placeholder="" class="form-control" name="nama_instansi">
                                </div>
                               
                                <div class="form-group">
                                  <label>Skala Instansi</label>
                                    <select name="jenis_instansi" class="form-control mb-3">
                                      <option></option>
                                      <option value="Lokal">Lokal</option>
                                      <option value="Nasional">Nasional</option>
                                      <option value="Internasional">Internasional</option>
                                    </select>
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
</html>