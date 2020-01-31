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
              <li class="breadcrumb-item"><a href="<?php echo base_url('koorprodi/Alumni') ?>"><i class="fas fa-chevron-left"></i> Daftar Alumni</a></</li>
            </ul>
          </div>

        <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
                           <tbody>
                            <tr>
                              <th scope="row">Nama</th>
                              <td><p><?php echo $profil->nama ?></p></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Jenis Kelamin</th>
                              <td><p><?php echo $profil->jenis_kelamin ?></p></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">No Mahasiswa</th>
                              <td><p><?php echo $profil->nim ?></p></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Tempat Tanggal Lahir</th>
                              <td><p><?php echo $profil->tempat_lahir ?>, <?php echo $profil->tanggal_lahir ?></p></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Alamat</th>
                               <td><p><?php echo $profil->alamat ?></p></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Tahun Masuk</th>
                               <td><p><?php echo $profil->tahun_masuk ?></p></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Bulan Lulus</th>
                               <td><p><?php echo $profil->bulan_lulus ?></p></td>
                               <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Tahun Lulus</th>
                               <td><p><?php echo $profil->tahun_lulus ?></p></td>
                            </tr>
                            <tr>
                              <th scope="row">IPK Kelulusan</th>
                               <td><p><?php echo $profil->ipk ?></p></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">TOEFL Kelulusan</th>
                              <td><p><?php echo $profil->toefl ?></p></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">Email</th>
                               <td><p><?php echo $profil->email ?></p></td>
                              <td></td>
                            </tr>
                            <tr>
                              <th scope="row">No Telepon/HP</th>
                               <td><p><?php echo $profil->no_telepon ?></p></td>
                              <td></td>
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
         
         <section class="tables" style="margin-top: -80px">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Riwayat Pekerjaan <?php echo $this->m_alumni->getAlumniByID($id_alumni)->nama ?></h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Instansi</th>
                              <th>Posisi</th>
                              <th>Gaji tiap Bulan</th>
                              <th>Periode</th>
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
                              <td><?php echo "Rp ".number_format($r->gaji,0,",",",");  ?></td>
                              <td><?php echo $r->periode_kerja ?></td>
                            </tr>
                          <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
          </section>


 
  </body>
</html>

<script type="text/javascript">

  var p_id;
  function set_id(id) {
    p_id = id;
  }

  function deletep(){
    window.location.href =  "<?php echo base_url();?>alumni/Profil/hapusRiwayat/"+p_id;
  }

</script>