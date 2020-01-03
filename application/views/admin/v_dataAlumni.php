<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/buttons.dataTables.min.css">
<script src="<?php echo base_url(); ?>assets/DataTables/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/buttons.flash.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/jszip.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/buttons.html5.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/buttons.print.min.js" ></script>


        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Alumni</h2>
            </div>
          </header>
        
          <?php echo $this->session->flashdata('suksesImpor'); ?>
          <?php echo $this->session->flashdata('gagalImpor'); ?>
          <?php echo $this->session->flashdata('suksesAddAlumni'); ?>
          <?php echo $this->session->flashdata('gagalAddAlumni'); ?>

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Alumni <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?></h3>
                      <button type="button" class="btn btn-primary ml-auto btn-sm" data-toggle="modal" data-target="#modalTambah"><i class="fas fa-user-plus"></i> Tambah Akun</button>
                      <button type="button" class="btn btn-dark ml-3 btn-sm" data-toggle="modal" data-target="#modalImport"><i class="fas fa-cloud-upload-alt"></i>  Import</button>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table id="myTable" class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>NIM</th>
                              <th>Angkatan</th>
                              <th>Tahun Lulus</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $no = 1;
                              foreach($alumni as $d){ 
                              ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $d->nama ?></td>
                              <td><?php echo $d->nim ?></td>
                              <td><?php echo $d->tahun_masuk ?></td>
                              <td><?php echo $d->tahun_lulus ?></td>
                              <td>
                                <div class="btn-group btn-group-toggle">
                                    <!-- <button type="submit" class="btn btn-info btn-sm"  data-toggle="tooltip" data-placement="top" title="Data Tracer"><i class="fas fa-database"></i></button> -->
                                    <form method='' action="<?php echo base_url('admin/Alumni/editProfil/'.$d->id) ?>"><button type="submit" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Profil"><i class="fas fa-user-edit"></i></button></form>
                                    <button onclick="set_id(<?php echo $d->id ?>)" name="options" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus" data-target="#ModalHapus"><i class="fas fa-trash-alt"></i></button>
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

          <!-- Modal Tambah Alumni-->
                      <div id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Data Alumni</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <?php echo form_open_multipart('admin/Alumni/exeAddAlumni'); ?>
                                <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" placeholder="" class="form-control" name="nama" required>
                                </div>
                                <div class="form-group">       
                                  <label>No Registrasi</label>
                                  <input type="text" placeholder="" class="form-control" name="nim" required>
                                </div>
                                <div class="form-group">
                                  <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="form-control" required>
                                      <option value="Laki-laki">Laki-laki</option>
                                      <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">       
                                  <label>Tahun Masuk</label>
                                  <input type="text" placeholder="" class="form-control" name="tahun_masuk" required>
                                </div>
                                <div class="form-group">       
                                  <label>Tahun Lulus</label>
                                  <input type="text" placeholder="" class="form-control" name="tahun_lulus" required>
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

<!-- Modal Import Alumni-->
                      <div id="modalImport" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Data Alumni</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Template Master pengisian data dapat di unduh pada link berikut ini : <a href="<?php echo base_url('assets/file/Alumni-2.xlsx'); ?>">Alumni.xls</a></p>
                              <form action="<?php echo base_url();?>admin/Alumni/exeImport/" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                  <label>Upload File</label>
                                  <input type="file" placeholder="" class="form-control" name="file">
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
        window.location.href =  "<?php echo base_url();?>admin/Alumni/deleteAlumni/"+p_id;
    }

  $(document).ready( function () {
    $('#myTable').DataTable({
        "ordering": false,
        "select": true,
        dom: 'Bfrtip',
        buttons: [
          'excel', 'print'
        ]
      }); //input fungsi
  });

</script>

