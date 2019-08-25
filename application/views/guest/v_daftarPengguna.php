
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
                <th>Divisi</th>
                <th>Alamat</th>
                <th>Posisi Alumni</th>
              </tr>
            </thead>
           
            <tbody>
              <tr>
                <td>1</td>
                <td>PT PLN Disjaya</td>
                <td>Teknologi Informasi</td>
                <td>Jl. M.I. Ridwan Rais No.1, RT.7/RW.1, Gambir, Kecamatan Gambir, 
                Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110</td>
                <td><ul style="list-style-type:circle;">
                    <li>Web Developer</li>
                    <li>Jaringan</li>
                    </ul>
                </td>
              </tr>
               <tr>
                <td>2</td>
                <td>PT Kompas Media Nusantara</td>
                <td>Teknologi Informasi</td>
                <td>Menara Kompas Lantai 2, Jalan Palmerah Selatan 21, Jakarta Pusat, DKI Jakarta, Indonesia 10270</td>
                <td><ul style="list-style-type:circle;">
                    <li>Android Programmer</li>
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