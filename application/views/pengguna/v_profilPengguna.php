  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Biodata Pengguna Alumni</h2>
            </div>
          </header>
           <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Profil') ?>">Beranda</a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Profil/riwayatPekerjaan') ?>">Data</a></li>
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
                      <button type="submit" class="btn btn-primary ml-auto btn-sm">Simpan</button>
                    </div>
                    <div class="card-body">
                      <p></p>
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Nama Lengkap</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="Rahmat, S.Kom">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Posisi</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="Manajer Teknologi Informasi">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Divisi</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="Teknologi Informasi">
                          </div>
                        </div>
                      <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="rahmat@mail.com">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">No Telepon</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" value="0812345667">
                          </div>
                        </div>
                                <div class="line"></div>
                                <div class="form-group">
                                  <!-- <label class="form-control-label">Daftar Alumni</label> -->
                                     <p><b>Daftar Alumni</b></p>
                                     <div class="table-responsive">                       
                                      <table class="table table-striped table-hover">
                                        <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Posisi</th>
                                            <th>Periode Kerja</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>Saulia</td>
                                            <td>Web Developer</td>
                                            <td>2019-sekarang</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>Karina</td>
                                            <td>Sistem Analis</td>
                                            <td>2015-2019</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                     </div>
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