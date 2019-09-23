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
                            <tr>
                              <th scope="row">1</th>
                              <td>Rahman, S.Kom</td>
                              <td>PT PLN Disjaya</td>
                              <td>Teknologi Informasi</td>
                              <td>rahman@pln.co.id</td>
                              <td>
                                <button type="button" data-toggle="modal" data-target="#modalDetail" class="btn btn-info btn-sm"><i class="fas fa-info-circle"></i></button>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Budiyono, S.Kom</td>
                              <td>PT Angkasa Pura</td>
                              <td>Jaringan</td>
                              <td>budiyono@gmail.com</td>
                              <td>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-info btn-sm">
                                    <input type="radio" name="options"><i class="fas fa-info-circle"></i>
                                  </label>
                                </div>
                              </td>
                            </tr>
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
                                            <td>Saulia</td>
                                            <td>Web Developer</td>
                                            <td>2019-sekarang</td>
                                          </tr>
                                          <tr>
                                            <th scope="row">2</th>
                                            <td>Karina</td>
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