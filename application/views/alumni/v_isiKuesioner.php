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
                      <table class="table table-striped">
                        <tr>
                          <td>Masa tunggu dari kelulusan hingga mendapat pekerjaan pertama</td>
                          <td>:</td>
                          <td width="400px"><input type="radio" name=""><label>1-2</label><br>
                              <input type="radio" name=""><label>1-2</label><br>
                              <input type="radio" name=""><label>1-2</label><br>
                          </td>
                        </tr>
                        <tr>
                          <td>Bagaimana anda mencari pekerjaan tersebut? </td>
                          <td>:</td>
                          <td width="400px"><input type="checkbox" name="">Melalui iklan di koran/majalah, brosur<br>
                              <input type="checkbox" name="">Melamar ke perusahaan tanpa mengetahui lowongan yang ada<br>
                              <input type="checkbox" name="">Pergi ke bursa/pameran kerja<br>
                          </td>
                        </tr>
                         <tr>
                          <td>Apakah pekerjaan Saudara ini berhubungan dengan bidang ilmu yang Saudara pelajari di Perguruan Tinggi?</td>
                          <td>:</td>
                          <td width="400px"><input type="radio" name=""><label>Ya</label><br>
                              <input type="radio" name=""><label>Tidak</label><br>
                              <textarea class="form-control" rows="3" placeholder="Tuliskan alasan"></textarea>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
         

  </body>
</html>