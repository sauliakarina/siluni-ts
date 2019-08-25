
  <main>
    <div class="container">
      <div class="row" style="margin-top: 30px">
        <div class="col-md-6">
          <!--Panel-->
          <div class="card card-body" align="center">
              <h4 class="card-title"><b>Pencarian Dosen</b></h4>
              <div class="card-text">
                <div class="col-xs-5" style="margin-top: 10px; margin-bottom: 5px">
                  <form class="" action="<?php echo base_url().'pencarian_dosen/cari_dosen'; ?>" method="post">
                  <input type="text" class="form-control" placeholder="Nama dosen" name="search" value="">
                  <span class="help-block" style="color: red"> <?php $error = form_error('search');
                    echo "<font style='color: red;font-size: 100px' >$error</font>";?></span>
                
                </div><!-- nama input -->
                <div class="col-xs-3" style="margin-top: 20px; margin-bottom: 5px">
                  <select class="form-control" name="prodi">
                    <option value="">Pilih Program Studi</option>
                    <?php foreach($prodi as $u){ 
                   echo "<option  value='$u->id'>$u->nama_prodi</option>";
                    }?>
                </select>
                  <span class="help-block" style="color: red"> <?php $error = form_error('prodi');
                    echo "<font style='color: red;font-size: 100px' >$error</font>";?></span>
                </div><!-- prodi -->
              </div><!-- panel content -->
              <div class="flex-row" align="right">
                <button type="submit" class="btn btn-info" name="submit" style="background-color: #4C934C!important; margin-left: 18px; margin-top: 10px" >
                        <i class="fa fa-search" aria-hidden="true" style="margin-right: 10px"></i> Cari Dosen
                         </button>
              </div>
               </form>
          </div>
          <!--/.Panel-->
               
      </div><!-- col-12 -->
    </div> <!-- row -->
      <div class="row" style="margin-top: 40px">
        <div class="col-md-12">
          <table id="example" class="table table-hover table-responsive">
            <thead class="white-text" style="background-color:#006F45 ">
              <tr>
                <th>NIDN</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Email</th>
                <!-- <th>No telepon/HP</th> -->
                <th>Aksi</th>
              </tr>
            </thead>
           
            <tbody>
               <?php foreach ($dosen as $u) { 
                  //$nidn = echo $u->$nidn;
                ?>

              <tr>
                <td><?php 
                    $nodosen = $u->nidn;
                echo $nodosen; ?></td>
                <td><?php echo $u->nama; ?></td>
                <td><?php echo $this->m_data->get_t_prodi($this->m_data->getUserByID($u->userID)->prodiID)->nama_prodi ?></td>
                <td><?php if (isset($u->email) and $u->email !='') {
                  echo $u->email;
                } else {
                  echo"<p style='color:red'><i>belum diisi</i></p>";
                }

               ?></td>
                <td><?php echo anchor('http://sidos.unj.ac.id/view/'.$nodosen,'Lihat Profil Lengkap'); ?> </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <div align="right"><?php
            //echo $links 
          ?></div>
        </div><!-- col-12 -->
      </div> <!-- row -->
    </div><!-- Container -->
    <script>
      $(document).ready(function(){
    $('#example').DataTable();
});

   $('#example').dataTable({"searching":false});
    </script>
  </main>
</body>