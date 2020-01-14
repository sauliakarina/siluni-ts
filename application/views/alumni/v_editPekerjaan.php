<script src="<?php echo base_url('assets/number_format/dist') ?>/jquery.masknumber.js"></script>
<!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Pekerjaan</h2>
            </div>
          </header>
<?php echo $this->session->flashdata('edit_pekerjaan'); ?>
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
                          <label class="col-sm-3 form-control-label">Alamat Instansi</label>
                           <div class="col-sm-9">
                              <textarea class="form-control" name="alamat_instansi"><?php echo $this->m_master->getInstansiByID($p->id_instansi)->alamat ?></textarea>
                           </div>
                      </div>

                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Skala Instansi</label>
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
                             <input type="hidden" name="id_pekerjaan" class="form-control" value="<?php echo $id_pekerjaan ?>">
                              <input type="hidden" name="id_instansi" class="form-control" value="<?php echo $p->id_instansi ?>">
                               <input type="hidden" name="alumniID" class="form-control" value="<?php echo $p->id_alumni ?>">
                              <input type="hidden" name="id_pengguna" class="form-control" value="<?php  if ($p->id_pengguna != NULL) { echo $p->id_pengguna; } else {echo NULL;} ?>">
                          </div>
                        </div>
                         <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Profil Pekerjaan</label>
                          <div class="col-sm-9">
                            <select name="profil" class="form-control mb-3">
                              <option value="<?php echo $p->profil ?>"><b><?php echo $p->profil ?></b></option>
                              <option value="Programmer">Programmer</option>
                              <option value="Penangungg Jawab Jaringan">Penanggung Jawab Jaringan</option>
                              <option value="Wirausahawan">Wirausahawan</option>
                              <option value="Praktisi"> Praktisi </option>
                              <option value="Konsultan"> Konsultan </option>
                              <option value="Perencana SI"> Perencana SI </option>
                              <option value="Peneliti"> Peneliti </option>
                              <option value="Pendidik"> Pendidik </option>
                              <option value="Lainnya"> Lainnya </option>
                            </select>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pendapatan</label>
                          <div class="col-sm-9">
                             <?php 
                              if ($p->gaji != "") {
                                $gaji = number_format($p->gaji,0,",",","); 
                              } else {
                                $gaji = "";
                              }
                              ?>
                            <input type="text" class="form-control" id="gajiNominal" value="<?php echo $gaji ?>" name="gaji" required>
                          </div>
                        </div>
                        <div class="line"></div>
                         <div class="form-group row">       
                          <label class="col-sm-3 form-control-label">Periode Kerja</label>
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

                      <?php if ($p->id_pengguna != NULL) { ?>
                        <div class="line"></div>
                         <p>Data Pengguna Alumni</p>
                          <div class="card card-body">
                            <div class="form-group">
                            <label class="form-control-label">Nama Pengguna</label>
                            <input type="text" placeholder="" class="form-control" name="pengguna_nama" <?php if ($p->id_pengguna != NULL) { ?>value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_nama ?>" <?php } ?>>
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">Divisi</label>
                            <input type="text" placeholder="" class="form-control" name="divisi" <?php if ($p->id_pengguna != NULL) { ?> value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->divisi ?>" <?php } ?>>
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">Email</label>
                            <input type="text" placeholder="" class="form-control" name="pengguna_email" <?php if ($p->id_pengguna != NULL) { ?>value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_email ?>" <?php } ?>>
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">No HP/Telepon</label>
                            <input type="text" placeholder="" class="form-control" name="pengguna_telepon" <?php if ($p->id_pengguna != NULL) { ?>value="<?php echo $this->m_pengguna->getPenggunaByID($p->id_pengguna)->pengguna_telepon ?>" <?php } ?>>
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

<script type="text/javascript">
  $('#gajiNominal').maskNumber({
  integer: true,

});
</script>