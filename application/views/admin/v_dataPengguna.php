        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Kelola Data Pengguna Alumni</h2>
            </div>
          </header>
    
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Pengguna Alumni <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?></h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table id="myTable" class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Divisi</th>
                              <th>Instansi</th>
                              <th>Email</th>
                              <th>No Telepon</th>
                              <th>Alumni</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $no = 1;
                              foreach($pengguna as $d){ 
                              ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $d->pengguna_nama ?></td>
                              <td><?php echo $d->divisi ?></td>
                              <td>
                                 <?php if ($d->id_instansi == '0') {
                                echo "Non Instansi";
                                } else {echo $this->m_master->getInstansiByID($d->id_instansi)->nama_instansi;
                                } ?>
                              </td>
                              <td><?php echo $d->pengguna_email ?></td>
                              <td><?php echo $d->pengguna_telepon ?></td>
                              <td width="100px">
                                <?php $newAlumni = $this->m_pengguna->getCountNewAlumniPengguna($d->id); ?>
                                <form action="<?php echo base_url('admin/Pengguna/lihatAlumni/'.$d->id) ?>">
                                  <button type="submit" class="btn btn-info btn-sm">
                                    Lihat <span class="badge badge-light" style="color: #E62004"><?php if($newAlumni != 0) {echo "+".$newAlumni;}  ?></span>
                                  </button>
                                </form>
                              </td>
                              <td>
                                <div class="btn-group btn-group-toggle">
                                   <form method='post' action="<?php echo base_url('admin/Pengguna/editPengguna/'.$d->id) ?>">
                                    <button type="submit" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Sunting"><i class="far fa-edit"></i></button></form>
                                   <button onclick="return set_id(<?php echo $d->id ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus" data-target="#ModalHapus"><i class="fas fa-trash-alt"></i></button>
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


<script type="text/javascript">
   var p_id;
    function set_id(id) {
        p_id = id;

    }

    function deletep(){
        window.location.href =  "<?php echo base_url();?>admin/Pengguna/deletePengguna/"+p_id;
    }

    $(document).ready( function () {
    $('#myTable').DataTable(
        {
        "ordering": false,
    }
      );
} );

</script>