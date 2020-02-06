        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Kelola Alumni</h2>
            </div>
          </header>
          
        <?php echo $this->session->flashdata('pesan'); ?>
        <?php echo $this->session->flashdata('sukses_akun'); ?>


  <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <form action="<?php echo base_url();?>admin/Alumni/exeEditAkun" method="post"> 
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Akun Alumni</h3>
                      <button type="submit" class="btn btn-primary ml-auto btn-sm">Simpan</button>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
                           <tbody>
                            <tr>
                              <th scope="row">NIM/Username</th>
                              <td><input type="text" name="username"  value="<?php echo $this->m_master->getUserByUserID($profil->userID)->username ?>" class="form-control form-control-sm"></td>
                              <td><input type="hidden" name="id_alumni"  value="<?php echo $profil->id ?>" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                              <th scope="row">Password</th>
                              <td><input type="text" name="password"  value="<?php echo $this->m_master->getUserByUserID($profil->userID)->password ?>" class="form-control form-control-sm"></td>
                              <td><input type="hidden" name="id_user"  value="<?php echo $this->m_master->getUserByUserID($profil->userID)->id ?>" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
</section>


          <section class="tables" style="margin-top: -80px">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <form action="<?php echo base_url();?>admin/Alumni/exeEditProfil" method="post"> 
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Data Diri Alumni</h3>
                      <button type="submit" class="btn btn-primary ml-auto btn-sm">Simpan</button>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
                           <tbody>
                            <tr>
                              <th scope="row">Nama</th>
                              <td><input type="text" name="nama"  value="<?php echo $profil->nama ?>" class="form-control form-control-sm"></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Jenis Kelamin</th>
                              <td><input type="text" name="jenis_kelamin"  value="<?php echo $profil->jenis_kelamin ?>" class="form-control form-control-sm"></td>
                              <td><input type="hidden" name="id"  value="<?php echo $profil->id ?>" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                              <th scope="row">Tempat Tanggal Lahir</th>
                              <td><input type="text" name="tempat_lahir" value="<?php echo $profil->tempat_lahir ?>" class="form-control form-control-sm"></td>
                              <td><input type="date" name="tanggal_lahir"  value="<?php echo $profil->tanggal_lahir ?>" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                              <th scope="row">Alamat</th>
                              <td><textarea name="alamat" rows="3" class="form-control"><?php echo $profil->alamat ?></textarea></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Tahun Masuk</th>
                              <td><input type="text" name="tahun_masuk"  value="<?php echo $profil->tahun_masuk ?>" class="form-control form-control-sm"></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Bulan Lulus</th>
                              <td><input type="text" name="bulan_lulus"  value="<?php echo $profil->bulan_lulus ?>" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                              <th scope="row">Tahun Lulus</th>
                              <td><input type="text" name="tahun_lulus"  value="<?php echo $profil->tahun_lulus ?>" class="form-control form-control-sm"></td>
                            </tr>
                            <tr>
                              <th scope="row">IPK</th>
                              <td><input type="text" name="ipk"  value="<?php echo $profil->ipk ?>" class="form-control form-control-sm"></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">TOEFL</th>
                              <td><input type="text" name="toefl"  value="<?php echo $profil->toefl ?>" class="form-control form-control-sm"></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Email</th>
                              <td><input type="text" name="email"  value="<?php echo $profil->email ?>" class="form-control form-control-sm"></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">No Telepon/HP</th>
                              <td><input type="text" name="no_telepon"  value="<?php echo $profil->no_telepon ?>" class="form-control form-control-sm"></td>
                              <td></td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
          </section>

           <section class="tables" style="margin-top: -80px">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <form action="<?php echo base_url();?>admin/Alumni/exeEditProfil" method="post"> 
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Riwayat Pekerjaan Alumni</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Instansi</th>
                              <th>Posisi</th>
                              <th>Pendapatan</th>
                              <th>Periode Kerja</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                            $no = 1;
                            foreach($pekerjaan as $r){ 
                            ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $this->m_master->getInstansiByID($r->id_instansi)->nama_instansi ?></td>
                              <td><?php echo $r->posisi ?></td>
                              <td><?php if ($r->gaji != Null) {
                              echo number_format($r->gaji,0,",",","); 
                              } ?></td>
                              <td><?php echo $r->periode_kerja ?></td>
                            </tr>
                          <?php } ?>
                          </tbody>
                        </table>
                      </div>
                      </div>
                    </div>
                    </form>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
          </section>
