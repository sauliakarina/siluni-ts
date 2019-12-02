
    <div class="container">
     <div class="row" style="margin-top: 30px">
        <div class="col-md-12" align="center">

          <!--Card-->
          <div class="card testimonial-card" align="center">

              <!--Bacground color-->
              <div class="card-up indigo lighten-1">
              </div>
              <!--Avatar-->
              <?php foreach( $alumni as $u){ ?>
              <div class="avatar"><img src="<?php echo base_url();?>/assets/siluni/images/default/default.png" width="15%" align="center" style="border-radius: 50%" class="rounded">
              </div>

              <div class="card-body">
                  <!--Name-->
                   
                  <h4 class="card-title"><?php echo $u->nama ?></h4>
                  <hr>
                  <div class="row">
                    <div class="col-md-12">
                      <!--Quotation-->
                      <table  style="font-size: 15px; margin-top: 30px; width: 500" align="center">
                         <tr style="height: 40px">
                           <td width="170px"><b>NIM</b></td>
                           <td width="250px"><?php echo $u->nim ?></td>
                         </tr>
                         <tr style="height: 40px">
                           <td width="170px"><b>Program Studi</b></td>
                           <td width="250px"><?php echo $this->m_master->getProdiByID($this->m_master->getUserByuserID($u->userID)->prodiID)->nama_prodi; ?></td>
                           </tr>
                           <tr style="height: 40px">
                             <td><b>Tahun Masuk</b></td>
                             <td><?php echo $u->tahun_masuk ?></td>
                             </tr>
                             <tr style="height: 40px">
                             <td><b>Tahun Lulus</b></td>
                             <td><?php echo $u->tahun_lulus ?></td>
                           </tr>
                            <?php }?>
                         
                            <tr style="height: 40px">
                           <td width=170px><b>Jenis Kelamin</b></td>
                           <td width="250px"><?php if(isset($u->jenis_kelamin)) {
                            echo $u->jenis_kelamin; }else{
                            echo "<p style='color: red;'><i>belum diisi</i></p>";
                           } ?></td>
                           </tr>

                           <tr style="height: 40px">
                           <td width=170px><b>Tempat Lahir</b></td>
                           <td width="250px"><?php if(isset($u->tempat_lahir)) {
                            echo $u->tempat_lahir; }else{
                            echo "<p style='color: red;'><i>belum diisi</i></p>";
                           } ?></td>
                           </tr>

                           <tr style="height: 40px">
                           <td width=170px><b>Tanggal Lahir</b></td>
                           <td width="250px"><?php if(isset($u->tanggal_lahir)) {
                            echo $u->tanggal_lahir; }else{
                            echo "<p style='color: red;'><i>belum diisi</i></p>";
                           } ?></td>
                           </tr>

                          <tr style="height: 40px">
                           <td width=170px><b>Email</b></td>
                           <td width="250px"><?php if(isset($u->email)) {
                            echo $u->email; } ?></td>
                           </tr>
              
                           <!-- <tr>
                             <td><div align='center' style='margin-bottom: 30px;margin-top: 40px'>
                              <form method='' action="<?php echo base_url('pencarian_alumni/index'); ?>">
                             <button style="background-color: #4C934C" class='btn' id='submit-buttons' type='submit'> <i class="fa fa-chevron-left" aria-hidden="true" style="margin-right: 10px"></i> Kembali</button>
                           </form>
                           </div></td>
                         </tr> -->
                      </table>
                    </div>
                  </div> <!-- row -->
                   <div class="row" style="margin-top: 30px">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <h5>Riwayat Pekerjaan Alumni</h5>
                       <div class="table-responsive">                       
                        <table class="table table-striped table-hover table-bordered">
                         <thead>
                            <tr>
                            <th>No</th>
                            <th>Instansi</th>
                            <th>Posisi</th>
                            <th>Periode Kerja</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                              $no = 1;
                              foreach($pekerjaan as $r){ 
                              ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $this->m_master->getInstansiByID($r->id_instansi)->nama_instansi ?></td>
                              <td><?php echo $r->posisi ?></td>
                              <td><?php echo $r->periode_kerja ?></td>
                            </tr>
                          <?php } ?>
                          </tbody>
                           </table>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                  </div> <!-- row -->
              </div>
          </div>
          <!--/.Card-->

            
        </div><!-- col-12 -->
    </div> <!-- row -->
  </div><!-- container -->

</body>