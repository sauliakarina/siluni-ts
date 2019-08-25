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
                      <h3 class="h4">Nama Kuesioner</h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal">
                        <div class="form-group">
                          <input type="email" placeholder="Masukkan nama kuesioner" class="form-control">
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
                          <a class="dropdown-item" href="#" onclick="isianForm(); return false;">Isian</a>
                          <a class="dropdown-item" href="#" onclick="pilihanForm(); return false;">Pilihan</a>
                          <a class="dropdown-item" href="#" onclick="gandaForm(); return false;">Ganda</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <p></p>
                      <table class="table table-condensed">
                        <tbody id="myForm">
                          <tr>
                            
                          </tr>
                        </tbody>
                        <tfoot>
                          <tr>
                            <td></td>
                            <td>
                            </td>
                          </tr>
                        </tfoot>
                      </table>
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
  <script type="text/javascript">
   
   var i = 0;
      function isianForm() {
        var table = document.getElementById('myForm');
        
        //membuat element
        var row = document.createElement('tr');
        var col = document.createElement('td');
        var col2 = document.createElement('td');
        var span = document.createElement('span');
        span.innerHTML = '<h7>Pertanyaan Isian</h7>';

        //membuat elemen tabel
        table.appendChild(span);
        table.appendChild(row);
        row.appendChild(col);
        row.appendChild(col2);

        //input pertanyaan
        var pertanyaan = document.createElement('input');
        pertanyaan.setAttribute('name', 'pertanyaan[' + i + ']');
        pertanyaan.setAttribute('class', 'form-control');
        pertanyaan.setAttribute('placeholder', 'Tuliskan pertanyaan');

        var hapus = document.createElement('span');

        col.appendChild(pertanyaan);
        col2.appendChild(hapus);

        hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>';
        hapus.onclick = function () {
            row.parentNode.removeChild(span);
            row.parentNode.removeChild(row);
        };

        i++;
      }

      function pilihanForm() {
        var table = document.getElementById('myForm');
        
        //membuat element
        var row = document.createElement('tr');
        var col = document.createElement('td');
        var col2 = document.createElement('td');

        var span = document.createElement('span');
        span.innerHTML = '<h7>Pertanyaan Pilihan <i class="far fa-circle"></i></h7>';

        //membuat elemen tabel
        table.appendChild(span);
        table.appendChild(row);
        row.appendChild(col);
        row.appendChild(col2);

        //row 1
        //input pertanyaan
        var pertanyaan = document.createElement('input');
        pertanyaan.setAttribute('name', 'pertanyaan[' + i + ']');
        pertanyaan.setAttribute('class', 'form-control');
        pertanyaan.setAttribute('placeholder', 'Tuliskan pertanyaan');

        var hapus = document.createElement('span');

        var hapusJawaban = document.createElement('span');
        hapusJawaban.innerHTML = '<small class="form-text"><a href="#" style="margin-top:3px"><i class="fas fa-trash-alt"></i> Jawaban</a></small>';
        var tambahJawaban = document.createElement('span');
        tambahJawaban.innerHTML = '<small class="form-text"><a href="#" style="margin-top:3px;margin-right:8px"><i class="fas fa-plus-circle"></i> Jawaban</a></small>';
        
        tambahJawaban.onclick = function() {
          var jawaban2 = document.createElement('input');
          jawaban2.setAttribute('name', 'pilihan_jawaban[' + i + ']');
          jawaban2.setAttribute('class', 'form-control form-control-sm');
          jawaban2.setAttribute('type', 'text');
          jawaban2.setAttribute('placeholder', 'Tuliskan pilihan jawaban');
          jawaban2.setAttribute('style','margin-top:10px');
          col.appendChild(jawaban2);
        }

        hapusJawaban.onclick = function() {
          row.parentNode.removeChild(jawaban2);
        }

        col.appendChild(pertanyaan);
        col.appendChild(tambahJawaban);
        col.appendChild(hapusJawaban);
        col2.appendChild(hapus);

        hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>';
        hapus.onclick = function () {
            row.parentNode.removeChild(span);
            row.parentNode.removeChild(row);
        };

        var jawaban = document.createElement('input');
        jawaban.setAttribute('name', 'pilihan_jawaban[' + i + ']');
        jawaban.setAttribute('class', 'form-control form-control-sm');
        jawaban.setAttribute('type', 'text');
        jawaban.setAttribute('placeholder', 'Tuliskan pilihan jawaban');
        jawaban.setAttribute('style','margin-top:10px');

        // Untuk ke kanan in 
        jawaban.setAttribute('style','margin-left:10px');

        col.appendChild(jawaban);


        i++;
      }

      function gandaForm() {
        var table = document.getElementById('myForm');
        
        //membuat element
        var row = document.createElement('tr');
        var col = document.createElement('td');
        var col2 = document.createElement('td');

        var span = document.createElement('span');
        span.innerHTML = '<h7>Pertanyaan Pilihan Ganda <i class="far fa-check-square"></i></h7>';

        //membuat elemen tabel
        table.appendChild(span);
        table.appendChild(row);
        row.appendChild(col);
        row.appendChild(col2);

        //row 1
        //input pertanyaan
        var pertanyaan = document.createElement('input');
        pertanyaan.setAttribute('name', 'pertanyaan[' + i + ']');
        pertanyaan.setAttribute('class', 'form-control');
        pertanyaan.setAttribute('placeholder', 'Tuliskan pertanyaan');

        var hapus = document.createElement('span');

        var hapusJawaban = document.createElement('span');
        hapusJawaban.innerHTML = '<small class="form-text"><a href="#" style="margin-top:3px"><i class="fas fa-trash-alt"></i> Jawaban</a></small>';
        var tambahJawaban = document.createElement('span');
        tambahJawaban.innerHTML = '<small class="form-text"><a href="#" style="margin-top:3px;margin-right:8px"><i class="fas fa-plus-circle"></i> Jawaban</a></small>';
        
        tambahJawaban.onclick = function() {
          var jawaban2 = document.createElement('input');
          jawaban2.setAttribute('name', 'pilihan_jawaban[' + i + ']');
          jawaban2.setAttribute('class', 'form-control form-control-sm');
          jawaban2.setAttribute('type', 'text');
          jawaban2.setAttribute('placeholder', 'Tuliskan pilihan ganda');
          jawaban2.setAttribute('style','margin-top:10px');
          col.appendChild(jawaban2);
        }

        hapusJawaban.onclick = function() {
          row.parentNode.removeChild(jawaban2);
        }

        col.appendChild(pertanyaan);
        col.appendChild(tambahJawaban);
        col.appendChild(hapusJawaban);
        col2.appendChild(hapus);

        hapus.innerHTML = '<button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>';
        hapus.onclick = function () {
            row.parentNode.removeChild(span);
            row.parentNode.removeChild(row);
        };

        var jawaban = document.createElement('input');
        jawaban.setAttribute('name', 'pilihan_jawaban[' + i + ']');
        jawaban.setAttribute('class', 'form-control form-control-sm');
        jawaban.setAttribute('type', 'text');
        jawaban.setAttribute('placeholder', 'Tuliskan pilihan ganda');
        jawaban.setAttribute('style','margin-top:10px');

        col.appendChild(jawaban);


        i++;
      }
  </script>
</html>