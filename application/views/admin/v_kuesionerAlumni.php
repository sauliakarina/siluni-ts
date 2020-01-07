        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Kelola Kuesioner Alumni</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin/Kuesioner/kuesionerAlumni') ?>">Alumni</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo site_url('admin/Kuesioner/kuesionerPengguna') ?>">Pengguna</a></li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Kategori Kuesioner</h3>
                      <button type="button" class="btn btn-primary ml-auto btn-sm" data-toggle="modal" data-target="#addKuesioner"><i class="fas fa-plus-circle"></i> Buat Kuesioner</button>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Kuesioner</th>
                              <th>Status</th>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1;
                              foreach ($kuesioner as $k) {
                             ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><a href="<?php echo base_url('admin/Kuesioner/buatPertanyaanPengguna/'.$k->id) ?>"><?php echo $k->nama_kuesioner ?></a></td>
                              <td><b><?php echo $k->status ?></b></td>
                              <td> 
                                <?php if ($k->status == 'aktif') { ?>
                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="set_id(<?php echo $k->id ?>)"  data-toggle="modal" data-target="#ModalNonaktif">Nonaktifkan</button>
                              <?php } else {?>
                                <button type="button" class="btn btn-outline-info btn-sm" onclick="set_id(<?php echo $k->id ?>)"  data-toggle="modal" data-target="#ModalAktif">Aktifkan</button>
                              <?php } ?>
                              </td>
                              <td>
                                <div class="btn-group btn-group-toggle">
                                  <form method='post' action="<?php echo base_url('admin/Kuesioner/kelolaKuesionerAlumni/'.$k->id) ?>">
                                    <button type="submit" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Sunting"><i class="far fa-edit"></i></button></form>
                                  <button onclick="set_id(<?php echo $k->id ?>)" name="options" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus" data-target="#ModalHapus"><i class="fas fa-trash-alt"></i></button>
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


    <!-- Modal Retracer-->
                    <div id="ModalRetracer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <h6>Apakah anda yakin ingin penulusuran ulang kuesioner ini?</h6>
                              <div class="text-center">
                              <i class="fas fa-sync fa-4x mb-3 animated bounce" style="color: #1CC4C6;margin-top: 8px"></i>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                              <button type="button" class="btn btn-info">Ya</button>
                            </div>
                          </div>
                        </div>
                      </div>

  <!-- Modal add kuesioner-->
  <div id="addKuesioner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
          <div role="document" class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Buat Kuesioner</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <form method="post" action="<?php echo base_url();?>admin/Kuesioner/addKuesionerAlumni">
                                <div class="form-group">
                                  <label>Nama Kuesioner</label>
                                  <input type="text" class="form-control" name="nama_kuesioner">
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
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
                              <button type="submit" class="btn btn-danger" onclick='deletep()'>Hapus</button>
                            </div>
                          </div>
              </div>
         </div>

          <!-- Modal Nonaktif-->
        <div id="ModalNonaktif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
            <div role="document" class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 id="exampleModalLabel" class="modal-title">Nonaktifkan Kuesioner</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah anda yakin ingin menonaktifkan kuesioner ini?</p>
                              <div class="text-center">
                              <i class="fas fa-power-off fa-4x mb-3 animated bounce"  style="color: #D60C0C"></i>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                              <button type="submit" class="btn btn-danger" onclick='nonaktif()'>Ya</button>
                            </div>
                          </div>
              </div>
         </div>

           <!-- Modal aktif-->
        <div id="ModalAktif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
            <div role="document" class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 id="exampleModalLabel" class="modal-title">Aktifkan Kuesioner</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah anda yakin ingin mengaktifkan kuesioner ini?</p>
                              <div class="text-center">
                              <i class="far fa-lightbulb fa-4x mb-3 animated bounce" style="color: #15DACE"></i>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                              <button type="submit" class="btn btn-info" onclick='aktif()'>Ya</button>
                            </div>
                          </div>
              </div>
         </div>

<script type="text/javascript">

  var p_id;
    function set_id(id) {
        p_id = id;

    }

   function deletep(){
        window.location.href =  "<?php echo base_url();?>admin/Kuesioner/deleteKuesioner/"+p_id;
    }

    function nonaktif(){
        window.location.href =  "<?php echo base_url();?>admin/Kuesioner/nonaktifKuesioner/"+p_id;
    }

     function aktif(){
        window.location.href =  "<?php echo base_url();?>admin/Kuesioner/aktifKuesioner/"+p_id;
    }

</script>