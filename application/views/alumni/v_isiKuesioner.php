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
           <?php echo $this->session->flashdata('pesan'); ?>

         <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                <form action="<?php echo site_url('alumni/Kuesioner/addJawaban'); ?>" method="post">
                  <!-- 
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
                              <!-- jika pertanyaan isian -->
                              <?php if ($p->jenis == 'isian') { ?>
                                <div class="form-group">
                                  <?php if ($p->textarea == 'ya') { ?>
                                    <textarea class="form-control" <?php if ($p->required == 'yes') { echo "required"; } ?> name="<?php echo $p->id ?>" rows="5" placeholder="masukkan jawaban"></textarea>
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
                                    <div class="form-group">
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
                                  <div class="form-group">
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