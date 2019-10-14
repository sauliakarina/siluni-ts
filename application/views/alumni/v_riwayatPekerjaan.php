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
                             <!--  <th>Data Pengguna</th> -->
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $no = 1;
                              foreach($riwayat as $r){ 
                              ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $this->m_master->getInstansiByID($r->id_instansi)->nama_instansi ?></td>
                              <td><?php echo $r->posisi ?></td>
                              <td><?php echo $this->m_master->getDivisiByID($r->id_divisi)->nama_divisi ?></td>
                              <td><?php echo $r->gaji ?></td>
                              <td><?php echo $r->periode_kerja ?></td>
                              <!-- <td>
                                <?php $id_pengguna// = $this->m_pengguna->getPenggunaByAlumniDivisi($r->id_alumni, $r->id_divisi)->id_pengguna; ?>
                                <button onclick="pengguna(<?php// echo $id_pengguna ?>)" class="btn btn-sm btn-info" data-toggle="modal" data-target="#ModalPengguna"><i class="fas fa-info-circle"></i></button>
                              </td> -->
                              <td>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-warning btn-sm">
                                    <input type="radio" name="options"><i class="far fa-edit"></i>
                                  </label>
                                  <label class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus" onclick="set_id(<?php echo $r->id ?>)">
                                    <input type="radio" name="options"><i class="fas fa-trash-alt"></i>
                                  </label>
                                </div>
                              </td>
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


 <!-- Modal Data Pengguna-->
                      <div id="ModalPengguna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Data Pengguna Alumni</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                               <div class="table-responsive">                       
                                <table class="table table-striped table-hover">
                                   <tbody>
                                    <tr>
                                      <th scope="row">Nama</th>
                                      <td id="nama"></td>          
                                    </tr>
                                    <tr>
                                      <th scope="row">Email</th>
                                      <td id="email"></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">No Telepon</th>
                                      <td id="telepon"></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
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
                              <button type="button" class="btn btn-danger" onclick='deletep()'>Hapus</button>
                            </div>
                          </div>
                        </div>
                      </div>
  </body>
</html>

<script type="text/javascript">
  function pengguna(id) {
    $.ajax({
        url: "<?php echo base_url('alumni/Profil/getPengguna/') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          console.table(data);
          $('#nama').text(data.nama);
          $('#id_divisi').text(data.id_divisi);
          $('#email').text(data.email);
          $('#telepon').text(data.telepon);
          
          $('#ModalPengguna').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('gagal mengambil data');
        }
      });
  }

  var p_id;
  function set_id(id) {
    p_id = id;
  }

  function deletep(){
    window.location.href =  "<?php echo base_url();?>alumni/Profil/hapusRiwayat/"+p_id;
  }

</script>