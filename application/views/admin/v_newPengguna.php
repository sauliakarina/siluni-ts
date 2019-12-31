        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Pengguna Alumni</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Beranda">Beranda</a></li>
            </ul>
          </div>

           <!-- alert box -->
          <div class="alert alert-info alert-dismissible" role="alert">
          <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <strong><i class="fa fa-warning"></i> Perhatian!</strong> <p style="font-family: verdana; font-size: 11pt">Pengisian kuesioner untuk pengguna alumni dilakukan melalui link pada tabel dibawah ini, copy link tersebut kemudian kirimkan melalui email masing-masing pengguna dan untuk pengisian kuesioner bagi pengguna alumni yang belum terdaftar dilakukan melalui link berikut:</p> <button class="btn btn-sm btn-dark" onclick="copyFunction2()">Link Kuesioner Pengguna yang Belum Terdaftar</button>
          <input style="position: absolute; left: -1000px" type="text" value="http://localhost/siluni-ts/pengguna/Kuesioner/kuesionerPenggunaAlumni/<?php echo $prodiID ?>" id="myInput">
        </div>

          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <form method="post" action="<?php echo base_url(); ?>admin/Pengguna/updateTandai">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Pengguna Alumni Ilmu Komputer</h3>
                      <!-- <button type="button" class="btn btn-primary ml-auto btn-sm"><i class="fas fa-user-plus"></i> Tambah Data</button> -->
                        <button type="submit" class="btn btn-primary btn-sm ml-auto">Simpan</button>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table id="myTable" class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Divisi</th>
                              <th>Instansi</th>
                              <th>Email</th>
                              <th>No Telepon</th>
                              <th>Alumni</th>
                              <th>Link Kuesioner</th>
                              <th>Tandai</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                            $no = 1;
                            $i = 0; 
                            foreach (array_slice($pengguna, 0,$num) as $p) { ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $p->pengguna_nama ?></td>
                              <td><?php echo $p->divisi ?></td>
                              <td>
                                <?php if ($p->id_instansi == '0') {
                                echo "Non Instansi";
                                } else {echo $this->m_master->getInstansiByID($p->id_instansi)->nama_instansi;
                                } ?>
                              </td>
                              <td><?php echo $p->pengguna_email ?></td>
                              <td><?php echo $p->pengguna_telepon ?></td>
                               <td width="100px">
                                  <?php $newAlumni = $this->m_pengguna->getCountNewAlumniPengguna($p->id); ?>
                                    <a href="<?php echo base_url('admin/Pengguna/lihatAlumni/'.$p->id) ?>" class="btn btn-info btn-sm">
                                      Lihat <span class="badge badge-light" style="color: #E62004"><?php if($newAlumni != 0) {echo "+".$newAlumni;}  ?></span>
                                    </a>
                                </td>
                                <td>
                               <button type="button" class="btn btn-sm btn-outline-info" onclick="copyFunction(<?php echo $no ?>)">Copy</button>
                                <input style="position: absolute; left: -1000px" type="text" class="input-sm" value="http://localhost/siluni-ts/pengguna/Kuesioner/kuesionerInstansi/<?php echo $p->id ?>" id="myInput[<?php echo $no ?>]">
                              </td>
                              <td><div class="i-checks">
                              <input name="tandai<?php echo $p->id ?>" type="checkbox" <?php if ($p->tandai == 'checked') { echo 'checked=""'; } ?> value="checked" class="checkbox-template">
                              <input type="hidden" value="<?php echo $p->id ?>" name="penggunaID[<?php echo $i++; ?>]">
                            </div></td>
                             <td><span class="badge badge-pill badge-danger">New</span></td>
                            </tr>
                          <?php } ?>
                           <?php
                              foreach (array_slice($pengguna, $num) as $p) {
                               ?>
                              <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $p->pengguna_nama ?></td>
                                <td><?php echo $p->divisi ?></td>
                                <td>
                                  <?php if ($p->id_instansi == '0') {
                                  echo "Non Instansi";
                                  } else {echo $this->m_master->getInstansiByID($p->id_instansi)->nama_instansi;
                                  } ?>
                                </td>
                                <td><?php echo $p->pengguna_email ?></td>
                                <td><?php echo $p->pengguna_telepon ?></td>
                                <td width="100px">

                                    <?php $newAlumni = $this->m_pengguna->getCountNewAlumniPengguna($p->id); ?>
                                      <a href="<?php echo base_url('admin/Pengguna/lihatAlumni/'.$p->id) ?>" class="btn btn-info btn-sm">
                                        Lihat <span class="badge badge-light" style="color: #E62004"><?php if($newAlumni != 0) {echo "+".$newAlumni;}  ?></span>
                                      </a>
                                  </td>
                                  <td>
                                 <button type="button" class="btn btn-sm btn-outline-info" onclick="copyFunction(<?php echo $no ?>)">Copy</button>
                                  <input style="position: absolute; left: -1000px" type="text" class="input-sm" value="http://localhost/siluni-ts/pengguna/Kuesioner/kuesionerInstansi/<?php echo $p->id ?>" id="myInput[<?php echo $no ?>]">

                                </td>
                                <td>

                                  <div class="i-checks">
                                    <input name="tandai<?php echo $p->id ?>" type="checkbox" <?php if ($p->tandai == 'checked') { echo 'checked=""'; } ?> value="checked" class="checkbox-template">
                                    <input type="hidden" value="<?php echo $p->id ?>" name="penggunaID[<?php echo $i++; ?>]">
                                </div>

                              </td>
                              <td><?php if ($newAlumni != 0) { ?>
                                <span class="badge badge-pill badge-danger">New</span>
                                <?php } ?>
                              </td>
                              </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
          </section>


        
<script type="text/javascript">
  
  $(document).ready( function () {
  $('#myTable').DataTable(
      {
      "ordering": [[ 5, "asc" ]]
  }
    );
} );

function copyFunction(i) {

      var copyText = document.getElementById("myInput["+i+"]");
      copyText.select();
      copyText.setSelectionRange(0, 99999)
      document.execCommand("copy");
      alert("Copied the text: " + copyText.value);
}

function copyFunction2() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script>
