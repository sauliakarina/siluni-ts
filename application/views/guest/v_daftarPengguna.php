
  <main>
    <div class="container">
      <div class="row" style="margin-top: 30px">
        <div class="col-md-12">
               <h3>Daftar Pengguna Alumni Ilmu Komputer</h3>
      </div><!-- col-12 -->
    </div> <!-- row -->
      <div class="row" style="margin-top: 40px">
        <div class="col-md-12">
          <table id="example" class="table table-hover table-responsive">
            <thead class="white-text" style="background-color:#006F45 ">
              <tr>
                <th>No</th>
                <th>Instansi</th>
                <th>Alamat</th>
                <th>Posisi Alumni</th>
              </tr>
            </thead>
           
            <tbody>
              <tr>
                <td>1</td>
                <td>PT Tokopedia</td>
                <td>lantai 52 Tokopedia Tower Ciputra World 2, Jl. Prof. DR. Satrio No.Kav. 11, RT.3/RW.3, Karet Semanggi, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12950</td>
                <td><ul style="list-style-type:circle;">
                    <li>Software Engineer</li>
                    </ul>
                </td>
              </tr>
               <tr>
                <td>2</td>
                <td>PT Kompas Media Nusantara</td>
                <td>Menara Kompas Lantai 2, Jalan Palmerah Selatan 21, Jakarta Pusat, DKI Jakarta, Indonesia 10270</td>
                <td><ul style="list-style-type:circle;">
                    <li>Android Programmer</li>
                    </ul>
                  </td>
              </tr>
              <tr>
                <td>3</td>
                <td>PT Docotel Teknologi</td>
                <td>Jl. KH. Hasyim Ashari No.26, RT.1/RW.7, Petojo Utara, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10130</td>
                <td><ul style="list-style-type:circle;">
                    <li>PHP Engineer</li>
                    </ul>
                  </td>
              </tr>
             <tr>
                <td>4</td>
                <td>PT Sinarmas</td>
                <td>Jl. MH Thamrin Kav 22 No.51, RT.9/RW.4, Gondangdia, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10350</td>
                <td><ul style="list-style-type:circle;">
                    <li>Java Pega Programmer</li>
                    </ul>
                  </td>
              </tr>
              <tr>
                <td>5</td>
                <td>PT Harmoni Solusi Bisnis</td>
                <td>Jl. Dempo I No.51, RT.4/RW.3, Gunung, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12120</td>
                <td><ul style="list-style-type:circle;">
                    <li>Front End Developer</li>
                    </ul>
                  </td>
              </tr>
            </tbody>
          </table>
          <div align="right"><?php
            //echo $links 
          ?></div>
        </div><!-- col-12 -->
      </div> <!-- row -->
    </div><!-- Container -->
    <script>
      $(document).ready(function(){
    $('#example').DataTable();
});
    </script>
  </main>
</body>