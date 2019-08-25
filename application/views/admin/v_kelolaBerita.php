        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Kelola Berita</h2>
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
                      <h3 class="h4">Berita Alumni</h3>
                      <button type="button" class="btn btn-primary ml-auto btn-sm"><i class="fas fa-user-plus"></i> Tambah Data</button>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Judul</th>
                              <th>Kategori</th>
                              <th>Tanggal Dibuat</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $no = 1;
                              foreach($berita as $d){ 
                              ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $d->judul ?></td>
                              <td><?php echo $d->kategori ?></td>
                              <td><?php echo $d->tanggal_dibuat ?></td>
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
