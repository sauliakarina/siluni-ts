  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Form Kuesioner</h2>
            </div>
          </header>
           <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Profil') ?>">Biodata</a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Profil/riwayatPekerjaan') ?>">Riwayat Pekerjaan</a></li>
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
                      <h3 class="h4">Kuesioner Pekerjaan</h3>
                    </div>
                    <div class="card-body">
                      <p></p>
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label class="col-sm-6 form-control-label">Masa tunggu dari kelulusan hingga mendapat pekerjaan pertama</label>
                          <div class="col-sm-1"><p>:</p></div>
                          <div class="col-sm-5">
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">[1] 1-3 bln</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">[2] 4-6 bln</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">[3] 7-9 bln</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">[4] 10-12 bln</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">[5] > 12 bln</label>
                            </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                          <label class="col-sm-6 form-control-label">Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?</label>
                          <div class="col-sm-1"><p>:</p></div>
                          <div class="col-sm-5">
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">[1] Sangat Erat</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">[2] Erat</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">[3] Cukup Erat</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">[4] Kurang Erat</label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">[5] Tidak Sama Sekali</label>
                            </div>
                        </div>
                      </div>
                      <div class="line"></div>
                      <div class="form-group row">
                          <label class="col-sm-6 form-control-label">Adakah hambatan yang anda alami dalam menyesuaikan diri dengan pekerjaan?   </label>
                          <div class="col-sm-1"><p>:</p></div>
                          <div class="col-sm-5">
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">[1] Ya </label>
                            </div>
                            <div class="i-checks">
                              <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              <label for="radioCustom1">[2] Tidak </label>
                            </div>
                            <small class="form-text">Jelaskan alasan jawaban anda</small>
                            <textarea class="form-control" rows="2" id="comment"></textarea>
                        </div>
                      </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-6 form-control-label">Pengetahuan apa yang dibutuhkan dari perkuliahan untuk menunjang pekerjaan anda saat ini? </label>
                          <div class="col-sm-1"><p>:</p></div>
                          <div class="col-sm-5">
                            <textarea class="form-control" rows="2" id="comment"></textarea>
                          </div>
                        </div>

                         <div class="line"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
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