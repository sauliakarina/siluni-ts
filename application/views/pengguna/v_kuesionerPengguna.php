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
                    <form action="<?php echo site_url('pengguna/Kuesioner/addJawaban'); ?>" method="post">
                      <input type="hidden" name="penggunaID" value="<?php echo $penggunaID ?>" class="form-control">
                    <div class="card-body">
                      <?php 
                      foreach ($kuesioner as $k) { 
                        $pertanyaan = $this->m_kuesioner->getPertanyaanByKuesionerID($k->id);
                        foreach ($pertanyaan as $p) { 
                          if ($p->jenis == 'skala') { ?>
                            <table class="table table-striped table-hover">
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
                                    <th><input type="radio" value="<?php echo $sn->nilai ?>" name="<?php echo $ps->id ?>" class="radio-template"></th>
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
                           <input type="text" name="<?php echo $p->id ?>" placeholder="" class="form-control">
                        </div>
                      <?php } elseif ($p->jenis == 'isian' && $p->textarea == 'ya') { ?>
                          <div class="form-group">
                          <label class="form-control-label"><b><?php echo $p->pertanyaan ?>:</b></label>
                           <textarea class="form-control" name="<?php echo $p->id ?>" rows="5"></textarea>
                        </div>
                        <?php } elseif ($p->jenis == 'pilihan') { ?>
                          <label class="form-control-label"><b><?php echo $p->pertanyaan ?>:</b></label>
                           <?php  
                           $pilihan = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($p->id);
                           foreach ($pilihan as $k) { ?>
                             <div class="i-checks">
                              <input id="radioCustom1" type="radio" name="<?php echo $p->id ?>"  class="radio-template">
                              <label for="radioCustom1"><?php echo $k->pilihan ?></label>
                            </div>
                        <?php } // foreach pilihan ?>
                          <?php } elseif ($p->jenis == 'ganda') { ?>
                            <label class="form-control-label"><b><?php echo $p->pertanyaan ?>:</b></label>
                          <?php  
                           $pilihan = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($p->id);
                           foreach ($pilihan as $k) { ?>
                          <div class="i-checks">
                              <input id="checkboxCustom1" name="<?php echo $p->id; ?>[]" type="checkbox" value="<?php echo $k->pilihan ?>" class="checkbox-template">
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
</html>