<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/buttons.dataTables.min.css">
<script src="<?php echo base_url(); ?>assets/DataTables/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/buttons.flash.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/jszip.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/buttons.html5.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/buttons.print.min.js" ></script>
<script src="<?php echo base_url('assets/template/vendor') ?>/chart.js/Chart.js"></script>
  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Laporan</h2>
            </div>
          </header>


  <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4"><?php if ($pertanyaan == 'toefl') {
                        echo "Toefl Kelulusan";
                      } else {
                        echo "IPK Kelulusan";
                        }?></h3>
                    </div>
                    <div class="card-body">
                      <div class="row" style="margin-top: 20px" >
                        <div class="table-responsive col-lg-12" >                       
                        <table id="myTable" class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>Nama</th>
                              <th>Nim</th>
                              <th>Tahun Lulus</th>
                              <th>Jawaban</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($tabel as $t) { ?>
                            <tr>
                              <td><?php echo $t->nama; ?></td>
                              <td><?php echo $t->nim; ?></td>
                              <td><?php echo $t->tahun_lulus; ?></td>
                              <td><?php if ($pertanyaan == 'toefl') {
                                echo $t->toefl;
                              } else {
                                echo $t->ipk;
                              } ?></td>
                            </tr>
                          <?php } ?>
                          </tbody>
                        </table>
                      </div>
                      </div> <!-- row tabel -->
                      
                    </div>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
          </section>


          <!-- Projects Section-->
          <section class="projects no-padding-top">
            <div class="container-fluid">
            </div>
          </section>
          <!-- page footer -->

    <script>
         $(document).ready( function () {
          $('#myTable').DataTable({
              "ordering": false,
              "select": true,
              dom: 'Bfrtip',
              buttons: [
                  'copy', 'excel', 'print'
              ]
            }); //input fungsi
        });
     </script>

  </body>
</html>