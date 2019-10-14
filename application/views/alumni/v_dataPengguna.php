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
              <li class="breadcrumb-item"><a href="index.html">Beranda</a></li>
              <li class="breadcrumb-item active">Data</li>
            </ul>
          </div>
          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Pengguna Alumni <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?></h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Instansi</th>
                              <th>Divisi</th>
                              <th>Email</th>
                              <th>Daftar Alumni</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $no = 1;
                              foreach($alumnipengguna as $d){ 
                             ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $d->pengguna_nama ?></td>
                              <td><?php echo $this->m_master->getInstansiByID($d->id_instansi)->nama_instansi ?></td>
                              <td><?php echo $this->m_master->getDivisiByID($d->id_divisi)->nama_divisi ?></td>
                              <td><?php echo $d->pengguna_email ?></td>
                              <td>
                                <button  onclick='alumni(<?php echo $d->id_pengguna ?>)' type="button" data-toggle="modal" data-target="#modalDetail" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i></button>
                              </td>
                            </tr>
                          <?php } ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div> <!-- row -->
            </div>
          </section>

<!-- Modal Detail-->
                      <div id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Alumni yang Bekerja pada Instansi</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <form class="form-horizontal">
                                <div class="form-group">
                                  <!-- <label class="form-control-label">Daftar Alumni</label> -->
                                     <p><b></b></p>
                                     <div class="table-responsive">                       
                                      <table class="table table-striped table-hover">
                                        <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Posisi</th>
                                            <th>Periode Kerja</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <th scope="row">1</th>
                                            <td>M Reyhan Fahlevi</td>
                                            <td>Software Engineer</td>
                                            <td>2017-sekarang</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>Nama Alumni</td>
                                            <td>Teknisi Jaringan</td>
                                            <td>2015-2019</td>
                                          </tr>
                                        </tbody>
                                      </table>
                                     </div>
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>

<script type="text/javascript">
   function alumni(id) {
      $.ajax({
        url: "<?php echo base_url('alumni/Pengguna/getAlumniByPengguna') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          console.table(data);
          $('#nama').text(data.nama);
          
          $('#modalDetail').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('gagal mengambil data');
        }
      });
    }
</script>