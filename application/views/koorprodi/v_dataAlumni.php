        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Alumni</h2>
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
                      <h3 class="h4">Alumni <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?></h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table id="myTable" class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>NIM</th>
                              <th>Angkatan</th>
                              <th>Tahun Lulus</th>
                              <th>Pekerjaan</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $no = 1;
                              foreach($alumni as $d){ 
                             ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $d->nama ?></td>
                              <td><?php echo $d->nim ?></td>
                              <td><?php echo $d->tahun_masuk ?></td>
                              <td><?php echo $d->tahun_lulus ?></td>
                              <td>
                                  <a type="button" href="<?php echo site_url('koorprodi/Alumni/pekerjaan/'.$d->id) ?>" class="btn btn-info btn-sm">Lihat</a>
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

<script type="text/javascript">
  $(document).ready( function () {
    $('#myTable').DataTable(
        {
        "ordering": false,
    }
      );
} );
</script>