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
                      <h3 class="h4">Berita Saya</h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Judul</th>
                              <th>Kategori</th>
                              <th>Isi</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                             <?php 
                              $no = 1;
                              foreach($berita as $b){ 
                              ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $b->judul ?></td>
                              <td><?php echo $b->kategori ?></td>
                              <td><?php echo substr($b->isi,217,250); ?></td>
                              <td>
                                <div class="btn-group btn-group-toggle">
                                  <form action="<?php echo base_url('alumni/Berita/updateBerita/'.$b->id) ?>"><button type="submit" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></button></form>
                                  <label class="btn btn-danger btn-sm" data-toggle="modal" data-target="#ModalHapus" onclick="set_id(<?php echo $b->id ?>)">
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

        <script type="text/javascript">
           var p_id;
            function set_id(id) {
              p_id = id;
            }

            function deletep(){
              window.location.href =  "<?php echo base_url();?>alumni/Berita/hapusBeritaSaya/"+p_id;
            }
        </script>
