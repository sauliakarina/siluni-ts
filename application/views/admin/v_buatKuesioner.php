  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Form Kuesioner</h2>
            </div>
          </header>
           <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Profil') ?>">Biodata</a></li>
              <li class="breadcrumb-item"><a href="<?php echo site_url('alumni/Profil/riwayatPekerjaan') ?>">Riwayat Pekerjaan</a></li>
            </ul>
          </div>

         <!-- Forms Section-->
          <section class="forms"> 
            <div class="container-fluid">
              <div class="row">
                 <!-- Horizontal Form-->
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Jenis Kuesioner</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal">
                        <div class="form-group">
                          <input type="email" placeholder="Masukkan jenis kuesioner" class="form-control">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Buat Form Kuesioner</h3>
                      <div class="dropdown ml-auto">
                        <button class="btn btn-info dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Tambah Pertanyaan
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#isianModal">Isian</a>
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pilihanModal">Pilihan</a>
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#gandaModal">Ganda</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <p></p>
                        <div class="line"></div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> 
  </body>
  
   <!-- Modal Isian-->
                      <div id="isianModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Pertanyaan Isian</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <form>
                                <div class="form-group">
                                  <label>Pertanyaan</label>
                                  <input type="email" placeholder="Masukkan pertanyaan" class="form-control">
                                </div>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                          </div>
                        </div>
                      </div>

                        <!-- Modal Pilihan-->
                      <div id="pilihanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Pertanyaan Pilihan</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <form>
                                <div class="form-group">
                                  <label>Pertanyaan</label>
                                  <input type="email" placeholder="Masukkan pertanyaan" class="form-control">
                                </div>
                                <table class="table table-condensed">
                                  <tbody id="isianForm">
                                    <tr>
                                      <td><input type="text" placeholder="Tuliskan jawaban" class="form-control"></td>
                                      <td><button class="btn btn-small btn-info" onclick="pilihanForm(); return false"><i class="fas fa-plus-circle"></i></button></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                          </div>
                        </div>
                      </div>
        <!-- Modal Ganda-->
                      <div id="gandaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Pertanyaan Pilihan Ganda</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <form>
                                <div class="form-group">
                                  <label>Pertanyaan</label>
                                  <input type="email" placeholder="Masukkan pertanyaan" class="form-control">
                                </div>
                                <table class="table table-condensed">
                                  <tbody id="gandaForm">
                                    <tr>
                                      <td><input type="text" placeholder="Tuliskan jawaban" class="form-control"></td>
                                      <td><button class="btn btn-small btn-info" onclick="gandaForm(); return false"><i class="fas fa-plus-circle"></i></button></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </form>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="button" class="btn btn-primary">Simpan</button>
                            </div>
                          </div>
                        </div>
                      </div>

</html>

<script type="text/javascript">
  var i = 0;
      function pilihanForm() {
        var table = document.getElementById('isianForm');
        
        //membuat element
        var row = document.createElement('tr');
        var col = document.createElement('td');
        var col2 = document.createElement('td');

        //membuat elemen tabel
        table.appendChild(row);
        row.appendChild(col);
        row.appendChild(col2);

        //input pertanyaan
        var jawaban = document.createElement('input');
        jawaban.setAttribute('name', 'jawaban[' + i + ']');
        jawaban.setAttribute('class', 'form-control');
        jawaban.setAttribute('placeholder', 'Tuliskan jawaban');

        //input button hapus
        var hapus = document.createElement('span');
        hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>';
        hapus.onclick = function () {
            row.parentNode.removeChild(row);
        };

        col.appendChild(jawaban);
        col2.appendChild(hapus);


        i++;
      }

      var i = 0;
      function gandaForm() {
        var table = document.getElementById('gandaForm');
        
        //membuat element
        var row = document.createElement('tr');
        var col = document.createElement('td');
        var col2 = document.createElement('td');

        //membuat elemen tabel
        table.appendChild(row);
        row.appendChild(col);
        row.appendChild(col2);

        //input pertanyaan
        var jawaban = document.createElement('input');
        jawaban.setAttribute('name', 'jawaban[' + i + ']');
        jawaban.setAttribute('class', 'form-control');
        jawaban.setAttribute('placeholder', 'Tuliskan jawaban');

        //input button hapus
        var hapus = document.createElement('span');
        hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>';
        hapus.onclick = function () {
            row.parentNode.removeChild(row);
        };

        col.appendChild(jawaban);
        col2.appendChild(hapus);


        i++;
      }
</script>