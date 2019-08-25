  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Riwayat Pekerjaan</h2>
            </div>
          </header>
           <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Profil') ?>">Beranda</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo site_url('alumni/Profil/riwayatPekerjaan') ?>">Riwayat Pekerjaan</a></li>
            </ul>
          </div>
         
         <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Riwayat Pekerjaan Anda</h3>
                      <a type="button" class="btn btn-primary ml-auto btn-sm" href="<?php echo site_url('alumni/Profil/tambahRiwayat') ?>" >Tambah</a>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Instansi</th>
                              <th>Posisi</th>
                              <th>Divisi</th>
                              <th>Gaji tiap Bulan</th>
                              <th>Periode Kerja</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>PT PLN Disjaya</td>
                              <td>Web Developer</td>
                              <td>Teknologi Informasi</td>
                              <td>Rp4.000.000 - 6.000.000</td>
                              <td>2017-2018</td>
                              
                              <td>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-warning btn-sm">
                                    <input type="radio" name="options"><i class="far fa-edit"></i>
                                  </label>
                                  <label class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus">
                                    <input type="radio" name="options"><i class="fas fa-trash-alt"></i>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>PT Sinarmas</td>
                              <td>Database Programmer</td>
                              <td>Teknologi dan Komunikasi</td>
                              <td>Rp6.000.000 - 10.000.000</td>
                              <td>2019-sekarang</td>
                              
                              <td>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-warning btn-sm">
                                    <input type="radio" name="options"><i class="far fa-edit"></i>
                                  </label>
                                  <label class="btn btn-danger btn-sm">
                                    <input type="radio" name="options"><i class="fas fa-trash-alt"></i>
                                  </label>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
          </section>

           <!-- Modal Tambah-->
                      <div id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Riwayat Pekerjaan</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <form>
                                <div class="form-group">
                                  <label>Instansi</label>
                                  <input type="text" placeholder="" class="form-control" name="instansi">
                                </div>
                                <div class="form-group">       
                                  <label>Posisi</label>
                                  <input type="text" placeholder="" class="form-control" name="posisi">
                                </div>
                                <div class="form-group">       
                                  <label>Divisi</label>
                                  <input type="text" placeholder="" class="form-control" name="divisi">
                                </div>
                                <div class="form-group">       
                                  <label>Gaji per Bulan</label>
                                  <input type="text" placeholder="" class="form-control" name="posisi">
                                </div>
                                <div class="form-group">       
                                  <label>Periode</label>
                                  <div class="row">
                                    <div class="col-md-5">
                                      <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="col-md-2"><p style="text-align: center;font-size: 15px">sampai</p></div>
                                    <div class="col-md-5">
                                      <input type="text" value="" class="form-control">
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                              <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Modal Hapus-->
                      <div id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Hapus Data</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah anda yakin ingin menghapus data ini?</p>
                              <div class="text-center">
                              <i class="far fa-times-circle fa-4x mb-3 animated bounce" style="color: #D60C0C"></i>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                              <button type="button" class="btn btn-danger">Hapus</button>
                            </div>
                          </div>
                        </div>
                      </div>



  </body>
</html>