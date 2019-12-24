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

<?php 
if ($tahun_lulus == "") {
  $skalaNilai = $this->m_hasil->getJawabanSkala($pertanyaanID, $prodiID);
  $tabel = $this->m_hasil->getJawabanByPertanyaanSkalaID($pertanyaanSkalaID);
} else {
  $skalaNilai = $this->m_hasil->getJawabanSkalaTahun($pertanyaanID, $prodiID, $tahun_lulus);
  $tabel = $this->m_hasil->getJawabanByPertanyaanSkalaTahun($pertanyaanSkalaID, $tahun_lulus);
}
  $rendah = 0;
  $sedang = 0;
  $tinggi = 0;

  foreach ($skalaNilai as $s ) {
    if ($s->jawaban == '1' || $s->jawaban == '2') {
      $rendah++;
    } elseif ($s->jawaban == '3') {
      $sedang++;
    } elseif ($s->jawaban == '4' || $s->jawaban == '5')  {
      $tinggi++;
    }
  }

 ?>

  <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4"><?php echo $pertanyaan->pertanyaan ?></h3>
                    </div>
                    <div class="card-body">
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
                    <div class="row">
                    </div>
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
                              <td><?php 
                                $jawaban = $this->m_hasil->getJawabanByAlumniPertanyaanSkala($t->alumniID, $t->pertanyaanSkalaID);
                                foreach ($jawaban as $j) {
                                  if ($j->jawaban == '1' || $j->jawaban == '2') {
                                    echo "Rendah"."<br>";
                                  }  elseif ($j->jawaban == '3') {
                                    echo "Sedang/Rata-rata"."<br>";
                                  } elseif ($j->jawaban == '4' || $j->jawaban == '5')  {
                                    echo "Tinggi"."<br>";
                                  }     
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
                  'copy', 'excel', 'print'
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
          text: '<?php echo $pertanyaanSkala->pertanyaan; ?>'
         },
         xAxis: {
          categories: ["Rendah", "Sedang/Rata-rata", "Tinggi"],
          labels: {
            enabled: true
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
           'data': [<?php echo $rendah; ?>, <?php echo $sedang; ?>, <?php echo $tinggi; ?>]
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
        text: '<?php echo $pertanyaanSkala->pertanyaan;?>'
       },
       xAxis: {
        categories: ["Rendah", "Sedang/Rata-rata", "Tinggi"],
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
         'data':[ ["Rendah", <?php echo $rendah; ?>], ["Sedang/Rata-rata", <?php echo $sedang; ?>], ["Tinggi", <?php echo $tinggi; ?>]
         ]
       }]
            });
    </script>

  </body>
</html>