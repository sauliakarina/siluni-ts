
  <main>
    <div class="container">
      <div class="row" style="margin-top: 30px">
        <div class="col-md-6">
          <!--Panel-->
          <div class="card card-body" align="center">
              <h4 class="card-title"><b>Pencarian Alumni</b></h4>
              <div class="card-text">
                <div class="col-xs-5" style="margin-top: 10px; margin-bottom: 5px">
                  <form class="" action="<?php echo base_url().'pencarian_alumni/cari_alumni'; ?>" method="post">
                  <input type="text" class="form-control" placeholder="Nama alumni" name="search" value="">
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
                        <i class="fa fa-search" aria-hidden="true" style="margin-right: 10px"></i> Cari Alumni
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
                <th>NIM</th>
                <th>Nama</th>
                <th>Tahun Masuk</th>
                <th>Bulan & Tahun Lulus</th>
                <th>Prodi</th>
                <th>Aksi</th>
              </tr>
            </thead>
           
            <tbody>
               <?php foreach ($alumni as $u) { ?>
              <tr>
                <td><?php echo $u->nim ?></td>
                <td><?php echo $u->nama; ?></td>
                <td><?php echo $u->tahun_masuk; ?></td>
                <td><?php echo $u->bulan_lulus; ?> <?php echo $u->tahun_lulus; ?></td>
                <td><?php echo $this->m_master->getProdiByID($this->m_master->getUserByuserID($u->userID)->prodiID)->nama_prodi;
                  ?></td>
                <td><?php echo anchor('pencarian_alumni/tampil/'.$u->id,'Lihat Profil'); ?> </td>
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

   $('#example').dataTable({
    "ordering": false
  });
    </script>
  </main>
</body>