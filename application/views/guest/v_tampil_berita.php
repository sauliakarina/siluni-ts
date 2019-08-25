<main>
	<div class="container">
		<div class="row" style="margin-top: 30px">
			<div class="col-md-12">
				
				<!--Card-->
				<div class="card">
					<?php foreach( $berita as $u){ ?>
					 <?php //echo anchor('profil_user/tampil/'.$u->alumni_nrm,$this->m_berita->get_alumni($u->alumni_nrm)->nama); ?>
					<h2 class="card-title" style="margin-top: 20px;margin-left: 10px"><?php echo $u->judul ?></h2>
					<p style="margin-left: 10px">Ditulis oleh : <?php if ($u->userID == '1' ) {
                      echo "Admin";
                    } else { echo $this->m_berita->get_alumni($u->userID)->nama;} ?>  | Dipublikasikan pada <?php echo $u->tanggal_dibuat?></p>
					
				    <!--Card image-->
				    <center><img class="img-fluid" src="<?php echo base_url();?>/assets/siluni/images/berita/<?php echo $u->gambar_berita ?>" alt="Card image cap" style="width:700px;height: 350px"></center>

				    <!--Card content-->
				    <div class="card-body">
				    	
				        <!--Title-->
				        
				        <!--Text-->
				        <p class="card-text"><?php echo $u->isi ?></p>
				        
				    </div>
				    <?php } ?>
				</div>
				<!--/.Card-->

			</div> <!-- col -->
			
		</div> <!-- row -->
	</div> <!-- container -->
</main>