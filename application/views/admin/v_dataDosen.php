        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Dosen</h2>
            </div>
          </header>
    
    <?php echo $this->session->flashdata('sukses_edit'); ?>
    <?php echo $this->session->flashdata('suksesAddDosen'); ?>
    <?php echo $this->session->flashdata('gagalAddDosen'); ?>

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Dosen <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?></h3>
                      <button type="button" class="btn btn-primary ml-auto btn-sm"  data-toggle="modal" data-target="#ModalTambah"><i class="fas fa-user-plus"></i> Tambah Data</button>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table id="myTable" class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>NIDN</th>
                              <th>Nama</th>
                              <th>Jenis Kelamin</th>
                              <th>Email</th>
                              <th>No Telepon</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $no = 1;
                              foreach($dosen as $d){ 
                              ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $d->nidn ?></td>
                              <td><?php echo $d->nama ?></td>
                              <td><?php echo $d->jenis_kelamin ?></td>
                              <td><?php echo $d->email ?></td>
                              <td><?php echo $d->no_telepon ?></td>
                              <td>
                                <div class="btn-group btn-group-toggle">
                                  <button onclick='editDosen(<?php echo $d->id ?>)' id="btn-edit" class="btn-warning btn-sm" data-toggle="modal" data-target="#ModalEdit"><i class="fas fa-user-edit"></i></button>
                                  <button onclick="set_id(<?php echo $d->id ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus" data-target="#ModalHapus"><i class="fas fa-trash-alt"></i></button>
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

  <!-- Modal Tambah-->
                      <div id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Dosen</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <form action="<?php echo base_url();?>admin/Dosen/exeAdd" method="post">
                                <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" placeholder="" class="form-control" name="nama" id="nama">
                                </div>
                                <div class="form-group">
                                  <label>NIDN</label>
                                  <input type="text" placeholder="" class="form-control" name="nidn" id="nidn">
                                </div>
                              <div class="form-group">
                                <label>Jenis Kelamin</label>
                                  <select name="jenis_kelamin" class="form-control mb-3" id="jenis_kelamin">
                                    <option></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label>Email</label>
                                  <input type="text" placeholder="" class="form-control" name="email">
                              </div>
                              <div class="form-group">
                                  <label>No Telepon</label>
                                  <input type="text" placeholder="" class="form-control" name="no_telepon">
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>
<!-- modal tambah -->

<!-- Modal Edit dosen-->
<div id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 id="exampleModalLabel" class="modal-title">Sunting Dosen</h4>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <p></p>
          <?php echo form_open_multipart('admin/Dosen/exeEditDosen'); ?>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" id="nama" value="<?php echo $d->nama ?>" class="form-control" name="nama">
              <input type="hidden" id="id" value="<?php echo $d->id ?>" class="form-control" name="id">
            </div>
            <div class="form-group">       
              <label>NIDN</label>
              <input type="text" placeholder="" class="form-control"  name="nidn" id="nidn" value="<?php echo $d->nidn ?>">
            </div>
            <div class="form-group">
              <label>Jenis Kelamin</label>
                <select  id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                  <option value="<?php echo $d->jenis_kelamin ?>"><?php echo $d->jenis_kelamin ?></option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">       
              <label>Email</label>
              <input type="text" placeholder="" class="form-control"  name="email" id="email" value="<?php echo $d->email ?>">
            </div>
            <div class="form-group">       
              <label>No Telepon</label>
              <input type="text" placeholder="" class="form-control"  name="no_telepon" id="no_telepon" value="<?php echo $d->no_telepon ?>">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
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


<script type="text/javascript">
   var p_id;
    function set_id(id) {
        p_id = id;

    }

    function deletep(){
        window.location.href =  "<?php echo base_url();?>admin/Dosen/deleteDosen/"+p_id;
    }

    $(document).ready( function () {
    $('#myTable').DataTable(
        {
        "ordering": false,
    }
      );
} );

function editDosen(id) {

      $.ajax({
        url: "<?php echo base_url('admin/Dosen/getDosen/') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('[name="id"]').val(data.id);
          $('[name="nama"]').val(data.nama);
          $('[name="nidn"]').val(data.nidn);
          $('[name="jenis_kelamin"]').val(data.jenis_kelamin);
          $('[name="email"]').val(data.email);
          $('[name="no_telepon"]').val(data.no_telepon);
          
          $('#ModalEdit').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('gagal mengambil data');
        }
      });
    }
</script>