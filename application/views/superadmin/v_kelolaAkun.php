  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Kelola Akun Prodi</h2>
            </div>
          </header>
           <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Profil/biodata') ?>">Data Diri</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo site_url('alumni/Profil/riwayatPekerjaan') ?>">Riwayat Pekerjaan</a></li>
            </ul>
          </div>
         
         <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Admin Program Studi</h3>
                      <button type="button" class="btn btn-primary ml-auto btn-sm" data-toggle="modal" data-target="#modalTambah"><i class="fas fa-user-plus"></i> Tambah Admin</button>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table id="myTable" class="table table-striped table-hover">
                           <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Kode Prodi</th>
                              <th>Username</th>
                              <th>Password</th>
                              <th>Fakultas</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $no = 1;
                              foreach($admin as $d){ 
                              ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td>Admin <?php echo $this->m_master->getProdiByID($d->prodiID)->nama_prodi ?></td>
                              <td><?php echo $this->m_master->getProdiByID($d->prodiID)->kode_prodi ?></td>
                              <td><?php echo $d->username ?></td>
                              <td><?php echo $this->m_master->getFakultasByID($this->m_master->getProdiByID($d->prodiID)->fakultasID)->nama_fakultas ?></td>
                              <td>
                                <div class="btn-group btn-group-toggle">
                                 <button onclick='editProdi(<?php echo $d->id ?>)' id="btn-edit" class="btn-warning btn-sm" data-toggle="modal" data-target="#ModalEdit"><i class="fas fa-user-edit"></i></button>
                                  <label class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus" onclick="set_id(<?php echo $d->id ?>)">
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

  <!-- Modal Tambah-->
                      <div id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Prodi</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <?php echo form_open_multipart('superadmin/Master/exeAddProdi'); ?>
                                <div class="form-group">
                                  <label>Nama Prodi</label>
                                  <input type="text" placeholder="" class="form-control" name="nama_prodi">
                                </div>
                                <div class="form-group">       
                                  <label>Kode Prodi</label>
                                  <input type="text" placeholder="" class="form-control" name="kode_prodi">
                                </div>
                                <div class="form-group">
                                  <label>Fakultas</label>
                                    <select name="fakultasID" class="form-control">
                                      <option></option>
                                      <?php foreach ($fakultas as $f) { ?>
                                      <option value="<?php echo $f->id ?>"><?php echo $f->nama_fakultas ?></option>
                                    <?php } ?>
                                    </select>
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

<!-- Modal Edit Prodi-->
          <div id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Sunting Prodi</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <?php echo form_open_multipart('superadmin/Master/exeEditProdi'); ?>
                                <div class="form-group">
                                  <label>Nama Prodi</label>
                                  <input type="text" id="nama_prodi" value="<?php echo $d->nama_prodi ?>" class="form-control" name="nama_prodi">
                                  <input type="hidden" id="id" value="<?php echo $d->id ?>" class="form-control" name="id">
                                </div>
                                <div class="form-group">       
                                  <label>Kode Prodi</label>
                                  <input type="text" placeholder="" class="form-control"  name="kode_prodi" id="kode_prodi" value="<?php echo $d->kode_prodi ?>">
                                </div>
                                <div class="form-group">
                                  <label>Fakultas</label>
                                    <select  id="fakultasID" name="fakultasID" class="form-control">
                                      <option value="<?php echo $d->fakultasID ?>"><?php echo $d->fakultasID ?></option>
                                      <?php foreach ($fakultas as $f) { ?>
                                      <option value="<?php echo $f->id ?>"><?php echo $f->nama_fakultas ?></option>
                                      <?php } ?>
                                    </select>
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
                              <button type="button" class="btn btn-danger" onclick='deletep()'>Hapus</button>
                            </div>
                          </div>
                        </div>
                      </div>
  </body>
</html>

<script type="text/javascript">
  var p_id;
  function set_id(id) {
    p_id = id;
  }

  function deletep(){
    window.location.href =  "<?php echo base_url();?>superadmin/Master/deleteProdi/"+p_id;
  }

  function editProdi(id) {

      $.ajax({
        url: "<?php echo base_url('superadmin/Master/getProdi/') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('[name="id"]').val(data.id);
          $('[name="nama_prodi"]').val(data.nama_prodi);
          $('[name="kode_prodi"]').val(data.kode_prodi);
          $('[name="fakultasID"]').val(data.fakultasID);
          
          $('#ModalEdit').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('gagal mengambil data');
        }
      });
    }

   $(document).ready( function () {
    $('#myTable').DataTable(
        {
        "ordering": false,
    }
      );
  } );

</script>