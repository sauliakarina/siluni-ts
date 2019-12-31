        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Pengguna Alumni</h2>
            </div>
          </header>
  

  <section class="tables">   
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Daftar Alumni <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?></h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">                       
                <table id="myTable" class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>NIM</th>
                      <th>Tahun Lulus</th>
                      <th>Tahun Masuk</th>
                      <th>Posisi</th>
                      <th>Periode Kerja</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach (array_slice($alumni, 0, $newAlumni) as $p) {
                     ?>
                    <tr>
                      <td><?php echo $p->nama ?></td>
                      <td><?php echo $p->nim ?></td>
                      <td><?php echo $p->tahun_lulus ?></td>
                      <td><?php echo $p->tahun_masuk ?></td>
                      <td><?php echo $p->posisi ?></td>
                      <td><?php echo $p->periode_kerja ?></td>
                      <td><span class="badge badge-pill badge-danger">New</span></td>
                    </tr>
                  <?php } 
                  ?>
                  <?php
                    foreach (array_slice($alumni, $newAlumni) as $p) {
                     ?>
                    <tr>
                      <td><?php echo $p->nama ?></td>
                      <td><?php echo $p->nim ?></td>
                      <td><?php echo $p->tahun_lulus ?></td>
                      <td><?php echo $p->tahun_masuk ?></td>
                      <td><?php echo $p->posisi ?></td>
                      <td><?php echo $p->periode_kerja ?></td>
                      <td></td>
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


</script>
