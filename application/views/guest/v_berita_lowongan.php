<body>
  <main>
    <div class="container" style="margin-top: 30px">
      <h3><b>Berita Alumni - Lowongan Kerja</b></h3>
       <div class="row" style="margin-top: 15px" align="right">
        <div class="col-md-3">
          <?php ?>
        </div>
         <div class="col-md-3">
        </div> <!-- col 3 -->
        <div class="col-md-3">
        </div> <!-- col 3 -->
        <div class="col-md-3">
        
        </div> <!-- col-md-3 -->
      </div> <!-- row -->
      <div class="row" style="margin-top: 20px">
        <?php
        if ($berita == false) {
          echo "<div class='col-md-4'></div>";
          echo "<div class='col-md-4'><p style='font-size:25px;color:red' align='center'>Tidak ada info lowongan kerja</p></div>";
          echo "<div class='col-md-4'></div>";
        } else {
         foreach($berita as $u){ ?>
        <div class="col-md-4">
        <!--Card-->
          <div class="card" style="margin: 10px;max-height: 400px">

              <!--Card image-->
              <div class="view overlay hm-white-slight">
                  <img src="<?php echo base_url();?>/assets/siluni/images/berita/<?php echo $u->gambar_berita ?>" class="img-fluid" alt="" style="width:400px;height: 200px">
                  <a href="#">
                      <div class="mask"></div>
                  </a>
              </div>

              <!--Card content-->
              <div class="card-body">
                  <!--Title-->
                  <h4 class="card-title"><?php echo $u->judul ?></h4>
                  <!--Text-->
                  <p class="card-text" align="center">Oleh :  <?php if ($u->userID == '1' ) {
                      echo "Admin";
                    } else { echo $this->m_berita->get_alumni($u->userID)->nama; } ?> | Dipublikasikan pada <?php echo $u->tanggal_dibuat?> </p>
                  <form action="<?php echo base_url('berita_alumni/tampil_berita/'.$u->id); ?>">
                  <button class="btn btn-primary" style="background-color: #4C934C!important">Baca lebih lanjut</button>
                  </form>
              </div>
          </div> <!-- card -->
        </div><!-- col-16 -->
      <?php } 
    }?>
    </div> <!-- row -->
    <div align="right"><?php
            echo $links 
          ?></div>
    </div><!-- container -->
  </main>
</body>