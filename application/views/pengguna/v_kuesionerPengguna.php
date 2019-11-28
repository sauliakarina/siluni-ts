  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Form Kuesioner Pengguna</h2>
            </div>
          </header>

         <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card"><!-- 
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4"></h3>
                    </div> -->
                    <div class="card-body">
                      <?php foreach ($pertanyaan as $p) { 
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
                                    <th><input type="radio" value="<?php echo $sn->nilai ?>" name="a" class="radio-template"></th>
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
                           <input type="text" placeholder="" class="form-control">
                        </div>
                      <?php } elseif ($p->jenis == 'isian' && $p->textarea == 'ya') { ?>
                          <div class="form-group">
                          <label class="form-control-label"><b><?php echo $p->pertanyaan ?>:</b></label>
                           <textarea class="form-control" rows="5"></textarea>
                        </div>
                        <?php } elseif ($p->jenis == 'pilihan') { ?>
                          <label class="form-control-label"><b><?php echo $p->pertanyaan ?>:</b></label>
                           <?php  
                           $pilihan = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($p->id);
                           foreach ($pilihan as $k) { ?>
                             <div class="i-checks">
                              <input id="radioCustom1" type="radio" checked="" disabled="" name="a" class="radio-template">
                              <label for="radioCustom1"><?php echo $k->pilihan ?></label>
                            </div>
                        <?php } // foreach pilihan ?>
                          <?php } elseif ($p->jenis == 'ganda') { ?>
                            <label class="form-control-label"><b><?php echo $p->pertanyaan ?>:</b></label>
                          <?php  
                           $pilihan = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($p->id);
                           foreach ($pilihan as $k) { ?>
                          <div class="i-checks">
                              <input id="checkboxCustom1" checked="" disabled="" type="checkbox" value="" class="checkbox-template">
                              <label for="checkboxCustom1"><?php echo $k->pilihan ?></label>
                          </div>
                      <?php }// foreach pilihan
                        } //else ganda
                       } // foreach pertanyaan ?>
                    </div>
                    <form>
                      <div class="form-group row">
                          <div class="col-sm-4 offset-sm-5 mb-3">
                            <button type="submit" class="btn btn-primary">Simpan Jawaban</button>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
         

  </body>
</html>