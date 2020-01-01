  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Riwayat Pekerjaan</h2>
            </div>
          </header>
          
          <!-- marquee -->
          <div class="alert alert-success alert-dismissible" role="alert" style="height: 60px">
            <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button><marquee><p style="font-family:; font-size: 18pt">Harap lengkapi data riwayat pekerjaan anda</p></marquee>
            <!-- marquee -->
        </div>
         <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Riwayat Pekerjaan Anda</h3>
                      <button type="button" class="btn btn-primary ml-auto btn-sm"  data-toggle="modal" data-target="#ModalTambah"><i class="fas fa-user-plus"></i> Tambah Data</button>
                      <!-- <a type="button" class="btn btn-primary ml-auto btn-sm" href="<?php echo site_url('alumni/Profil/tambahRiwayat') ?>" ><i class="fas fa-plus-circle"></i> Tambah</a> -->
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table id="myTable" class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Instansi</th>
                              <th>Profesi</th>
                              <th>Pendapatan per Bulan</th>
                              <th>Periode</th>
                              <th></th>
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
                              <td><?php echo $r->gaji ?></td>
                              <td><?php echo $r->periode_kerja ?></td>
                              <td>
                                <div class="btn-group btn-group-toggle">
                                <?php if ($r->pengguna_nama == Null) { ?>
                                   <form  action="<?php echo base_url('alumni/Profil/editPekerjaan/'.$r->id_pekerjaan) ?>"><button type="submit" class="btn btn-outline-success btn-sm" data-toggle="tooltip">Lengkapi Data</button></form>
                                <?php } else { ?>
                                 <form method='' action="<?php echo base_url('alumni/Profil/editPekerjaan/'.$r->id_pekerjaan) ?>"><button type="submit" class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="Sunting"><i class="far fa-edit"></i></button></form>
                               <?php } ?>
                                  <label class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus" onclick="set_id(<?php echo $r->id_pekerjaan ?>)">
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

               <div class="form-group row">
                <label class="col-sm-3 form-control-label">Pilih Instansi</label>
                <div class="col-sm-9">
                  <select name="instansiID" id="instansiID" class="form-control mb-3">
                   <option value=""></option>
                  <?php foreach($instansi as $i){ ?>
                      <option value="<?php echo $i->id ?>"><?php echo $i->nama_instansi ?></option>
                  <?php } //end foreach  ?>
                  </select>
                  <small class="form-text">Lainnya :</small>
                  <input type="text" class="form-control" name="instansiBaru_1">
                </div>
              </div>

               <div class="form-group row">
                <label class="col-sm-3 form-control-label">Pilih Pengguna Alumni</label>
                <div class="col-sm-9">
                  <select name="penggunaID" id="penggunaID" class="form-control mb-3">
                    <option value=""></option>
                  </select>
                  <small class="form-text">Pilih pengguna alumni jika data di atas merupakan pekerjaan saat ini. Jika pilihan pengguna alumni tidak ada <a data-toggle="collapse" href="#collapseExample_1" aria-expanded="false" aria-controls="collapseExample"> Klik Disini</a></small>
                </div>
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

   $(document).ready( function () {
    $('#myTable').DataTable(
        {
        "ordering": false,
    }
      );
} );

</script>

 <script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    //$("#loading").hide();
    
    $("#instansiID").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#penggunaID").hide(); // Sembunyikan dulu combobox kota nya
      //$("#loading").show(); // Tampilkan loadingnya
    
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("alumni/Profil/getPenggunaID"); ?>", // Isi dengan url/path file php yang dituju
        data: {instansiID : $("#instansiID").val()}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        beforeSend: function(e) {
          if(e && e.overrideMimeType) {
            e.overrideMimeType("application/json;charset=UTF-8");
          }
        },
        success: function(response){ // Ketika proses pengiriman berhasil
          //$("#loading").hide(); // Sembunyikan loadingnya
          // set isi dari combobox kota
          // lalu munculkan kembali combobox kotanya
          $("#penggunaID").html(response.list_penggunaID).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
      });
    });
  });
  </script>