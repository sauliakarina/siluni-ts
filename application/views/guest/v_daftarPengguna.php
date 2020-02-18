
  <main>
    <div class="container">
      <div class="row" style="margin-top: 30px">
        <div class="col-md-12">
               <h3>Daftar Pengguna Alumni <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?></h3>
      </div><!-- col-12 -->
    </div> <!-- row -->
      <div class="row" style="margin-top: 40px">
        <div class="col-md-12">
          <table id="example" class="table table-hover">
            <thead class="white-text" style="background-color:#006F45 ">
              <tr>
                <th>No</th>
                <th>Instansi</th>
                <th>Skala Instansi</th>
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
                <td><?php echo $p->nama_instansi ?></td>
                <td><?php echo $p->jenis_instansi ?></td>
                <td><?php echo $p->alamat ?></td>
                <td><ul style="list-style-type:circle;">
                  <?php 
                  $posisi= $this->m_pengguna->getPekerjaanByInstansiID($p->id);
                    foreach($posisi as $ps) { ?>
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

   $('#example').dataTable({
    "ordering": false
  });
    </script>
  </main>
</body>