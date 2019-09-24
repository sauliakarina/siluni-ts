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
                  <div class="card"><!-- 
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4"></h3>
                    </div> -->
                    <div class="card-body">
                      <p></p>
                      <table class="table table-striped mb-4">
                        <h6>Pekerjaan</h6>
                        <tr>
                          <td>Masa tunggu dari kelulusan hingga mendapat pekerjaan pertama</td>
                          <td>:</td>
                          <td width="500px">
                               <div class="i-checks">
                                <input id="" type="radio" value="option2" name="a" class="radio-template">
                                <label for="">1-3 bln</label>
                              </div> 
                              <div class="i-checks">
                                <input id="" type="radio" value="option2" name="a" class="radio-template">
                                <label for="">4-6 bln</label>
                              </div>
                              <div class="i-checks">
                                <input id="" type="radio" value="option2" name="a" class="radio-template">
                                <label for="">7-9 bln</label>
                              </div> 
                              <div class="i-checks">
                                <input id="" type="radio" value="option2" name="a" class="radio-template">
                                <label for="">10-12 bln</label>
                              </div> 
                              <div class="i-checks">
                                <input id="" type="radio" value="option2" name="a" class="radio-template">
                                <label for=""> > 12 bln</label>
                              </div> 
                          </td>
                        </tr>
                        <tr>
                          <td>Bagaimana anda mencari pekerjaan tersebut? </td>
                          <td>:</td>
                          <td width="500px">
                            <div class="i-checks">
                              <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                              <label for="checkboxCustom1">Melalui iklan di koran/majalah, brosur</label>
                            </div>
                            <div class="i-checks">
                              <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                              <label for="checkboxCustom1">Melamar ke perusahaan tanpa tahu lowongan yang ada</label>
                            </div>
                            <div class="i-checks">
                              <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                              <label for="checkboxCustom1">Pergi ke bursa/pameran kerja</label>
                            </div>
                          </td>
                        </tr>
                         <tr>
                          <td>Apakah pekerjaan Saudara ini berhubungan dengan bidang ilmu yang Saudara pelajari di Perguruan Tinggi?</td>
                          <td>:</td>
                          <td width="500px">
                              <div class="i-checks">
                                <input id="radioCustom1" type="radio" value="" name="a" class="radio-template">
                                <label for="radioCustom1">Ya</label>
                              </div> 
                              <div class="i-checks">
                                <input id="radioCustom1" type="radio" value="" name="a" class="radio-template">
                                <label for="radioCustom1">Tidak</label>
                              </div> 
                              <div class="form-group">
                              <textarea placeholder="Tuliskan Alasan" class="form-control" rows="3"></textarea>
                            </div>
                          </td>
                        </tr>
                      </table>
                      <table class="table table-striped">
                        <h6>Melanjutkan Pendidikan</h6>
                        <tr>
                          <td>Dimana anda melanjutkan pendidikan</td>
                          <td>:</td>
                          <td width="500px">
                            <div class="form-group">
                              <input type="text" placeholder="" class="form-control">
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td>Alamat Universitas</td>
                          <td>:</td>
                          <td width="500px">
                            <div class="form-group">
                              <input type="text" placeholder="" class="form-control">
                            </div>
                          </td>
                        </tr>
                         <tr>
                          <td>Program Studi</td>
                          <td>:</td>
                          <td width="500px">
                            <div class="form-group">
                              <input type="text" placeholder="" class="form-control">
                            </div>
                          </td>
                        </tr>
                        <tr>
                           <td>Apakah program studi S1 anda linear dengan S2?</td>
                          <td>:</td>
                          <td width="500px">
                              <div class="i-checks">
                                <input id="" type="radio" value="option1" name="a" class="radio-template">
                                <label for="">Ya</label>
                              </div> 
                              <div class="i-checks">
                                <input id="" type="radio" value="option1" name="a" class="radio-template">
                                <label for="">Tidak</label>
                              </div>
                          </td>
                        </tr>
                      </table>
                    </div>
                      <div class="form-group row">
                          <div class="col-sm-4 offset-sm-5 mb-3">
                            <button type="submit" class="btn btn-primary">Simpan Jawaban</button>
                          </div>
                        </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
         

  </body>
</html>