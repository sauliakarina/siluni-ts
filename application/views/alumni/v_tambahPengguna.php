  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Riwayat Pekerjaan</h2>
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
                      <h3 class="h4">Pengguna Alumni PT Sinarmas</h3>
                    </div>
                    <div class="card-body">
                      <p>Pilih Pengguna Alumni Sesuai Divisi Anda</p>
                      <form class="form-horizontal">
                          
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Divisi</th>
                              <th>Pilih</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td>Rahman, S.Kom</td>
                              <td>Teknologi Informasi</td>
                              
                              <td>
                               <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Budiyono, S.Kom</td>
                              <td>Jaringan</td>
                              <td>
                                <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                        <div class="line"></div>
                         <p>*Jika Pengguna Alumni Tidak Terdapat Pada Daftar Diatas Silahkan Isi Form <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Disini</a></p>
                         <div class="collapse" id="collapseExample">
                          <div class="card card-body">
                            <div class="form-group">
                            <label class="form-control-label">Nama Pengguna</label>
                            <input type="email" placeholder="" class="form-control">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">Divisi</label>
                            <input type="password" placeholder="" class="form-control">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">Email</label>
                            <input type="text" placeholder="" class="form-control">
                          </div>
                          <div class="form-group">       
                            <label class="form-control-label">No HP/Telepon</label>
                            <input type="text" placeholder="" class="form-control">
                          </div>
                          </div>
                        </div>
                        
                         <div class="line"></div>
                        <div class="form-group" style="float:right;">
                            <button type="submit" class="btn btn-light">Sebelumnya</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
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