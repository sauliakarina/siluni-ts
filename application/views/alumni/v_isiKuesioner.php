  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Form Kuesioner</h2>
            </div>
          </header>
           <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Profil') ?>">Biodata</a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Profil/riwayatPekerjaan') ?>">Riwayat Pekerjaan</a></li>
            </ul>
          </div>

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
                              <?php if ($p->jenis == 'isian') { ?>
                                <div class="form-group">
                                  <input type="text" placeholder="tulis jawaban" class="form-control">
                                </div>
                              <?php } elseif ($p->jenis == 'pilihan') { 
                                  $pilihanJawaban = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($p->id);
                                  foreach ($pilihanJawaban as $pj) { ?> 
                                  <div class="i-checks">
                                    <input id="option1" type="radio" value="<?php echo $pj->pilihan ?>" name="a" class="radio-template">
                                    <label for="option1"><?php echo $pj->pilihan ?></label>
                                  </div> 
                                <?php } //loop pilihanJawaban
                                if ($p->inputBox == 'ya') { ?>
                                    <div class="form-group">
                                      <textarea placeholder="" class="form-control" rows="3"></textarea>
                                    </div>
                                  <?php } //input box ?>
                              <?php } elseif ($p->jenis == 'ganda') { 
                                $pilihanJawaban = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($p->id);
                                  foreach ($pilihanJawaban as $pj) {?>
                                <div class="i-checks">
                                  <input id="checkbox1" type="checkbox" value="<?php echo $pj->pilihan ?>" class="checkbox-template">
                                  <label for="checkbox1"><?php echo $pj->pilihan ?></label>
                                </div>
                                <?php } //loop jawaban ganda 
                                if ($p->inputBox == 'ya') {?>
                                  <div class="form-group">
                                      <textarea placeholder="" class="form-control" rows="3"></textarea>
                                  </div>
                                  <?php } //input box ?>
                              <?php } //loop jenis ganda ?>
                            </td>
                          </tr>
                      <?php } //loop pertanyaan ?>
                      </table>
                    <?php }//loop kuesioner ?>
                    </div>
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