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
                             <input type="hidden" name="id_pengguna" class="form-control" value="<?php echo $p->id_pengguna ?>">
                          </div>
                        </div>
                         <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Profil Pekerjaan</label>
                          <div class="col-sm-9">
                            <select name="profil" class="form-control mb-3">
                              <option value="<?php echo $p->profil ?>"><b><?php echo $p->profil ?></b></option>
                              <option value="Programmer">Programmer</option>
                              <option value="Penangungg Jawab Jaringan">Penangungg Jawab Jaringan</option>
                              <option value="Wirausahawan">Wirausahawan</option>
                            </select>
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
                     <?php if ($this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_nama == NULL) { ?>
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
                                 <input id="radioCustom1" type="radio" value="<?php echo $d->id ?>" name="radioPenggunaID" class="radio-template">
                                </td>
                              </tr>
                            <?php } ?>
                            </tbody>
                          </table>
                        </div>
                          <p>*Jika Pengguna Alumni Tidak Terdapat Pada Daftar Diatas Silahkan Isi Form <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Disini</a></p>
                         <div class="collapse" id="collapseExample">
                          <div class="card card-body">
                            <div class="form-group">
                            <label class="form-control-label">Nama Pengguna</label>
                            <input type="text" placeholder="" class="form-control" name="pengguna_nama" value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_nama ?>">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">Divisi</label>
                            <input type="text" placeholder="" class="form-control" name="divisi" value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->divisi ?>">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">Email</label>
                            <input type="text" placeholder="" class="form-control" name="pengguna_email" value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_email ?>">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">No HP/Telepon</label>
                            <input type="text" placeholder="" class="form-control" name="pengguna_telepon" value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_telepon ?>">
                          </div>
                          </div>
                        </div> <!-- collapse -->
                        <div class="line"></div>
                       <?php } else { ?>
                         <p>Data Pengguna Alumni</p>
                          <div class="card card-body">
                            <div class="form-group">
                            <label class="form-control-label">Nama Pengguna</label>
                            <input type="text" placeholder="" class="form-control" name="pengguna_nama" value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_nama ?>">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">Divisi</label>
                            <input type="text" placeholder="" class="form-control" name="divisi" value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->divisi ?>">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">Email</label>
                            <input type="text" placeholder="" class="form-control" name="pengguna_email" value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_email ?>">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">No HP/Telepon</label>
                            <input type="text" placeholder="" class="form-control" name="pengguna_telepon" value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_telepon ?>">
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