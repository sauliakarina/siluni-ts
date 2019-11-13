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
                      <h3 class="h4">Sunting Pekerjaan</h3>
                    </div>
                    <div class="card-body">
                      <p></p>
                      <form class="form-horizontal" action="<?php echo base_url();?>alumni/Profil/exeEditPekerjaan" method="post">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Instansi</label>
                          <div class="col-sm-9">
                            <select name="id_instansi" class="form-control mb-3" disabled>
                              <option value="<?php echo $p->id_instansi ?>"><b><?php echo $this->m_master->getInstansiByID($p->id_instansi)->nama_instansi ?></b></option>
                              <?php foreach ($instansi as $i) { ?>
                                <option value="<?php echo $i->id ?>"><b><?php echo $i->nama_instansi ?></b></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Jenis Instansi</label>
                          <div class="col-sm-9">
                            <select name="jenis_instansi" class="form-control mb-3">
                              <option value="<?php echo $this->m_master->getInstansiByID($p->id_instansi)->jenis_instansi ?>"><b><?php echo $this->m_master->getInstansiByID($p->id_instansi)->jenis_instansi ?></b></option>
                              <option value="Lokal">Lokal</option>
                              <option value="Nasional">Nasional</option>
                              <option value="Internasional">Internasional</option>
                            </select>
                          </div>
                        </div>
                      <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Posisi</label>
                          <div class="col-sm-9">
                            <input type="text" name="posisi" class="form-control" value="<?php echo $p->posisi ?>">
                             <input type="hidden" name="id_pekerjaan" class="form-control" value="<?php echo $p->id_pekerjaan ?>">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pendapatan</label>
                          <div class="col-sm-9">
                            <select name="gaji" class="form-control mb-3">
                              <option value="<?php echo $p->gaji ?>"><b><?php echo $p->gaji ?></b></option>
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
                                <?php 
                                if($p->periode_kerja == NULL ){ ?>
                                  <div class="col-md-5">
                                      <input type="text" class="form-control" name="p1">
                                    </div>
                                    <div class="col-md-2"><p style="text-align: center;font-size: 15px">Sampai</p></div>
                                    <div class="col-md-5">
                                      <input type="text" name="p2" class="form-control">
                                    </div>
                                <?php  } else { 
                                  $periode = explode("-",$p->periode_kerja);?>
                                  <div class="col-md-5">
                                      <input type="text" class="form-control" name="p1" value="<?php echo $periode[0] ?>">
                                    </div>
                                    <div class="col-md-2"><p style="text-align: center;font-size: 15px">Sampai</p></div>
                                    <div class="col-md-5">
                                      <input type="text" name="p2" class="form-control" value="<?php echo $periode[1] ?>">
                                    </div>
                                <?php } ?>
                                </div>
                              </div>
                        </div>
                        <div class="line"></div>
                     <?php if ($this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_nama == NULL) { 
                              $where = array( 'id_instansi' => $p->id_instansi, 'pengguna_nama !=' => NULL);
                              $cek = $this->m_master->cekData("pengguna",$where)->num_rows();
                              if ($cek > 0) {
                        ?>
                          <p>Pilih Pengguna Alumni Sesuai dengan Divisi anda</p>
                          <div class="table-responsive">                       
                          <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Divisi</th>
                                <th>Pilih</th>
                              </tr>
                            </thead>
                            <tbody>
                               <?php 
                                $no = 1;
                                $pengguna = $this->m_pengguna->getPenggunaByInstansiID($p->id_instansi);
                               foreach($pengguna as $d){ ?> 
                              <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $this->m_pengguna->getPenggunaByID($d->id)->pengguna_nama ?></td>
                                <td><?php echo $d->divisi ?></td>
                                <td>
                                 <input id="radioCustom1" type="radio" value="<?php echo $p->id ?>" name="id_pengguna" class="radio-template">
                                </td>
                              </tr>
                            <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      <?php } else { ?>
                         <p>*Jika Pengguna Alumni Tidak Terdapat Pada Daftar Diatas Silahkan Isi Form <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Disini</a></p>
                         <div class="collapse" id="collapseExample">
                          <div class="card card-body">
                            <div class="form-group">
                            <label class="form-control-label">Nama Pengguna</label>
                            <input type="text" placeholder="" class="form-control" name="nama">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">Divisi</label>
                            <input type="text" placeholder="" class="form-control" name="divisi">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">Email</label>
                            <input type="text" placeholder="" class="form-control" name="email">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">No HP/Telepon</label>
                            <input type="text" placeholder="" class="form-control" name="telepon">
                          </div>
                          </div>
                        </div> <!-- collapse -->
                        <?php } ?>
                        <div class="line"></div>
                       <?php } else { ?>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Data Pengguna</label>
                          <div class="col-sm-9">
                              <small class="help-block-none">Nama pengguna.</small><input type="text" name="pengguna_nama" class="form-control" value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_nama ?>" style="margin-bottom: 10px">
                              <small class="help-block-none">Email pengguna.</small><input type="text" name="pengguna_email" class="form-control"  value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_email ?>" style="margin-bottom: 10px">
                              <small class="help-block-none">No telepon/hp pengguna.</small><input type="text" name="pengguna_telepon" class="form-control"  value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_telepon ?>">
                              <small class="help-block-none">Divisi.</small><input type="text" name="pengguna_telepon" class="form-control"  value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->divisi ?>">
                              <input type="hidden" name="divisi" class="form-control" value="<?php echo $p->id_pengguna ?>">
                          </div>
                        </div>
                      <?php } ?>
                         <div class="line"></div>
                        <div class="form-group" style="float: right;">
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