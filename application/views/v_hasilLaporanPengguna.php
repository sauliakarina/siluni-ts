<?php error_reporting(0); ?>
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

          <?php if($pertanyaan->jenis == 'pilihan' || $pertanyaan->jenis == 'ganda'){ ?>
                    <?php 
                    if(count($grafik)>0){
                      foreach ($grafik as $result) {
                        $label[] = $result->pilihan;
                        $jumlah[] = (float) $result->num;
                      }
                    }else{ ?>
                         <!-- alert box -->
                          <div class="alert alert-info alert-dismissible" role="alert">
                          <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                          <strong><i class="fa fa-warning"></i> Perhatian!</strong> <p style="font-family: verdana; font-size: 11pt">Belum ada data yang masuk</p>
                        </div>
                  <?php }
                } ?>

  <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4"><?php echo $pertanyaan->pertanyaan ?></h3>
                    </div>
                    <div class="card-body">
                      <?php if ($pertanyaan->jenis == 'pilihan' || $pertanyaan->jenis == 'ganda') {?>
                      <div class="row">
                      <div class="chart col-lg-6 col-sm-12">
                        <!-- Bar Chart   -->
                         <div id="chart"></div>
                      </div>
                      <div class="chart col-lg-6 col-sm-12">
                        <!-- Bar Chart   -->
                         <div id="chart1"></div>
                      </div>
                      </div>
                    <?php } ?>
                    <div class="row">
                      <?php 
                      $jumlahPilihan = $this->m_kuesioner->getPilihanJawabanByPertanyaanID($pertanyaan->id);
                      $json = json_encode($label);
                      $json = json_decode($json , true);
                      for ($i=count($jumlahPilihan); $i <count($json); $i++) { 
                        $labelVer2[] = $json[$i];
                      }
                      ?>
                    </div>
                      <div class="row" style="margin-top: 20px" >
                        <div class="table-responsive col-lg-12" >                       
                        <table id="myTable" class="table table-striped table-hover">
                          <thead>
                            <tr>
                             <th>No</th>
                              <th>Nama Pengguna Alumni</th>
                              <th>Divisi</th>
                              <th>Instansi</th>
                              <th>Jawaban</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $no = 1;
                            foreach ($tabel as $t) { ?>
                            <tr>
                              <td><?php echo $no++; ?></td>
                              <td><?php echo $t->pengguna_nama; ?></td>
                              <td><?php echo $t->divisi; ?></td>
                              <td>
                                <?php if ($t->id_instansi == '0') {
                                echo "Non Instansi";
                                } else {echo $this->m_master->getInstansiByID($t->id_instansi)->nama_instansi;
                                } ?>
                              </td>
                              <td><?php 
                                $jawaban = $this->m_hasil->getJawabanByPenggunaPertanyaan($t->id, $t->pertanyaanID);
                                foreach ($jawaban as $j) {
                                   echo $j->jawaban."<br>";
                                 }
                               ?></td>
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

<!-- Tambahkan custom js disini -->
    <script type="text/javascript" src="<?php echo base_url('assets/highcharts/highcharts.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/highcharts/themes/skies.js'); ?>"></script>

    <script>
         $(document).ready( function () {
          $('#myTable').DataTable({
              "ordering": false,
              "select": true,
              dom: 'Bfrtip',
              buttons: [
                  'copy', 'excel'
              ]
            }); //input fungsi
        });
     </script>

    <script type="text/javascript">
    jQuery(function(){
      new Highcharts.Chart({
        chart: {
          renderTo : 'chart',
          type: 'column',
          marginTop: 80,
        },
        credits: {
          enabled: false
         }, 
         tooltip: {
          //pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
         },
         title: {
          text: 'Hasil Tracer Study'
         },
         subtitle: {
          text: '<?php echo $pertanyaan->pertanyaan; ?>'
         },
         xAxis: {
          categories: <?php echo json_encode($labelVer2);?>,
          labels: {
            enabled: false
          }
         },
         yAxis: {
          title: {
            text: 'Jumlah'
          },
        },
        legend: {
          enabled: true
         },
         plotOptions: {
           pie: {
             allowPointSelect: true,
             cursor: 'pointer',
             dataLabels: {
               enabled: false
             },
             showInLegend: true
           }
         },
         series: [{
           'name':'Hasil',
           'data': <?php echo json_encode($jumlah);?>
         }]
       });
      });

    new Highcharts.Chart({
            chart: {
              renderTo : 'chart1',
              type: 'pie',
              marginTop: 80,
            },
       credits: {
        enabled: false
       }, 
       tooltip: {
        //pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
       },
       title: {
        text: 'Hasil Tracer Study'
       },
       subtitle: {
        text: '<?php echo $pertanyaan->pertanyaan;?>'
       },
       xAxis: {
        categories: <?php echo json_encode($label);?>,
        labels: {
         style: {
          fontSize: '10px',
          fontFamily: 'Verdana, sans-serif'
         }
        }
       },
       legend: {
        enabled: true
       },
       plotOptions: {
         pie: {
           allowPointSelect: true,
           cursor: 'pointer',
           dataLabels: {
             enabled: false
           },
           showInLegend: true
         },
          series: {
            dataLabels: {
              enabled: true,
              formatter: function() {
                return Math.round(this.percentage*100)/100 + ' %';
              },
              distance: -30,
              color:'white'
            }
          }
       },
       series: [{
         'name':'Hasil',
         'data':[
           <?php 
            // data yang diambil dari database
            if(count($grafik)>0)
            {
             foreach ($grafik as $informasi) {
              echo "['" .$informasi->pilihan . "'," . $informasi->num ."],\n";
             }
            }
          ?>
         ]
       }]
            });
    </script>

  </body>
</html>