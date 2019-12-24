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
  if ($pertanyaan == 'gaji' && $tahun_lulus == '') {
    $tipe1 = $this->m_hasil->getFirstGaji('1-5 juta', $prodiID);//< 1jt
    $tipe2 = $this->m_hasil->getFirstGaji('6-10 juta', $prodiID);//1jt - 2jt
    $tipe3 = $this->m_hasil->getFirstGaji('11-15 juta', $prodiID);//2jt - 3jt
    $tipe4 = $this->m_hasil->getFirstGaji('> 15 juta', $prodiID);//> 4jt
  } elseif ($pertanyaan == 'gaji' && $tahun_lulus != '') {
    $tipe1 = $this->m_hasil->getFirstGajiTahun('1-5 juta', $prodiID, $tahun_lulus);//< 1jt
    $tipe2 = $this->m_hasil->getFirstGajiTahun('6-10 juta', $prodiID, $tahun_lulus);//1jt - 2jt
    $tipe3 = $this->m_hasil->getFirstGajiTahun('11-15 juta', $prodiID, $tahun_lulus);//2jt - 3jt
    $tipe4 = $this->m_hasil->getFirstGajiTahun('> 15 juta', $prodiID, $tahun_lulus);//> 4jt
  }
 ?>
  <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4"><?php if ($pertanyaan == 'toefl') {
                        echo "Toefl Kelulusan";
                      } elseif($pertanyaan == 'ipk') {
                        echo "IPK Kelulusan";
                        } elseif($pertanyaan == 'gaji') {
                          echo "Penghasilan Pertama";
                        }?></h3>
                    </div>
                    <div class="card-body">
                      <?php if ($pertanyaan == 'gaji') {?>
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
                              } elseif ($pertanyaan == 'ipk') {
                                echo $t->ipk;
                              } else {
                                echo $t->gaji;
                              }?></td>
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
          text: 'Penghasilan Pertama'
         },
         xAxis: {
          categories: ["1-5 juta", "6-10 juta", "11-15 juta", "> 15 juta"],
          labels: {
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
           'data': [<?php echo $tipe1 ?>, <?php echo $tipe2 ?>, <?php echo $tipe3 ?>, <?php echo $tipe4 ?>]
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
        text: 'Penghasilan Pertama'
       },
       xAxis: {
        categories: ["1-5 juta", "6-10 juta", "11-15 juta", "> 15 juta"],
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
         'data': [ ["1-5 juta", <?php echo $tipe1 ?>], ["6-10 juta", <?php echo $tipe2 ?>], ["11-15 juta", <?php echo $tipe3 ?>], ["> 15 juta", <?php echo $tipe4 ?>]
         ]
       }]
            });
   
    </script>

  </body>
</html>