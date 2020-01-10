  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Pengguna Alumni</h2>
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
                      <h3 class="h4">Sunting Pengguna Alumni</h3>
                    </div>
                    <div class="card-body">
                      <p></p>
                      <form class="form-horizontal" action="<?php echo base_url();?>admin/Pengguna/exeEdit" method="post">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Pengguna Alumni</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="pengguna_nama" value="<?php echo $pr->pengguna_nama ?>">
                            <input type="hidden" class="form-control" name="penggunaID" value="<?php echo $pr->id ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Instansi</label>
                          <div class="col-sm-9">
                            <select name="id_instansi" class="form-control mb-3">
                              <option value="<?php echo $pr->id_instansi ?>"><?php echo $this->m_master->getInstansiByID($pr->id_instansi)->nama_instansi ?></option>
                              <?php $instansi = $this->m_master->getInstansiByProdiID($prodiID);
                                foreach ($instansi as $i) {
                               ?>
                               <option value="<?php echo $i->id ?>"><?php echo $i->nama_instansi ?></option>
                             <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Divisi</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="divisi" value="<?php echo $pr->divisi ?>">
                          </div>
                        </div>
                         <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="pengguna_email" value="<?php echo $pr->pengguna_email ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Telepon</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" name="pengguna_telepon" value="<?php echo $pr->pengguna_telepon ?>">
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