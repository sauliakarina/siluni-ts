  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid" style="background-color: #EFE037">
            <ul class="breadcrumb" style="background-color: #EFE037">
              <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
              <li class="breadcrumb-item active">Ganti Password</li>
            </ul>
          </div>

                   <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                    </div>
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Ganti Password</h3>
                    </div>
                    <div class="card-body">
                      <p></p>
                      <form action="<?php echo base_url();?>alumni/Profil/exeEditPass" method="post">
                        <div class="form-group">       
                          <label class="form-control-label">Password Lama</label>
                          <input type="password" name="oldpass" id="oldpass" placeholder="Password" class="form-control">
                          <?php echo form_error('oldpass'); ?>
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">Password Baru</label>
                          <input type="password" name="newpass" id="newpass" placeholder="Password" class="form-control">
                          <?php echo form_error('newpass'); ?>
                        </div>
                        <div class="form-group">       
                          <label class="form-control-label">Konfirmasi Password</label>
                          <input type="password" name="confirm" id="confirm" placeholder="Password" class="form-control">
                          <?php echo form_error('confirm'); ?>
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