  <script src="<?php echo base_url('assets/template/vendor') ?>/chart.js/Chart.js"></script>
  <main>
    <div class="container">
      <div class="row" style="margin-top: 30px">
        <div class="col-md-12">
               <h4>Data Tracer Study <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi; ?></h4>
      </div><!-- col-12 -->
    </div> <!-- row -->
<?php
//grafik skala instansi 
$instansiLokal =  $this->m_hasil->getSkalaInstansi('Lokal', $prodiID);
$instansiNasional = $this->m_hasil->getSkalaInstansi('Nasional', $prodiID);
$instansiInternasional = $this->m_hasil->getSkalaInstansi('Internasional', $prodiID);

//grafik first gaji
$tipe1 = $this->m_hasil->getFirstGaji('1-5 juta', $prodiID);//< 1jt
$tipe2 = $this->m_hasil->getFirstGaji('6-10 juta', $prodiID);//1jt - 2jt
$tipe3 = $this->m_hasil->getFirstGaji('11-15 juta', $prodiID);//2jt - 3jt
$tipe5 = $this->m_hasil->getFirstGaji('> 15 juta', $prodiID);//> 4jt


//grafik profil lulusan
$praktisi = $this->m_hasil->getProfilLulusan('Praktisi',$prodiID);
$konsultan = $this->m_hasil->getProfilLulusan('Konsultan',$prodiID);
$si = $this->m_hasil->getProfilLulusan('Perencana SI',$prodiID);
$jaringan = $this->m_hasil->getProfilLulusan('Penanggung Jawab Jaringan',$prodiID);
$programmer = $this->m_hasil->getProfilLulusan('Programmer',$prodiID);
$wirausahawan = $this->m_hasil->getProfilLulusan('Wirausahawan',$prodiID);
$peneliti = $this->m_hasil->getProfilLulusan('Peneliti',$prodiID);
$pendidik = $this->m_hasil->getProfilLulusan('Pendidik',$prodiID);


 ?>
      <div class="row" style="margin-top: 40px">
        <div class="col-md-12">
          <div class="card">
            <center><h4 style="margin-top: 20px"></h4></center>
          <div class="card-body">
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8"> 
                <center><h5><b>Skala Instansi</b></h5></center>
                <div  class="bar-chart has-shadow bg-white">
                      <canvas id="myChart"></canvas>
                    </div>
              </div>
            </div> <!-- row -->
            <div class="col-md-2"></div>
            <div class="row"  style="margin-top: 60px">
               <div class="col-md-2"></div>
                <div class="col-md-8">
                   <center><h5><b>Penghasilan Pertama</b></h5></center>
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
                <center><h5><b>Profil Lulusan</b></h5></center>
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
          label: '',
          data: [<?php echo $instansiLokal ?>, <?php echo $instansiNasional ?>, <?php echo $instansiInternasional?>],
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
        labels: ["1-5 juta", "6-10 juta", "11-15 juta", "> 15 juta"],
        datasets: [{
          label: 'Rata-rata Penghasilan Alumni',
          data: [<?php echo $tipe1 ?>, <?php echo $tipe2 ?>, <?php echo $tipe3 ?>, <?php echo $tipe4 ?>,<?php echo $tipe5 ?>],
          backgroundColor: [
          'rgba(153, 102, 255, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(218, 218, 21, 1)',
          'rgba(55, 181, 94, 1)',
          ],
          borderColor: [
          'rgba(153, 102, 255, 1)',
          'rgba(255, 99, 132, 1)',
          'rgba(54, 162, 235, 1)',
          'rgba(218, 218, 21, 1)',
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

    var ctx = document.getElementById("profilChart").getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ["Praktisi", "Konsultan", "Perencana SI", "Penanggung Jawab Jaringan", "Programmer", "Wirausahawan", "Peneliti", "Pendidik"],
        datasets: [{
          label: '',
          data: [<?php echo $praktisi ?>, <?php echo $konsultan ?>, <?php echo $si ?>, <?php echo $jaringan ?>, <?php echo $programmer ?>, <?php echo $wirausahawan ?>, <?php echo $peneliti ?>,  <?php echo $pendidik ?>],
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