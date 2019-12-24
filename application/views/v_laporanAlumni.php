  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Laporan Hasil Kuesioner Alumni</h2>
            </div>
          </header>

            <!-- alert box -->
          <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <strong><i class="fa fa-warning"></i> Perhatian!</strong> <p style="font-family: verdana; font-size: 11pt">Grafik dapat ditampilkan untuk pertanyaan jenis pilihan dan ganda</p>
          </div>
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
                      <form class="form-horizontal" method="post" action="<?php echo site_url("Laporan/laporanAlumni") ?>">
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Pertanyaan</label>
                          <div class="col-sm-9">
                            <select class="js-example-basic-single dropdown" id="" name="pertanyaanID" style="width: 100%;">
                            <option value="">Pilih Pertanyaan</option>
                            <?php foreach ($pertanyaan as $p) { ?>
                              <option value="<?php echo $p->id ?>"><?php echo $p->pertanyaan ?></option>
                            <?php }
                              if ($this->m_kuesioner->getKuesionerByID($kuesionerID)->nama_kuesioner == 'Pendidikan') {
                             ?>
                             <option value="toefl">Toefl Kelulusan</option>
                             <option value="ipk">IPK Kelulusan</option>
                           <?php } elseif($this->m_kuesioner->getKuesionerByID($kuesionerID)->nama_kuesioner == 'Pekerjaan') { ?>
                            <option value="gaji">Penghasilan Pertama</option>
                           <?php } ?>
                             </select>
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Tahun Lulus</label>
                          <div class="col-sm-3">
                            <input type="text" class="form-control" value="" name="tahun_lulus">
                            <input type="hidden" class="form-control" value="<?php echo $kuesionerID ?>" name="kuesionerID">
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