<style type="text/css">
  /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Kelola Kuesioner Alumni</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin/Kuesioner/kuesionerAlumni') ?>">Alumni</a></li>
              <li class="breadcrumb-item active"><a href="<?php echo site_url('admin/Kuesioner/kuesionerPengguna') ?>">Pengguna</a></li>
            </ul>
          </div>

           <!-- alert box -->
          <div class="alert alert-warning alert-dismissible" role="alert">
          <button type="button" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          <p style="font-family: verdana; font-size: 11pt">Kuesioner yang aktif akan ditampilkan pada halaman kuesioner alumni</p>
        </div>


          <section class="tables">   
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Kategori Kuesioner</h3>
                      <button type="button" class="btn btn-primary ml-auto btn-sm" data-toggle="modal" data-target="#addKuesioner"><i class="fas fa-plus-circle"></i> Buat Kuesioner</button>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Kuesioner</th>
                              <th>Tanggal Dibuat</th>
                              <th>Status</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">1</th>
                              <td><a href="form.html">Pekerjaan</a></td>
                              <td>9 Juli 2019</td>
                              <td><button type="button" class="btn btn-outline-danger btn-sm">Nonaktifkan</button></td>
                              <!-- 
                              <td style="color: blue"> Aktif<br>
                                 <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                              </label>
                              </td> -->
                              <td>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <!-- <label class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModalRetracer">
                                    <input type="radio" name="options"><i class="fas fa-sync"></i>
                                  </label> -->
                                  <label class="btn btn-warning btn-sm">
                                    <input type="radio" name="options"><i class="far fa-edit"></i>
                                  </label>
                                  <label class="btn btn-danger btn-sm">
                                    <input type="radio" name="options"><i class="fas fa-trash-alt"></i>
                                  </label>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td><a href="form.html">Melanjutkan Pendidikan</a></td>
                              <td>27 Juni 2019</td>
                              <td><div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-outline-info btn-sm">
                                    <input type="radio" name="options">Aktifkan
                                  </label>
                                </div></td>
                              <td>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                  <label class="btn btn-warning btn-sm">
                                    <input type="radio" name="options"><i class="far fa-edit"></i>
                                  </label>
                                  <label class="btn btn-danger btn-sm">
                                    <input type="radio" name="options"><i class="fas fa-trash-alt"></i>
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
 
                <!-- Modal Retracer-->
                    <div id="ModalRetracer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-body">
                              <h6>Apakah anda yakin ingin penulusuran ulang kuesioner ini?</h6>
                              <div class="text-center">
                              <i class="fas fa-sync fa-4x mb-3 animated bounce" style="color: #1CC4C6;margin-top: 8px"></i>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                              <button type="button" class="btn btn-info">Ya</button>
                            </div>
                          </div>
                        </div>
                      </div>

  <!-- Modal add kuesioner-->
  <div id="addKuesioner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
          <div role="document" class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Buat Kuesioner</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <form method="post" action="<?php echo base_url();?>admin/Kuesioner/addKuesionerAlumni">
                                <div class="form-group">
                                  <label>Nama Kuesioner</label>
                                  <input type="text" class="form-control" name="nama_kuesioner">
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                            </div>
                          </div>
                        </div>
    </div>