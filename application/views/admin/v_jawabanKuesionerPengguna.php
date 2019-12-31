<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/DataTables/buttons.dataTables.min.css">
<script src="<?php echo base_url(); ?>assets/DataTables/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/buttons.flash.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/jszip.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/buttons.html5.min.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/DataTables/buttons.print.min.js" ></script>


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
                      <h3 class="h4">Pengguna Alumni <?php echo $this->m_master->getProdiByID($prodiID)->nama_prodi ?></h3>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">                       
                        <table id="myTable" class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>No</th>
                              <th>Nama</th>
                              <th>Divisi</th>
                              <th>Instansi</th>
                            <!--   <th>ID</th> -->
                              <th>Tanggal Pengisian</th>
                              <th>Jawaban</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php 
                              $no = 1;
                              foreach($pengguna as $d){ 
                              ?>
                            <tr>
                              <th scope="row"><?php echo $no++ ?></th>
                              <td><?php echo $d->pengguna_nama ?></td>
                              <td><?php echo $d->divisi ?></td>
                              <td>
                                <?php if ($d->id_instansi == '0') {
                                      echo "non instansi";
                                    } else {
                                      echo $this->m_master->getInstansiByID($d->id_instansi)->nama_instansi;
                                    }
                              ?>
                              </td>
                              <!-- <td><?php echo $d->id ?></td> -->
                              <td><?php echo $d->timestamp ?></td>
                              <td>
                                <form method='' action="<?php echo base_url('admin/Kuesioner/lihatJawabanPengguna/'.$d->id_pengguna) ?>">
                                 <button type="submit" name="options" class="btn btn-info btn-sm" >Lihat</button>
                                </form>
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
        window.location.href =  "<?php echo base_url();?>admin/Alumni/deleteAlumni/"+p_id;
    }

  $(document).ready( function () {
    $('#myTable').DataTable({
        "ordering": false,
        "select": true,
        dom: 'Bfrtip',
        buttons: [
        ]
      }); //input fungsi
  });

</script>

