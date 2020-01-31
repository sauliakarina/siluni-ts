        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Pengguna Alumni</h2>
            </div>
          </header>
  

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Daftar Instansi <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?></h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table id="myTable" class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama Instansi</th>
                              <th>Skala Instansi</th>
                              <th>Alamat</th>
                              <th>Alumni</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $no = 1;
                            foreach($instansi as $p){
                             ?>
                            <tr>
                              <th scope="row"><?php echo $no++; ?></th>
                              <td><?php echo $p->nama_instansi ?></td>
                              <td><?php echo $p->jenis_instansi ?></td>
                              <td><?php echo $p->alamat ?></td>
                              <td>
                                <a type="button" href="<?php echo site_url('koorprodi/Pengguna/daftarAlumniInstansi/'.$p->id) ?>" class="btn btn-info btn-sm">Lihat</a>
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

<!-- Modal Edit-->
<div id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 id="exampleModalLabel" class="modal-title">Sunting Instansi</h4>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <p></p>
          <?php echo form_open_multipart('admin/Pengguna/exeEditInstansi'); ?>
            <div class="form-group">
              <label>Nama Instansi</label>
              <input type="text" id="nama_instansi" value="<?php echo $p->nama_instansi ?>" class="form-control" name="nama_instansi">
              <input type="hidden" id="id" value="<?php echo $p->id ?>" class="form-control" name="id">
            </div>
            <div class="form-group">
              <label>Skala Instansi</label>
                <select  id="jenis_instansi" name="jenis_instansi" class="form-control">
                  <option value="<?php echo $p->jenis_instansi ?>"><?php echo $p->jenis_instansi ?></option>
                  <option value="Lokal">Lokal</option>
                  <option value="Nasional">Nasional</option>
                  <option value="Internasional">Internasional</option>
                </select>
            </div>
            <div class="form-group">       
              <label>Alamat</label>
              <textarea class="form-control"  name="alamat" rows="4" id="alamat"><?php echo $p->alamat ?></textarea>
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
        window.location.href =  "<?php echo base_url();?>admin/Pengguna/deleteInstansi/"+p_id;
         return false;
    }

$(document).ready( function () {
      $('#myTable').DataTable(
          {
      }
        );
    } );

function editInstansi(id) {

      $.ajax({
        url: "<?php echo base_url('admin/Pengguna/getInstansi/') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('[name="id"]').val(data.id);
          $('[name="nama_instansi"]').val(data.nama_instansi);
          $('[name="jenis_instansi"]').val(data.jenis_instansi);
          $('[name="alamat"]').val(data.alamat);
          
          $('#ModalEdit').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('gagal mengambil data');
        }
      });
    }
</script>
