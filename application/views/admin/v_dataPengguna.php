        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Pengguna Alumni</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
              <li class="breadcrumb-item active">Data</li>
            </ul>
          </div>
        <!-- alert box -->
          <div class="alert alert-info alert-dismissible" role="alert">
          <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <strong><i class="fa fa-warning"></i> Perhatian!</strong> <p style="font-family: verdana; font-size: 11pt">Pengisian kuesioner untuk pengguna alumni dilakukan melalui link pada tabel dibawah ini, copy link tersebut kemudian kirimkan melalui email masing-masing pengguna dan untuk pengisian kuesioner bagi pengguna alumni yang belum terdaftar dilakukan melalui link berikut: http://localhost/siluni-ts/pengguna/Kuesioner/kuesionerPenggunaAlumni/<?php echo $prodiID ?></p>
        </div>

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <form method="post" action="<?php echo base_url(); ?>admin/Pengguna/updateTandai">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Pengguna Alumni Ilmu Komputer</h3>
                      <!-- <button type="button" class="btn btn-primary ml-auto btn-sm"><i class="fas fa-user-plus"></i> Tambah Data</button> -->
                        <button type="submit" class="btn btn-primary btn-sm ml-auto">Simpan</button>
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
                              <th>Link Kuesioner</th>
                              <th>Tandai</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $no = 1;
                            $i = 0; 
                            foreach($pengguna as $p){
                             ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $p->pengguna_nama ?></td>
                              <td><?php echo $p->divisi ?></td>
                              <td><?php echo $this->m_master->getInstansiByID($p->id_instansi)->nama_instansi ?></td>
                              <td><?php echo $p->pengguna_email ?></td>
                              <td><?php echo $p->pengguna_telepon ?></td>
                              <td>

                                <button type="button" class="btn btn-sm btn-outline-info" onclick="copyFunction(<?php echo $no ?>)">Copy</button>
                                <input style="position: absolute; left: -1000px" type="text" class="input-sm" value="http://localhost/siluni-ts/pengguna/Kuesioner/kuesionerInstansi/<?php echo $p->id ?>" id="myInput[<?php echo $no ?>]">
                            
                              </td>
                              <td><div class="i-checks">
                              <input name="tandai<?php echo $p->id ?>" type="checkbox" <?php if ($p->tandai == 'checked') { echo 'checked=""'; } ?> value="checked" class="checkbox-template">
                              <input type="hidden" value="<?php echo $p->id ?>" name="penggunaID[<?php echo $i++; ?>]">
                            </div></td>
                              <td>
                                <div class="btn-group btn-group-toggle">
                                   <form method='post' action="<?php echo base_url('admin/Pengguna/editPengguna/'.$p->id) ?>">
                                    <button type="submit" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Sunting"><i class="far fa-edit"></i></button></form>
                                   <button onclick="return set_id(<?php echo $p->id ?>)" class="btn btn-danger btn-sm" data-toggle="modal" data-placement="top" title="Hapus" data-target="#ModalHapus"><i class="fas fa-trash-alt"></i></button>
                                </div>
                              </td>
                            </tr>
                          <?php } ?>
                          </tbody>
                        </table>
                      </form>
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

          <!-- Modal Edit Pengguna-->
                      <div id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Data Alumni</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <?php echo form_open_multipart('admin/Pengguna/exeEdit'); ?>
                                <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" id="pengguna_nama" value="<?php echo $p->pengguna_nama ?>" class="form-control" name="pengguna_nama">
                                  <input type="hidden" id="id" value="<?php echo $p->id ?>" class="form-control" name="id">
                                </div>
                                <div class="form-group">
                                  <label>Instansi</label>
                                   <!--  <select  id="id_instansi" name="id_instansi" class="form-control" value="<?php //echo $p->id_instansi ?>">
                                      <option><?php //echo $p->id_instansi ?></option>
                                    </select> -->
                                  <input type="text" placeholder="" class="form-control"  name="id_instansi" id="id_instansi" value="<?php echo $this->m_master->getInstansiByID($p->id_instansi)->nama_instansi ?>">
                                </div>
                                <div class="form-group">
                                  <label>Divisi</label>
                                    <input type="text" placeholder="" class="form-control"  name="divisi" id="divisi" value="<?php echo $p->divisi ?>">
                                </div>
                                <div class="form-group">       
                                  <label>Email</label>
                                  <input type="text" placeholder="" class="form-control"  name="pengguna_email" id="pengguna_email" value="<?php echo $p->pengguna_email ?>">
                                </div>
                                <div class="form-group">       
                                  <label>No Telepon</label>
                                  <input type="text" class="form-control" name="pengguna_telepon" id="pengguna_telepon" value="<?php echo $p->pengguna_telepon ?>">
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

<script type="text/javascript">
   var p_id;
    function set_id(id) {
        p_id = id;
        return false;
    }

    function deletep(){
        window.location.href =  "<?php echo base_url();?>admin/Pengguna/deletePengguna/"+p_id;
         return false;
    }

    function editPengguna(id) {

      $.ajax({
        url: "<?php echo base_url('admin/Pengguna/getPengguna/') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('[name="id"]').val(data.id);
          $('[name="pengguna_nama"]').val(data.pengguna_nama);
          $('[name="pengguna_email"]').val(data.pengguna_email);
          $('[name="pengguna_telepon"]').val(data.pengguna_telepon);
          $('[name="id_divisi"]').val(data.id_divisi);
          $('[name="id_instansi"]').val(data.id_instansi);
          
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


    function copyFunction(i) {

      var copyText = document.getElementById("myInput["+i+"]");
      copyText.select();
      copyText.setSelectionRange(0, 99999)
      document.execCommand("copy");
      alert("Copied the text: " + copyText.value);
}
</script>
