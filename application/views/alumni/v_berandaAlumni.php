  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Beranda</h2>
            </div>
          </header>

          <!-- kata pengantar -->                                              
          <section class="updates padding-top no-padding-bottom">
            <div class="container-fluid">
              <div class="row">
                <!-- Recent Updates-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header"><h5 class="card-title">Tracer Study <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?> UNJ</h5>
                    </div>
                    <div class="card-body">
                      <div class="row" style="margin: 8px">
                         <!--  <div class="col-sm-12">
                          <center><img class="img-fluid rounded" src="<?php echo base_url();?>/assets/siluni/images/beranda/<?php echo $beranda->foto ?> ?>" alt="Card image cap" style="height: :350px;width:600px;margin-bottom: 30px"></center>
                          </div> -->
                          <p class="card-text" align="justify"><?php echo $beranda->isi ?></p>
                      </div> <!-- row -->
                    </div> <!-- card body -->
                  </div>
                </div>
                </div>
              </div>
          </section>

 <!-- Forms Section-->
<section class="forms"> 
  <div class="container-fluid">
      <div class="row">
        <!-- Inline Form-->
         <div class="col-lg-12">                           
         <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Data</h3>
            </div>
          <div class="card-body">

              <p></p>
              <!-- tabs -->
              <div class="nav-wrapper">
                <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="ni ni-single-copy-04 mr-2"></i>Data Diri</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="ni ni-building mr-2"></i>Kuesioner</a>
                  </li>
                </ul>
              </div> <!-- nav wrapper -->

          <div class="card" >
            <div class="card-body"> 
              <!-- tab content -->
              <div class="tab-content" id="myTabContent" style="overflow: hidden;">

               <!-- tab data diri -->
              <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                <p>tab 1</p>
              </div> <!-- tab data diri -->

            <!-- tab kuesioner dan pekerjaan -->
            <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
              <div class="pekerjaan">
              <!-- data pekerjaan -->
                <?php 
                  $where = array('id_alumni' => $alumniID);
                  $cek = $this->m_master->cekData("pekerjaan",$where)->num_rows(); 
                  $firstPekerjaan = $this->m_pengguna->getFirstInstansi($alumniID);
                  $pekerjaanAlumni = $this->m_pengguna->getPekerjaanByAlumniID($alumniID);
                ?>
                 <h5>Pekerjaan Pertama</h5>
                 <form class="form-horizontal" method="post" action="<?php echo base_url();?>alumni/Profil/tambahPenggunaAlumni">

                  <div class="form-group row">
                    <label class="col-sm-3 form-control-label">Pilih Instansi</label>
                    <div class="col-sm-9">
                      <select name="id_instansi" id="id_instansi" class="form-control mb-3">
                      <?php if ($cek > 0) { ?>
                      <option value="<?php echo $firstPekerjaan->id_instansi ?>"><?php echo $this->m_master->getInstansiByID($firstPekerjaan->id_instansi)->nama_instansi ?></option> <?php } else {?>
                      <option></option> <?php } ?>
                      <?php foreach($instansi as $i){ ?>
                          <option value="<?php echo $i->id ?>"><?php echo $i->nama_instansi ?></option>
                      <?php } //end foreach  ?>
                      </select>
                      <small class="form-text">Lainnya :</small>
                      <input type="text" class="form-control" name="new_instansi">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 form-control-label">Skala Instansi</label>
                    <div class="col-sm-9">
                      <select name="skala_instansi" id="skala_instansi" class="form-control mb-3" required>
                        <option></option>
                        <option value="Lokal"> Lokal </option>
                        <option value="Nasional"> Nasional </option>
                        <option value="Internasional"> Internasional </option>
                      </select>
                      <small class="form-text">
                          <ul>
                            <li>Instansi Lokal          : </li>
                            <li>Instansi Nasional       : </li>
                            <li>Instansi Internasional  : instansi yang memiliki cabang di luar negeri</li>
                          </ul>
                    </small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 form-control-label">Profesi</label>
                     <div class="col-sm-9">
                        <input type="text" class="form-control" name="posisi" required>
                     </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-3 form-control-label">Profil Pekerjaan</label>
                    <div class="col-sm-9">
                      <select name="profil" class="form-control mb-3" required>
                        <option></option>
                        <option value="Programmer"> Programmer </option>
                        <option value="Penanggung Jawab Jaringan"> Penanggung Jawab Jaringan </option>
                        <option value="Wirausahawan"> Wirausahawan </option>
                        <option value="Praktisi"> Praktisi </option>
                        <option value="Konsultan"> Konsultan </option>
                        <option value="Perencana SI"> Perencana SI </option>
                        <option value="Peneliti"> Peneliti </option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label  class="col-sm-3 form-control-label">Pendapatan Tiap Bulan</label>
                    <div class="col-sm-9">
                      <select name="gaji" class="form-control mb-3" required>
                        <?php if ($cek > 0) { ?>
                        <option value="<?php echo $firstPekerjaan->gaji ?>"><?php echo $firstPekerjaan->gaji ?></option>
                        <?php } else {?>
                        <option></option>
                        <?php } ?>
                        <option value="< 1jt"> < Rp 1jt </option>
                        <option value="1jt - 2jt"> Rp 1jt - 2 jt </option>
                         <option value="2jt - 3jt"> Rp 2jt - 3 jt </option>
                        <option value="3jt - 4jt"> Rp 3jt - 4 jt </option>
                        <option value="> 4jt"> > Rp 4jt </option>
                      </select>
                    </div>
                  </div>

                  <?php if ($cek <= 1) { ?>
                  <div class="form-group row">
                    <label class="col-sm-3 form-control-label">Pilih Pengguna Alumni</label>
                    <div class="col-sm-9">
                      <select name="penggunaID" id="penggunaID" class="form-control mb-3">
                        <option></option>
                      </select>
                      <small class="form-text">Pilih pengguna alumni jika data di atas merupakan pekerjaan saat ini. Jika pilihan pengguna alumni tidak ada <a href="" data-toggle="modal" data-target="#ModalTambahPengguna">klik disini</a></small>
                    </div>
                  </div>
                <?php } ?>


                <!-- pekerjaan kedua dst -->
                <?php if ($cek > 1) { 
                  foreach (array_slice($pekerjaanAlumni, 1) as $k) {
                ?>
                 <div class="line"></div>
                  <h5>Pekerjaan Lainnya</h5>
                  <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Pilih Instansi</label>
                      <div class="col-sm-9">
                        <select name="id_instansi" id="id_instansi" class="form-control mb-3">
                        <option><?php echo $this->m_master->getInstansiByID($k->id_instansi)->nama_instansi ?></option>
                        <?php foreach($instansi as $i){ ?>
                            <option value="<?php echo $i->id ?>"><?php echo $i->nama_instansi ?></option>
                        <?php } //end foreach  ?>
                        </select>
                        <small class="form-text">Lainnya :</small>
                        <input type="text" class="form-control" name="new_instansi">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Skala Instansi</label>
                      <div class="col-sm-9">
                        <select name="skala_instansi" id="skala_instansi" class="form-control mb-3" required>
                          <option></option>
                          <option value="Lokal"> Lokal </option>
                          <option value="Nasional"> Nasional </option>
                          <option value="Internasional"> Internasional </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Profesi</label>
                       <div class="col-sm-9">
                          <input type="text" class="form-control" name="posisi" required>
                       </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Profil Pekerjaan</label>
                      <div class="col-sm-9">
                        <select name="profil" class="form-control mb-3" required>
                          <option></option>
                          <option value="Programmer"> Programmer </option>
                          <option value="Penanggung Jawab Jaringan"> Penanggung Jawab Jaringan </option>
                          <option value="Wirausahawan"> Wirausahawan </option>
                          <option value="Praktisi"> Praktisi </option>
                          <option value="Konsultan"> Konsultan </option>
                          <option value="Perencana SI"> Perencana SI </option>
                          <option value="Peneliti"> Peneliti </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label  class="col-sm-3 form-control-label">Pendapatan Tiap Bulan</label>
                      <div class="col-sm-9">
                        <select name="gaji" class="form-control mb-3" required>
                          <option value="<?php echo $k->gaji ?>"><?php echo $k->gaji ?></option>
                          <option value="< 1jt"> < Rp 1jt </option>
                          <option value="1jt - 2jt"> Rp 1jt - 2 jt </option>
                           <option value="2jt - 3jt"> Rp 2jt - 3 jt </option>
                          <option value="3jt - 4jt"> Rp 3jt - 4 jt </option>
                          <option value="> 4jt"> > Rp 4jt </option>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label">Pilih Pengguna Alumni</label>
                      <div class="col-sm-9">
                        <select name="penggunaID" id="penggunaID" class="form-control mb-3">
                          <option></option>
                        </select>
                        <small class="form-text">Pilih pengguna alumni jika data di atas merupakan pekerjaan saat ini</small>
                        <small class="form-text">Jika pilihan pengguna alumni tidak ada <a href="" data-toggle="modal" data-target="#ModalTambahPengguna">klik disini</a></small>
                      </div>
                    </div>

           <?php    } //foreach ?>
        <?php  } //if ?>
      </div> <!-- div id -->

        <div class="form-group row">
           <div class="col-sm-9 offset-sm-3">
            <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
           </div>
        </div>

    </form> <!-- form tambah pekerjaan -->
    <!-- button tambah pekerjaan -->
    <div class="form-group row" style="float: left;">
       <div class="col-sm-9 offset-sm-3">
        <button class="btn btn-info add">+Pekerjaan</button>
       </div>
    </div>

</div> <!-- tab kuesioner -->

            </div> <!-- tab content -->
          </div> <!-- card body -->
        </div> <!-- card -->


          </div> <!-- card body -->
          </div> <!-- card -->
        </div>   <!-- col lg 12 --> 
      </div> <!-- row -->
    </div> <!-- container -->
</section>

</body>

     <!-- Modal Tambah Instansi-->
    <div id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
         <h4 id="exampleModalLabel" class="modal-title">Tambah Instansi</h4>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <p></p>
          <form class="form-horizontal" action="<?php echo base_url();?>alumni/Data/exeAddInstansi" method="post">
          <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nama Instansi</label>
          <div class="col-sm-9">
            <input type="text" placeholder="" class="form-control" name="nama_instansi">
          </div>
          </div>
          <div class="form-group row">
              <label class="col-sm-3 form-control-label">Alamat</label>
              <div class="col-sm-9">
                 <textarea class="form-control" rows="5" id="" name="alamat"></textarea>
              </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-3 form-control-label">Skala Instansi</label>
            <div class="col-sm-9">
              <select name="jenis_instansi" class="form-control mb-3">
                <option></option>
                <option value="Lokal">Lokal</option>
                <option value="Nasional">Nasional</option>
                <option value="Internasional">Internasional</option>
                </select>
            </div>
            <small class="form-text">
                  <ul>
                    <li>Instansi Lokal          : </li>
                    <li>Instansi Nasional       : </li>
                    <li>Instansi Internasional  : instansi yang memiliki cabang di luar negeri</li>
                  </ul>
            </small>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
      </div>
    </div>
    </div>
  </div>

  <!-- Modal Tambah Pengguna-->
    <div id="ModalTambahPengguna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
      <div role="document" class="modal-dialog">
      <div class="modal-content">
       <div class="modal-header">
         <h4 id="exampleModalLabel" class="modal-title">Tambah Pengguna Alumni</h4>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <p></p>
          <form action="<?php echo base_url();?>alumni/Data/exeAddPengguna" class="form-horizontal" method="post">
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Nama</label>
                 <div class="col-sm-9">
                    <input type="text" placeholder="" class="form-control" name="nama">
                 </div>
              </div>
              <div class="form-group row">       
                <label class="col-sm-3 form-control-label">Divisi</label>
                <div class="col-sm-9">
                   <input type="text" placeholder="" class="form-control" name="divisi">
                </div>
              </div>
              <div class="form-group row">       
                <label class="col-sm-3 form-control-label">Email</label>
                <div class="col-sm-9">
                   <input type="text" placeholder="" class="form-control" name="email">
                </div>
              </div>
              <div class="form-group row">
              <label class="col-sm-3 form-control-label">No HP/Telepon</label> 
              <div class="col-sm-9">
                <input type="text" placeholder="" class="form-control" name="telepon">
              </div>      
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
      </form>
      </div>
    </div>
    </div>
</html>

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<!--   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script>
  $(document).ready(function(){ 
    
    $("#id_instansi").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#penggunaID").hide(); // Sembunyikan dulu combobox kota nya
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("alumni/Data/getPengguna"); ?>", // Isi dengan url/path file php yang dituju
        data: {id_instansi : $("#id_instansi").val()}, // data yang akan dikirim ke file yang dituju
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

  <script>
  $(document).ready(function(){ 
    
    $("#id_instansi").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#skala_instansi").hide(); // Sembunyikan dulu combobox kota nya
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("alumni/Data/getInstansi"); ?>", // Isi dengan url/path file php yang dituju
        data: {id_instansi : $("#id_instansi").val()}, // data yang akan dikirim ke file yang dituju
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
          $("#skala_instansi").html(response.list_penggunaID).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
      });
    });
  });


$(document).ready(function() {
  var maksimal    = 6;
  var field       = $(".pekerjaan"); 
  var tambah      = $(".add"); 
  
  var i = 0;
  $(tambah).click(function(e){
    e.preventDefault();
    if(i < maksimal){
      i++;
      $(field).append('<div>' + '<?php include 'v_tambahPekerjaan.php' ?>' + '</div>');
    }
  });
  
  $(field).on("click",".hapus", function(e){ //user click on remove text
    e.preventDefault(); 
    $(this).parent('div').remove(); 
    i--;
  })
});
  </script>