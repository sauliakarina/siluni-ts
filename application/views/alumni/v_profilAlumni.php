  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Biodata Alumni</h2>
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
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Diri Anda</h3>
                    </div>
                    <div class="card-body">
                      <p></p>
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Lengkap</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="<?php echo $profil->nama ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nomor Mahasiswa</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" value="<?php echo $profil->nim ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tempat/Tanggal Lahir</label>
                          <div class="col-sm-9">
                            <div class="row">
                              <div class="col-md-6">
                                <input type="text" class="form-control" value="<?php echo $profil->tempat_lahir ?>">
                              </div>
                              <div class="col-md-6">
                                <input type="text" value="<?php echo $profil->tanggal_lahir ?>" class="form-control">
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Jenis Kelamin</label>
                          <div class="col-sm-9">
                            <select name="account" class="form-control mb-3">
                              <option><b><?php echo $profil->jenis_kelamin ?></b></option>
                              <option>Laki-laki</option>
                              <option>Perempuan</option>
                            </select>
                          </div>
                        </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Alamat Rumah</label>
                          <div class="col-sm-9">
                            <textarea class="form-control" rows="5" id="comment"><?php echo $profil->alamat ?></textarea>
                          </div>
                      </div>
                      <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tahun Masuk</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" value="<?php echo $profil->tahun_masuk ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tahun Lulus</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" value="<?php echo $profil->tahun_lulus ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" value="<?php echo $profil->email ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">No Telepon</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" value="<?php echo $profil->no_telepon ?>">
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