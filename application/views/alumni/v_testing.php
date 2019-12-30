  <!-- Side Navbar -->
<div class="content-inner">
  <!-- Page Header-->
  <header class="page-header" style="background-color: #EFE037">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">Beranda</h2>
    </div>
  </header>
   <!-- Dashboard Counts Section-->
  <section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
      <div class="row bg-white has-shadow">
        <form method="post" action="exeTesting">
      <?php 
      $j=2;
      for ($i=0; $i <1 ; $i++) { 
       ?>
         <div class="form-group row">
          <label class="col-sm-3 form-control-label">Profesi</label>
           <div class="col-sm-9">
              <input type="text" class="form-control"  name="instansiID_2" required>
           </div>
        </div>
    <?php
    $j++;
     } ?>
     <button type="submit">Simpan</button>
        </form>
        <?php for ($i=0; $i <2 ; $i++) { 
         echo "instansi_".$i;
        } ?>
      </div>
    </div>
  </section>
</div>