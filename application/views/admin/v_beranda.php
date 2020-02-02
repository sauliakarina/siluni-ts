  <script src="<?php echo base_url('assets/template/vendor') ?>/chart.js/Chart.js"></script>
  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Beranda</h2>
            </div>
          </header>
  <?php echo $this->session->flashdata('edit_pass'); 

$lulusan2017 = $this->m_hasil->getJumlahLulusanTahun('2017');
$lulusan2018 = $this->m_hasil->getJumlahLulusanTahun('2018');
$lulusan2019 = $this->m_hasil->getJumlahLulusanTahun('2019');
  ?>
          
           <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-violet"><i class="icon-user"></i></div>
                    <?php 
                    $newPengguna = $this->m_master->getPenggunaByProdiSeen('0',$this->session->userdata('prodiID')); 
                    $allPengguna = $this->m_master->countAllPengguna($this->session->userdata('prodiID'));
                    ?>
                    <a href="<?php echo site_url('admin/Pengguna/getNewPengguna/') ?>">
                      <div class="title"><span>Link Kuesioner<br>Pengguna Alumni</span></div>
                    <div class="number" style="color: green;"><strong>
                      <?php if ($newPengguna != 0) { ?>
                      <span class="badge badge-pill badge-danger" style="width: 60px; height: 30px"><p style="font-size: 15px">New</p></span>
                      <?php } else { 
                        echo $allPengguna;
                      }?>
                    </strong>
                    </a>
                  </div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-red"><i class="icon-padnote"></i></div>
                    <div class="title"><span>Kuesioner<br>Alumni</span>
                    </div>
                    <a href="<?php echo site_url('admin/Kuesioner/jawabanKuesionerAlumni/') ?>">
                    <div class="number" style="color: green;"><strong><?php echo $this->m_hasil->getCountKuesioner('alumni',$this->session->userdata('prodiID')); ?></strong></div></a>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-4 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <div class="icon bg-green"><i class="icon-bill"></i></div>
                    <div class="title"><span>Kuesioner<br>Pengguna Alumni</span>
                    </div>
                    <a href="<?php echo site_url('admin/Kuesioner/jawabanKuesionerPengguna/') ?>">
                    <div class="number" style="color: green;"><strong><?php echo $this->m_hasil->getCountKuesioner('pengguna', $this->session->userdata('prodiID')); ?></strong></div>
                  </a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">

                <?php if ($this->session->userdata('prodiID') == '1') { ?>
                <div class="chart col-lg-12 col-12">
                  <!-- Bar Chart   -->
                   <div  class="bar-chart has-shadow bg-white">
                    <canvas id="myChart"></canvas>
                  </div>
                </div>
              <?php } ?>
                <!-- Statistics -->
                <div class="statistics col-lg-3 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><div class="icon bg-green"><i class="icon-user"></i></div></div>
                    <div class="text"><strong><?php 
                    echo count($this->m_master->getAlumniByProdiID($this->session->userdata('prodiID')));
                     ?></strong><br><small>Jumlah Alumni</small></div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Projects Section-->
          <section class="projects no-padding-top">
            <div class="container-fluid">
              <div class="chart col-lg-12 col-12">
                  <!-- Bar Chart   -->
                   <div  class="bar-chart has-shadow bg-white">
                    <canvas id="chartJumlah"></canvas>
                  </div>
                </div>
            </div>
          </section>
          <!-- page footer -->

  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Selaras", "Tidak Selaras"],
        datasets: [{
          label: 'Keselarasan Horizontal',
          data: [
          <?php echo $selarasHorizontal  ?>,
          <?php echo $tidakSelarasHorizontal ?>
          ],
          backgroundColor: [
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          ],
          borderColor: [
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>

  <script>
    var ctx = document.getElementById("chartJumlah").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["2017", "2018", "2019"],
        datasets: [{
          label: 'Jumlah Lulusan',
          data: [
          <?php echo $lulusan2017  ?>,
          <?php echo $lulusan2018 ?>,
          <?php echo $lulusan2019 ?>
          ],
          backgroundColor: [
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          ],
          borderColor: [
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          ],
          borderWidth: 1
        }]
      },
      options: {
        scales: {
          yAxes: [{
            ticks: {
              beginAtZero:true
            }
          }]
        }
      }
    });
  </script>
  </body>
</html>