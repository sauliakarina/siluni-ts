<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header"  style="background-color: #EFE037">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">Jawaban Kuesioner Alumni</h2>
    </div>
  </header>
  <!-- Breadcrumb-->
  <div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo site_url('admin/Kuesioner/jawabanKuesionerAlumni/') ?>">< Kembali</a></li>
    </ul>
  </div>
  <section class="tables">   
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4"><?php echo $this->m_alumni->getAlumniByID($alumniID)->nama ?></h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">                       
                <table class="table table-responsive table-striped table-hover">
                  <thead>
                    <tr>
                      <th>Pertanyaan</th>
                      <th>Jawaban</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($kuesioner as $k) { ?>
                    <tr>
                      <td colspan="2" scope="row"><b><?php echo $k->nama_kuesioner ?></b></td>
                    </tr>
                      <?php $pertanyaan = $this->m_kuesioner->getPertanyaanByKuesionerID($k->id);
                      foreach ($pertanyaan as $p) { ?>
                        <tr>
                          <td width="600px"><?php echo $p->pertanyaan ?></td>
                          <?php if ($p->jenis == 'skala') {
                              $pertanyaanSkala = $this->m_kuesioner->getPertanyaanSkalaByPertanyaanID($p->id);
                           ?>
                            <td>
                              <table class="table table-hover">
                                <tbody>
                                  <?php foreach ($pertanyaanSkala as $ps ) { ?>
                                  <tr>
                                    <th><?php echo $ps->pertanyaan ?></th>
                                    <td><?php 
                                    if (isset($this->m_kuesioner->getJawabanSkalaAlumni($ps->id, $alumniID)->jawaban)) {
                                      $jawabanSkala = $this->m_kuesioner->getJawabanSkalaAlumni($ps->id, $alumniID)->jawaban;
                                      if ($jawabanSkala == '1' || $jawabanSkala == '2') {
                                        echo "rendah";
                                      } elseif($jawabanSkala == '3'){
                                        echo "sedang/rata-rata";
                                      } elseif ($jawabanSkala == '4' || $jawabanSkala == '5') {
                                        echo "tinggi";
                                      } else {
                                        echo $jawabanSkala;
                                      }
                                    }
                                     ?></td>
                                  </tr>
                                  <?php } ?>
                                </tbody>
                              </table>
                            </td>
                          <?php }
                            elseif ($p->jenis == 'ganda') { 
                              $jawabanGanda = $this->m_kuesioner->getJawabanGandaAlumni($p->id, $alumniID);
                              ?>
                              <td>
                                <?php 
                                  foreach ($jawabanGanda as $jg) {
                                   echo $jg->jawaban.",<br>"; }
                                ?>
                              </td>
                           <?php  
                              } else { ?>
                          <td>
                              <?php if ($p->inputBox == 'ya') {
                                $jawabanGanda = $this->m_kuesioner->getJawabanGandaAlumni($p->id, $alumniID);
                                foreach ($jawabanGanda as $jg) {
                                   echo $jg->jawaban."<br>"; }
                              } else {
                                if (isset($this->m_kuesioner->getJawabanAlumni($p->id, $alumniID)->jawaban)) {
                                echo $this->m_kuesioner->getJawabanAlumni($p->id, $alumniID)->jawaban; }
                              }
                             ?>
                          </td>
                          <?php } ?>
                        </tr>
                      <?php } ?>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    