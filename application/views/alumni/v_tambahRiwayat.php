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
                      <h3 class="h4">Tambah Riwayat</h3>
                    </div>
                    <div class="card-body">
                      <p></p>
                      <form class="form-horizontal">
                         <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pilih Instansi</label>
                          <div class="col-sm-9">
                            <select name="account" class="form-control mb-3">
                            <?php if ($nama_instansi != "") { ?>
                              <option><?php echo $nama_instansi ?></option>
                              <?php foreach($instansi as $i){ ?> 
                                <option><?php echo $i->nama_instansi ?></option>
                            <?php } //end foreach
                              } else { ?>
                                <option></option>
                                <?php foreach($instansi as $i){ ?>
                                  <option><?php echo $i->nama_instansi ?></option>
                            <?php } //end foreach
                                 }  ?>
                            </select>
                          <small class="form-text">Jika pilihan instansi tidak ada <a href="" data-toggle="modal" data-target="#ModalTambah">klik disini</a></small>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Posisi</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Divisi</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" value="">
                          </div>
                        </div>
                         <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pendapatan Tiap Bulan</label>
                          <div class="col-sm-9">
                            <select name="account" class="form-control mb-3">
                              <option></option>
                              <option> < Rp 1jt </option>
                              <option> Rp 1jt - 2 jt </option>
                              <option> Rp 3jt - 4 jt </option>
                              <option> > Rp 4jt </option>
                            </select>
                          </div>
                        </div>
                         <div class="line"></div>
                         <div class="form-group row">       
                            <label class="col-sm-3 form-control-label">Periode</label>
                             <div class="col-sm-9">
                              <div class="row">
                                    <div class="col-md-5">
                                      <input type="text" class="form-control" value="">
                                    </div>
                                    <div class="col-md-2"><p style="text-align: center;font-size: 15px">Sampai</p></div>
                                    <div class="col-md-5">
                                      <input type="text" value="" class="form-control">
                                    </div>
                                </div>
                              </div>
                            </div>
                         <div class="line"></div>
                        <div class="form-group" style="float:right;">
                            <a href="<?php echo site_url('alumni/Profil/tambahPenggunaAlumni') ?>" type="submit" class="btn btn-primary ml-auto">Selanjutnya</a>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
         

  </body>

   <!-- Modal Tambah Instansi-->
                      <div id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Instansi</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <?php echo form_open_multipart('alumni/Profil/exeAddInstansi'); ?>
                                <div class="form-group">
                                  <label>Nama Instansi</label>
                                  <input type="text" placeholder="" class="form-control" name="nama_instansi">
                                </div>
                                <div class="form-group">
                                  <label>Alamat</label>
                                    <textarea class="form-control" rows="5" id="" name="alamat"></textarea>
                              </div>
                                <div class="form-group">
                                  <label>Jenis Instansi</label>
                                    <select name="jenis_instansi" class="form-control mb-3">
                                      <option></option>
                                      <option value="Lokal">Lokal</option>
                                      <option value="Nasional">Nasional</option>
                                      <option value="Internasional">Internasional</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                              <button type="submit" class="btn btn-primary">Tambah</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
</html>