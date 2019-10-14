  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Laporan Pengguna Alumni</h2>
            </div>
          </header>
           <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('Laporan') ?>">Pencarian</a></li>
              <li class="breadcrumb-item">Hasil</li>
            </ul>
          </div>

          <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Laporan Tracer Study</h3>
                    </div>
                    <div class="card-body">
                      <p></p>
                      <form class="form-horizontal" action="<?php echo site_url("Laporan/hasilLaporanAlumni") ?>">
                         <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Jenis Kuesioner</label>
                          <div class="col-sm-9">
                            <select name="kuesioner" class="form-control mb-3">
                              <option>Pekerjaan</option>
                              <option>Kompetensi</option>
                              <option>Melanjutkan Pendidikan</option>
                            </select>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pertanyaan</label>
                          <div class="col-sm-9">
                            <select class="js-example-basic-single dropdown" id="" name="pertanyaan" style="width: 100%;">
                            <option value="">Pilih Pertanyaan</option>
                             <option>Lama masa tunggu</option>
                             <option>Cara nemperoleh pekerjaan</option>
                             <option>Bidang ilmu selaras dengan pekerjaan</option>
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