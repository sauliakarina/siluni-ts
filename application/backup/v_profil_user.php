
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
                       
                  
                       <?php /*if ($u->tampil_alamat == 'yes') {
                              echo "<tr style='height: 40px'>
                                   <td><b>Alamat</b></td>";
                              if (isset($u->alamat)) {
                                  echo "<td>$u->alamat</td>"; 
                                  } else {
                                    echo "<td><p style='color: red;'><i>belum diisi</i></p></td>";
                                    }
                              echo"</tr>";
                                  
                       }*/  ?>
                       
                       
                       <?php if ($u->tampil_pekerjaan == 'yes') {
                                  echo "<tr style='height: 40px'>
                                       <td><b>Pekerjaan Saat Ini</b></td>";
                                       if (isset($u->pekerjaan)) {
                                      echo "<td>$u->pekerjaan</td>"; 
                                      } else {
                                        echo "<td><p style='color: red;'><i>belum diisi</i></p></td>";
                                        }
                                  echo"</tr>";
                                       
                           }  
                  
                          /*if ($u->tampil_waktu_kerja == 'yes') {
                              echo "<tr style='height: 40px'>
                                   <td><b>Waktu Tunggu Kerja</b></td>";
                                   if (isset($u->waktu_tunggu)) {
                                  echo "<td>$u->waktu_tunggu</td>"; 
                                  } else {
                                    echo "<td><p style='color: red;'><i>belum diisi</i></p></td>";
                                    }
                              echo"</tr>";
                                   
                       } */ 
                  
                       /*if ($u->tampil_gaji == 'yes') {
                              echo "<tr style='height: 40px'>
                                   <td><b>Penghasilan</b></td>";
                                    if (isset($u->gaji) and $u->gaji != '') {
                                  echo "<td>Rp $u->gaji</td>"; 
                                  } else {
                                    echo "<td><p style='color: red;'><i>belum diisi</i></p></td>";
                                    }
                              echo"</tr>";
                       }  */
                  
                  
                  
                       ?>
                  
                       <?php
                        if ($u->tampil_ipk == 'yes') {
                              echo "<tr style='height: 40px'>
                                   <td><b>Indeks Prestasi Akademik</b></td>";
                                    if (isset($u->ipk)) {
                                  echo "<td>$u->ipk</td>"; 
                                  } else {
                                    echo "<td><p style='color: red;'><i>belum diisi</i></p></td>";
                                    }
                              echo"</tr>";
                       }  
                  
                        /*if ($u->tampil_waktu_skripsi == 'yes') {
                              echo "<tr style='height: 40px'>
                                   <td><b>Waktu Mengerjakan Skripsi</b></td>";
                                    if (isset($u->waktu_skripsi)) {
                                  echo "<td>$u->waktu_skripsi</td>"; 
                                  } else {
                                    echo "<td><p style='color: red;'><i>belum diisi</i></p></td>";
                                    }
                              echo"</tr>";
                       }  */
                  
                         echo " <tr style='height: 40px'>
                               <td><b>Alamat Email</b></td>";
                          if (!$u->email=='') {
                               echo "<td>$u->email</td>"; 
                              } else {
                                    echo "<td><p style='color: red;'><i>belum diisi</i></p></td>";
                                    }
                              echo"</tr>";
                       
                  
                      /*if ($u->tampil_telpon == 'yes') {
                              echo "<tr style='height: 40px'>
                                   <td><b>No Telepon/HP</b></td>";
                                    if (isset($u->no_telpon)) {
                                  echo "<td>$u->no_telpon</td>"; 
                                  } else {
                                    echo "<td><p style='color: red;'><i>belum diisi</i></p></td>";
                                    }
                              echo"</tr>";
                       }  */
                        
                    
                    
                      ?>
                  
                       <tr>
                         <td><div align='center' style='margin-bottom: 30px;margin-top: 40px'>
                          <form method='' action="<?php echo base_url('pencarian_alumni/index'); ?>">
                         <button style="background-color: #4C934C" class='btn' id='submit-buttons' type='submit'> <i class="fa fa-chevron-left" aria-hidden="true" style="margin-right: 10px"></i> Kembali</button>
                       </form>
                       </div></td>
                     </tr>
                                </table>
              </div>
          </div>
          <!--/.Card-->

            
        </div><!-- col-12 -->
    </div> <!-- row -->
  </div><!-- container -->

</body>