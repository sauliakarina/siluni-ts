  <script src="<?php echo base_url('assets/template/vendor') ?>/chart.js/Chart.js"></script>
  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Laporan</h2>
            </div>
          </header>
           <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('Laporan') ?>">Laporan</a></li>
              <li class="breadcrumb-item">Hasil</li>
            </ul>
          </div>

           <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Cara Memperoleh Pekerjaan</h3>
                      <button type="button" class="btn btn-success btn-sm ml-auto" style="float: right;"><i class="fas fa-cloud-download-alt"></i> Export</button>
                    </div>
                    <div class="card-body">
                      <div class="row">
                      <div class="chart col-lg-6 col-sm-12">
                        <!-- Bar Chart   -->
                         <div  class="bar-chart has-shadow bg-white">
                          <canvas id="chartBar"></canvas>
                        </div>
                      </div>
                      <div class="chart col-lg-6 col-sm-12">
                        <!-- Bar Chart   -->
                         <div  class="bar-chart has-shadow bg-white">
                          <canvas id="chartPie"></canvas>
                        </div>
                      </div>
                      </div>
                      <div class="row" style="margin-top: 20px" >
                        <div class="table-responsive col-lg-12" >                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>Nama</th>
                              <th>Nim</th>
                              <th>Tahun Lulus</th>
                              <th>Jawaban</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>Saulia Karina</td>
                              <td>31451538511</td>
                              <td>2018</td>
                              <td></td>
                              
                            </tr>
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
    var ctx = document.getElementById("chartBar").getContext('2d');
    var chartBar = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["2017", "2018", "2019"],
        datasets: [{
          label: 'Statistik Lulusan Ilmu Komputer',
          data: [2, 15, 10],
          backgroundColor: [
          'rgba(153, 102, 255, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          ],
          borderColor: [
          'rgba(153, 102, 255, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
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

     var ctx = document.getElementById("chartPie").getContext('2d');
    var chartPie = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["2017", "2018", "2019"],
        datasets: [{
          label: 'Statistik Lulusan Ilmu Komputer',
          data: [2, 15, 10],
          backgroundColor: [
          'rgba(153, 102, 255, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          ],
          borderColor: [
          'rgba(153, 102, 255, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(255, 206, 86, 1)',
          'rgba(75, 192, 192, 1)',
          'rgba(153, 102, 255, 1)',
          'rgba(255, 159, 64, 1)'
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