<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header"  style="background-color: #EFE037">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">Jawaban Kuesioner</h2>
    </div>
  </header>
  <!-- Breadcrumb-->
  <div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item active">Tables</li>
    </ul>
  </div>
  <section class="tables">   
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4"><?php echo $this->m_alumni->getAlumniByID($alumniID)->nama ?></h3>
            </div>
            <div class="card-body">
              <div class="table-responsive">                       
                <table class="table  table-hover table-bordered">
                  <thead class="thead-dark">
                    <tr>
                      <th>Pertanyaan</th>
                      <th>Jawaban</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($kuesioner as $k) { ?>
                    <tr>
                      <td colspan="2" scope="row"><b><?php echo $k->nama_kuesioner ?></b></td>
                    </tr>
                      <?php $pertanyaan = $this->m_kuesioner->getPertanyaanNonSkalaByKuesionerID($k->id);
                      foreach ($pertanyaan as $p) { ?>
                        <tr>
                          <td width="600px"><?php echo $p->pertanyaan ?></td>
                          <td><?php echo $this->m_kuesioner->getJawabanAlumni($p->id, $alumniID)->jawaban ?></td>
                        </tr>
                      <?php } ?>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    