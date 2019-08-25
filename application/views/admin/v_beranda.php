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
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">

                <div class="chart col-lg-12 col-12">
                  <!-- Bar Chart   -->
                   <div  class="bar-chart has-shadow bg-white">
                    <canvas id="myChart"></canvas>
                  </div>
                </div>

                <!-- Statistics -->
                <div class="statistics col-lg-3 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-red"><div class="icon bg-green"><i class="icon-user"></i></div></div>
                    <div class="text"><strong>234</strong><br><small>Jumlah Alumni</small></div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- Projects Section-->
          <section class="projects no-padding-top">
            <div class="container-fluid">
            </div>
          </section>
          <!-- page footer -->

  <script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["2017", "2018", "2019"],
        datasets: [{
          label: 'Statistik Lulusan Ilmu Komputer',
          data: [2, 15, 10],
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