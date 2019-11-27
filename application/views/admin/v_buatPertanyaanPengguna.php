  <!-- head -->
         <!-- Side Navbar -->
        <div class="content-inner">
          <!-- Page Header-->
           <header class="page-header" style="background-color: #EFE037">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Form Kuesioner Pengguna</h2>
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
                <!-- Basic Form-->
                <div class="col-lg-12">
                  <div class="card">
                    <form method="post" action="<?php echo base_url(); ?>admin/Kuesioner/simpanPertanyaan">
                    <div class="card-header d-flex align-items-center">
                      <div class="dropdown">
                        <button class="btn btn-info dropdown-toggle btn-sm" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Tambah Pertanyaan
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#isianModal">Isian</a>
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#pilihanModal">Pilihan</a>
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#gandaModal">Ganda</a>
                          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#skalaModal">Skala</a>
                        </div>
                      </div>
                       <div class="form-group ml-auto">
                            <button type="submit" class="btn btn-primary ml-auto">Simpan</button>
                        </div>
                    </div>
                    <div class="card-body">
                      <?php foreach ($pertanyaan as $p) { 
                          if ($p->jenis == 'skala') { ?>
                            <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th>No</th>
                                  <th><?php echo $p->pertanyaan ?></th>
                                  <?php 
                                  $skalaNilai = $this->m_kuesioner->getSkalaByPertanyaanID($p->id);
                                  foreach ($skalaNilai as $sn) { ?>
                                    <th><?php echo $sn->nilai ?></th>
                                  <?php } //foreach skala nilai ?>
                                </tr>
                              </thead>
                              <tbody>
                                <?php $no = 1;
                                  $pertanyaanSkala = $this->m_kuesioner->getPertanyaanSkalaByPertanyaanID($p->id);
                                  foreach ($pertanyaanSkala as $ps) {
                                 ?>
                                <tr>
                                  <th scope="row"><?php echo $no++; ?></th>
                                  <th><?php echo $ps->pertanyaan ?></th>
                                  <?php 
                                  $skalaNilai = $this->m_kuesioner->getSkalaByPertanyaanID($p->id);
                                  foreach ($skalaNilai as $sn) { ?>
                                    <th><input type="radio" value="<?php echo $sn->nilai ?>" name="a" class="radio-template"></th>
                                  <?php } //foreach skala nilai ?>
                                </tr>
                              <?php } //foreach pertanyaan skala ?>
                              </tbody>
                            </table>
                          <?php } // if skala ?>
                          
                        <div class="line" style="margin-top: 50px"></div>
                        <div class="form-group">
                          <label class="form-control-label">Saran Bapak/Ibu untuk perbaikan lulusan Program Studi Ilmu Komputer UNJ:</label>
                           <div class="i-checks">
                              <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                              <label for="checkboxCustom1">Option one</label>
                            </div>
                             <div class="i-checks">
                              <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                              <label for="checkboxCustom1">Option one</label>
                            </div>
                        </div>
                      <?php } // foreach pertanyaan ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section> 
  </body>
  
  <!-- Modal Edit-->
  <div id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Sunting Pertanyaan</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <?php echo form_open_multipart('admin/Kuesioner/exeEditIsian'); ?>
                                <div class="form-group">
                                  <label>Pertanyaan</label>
                                  <input type="text" id="pertanyaanIsian" value="<?php echo $p->pertanyaan ?>" class="form-control" name="pertanyaanIsian">
                                  <input type="hidden" id="id" value="<?php echo $p->id ?>" class="form-control" name="id">
                                   <input type="hidden" id="kuesionerID" value="<?php echo $p->kuesionerID ?>" class="form-control" name="kuesionerID">
                                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;float: right;">Simpan</button>
                                </div>
                            </div>
                            </form>
                          </div>
                        </div>
      </div>


   <!-- Modal Isian-->
  <div id="isianModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
          <div role="document" class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Buat Pertanyaan Isian</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <form method="post" action="<?php echo base_url();?>admin/Kuesioner/addIsian">
                                <div class="form-group">
                                  <label>Pertanyaan</label>
                                  <input type="text" placeholder="Masukkan pertanyaan" class="form-control" name="pertanyaan">
                                  <input type="hidden" class="form-control" name="kuesionerID" value="<?php echo $kuesioner->id ?>">
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

 <!-- Modal Pilihan-->
 <div id="pilihanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Pertanyaan Jawaban Pilihan</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Responden hanya bisa memilih salah satu jawaban</p>
                              <form method="post" action="<?php echo base_url();?>admin/Kuesioner/addPilihan">
                                <div class="form-group">
                                  <label></label>
                                  <input type="text" placeholder="Masukkan pertanyaan" class="form-control" name="pertanyaan">
                                  <input type="hidden" class="form-control" name="kuesionerID" value="<?php echo $kuesioner->id ?>">
                                </div>
                                <table class="table table-condensed">
                                  <tbody id="isianForm">
                                    <tr>
                                      <td><input placeholder="Tuliskan jawaban" class="form-control" name="jawaban[0]"></td>
                                      <td><button class="btn btn-small btn-info" onclick="pilihanForm(); return false"><i class="fas fa-plus-circle"></i></button></td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>

        <!-- Modal Ganda-->
                      <div id="gandaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Buat Pertanyaan Jawaban Pilihan Ganda</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Responden dapat memilih lebih dari satu jawaban</p>
                              <form method="post" action="<?php echo base_url();?>admin/Kuesioner/addGanda">
                                <div class="form-group">
                                  <label></label>
                                  <input type="text" placeholder="Masukkan pertanyaan" class="form-control" name="pertanyaan">
                                   <input type="hidden" class="form-control" name="kuesionerID" value="<?php echo $kuesioner->id ?>">
                                </div>
                                <table class="table table-condensed">
                                  <tbody id="gandaForm">
                                    <tr>
                                      <td><input type="text" placeholder="Tuliskan jawaban" class="form-control" name="jawaban[0]"></td>
                                      <td><button class="btn btn-small btn-info" onclick="gandaForm(); return false"><i class="fas fa-plus-circle"></i></button></td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>

 <!-- Modal Skala-->
                      <div id="skalaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                        <div role="document" class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 id="exampleModalLabel" class="modal-title">Buat Pertanyaan Jawaban Skala</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p></p>
                              <form method="post" action="<?php echo base_url();?>admin/Kuesioner/addSkala">
                                <div class="form-group">
                                  <label>Jenis Pertanyaan</label>
                                  <input type="text" placeholder="contoh: Jenis Kemampuan" class="form-control" name="pertanyaan_skala">
                                   <input type="hidden" class="form-control" name="kuesionerID" value="<?php echo $kuesioner->id ?>">
                                </div>
                                <table class="table table-condensed">
                                  <tbody id="skalaNilaiForm">
                                    <tr>
                                      <td><input type="text" placeholder="Masukan Skala Penilaian" class="form-control" name="skalaNilai[0]"></td>
                                      <td><button class="btn btn-small btn-info" onclick="skalaNilaiForm(); return false"><i class="fas fa-plus-circle"></i></button></td>
                                    </tr>
                                  </tbody>
                                </table>
                                <table class="table table-condensed">
                                  <tbody id="skalaPertanyaanForm">
                                    <tr>
                                      <td><input type="text" placeholder="Tuliskan pertanyaan" class="form-control" name="skalaPertanyaan[0]"></td>
                                      <td><button class="btn btn-small btn-info" onclick="skalaPertanyaanForm(); return false"><i class="fas fa-plus-circle"></i></button></td>
                                    </tr>
                                  </tbody>
                                </table>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                              <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                          </form>
                          </div>
                        </div>
                      </div>

  <!-- Modal Hapus-->
        <div id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
            <div role="document" class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 id="exampleModalLabel" class="modal-title">Hapus Pertanyaan</h4>
                              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                            </div>
                            <div class="modal-body">
                              <p>Apakah anda yakin ingin menghapus pertanyaan ini?</p>
                              <div class="text-center">
                              <i class="far fa-times-circle fa-4x mb-3 animated bounce" style="color: #D60C0C"></i>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" data-dismiss="modal" class="btn btn-secondary">Tutup</button>
                              <button type="submit" class="btn btn-danger" onclick='deletep()'>Hapus</button>
                            </div>
                          </div>
              </div>
         </div>

</html>

<script type="text/javascript">
  var i = 1;
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
        jawaban.setAttribute('name', 'jawaban['+i+']');
        jawaban.setAttribute('class', 'form-control');
        jawaban.setAttribute('placeholder', 'Tuliskan jawaban');

        //input button hapus
        var hapus = document.createElement('span');

        col.appendChild(jawaban);
        col2.appendChild(hapus);

        hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>';
        hapus.onclick = function () {
            row.parentNode.removeChild(row);
        };


        i++;
      }

      var j = 1;
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
        jawaban.setAttribute('name', 'jawaban[' + j + ']');
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


        j++;
      }

      var k = 1;
      function skalaNilaiForm() {
        var table = document.getElementById('skalaNilaiForm');
        
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
        jawaban.setAttribute('name', 'skalaNilai[' + k + ']');
        jawaban.setAttribute('class', 'form-control');
        jawaban.setAttribute('placeholder', 'Tuliskan Skala Penilaian');

        //input button hapus
        var hapus = document.createElement('span');
        hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>';
        hapus.onclick = function () {
            row.parentNode.removeChild(row);
        };

        col.appendChild(jawaban);
        col2.appendChild(hapus);


        k++;
      }

      var l = 1;
      function skalaPertanyaanForm() {
        var table = document.getElementById('skalaPertanyaanForm');
        
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
        jawaban.setAttribute('name', 'skalaPertanyaan[' + l + ']');
        jawaban.setAttribute('class', 'form-control');
        jawaban.setAttribute('placeholder', 'Tuliskan Pertanyaan');

        //input button hapus
        var hapus = document.createElement('span');
        hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>';
        hapus.onclick = function () {
            row.parentNode.removeChild(row);
        };

        col.appendChild(jawaban);
        col2.appendChild(hapus);


        l++;
      }

      function editIsian(id) {

      $.ajax({
        url: "<?php echo base_url('admin/Kuesioner/getPertanyaan/') ?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('[name="id"]').val(data.id);
          $('[name="pertanyaanIsian"]').val(data.pertanyaan);
          $('[name="kuesionerID"]').val(data.kuesionerID);
          
          $('#ModalEdit').modal('show');
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.log('gagal mengambil data');
        }
      });
    }

     var p_id;
    function set_id(id) {
        p_id = id;

    }

   function deletep(){
        window.location.href =  "<?php echo base_url();?>admin/Kuesioner/deletePertanyaan/"+p_id;
    }
</script>