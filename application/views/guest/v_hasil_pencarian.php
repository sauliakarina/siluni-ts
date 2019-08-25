<body>
  <main>
    <div class="container">
      <div class="row" style="margin-top: 40px">
        <div class="col-md-12">
          <h4>Hasil Pencarian Alumni</h4>
          <table id="example" class="table table-hover table-responsive">
            <thead class="white-text" style="background-color: #4C934C  ">
              <tr>
                <th>NRM</th>
                <th>Nama</th>
                <th>Tahun Masuk</th>
                <th>Tahun Lulus</th>
                <th>Prodi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            
            <tbody>
              <?php foreach ($user_alumni as $u) { ?>
              <tr>
                <td><?php echo $u->nim; ?></td>
                <td><?php echo $u->nama; ?></td>
                <td><?php echo $u->tahun_masuk; ?></td>
                <td><?php echo $u->tahun_lulus; ?></td>
                <td><?php echo $this->m_data->get_t_prodi($u->prodiID)->nama_prodi ?></td>
                <td><?php echo anchor('profil_user/tampil/'.$u->id,'Lihat Profil'); ?> </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div><!-- col-12 -->
      </div> <!-- row -->

      <div class="row" style="margin-top: 20px">
        <div class="col-md-6" align="center">
          <form class="form-inline" role="form" action="<?php echo base_url().'pencarian_alumni/index'; ?>" method="post">
            <button type="submit" class="btn btn-info" name="submit" style="margin-left: 18px; margin-top: 20px;background-color: #4C934C" >
                <i class="fa fa-chevron-left" aria-hidden="true" style="margin-right: 10px"></i> Kembali ke menu pencarian
                    </button>
          </form>
        </div><!-- col-12 -->
      </div> <!-- row -->

    </div><!-- Container -->
    <script>
      function confirmDialog() {
 return confirm('Apakah anda yakin akan menghapus user ini?')
}
 $(document).ready(function(){
    $('#example').DataTable();
});

   $('#example').dataTable({"searching":false});
    </script>
  </main>
</body>