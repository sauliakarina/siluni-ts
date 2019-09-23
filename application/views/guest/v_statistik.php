  <script src="<?php echo base_url('assets/template/vendor') ?>/chart.js/Chart.js"></script>
  <main>
    <div class="container">
      <div class="row" style="margin-top: 30px">
        <div class="col-md-12">
               <h4>Hasil Tracer Study Ilmu Komputer</h4>
      </div><!-- col-12 -->
    </div> <!-- row -->
<!--       <div class="row" style="margin-top: 40px">
  <div class="col-md-12">
    <div class="card">
      <center><h4 style="margin-top: 20px">Statistik Alumni</h4></center>
    <div class="card-body">
      <div class="row">
        
      jenis instansi
      <div class="col-md-6"> <div  class="bar-chart has-shadow bg-white">
              <canvas id="myChart"></canvas>
            </div></div>

        <div class="col-md-6">
             Bar Chart Gaji
        <div  class="bar-chart has-shadow bg-white">
              <canvas id="chartPie"></canvas>
                  </div>
        </div>
      </div>
    </div>
  </div>
  </div>col-12

</div> row -->
      <div class="row" style="margin-top: 40px">
        <div class="col-md-12">
          <div class="card">
            <center><h4 style="margin-top: 20px">Statistik Alumni</h4></center>
          <div class="card-body">
            <div class="row">
              <div class="col-md-2"></div>
            <div class="col-md-8"> <div  class="bar-chart has-shadow bg-white">
                    <canvas id="myChart"></canvas>
                  </div></div>
            </div>
            <div class="col-md-2"></div>
            <div class="row"  style="margin-top: 60px">
               <div class="col-md-2"></div>
              <div class="col-md-8">
                   <!-- Bar Chart   -->
             <div  class="bar-chart has-shadow bg-white">
                    <canvas id="chartPie"></canvas>
                        </div>
              </div>
               <div class="col-md-2"></div>
            </div>

            <div class="row"  style="margin-top: 60px">
               <div class="col-md-2"></div>
              <div class="col-md-8">
                <div  class="bar-chart has-shadow bg-white">
                    <canvas id="profilChart"></canvas>
                  </div>
              </div>
               <div class="col-md-2"></div>
            </div>
          </div>
        </div>
        </div><!-- col-12 -->
        
      </div> <!-- row -->
    </div><!-- Container -->
    <script>
      $(document).ready(function(){
    $('#example').DataTable();
});

    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Lokal", "Nasional", "Internasional"],
        datasets: [{
          label: 'Jenis Instansi',
          data: [8, 15, 12],
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

     var ctx = document.getElementById("chartPie").getContext('2d');
    var chartPie = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["1-3 jt", "4-7 jt", "8-12 jt", "12 jt"],
        datasets: [{
          label: 'Rata=rata Penghasilan Alumni',
          data: [4, 15, 8, 5],
          backgroundColor: [
          'rgba(153, 102, 255, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(55, 181, 94, 1)',
          ],
          borderColor: [
          'rgba(153, 102, 255, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
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

     $(document).ready(function(){
    $('#example').DataTable();
});


    var ctx = document.getElementById("penggunaPuasPie").getContext('2d');
    var chartPie = new Chart(ctx, {
      type: 'pie',
      data: {
        labels: ["Tidak Puas", "Cukup Puas", "Puas", "Sangat Puas"],
        datasets: [{
          label: 'Rata=rata Penghasilan Alumni',
          data: [1, 2, 20, 15],
          backgroundColor: [
          'rgba(153, 102, 255, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          ],
          borderColor: [
          'rgba(153, 102, 255, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
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

     $(document).ready(function(){
    $('#example').DataTable();
});

      var ctx = document.getElementById("penggunaKompetensiBar").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Integritas", "Profesionalisme", "Bahasa Inggris", "Penggunaan Teknologi", "Komunikasi", "Kerjasama", "Pengembangan Diri"],
        datasets: [{
          label: 'Penilaian Pengguna Terhadap Skill Lulusan',
          data: [80, 85, 70, 90, 60, 50, 65],
          backgroundColor: [
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          ],
          borderColor: [
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
          'rgba(55, 181, 94, 1)',
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
  </main>
</body>