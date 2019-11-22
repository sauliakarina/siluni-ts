  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Sunting Pertanyaan</h2>
            </div>
          </header>
           <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Profil/biodata') ?>">Data Diri</a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Profil/riwayatPekerjaan') ?>">Riwayat Pekerjaan</a></li>
            </ul>
          </div>

                   <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4"></h3>
                    </div>
                    <div class="card-body">
                      <p></p>
                      <form class="form-horizontal" action="<?php echo base_url();?>admin/Kuesioner/exeEditPertanyaan" method="post">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pertanyaan</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="pertanyaan" value="<?php echo $pr->pertanyaan ?>">
                            <input type="hidden" class="form-control" name="pertanyaanID" value="<?php echo $pr->id ?>">
                            <input type="hidden" class="form-control" name="kuesionerID" value="<?php echo $pr->kuesionerID ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pilihan Jawaban</label>
                          <div class="col-sm-9">
                            <ul class="list-group list-group-flush">
                                <?php
                                $i = 0;
                                 foreach ($pilihan_jawaban as $k) { ?>
                                  <li class="list-group-item">
                                    <input type="text" class="form-control" name="pilihan[<?php echo $i++; ?>]" value="<?php echo $k->pilihan ?>">
                                      </li>
                                      <input type="hidden" class="form-control" name="pilihanID[<?php echo $i++; ?>]" value="<?php echo $k->id ?>">
                                    <?php } ?>
                                  </ul>
                          </div>
                        </div>
                         <div class="line"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
         

  </body>
</html>