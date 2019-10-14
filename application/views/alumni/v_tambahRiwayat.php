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
                      <form class="form-horizontal" method="post" action="<?php echo base_url();?>alumni/Profil/tambahPenggunaAlumni">
                         <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pilih Instansi</label>
                          <div class="col-sm-9">
                            <select name="id_instansi" class="form-control mb-3">
                            <?php if ($nama_instansi != "") { ?>
                              <option value="<?php echo $this->m_master->getInstansiByName($nama_instansi)->id ?>"><?php echo $nama_instansi ?></option>
                              <?php foreach($instansi as $i){ ?> 
                                <option value="<?php echo $i->id ?>"><?php echo $i->nama_instansi ?></option>
                            <?php } //end foreach
                              } else { ?>
                                <option></option>
                                <?php foreach($instansi as $i){ ?>
                                  <option value="<?php echo $i->id ?>"><?php echo $i->nama_instansi ?></option>
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
                            <input type="text" class="form-control" name="posisi">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Divisi</label>
                          <div class="col-sm-9">
                            <select name="divisi_select" class="form-control mb-3">
                              <option value="">Pilih Divisi</option>
                              <?php foreach($divisi as $d){ ?>
                                  <option value="<?php echo $d->nama_divisi ?>"><?php echo $d->nama_divisi ?></option>
                              <?php } ?>
                              <input type="text" name="divisi_input" placeholder="Tulis disini jika tidak ada pada pilihan di atas" class="form-control">
                            </select>
                          </div>
                        </div>
                         <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pendapatan Tiap Bulan</label>
                          <div class="col-sm-9">
                            <select name="gaji" class="form-control mb-3">
                              <option></option>
                              <option value="< 1jt"> < Rp 1jt </option>
                              <option value="1jt - 2jt"> Rp 1jt - 2 jt </option>
                              <option value="3jt - 4jt"> Rp 3jt - 4 jt </option>
                              <option value="> 4jt"> > Rp 4jt </option>
                            </select>
                          </div>
                        </div>
                         <div class="line"></div>
                         <div class="form-group row">       
                            <label class="col-sm-3 form-control-label">Periode</label>
                             <div class="col-sm-9">
                              <div class="row">
                                    <div class="col-md-5">
                                      <input type="text" class="form-control" name="p1">
                                    </div>
                                    <div class="col-md-2"><p style="text-align: center;font-size: 15px">Sampai</p></div>
                                    <div class="col-md-5">
                                      <input type="text" name="p2" class="form-control">
                                    </div>
                                </div>
                              </div>
                            </div>
                         <div class="line"></div>
                        <div class="form-group" style="float:right;">
                            <button type="submit" class="btn btn-primary ml-auto">Selanjutnya</button>
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
                               <form action="<?php echo base_url();?>alumni/Profil/exeAddInstansi" method="post">
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