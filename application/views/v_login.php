  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <img src="<?php echo base_url(); ?>assets/template/img/unj.png" style="height: :200px;width:200px;margin-left: 50px;margin-bottom: 35px" class="img-fluid rounded-circle img-responsive">
                    <h2>Sistem Informasi Alumni</h2>
                  </div>
                  <p>Universitas Negeri Jakarta</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <form method="post" action="<?php echo base_url('Login/exeLogin'); ?>" class="form-validate">
                    <div class="form-group"><!-- 
                      <p>Silahkan login pada form dibawah ini</p> -->
                      <input id="login-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                      <label for="login-username" class="label-material">User Name</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <button id="login" class="btn btn-primary">Masuk</button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                    </form>

                    <div class="col-lg-12">                           
                      <div class="card">
                        <div class="card-body" style="font-size: 15px">
                          Apabila anda mengalami kesulitan dalam login, silahkan hubungi Administrator Tracer Study <a href="#" data-toggle="modal" data-target="#myModal">klik disini</a>
                        </div>
                      </div>
                    </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com/p/admin-template" class="external">Bootstrapious</a>
          <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
        </p>
      </div>
    </div>
     <!-- JavaScript files-->
    <script src="<?php echo base_url('assets/template/vendor') ?>/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('assets/template/vendor') ?>/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url('assets/template/vendor') ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('assets/template/vendor') ?>/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url('assets/template/vendor') ?>/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url('assets/template/vendor') ?>/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url(); ?>assets/template/js/front.js"></script>
  </body>

  <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title">Kontak Admin Tracer Study</h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
        </div>
        <div class="modal-body">
          <p></p>
            <div class="table-responsive">                       
            <table id="myTable" class="table table-striped table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Admin Program Studi</th>
                  <th>No Telepon</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  $no = 1;
                  foreach($admin as $d){ 
                  ?>
                <tr>
                  <th scope="row"><?php echo $no++; ?></th>
                  <td><?php echo $this->m_master->getProdiByID($d->prodiID)->nama_prodi ?></td>
                  <td><?php echo $d->noAdmin ?></td>
                </tr>
              <?php } ?>
              </tbody>
            </table>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
        </div>
      </div>
    </div>
  </div>
</html>

 <!-- DataTables -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/datatables.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/datatables.min.css">
<script type="text/javascript" charset="utf8" src="<?php echo base_url(); ?>assets/DataTables/datatables.js"></script>
    
<script type="text/javascript">
   $(document).ready( function () {
    $('#myTable').DataTable(
        {
        "ordering": false,
    }
      );
  } );
</script>