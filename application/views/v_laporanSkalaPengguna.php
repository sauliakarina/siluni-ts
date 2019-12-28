  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Laporan Hasil Kuesioner Pengguna</h2>
            </div>
          </header>
                   <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Kuesioner <?php echo $this->m_kuesioner->getKuesionerByID($kuesionerID)->nama_kuesioner ?></h3>
                    </div>
                    <div class="card-body">
                      <p></p>
                      <form class="form-horizontal" method="post" action="<?php echo site_url("Laporan/laporanPenggunaSkala") ?>">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pertanyaan</label>
                          <div class="col-sm-9">
                            <select class="js-example-basic-single dropdown" id="pertanyaan" name="pertanyaanID" style="width: 100%;" required>
                            <option value="">Pilih Pertanyaan</option>
                            <?php 
                              foreach ($pertanyaan as $p) { ?>
                                <option value="<?php echo $p->id ?>"><?php echo $p->pertanyaan ?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Sub Pertanyaan</label>
                          <div class="col-sm-9">
                            <select class="js-example-basic-single dropdown" id="pertanyaanSkala" name="pertanyaanSkalaID" style="width: 100%;" required>
                              <option value="">Pilih Pertanyaan</option>
                            </select>
                          </div>
                        </div>

                         <div class="line"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ml-auto">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
  </body>
</html>
<!-- select2 -->
<link href="<?php echo base_url('assets/template/vendor/select2/dist/css/select2.min.css')?>" rel="stylesheet">
<script src="<?php echo base_url('assets/template/vendor/select2/dist/js/select2.full.min.js')?>"></script>


<script type="text/javascript">
  $(document).ready(function() {
      $('.js-example-basic-single').select2();
    });
</script>

 <script>
  $(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya
    //$("#loading").hide();
    
    $("#pertanyaan").change(function(){ // Ketika user mengganti atau memilih data provinsi
      $("#pertanyaanSkala").hide(); // Sembunyikan dulu combobox kota nya
      //$("#loading").show(); // Tampilkan loadingnya
    
      $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("Laporan/getPertanyaanSkala"); ?>", // Isi dengan url/path file php yang dituju
        data: {pertanyaanID : $("#pertanyaan").val()}, // data yang akan dikirim ke file yang dituju
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
          $("#pertanyaanSkala").html(response.list_pertanyaanSkala).show();
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
          alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
      });
    });
  });
  </script>