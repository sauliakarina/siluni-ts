        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Data Dosen</h2>
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
                      <h3 class="h4">Dosen Ilmu Komputer</h3>
                      <button type="button" class="btn btn-primary ml-auto btn-sm"  data-toggle="modal" data-target="#ModalTambah"><i class="fas fa-user-plus"></i> Tambah Data</button>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>NIDN</th>
                              <th>Nama</th>
                              <th>Jenis Kelamin</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $no = 1;
                              foreach($dosen as $d){ 
                              ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $d->nidn ?></td>
                              <td><?php echo $d->nama ?></td>
                              <td><?php echo $d->jenis_kelamin ?></td>
                              <td>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-info btn-sm">
                                    <input type="radio" name="options"><i class="fas fa-info-circle"></i>
                                  </label>
                                  <label class="btn btn-warning btn-sm">
                                    <input type="radio" name="options"><i class="fas fa-user-edit"></i>
                                  </label>
                                  <label class="btn btn-danger btn-sm">
                                    <input type="radio" name="options"><i class="fas fa-trash-alt"></i>
                                  </label>
                                </div>
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

  <!-- Modal Tambah-->
                      <div id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Tambah Dosen</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <form action="<?php echo base_url();?>admin/Dosen/exeAdd" method="post">
                                <div class="form-group">
                                  <label>Nama</label>
                                  <input type="text" placeholder="" class="form-control" name="nama" id="nama">
                                </div>
                                <div class="form-group">
                                  <label>NIDN</label>
                                  <input type="text" placeholder="" class="form-control" name="nidn" id="nidn">
                                </div>
                              <div class="form-group">
                                <label>Jenis Kelamin</label>
                                  <select name="jenis_kelamin" class="form-control mb-3" id="jenis_kelamin">
                                    <option></option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                  </select>
                              </div>
                                <div class="form-group">
                                <label>Program Studi</label>
                                  <select name="prodi" class="form-control mb-3" id="prodi">
                                    <option value="<?php echo $prodiID ?>"><?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?></option>
                                     <?php 
                                     foreach($prodi as $p){ 
                                     echo "<option  value='$p->id'>$p->nama_prodi</option>";
                                     }
                                  ?>
                                  </select>
                              </div>
                                <div class="form-group">       
                                  <label>Username</label>
                                  <input type="text" placeholder="" class="form-control" name="username" id="username">
                                  <small class="form-text" style="color: red`">Isi dengan NIDN.</small>
                                </div>
                                <div class="form-group">       
                                  <label>Password</label>
                                  <input type="password" placeholder="" class="form-control" name="password" id="password">
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                            </div>
                          </div>
                        </div>
                      </div>
<!-- modal tambah -->


<script type="text/javascript">
</script>