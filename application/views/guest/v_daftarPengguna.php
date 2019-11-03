
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
              <?php $no=1;
                foreach($pengguna as $p) {
               ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $this->m_master->getInstansiByID($p->id_instansi)->nama_instansi ?></td>
                <td><?php echo $this->m_master->getInstansiByID($p->id_instansi)->alamat ?></td>
                <td><ul style="list-style-type:circle;">
                  <?php $posisi = $this->m_pengguna->getPekerjaanByPenggunaID($p->id);
                    foreach($posisi as $ps) {
                   ?>
                    <li><?php echo $ps->posisi ?></li>
                  <?php } ?>
                    </ul>
                </td>
              </tr>
            <?php } ?>
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